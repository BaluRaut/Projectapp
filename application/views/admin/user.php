<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Avika Project Management tool</title>
        <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
         <?php include("/../loadcss.php");?>
    </head>
    <body class="skin-blue">
        <!-- header logo: style can be found in header.less -->
        <header class="header">
            <?php include("/../header.php"); ?>
        </header>
        <div class="wrapper row-offcanvas row-offcanvas-left">
            <!-- Left side column. contains the logo and sidebar -->
            <aside class="left-side sidebar-offcanvas">
                <!-- sidebar: style can be found in sidebar.less -->
                <section class="sidebar">
                    <!-- Sidebar user panel -->
                    <div class="user-panel" style="display:none">
                        <div class="pull-left image">
                            <img src="img/avatar3.png" class="img-circle" alt="User Image" />
                        </div>
                        <div class="pull-left info">
                            <p>Hello, Jane</p>

                            <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
                        </div>
                    </div>
                    <!-- search form -->
                    <form action="#" method="get" class="sidebar-form">
                 
                    </form>
                    <!-- /.search form -->
                    <!-- sidebar menu: : style can be found in sidebar.less -->
                    <ul class="sidebar-menu">
                      <?php include("sidebar.php"); ?>
                </ul>
                </section>
                <!-- /.sidebar -->
            </aside>
            <!-- Right side column. Contains the navbar and content of the page -->
            <aside class="right-side">
                <!-- Content Header (Page header) -->
             <!-- Main content -->
                <section class="content">
                    <?php if(@$_SESSION['user_created']=="success") {unset($_SESSION['user_created']); 
                    echo "<span id='sess' style='color:#00A65A'> User Created Succesfully </span>" ; } ?>
                    <?php echo form_error("email"); ?>
                    <br/>
                    <?php echo form_error("password"); ?>
                     <div style="color:red" class="error_box">   </div>
                    <?php 
			$attributes = array('id' => 'myform','name'=> 'myform','class'=>'form-horizontal');    
			echo form_open_multipart('admin/user',$attributes);
			?>
                    <input type="hidden" value="submit" name="flag"/>
                    <table>
                         <tr> <td> 
                                <label for="inputSuccess" 
                                       class="control-label"> Name:</label> </td>
                            <td> 
                         <input type="text" class="form-control" id="name" name="name" placeholder="Name">
                                                
                            </td> </tr>
                        <tr> <td> 
                                <label for="inputSuccess" 
                                       class="control-label"> Email (User Name):</label> </td>
                            <td> 
                         <input type="text" class="form-control" id="email" name="email" placeholder="Email (Username)">
                                                
                            </td> </tr>
                         <tr> <td>   <label for="inputSuccess" class="control-label">Password :</label> </td>
                            <td> 
                                <input type="password" class="form-control" 
                                       id="password" name="password" placeholder="Password">
                            </td>
                        </tr>
                        <tr> <td>                    
                                <label for="inputSuccess" class="control-label">User Role:</label> </td>
                            <td> 
                                   <select id="role"   name="role">
                                    <option value="employee">Employee </option>
                                    <option value="admin" > Admin </option>
                                    <option value="project_manager"> Project Manager </option>
                                </select>
                                           
                            </td>
                        </tr>
                       

                        <tr> <td> &nbsp; </td> <td> &nbsp; </td> </tr>
                        <tr>
                            <td> &nbsp; 
                            </td>
                            <td>  
                             <input type="submit" class="btn btn-primary" value="Create User" name="Submit"/>
                            </td> 
                        </tr>
                    </table>
                   
                    </form>
                 </section><!-- /.content -->
            </aside><!-- /.right-side -->
        </div><!-- ./wrapper -->
       <?php include("/../loadjs.php"); ?>      
<script src="<?php echo base_url();?>js/validate.js"></script>

<script type="text/javascript">
    $("#role").select2();
var validator = new FormValidator('myform', [{
    name: 'name',
    rules: 'required'
},
{
    name: 'password',
    rules: 'required'
},
{
    name: 'email',
    rules: 'required|valid_email'
}], function(errors, evt) {
      var SELECTOR_ERRORS = $('.error_box'),
      SELECTOR_SUCCESS = $('.success_box'),
       SELECTOR_SESS = $('#sess');
        
    if (errors.length > 0) {
        SELECTOR_ERRORS.empty();
        
        for (var i = 0, errorLength = errors.length; i < errorLength; i++) {
            SELECTOR_ERRORS.append(errors[i].message + '<br />');
        }
       SELECTOR_SESS.css({ display: 'none' });
        SELECTOR_SUCCESS.css({ display: 'none' });
        SELECTOR_ERRORS.fadeIn(200);
    } else {
             SELECTOR_SESS.css({ display: 'none' });
        SELECTOR_ERRORS.css({ display: 'none' });
        SELECTOR_SUCCESS.fadeIn(200);
    }
    
   
});

</script>
</body>
</html>