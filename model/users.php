<?php
    function insert_user($username, $password, $email, $fullname, $phone) {
        $sql = "INSERT INTO users(username, password, email, fullname, phone) VALUES('$username', '$password', '$email', '$fullname', '$phone')";
        return pdo_execute($sql);
    }

    function select_user($username, $password)
    {
        $sql = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
        return pdo_query_one($sql);
    }
    function select_email($email
    ) {
        $sql = "SELECT * FROM users WHERE email = '$email'";
        return pdo_query_one($sql);
    }
    function select_user_username($username) {
        $sql = "SELECT * FROM users WHERE username = '$username'";
        return pdo_query_one($sql);
    }
    function select_user_email($email){
        $sql = "SELECT * FROM users WHERE email = '$email'";
        return pdo_query_one($sql);
    }
    function select_taikhoan(){
        $sql = "SELECT * FROM users order by id desc";
        return pdo_query($sql);
    }
    function delete_taikhoan($id){
        $sql = "DELETE FROM users WHERE id = '$id'";
        return pdo_execute($sql);
    }
    function select_one_taikhoan($id){
        $sql = "SELECT * FROM users WHERE id = '$id'";
        return pdo_query_one($sql);
    }
    function update_taikhoan($id,$username,$password,$email,$fullname,$phone,$vaitro){
        $sql = "UPDATE users SET username = '$username', password = '$password', email = '$email', fullname = '$fullname', phone = '$phone', vaitro = '$vaitro' WHERE id = '$id'";
        return pdo_execute($sql);
    }
    function insert_taikhoan($username,$password,$email,$fullname,$phone,$vaitro){
        $sql = "INSERT INTO users(username, password, email, fullname, phone, vaitro) VALUES('$username', '$password', '$email', '$fullname', '$phone', '$vaitro')";
        return pdo_execute($sql);
    }
    function update_info($id,$username,$email,$fullname,$phone){
        $sql = "UPDATE users SET username = '$username', email = '$email', fullname = '$fullname', phone = '$phone' WHERE id = '$id'";
        return pdo_execute($sql);
    }
    function update_password($id,$password){
        $sql = "UPDATE users SET password = '$password' WHERE id = '$id'";
        return pdo_execute($sql);
    }
    function select_user_password($password){
        $sql = "SELECT * FROM users WHERE password = '$password'";
        return pdo_query_one($sql);
    }