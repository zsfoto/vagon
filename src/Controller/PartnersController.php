<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Partners Controller
 *
 * @property \App\Model\Table\PartnersTable $Partners
 */
class PartnersController extends AppController
{
    /**
     * Initialization hook method.
     *
     * Use this method to add common initialization code like loading components.
     *
     * @return void
     */
    public function initialize(): void
    {
        parent::initialize();
		//$lang = 'hu';
		//$about = $this->fetchTable('Abouts')->find('all', conditions: ['lang' => $lang])->first();
		//$services = $this->fetchTable('Services')->find('all', conditions: ['lang' => $lang], order: ['pos' => 'asc']);
		//$this->set(compact('about', 'services'));
	}
	
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $query = $this->Partners->find();
        $partners = $this->paginate($query);

        $this->set(compact('partners'));
    }

    /**
     * View method
     *
     * @param string|null $id Partner id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $partner = $this->Partners->get($id, contain: []);
        $this->set(compact('partner'));
    }

}
