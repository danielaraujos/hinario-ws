<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Event\Event;

/**
 * Cifras Controller
 *
 * @property \App\Model\Table\CifrasTable $Cifras
 */
class CifrasController extends AppController
{

    public function beforeFilter(Event $event)
    {
        $this->viewBuilder()->layout('ajax');
        $this->Auth->allow(['index']);
    }

    public function index()
    {
        $this->request->allowMethod(['get']);

        $this->paginate = ['limit'=>500];
        $cifras = $this->paginate($this->Cifras);

        $this->set(compact('cifras'));
        $this->set('_serialize', ['cifras']);
    }


}
