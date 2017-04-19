
<?php

class EtudiantsController extends AppController
{
	var $name= "etudiant";

// liste des eleves
	public function index(){
		$etudiants = $this->etudiant -> find('all');
		$this->set('etudiants',$etudiants);	 	
	}

//ajouter un eleve
	public function add(){
		if ($this->request->is('post')){
            if ($this->etudiant->save($this->request->data)){
                $this->Flash->success(__('Etudiant a été crée.'));
                $this->redirect(array('action' => 'index'));
                
            }else{
                $this->Flash->error(__('erreur lors de lajout'));
                
            }
        }
	}

        //modifier un eleve


                public function edit($id = null) {
                if (!$id) {
                    throw new NotFoundException(__('veuillez renseigner un identifiant'));
                }

                $etudiant = $this->etudiant->findById($id);
                if (!$etudiant) {
                    throw new NotFoundException(__('l\'etudiant n\'existe pas'));
                }

                if ($this->request->is(array('post', 'put'))) {
                    $this->etudiant->id = $id;
                    if ($this->etudiant->save($this->request->data)) {
                        $this->Flash->success(__('mis à jour effectuée'));
                        return $this->redirect(array('action' => 'index'));
                    }
                    $this->Flash->error(__('modification impossible'));
                }

                if (!$this->request->data) {
                    $this->request->data = $etudiant;
                }
            }

        //supprimer un etudiant

            public function delete($id) {
            if ($this->request->is('get')) {
                throw new MethodNotAllowedException();
            }

            if ($this->etudiant->delete($id)) {
                $this->Flash->success(
                    __('L\'etudiant a été supprimé.')
                );
            } else {
                $this->Flash->error(
                    __('L\'etudiant : %s n\'a pas pu être supprimé.')
                );
            }

            return $this->redirect(array('action' => 'index'));
        }

        public function noter($etudiant_id ){
            if (!$etudiant_id) {
                    throw new NotFoundException(__('veuillez renseigner un identifiant'));
                }
                $this->set('etudiant',$etudiant_id);  
                if ($this->request->is(array('post', 'put'))) {
                     if ($this->etudiant->note->save($this->request->data)) {
                        $this->Flash->success(__('Eleve noté'));
                        return $this->redirect(array('action' => 'index'));
                    }else{
                         $this->Flash->error(__('echec lors de la notation'));
                    }
                }
               
      }            

}






