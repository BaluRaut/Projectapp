<?php include('getheader.php'); ?>
<div class="navbar navbar-fixed-top">
    					<?php include("Navigation.php"); ?>

</div>
<div class="container-fluid">
<div class="row-fluid">
<noscript>
<div class="alert alert-block span10">
<h4 class="alert-heading">Warning!</h4>
<p>You need to have <a href="http://en.wikipedia.org/wiki/JavaScript" target="_blank">JavaScript</a> enabled to use this site.</p>
</div>
</noscript>
<div id="content" class="span10">
<div class="row-fluid sortable">
<div class="box span12">
<div class="box-header" data-original-title>
<h2> <i class="icon-edit"></i><span class="break"></span>Import Contacts</h2>
</div>
<div class="box-content">
<?php 
$attributes = array( 'id' => 'myform','name'=> 'myform','class'=>'form-horizontal' );    
echo form_open_multipart('admin/Import_contacts',$attributes);
?>
<input type="hidden" name="flag" value="add"/>

 <fieldset>
        <b style="color:">  Upload file format should be following way: </b>
        
        
<table border="1">
<tr> 
    <th> First Name</th>	
<th> Last Name	</th>
<th>Title</th>
<th>Department</th>
<th>Company Name</th>
<th>Email Address </th>
<th>Office Phone</th>
<th>Mobile Phone</th>	
<th> Fax	 </th>
<th>Adress  </th>
<th>Country	 </th>
<th>State	</th>
<th>City	</th>
<th>Postalcode</th>
</tr>
</table>

        <?php  if(@$success=="OK")
                                {
                                  ?>
    <div class="alert alert-success">
							<button type="button" class="close" data-dismiss="alert">×</button>
							<strong>Success!</strong> User created successfully 						</div> 
                               <?php }?>
                               
      <div id="legend" class="">
        <legend class="">File Upload</legend>
      </div>
	  
	  <?php  echo @$err; ?>
	<input type="hidden" name="flag" value="add"/>

             <input type="file" name="file">
                     <p class="help-block">(File size must be less than 2 MB)</p>
        <br/>
    <div class="control-group">
          <!-- Button -->
          <div class="controls">
            <input type="submit" class="btn btn-success" value="Upload"/>
            
             &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 
                   <?php echo anchor('admin/front','<span class="btn btn-warning" > Cancel </span>'); ?>

          </div>
		  </div>
    </fieldset>
 



 

</form>   </div></div><!--/span--></div><!--/row--><div class="clearfix"></div><hr><?php include('footer.php'); ?>			
</div><!--/.fluid-container--><?php //include('getjs.php'); ?>

<script src="<?php echo base_url(); ?>js/jquery-1.7.2.min.js"></script>
	<script src="<?php echo base_url(); ?>js/jquery-ui-1.8.21.custom.min.js"></script>
	
		<script src="<?php echo base_url(); ?>js/bootstrap.js"></script>
	
                <script src="<?php echo base_url(); ?>js/twitter-bootstrap-hover-dropdown.min.js"></script>
