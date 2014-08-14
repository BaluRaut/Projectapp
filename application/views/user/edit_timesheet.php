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
                  <div style="color:red" class="error_box">   </div>
                    <?php 
			$attributes = array('id' => 'myform','name'=> 'myform','class'=>'form-horizontal');    
			echo form_open_multipart('',$attributes);
			?>
                  <input type="hidden" name="ti_id" id="ti_id" value="<?php echo $timesheet_data[0]['time_id'];?>"/>
                  <input type="hidden" name="task_id" id="task_id" value="<?php echo $timesheet_data[0]['task_id'];?>"/>
                  <input type="hidden" name="task_time_start"  value="<?php echo $timesheet_data[0]['StartDate'];?>"/>
                  <input type="hidden" name="task_time_end" value="<?php echo $timesheet_data[0]['EndDate'];?>"/>
                  <input type="hidden" value="submit" id="flag"  name="flag"/>
                    <?php echo "Time Updating for task:  <b>   &nbsp; &nbsp; &nbsp;".$timesheet_data[0]['task_name']; ?> </b>
                <br/>
                <br/>
                <?php echo "Current Logged hours:&nbsp; &nbsp; <b class='bg bg-blue' style='font-size:18px;'> ".$timesheet_data[0]['time_add']."</b> &nbsp; &nbsp;   To &nbsp; &nbsp; <b class='bg bg-blue' style='font-size:18px;'> ".$timesheet_data[0]['time_end'];
                echo "</b> <br/> Total Hours:&nbsp; &nbsp; <b style='font-size:15px;' class='bg bg-fuchsia'> ".$timesheet_data[0]['totalhours'];?> </b>
                
                <br/>
                <br/>
                    <table class="">
                                                      
                        <tr>
                            <td> 
                                <label> Start Time:</label> </td>
                             <td> <input type="text" placeholder="Start Date" name="date_timepicker_start" 
                                    id="date_timepicker_start" value="<?php  $r=explode(" ",$timesheet_data[0]['StartDate']); echo $r[0];?>" class="form-control col-xs-5">
                             
                                <select class="logtimeaddselect w45px" id="logfromhr" name="logfromhr"> 
                                <option value="01">01</option><option value="02">02</option><option value="03">03</option><option value="04">04</option>
                                <option value="05">05</option><option value="06">06</option><option value="07">07</option><option value="08">08</option>
                                <option value="09">09</option><option value="10">10</option><option value="11">11</option><option value="12">12</option>   
                                </select>&nbsp;   

                                <select class="logtimeaddselect w45px" id="logfrommins" name="logfrommins">
                                <option selected="" value="00">00</option><option value="05">05</option>
                                <option value="10">10</option><option value="15">15</option>
                                <option value="20">20</option><option value="25">25</option>
                                <option value="30">30</option><option value="35">35</option>
                                <option value="40">40</option><option value="45">45</option>
                                <option value="50">50</option><option value="55">55</option>   
                                </select>&nbsp;     

                                <select class="logtimeaddselect w45px" id="logfromampm" name="logfromampm">
                                <option value="am">am</option>  <option value="pm">pm</option>
                                </select>&nbsp;     <!--<% } %>-->  <span class="txtDisabled pl5 pr5">to</span>  
                        </td>
                        </tr>
                        <tr>
                            <td> 
                                <label> &nbsp; </label> </td>
                             <td>        &nbsp;  &nbsp;      </td>
                        </tr>
                        <tr>
                            <td> <label > End Time:</label>
                            </td>
                            <td>   
                            <input type="text" placeholder="End Date" name="date_timepicker_end" 
                                    id="date_timepicker_end" value="<?php $r=explode(" ",$timesheet_data[0]['EndDate']); echo $r[0];?>"  class="form-control">
                             <select class="logtimeaddselect w45px mt8" id="logtohr" name="logtohr">   
                            <option value="01">01</option><option value="02">02</option>
                            <option value="03">03</option><option value="04">04</option>
                            <option value="05">05</option><option value="06">06</option>
                            <option value="07">07</option><option value="08">08</option>
                            <option value="09">09</option><option value="10">10</option>
                            <option value="11">11</option><option value="12">12</option>  
                            </select>&nbsp; 
                            <select class="logtimeaddselect w45px mt8" id="logtomins" name="logtomins">  
                            <option selected="" value="00">00</option><option value="05">05</option>
                            <option value="10">10</option><option value="15">15</option>
                            <option value="20">20</option><option value="25">25</option>
                            <option value="30">30</option><option value="35">35</option>
                            <option value="40">40</option><option value="45">45</option>
                            <option value="50">50</option><option value="55">55</option>  
                            </select>&nbsp;    <select class="logtimeaddselect w45px mt8" id="logtoampm" name="logtoampm">  
                            <option value="am">am</option>  <option value="pm">pm</option>  </select> 
                          </td> 
                        </tr>
                         <tr> <td> &nbsp; </td> <td> &nbsp; </td> </tr>
                         <tr> <td> &nbsp; </td> <td>  <input onclick="oncheck();" type="button" class="btn btn-primary" value="Update Time" name="Submit"/> </td> 
                        </tr>
                    </table>                   
                    </form>
                 </section><!-- /.content -->
            </aside><!-- /.right-side -->
        </div><!-- ./wrapper -->
 <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/js/jquery.datetimepicker.css"/ >
