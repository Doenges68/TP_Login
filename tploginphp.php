<?php
if(isset($_POST['pseudo'],$_POST['password']) && ($_POST['pseudo'])==($_SESSION['pseudo']) && ($_POST['password'])==($_SESSION['password'])){
		header ('Location: tploginblog.php');
}else{
	echo "<center>Tentative de connection échouée. Vérifiez votre identifiant et mot de passe.</center>";
}
?>