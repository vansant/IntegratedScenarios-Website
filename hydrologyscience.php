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
                <h2><i class="fa"><span style="color:blue">The Hydrology Science</span></i></h2>
		<hr>
		<div class="accordion" id="accordionHYDRO">
			  <!---------------------->
			  <!--    VIC         -->
			  <!---------------------->
			  <div class="accordion-group">
				<div class="accordion-heading">
					<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordionHYDRO" href="#collapseVIC">
					<div class="panel panel-default">
					    <div class="panel-heading">
						<h2><i class="fa">VIC Hydrology Model</i><b class="caret"></b></h2>
					    </div>
					</div>
					</a>
			        </div>
			   </div>
			    <div id="collapseVIC" class="accordion-body collapse in">
			       <div class="accordion-inner">
				    <div class="panel-body">
					  <?php
					 include('includes/vic_description.php');
					?>
				    </div>
				</div>
			    </div>
			    <!---------------------->
			    <!--   ULM            -->
			    <!---------------------->
			    <div class="accordion-group">
                                <div class="accordion-heading">
                                        <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordionHYDRO" href="#collapseULM">
                                        <div class="panel panel-default">
                                            <div class="panel-heading">
						 <h2><i class="fa">ULM Hydrology Model</i><b class="caret"></b></h2>
                                            </div>
                                        </div>
                                        </a>
                                </div>
                           </div>
                            <div id="collapseULM" class="accordion-body collapse in">
                               <div class="accordion-inner">
                                    <div class="panel-body">
                                          <?php
						   include('includes/ulm_description.php');
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
