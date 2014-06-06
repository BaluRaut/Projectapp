<?php include('getheader.php'); ?>
<div class="navbar navbar-fixed-top">
    					<?php include("Navigation.php"); ?>

</div>
<style>
    
     .flexigrid div.sDiv2 {
    clear: both;
    float: left;
    padding: 1px !important;
    width: 604px; }
    
</style>
<?php 
foreach($css_files as $file): ?>
	<link type="text/css" rel="stylesheet" href="<?php echo $file; ?>" />
<?php endforeach; ?>
<?php foreach($js_files as $file): ?>
	<script src="<?php echo $file; ?>"> </script>
<?php endforeach; ?>
<div class="container-fluid">
<div class="row-fluid">
<?php //include('Navigation.php'); ?>
                    <script src="<?php echo base_url(); ?>js/twitter-bootstrap-hover-dropdown.min.js"></script>

<noscript>
<div class="alert alert-block span10">
<h4 class="alert-heading">Warning!</h4>
<p>You need to have <a href="http://en.wikipedia.org/wiki/JavaScript" target="_blank">JavaScript</a> enabled to use this site.</p>
</div>
</noscript>
<div id="content" class="span10">




</div>
<div class="row-fluid sortable">

    <div ID="Container">
		
	<div style='height:20px;'></div>  
    
		<?php echo $output; ?>
    </div>
   
    
<div class="box-content">



  </div></div><!--/span--></div><!--/row--><div class="clearfix"></div><hr><?php include('footer.php'); ?>			
</div><!--/.fluid-container--><?php //include('getjs.php'); ?>