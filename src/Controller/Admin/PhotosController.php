<?php
declare(strict_types=1);

namespace App\Controller\Admin;


use App\Controller\Admin\AppController;
use Cake\Core\Configure;
use Cake\Http\Exception\NotFoundException;


/**
 * Photos Controller
 *
 * @property \App\Model\Table\PhotosTable $Photos
 */
class PhotosController extends AppController
{

	public $photopath = WWW_ROOT . 'img' . DS . 'photos' . DS;

    /**
     * Initialize controller
     *
     * @return void
     */
    public function initialize(): void
    {
        parent::initialize();

		if(!file_exists($this->photopath)){
			mkdir($this->photopath);
		}

	}

    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index($clearFilter = null)
    {
		$this->set('title', __('Browse the') . ': ' . __('Photos'));

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

		$this->paginate['Photos']['order'] = [$sort => $direction];
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
			$query = $this->Photos->find()
				->where([
					'OR' => [
						'name LIKE' => '%' . $search .  '%',
						//'title LIKE' => '%' . $search .  '%',
						//'value' => (integer) $search,			// Must be convert to integer
					]
				]);
		}else{
			$query = $this->Photos->find();
		}
		// ############################# /.QUERY ###########################################


		// ############################# PAGINATE ############################################
		try {
			$this->paginate['Photos']['limit'] = $this->config['paginate_limit'];
			$photos = $this->paginate($query);
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
		
		$this->set(compact('photos'));		
    }

    /**
     * View method
     *
     * @param string|null $id Photo id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
		$this->set('title', __('View the') . ': ' . __('photo') . ' ' . __('record'));
        $photo = $this->Photos->get($id, contain: ['Photocategories', 'Tests']);
		$this->session->write('Layout.' . $this->controller . '.LastId', $id);
		$name = $photo->name;
        $this->set(compact('photo', 'id', 'name'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
	
	// https://www.twilio.com/en-us/blog/upload-files-cakephp
	
    public function add()
    {
		$this->set('title', __('Add new') . ': ' . __('photo') . ' ' . __('record'));
        $photo = $this->Photos->newEmptyEntity();
        if ($this->request->is('post')) {
			$data = $this->request->getData();
			$filename = $data['file']->getClientFilename();
			if($filename !== ''){
				$data['filename'] = $data['file']->getClientFilename();
				$data['file_ext'] = pathinfo($data['filename'], PATHINFO_EXTENSION);	// https://www.geeksforgeeks.org/how-to-extract-extension-from-a-filename-using-php/
			}
            $photo = $this->Photos->patchEntity($photo, $data);
            if ($this->Photos->save($photo)) {
				if($filename !== ''){
					$data['file']->moveTo($this->photopath . $photo->id . '.' . $photo->file_ext);
				}
                $this->Flash->success(__('The photo has been saved.'), ['plugin' => 'JeffAdmin5']);
				$this->session->write('Layout.' . $this->controller . '.LastId', $photo->id);

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The photo could not be saved. Please, try again.'), ['plugin' => 'JeffAdmin5']);
        }
        $photocategories = $this->Photos->Photocategories->find('list', limit: 200)->all();
        $this->set(compact('photo', 'photocategories'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Photo id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
		$this->set('title', __('Edit the') . ': ' . __('photo') . ' ' . __('record'));
		$this->session->write('Layout.' . $this->controller . '.LastId', $id);
		
        $photo = $this->Photos->get($id, contain: ['Photocategories']);
        if ($this->request->is(['patch', 'post', 'put'])) {
			$data = $this->request->getData();
			$filename = $data['file']->getClientFilename();
			if($filename !== ''){
				$data['filename'] = $data['file']->getClientFilename();
				$data['file_ext'] = pathinfo($data['filename'], PATHINFO_EXTENSION);	// https://www.geeksforgeeks.org/how-to-extract-extension-from-a-filename-using-php/
				// Ha létzezik a file, akkor törölni kell...
				if(file_exists($this->photopath . $photo->id . '.' . $photo->file_ext)){
					unlink($this->photopath . $photo->id . '.' . $photo->file_ext);
				}
			}			
            $photo = $this->Photos->patchEntity($photo, $data);
            if ($this->Photos->save($photo)) {
				// Ha van feltöltendő file, akkor azt mozgassa a helyére. Különben csak az adatok frissítése van.
				if($filename !== ''){
					$data['file']->moveTo($this->photopath . $photo->id . '.' . $photo->file_ext);
				}
                $this->Flash->success(__('The photo has been saved.'), ['plugin' => 'JeffAdmin5']);
                //return $this->redirect(['action' => 'index']);
                return $this->redirect([
					'controller' => $this->controller,
					'action' => 'index',
					'#' => $photo->id
				]);
            }
            $this->Flash->error(__('The photo could not be saved. Please, try again.'), ['plugin' => 'JeffAdmin5']);
        }
        $photocategories = $this->Photos->Photocategories->find('list', limit: 200)->all();
		$name = $photo->name;
        $this->set(compact('photo', 'photocategories', 'id', 'name'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Photo id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $photo = $this->Photos->get($id);
        if ($this->Photos->delete($photo)) {
			
			if(file_exists($this->photopath . $photo->id . '.' . $photo->file_ext)){
				unlink($this->photopath . $photo->id . '.' . $photo->file_ext);
			}
			
			$this->session->delete('Layout.' . $this->controller . '.LastId');
            $this->Flash->success(__('The photo has been deleted.'), ['plugin' => 'JeffAdmin5']);
        } else {
            $this->Flash->error(__('The photo could not be deleted. Please, try again.'), ['plugin' => 'JeffAdmin5']);
        }

        return $this->redirect(['action' => 'index']);
    }
		
}
