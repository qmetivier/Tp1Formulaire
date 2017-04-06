<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="style.css">
	<title></title>
</head>
<body>
<div class="alignement">
	<h1>Formulaire d'inscription</h1>
	<div class="element">
		<label for="e0" >Prénom : </label>
		<span><input id="e0" type="text" size="25"></span>
	</div>
	<br>
	<div class="element">
		<label for="e1" >Nom : </label>
		<span><input id="e1" type="text" size="25"></span>
	</div>
		<br>
	<div class="element">
		<label for="e2" >Mot de passe : </label>
		<span><input id="e2" type="text" size="25"></span>
	</div>
		<br>
	<div class="element">
		<label for="e3" >Confirmation : </label>
		<span><input id="e3" type="text" size="25"></span>
	</div>
		<br>
	<div class="element">
		<label>Civilité : </label>
		<input id="h" type="radio" name="group1" value="Homme"> <label for="h">Homme</label>
		<input id="f" type="radio" name="group1" value="Femme"> <label for="f">Femme</label>
	</div>
		<br>
	<div class="element">
		<label for="e4" >Ville</label>
		<select id="e4" name="mydropdown" size="1">
		<option value="null"></option>
		<option value="Angers">Angers</option>
		<option value="Laval">Laval</option>
		<option value="Paris">Paris</option>
		</select>
	</div>
		<br>
	<div class="element">
		<label>Sport (optionnel) : </label>
		<input id="s0" type="checkbox" name="option1" value="Football"> <label for="s0">Football</label>
		<input id="s1" type="checkbox" name="option2" value="Tennis"> <label for="s1">Tennis</label>
		<input id="s2" type="checkbox" name="option3" value="Handball"> <label for="s2">Handball</label>
		<input id="s3" type="checkbox" name="option2" value="Equitation"> <label for="s3">Equitation</label>
		<input id="s4" type="checkbox" name="option3" value="Natation"> <label for="s4">Natation</label>
		<input id="s5" type="checkbox" name="option3" value="Golf"> <label for="s5">Golf</label>
	</div>
		<br>
	<div class="element">
		<label for="e5">Envoie du fichier : </label>
		<input id="e5" type="file" name="file">
	</div>
		<br>
	<div class="element">
		<label for="e6" >Description : </label>
		<label align="texttop"><textarea id="e6" cols="40" rows="5" name="myname"></textarea></label>
			<br>
		<input type="submit" value="Envoyer le formulaire">
	</div>
	<br>
</div>
</body>
</html>