<?php
   
    if (empty($_POST["language"])){
    	
    	$lang = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0,2);
		$_SESSION['language']=$lang;
		if($lang!="es"){
			$_SESSION['language']="en";
		}
		
    } 
	
	if (isset($_POST['language'])){
		$language = $_POST['language'];
		$lang=$language;
		
	}
	switch ($lang) {
		case 'es':
				include 'lang/es.php';	
			break;
			
		case 'en':
				include 'lang/en.php';	
			break;
		default:
				include 'lang/en.php';	
			break;
	}
