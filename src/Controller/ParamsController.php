<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Params Controller
 *
 * @property \App\Model\Table\ParamsTable $Params
 * @method \App\Model\Entity\Param[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ParamsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $params = $this->paginate($this->Params);

        $this->set(compact('params'));
    }

    /**
     * View method
     *
     * @param string|null $id Param id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $param = $this->Params->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('param'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $param = $this->Params->newEmptyEntity();
        if ($this->request->is('post')) {
            $param = $this->Params->patchEntity($param, $this->request->getData());
            if ($this->Params->save($param)) {
                $this->Flash->success(__('The param has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The param could not be saved. Please, try again.'));
        }
        $this->set(compact('param'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Param id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $param = $this->Params->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $param = $this->Params->patchEntity($param, $this->request->getData());
            if ($this->Params->save($param)) {
                $this->Flash->success(__('The param has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The param could not be saved. Please, try again.'));
        }
        $this->set(compact('param'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Param id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $param = $this->Params->get($id);
        if ($this->Params->delete($param)) {
            $this->Flash->success(__('The param has been deleted.'));
        } else {
            $this->Flash->error(__('The param could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
