<!DOCTYPE html>

<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Social Media Reviews Management | Kudos</title>

	<link rel="shortcut icon" type="image/x-icon" href="<?php echo BASE_URL;?>favicon.ico">

    <!-- Bootstrap core CSS -->
    <link href="<?php echo BASE_URL;?>assets/css/bootstrap.css" rel="stylesheet">

	<link href="<?php echo BASE_URL;?>assets/css/image-picker.css" rel="stylesheet">
	<link href="<?php echo BASE_URL;?>assets/css/bootstrap-select.min.css" rel="stylesheet">

	<link href="<?php echo BASE_URL;?>assets/css/jasny-bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="<?php echo BASE_URL;?>assets/css/main.css" rel="stylesheet">

    <!-- Fonts from Google Fonts -->
	<link rel="stylesheet" href="//fonts.googleapis.com/css?family=Open+Sans:300,400,500,600,700" type="text/css" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">


    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
  </head>

  <body class="<?php echo $controller;?> <?php echo $controller;?>_<?php echo $action;?> <?php echo $controller;?>-<?php echo $action;?>">

  <?php if(empty($noextra)):?>
    <!-- Fixed navbar -->
    <div class="navbar navbar-default">
      <div class="container">
        <div class="navbar-header">
          <a class="navbar-brand" href="<?php echo BASE_URL;?>"><i class="fa fa-thumbs-up fa-3x"></i></a>
        </div>
	  </div>
	  <div class="container">
          <ul class="nav navbar-nav justified">
		    <li <?php if ($controller == 'posts'):?>class="active"<?php endif;?>><a href="<?php echo BASE_URL;?>">Posts</a></li>
			<?php if (hasPermission(10)):?> 
			<li <?php if ($controller == 'team'):?>class="active"<?php endif;?>><a href="<?php echo BASE_URL;?>team">Team</a></li>
			<?php endif;?>
			<?php if (hasPermission(1)):?>           
			<li <?php if ($controller == 'connect'):?>class="active"<?php endif;?>><a href="<?php echo BASE_URL;?>connect">Connect</a></li> 
			<?php endif;?>
			<li <?php if ($controller == 'users'):?>class="active"<?php endif;?>><a href="<?php echo BASE_URL;?>users/logout">Logout</a></li>
          </ul>
      </div>
    </div>
	<?php endif;?>