<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Avika Project Management tool</title>
        <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
         <?php include("loadcss.php");?>
    </head>
    <body class="skin-blue">
        <!-- header logo: style can be found in header.less -->
        <header class="header">
            <?php include("header.php"); ?>
        </header>
        <div class="wrapper row-offcanvas row-offcanvas-left">
            <!-- Left side column. contains the logo and sidebar -->
            <aside class="left-side sidebar-offcanvas">
                <!-- sidebar: style can be found in sidebar.less -->
          </aside>

            <!-- Right side column. Contains the navbar and content of the page -->
            <aside class="right-side">
                <!-- Content Header (Page header) -->
             <!-- Main content -->
                <section class="content">
                    <?php if(@$success=="logout") echo "You are successfully Log out"; ?>
                   <div class="login-box">

			<h2>Login to your account</h2>

			<?php 
			$attributes = array( 'id' => 'myform','name'=> 'myform','class'=>'form-horizontal' );    
			echo form_open_multipart('user/login',$attributes);
			?>
			<div class="error_box" style="color:red">  </div>
			<input type="hidden" name="flag" value="Login"/>
			<fieldset>
			<div id="legend" class="">
			<legend class=""> </legend>
			</div>
			<input type="hidden" name="flag" value="Login"/>
			<p style="color:red"> <?php echo @$err; ?> </p>
			<?php echo form_error("username"); ?>
			<div class="form-group">
                            Username:
			<div class="input-group">
			<div class="input-group-addon">
			<i class="fa fa-user"></i>
			</div>
			<input type="text"  placehoder="User Name" id="username" name="username" class="form-control">
			</div><!-- /.input group -->
			</div>
			<br/>
			<?php echo form_error("password"); ?>
			<div class="clearfix"></div>
			<br/>

			<div class="form-group">
                            Password:
			<div class="input-group">
			<div class="input-group-addon">
			<i class="fa fa-star"></i>
			</div>
			<input type="password"  placehoder="Password" id="password" name="password" class="form-control">
			</div><!-- /.input group -->
			</div>
			<div class="btn-group button-login">	
			<button type="submit" class="btn btn-primary">Login</button>
			</div>
			</form>
		</div><!--/span-->
               </section><!-- /.content -->
            </aside><!-- /.right-side -->
        </div><!-- ./wrapper -->
<script type="text/javascript"
     src="http://cdnjs.cloudflare.com/ajax/libs/jquery/1.8.3/jquery.min.js">
    </script> 

    <link rel="stylesheet" type="text/css" href="http://localhost/api/js/jquery.datetimepicker.css"/ >
<script src="/jquery.js"></script>
<script src="http://localhost/api/js/jquery.datetimepicker.js"></script>
<script src="http://localhost/api/js/validate.js"></script>
<script type="text/javascript">
var validator = new FormValidator('myform', [{
    name: 'username',
    rules: 'required|valid_email'
},
{
    name: 'password',
    rules: 'required'
}], function(errors, evt) {
      var SELECTOR_ERRORS = $('.error_box'),
      SELECTOR_SUCCESS = $('.success_box');
        
    if (errors.length > 0) {
        SELECTOR_ERRORS.empty();
        
        for (var i = 0, errorLength = errors.length; i < errorLength; i++) {
            SELECTOR_ERRORS.append(errors[i].message + '<br />');
        }
        SELECTOR_SUCCESS.css({ display: 'none' });
        SELECTOR_ERRORS.fadeIn(200);
    } else {
             
        SELECTOR_ERRORS.css({ display: 'none' });
        SELECTOR_SUCCESS.fadeIn(200);
    }
    
   
});

</script>
        <!-- add new calendar event modal -->
          <?php include("loadjs.php"); ?>      

    </body>
</html>