<?php
namespace App\Controller\Admin;

use App\Controller\AppController;

/**
 * Indices Controller
 *
 * @property \App\Model\Table\IndicesTable $Indices
 */
class IndicesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
		$this->set('title', 'Indices');
		$this->set('subtitle', 'Gerenciar indices');
		
        $indices = $this->paginate($this->Indices);

        $this->set(compact('indices'));
        $this->set('_serialize', ['indices']);
    }

    /**
     * View method
     *
     * @param string|null $id Index id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $index = $this->Indices->get($id, [
            'contain' => []
        ]);

        $this->set('index', $index);
        $this->set('_serialize', ['index']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
		$this->set('title', 'Indices');
		$this->set('subtitle', 'Adicionar index');
		
        $index = $this->Indices->newEntity();
        if ($this->request->is('post')) {
            $index = $this->Indices->patchEntity($index, $this->request->data);
            if ($this->Indices->save($index)) {
                $this->Flash->success(__('index salvo com sucesso!'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('Não foi possivel salvar index. Por favor, tente novamente.'));
            }
        }
        $this->set(compact('index'));
        $this->set('_serialize', ['index']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Index id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
		$this->set('title', 'Indices');
		$this->set('subtitle', 'Editar index');
	
        $index = $this->Indices->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $index = $this->Indices->patchEntity($index, $this->request->data);
            if ($this->Indices->save($index)) {
                $this->Flash->success(__('index editado com sucesso!'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('Falha ao editar index. Por favor, tente novamente.'));
            }
        }
        $this->set(compact('index'));
        $this->set('_serialize', ['index']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Index id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $index = $this->Indices->get($id);
        if ($this->Indices->delete($index)) {
            $this->Flash->success(__('index deletado com sucesso!'));
        } else {
            $this->Flash->error(__('Falha ao deletar index. Por favor, tente novamente.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
