<?php

class OwnersController extends AppController{

    public $helpers = array ('Html','Form');

    public $name = 'Owners';

    function index() {
        $this->set('owners', $this->Owner->find('all'));
    }

    public function add() {
      if ($this->request->is('post')) {
        if ($this->Owner->save($this->request->data)) {
            $this->Session->setFlash('Your information has been saved.');
            $this->redirect(array('action' => 'index'));
        }
      }
    }

   public function edit($id = null){
        $this->Owner->id = $id;
        if ($this->request->is('get')) {

          $this->request->data = $this->Owner->findById($id);
        } else {
          if ($this->Owner->save($this->request->data)) {
            $this->Session->setFlash('Your information has been updated.');
            $this->redirect(array('action' => 'index'));
          }
        }
    }

    public function delete($id = NULL) {
      if (!$this->request->is('get')) {
        throw new MethodNotAllowedException();
      }
      $this->Owner->id = $id;
      if (!$this->Owner->exists()) {
        throw new NotFoundException(__('Registro não encontrado.'));
      }
      if ($this->Owner->delete()) {
        $this->Session->setFlash(__('Registro excluído com sucesso.'));
        $this->redirect(array('action' => '/index/'));
      }
      $this->Session->setFlash(__('Erro: não foi possível excluir o registro.'));
      $this->redirect(array('action' => '/index/')); }



}

?>
