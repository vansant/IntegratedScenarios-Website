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
                                <h2><i class="fa">Integrated Scenarios Data</i></h2>
                            </div>
                            <div class="panel-body">
                             <!-- Navigation tabs -->
			  	<ul class="nav nav-tabs" role="tablist">
                                      <li style="text-align:center"><a href="data.php">Climate Data<br>MACAv2-LIVNEH</a></li>
                                      <li style="text-align:center"><a href="macav1data.php">Climate Data<br>MACAv1-METDATA</a></li>
                                      <li style="text-align:center"><a href="vicdata.php">Hydrology Data<br>VIC</a></li>
                                      <li style="text-align:center"><a href="ulmdata.php">Hydrology Data<br>ULM</a></li>
                                      <li style="text-align:center" class="active"><a href="mc2data.php">Vegetation Data<br>MC2</a></li>
                                      <li style="text-align:center"><a href="3pgdata.php">Vegetation Data<br>3PG</a></li>
                                </ul>
                                <!-- page content -->
                                <?php
                                       include('includes/mc2download.php');
                                ?>
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
