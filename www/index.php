<?php
//test commandes PHP
if(isset($_POST['login']) && isset($_POST['status'])){
	if($_POST['status'] == 'tech'){
		echo 'accès autorisé'; 
	}else{
		echo "Accès refusé, vous n'êtes pas autorisé";
	}
}
?>


<!DOCTYPE HTML>


<html>
	<header>
	<title>Maquette Projet</title>
	</header>

	<body style="background-color: grey;">
		Le status doit être "tech" pour que la connexion soit valide.<br/>
		Sinon la connexion est refusée, comme ce qui est voulue dans l'app finale.
		<form method="post">
			<input type="text" placeholder="Login" name="login"><br/><br/>
			<input type="text" placeholder="Status" name="status"><br/><br/>
			<input type="submit" value="Valider">
		</form>
		<div class="srv" style="background-color: orange;">
			<h2>SERVER 1</h2>
			<p>Processeur : <?php echo php_uname('m');?></p><br/>
			<p>OS : <?php echo PHP_OS;?></p><br/>
			<p>Status : Online</p><br/>
			<form action="ping.php">
				<input type="submit" name="ping" placeholder="PING IT">
			</form>
		</div>

		<div class="srv" style="background-color: green;">
			<h2>SERVER 2</h2>
			<p>Processeur : <?php echo php_uname('m');?></p><br/>
			<p>OS : <?php echo PHP_OS;?></p><br/>
			<p>Status : Offline</p><br/>
			<form action="ping.php">
				<input type="submit" name="ping" placeholder="PING IT">
			</form>
		</div>
		<br/>
		Ici nous pourrons voir les stats des serveur : online, les composants, dernière connexion.


	</body>

	<style>
	.srv{
		width: 300px;
		height: 400px;
		border: solid black;
		display: inline-block;
		margin-left: 20%;
		text-align: center;
		border-radius: 50px;
	}

	.ping{
		margin-left: auto;
		margin-right: auto;
	}

	</style>


</html>