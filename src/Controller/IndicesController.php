<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Event\Event;

/**
 * Indices Controller
 *
 * @property \App\Model\Table\IndicesTable $Indices
 */
class IndicesController extends AppController
{

    public function beforeFilter(Event $event)
    {
        $this->viewBuilder()->layout('ajax');
        $this->Auth->allow(['index']);
    }


    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $this->paginate = ['limit'=>150];
        $this->request->allowMethod(['get']);
        $indices = $this->paginate($this->Indices);

        $this->set(compact('indices'));
        $this->set('_serialize', ['indices']);
    }


}
