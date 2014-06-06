
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
                    <li class="active"><a href="<?php echo base_url();?>index.php/user/front">Home</a></li>
                   
                      <li>  <?php echo anchor("user/Add_contacts",'<i class="icon-plus"></i><span class="hidden-tablet"> Create Contact</span>');?> </li>
                        <li>  <?php echo anchor("user/Import_contacts",'<i class="icon-book"></i><span class="hidden-tablet"> Import Contacts</span>');?> </li>
                        <li>  <?php echo anchor("user/contact_management",'<i class="icon-book"></i><span class="hidden-tablet"> Contacts</span>');?> </li>
                                             <li>  <?php echo anchor("user/logout",'<i class="icon-off"></i><span class="hidden-tablet"> Logout</span>');?> </li>
             </ul>
            </div>
        </div>
    </div>