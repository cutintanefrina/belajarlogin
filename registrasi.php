<?php 
require 'koneksi.php';
if (isset($_POST['tambah'])){
    if (daftar ($_POST) > 0 ){
        echo "
        <script>
        alert('Data berhasil disimpan');
        document.location.href='index.php';
        </script>
        ";
    }else {
        echo "
        <script>
        alert('Data gagal disimpan');
        document.location.href='registrasi.php';
        </script>
        ";
    };
};
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
        margin:0;
        padding:0;
        
    }
    .container{
        height: 850px;
    }
    .semua{
        display: flex;
    }

    .gambar{
        width: 700px;
        background-color: #810CA8;
        height: 853px;
    }
    img{
        width: 550px;
        padding-top: 150px;
        padding-left: 50px;
    }

    h2{
        margin-top: 30px;
        color: white;
        text-align: center;
        font-size: 35px;
    }

    p{
        color: white;
        text-align: center;
    }
    
    .hero{
        width: 800px;
    }
    .head img{
        width: 100px;
        margin-left: 300px;
    }

    h1{
        text-align: center;
        margin-bottom: 20px;
    }
    
    input{
        width: 550px;
        height: 40px;
        margin-left: 130px;
        margin-bottom:10px;
        padding-left: 20px;
        margin-bottom: 30px;
    }

    .sosial input{
       height: 100px;
       width: 700px;
    }

    button{
        height: 40px;
        width: 150px;
        margin-left: 330px;
        border-radius: 20px;
        background-color: #810CA8;
        color: white;
    }
</style>
<body>
    <form action="" method="post">
        <div class="container">
            <div class="semua">
            <div class="gambar">
                <img src="women.png" alt=""><br>
                <h2>Start your journey with us</h2><br>
                <p>Please fill in your data correctly so that no errors occur when your requwst is processed</p>
            </div>
                
                <div class="hero">
                    <div class="head">
                        <img src="img/head.png" alt="">
                    </div>

                    <h1>Registrasi</h1>
                    <table>
                        <tr>

                            <input type= "text" name="username" placeholder="Masukkan username" id="username" require />
                            <input type= "text" name="email" placeholder="Masukkan email" id="email" require/>
                            <input type= "passsword" name="password" placeholder="Masukkan password" id="password" require/>
                            <input type= "text" name="level" placeholder="Masukkan Level" id="level" require/><br>
                            <button type="submit" name="tambah">submit</button>
        </tr>
    </table>
</div>
</form>
</div>
</div>
</body>
</html>