<?php require_once("db.php"); ?>
<?php

function redirect_to( $location = NULL ) {
    if ($location != NULL) {
        header("Location: {$location}");
        exit;
    }
}

function confirm_query($result_set){
    if (!$result_set){
        die("Database query faild.");
    }
}

function query($table ){
    global $db;
    $query = "select *  ";
    $query .= " FROM {$table} ";
    //$query .= " order by fname ASC  ";

    $result_set = mysqli_query($db, $query) ;
    confirm_query($result_set);
    return $result_set;
}

function query2($table, $add ){
    global $db;
    $query = "select *  ";
    $query .= " FROM {$table} ";
    $query .= " {$add}  ";

    $result_set = mysqli_query($db, $query) ;
    confirm_query($result_set);
    return $result_set;
}

function get_by_id($table,$id){
    global $db;
    $query = "select *  ";
    $query .= " FROM {$table} ";
    $query .= " WHERE id = {$id} ";
    $query .= " LIMIT 1";
    $result_set = mysqli_query($db, $query) ;
    confirm_query($result_set);
    return $result_set;
}


?>