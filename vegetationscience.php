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
                <h2><i class="fa"><span style="color:blue">The Vegetation Science</span></i></h2>
		<hr>
		<div class="accordion" id="accordionVEG">
			  <!---------------------->
			  <!--    MC2        -->
			  <!---------------------->
			  <div class="accordion-group">
				<div class="accordion-heading">
					<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordionVEG" href="#collapseMC2">
					<div class="panel panel-default">
					    <div class="panel-heading">
					 <h2><i class="fa">MC2 Vegetation Model</i><b class="caret"></b></h2>
					    </div>
					</div>
					</a>
			        </div>
			   </div>
			    <div id="collapseMC2" class="accordion-body collapse in">
			       <div class="accordion-inner">
				    <div class="panel-body">
					  <?php
					  include('includes/mc2_description.php');
					?>
				    </div>
				</div>
			    </div>
			    <!---------------------->
			    <!--   3PG            -->
			    <!---------------------->
			    <div class="accordion-group">
                                <div class="accordion-heading">
                                        <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordionVEG" href="#collapse3PG">
                                        <div class="panel panel-default">
                                            <div class="panel-heading">
						 <h2><i class="fa">3-PG Vegetation Model</i><b class="caret"></b></h2>
                                            </div>
                                        </div>
                                        </a>
                                </div>
                           </div>
                            <div id="collapse3PG" class="accordion-body collapse in" >
                               <div class="accordion-inner">
                                    <div class="panel-body">
                                          <?php
					  include('includes/3pg_description.php');
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
