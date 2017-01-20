<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Event\Event;

/**
 * Hinos Controller
 *
 * @property \App\Model\Table\HinosTable $Hinos
 */
class HinosController extends AppController
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
        $this->request->allowMethod(['get']);
        //$hinos = $this->request->data();

        //$this->paginate = ['limit'=>500];
        //$hinos = $this->paginate($this->Hinos);

        $hinos = $this->Hinos->find()->all();


        $this->set(compact('hinos'));
        $this->set('_serialize', ['hinos']);
    }


}
