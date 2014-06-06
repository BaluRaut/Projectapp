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
echo form_open_multipart('admin/add_member',$attributes);
?>
<input type="hidden" name="flag" value="add"/>

 <fieldset>
      <div id="legend" class="">
        <legend class="">Create Member</legend>
      </div>
	<input type="hidden" name="flag" value="add"/>
        <table> <tr> <td> 
        <div class="control-group">

          <!-- Text input-->
          <label class="control-label" for="input01">Member Type</label>
          <div class="controls">
              <Select name="is_member">
                     <option value="Free">Free Member </option> 
                     <option value="Paid">Paid Member </option>
              </select>
                  
   </div>
        </div>
                </td> <td> 
    <div class="control-group">

          <!-- Text input-->
          <label class="control-label" for="input01">First Name<sup style="color:red">*</sup></label>
          <div class="controls">
		  
		    <?php echo form_error("FirstName"); ?>
            <input placeholder="First Name" class="input-xlarge"  name="FirstName" ID="FirstName" value="<?php echo @$FirstName;?>" type="text"/>
            <p class="help-block"></p>
          </div>
        </div>
                </td> </tr>   <tr> <td> 
    <div class="control-group">

          <!-- Text input-->
          <label class="control-label" for="input01">Last Name<sup style="color:red">*</sup></label>
          <div class="controls">
		  <?php echo form_error('LastName');?>
            <input placeholder="Last Name" class="input-xlarge" ID="LastName" name="LastName"  value="<?php echo @$LastName;?>"  type="text">
            <p class="help-block"></p>
          </div>
        </div>  </td>  <td>  
           <div class="control-group">

          <!-- Text input-->
          <label class="control-label" for="input01">Email<sup style="color:red">*</sup></label>
          <div class="controls">
		  <?php echo form_error('Email'); ?>
            <input placeholder="Email" class="input-xlarge" type="text" ID="Email"  name="Email" onblur="return check_username();"  value=<?php echo @$Email; ?> >			

            <p class="help-block">
                
                			<span id="Loading"><img src="<?php echo base_url();?>/img/loader.gif" alt="" /></span> <div id="Info"></div>

                
            </p>
          </div>
        </div>
                </td> </tr> <tr> <td> 

    <div class="control-group">

          <!-- Text input-->
          <label class="control-label" for="input01">Password<sup style="color:red">*</sup></label>
          <div class="controls">
		  <?php echo form_error('Password'); ?>
            <input placeholder="password" class="input-xlarge" type="password"  name="Password" ID="Password"  >
            <p class="help-block">Enter Secure password must contain the !,@,# characters.</p>
          </div>
        </div>  </td> <td> 
   <div class="control-group">

          <!-- Text input-->
          <label class="control-label" for="input01">Confirm Password<sup style="color:red">*</sup></label>
          <div class="controls">
		  <?php echo form_error('cnfPassword'); ?>
            <input placeholder="confirm password" class="input-xlarge" type="password"  name="cnfPassword" ID="cnfPassword"  >
          </div>
        </div>
                </td> </tr> <tr> <td> 
    <div class="control-group">

          <!-- Text input-->
          <label class="control-label" for="input01">Title<sup style="color:red">*</sup></label>
          <div class="controls">
		  <?php echo form_error('Title'); ?>
            <input placeholder="Title" class="input-xlarge" type="text" ID="Title" name="Title" value=<?php echo @$Title;?> >
            <p class="help-block">Enter here job Designation</p>
          </div>
        </div>    
                </td> <td> 

    <div class="control-group">

          <!-- Text input-->
          <label class="control-label" for="input01">Company <sup style="color:red">*</sup></label>
          <div class="controls">
		  <?php echo form_error('Company'); ?>
            <input placeholder="Company Name" class="input-xlarge" type="text"  ID="Company" name="Company" value=<?php echo @$Company;?> >
            <p class="help-block"></p>
          </div>
        </div> 
                </td> </tr>   <tr> <td> 
    <div class="control-group">

          <!-- Text input-->
          <label class="control-label" for="input01">Office Phone</label>
          <div class="controls">
		  <?php echo form_error('Officephone'); ?>
            <input placeholder="Office Phone" Max-length="10"  class="input-xlarge" type="text"  ID="Officephone" name="Officephone" value=<?php echo @$Officephone;?> >
           
            <p class="help-block"></p>
          </div>
        </div>
                </td>  <td> 

    <div class="control-group">

          <!-- Text input-->
          <label class="control-label" for="input01">Mobile</label>
          <div class="controls">
		  <?php echo form_error('Mobile'); ?>
            <input placeholder="mobile" class="input-xlarge" type="text" ID="Mobile" name="Mobile" value=<?php echo @$Mobile;?> >
            <p class="help-block">Enter country code-mobile example(+91-9689862289)</p>
          </div>
        </div>
                </td> </tr> <tr> <td> 
    <div class="control-group">

          <!-- Text input-->
          <label class="control-label" for="input01">Fax</label>
          <div class="controls">
            <input placeholder="Fax" class="input-xlarge" type="text"  ID="Fax" name="Fax" value=<?php echo @$Fax; ?> >
            <p class="help-block"></p>
          </div>
        </div>
                </td> <td>  

    <div class="control-group">

          <!-- Text input-->
          <label class="control-label" for="input01">Country</label>
          <div class="controls">
		  <?php echo form_error('Country'); ?>
            <input placeholder="country" class="input-xlarge" type="text"  ID="Country" name="Country"  value=<?php echo@$Country; ?> >
            <p class="help-block"></p>
          </div>
        </div>  
                </td> </tr> <tr> <td> 
    <div class="control-group">

          <!-- Text input-->
          <label class="control-label" for="input01">State</label>
          <div class="controls">
		  <?php echo form_error('State'); ?>
            <input placeholder="State" class="input-xlarge" type="text" ID="State" name="State" value=<?php echo@$State; ?> >
            <p class="help-block"></p>
          </div>
        </div>
                </td>   <td> 
    <div class="control-group">

          <!-- Text input-->
          <label class="control-label" for="input01">City</label>
          <div class="controls">
		  <?php echo form_error('City'); ?>
            <input placeholder="City" class="input-xlarge" type="text"  ID="City"  name="City" value=<?php echo@$City; ?> >
            <p class="help-block"></p>
          </div>
        </div>
                </td> </tr> <tr> <td> 
    <div class="control-group">

          <!-- Text input-->
          <label class="control-label" for="input01">Postal Code</label>
          <div class="controls">
            <input placeholder="Postal code" class="input-xlarge" type="text"  name="Postalcode" ID="Postalcode" value=<?php echo @$Postalcode; ?> >
            <p class="help-block"></p>
          </div>
        </div>
  </td> <td>  &nbsp; &nbsp; </td>  </tr> </table>                    
                    
    <div class="control-group">

          <!-- Textarea -->
          <label class="control-label">Address</label>
          <div class="controls">
            <div class="textarea">
                  <textarea type="" class="" ID="Address" Name="Address">  <?php echo@$Address ;?> </textarea>
            </div>
          </div>
        </div>
              
		<div class="control-group">

          <!-- Text input-->
            <div class="control-group">
          <!-- Button -->
          <div class="controls">
            <input type="submit" class="btn btn-success" value="Create Member"/>
                         &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 
                   <?php echo anchor('admin/front','<span class="btn btn-warning" > Cancel </span>'); ?>

          </div>
		  </div>
    </fieldset>


</form>   </div></div><!--/span--></div><!--/row--><div class="clearfix"></div><hr><?php include('footer.php'); ?>			
</div><!--/.fluid-container--><?php include('getjs.php'); ?>