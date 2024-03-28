<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Messages Controller
 *
 * @property \App\Model\Table\MessagesTable $Messages
 */
class MessagesController extends AppController
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
		$this->loadComponent('Captcha');
	}

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $message = $this->Messages->newEmptyEntity();
        if ($this->request->is('post')) {
			$error = false;
			$data = $this->request->getData();
			
            $message = $this->Messages->patchEntity($message, $data);
			if(!$error){
				if ($this->Messages->save($message)) {
					
					// Email...
					
					
					
					
					$this->Flash->success(__('The message has been saved.'));
					
					return $this->redirect(['action' => 'add']);
				}
				$this->Flash->error(__('The message could not be saved. Please, try again.'));
			}
        }
		$captcha = $this->Captcha->generateCaptcha(3);
        $this->set(compact('message', 'captcha'));
    }

}
