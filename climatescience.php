<!DOCTYPE html>
<html lang="en">

<?php 
include('includes/header.html');
?>

<body>
	<?php 
	include('includes/navigation.html');
	?>

        <!-- Page Content -->
        <div class="container">
	    <div class="row">
                <div class="col-md-12">
                <h2><i class="fa"><span style="color:blue">The Climate Science</span></i></h2>
		<hr>
		<div class="accordion" id="accordionCLIM">
			  <!---------------------->
			  <!--    CMIP5         -->
			  <!---------------------->
			  <div class="accordion-group">
				<div class="accordion-heading">
					<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordionCLIM" href="#collapseCMIP5">
					<div class="panel panel-default">
					    <div class="panel-heading">
						<h2><i class="fa">Global Climate Model Outputs from CMIP5</i><b class="caret"></b></h2>
					    </div>
					</div>
					</a>
			        </div>
			   </div>
			    <div id="collapseCMIP5" class="accordion-body collapse in">
			       <div class="accordion-inner">
				    <div class="panel-body">
					  <?php
					include('includes/gcm_description.php');
					?>
				    </div>
				</div>
			    </div>
			    <!---------------------->
			    <!--    MACAv1-METDATA-->
			    <!---------------------->
			    <div class="accordion-group">
                                <div class="accordion-heading">
                                        <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordionCLIM" href="#collapseMACAv1">
                                        <div class="panel panel-default">
                                            <div class="panel-heading">
                                		<h2><i class="fa">MACAv1-METDATA Statistical Downscaling</i><b class="caret"></b></h2>
                                            </div>
                                        </div>
                                        </a>
                                </div>
                           </div>
                            <div id="collapseMACAv1" class="accordion-body collapse in">
                               <div class="accordion-inner">
                                    <div class="panel-body">
                                          <?php
                                		include('includes/macav1metdata_description.php');
                                        ?>
                                    </div>
                                </div>
                            </div>
			    <!---------------------->
                            <!--    MACAv2-LIVNEH -->
                            <!---------------------->
                            <div class="accordion-group">
                                <div class="accordion-heading">
                                        <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordionCLIM" href="#collapseMACAv2">
                                        <div class="panel panel-default">
                                            <div class="panel-heading">
                                		<h2><i class="fa">MACAv2-LIVNEH Statistical Downscaling</i><b class="caret"></b></h2>
                                            </div>
                                        </div>
                                        </a>
                                </div>
                           </div>
                            <div id="collapseMACAv2" class="accordion-body collapse in">
                               <div class="accordion-inner">
                                    <div class="panel-body">
                                          <?php
                                		include('includes/macav2livneh_description.php');
                                        ?>
                                    </div>
                                </div>
                            </div>
			 <!---------------------->
		      </div>
                   </div>
                 </div>
		<hr>
		<?php
		include('includes/footer.html');
		?>
        </div>
        <!-- /.container -->

  	<?php
        include('includes/scripts.html');
        ?>
</body>

</html>
