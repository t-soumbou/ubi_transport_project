<h1>liste des notes des eleves</h1>
<?php
foreach($notes as $n){
	echo "<p>".$n['note']['id']."</p>";
	echo "<p>".$n['Note']['matiere']."</p>";
	echo "<p>".$n['Note']['note']."</p>";
}

?>