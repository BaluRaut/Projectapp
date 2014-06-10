                        <li class="">
                            <a href="index.html">
                                <i class="fa fa-dashboard"></i> <span>Dashboard</span>
                            </a>
                        </li> 
                        <li class="treeview active">
                            <a href="#">
                                <i class="fa fa-th-large"></i>
                                <span>Project</span>
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu" style="display: block;">
                                <li>
                                    <a href="<?php echo site_url("admin/projects/");?>">
                                        <i class="fa fa-angle-double-right"></i> 
                                        Create Project</a>
                                </li>
                                <li>
                                    <a href="<?php echo site_url("admin/project_management/");?>">
                                        <i class="fa fa-angle-double-right"></i> 
                                        Project Settings</a>
                                </li>
                            </ul>
                         </li>
                   
                        <li>
                            <a href="<?php echo site_url("admin/task/");?>">
                                <i class="fa fa-tasks"></i> <span>Create Task</span>
                            </a>
                        </li>
                        <li class="treeview active">
                            <a href="#">
                                <i class="fa fa-users"></i>
                                <span> User </span>
                                <i class="fa fa-angle-left pull-right"> </i>
                            </a>
                            <ul class="treeview-menu" style="display: block;">
                                <li><a href="<?php echo site_url("admin/user/");?>"><i class="fa fa-angle-double-right"></i> Create User</a></li>
                                <li><a href="<?php echo site_url("admin/user_management/");?>"><i class="fa fa-angle-double-right"></i> User Settings</a></li>
                            </ul>
                        </li> 