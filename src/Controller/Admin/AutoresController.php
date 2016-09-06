<?php
namespace App\Controller\Admin;

use App\Controller\AppController;

/**
 * Autores Controller
 *
 * @property \App\Model\Table\AutoresTable $Autores
 */
class AutoresController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
		$this->set('title', 'Autores');
		$this->set('subtitle', 'Gerenciar autores');
		
        $autores = $this->paginate($this->Autores);

        $this->set(compact('autores'));
        $this->set('_serialize', ['autores']);
    }

    /**
     * View method
     *
     * @param string|null $id Autore id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $autore = $this->Autores->get($id, [
            'contain' => []
        ]);

        $this->set('autore', $autore);
        $this->set('_serialize', ['autore']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
		$this->set('title', 'Autores');
		$this->set('subtitle', 'Adicionar autore');
		
        $autore = $this->Autores->newEntity();
        if ($this->request->is('post')) {
            $autore = $this->Autores->patchEntity($autore, $this->request->data);
            if ($this->Autores->save($autore)) {
                $this->Flash->success(__('autore salvo com sucesso!'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('Não foi possivel salvar autore. Por favor, tente novamente.'));
            }
        }
        $this->set(compact('autore'));
        $this->set('_serialize', ['autore']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Autore id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
		$this->set('title', 'Autores');
		$this->set('subtitle', 'Editar autore');
	
        $autore = $this->Autores->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $autore = $this->Autores->patchEntity($autore, $this->request->data);
            if ($this->Autores->save($autore)) {
                $this->Flash->success(__('autore editado com sucesso!'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('Falha ao editar autore. Por favor, tente novamente.'));
            }
        }
        $this->set(compact('autore'));
        $this->set('_serialize', ['autore']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Autore id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $autore = $this->Autores->get($id);
        if ($this->Autores->delete($autore)) {
            $this->Flash->success(__('autore deletado com sucesso!'));
        } else {
            $this->Flash->error(__('Falha ao deletar autore. Por favor, tente novamente.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
