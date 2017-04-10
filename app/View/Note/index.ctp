<h1>liste des notes des eleves</h1>
<?php
foreach($notes as $n){
	echo "<p>".$n['Note']['id']."</p>";
	echo "<p>".$n['Note']['Matiere']."</p>";
	echo "<p>".$n['Note']['Note']."</p>";
}

?>