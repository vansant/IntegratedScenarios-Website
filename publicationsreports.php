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
                <h2><i class="fa"><span style="color:blue">Publications/Reports</span></i></h2>
		<hr>
		<div class="accordion" id="accordionPUBREP">
			  <!---------------------->
			  <!--    PUBLICATIONS       -->
			  <!---------------------->
			  <div class="accordion-group">
				<div class="accordion-heading">
					<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordionPUBREP" href="#collapsePUB">
					<div class="panel panel-default">
					    <div class="panel-heading">
					 <h2><i class="fa">Publications</i><b class="caret"></b></h2>
					    </div>
					</div>
					</a>
			        </div>
			   </div>
			    <div id="collapsePUB" class="accordion-body collapse in">
			       <div class="accordion-inner">
				    <div class="panel-body">
					  <?php
					  include('includes/publications.php');
					?>
				    </div>
				</div>
			    </div>
			    <!---------------------->
			    <!--   REPORTS            -->
			    <!---------------------->
			    <div class="accordion-group">
                                <div class="accordion-heading">
                                        <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordionPUBREP" href="#collapseREP">
                                        <div class="panel panel-default">
                                            <div class="panel-heading">
						 <h2><i class="fa">Reports</i><b class="caret"></b></h2>
                                            </div>
                                        </div>
                                        </a>
                                </div>
                           </div>
                            <div id="collapseREP" class="accordion-body collapse in">
                               <div class="accordion-inner">
                                    <div class="panel-body">
                                          <?php
					  include('includes/reports.php');
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
