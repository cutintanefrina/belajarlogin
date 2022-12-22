<?php 
if(isset($_GET['pesan'])){
    if($_GET['pesan'] == 'gagal'){
        echo "<div>gagal</div>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
   *{
        margin: 0;
        padding: 0;
    }

    .container{
        height: 850px;
    }
    
    .navbar{
        height: 50px;
    }
    
    p{
        margin-left: 1200px;
        margin-right: 20px;
        font-size:20px;
        padding-top: 40px;
    }

    a {
        margin-right: 20px;
        color: black;
        font-size: 20px;
    }

    .gambar{
        width: 700px;
        display: flex;
    }

    img{
        width: 700px;
        display: flex;
    }

    form{
        width: 600px;
        margin-top: 150px;
        margin-left: 100px;
    }

    h1{
        margin-bottom: 10px;
        font-size: 40px;
    }

    h6{
        margin-bottom: 10px;
        font-size: 20px;
        color: grey;
    }
    label{
        margin-bottom: 20px;
        font-size: 25px;
    }
    input{
        height: 40px;
        width: 600px;
        margin-bottom: 40px;
        padding-left: 20px;
    }

    button{
        height: 40px;
        border-radius: 20px;
        width: 250px;
        background-color: purple;
        color: white;
    }

</style>
<body>
    <div class="container">
        <div class="navbar">
            <p>New User ? <a href="registrasi.php">Sig Up</a></p>
        </div>

        <div class="gambar">
            <img src="human.png" alt="">
            
            <div class="formlogin">
                <form action="ceklogin.php" method = "post">
                        <h1>Welcome Back!</h1>
                        <h6>Login to continue</h6>
                        <label for="username">Username</label><br>
                        <input type="text" name="username" id ="username"><br>
                        <label for="password">Password</label><br>
                        <input type="password" name="password" id ="password"><br>
                        <button type="submit">submit</button>
                </form>
            </div>
        </div>
</div>
</body>
</html>