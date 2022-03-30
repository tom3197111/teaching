<?php 
if($_SESSION['username'] ==''){
	header("Location:./index.php");
}
?>
<!-- Required meta tags -->
<meta charset="utf-8">
<meta content="width=device-width, initial-scale=1, shrink-to-fit=no" name="viewport">
<title>後台管理系統</title><!-- Bootstrap-->
<link href="../public/lib/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet"><!--Common Plugins CSS -->
<link href="../public/css/plugins/plugins.css" rel="stylesheet"><!--fonts-->
<link href="../public/lib/line-icons/line-icons.css" rel="stylesheet">
<link href="../public/lib/font-awesome/css/fontawesome-all.min.css" rel="stylesheet">
<link href="../public/lib/data-tables/dataTables.bootstrap4.min.css" rel="stylesheet">
<link href="../public/lib/data-tables/responsive.bootstrap4.min.css" rel="stylesheet">
<link href="../public/lib/summernote/summernote-bs4.css" rel="stylesheet">
<link href="../public/lib/dt-picker/jquery.datetimepicker.min.css" rel="stylesheet">
<link href="../public/css/picker-custom.css" rel="stylesheet">
<link href="../public/css/style.css" rel="stylesheet">