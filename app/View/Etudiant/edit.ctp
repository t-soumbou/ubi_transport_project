
<h2>Modifier un Etudiant</h2>
<div>
    <?php echo $this->Html->link( 'Liste des Eleves', array( 'action' => 'index' ) ); ?>
</div>
<?php
echo $this->Form->create('Etudiant');
    echo $this->Form->input('Nom');
    echo $this->Form->input('Prenom');
    echo $this->Form->input('Date_de_naissance',array('type'=>'date'));
echo $this->Form->end('Submit');
?>