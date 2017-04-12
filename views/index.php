			<?php 
			$erreur = 0;

			if (!empty($_POST)) {

				if (isset($_POST['Prenom'])) {
					if ($_POST['Prenom'] == '') {
						echo '<p class="echo">Veuillez renseigner un Prénom</p>';
						$erreur = 1;
					}
				}
				if (isset($_POST['Nom'])) {
					if ($_POST['Nom'] == '') {
						echo '<p class="echo">Veuillez renseigner un Nom</p>';
						$erreur = 1;
					}
				}
				if (isset($_POST['Motdepasse'])) {
					if ($_POST['Motdepasse'] == '') {
						echo '<p class="echo">Veuillez renseigner un Mot de passe</p>';
						$erreur = 1;
					}else if(strlen($_POST['Motdepasse']) < 3){
						echo '<p class="echo">Veuillez renseigner un Mot de passe de plus de 3 caractère</p>';
						$erreur = 1;
					}
				}
				if (isset($_POST['Confirmmotdepasse'])) {
					if ($_POST['Confirmmotdepasse'] == '') {
						echo '<p class="echo">Veuillez confirmer votre Mot de passe </p>';
						$erreur = 1;
					}else if ($_POST['Confirmmotdepasse'] != $_POST['Motdepasse']) {
						echo '<p class="echo">votre confirmation est differente de votre Mot de passe</p>';
						$erreur = 1;
					}
				}

				if (isset($_POST['Sexe'])) {
				}else{
					echo '<p class="echo">Veuillez renseigner votre etat civil</p>';
					$erreur = 1;
				}


				if (isset($_POST['Ville'])) {
					if ($_POST['Ville'] == 'null') {
						echo '<p class="echo">Veuillez renseigner une ville</p>';
						$erreur = 1;
					}
				}

				if (isset($_POST['file'])) {
					if ($_POST['file'] == '') {
						if (isset($_POST['Sexe']) && $_POST['Sexe'] == 'Homme' ) {
							$_POST['file'] = 'http://blogdailyherald.com/wp-content/uploads/2014/10/wallpaper-for-facebook-profile-photo.jpg';
						}else{
							$_POST['file'] = 'http://mondefi.ca/modules/mondefi/assets/images/profil-placeholder-big-femme.png';
						}
					}
				}

				if (isset($_POST['Description'])) {
					if ($_POST['Description'] == '') {
						echo '<p class="echo">Veuillez rentrer une description</p>';
						$erreur = 1;
					}
				}

				if($erreur == 0){

				$ADDR_Visit = $_SERVER['SERVER_ADDR'];
				$ADDR_Visit = str_replace('.', '_', $ADDR_Visit);

				if (file_exists($ADDR_Visit)) { header('Location: invalide.php');
				} else {
					mkdir("./".$ADDR_Visit,0700);
				}
				$file =fopen($ADDR_Visit.'/log.txt', 'w');
				foreach ($_POST as $key => $value) {
					fputs($file,"$key : $value".PHP_EOL);
				}
				fclose($file);

				$tmp_name=$_FILES["photo"]["tmp_name"];
				$name = $ADDR_Visit.$_FILES["photo"]["name"];
				move_uploaded_file($tmp_name, "./$ADDR_Visit/".$name);

				
				header('Location: valide.php');
				}
			}

			function NameSave($elementName)
			{
				if (isset($_POST[$elementName])) {
					echo htmlentities($_POST[$elementName]);
				}
			}


			function SexeSave()
			{
				echo '<input id="h" type="radio" name="Sexe" value="Homme" '.(isset($_POST["Sexe"]) && $_POST["Sexe"] == "Homme" ? "checked" : "").'><label for="h">Homme</label>
				<input id="f" type="radio" name="Sexe" value="Femme" '.(isset($_POST["Sexe"]) && $_POST["Sexe"] == "Femme" ? "checked" : "").'><label for="f">Femme</label>
				<input id="a" type="radio" name="Sexe" value="Autre" '.(isset($_POST["Sexe"]) && $_POST["Sexe"] == "Autre" ? "checked" : "").'><label for="a">Autre</label>';
			}

			function SportSave($element, $id)
			{
				if (isset($_POST[$element]) && $_POST[$element] == $id) {
					echo htmlentities("checked=checked");
				}
			}

			function DeroulantSave($element, $id)
			{
				if (isset($_POST[$element]) && $_POST[$element] == $id) {
					echo htmlentities("selected='selected'");
				}
			}
			?>
