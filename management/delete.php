<?php require_once("../private/functions.php");?>
<?php require_once("../private/database.php"); ?>
<?php require_once("../private/query_functions.php"); ?>

<?php $db=db_connect()?>
<?php

$id = $_GET['id'] ?? '';

if(is_post_request()){
    $sql = "DELETE FROM registrations WHERE id='" . $id . "' LIMIT 1";
    $result = mysqli_query($db, $sql);
    if($result){
        redirect_to("index.php");
    }else{
        $err = mysqli_error($db);
        db_disconnect();
        exit($err);
    }
}else{
    $record = find_record_by_id($id);
}

?>
<?php require_once("../private/shared/header.php");?>
<style>
    #delete {
        margin-top: 5em;
        display: block;
        height: 73.3vh;
        padding: 8em;
    }
    input{
        background: #333333;
        color: #fff;
        margin: .2em 2em;
        border: 2px solid black;
        padding:.4em 4em ;
    }
    input:hover{
        background: red;
        transition-duration: .4s;

    }

    #delete a{
        background: #333333;
        color: #fff;
        margin: .2em 2em;
        border: 2px solid black;
        padding:.4em 4em ;
    }
    #delete a:hover{
        background: darkseagreen;
        transition-duration: .4s;
        color: #fff;

    }

</style>


<div id="delete">
    <h1>Are you sure you want to delete <?php echo $record['name']; ?> ?</h1>
    <form action="delete.php?id=<?php echo $record['id']; ?>" method="post">
        <input type="submit" value="Yes"> <a href="index.php">No</a>
    </form>
</div>

<?php db_disconnect($db) ?>
<?php require_once("../private/shared/footer.php");?>
