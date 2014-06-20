                        <li class="">
                            <a href="#">
                                <i class="fa fa-dashboard"></i> <span>Dashboard</span>
                            </a>
                        </li> 
                        
                            <li>
                            <a class="use" href="<?php echo site_url("user/my_projects/");?>">
                                <i class="fa fa-th-large"></i> <span>My Projects</span>
                            </a>
                        </li>
                      
                            <li>
                            <a class="uses" href="<?php echo site_url("user/my_tasks/");?>">
                                <i class="fa fa-tasks"></i> <span>My Tasks</span>
                            </a>
                        </li>
                      
                        <li>
                            <a class="useS" href="<?php echo site_url("user/new_task/");?>">
                                <i class="fa fa-chain"></i> <span>Create New Task</span>
                            </a>
                        </li>
                                   
                        <li>
                            <a class="use" href="<?php echo site_url("user/my_timesheet/");?>">
                                <i class="fa fa-clock-o"></i> <span>My Timesheet</span>
                            </a>
                        </li>
                        
                        <script>
   $(".useD").on('click',function(e) {
       e.preventDefault();
       var links=$(this).attr('href');
         $.ajax({
                url:links,
                type: 'POST',
                data :'pp=p',
                success: function(data) {
                    d=$(data).find('body');
                    $('body').html(data);
                    }
                }); 
             });   
             
    
</script>