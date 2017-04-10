<h2>Etudiants</h2>
<div>
    <?php echo $this->Html->link( '+ Ajouter Eleve', array( 'action' => 'add' ) ); ?>
</div>
<table style='padding:5px;'>
    <tr style='background-color:#fff;'>
        <th>Id</th>
        <th>Nom</th>
        <th>Prenom</th>
        <th>Date_de_naissance</th>
        <th>Actions</th>
    </tr>
    
<?php
    foreach( $etudiants as $etudiant ){
    
        echo "<tr>";
            echo "<td>{$etudiant['Etudiant']['id']}</td>";
            echo "<td>{$etudiant['Etudiant']['Nom']}</td>";
            echo "<td>{$etudiant['Etudiant']['Prenom']}</td>";
            echo "<td>{$etudiant['Etudiant']['Date_de_naissance']}</td>";
            
            echo "<td class='actions'>";
                echo $this->Html->link( 'Noter', array('action' => 'noter', $etudiant['Etudiant']['id']));
                echo $this->Html->link( 'modifier', array('action' => 'edit', $etudiant['Etudiant']['id']));
                echo $this->Form->postLink( 'supprimer', array('action' => 'delete',$etudiant['Etudiant']['id']), array(
                            'confirm'=>'Etes-vous sur de vouloir supprimer cet eleve ?'));
            echo "</td>";
        echo "</tr>";
    }
?>
    
</table>