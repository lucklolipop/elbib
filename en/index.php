<?php
 include_once 'Api/elbib.php';


switch ($_GET["page"]) {
	case 'subjects'://тематика
		# code...
		break;
	case 'content'://содержание
		# code...
		break;
	case 'authors'://авторы
		# code...
		break;
	case 'archive'://Архив
		# code...
		break;



	//рекомендации
	case 'forauthors'://авторам
		# code...
		break;
	case 'forreviewers'://рецензентам
		# code...
		break;
	case 'foreditors'://редакторам
		# code...
		break;


	//О журнале
	case 'forreviewers'://рецензентам
		# code...
		break;
	case 'forreviewers'://рецензентам
		# code...
		break;
	case 'forreviewers'://рецензентам
		# code...
		break;
	case 'forreviewers'://рецензентам
		# code...
		break;
	default:
		getMainPage();
		break;
}
?>