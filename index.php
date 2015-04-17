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
			<!--<img src="images/scenery.png" width="500px">-->
			<img src="images/Mt_Rainier_2-WatermarkedChelton-150dpi.jpg" width="100%"><br>

                <hr>
                    <div class="col-md-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h2><i class="fa">Integrated Scenarios of the Future Northwest Environment</i></h2>
                            </div>
                            <div class="panel-body">
                                  <?php
                                include('includes/integratedscenariosintro.php');
                                ?>

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
