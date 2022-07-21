<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>AWS</title>
    <style>
        *{
            box-sizing: border-box;
            padding: 0;
            margin: 0;
        }
        body{
            display: flex;
            flex-direction: column;
            height: 100vh;
            width: 100vw;
        }
        .header{
            display:flex;
            flex-direction: column;
            justify-content: space-around;
            height: 12%;
            width: 100%;
            padding: 20px;
            background-color: #232f3e;
        }
        .content{
            display:flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            height: 43%;
            width: 100%;
            background-color: #2c3a4b;
        }
        .other{
            display:flex;
            justify-content: space-around;
            height: 35%;
            width: 100%;
            background-color: #ffffff;
        }
        .footer{
            display:flex;
            justify-content: space-around;
            height: 10%;
            width: 100%;
            background-color: #005276;
        }
        .upper{
            height: 60%;
            width: 100%;
            display: flex;
            justify-content: space-around
        }
        button{
            background-color: #eb5f07;
            border: none;
            border-radius: 25px;
            color: #ffffff;
            padding: 8px 30px;
            font-weight: bold;
        }
        .icons{
            width: 60%;
            background-image: url('./bg.png');
            background-position: left;
            background-repeat: no-repeat;
            background-size: contain;
        }
        .lower{
            margin-top: 10px;
            height: 40%;
            width: 70%;
            display: flex;
            justify-content: space-around;
        }
        a{
            text-decoration: none;
            color: #ffffff;
            margin-left: 5px;
            margin-right: 5px;
        }
        h1{
            font-size: 30px;
            font-weight: bold;
            color: #ffffff;
            margin-bottom: 40px;
        }
    </style>
</head>
<body>
    <div class="header">
        <div class="upper">
            <div class="icons"></div>
            <div class="anchors">
                <a href="">Contact</a>
                <a href="">Support</a>
                <a href="">English</a>
                <a href="">My Account</a>
                <a href="">Sign In</a>
                <button>Create an AWS Account</button>
            </div>
        </div>
        <div class="lower">
            <a href="">Products</a>
            <a href="">Solution</a>
            <a href="">Pricing</a>
            <a href="">Documentation</a>
            <a href="">Learn</a>
            <a href="">Partner Network</a>
            <a href="">AWS Marketplace</a>
            <a href="">Customer Enablement</a>
            <a href="">Events</a>
            <a href="">Explore More</a>
        </div>
    </div>
    <div class="content">
        <h1>Start Building On AWS Today</h1>
        <p></p>
        <button>Get Started For Free</button>
    </div>
    <div class="other"></div>
    <div class="footer"></div>
</body>
</html>