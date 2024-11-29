<?php include 'index1.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <style>
        body{
            background-color: #ffffff;
            text-align: center;
        }   
        img{
            height: 100px;
            width: 100px;
            border-radius: 50px;
        }
        
        .heading{
            display: inline-flex;
            align-items: center;
            justify-content: center;
            border-bottom: 2px;
            border-color: white;
        }
        p{
            font-size: 70px;
            font-family: 'Roboto', sans-serif;
            margin-top: 1px;
            margin-bottom: 1px;
            color: white;
            text-shadow: 2px 2px 4px #000000;
        }
        .heading1{
            border-bottom: 2px solid rgb(150, 150, 150);
            margin: 20px;
            padding: 10px;
        }

        .welcome{
            font-size: 20px;
            font-family: 'roboto', sans-serif;
            margin: 20px;
            width: auto;
            margin-left: 180px;
            margin-right: 180px;
            padding-bottom: 20px;
            border-bottom: 2px solid rgb(151, 151, 151);
        }

        button{
            font-family: 'roboto', sans-serif;
            margin: 30px;
            margin-left: auto;
            margin-right: auto;
            background-color: #94f951;
            border: none;
            color: rgb(79, 70, 70);
            padding: 15px 32px;
            text-align: center;
            text-decoration: none;
            display: block;
            font-size: 20px;
            cursor: pointer;
            border-radius: 8px;
            width: 300px;
        }

        button:hover{
            background-color: #f94f4f;
            box-shadow: 0 8px 16px 0 rgba(5, 5, 5, 0.6);
            transition: 0.1s;
        }

        a:hover{
            color: white;
            text-decoration: none;
            transition: 0.1s;
        }

    </style>

</head>
<body>
    <div class="heading1">
        <div class="heading">
            <img src="mainLogo.png">
        </div>
        <p>XSense</p>
    </div>
    
    <div class="welcome"><b>Welcome to my website.</b><br> <br>
        <i>If you are someone who is willing to buy pure and authenstic stuff directly from the homes and dairies of rural people. 
        Then you are in the right place.</i></div>
    <br>
    <button><a href="StudentRegistration.html"> Register as Student</a></button>
    <button><a href="SellerRegistration.html"> Register as Seller</a></button>
</body>
</html>