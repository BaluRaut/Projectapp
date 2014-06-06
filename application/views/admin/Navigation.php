
<style>  
.sidebar-nav {
    padding: 9px 0;
}

.dropdown-menu .sub-menu {
    left: 100%;
    position: absolute;
    top: 0;
    visibility: hidden;
    margin-top: -1px;
}

.dropdown-menu li:hover .sub-menu {
    visibility: visible;
}

.dropdown:hover .dropdown-menu {
    display: block;
}

.nav-tabs .dropdown-menu, .nav-pills .dropdown-menu, .navbar .dropdown-menu {
    margin-top: 0;
}

.navbar .sub-menu:before {
    border-bottom: 7px solid transparent;
    border-left: none;
    border-right: 7px solid rgba(0, 0, 0, 0.2);
    border-top: 7px solid transparent;
    left: -7px;
    top: 10px;
}
.navbar .sub-menu:after {
    border-top: 6px solid transparent;
    border-left: none;
    border-right: 6px solid #fff;
    border-bottom: 6px solid transparent;
    left: 10px;
    top: 11px;
    left: -6px;
}
</style>
<div class="navbar-inner">
        <div class="container">
            <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </a>
            <a class="brand" href="#"><i class="icon-cloud "></i><a href="<?php echo base_url();?>" class="brand"><img width="30" height="50" src="<?php echo  base_url();?>img/symbol.png">TechData99</p></a>   </a>
            <div class="nav-collapse collapse">
                <ul class="nav pull-right">
                    <li class="active"><a href="<?php echo base_url();?>index.php/admin/front">Home</a></li>
                   
                    <li class="dropdown">
  <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="48" data-close-others="false">
  User <b class="caret"></b>
  </a>
   <ul class="dropdown-menu">
       <li>  <?php echo anchor("admin/add_user",'<i class="icon-plus"></i><span class="hidden-tablet"> Create User</span>');?> </li>
       <li>  <?php echo anchor("admin/user_management",'<i class="icon-user"></i><span class="hidden-tablet"> User </span>');?> </li>
   </ul>
</li>

                    <li class="dropdown">
  <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="48" data-close-others="false">
  Member <b class="caret"></b>
  </a>
   <ul class="dropdown-menu">
       <li>  <?php echo anchor("admin/add_member",'<i class="icon-plus"></i><span class="hidden-tablet">Add Member </span>');?> </li>
       <li>  <?php echo anchor("admin/member_managements",'<i class="icon-qrcode"></i><span class="hidden-tablet"> Member </span>');?> </li>
       <li>  <?php echo anchor("admin/paidmember_management",'<i class="icon-qrcode"></i><span class="hidden-tablet"> Paid Member </span>');?> </li>
        <li>  <?php echo anchor("admin/download_management",'<i class="icon-qrcode"></i><span class="hidden-tablet"> Download</span>');?> </li>
   </ul>
</li>
<li class="dropdown">
  <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="48" data-close-others="false">
  Contacts <b class="caret"></b>
  </a>
   <ul class="dropdown-menu">
          <li>  <?php echo anchor("admin/add_contacts",'<i class="icon-plus"></i><span class="hidden-tablet"> Add Contacts </span>');?> </li>
          <li>  <?php echo anchor("admin/Import_contacts",'<i class="icon-book"></i><span class="hidden-tablet"> Import Contacts</span>');?> </li>
          <li>  <?php echo anchor("admin/usercontact_management",'<i class="icon-qrcode"></i><span class="hidden-tablet"> Contacts </span>');?> </li>
   </ul>
</li>

        <li>  <?php echo anchor("admin/logout",'<i class="icon-off"></i><span class="hidden-tablet"> Logout</span>');?> </li>
                </ul>
            </div>
        </div>
    </div>