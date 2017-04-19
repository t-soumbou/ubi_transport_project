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
            echo "<td>{$etudiant['etudiant']['id']}</td>";
            echo "<td>{$etudiant['etudiant']['nom']}</td>";
            echo "<td>{$etudiant['etudiant']['prenom']}</td>";
            echo "<td>{$etudiant['etudiant']['date_de_naissance']}</td>";
            
            echo "<td class='actions'>";
                echo $this->Html->link( 'Noter', array('action' => 'noter', $etudiant['etudiant']['id']));
                echo $this->Html->link( 'modifier', array('action' => 'edit', $etudiant['etudiant']['id']));
                echo $this->Form->postLink( 'supprimer', array('action' => 'delete',$etudiant['etudiant']['id']), array(
                            'confirm'=>'Etes-vous sur de vouloir supprimer cet eleve ?'));
            echo "</td>";
        echo "</tr>";
    }
?>
    
</table>