<?php require_once("../private/functions.php");?>
<?php require_once("../private/database.php");?>
<?php require_once("../private/query_functions.php");?>
<?php $db = db_connect(); ?>

<?php
$id = $_GET['id'];
if(!isset($id)){
    redirect_to("index.php");
}
$record = find_record_by_id($id);

?>
?>

<?php require_once("../private/shared/header.php");?>
<style>
.container{
    height: 82.29vh;
}
</style>
<div class="container">
    <a href="index.php"> << Back</a>
    <h1><?php echo $record['name'];?></h1>
    <hr>
    <p>Stage Name : <?php echo $record['stage_name'];?></p>
    <p>Gender : <?php echo $record['gender'];?></p>
    <p>Category : <?php echo $record['category'];?></p>
    <p>Phone : <?php echo $record['phone'];?></p>
    <p>Email : <?php echo $record['email'];?></p><br>
    <a href="edit.php?id=<?php echo $record['id'];?>" class="btn">Edit</a>
    <a href="delete.php?id=<?php echo $record['id'];?>" class="btn">Delete</a>
</div>

<?php db_disconnect($db); ?>
<?php require_once("../private/shared/footer.php");?>
