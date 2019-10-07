<!DOCTYPE html>


<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Creative - Bootstrap 3 Responsive Admin Template">
  <meta name="author" content="GeeksLabs">
  <meta name="keyword" content="Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">
  

  <title>Login</title>
  <?php echo Html::style('css/bootstrap.min.css'); ?>

  <?php echo Html::style('css/bootstrap-theme.css'); ?>

  <?php echo Html::style('css/elegant-icons-style.css'); ?>

  <?php echo Html::style('css/font-awesome.css'); ?>

  <?php echo Html::style('css/style.css'); ?>

  <?php echo Html::style('css/style-responsive.css'); ?>

 
    
</head>

<body class="login-img3-body">
    
  <h1 align='center'><img alt="" src="img/uoc.png" align="center"></h1>
  <h1 align='center'><font color="#ffffff"> Please Sign in</font> </h1>
  
  <div class="container">
    <form class="login-form" action="<?php echo e(route('login')); ?>" method="post">
		<?php echo csrf_field(); ?>

      <div class="login-wrap">
        <p class="login-img"><i class="icon_lock_alt"></i></p>
        <div class="input-group">
          <span class="input-group-addon"><i class="icon_profile"></i></span>
          <input type="text" name="username" class="form-control" placeholder="Username" autofocus>
        </div>
        <div class="input-group">
          <span class="input-group-addon"><i class="icon_key_alt"></i></span>
          <input type="password" name="password" class="form-control" placeholder="Password">
        </div>
        <label class="checkbox">
                <input type="checkbox" value="remember-me"> Remember me
                <span class="pull-right"> <a href="#"> Forgot Password?</a></span>
            </label>
        <button class="btn btn-primary btn-lg btn-block" type="submit">Login</button>
        <button class="btn btn-info btn-lg btn-block" type="submit">Signup</button>
      </div>
    </form>
    <div class="text-right">
      <div class="credits">
          
         
        </div>
    </div>
  </div>
  
</body>


