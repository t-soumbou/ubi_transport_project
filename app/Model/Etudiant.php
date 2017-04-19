<?php
		
Class Etudiant extends AppModel{

	var $name="etudiant";

	public $hasMany = array(
       		 'note' => array(
            'className' => 'note',
        )
    );	
}

?>