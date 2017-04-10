<?php
		
Class Etudiant extends AppModel{

	var $name="Etudiant";

	public $hasMany = array(
       		 'Note' => array(
            'className' => 'Note',
        )
    );	
}

?>