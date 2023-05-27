<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title> Connexion</title>
	<meta charset="utf-8" />
	<meta name="author" content="votre_nom">
	<meta name="version" content="1.0">
	<meta name="description" content="description de la page">
	<meta name="keywords" content="mot-cle1, mot-cle2, ...">
	<meta name="generator" content="nom_du_generateur">
	<meta name="robots" content="index,follow" />
	<meta name="subject" content="sujet aborde">
    <link rel="stylesheet" type="text/css" href="styles.css" />

</head>
<body>
	<br>
	<br>
	<br>
    <div id="contenu">		
		<div id="div_frm">
			<form id="frm">
				<input type="email" id="txtmail" name="txtmail" placeholder="E-mail" />
				<input type="password" id="txtpass" name="txtpass" placeholder="Mot de passe" />
				<input type="button" id="btvalid" name="btvalid" value="Connexion" onclick="fvalidation();" />
				<input type="button" id="btannul" name="btannul" value="Annuler"/>
			</form>
		</div>	
		<div id="div_para">
			<h1>Connectez-vous</h1>
			<p class="mimi">Connectez-vous si vous avez déja un compte</p>
			<p id="msg" class="msgalert"></p>
		</div>
	</div>	
    <script type="text/javascript" src="javascript.js"></script>
</body>
</html>