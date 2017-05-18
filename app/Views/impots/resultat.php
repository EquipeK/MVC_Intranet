<?php 
if(!empty($impot)){
echo $nom.' votre impot du à l\'état est de : '.$impot. ' €';
}else{
	echo 'Merci de saisir votre revenu';
}
?>
<br /><a href="<?= BASE_URL.DS.'impots/impot' ;?>"><button class="btn btn-primary">nouveau</button></a>
