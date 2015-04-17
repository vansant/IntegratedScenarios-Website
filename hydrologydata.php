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
                                <h2><i class="fa">Hydrology Data</i></h2>
                            </div>
			
                            <div class="panel-body">
				 <!-- Navigation tabs -->
                                 <ul class="nav nav-tabs" role="tablist">
                                      <li class="active"><a href="vicdata.php">VIC</a></li>
                                      <li ><a href="ulmdata.php">ULM</a></li>
                                </ul>
                                <?php
                                       include('vicdownload.php');
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
