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
        width: 1200px;
        margin: auto;
    }

    h1{
        height: 40px;
        text-align: center;
        font-size: 30px;
        background: purple;
        color: white;
    }

    .sidebar{
        width: 200px;
        background: lightgrey;
        padding-left: 50px;
        height: 600px;
    }

    h2{
        font-size: 25px;
        padding-top: 20px;
    }

    li{
        font-size: 20px;
        list-style: none;
        padding-top: 30px;
        margin-bottom: 20px;
    }



    
</style>
<body>
    <div class="container">
        <div class="navbar">
            <h1>Page Admin</h1>
        </div>
        <div class="sidebar">
            <h2>Berita Coding</h2>
            <ul>
                <li>Overview</li>
                <li>Post</li>
                <li>Feedback</li>
                <li>Setting</li>
                <a href="logout.php"><li>logout</li></a>
            </ul>
        </div>
    </div>
</body>
</html>