<script src="<?php echo base_url();?>js/jquery.datetimepicker.js"></script>
<script src="<?php echo base_url();?>js/validate.js"></script>
    <script>
    $(document).ready(function() { 
        $("#project_name").select2();
        $("#users").select2( {maximumSelectionSize: 5,closeOnSelect:false });
        var ingnore_key_codes = [8,9,13,16,17,18,19,20,27,32,33,34,35,36,37,38,39,40,44,45,46,48,49,50,51,52,53,54,55,56,57,65,66,67,68,69,70,71,72,73,74,75,76,77,78,79,80,81,82,83,84,85,86,87,88,89,90,91,92,93,96,97,98,99,100,101,102,103,104,105,106,107,109,110,111,112,113,114,115,116,117,118,119,120,121,122,123,144,145,186,187,188,189,190,191,219,220,221,222];
        $('#date_timepicker_start').keydown(function(e){
           if ($.inArray(e.keyCode, ingnore_key_codes) >= 0){
              e.preventDefault();
           }
        });
         $('#date_timepicker_end').keydown(function(e){
           if ($.inArray(e.keyCode, ingnore_key_codes) >= 0){
              e.preventDefault();
           }
        });
    });
    </script>
<script type="text/javascript">
jQuery(function(){          
    var edate="";
    var edt="";
    var std="";
        
    edate=jQuery("#project_name").val();         //alert(edate);
    edt=jQuery("#date_timepicker_end").val();            
    std=jQuery("#date_timepicker_start").val();
    
    
    jQuery("#project_name").on("change", function() {
         edate=jQuery("#project_name").val();
         edt=jQuery("#end"+edate).val();
         std=jQuery("#std"+edate).val();
    });
    
    jQuery('#date_timepicker_start').datetimepicker({
        format:'Y-m-d',
        onShow:function( ct ){
             this.setOptions({       
            maxDate:edt,formatDate:'Y-m-d',
            minDate:std,formatDate:'Y-m-d'
            })
        },
        timepicker:false
    });
    
    jQuery('#date_timepicker_end').datetimepicker({
        format:'Y-m-d',
        onShow:function( ct ){
            this.setOptions({
             maxDate:edt,formatDate:'Y-m-d',
             minDate:jQuery('#date_timepicker_start').val()?jQuery('#date_timepicker_start').val():edt
            })
        },
        timepicker:false
    });
});

function oncheck()
{
    
var startDate = new Date($('#date_timepicker_start').val());
var endDate = new Date($('#date_timepicker_end').val());

if (startDate > endDate){
    
 alert("Start_Date can not be greater than end date. ");
 
}else {
     $.ajax({
       url: '<?php echo site_url('/user/update_task_timesheet/');?>',
       type: 'POST',
       data:"time_id="+$("#ti_id").val()+"&task_id="+$("#task_id").val()+"&flag="+$("#flag").val()+
       "&datestart="+$("#date_timepicker_start").val()+"&logfromhr="+$("#logfromhr").val()+
       "&logfrommins="+$("#logfrommins").val()+"&logfromampm="+$("#logfromampm").val()+
       "&dateend="+$("#date_timepicker_end").val()+"&logtohr="+$("#logtohr").val()+
       "&logtomins="+$("#logtomins").val()+"&logtoampm="+$("#logtoampm").val(),
        success: function(data) {
              window.location.href="<?php echo site_url('/user/my_timesheet/');?>"
        }
       }); 
 
}
   
}
</script> 
<script type="text/javascript">
var validator = new FormValidator('myform', [{
    name: 'date_timepicker_start',
    rules: 'required'
},
{
    name: 'date_timepicker_end',
    rules: 'required'
},
{
    name: 'project_name',
    rules: 'required'
},
{
    name: 'task_name',
    rules: 'required'
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