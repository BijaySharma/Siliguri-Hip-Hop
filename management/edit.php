<?php require_once("../private/functions.php");?>
<?php require_once("../private/database.php");?>
<?php require_once("../private/query_functions.php");?>
<?php $db = db_connect(); ?>


<?php

$id = $_GET['id'];
if(!isset($id)){
    redirect_to("index.php");
}

if(is_post_request()){
    $data['id'] = $id;
    $data['name'] = $_POST['name'];
    $data['stage_name'] = $_POST['stage_name'];
    $data['gender']= $_POST['gender'];
    $data['phone'] = $_POST['phone'];
    $data['email'] = $_POST['email'];

    update_record($data);
    redirect_to("index.php?update=sucess");

}else{
    $record = find_record_by_id($id);
}

?>


<?php require_once("../private/shared/header.php");?>
<style>

    #form{
        margin-top: 1em;
        height: 74.5vh;
        padding: 5em;
        border: 2px solid #333333;
        display: inline-block;
        width: 40%;
        alignment: center;
        margin-left:29%;
        margin-bottom: 1em;
    }
    input,select{
        margin: .5em;
        display: block;
        width: 90%;
        padding: 0 2em;
    }
    h1{
        margin-top: 3.5em ;
        text-align: center;
    }
    a{
        padding: 1em;
        display: inline-block;
    }
</style>


<h1>Edit Record</h1>

<div id="form">

    <form method="post" action="edit.php?id=<?php echo u($id); ?>">

        Name : <input type="text" value="<?php echo $record['name']; ?>" name="name"><br>
        Stage Name : <input type="text" placeholder="Stage Name" value="<?php echo $record['stage_name']; ?>" name="stage_name"><br>
        Gender : <select name="gender">
            <option value="Male" <?php if($record['gender']=="Male"){echo "selected";} ?>>Male</option>
            <option value="Female"<?php if($record['gender']=="Female"){echo "selected";} ?>>Female</option>
            <option value="Transgender"<?php if($record['gender']=="Transgender"){echo "selected";} ?>>Transgender</option>
        </select><br>
        Phone: <input type="tel" value="<?php echo $record['phone']; ?>" name="phone" placeholder="Phone Number"><br>
        Email <input type="email" value="<?php echo $record['email']; ?>" name="email" placeholder="Email"><br>
        <input type="submit" value="Edit" class="btn" name="submit">
        <a href="index.php">X CANCEL</a>

    </form>
</div>


<?php db_disconnect($db); ?>
<?php require_once("../private/shared/footer.php");?>
