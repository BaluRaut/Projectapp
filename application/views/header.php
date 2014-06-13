    
            <a href="<?php echo base_url();?>" class="logo">
                <!-- Add the class icon to your logo image or logo icon to add the margining -->
                Avika Project Management Application
            </a>
<style> 
   .input-group .form-control {
    margin-bottom: 0;
    width: 24%;
}
.form-group.has-success .form-control {
    border-color: inactivecaption !important;
    box-shadow: none;
}
.select2-container-multi .select2-choices {
    background-color: #FFFFFF;
    background-image: linear-gradient(to bottom, #EEEEEE 1%, #FFFFFF 15%);
    border: 1px solid #AAAAAA;
    cursor: text;
    height: auto !important;
    margin: 0 0 0 -15px;
    overflow: hidden;
    position: relative;
}
</style>
            <!-- Header Navbar: style can be found in header.less -->
            <nav class="navbar navbar-static-top" role="navigation">
                <!-- Sidebar toggle button-->
                <a href="#" class="navbar-btn sidebar-toggle" data-toggle="offcanvas" role="button">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </a>
                <?php if(isset($_SESSION['admin_name'])) { ?>
                <div class="navbar-right" style="">
                    <ul class="nav navbar-nav">
                        <!-- Messages: style can be found in dropdown.less-->
                        <!-- User Account: style can be found in dropdown.less -->
                        <li class="dropdown user user-menu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="glyphicon glyphicon-user"></i>
                                <span>   <?php echo $_SESSION['admin_name']; ?> <i class="caret"></i></span>
                            </a>
                            <ul class="dropdown-menu">
                                <!-- User image -->
                     
                                <li class="user-footer">
                                    <div class="pull-left">
                                        <a href="#" class="btn btn-default btn-flat">Profile</a>
                                    </div>
                                    <div class="pull-right">
                                        <?php echo anchor('admin/logout', 'Sign out', 
                                                array('title' => 'Sign out','class'=>'btn btn-default btn-flat')); ?>
                                     </div>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <?php } ?>
                <?php if(isset($_SESSION['user_name'])) { ?>
                <div class="navbar-right" style="">
                    <ul class="nav navbar-nav">
                        <!-- Messages: style can be found in dropdown.less-->
                        <!-- User Account: style can be found in dropdown.less -->
                        <li class="dropdown user user-menu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="glyphicon glyphicon-user"></i>
                                <span>   <?php echo $_SESSION['user_name']; ?> <i class="caret"></i></span>
                            </a>
                            <ul class="dropdown-menu">
                                <!-- User image -->                     
                                <li class="user-footer">
                                    <div class="pull-left">
                                        <a href="#" class="btn btn-default btn-flat">Profile</a>
                                    </div>
                                    <div class="pull-right">
                                        <?php echo anchor('user/logout', 'Sign out', 
                                                array('title' => 'Sign out','class'=>'btn btn-default btn-flat')); ?>
                                     </div>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <?php } ?>
            </nav>
    
      