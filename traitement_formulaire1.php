<?php
echo 'Votre nom est: '.strip_tags($_POST['nom']).'<br/>';

if (isset($_POST['question1']) AND $_POST['question1']=='ouilecteur' ){
	echo 'Vous aimez les oeuvres de lovecraft'.'<br/>';
}
else{
	echo 'Vous n\'aimez pas les oeuvres de lovecraft'.'<br/>';
}

if(isset($_POST['histoirePreferee'])){//si l'utilisateur a fait un choix dans la liste d�roulante
	if($_POST['histoirePreferee']=='Les montagnes halucinées'){
		echo 'Vous avez choisi les montagnes halucinées dans la liste deroulante';
	}
	if($_POST['histoirePreferee']=='L\'appel de Chtulhu'){
		echo 'Vous avez choisi l\'appel de Chtulhu dans la liste deroulante';
	}
	if($_POST['histoirePreferee']=='La maison de la sorcière'){
		echo 'Vous avez choisi la maison de la sorcière dans la liste deroulante';
	}
	if($_POST['histoirePreferee']=='La couleur venue du ciel'){
		echo 'Vous avez choisi la couleur venue du ciel dans la liste deroulante';
	}	
}
else{
	echo 'Vous n\'avez rien choisi dans la liste déroulante';
}

echo $_SERVER['REMOTE_ADDR'];