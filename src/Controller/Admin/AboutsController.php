<?php
declare(strict_types=1);

namespace App\Controller\Admin;


use App\Controller\Admin\AppController;
use Cake\Core\Configure;
use Cake\Http\Exception\NotFoundException;


/**
 * Abouts Controller
 *
 * @property \App\Model\Table\AboutsTable $Abouts
 */
class AboutsController extends AppController
{

	public $photopath = WWW_ROOT . 'img' . DS . 'about' . DS;

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
		$this->Flash->warning(__('Forbidden action!'), ['plugin' => 'JeffAdmin5']);
		return $this->redirect(['action' => 'edit', 1]);
		
		$this->set('title', __('Browse the') . ': ' . __('Abouts'));

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

		$this->paginate['Abouts']['order'] = [$sort => $direction];
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
			$query = $this->Abouts->find()
				->where([
					'OR' => [
						'name LIKE' => '%' . $search .  '%',
						//'title LIKE' => '%' . $search .  '%',
						//'value' => (integer) $search,			// Must be convert to integer
					]
				]);
		}else{
			$query = $this->Abouts->find();
		}
		// ############################# /.QUERY ###########################################


		// ############################# PAGINATE ############################################
		try {
			$this->paginate['Abouts']['limit'] = $this->config['paginate_limit'];
			$abouts = $this->paginate($query);
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
		
		if(empty($abouts->toArray())){
			return $this->redirect(['action' => 'add']);
		}

		$this->set(compact('abouts'));		
    }

    /**
     * View method
     *
     * @param string|null $id About id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
		$this->Flash->warning(__('Forbidden action!'), ['plugin' => 'JeffAdmin5']);
		return $this->redirect(['action' => 'edit', 1]);		

		$this->set('title', __('View the') . ': ' . __('about') . ' ' . __('record'));
        $about = $this->Abouts->get($id, contain: []);
		$this->session->write('Layout.' . $this->controller . '.LastId', $id);
		$name = $about->name;
        $this->set(compact('about', 'id', 'name'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
		$this->Flash->warning(__('Forbidden action!'), ['plugin' => 'JeffAdmin5']);
		return $this->redirect(['action' => 'edit', 1]);		

		$this->set('title', __('Add new') . ': ' . __('about') . ' ' . __('record'));
        $about = $this->Abouts->newEmptyEntity();
        if ($this->request->is('post')) {
            $about = $this->Abouts->patchEntity($about, $this->request->getData());
            if ($this->Abouts->save($about)) {
                $this->Flash->success(__('The about has been saved.'), ['plugin' => 'JeffAdmin5']);
				$this->session->write('Layout.' . $this->controller . '.LastId', $about->id);

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The about could not be saved. Please, try again.'), ['plugin' => 'JeffAdmin5']);
        }
        $this->set(compact('about'));
    }

    /**
     * Edit method
     *
     * @param string|null $id About id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
		$filename = [];
		$type 	  = [];
		
		$filename_1 = '';
		$filename_2 = '';
		$filename_3 = '';
		$filename_4 = '';
		$ext_1 		= '';
		$ext_2 		= '';
		$ext_3 		= '';
		$ext_4 		= '';
		
		$this->set('title', __('Edit the') . ': ' . __('about') . ' ' . __('record'));
		$this->session->write('Layout.' . $this->controller . '.LastId', $id);
		
        $about = $this->Abouts->get($id, contain: []);
        if ($this->request->is(['patch', 'post', 'put'])) {

			$data = $this->request->getData();

/*
			$filename_1 = $data['features_file_1']->getClientFilename();
			if($filename_1 !== ''){
				$ext_1 = pathinfo($filename_1, PATHINFO_EXTENSION);	// https://www.geeksforgeeks.org/how-to-extract-extension-from-a-filename-using-php/
			}
			
			$filename_2 = $data['features_file_2']->getClientFilename();
			if($filename_2 !== ''){
				$ext_2 = pathinfo($filename_2, PATHINFO_EXTENSION);	// https://www.geeksforgeeks.org/how-to-extract-extension-from-a-filename-using-php/
			}
			
			$filename_3 = $data['features_file_3']->getClientFilename();
			if($filename_3 !== ''){
				$ext_3 = pathinfo($filename_3, PATHINFO_EXTENSION);	// https://www.geeksforgeeks.org/how-to-extract-extension-from-a-filename-using-php/
			}
*/


/*
			about_file
			for($i = 1; $i <= 4; $i++){
				$filename_ . $i = $data['features_file_' . $i]->getClientFilename();
				if($filename_ . $i !== ''){
					$ext_ . $i = pathinfo($filename_ . $i, PATHINFO_EXTENSION);	// https://www.geeksforgeeks.org/how-to-extract-extension-from-a-filename-using-php/
				}
			}
*/

            $about = $this->Abouts->patchEntity($about, $data);
            if ($this->Abouts->save($about)) {
				
				$i = 0;
				$filename[$i] = $data['about_file']->getClientFilename();
				$type[$i] 	 = $data['about_file']->getclientMediaType();					
				if($filename[$i] !== ''){
					if($type[$i] == 'image/jpeg'){
						if(file_exists($this->photopath . 'about.jpg')){
							unlink($this->photopath . 'about.jpg');
						}
						$data['about_file']->moveTo($this->photopath . 'about.jpg');
					}
				}
				
				for($i = 1; $i <= 4; $i++){
					$filename[$i] = $data['features_file_' . $i]->getClientFilename();
					$type[$i] 	  = $data['features_file_' . $i]->getclientMediaType();					
					if($filename[$i] !== ''){
						if($type[$i] == 'image/jpeg'){
							if(file_exists($this->photopath . 'about-' . $i . '.jpg')){
								unlink($this->photopath . 'about-' . $i . '.jpg');
							}
							$data['features_file_' . $i]->moveTo($this->photopath . 'about-' . $i . '.jpg');
						}
					}
				}

                $this->Flash->success(__('The about has been saved.'), ['plugin' => 'JeffAdmin5']);

				return $this->redirect(['action' => 'edit', 1]);
                ////return $this->redirect(['action' => 'index']);
                //return $this->redirect([
				//	'controller' => $this->controller,
				//	'action' => 'index',
				//	'#' => $about->id
				//]);

            }
            $this->Flash->error(__('The about could not be saved. Please, try again.'), ['plugin' => 'JeffAdmin5']);
        }
		$name = $about->name;
        $this->set(compact('about', 'id', 'name'));
    }

    /**
     * Delete method
     *
     * @param string|null $id About id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
		$this->Flash->warning(__('Forbidden action!'), ['plugin' => 'JeffAdmin5']);
		return $this->redirect(['action' => 'edit', 1]);		

        $this->request->allowMethod(['post', 'delete']);
        $about = $this->Abouts->get($id);
        if ($this->Abouts->delete($about)) {
			$this->session->delete('Layout.' . $this->controller . '.LastId');
            $this->Flash->success(__('The about has been deleted.'), ['plugin' => 'JeffAdmin5']);
        } else {
            $this->Flash->error(__('The about could not be deleted. Please, try again.'), ['plugin' => 'JeffAdmin5']);
        }

        return $this->redirect(['action' => 'index']);
    }
}
