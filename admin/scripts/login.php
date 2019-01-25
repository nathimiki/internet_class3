<?php
function login($username, $password){
    require_once('connect.php');

    //check if user exists

    //TODO: Fill out the following variable with a SQL query
    //so that it can COUNTS how many users
    //in the tbl_user that with the user_name = $username

    $check_exist_query = 'SELECT COUNT(*) FROM tbl_user WHERE user_name="'.$username.'"';
    $user_set = $pdo->prepare($check_exist_query);

    $user_set->execute(
        array(
            ':user_name'=>$username
        )
    );
    if($user_set->fetchColumn()>0){
        //when user exists, then check if yser info is validated
        $get_user_query = 'SELECT * FROM tbl_user WHERE user_name = :username AND user_pass = :password';
        $get_user_set = $pdo->prepare($get_user_query);

        $get_user_set->execute(
            array(
                ':username'=>$username,
                ':password'=>$password
            )
            );

        while($found_user = $get_user_set->fetch(PDO::FETCH_ASSOC)){
            echo 'Login Successfully!';
        }

    }else{
        echo 'User not exists';
        }

    //Check if user info is validated
}