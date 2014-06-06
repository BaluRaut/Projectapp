<?php include('getheader.php'); ?>
<script type="text/javascript" src='<?php echo base_url();?>pjax-standalone.js'></script>

<script type="text/javascript">
$(document).pjax('[data-pjax] a, a[data-pjax]', '#pjax-content'); $(document).on('pjax:send', function() { console.log("Appears in console just after call is started"); }); $(document).on('pjax:complete', function() { console.log("Do something once PJAX call is finished"); });
</script>
</head>
<body>
    
    <div class="navbar navbar-fixed-top">
    					<?php include("Navigation.php"); ?>

</div>
<div id="pjax-content"> 

<div id="under-header"></div>
	<!-- start: Header -->
	
		<div class="container-fluid">
		<div class="row-fluid">
			
			<noscript>
				<div class="alert alert-block span10">
					<h4 class="alert-heading">Warning!</h4>
					<p>You need to have <a href="http://en.wikipedia.org/wiki/JavaScript" target="_blank">JavaScript</a> enabled to use this site.</p>
				</div>
			</noscript>
			
			<div id="content" class="span10">
			<!-- start: Content -->
			
			<div>
     
				<?php  if(@$success=="OK")
                                {
                                  ?>
    <div class="alert alert-success">
							<button type="button" class="close" data-dismiss="alert">×</button>
							<strong>Success!</strong> Database Updated successfully 						</div> 
                                                       
                               <?php }?>
                               
<?php  if(@$uploadsuccess=="OK")
                                {
                                  ?>
    <div class="alert alert-success">
<button type="button" class="close" data-dismiss="alert">× </button>
<strong>Success!</strong> File Uploaded Successfully <br>
Total Records: <?php echo @$_SESSION['total']; ?> <br/>
Invalid Email: <?php  echo @$_SESSION['invalid']; ?> <br/>
Duplicate Records: <?php echo @$_SESSION['duplicate'];

?>
     </div> 
                               <?php }?>
                            <?php  if(@$updatesuccess=="OK")
                                {
                                  ?>
    <div class="alert alert-success">
<button type="button" class="close" data-dismiss="alert">× </button>
<strong>Success!</strong> Contact Update Successfuly
     </div> 
                               <?php }?>

                               

			</div>
                        </div><!--/fluid-row-->
			
		
		<div class="clearfix"></div>
		<hr>
		
		<?php include('footer.php'); ?>
				
	</div><!--/.fluid-container--> </div>
        <?php include('getjs.php');?>