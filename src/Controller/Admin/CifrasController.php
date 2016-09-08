<?php
namespace App\Controller\Admin;

use App\Controller\AppController;

/**
 * Cifras Controller
 *
 * @property \App\Model\Table\CifrasTable $Cifras
 */
class CifrasController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
		$this->set('title', 'Cifras');
		$this->set('subtitle', 'Gerenciar cifras');

        $this->paginate = ['limit'=> 20];
		
        $cifras = $this->paginate($this->Cifras);

        $this->set(compact('cifras'));
        $this->set('_serialize', ['cifras']);
    }


    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
		$this->set('title', 'Cifras');
		$this->set('subtitle', 'Adicionar cifra');
		
        $cifra = $this->Cifras->newEntity();
        if ($this->request->is('post')) {
            $cifra = $this->Cifras->patchEntity($cifra, $this->request->data);
            if ($this->Cifras->save($cifra)) {
                $this->Flash->success(__('cifra salvo com sucesso!'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('Não foi possivel salvar cifra. Por favor, tente novamente.'));
            }
        }
        $this->set(compact('cifra'));
        $this->set('_serialize', ['cifra']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Cifra id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
		$this->set('title', 'Cifras');
		$this->set('subtitle', 'Editar cifra');
	
        $cifra = $this->Cifras->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $cifra = $this->Cifras->patchEntity($cifra, $this->request->data);
            if ($this->Cifras->save($cifra)) {
                $this->Flash->success(__('cifra editado com sucesso!'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('Falha ao editar cifra. Por favor, tente novamente.'));
            }
        }
        $this->set(compact('cifra'));
        $this->set('_serialize', ['cifra']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Cifra id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $cifra = $this->Cifras->get($id);
        if ($this->Cifras->delete($cifra)) {
            $this->Flash->success(__('cifra deletado com sucesso!'));
        } else {
            $this->Flash->error(__('Falha ao deletar cifra. Por favor, tente novamente.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
