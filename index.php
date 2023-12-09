<?php
    require'koneksi.php';

    // mengambil data yang dikirim dari  form
    if (isset($_POST['login'])) {
        $username = $_POST['username'];
        $password = md5($_POST['password']);

        //menyeleksi data user dengan username dan passord yang sesuai
        $data = mysqli_query($conn, "SELECT * FROM logs WHERE username='$username' AND password='$password'");

        //menghitung jumlah data yang ditemukan
        $cek = mysqli_num_rows($data);

        if ($cek > 0) {
            $_SESSION['status'] = "login";
            header("location: tampilan.php");
        } else {
            echo "<script>windows.alert('kesalahan login')
            windows.location='index.html'</script>";
        }
    }
?>
<!DOCTYPE html>
<html>
<head>
    <title>MD5</title>
    <style type="text/css">
        body {
            display: flex;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
            background-image: url(#);
            background-repeat: no-repeat;
            background-position: center;
            background-size: cover;
            

        
        }
        .login {
            padding: 2em;
            margin: 6em auto;
            width: 17em;
            background: silver;
            border-radius: 3px;
        }
        input {
            border-radius: 5px;
            padding: 5px;
            background:#efe ;

        }
        
    </style>    
</head>
<body>

    <div class = "login">
        <h2>Masukkan Username dan Password untuk Login</h2>
        <form action="" method="post">
        <table>
            <tr>
                <td>
                    Username
                </td>
                <td>
                    <input type="text" name="username" placeholder="username" required>
                </td>    
            </tr>
            <tr>
                <td>
                    Password
                </td>
                <td>
                    <input type="password" name="password" placeholder="password" required>
                </td>
            </tr>
            <tr>
                <td>
                    <td colspan="2">
                        <input type="submit" name="login" value="Login">
                    </td>    
                </td>
            </tr>
        </table>
        </form>
    </div> 
       
</body>
</html>
