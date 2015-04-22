
<?php
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use frontend\widgets\Alert;
//new add from signup for form of signup

use yii\bootstrap\ActiveForm;
//

/* @var $this \yii\web\View */
/* @var $content string */
//AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<html lang="en">
     <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Tsa</title>

    <!-- Bootstrap -->
    <link href="<?php echo Yii::getAlias('@web') ?>/extradesign/css/font-awesome.css" rel="stylesheet">
    <link href="<?php echo Yii::getAlias('@web') ?>/extradesign/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo Yii::getAlias('@web') ?>/extradesign/css/style.css" rel="stylesheet">
     <link rel="stylesheet" href="<?php echo Yii::getAlias('@web') ?>/extradesign/CSS/slicknav.css">
     




	<!-- Modernizr -->
  <script src="<?php echo Yii::getAlias('@web') ?>/extradesign/js/modernizr.js"></script>
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>



    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->


  </head>
  <body>
      <?php $this->beginBody() ?>
       <?php $getid =  Yii::$app->user->id; ?>
	<header class="headr_two">
    	<div class="container">
        	<div class="col-md-4 margn_top"><figure class="login_section"><img src="<?php echo Yii::getAlias('@web') ?>/extradesign/images/logo.png" class="img-responsive"></figure></div>
            <div class="col-md-4 col-sm-12 col-xs-12 pull-right">
                 <?php if(!empty($getid))  { ?>
            <a href="<?php echo Yii::getAlias('@web') ?>/index.php?r=vehicle%2Fmygarage&id=<?php echo $getid ?>" class="garge">
            	<img src="<?php echo Yii::getAlias('@web') ?>/extradesign/images/garge.png">
                My Garage (0)
            </a>
                 <?php }?>
           <?php     if (!\Yii::$app->user->isGuest) {
           // return $this->goHome(); ?>
             <div class="logian_main">
            	<ul class="list-unstyled list-inline center-block">
                	<li>
                            <a href="index.php?r=site/logout" data-method="post" ><span class="glyphicon glyphicon-user" aria-hidden="true"></span>Logout</a>
                        </li>
                    	
                    
                </ul>
            </div>
      <?php  }else{ ?>
                <div class="logian_main">
            	<ul class="list-unstyled list-inline center-block">
                	<li><a href="#"  data-toggle="modal" data-target="#myLogin"><span class="glyphicon glyphicon-user" aria-hidden="true"></span> Login</a></li>
                    	<li>|</li>
                    <li><a href="#" data-toggle="modal" data-target="#myLogin"><span class="glyphicon glyphicon-check" aria-hidden="true"></span>Register</a></li>
                </ul>
            </div>
          
          
  <?php    } ?>	
            </div>
          	<div class="navi_top">
        <ul id="menu">
    		        	         <li><a href="index.php">Home</a>
                    </li>
                   <?php if(!empty($getid))  { ?>
                    <li>
                        <a href="<?php echo Yii::getAlias('@web') ?>/index.php?r=vehicle%2Fmygarage&id=<?php echo $getid ?>">Account</a>
                    </li>
                   <?php }?>
                     <li>
                        <a href="#">General Listings</a>
                    </li>
                     <li>
                        <a href="index.php?r=site%2Fterms">Terms & Condition</a>
                    </li>
                     <li>
                        <a href="index.php?r=site%2Ffaq">FAQ</a>
                    </li>
                     <li>
                        <a href="index.php?r=site%2Fcontactus">Contact Us</a>
                    </li>
</ul>

<div id="demo1"></div>
</div>
			
            
            
            
             
            
   </div>
   </header>
      
         <?= $content ?>

      <footer class="bg_ftr">
	<div class="container">
    	<p class="copyright">Copyright 2015 - 2016, All Rights Reserved.</p>
    </div>
</footer>


<!------------popup------------------>



<
<!-- Modal Register -->


    <!-- MENU -->
   <script src="http://cdnjs.cloudflare.com/ajax/libs/modernizr/2.6.2/modernizr.min.js"></script>
   <script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
<script src="<?php echo Yii::getAlias('@web') ?>/extradesign/js/jquery.slicknav.js"></script>
<script type="text/javascript">
$(document).ready(function(){
	$('#menu').slicknav({
		prependTo:'#demo1'
});

});
</script>

  
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?php echo Yii::getAlias('@web') ?>/extradesign/js/bootstrap.min.js"></script>
    


    <?php // $this->endBody() ?>
  </body>
</html>
<?php  $this->endPage() ?>