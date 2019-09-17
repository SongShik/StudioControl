<?php



session_start();
include 'db.php';
include 'view/login.php';
/*
if(isset($_SESSION['login'])){
    echo "<br> passou arrombado"; 
    if(isset($_GET['pagina'])){
        
        $pagina = $_GET['pagina'];
                
    }
    else{
        $pagina ='login';
    }
}
else{
    $pagina ='login';
}

switch($pagina){
    case'home': include 'view/home.php'; break;
    default : include 'view/login.php'; break;
   //default : include 'db.php'; break;
}


*/

