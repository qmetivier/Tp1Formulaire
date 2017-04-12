<!DOCTYPE html>	
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" href="lib/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="php" type="text/php" href="views/index.php">
	<title>Tp1 Formulaire</title>
</head>
<body>
	<div class="alignement">
		<form method="post" action="index.php" enctype="multipart/form-data">
			<h1>Formulaire d'inscription</h1>
			<?php 
			require 'views/index.php';
			?>
			<div class="element">
				<label for="e0" >Prénom : </label>
				<span><input id="e0" type="text" size="25" name="Prenom"
					value="<?php NameSave('Prenom') ?>" ></span>
				</div>
				<br>
				<div class="element">
					<label for="e1" >Nom : </label>
					<span><input id="e1" type="text" size="25" name="Nom"
						value="<?php NameSave('Nom') ?>"></span>
					</div>
					<br>
					<div class="element">
						<label for="e2" >Mot de passe : </label>
						<span><input id="e2" type="password" size="25" name="Motdepasse"></span>
					</div>
					<br>
					<div class="element">
						<label for="e3" >Confirmation : </label>
						<span><input id="e3" type="password" size="25" name="Confirmmotdepasse"></span>
					</div>
					<br>
					<div class="element">
						<label>Civilité : </label>
						<?php 
							SexeSave();
						?>
					</div>
					<br>
					<div class="element">
						<label for="e4" >Ville</label>
						<select id="e4" name="Ville" size="1">
							<option value="Lile" <?php DeroulantSave('Ville', 'Lile') ?>>Lille</option>
							<option value="Angers" <?php DeroulantSave('Ville', 'Angers') ?>>Angers</option>
							<option value="Paris" <?php DeroulantSave('Ville', 'Paris') ?>>Paris</option>
							<option value="Laval" <?php DeroulantSave('Ville', 'Laval') ?>>Laval</option>
						</select>
					</div>
					<br>
					<div class="element">
						<label>Sport (optionnel) : </label>
						<input id="s0" type="checkbox" name="Sport1" value="Football" <?php SportSave('Sport1','Football') ?>> <label for="s0">Football</label>
						<input id="s1" type="checkbox" name="Sport2" value="Tennis"<?php SportSave('Sport2','Tennis') ?>> <label for="s1">Tennis</label>
						<input id="s2" type="checkbox" name="Sport3" value="Handball"<?php SportSave('Sport3','Handball') ?>> <label for="s2">Handball</label>
						<input id="s3" type="checkbox" name="Sport4" value="Equitation"<?php SportSave('Sport4','Equitation')?>> <label for="s3">Equitation</label>
						<input id="s4" type="checkbox" name="Sport5" value="Natation"<?php SportSave('Sport5','Natation') ?>> <label for="s4">Natation</label>
						<input id="s5" type="checkbox" name="Sport6" value="Golf"<?php SportSave('Sport6','Golf') ?>> <label for="s5">Golf</label>
					</div>
					<br>
					<div class="element">
						<label for="photo">Photo : </label>
						<input id="photo" type="file" name="photo" accept="image/*">
					</div>
					<br>
					<div class="element">
						<label for="e6" >Description : </label>
						<label align="texttop"><textarea id="e6" cols="40" rows="5" name="Description"><?php NameSave('Description') ?></textarea></label>
							<br>
							<input id="Send" type="submit" value="Envoyer le formulaire">
						</div>
						<br>
					</form>
				</div>
			</body>
			</html>