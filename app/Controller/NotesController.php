<?php

class NotesController extends AppController
{
	var $name= "Note";

public function index(){
    $notes = $this->Note -> find('all');
    $this->set('notes',$notes);   
  }
	
public function edit(){
    if ($this->request->is('post')) {
          $this->Note->save($this->request->data);
          $this->Session->setFlash(__('Vous avez ajouter une note'));
  }

}
}


