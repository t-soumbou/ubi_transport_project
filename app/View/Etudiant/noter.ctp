
<h2>Noter un Etudiant</h2>
<div>
    <?php echo $this->Html->link( 'Liste des Eleves', array( 'action' => 'index' ) ); ?>
</div>
<?php

echo $this->Form->create('Note');
  echo $this->Form->input('Etudiant_id',array('type' => 'int', 'default' => $etudiant));
   echo $this->Form->input('Matiere');
    echo $this->Form->input('Evaluation');

echo $this->Form->end('Submit');
?>