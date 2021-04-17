<?php
    require '../koneksi.php';
    session_start();
    $email = $_POST['email'];
    $password = $_POST['password'];
    $refresh = header("Location:../login.php");

    if(empty($email))
    {
        $_SESSION['error_register'] = 'Email anda kosong';
        echo $refresh;
    }elseif(empty($password)){
        $_SESSION['error_register'] = 'Password anda kosong';
        echo $refresh;
    }else{
        $stmt = $conn->prepare('SELECT * FROM user WHERE email=:email');
        $stmt->bindValue(':email', $email);
        $stmt->execute();
        if($stmt->rowCount()){
            $row = $stmt->fetch(PDO::FETCH_OBJ);
            if (password_verify($password, $row->password)) {
                setcookie('error login', '', time()+2, "/");
                $_SESSION['email'] = $row->email;
                header("Location:../index.php");
            } else{ 
                setcookie("error login", 'Email dan Password tidak sesuai', time()+2, "/");
                echo $refresh;
            }
        } else {
            $_SESSION['error_login'] = 'User belum terdaftar di aplikasi kami'; 
            echo $refresh;
        }
    }

        
?>