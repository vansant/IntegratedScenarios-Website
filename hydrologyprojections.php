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
			<hr>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h2><i class="fa">Integrated Scenarios Projections</i></h2>
                            </div>
			
                            <div class="panel-body">
				 <!-- Navigation tabs -->
                                 <ul class="nav nav-tabs" role="tablist">
                                      <li ><a href="climateprojections.php">Climate Projections</a></li>
                                      <li class="active"><a href="hydrologyprojections.php">Hydrology Projections</a></li>
                                      <li ><a href="vegetationprojections.php">Vegetation Projections</a></li>
                                </ul>
                                <?php
                                       include('vic_ulm_projections.php');
                                ?>
				<br>
				Hydrology projection images courtesy of Matt Stumbaugh, UW
                            </div>
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
