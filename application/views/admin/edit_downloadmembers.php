<?php include('getheader.php'); ?>

<style>
    
    #Error{
	background-image:url("<?php echo base_url();?>img/no.jpg");
	background-repeat:no-repeat;
	background-position:left; 
	color:#FF0000; 
	padding-left:33px; 
	height:19px; 
	padding-top:6px;
	padding-right:10px;
	}
#Success{
	background-image:url("<?php echo base_url();?>img/yes.jpg");
	background-repeat:no-repeat;
	background-position:left; 
	color:#669933; 
	padding-left:33px; 
	height:19px; 
	padding-top:6px;
	padding-right:10px;
	}
</style>
<script>
$(document).ready(function() {
	$('#Loading').hide();    
});

function check_username(){

	var username = $("#Email").val();
	if(username.length > 2){
		$('#Loading').show();
		$.post("<?php echo base_url();?>index.php/admin/check_member", {
			username: $('#Email').val()
		} ,
                function(response){
			$('#Info').fadeOut();
			 $('#Loading').hide();
			setTimeout("finishAjax('Info', '"+escape(response)+"')", 450);
		});
		return false;
	}
}

function finishAjax(id, response){
 
  $('#'+id).html(unescape(response));
  $('#'+id).fadeIn(1000);
} 

</script>

<?php include('getjs.php'); ?>


    <div class="navbar navbar-fixed-top">
    					<?php include("Navigation.php"); ?>

</div>

<div class="container-fluid">
<div class="row-fluid">
<?php //include('navigation.php'); ?>
<noscript>
<div class="alert alert-block span10">
<h4 class="alert-heading">Warning!</h4>
<p>You need to have <a href="http://en.wikipedia.org/wiki/JavaScript" target="_blank">JavaScript</a> enabled to use this site.</p>
</div>
</noscript>

<div class="row-fluid sortable">
<div class="box span12">
<div class="box-header" data-original-title>

</div>
<div class="box-content">
<?php 
$attributes = array( 'id' => 'myform','name'=> 'myform','class'=>'form-horizontal' );    
echo form_open_multipart('admin/edit_downloadmembers',$attributes);
?>
<input type="hidden" name="flag" value="add"/>

 <fieldset>
      <div id="legend" class="">
        <legend class="">Update Download Account</legend>
      </div>
	<input type="hidden" name="flag" value="add"/>
        
 <table> <tr> <td> 
		<div class="control-group">

          <!-- Text input-->
          <label class="control-label" for="input01">Download Limit<sup style="color:red">*</sup></label>
          <div class="controls">
		  
		    <?php echo form_error("Download_limit"); ?>
            <input placeholder="Download_limit" class="input-xlarge"  name="Download_limit" 
			 value="<?php echo @$Download_limit;?>" type="text"/>
            <p class="help-block"></p>
          </div>
        </div>
</td> </tr> <tr> <td>
    <div class="control-group">

          <!-- Text input-->
          <label class="control-label" for="input01">Download Status<sup style="color:red">*</sup></label>
          <div class="controls">
		  <?php echo form_error('Download_status');?>
            <input placeholder="Download_status" class="input-xlarge" ID="LastName" name="Download_status"  value="<?php echo @$Download_status;?>"  type="text">
            <p class="help-block"></p>
          </div>
        </div>
		</td> <td>
    <div class="control-group">

          <!-- Text input-->
          <label class="control-label" for="input01">Current Status<sup style="color:red">*</sup></label>
          <div class="controls">
		  <?php echo form_error('Current_download'); ?>
            <input placeholder="Currrent Download" class="input-xlarge" type="text" value="<?php echo @$Current_download; ?>" name="Current_download"   >
     </div>
        </div>
		</td> </tr> <tr> <td>

           <div class="control-group">

          <!-- Text input-->
          <label class="control-label" for="input01">Email<sup style="color:red">*</sup></label>
          <div class="controls">
		  <?php echo form_error('Email'); ?>
            <input placeholder="Email" class="input-xlarge" id="disabledInput" type="text" ID="Email"  name="Email" onblur="return check_username();"  value=<?php echo @$Email; ?>  disabled>			

            <p class="help-block">
        	<span id="Loading"><img src="<?php echo base_url();?>/img/loader.gif" alt="" /></span> <div id="Info"></div>
		</td> <td>
<div class="control-group">

          <!-- Text input-->
          <label class="control-label" for="input01">View Limit<sup style="color:red">*</sup></label>
          <div class="controls">
		  
		    <?php echo form_error("view_limit"); ?>
            <input placeholder="Viewlimit" class="input-xlarge"  name="view_limit" 
			 value="<?php echo @$view_limit;?>" type="text"/>
            <p class="help-block"></p>
          </div>
        </div>
</td> </tr> <tr> <td>

    <div class="control-group">

          <!-- Text input-->
          <label class="control-label" for="input01">View Status<sup style="color:red">*</sup></label>
          <div class="controls">
		  <?php echo form_error('view_stats');?>
            <input placeholder="View_status" class="input-xlarge"  name="view_stats"  value="<?php echo @$view_stats;?>"  type="text">
            <p class="help-block"></p>
          </div>
        </div>
        
                
            </p>
          </div>
        </div>

</td> <td> 
    <div class="control-group">

          <!-- Text input-->
          <label class="control-label" for="input01">View Current Status<sup style="color:red">*</sup></label>
          <div class="controls">
		  <?php echo form_error('current_view'); ?>
            <input placeholder="current_view" class="input-xlarge" type="text" value="<?php echo @$current_view; ?>" name="current_view"   >
     </div>
        </div>
   </td> </tr> </table>

		<div class="control-group">

          <!-- Text input-->
            <div class="control-group">
          <!-- Button -->
          <div class="controls">
            <input type="submit" class="btn btn-success" value="Update Download Status"/>
                  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 
                   <?php echo anchor('admin/front','<span class="btn btn-warning" > Cancel </span>'); ?>

          </div>
		  </div>
    </fieldset>


</form>   </div></div><!--/span--></div><!--/row--><div class="clearfix"></div><hr><?php include('footer.php'); ?>			
</div><!--/.fluid-container--><?php include('getjs.php'); ?>