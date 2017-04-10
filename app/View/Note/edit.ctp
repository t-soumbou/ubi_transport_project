<h1>Ajouter une note</h1>

<?php
echo $this->Form->create('Note');
echo $this->Form->input('Etudiant_id');
echo $this->Form->input('Matiere');
echo $this->Form->input('Evaluation');
echo $this->Form->end('enregistrer');
