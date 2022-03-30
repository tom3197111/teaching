<?php 
include '../../common/_init.php';
include '../controller/systemController.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
<?php 
include './components/system/_head.php';
?>
</head>
<body>
	<div class="page-wrapper" id="page-wrapper">
<?php 
include './components/system/_navbar.php';
?>
		<main class="content">
<?php 
include './components/system/_top.php';
?>
			<!-- page-sub-Header end-->
			<div class="page-content">
				<div class="container-fluid"></div>
			</div><!-- main end-->
			<?php $_GET['type']  == "welcom" ? include './components/system/welcom.php':'';?>
			<?php  $_GET['type']=='ins' ?  include './components/system/system_ins.php':''; ?>
			<?php  $_GET['type']=='list' ?  include './components/system/system_list.php':''; ?>
			<?php  $_GET['type']=='show' ?  include './components/system/system_show.php':''; ?>

<?php 
include './components/system/_footer.php';
?>

		</main><!-- page content end-->
	</div><!-- app's main wrapper end -->
<?php 
include './components/system/_js.php';
?>
</body>
</html>