<?php


//automatikoki ikusi ea localhosten gauden ala ez

$host=$_SERVER['SERVER_NAME'];

if ($host=="localhost"){
	//localhost-en atzitzeko
	define("HOST","localhost");
	define("USER", "root");
	define("PASS", "");
	define("DATABASE", "erabiltzaileak");
	define("ESTEKA","ShowUsersWithImage.php");
	define("HASIERA","layout.php");
	define("SIGNUP","signUp.php");

}else{
	//hostingerren atzitzeko
	define("HOST","mysql.hostinger.es");
	define("USER", "u418151680_ab");
	define("PASS", "123456");
	define("DATABASE", "u418151680_ab");
	define("ESTEKA","http://artzeberri.16mb.com/ShowUsersWithImage.php");
	define("HASIERA","http://artzeberri.16mb.com/layout.php");
	define("SIGNUP","http://artzeberri.16mb.com/signUp.php");
}

?>
