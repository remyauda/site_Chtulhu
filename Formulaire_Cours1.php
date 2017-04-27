<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" href="Formulaire_Cours1.css">
<title>Formulaire</title>
</head>
<body>

	<form method="post" action="traitement_formulaire1.php"
		autocomplete="on" enctype="multipart/form-data">

		<fieldset>
			<legend>Informations personnelles</legend>

			<p>
				<label for="nom">Entrer votre nom:</label> <input type="text"
					name="nom" id="nom" placeholder="ex: Lovecraft"
					autofocus="autofocus" required="required" />
			</p>

			<p>
				<label for="prenom">Entrer votre prenom:</label> <input type="text"
					name="prenom" id="prenom" placeholder="ex: Howard"
					required="required" />
			</p>

			<p>
				<label for="DateNaissance">Entrer votre date de naissance:</label> <input
					type="date" name="DateNaissance" id="DateNaissance"
					placeholder="ex: 06/07/1994" required="required" />
			</p>

			<p>
				<label for="motDePass">Entrer votre mot de passe:</label> <input
					type="password" name="motDePass" id="motDePass" required="required" />
			</p>

			<p>
				<label for="mail">Entrer votre adresse email:</label> <input
					type="email" name="mail" id="mail"
					placeholder="ex: howardlovecraft@yahoo.fr" required="required" />
			</p>

			<p>
				<label for="telephone">Entrer votre numéro de téléphone:</label> <input
					type="tel" name="telephone" id="telephone" />
			</p>

		</fieldset>

		<fieldset>
			<legend>Votre avis sur les oeuvres de Lovecraft</legend>

			<p>
				Aimez vous les oeuvres de Lovecraft?<br /> <input type="radio"
					name="question1" id="lecteur" value="ouilecteur" /> <label
					for="lecteur">Oui</label> <input type="radio" name="question1"
					id="nonlecteur" value="nonlecteur" /> <label for="nonlecteur">Non</label>
			</p>

			<p>
				<label for="nombreNouvelles">Entrer le nombre de nouvelles
					de Lovecraft que vous avez lu:</label> <input type="number"
					name="nombreNouvelles" id="nombreNouvelles" placeholder="ex: 2" />
			</p>

			<p>
				<label for="avis">De 1 à 5, notez la nouvelle de L'appel de
					Chtulhu (5 si vous appréciez beaucoup la nouvelle):</label> <input
					type="range" name="avis" id="avis" value="5" min="1" max="5"
					step="1" />
			</p>

			<p>
				Votre histoire préférée? <select name="histoirePreferee"
					id="histoirePreferee">

					<optgroup label="Histoires Fondatrices">
						<option value="Les montagnes halucinées">Les montagnes
							halucinées</option>
						<option value="L'appel de Chtulhu">L'appel de Chtulhu</option>
						<option value="La maison de la sorcière">La maison de la
							sorcière</option>
					</optgroup>
					<optgroup label="Autres histoires">
						<option value="La couleur venue du ciel">La couleur venue
							du ciel</option>
					</optgroup>
				</select>

			</p>

			<p>
				Formulaire d'envoi de fichier :<br /> 
				<input type="file" name="monfichier"/><br />

			</p>

		</fieldset>

		<textarea name="commentaire" id="commentaire" rows="10" cols="50">Un commentaire?</textarea>

		<input type="submit" value="submit"> <input type="reset"
			value="reset">

	</form>
</body>
</html>