<?php 
    include '../inc/usession.php';
    //include '../inc/navigation.php';  
 ?> 

<!DOCTYPE html>
<html>
<head>
    <title>user dashboard</title>
    <link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="../style.css">
    <link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
    <!-- <link href="../assets/css/sb-admin.css" rel="stylesheet"> -->

    <script type="text/javascript" src="../assets/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="../assets/js/jquery.js"></script>
</head>
<body>
    <?php include '../inc/uheader.php'; ?>
    <div style="width:50px;height: 50px;"></div>
    <div class="col-lg-3">
        <ul class="navbar navbar-default nav" style="height:650px;">
            <li><a href="#"><i class="glyphicon glyphicon-dashboard"></i> Dashboard</a></li>
            <li><a href="#"><i class="glyphicon glyphicon-user"></i> Profile</a></li>
            <li><a href="#"><i class="glyphicon glyphicon-tasks"></i> Categories</a></li>
            
        </ul>    
    </div>
    <div class="col-lg-8">
            <h2 class="success"><?php echo'Welcome !!! Dear User' ?></h2>
        </div>
</body>
</html>

<?php 
    include '../inc/template_footer.php';
 ?>