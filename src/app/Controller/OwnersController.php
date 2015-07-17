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
}

?>
