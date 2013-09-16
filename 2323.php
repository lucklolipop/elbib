<?php
 include_once 'Api/elbib.php';


session_start();
if(!empty($_GET['language']) || empty($_SESSION['language']))
{
	switch ($_SESSION['language']) {
		case 'en':
			$_SESSION['language'] ='en';
			break;
		default:
			$_SESSION['language'] ='ru';
			break;
	}	
}



switch ($_GET["type"]) {
	//Для читателей
	case 'forreaders':
		getPage( $_GET["type"] , $_GET["page"]);
		break;
	//рекомендации
	case 'recommendations':
		getPage( $_GET["type"] , $_GET["page"]);
		break;
	//О журнале
	case 'about':
		getPage( $_GET["type"] , $_GET["page"]);
		break;

	default:
		getMainPage();
		break;
}
?>