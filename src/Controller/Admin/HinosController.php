<?php
namespace App\Controller\Admin;

use App\Controller\AppController;

/**
 * Hinos Controller
 *
 * @property \App\Model\Table\HinosTable $Hinos
 */
class HinosController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
		$this->set('title', 'Hinos');
		$this->set('subtitle', 'Gerenciar hinos');
		
        $this->paginate = [
            'limit'=>20,
            //'contain' => ['Autores', 'Indices']
        ];
        $hinos = $this->paginate($this->Hinos);


        $this->set(compact('hinos'));
        $this->set('_serialize', ['hinos']);
    }

    /**
     * View method
     *
     * @param string|null $id Hino id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $hino = $this->Hinos->get($id, [
            'contain' => ['Autores', 'Indices']
        ]);

        $this->set('hino', $hino);
        $this->set('_serialize', ['hino']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
		$this->set('title', 'Hinos');
		$this->set('subtitle', 'Adicionar hino');
		
        $hino = $this->Hinos->newEntity();
        if ($this->request->is('post')) {
            $hino = $this->Hinos->patchEntity($hino, $this->request->data);
            if ($this->Hinos->save($hino)) {
                $this->Flash->success(__('hino salvo com sucesso!'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('Não foi possivel salvar hino. Por favor, tente novamente.'));
            }
        }
        $autores = $this->Hinos->Autores->find('list', ['limit' => 200]);
        $indices = $this->Hinos->Indices->find('list', ['limit' => 200]);
        $this->set(compact('hino', 'autores', 'indices'));
        $this->set('_serialize', ['hino']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Hino id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
		$this->set('title', 'Hinos');
		$this->set('subtitle', 'Editar hino');
	
        $hino = $this->Hinos->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $hino = $this->Hinos->patchEntity($hino, $this->request->data);
            if ($this->Hinos->save($hino)) {
                $this->Flash->success(__('hino editado com sucesso!'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('Falha ao editar hino. Por favor, tente novamente.'));
            }
        }
        $autores = $this->Hinos->Autores->find('list', ['limit' => 200]);
        $indices = $this->Hinos->Indices->find('list', ['limit' => 200]);
        $this->set(compact('hino', 'autores', 'indices'));
        $this->set('_serialize', ['hino']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Hino id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $hino = $this->Hinos->get($id);
        if ($this->Hinos->delete($hino)) {
            $this->Flash->success(__('hino deletado com sucesso!'));
        } else {
            $this->Flash->error(__('Falha ao deletar hino. Por favor, tente novamente.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
