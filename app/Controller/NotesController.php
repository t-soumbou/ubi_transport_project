<?php

class NotesController extends AppController
{
	var $name= "note";

public function index(){
    $notes = $this->note -> find('all');
    $this->set('notes',$notes);   
  }
	
public function edit(){
    if ($this->request->is('post')) {
          $this->note->save($this->request->data);
          $this->Session->setFlash(__('Vous avez ajouter une note'));
  }

}
}


