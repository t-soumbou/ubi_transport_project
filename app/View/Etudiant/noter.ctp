
<h2>Noter un Etudiant</h2>
<div>
    <?php echo $this->Html->link( 'Liste des Eleves', array( 'action' => 'index' ) ); ?>
</div>
<?php

echo $this->Form->create('note');
  echo $this->Form->input('etudiant_id',array('type' => 'int', 'default' => $etudiant));
   echo $this->Form->input('matiere');
    echo $this->Form->input('evaluation');

echo $this->Form->end('Submit');
?>