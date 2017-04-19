
<h2>Ajout d'un Etudiant</h2>

<div>
    <?php echo $this->Html->link( 'Liste des Etudiants', array( 'action' => 'index' ) ); ?>
</div>
<?php

echo $this->Form->create('etudiant');
    echo $this->Form->input('nom');
    echo $this->Form->input('prenom');
    echo $this->Form->input('date_de_naissance',array('type'=>'date'));   
echo $this->Form->end('Submit');
?>