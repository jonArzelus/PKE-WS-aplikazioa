<?php

	//ikus ea sesio bat hasi den eta ez bada hala guest ezarri
	if((isset($_SESSION['eposta']) && !empty($_SESSION['eposta'])) && (isset($_SESSION['konexioid']) && !empty($_SESSION['konexioid'])) && (isset($_SESSION['erabiltzaileMota']) && !empty($_SESSION['erabiltzaileMota']))) {
   		null;
	} else {
		$_SESSION['eposta'] = "Erabiltzaile Anonimoa";
		$_SESSION['konexioid'] = -1;
		$_SESSION['erabiltzaileMota'] = "GUEST";
		$_SESSION['erabiltzaileIrudia'] = 'irudiak/user-icon.png';
	}

?>
<nav class="navbar navbar-default" style="margin-bottom:0px;">
  <div class="container-fluid">
    <ul class="nav navbar-nav navbar-right">
    <?php if($_SESSION['erabiltzaileMota']=="GUEST") { ?>
      <?php if($_GET['orrialdea']=="signUp") { ?>
        <li class="active"><a onmouseover="this.style.color='#00f';" onmouseleave="this.style.color='#777';" href="signUp.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
      <?php } else { ?>
        <li><a onmouseover="this.style.color='#00f';" onmouseleave="this.style.color='#777';" href="signUp.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
      <?php } ?>
      <li><a onmouseover="this.style.color='#0f0';" onmouseleave="this.style.color='#777';" href="SignIn.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
      <?php } else { ?>
      <li><a onmouseover="this.style.color='#f00';" onmouseleave="this.style.color='#777';" href="LogOut.php"><span class="glyphicon glyphicon-off"></span> Logout</a></li>
      <?php } ?>
    </ul>
  </div>
</nav>
<nav class="navbar navbar-default sidebar" role="navigation">
    <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-sidebar-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>      
    </div>
    <div class="collapse navbar-collapse" id="bs-sidebar-navbar-collapse-1">
      <ul class="nav navbar-nav">
      <?php if($_GET['orrialdea']=="layout") { //Hasiera ?>
        <li class="active"><a href="layout.php">Hasiera<span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-home"></span></a></li>
      <?php } else { ?>
        <li><a href="layout.php">Hasiera<span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-home"></span></a></li>
      <?php } ?>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">Galderak <span class="caret"></span><span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-question-sign"></span></a>
          <ul class="dropdown-menu forAnimate" role="menu">
          <?php if($_GET['orrialdea']=="galderakIkusi") { //Galderak ikusi ?>
            <li class="active"><a href="seeXMLQuestions.php">Galderak ikusi</a></li>
          <?php } else { ?>
            <li><a href="seeXMLQuestions.php">Galderak ikusi</a></li>
          <?php } ?>
          <?php if($_SESSION['erabiltzaileMota'] != "GUEST") {
          if($_GET['orrialdea']=="handlingQuizes") { //galderak sortu ?>
            <li class="active"><a href="handlingQuizes.php">Galderak sortu</a></li>
          <?php } else { ?>
            <li><a href="handlingQuizes.php">Galderak sortu</a></li>
          <?php }} ?>
            <?php if($_SESSION['erabiltzaileMota'] == "IRAKASLEA") {
            if($_GET['orrialdea']=="reviewingQuizes") { //galderak kudeatu ?>
              <li class="divider"></li>
              <li class="active"><a href="reviewingQuizes.php">Galderak kudeatu</a></li>
            <?php } else { ?>
              <li class="divider"></li>
              <li><a href="reviewingQuizes.php">Galderak kudeatu</a></li>
            <?php }} ?>
          </ul>
        </li>
        <?php if($_SESSION['erabiltzaileMota'] == "IRAKASLEA") { //irakaslea da ?>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">Erabiltzaileak <span class="caret"></span><span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-user"></span></a>
          <ul class="dropdown-menu forAnimate" role="menu">
          <?php if($_GET['orrialdea']=="erabiltzaileakIkusi") { //erabiltzaileak ikusi ?>    
            <li class="active"><a href="erabiltzaileakIkusi.php">Erabiltzaileak ikusi</a></li>  
          <?php } else { ?>
            <li><a href="erabiltzaileakIkusi.php">Erabiltzaileak ikusi</a></li> 
          <?php } ?>
          <li class="divider"></li>
          <?php if($_GET['orrialdea']=="ikasleakIkusi") { //erabiltzaileak ikusi 2 ?>
            <li class="active"><a href="getUserInform.php">Ikasleak ikusi</a></li>
          <? } else { ?>
            <li><a href="getUserInform.php">Ikasleak ikusi</a></li>
          <?php } ?>
          </ul>
        </li>
        <?php } else { ?>
          <?php if($_GET['orrialdea']=="erabiltzaileakIkusi") { //erabiltzaileak ikusi ?>    
            <li class="active"><a href="erabiltzaileakIkusi.php">Erabiltzaileak ikusi<span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-user"></span></a></li>  
          <?php } else { ?>
            <li><a href="erabiltzaileakIkusi.php">Erabiltzaileak ikusi<span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-user"></span></a></li> 
          <?php } ?>
        <?php } ?>          
        <?php if($_GET['orrialdea']=="credits") { //kredituak ?>      
          <li class="active"><a href="credits.php">Kredituak<span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-info-sign"></span></a></li>
        <?php } else { ?>
          <li><a href="credits.php#">Kredituak<span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-info-sign"></span></a></li>
        <?php } ?>
      </ul>
    </div>
  </div>
</nav>