<?php require_once("private/shared/header.php"); ?>
    <link rel="stylesheet" type="text/css" media="all" href="register_style.css">

<?php require_once("private/functions.php"); ?>
<?php require_once("private/database.php"); ?>
<?php $db = db_connect();?>
<div id="body">
<?php
if(is_post_request()){
    $data = [];
    $data['name'] = $_POST['name']?? '';
    $data['stage_name'] =$_POST['stage_name']?? '';
    $data['gender'] = $_POST['gender']?? '';
    $data['phone'] = $_POST['phone']?? '';
    $data['email'] = $_POST['email'] ?? '';
    $result = register($data);
    if($result){?>
    <center>
        <div id="sucess">
            <svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" fill="white" viewBox="0 0 24 24"><path fill="none" d="M0 0h24v24H0V0zm0 0h24v24H0V0z"/><path d="M16.59 7.58L10 14.17l-3.59-3.58L5 12l5 5 8-8zM12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 18c-4.42 0-8-3.58-8-8s3.58-8 8-8 8 3.58 8 8-3.58 8-8 8z"/></svg>
            <h1>Cheers <?php echo $_POST['name'];?>! Registration Sucessful!</h1><br><br>
            <a class="sbt" href="index.php">Go back to Home</a>
        </div></center>
        <script>
            document.getElementById("body").style.background="teal";
        </script>
    <?php }else{ ?>
        <div id="fail">
            <h1>Bummer ! Registration Failed due to some Errors !</h1><br><br>
            <h1>ERROR CODE : <?php echo mysqli_errno($db); ?></h1><br><br>
            <a class="sbt" href="index.php">Go back to Home</a>
        </div>
        <script>
            document.getElementById("body").style.background="red";
        </script>
  <?php  }
}else{?>
    <div id="fail">
            <h1><b>Bummer !</b>You are not Authorized to access this page.</h1><br><br>
            <h1><b>ERROR CODE :  BAD REQUEST </b></h1><br><br>
            <a class="sbt" href="index.php">Go back to Home</a>
        </div>
    <script>
        document.getElementById("body").style.background="red";
    </script>
    <?php  exit;
    } ?>
</div>
<?php db_disconnect($db); ?>
<?php require_once("private/shared/footer.php"); ?>