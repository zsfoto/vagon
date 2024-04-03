<?php
declare(strict_types=1);

namespace App\Controller\Admin;


use App\Controller\Admin\AppController;
use Cake\Core\Configure;
use Cake\Http\Exception\NotFoundException;


/**
 * PhotocategoriesPhotos Controller
 *
 * @property \App\Model\Table\PhotocategoriesPhotosTable $PhotocategoriesPhotos
 */
class PhotocategoriesPhotosController extends AppController
{

    /**
     * Initialize controller
     *
     * @return void
     */
    public function initialize(): void
    {
        parent::initialize();

	}

    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index($clearFilter = null)
    {
		$this->set('title', __('Browse the') . ': ' . __('PhotocategoriesPhotos'));

		$queryParams = $this->request->getQuery();
		$page 		 	 = '1';
		$sort 		 	 = 'id';
		$direction 	 	 = 'asc';
		$showSearchBar	 = false;
		$searchInSession = '';
		$search 	 	 = '';		

		if ($clearFilter == 'clear-filter'){
			if($this->session->check('Layout.' . $this->controller . '.search')){
				$this->session->delete('Layout.' . $this->controller . '.search');
			}
			$showSearchBar	 = true;
		}

		
		// ############ Ha nem lenne megadva az URL-ben a page QUERY paraméter, akkor beállítja ##########################		
		$page = $this->request->getQuery('page');
		if($page === null){
			return $this->redirect(['controller' => $this->controller, 'action' => 'index', '?' => array_merge(['page' => 1], $queryParams) ]);
		}
		$this->session->write('Layout.' . $this->controller . '.page', $page);
		// ########## /.Ha nem lenne megadva az URL-ben a page QUERY paraméter, akkor beállítja ##########################


		// ############################# /.SORT ORDER & PAGE ###############################
		if($this->session->check('Layout.' . $this->controller . '.queryparams')){
			$this->queryParamsInSession = json_decode($this->session->read('Layout.' . $this->controller . '.queryparams'));
		}
		
		if(isset($this->queryParamsInSession->page)){
			$page = $this->queryParamsInSession->page;
		}
		
		if(isset($this->queryParamsInSession->sort)){
			$sort = $this->queryParamsInSession->sort;
		}
		
		if(isset($this->queryParamsInSession->direction)){
			$direction = $this->queryParamsInSession->direction;
		}

		if(isset($queryParams['page'])){
			$this->queryParamsInSession->page = $queryParams['page'];
			$page = $this->queryParamsInSession->page;
		}

		if(isset($queryParams['sort'])){
			$this->queryParamsInSession->sort = $queryParams['sort'];
			$sort = $this->queryParamsInSession->sort;
		}

		if(isset($queryParams['direction'])){
			$this->queryParamsInSession->direction = $queryParams['direction'];
			$direction = $this->queryParamsInSession->direction;
		}

		if(!empty($this->queryParamsInSession)){
			$this->session->write('Layout.' . $this->controller . '.queryparams', json_encode($this->queryParamsInSession));
		}

		$this->paginate['PhotocategoriesPhotos']['order'] = [$sort => $direction];
		// ############################# /.SORT ORDER & PAGE ###############################

		// ############################# SEARCH ############################################
		$search = '';
		if($this->session->check('Layout.' . $this->controller . '.search')){
			$search = $this->session->read('Layout.' . $this->controller . '.search');
		}

		if ($this->request->is('post')) {
			$search = $this->request->getData()['search'];
			$this->session->write('Layout.' . $this->controller . '.search', $search);
		}
		// ############################# SEARCH ############################################		

		// ############################# QUERY #############################################
		if($search !== ''){
			$showSearchBar	 = true;
			$query = $this->PhotocategoriesPhotos->find()
				->contain(['Photocategories', 'Photos'])
				->where([
					'OR' => [
						'name LIKE' => '%' . $search .  '%',
						//'title LIKE' => '%' . $search .  '%',
						//'value' => (integer) $search,			// Must be convert to integer
					]
				]);
		}else{
			$query = $this->PhotocategoriesPhotos->find()->contain(['Photocategories', 'Photos']);
		}
		// ############################# /.QUERY ###########################################


		// ############################# PAGINATE ############################################
		try {
			$this->paginate['PhotocategoriesPhotos']['limit'] = $this->config['paginate_limit'];
			$photocategoriesPhotos = $this->paginate($query);
		} catch (NotFoundException $e) {
			// Do something here like redirecting to first or last page.
			// $e->getPrevious()->getAttributes('pagingParams') will give you required info.
			$paging = $e->getPrevious()->getAttributes('pagingParams')['pagingParams'];
			$requestedPage = $paging['requestedPage'];

			// Ha érvénytelen oldalra akar lapozni az URL-ben, akkor az 1. oldalra irányít át.
			if ($paging['pageCount'] < $paging['requestedPage']){
                return $this->redirect([
					'controller' => $this->controller,
					'action' => 'index',
					'?' => [
						'page'		=> 1,
						'direction'	=> $direction ?? null,
						'sort'		=> $sort ?? null,
					],
					//'#' => 3
				]);
			}
		}
		// ############################# /.PAGINATE ##########################################

        $this->set('search', $search);
        $this->set('showSearchBar', $showSearchBar);
		
		$this->set(compact('photocategoriesPhotos'));		
    }

