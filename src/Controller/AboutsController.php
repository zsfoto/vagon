<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Abouts Controller
 *
 * @property \App\Model\Table\AboutsTable $Abouts
 */
class AboutsController extends AppController
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
		//$about = $this->Abouts->find('all', conditions: ['lang' => $lang])->first();
		//$services = $this->fetchTable('Services')->find('all', conditions: ['lang' => $lang], order: ['pos' => 'asc']);
		//$this->set(compact('about', 'services'));
	}


    /**
     * View method
     *
     * @param string|null $id About id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($lang = 'hu')
    {		
		//$lang = 'hu';
		$slides = $this->fetchTable('Slides')->find('all', conditions: ['lang' => $lang, 'visible' => true], order: ['pos' => 'asc']);
		$clients = $this->fetchTable('Clients')->find('all', conditions: ['lang' => $lang, 'visible' => true, 'show_in_mainpage' =>true], order: ['pos' => 'asc']);
        $this->set(compact('slides', 'clients'));
    }

    public function text($slug = null, $lang = 'hu')
    {
		//$cookies = $this->getRequest()->getCookieCollection()->get('csrfToken')->getValue(); // ->has('something');
		//debug($cookies); die();
		//$lang = 'hu';
		$text = $this->fetchTable('Texts')->find('all', conditions: ['lang' => $lang, 'slug' => $slug, 'visible' => true])->first();
		//debug($text); die();
        $this->set(compact('text'));
    }

    public function about($lang = 'hu')
    {
		//$cookies = $this->getRequest()->getCookieCollection()->get('csrfToken')->getValue(); // ->has('something');
		//debug($cookies); die();
		//debug($lang);
		//$lang = 'hu';
		$text = $this->fetchTable('Texts')->find('all', conditions: ['lang' => $lang, 'slug' => 'about-us', 'visible' => true])->first();
        $this->set(compact('text'));
    }

    public function photos($lang = 'hu')
    {
		//$cookies = $this->getRequest()->getCookieCollection()->get('csrfToken')->getValue(); // ->has('something');
		//debug($cookies); die();		
		//$lang = 'hu';
		$photocategories = $this->fetchTable('Photocategories')->find('all', conditions: ['lang' => $lang, 'visible' => true], order: ['pos' => 'asc', 'created' => 'asc']);
		$photos = $this->fetchTable('Photos')->find('all',
			contain: [
				'Photocategories'
			],
			conditions: [
				'lang' => $lang,
				'visible' => true
			],
			order: [
				'pos' => 'asc',
				'created' => 'asc'
			]
		);
		//debug($photocategories->toArray());
		//debug($photos->toArray());
		//die();
        $this->set(compact('photocategories', 'photos'));
    }

}
