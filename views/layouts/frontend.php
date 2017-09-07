<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\HomeAsset;

HomeAsset::register($this);
?>
<?php $this->beginPage() ?>

<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>

">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link href='https://fonts.googleapis.com/css?family=Khula' rel='stylesheet'>
  <link href='https://fonts.googleapis.com/css?family=Cambay' rel='stylesheet'>
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
   
        <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title>Salgaocar Home Page</title>
    <?php $this->head() ?>
    
</head>
<body>
<?php $this->beginBody() ?>


  <nav class="navbar navbar-default navbar-fixed-top">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
        <a class="navbar-brand" href="#myPage">Salgaocar Engineers</a>
      </div>
      <div class="collapse navbar-collapse" id="myNavbar">
        <ul class="nav navbar-nav navbar-right">
        <li><a href="?r=product/view-products">Products</a></li>
          <li><a href="#about">About Us</a></li>
          <li><a href="#services">Services</a></li>
          <li><a href="#clients">Clientel</a></li>
          <li><a href="#contact">Contact Info</a></li>
          <?php 
            if(!Yii::$app->user->isGuest){
                echo "<li><a href=\"index.php?r=users/view&id=".Yii::$app->user->identity->userid."\">Control Panel</a></li>";
            }
          ?>  
          <?php 
            if(Yii::$app->user->isGuest){
                echo "<li><a href=\"index.php?r=site/login\">LOGIN</a></li>";
            }
            else{
                ?>
                 <li class="dropdown">
                    <a href="#" class="dropdown-toggle btn-default" data-toggle="dropdown">
                        <?php
                echo " <img class='img-round' src='uploads/Paul Pogba.jpg' >&nbsp;". Yii::$app->user->identity->getName() ."";
                ?>
                 </a>
                    <ul class="dropdown-menu menu1">
                        <li>
                            <div class="navbar-login">
                                <div class="row">
                                    <div class="col-lg-4">
                                        <p class="text-center">
                                          <img src="uploads/Paul Pogba.jpg" class="icon-size">
                                        </p>
                                    </div>
                                    <div class="col-lg-8">
                                        <p class="text-left"><strong>Castor Godinho</strong></p>
                                        <p class="text-left small">castorgodinho@yahoo.in</p>
                                        <p class="text-left">
                                            <a href="#" class="btn btn-outlined btn-theme btn-block btn-sm">View Profile</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <div class="navbar-login navbar-login-session">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <p>
                                            <!-- <a href="#" class="btn btn-primary btn-block">LOGOUT</a> -->
                                            <?php echo "<a class='btn btn-outlined btn-theme btn-block' data-method='POST' href=\"index.php?r=site/logout\">  LOGOUT</a>" ?>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </li>
                <?php
            }
            /* <li><a data-method='POST' href=\"index.php?r=site/logout\">(". Yii::$app->user->identity->getName() .") LOGOUT</a></li> */
          ?>
        
        </ul>
      </div>
    </div>
  </nav>

<?= $content?>


<footer class="text-center ">
        <div class="footer-above">
            <div class="container">
                <div class="row">
                    <div class="footer-col col-md-4">
                        <h3>Location</h3>
                        <p class="addr"><span></span>1110, New Delhi House, 27, Barakhamba Road, New Delhi - 110 001</p>
       
        <p><span ></span> sepldel@gmail.com</p>
                    </div>
                    <div class="footer-col col-md-4">
                        <h3>Find us on</h3>
                        	
                    <ul class="social-network social-circle">
                       
                        <li><a href="#" class="icoFacebook icon" title="Facebook"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#" class="icoTwitter icon" title="Twitter"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#" class="icoGoogle icon" title="Google +"><i class="fa fa-google-plus"></i></a></li>
                        <li><a href="#" class="icoLinkedin icon" title="Linkedin"><i class="fa fa-linkedin"></i></a></li>
                    </ul>				
				
                    </div>
                    <div class="col-md-4">
                        <h3>Contact numbers</h3>
                          +91-11-23315929<br>
                          +91-11-23312693
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-below">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        Copyright &copy; salgaocarEngineers.com 2017
                    </div>
                </div>
            </div>
        </div>
    </footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
