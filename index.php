<?php
  
    if(isset($login_cookie)){
    	$login_cookie = $_COOKIE['login'];
     echo"<script language='javascript' type='text/javascript'>;window.location.href='system.html';</script>";
    }else{
      echo"<br><a href='indexf.html'>Faça Login</a> Para acessar o sistema!";
    }
?>