    /**
     * View method
     *
     * @param string|null $id Photocategories Photo id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
		$this->set('title', __('View the') . ': ' . __('photocategoriesPhoto') . ' ' . __('record'));
        $photocategoriesPhoto = $this->PhotocategoriesPhotos->get($id, contain: ['Photocategories', 'Photos']);
		$this->session->write('Layout.' . $this->controller . '.LastId', $id);
		$name = $photocategoriesPhoto->name;
        $this->set(compact('photocategoriesPhoto', 'id', 'name'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
		$this->set('title', __('Add new') . ': ' . __('photocategoriesPhoto') . ' ' . __('record'));
        $photocategoriesPhoto = $this->PhotocategoriesPhotos->newEmptyEntity();
        if ($this->request->is('post')) {
            $photocategoriesPhoto = $this->PhotocategoriesPhotos->patchEntity($photocategoriesPhoto, $this->request->getData());
            if ($this->PhotocategoriesPhotos->save($photocategoriesPhoto)) {
                $this->Flash->success(__('The photocategories photo has been saved.'), ['plugin' => 'JeffAdmin5']);
				$this->session->write('Layout.' . $this->controller . '.LastId', $photocategoriesPhoto->id);

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The photocategories photo could not be saved. Please, try again.'), ['plugin' => 'JeffAdmin5']);
        }
        $photocategories = $this->PhotocategoriesPhotos->Photocategories->find('list', limit: 200)->all();
        $photos = $this->PhotocategoriesPhotos->Photos->find('list', limit: 200)->all();
        $this->set(compact('photocategoriesPhoto', 'photocategories', 'photos'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Photocategories Photo id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
		$this->set('title', __('Edit the') . ': ' . __('photocategoriesPhoto') . ' ' . __('record'));
		$this->session->write('Layout.' . $this->controller . '.LastId', $id);
		
        $photocategoriesPhoto = $this->PhotocategoriesPhotos->get($id, contain: []);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $photocategoriesPhoto = $this->PhotocategoriesPhotos->patchEntity($photocategoriesPhoto, $this->request->getData());
            if ($this->PhotocategoriesPhotos->save($photocategoriesPhoto)) {
                $this->Flash->success(__('The photocategories photo has been saved.'), ['plugin' => 'JeffAdmin5']);

                //return $this->redirect(['action' => 'index']);
                return $this->redirect([
					'controller' => $this->controller,
					'action' => 'index',
					'#' => $photocategoriesPhoto->id
				]);

            }
            $this->Flash->error(__('The photocategories photo could not be saved. Please, try again.'), ['plugin' => 'JeffAdmin5']);
        }
        $photocategories = $this->PhotocategoriesPhotos->Photocategories->find('list', limit: 200)->all();
        $photos = $this->PhotocategoriesPhotos->Photos->find('list', limit: 200)->all();
		$name = $photocategoriesPhoto->name;
        $this->set(compact('photocategoriesPhoto', 'photocategories', 'photos', 'id', 'name'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Photocategories Photo id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $photocategoriesPhoto = $this->PhotocategoriesPhotos->get($id);
        if ($this->PhotocategoriesPhotos->delete($photocategoriesPhoto)) {
			$this->session->delete('Layout.' . $this->controller . '.LastId');
            $this->Flash->success(__('The photocategories photo has been deleted.'), ['plugin' => 'JeffAdmin5']);
        } else {
            $this->Flash->error(__('The photocategories photo could not be deleted. Please, try again.'), ['plugin' => 'JeffAdmin5']);
        }

        return $this->redirect(['action' => 'index']);
    }
}
