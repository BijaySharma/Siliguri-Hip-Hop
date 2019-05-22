<?php
function register($data){
    global $db;

    $sql = "INSERT INTO registrations(name, stage_name, gender, phone, email) VALUES(";
    $sql .="'" . $data['name'] . "',";
    $sql .="'" . $data['stage_name'] . "',";
    $sql .="'" . $data['gender'] . "',";
    $sql .="'" . $data['phone'] . "',";
    $sql .="'" . $data['email'] . "'";
    $sql .= ")";

    $result = mysqli_query($db,$sql);

    return $result;
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

?>
