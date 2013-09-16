<?php

function getMainPage(){
  $template = file_get_contents($_SESSION['language'].'/content/default.php');
  $main_content = file_get_contents($_SESSION['language'].'/content/main/main.html');
  $template = str_replace('$content', $main_content,  $template);
  echo $template;
}

function getPage($type , $page){
	$template = file_get_contents($_SESSION['language'].'/content/default.php');
	$main_content = file_get_contents($_SESSION['language'].'/content/'.$type.'/'.$page.'.html');
    $template = str_replace('$content', $main_content,  $template);
	echo $template;
}

?>