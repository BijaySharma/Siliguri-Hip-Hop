<?php
require_once("validation_functions.php");
    $errors =[];
function register($data){
    global $db;

    $errors = validate_registration($data);
    if(!empty($errors)){
        return $errors;
    }

    $sql = "INSERT INTO registrations(name, stage_name, gender, phone, email, category) VALUES(";
    $sql .="'" . $data['name'] . "',";
    $sql .="'" . $data['stage_name'] . "',";
    $sql .="'" . $data['gender'] . "',";
    $sql .="'" . $data['phone'] . "',";
    $sql .="'" . $data['email'] . "',";
    $sql .="'" . $data['category'] . "'";

    $sql .= ")";

    $result = mysqli_query($db,$sql);
    if($result){
        return true;
    }else{
        $er = mysqli_error($db);
        db_disconnect($db);
        exit($er);
    }
}

function confirm_db_result($result){
    global $db;
    if(!$result){
        exit(mysqli_error($db));
    }
    return true;
}

function find_all_records(){
    global $db;

    $sql = "SELECT * FROM registrations";

    $result = mysqli_query($db,$sql);
    if($result){
        return $result;
    }else{
        $err = mysqli_error();
        db_disconnect($db);
        exit($err);
    }
}

function find_record_by_id($id){
    global $db;

    $sql = "SELECT * FROM registrations WHERE id='" . $id . "'";
    $result=mysqli_query($db,$sql);
    confirm_db_result($result);
    $record = mysqli_fetch_assoc($result);
    mysqli_free_result($result);

    return $record;
}

function delete_by_id($id){
    global $db;

    $sql = "DELETE FROM registrations where id='" . $id . "' LIMIT 1";
    $result = mysqli_query($db,$sql);

    return $result;
}

function update_record($data){
    global $db;

    $sql = "UPDATE registrations SET ";
    $sql .= "name='" . $data['name'] . "', ";
    $sql .= "stage_name='" . $data['stage_name'] . "', ";
    $sql .= "gender='" . $data['gender'] . "', ";
    $sql .= "phone='" . $data['phone'] . "', ";
    $sql .= "email='" . $data['email'] . "' ";
    $sql .= "WHERE id='" . $data['id'] . "' LIMIT 1";

    $result = mysqli_query($db,$sql);
    if($result){
        return true;
    }else{
        $err = mysqli_error($db);
        db_disconnect($db);
        exit($err);
    }
}

function validate_registration($data){

    $errors =[];

    //Name
    if(is_blank($data['name'])){
        $errors['name'] = "Name Can't be blank";
    }elseif (!has_length($data['name'],['min' => 3, 'max' => 30])){
        $errors['name'] = "Name can't be less than two or more than thirty characters long.";
    }

    //Stage Name
    if(is_blank($data['stage_name'])){
        $errors['stage_name'] = "Stage Name Can't be blank";
    }elseif (!has_length($data['stage_name'],['min' => 2, 'max' => 30])){
        $errors['stage_name'] = "Stage Name can't be less than two or more than thirty characters long.";
    }

    //Gender
    if(!has_inclusion_of($data['gender'],["Male","Female","Transgender"])){
        $errors['gender'] = "Gender can't be blank";
    }

    //Category
    if(!has_inclusion_of($data['category'],["Rap Battle", "Showcase", "Cypher"])){
        $errors['category'] = "Category Can't be blank";
    }

    //Phone Number
    if(!has_length_exactly($data['phone'],10)){
        $errors['phone'] = "Phone Number can't be less or more than 10 digits";
    }elseif (!is_numeric($data['phone'])){
        $errors['phone'] = "Invalid Phone Number.";
    }

    //Email
    if(!has_valid_email_format($data['email'])){
        $errors['email'] = "Please enter a valid Email Address";
    }

    return $errors;
}

?>
