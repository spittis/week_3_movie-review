<?php

function login($username, $password){

    require_once('connect.php'); 

    //we need to check if the user even exists
    //if the user exists, then we check if the passwords match
    // to do: finish the following query, that COUNTs how many entries from tbl_user that has a user_name match (we want to know the number)
    $check_exist_query = 'SELECT COUNT(*) FROM tbl_user';
    $check_exist_query .= ' WHERE user_name = :username';  //this is part of the same query, just added a line break so it's easier to read

    $user_set = $pdo->prepare($check_exist_query); //we NEED to change this from query to prepare because if we don't people can write SQL queries in our username input field
    $user_set->execute(
        array(
            ':username'=>$username
        )
        );

    if($user_set->fetchColumn()>0){
        echo 'User Exists!';
    }
}
?>

<!-- this needs to be included in the admin_login.php for it to work-->