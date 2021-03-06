<?php
session_start();

$link=@mysqli_connect(
    'localhost',
    'root',
    '',
    'projectphp');

if(isset($_COOKIE["account"])){
    $cookieID=$_COOKIE["account"];
    echo "welcome".$cookieID."再度光臨my縫";
}else{
    echo "歡迎光臨my縫";
}
?>
<html>
<style type="text/css">
    body {
    margin-top: 0px;
    margin-right: 0px;
    margin-bottom: 0px;
    margin-left: 0px;
    }
    #container{
    height:1000px;
    margin-top:0px;
    background: #84C1FF; 
    background: -webkit-linear-gradient(to right, #84C1FF, #FF5151); 
    background: linear-gradient(to right,#84C1FF, #FF5151); 
    }
    ol, ul {
        list-style: none;
    }

    blockquote, q {
        quotes: none;
    }

    blockquote:before, blockquote:after,
    q:before, q:after {
        content: '';
        content: none;
    }

    table {
        border-collapse: collapse;
        border-spacing: 0;
    }


    ::-moz-focus-inner {
        padding: 0;
        border: 0;
    }

    :-moz-placeholder {
        color: #bcc0c8 !important;
    }

    ::-webkit-input-placeholder {
        color: #bcc0c8;
    }

    :-ms-input-placeholder {
        color: #bcc0c8 !important;
    }

    body {
        font: 12px/20px 'Lucida Grande', Verdana, sans-serif;
        background: #84C1FF; 
        background: -webkit-linear-gradient(to right, #84C1FF, #FF5151); 
        background: linear-gradient(to right,#84C1FF, #FF5151); 
    }

    input, textarea, select, label {
        font-family: inherit;
        font-size: 12px;
        -webkit-box-sizing: border-box;
        -moz-box-sizing: border-box;
        box-sizing: border-box;
    }

    .login {
        margin: 50px auto;
        padding: 18px 20px;
        width: 400px;
        background: #3f65b7;
        background-clip: padding-box;
        border: 1px solid #172b4e;
        border-bottom-color: #142647;
        border-radius: 5px;
        background-image: -webkit-radial-gradient(cover, #437dd6, #3960a6);
        background-image: -moz-radial-gradient(cover, #437dd6, #3960a6);
        background-image: -o-radial-gradient(cover, #437dd6, #3960a6);
        background-image: radial-gradient(cover, #437dd6, #3960a6);
        -webkit-box-shadow: inset 0 1px rgba(255, 255, 255, 0.3), inset 0 0 1px 1px rgba(255, 255, 255, 0.1), 0 2px 10px rgba(0, 0, 0, 0.5);
        box-shadow: inset 0 1px rgba(255, 255, 255, 0.3), inset 0 0 1px 1px rgba(255, 255, 255, 0.1), 0 2px 10px rgba(0, 0, 0, 0.5);
    }
    .login > h1 {
        margin-bottom: 20px;
        font-size: 16px;
        font-weight: bold;
        color: white;
        text-align: center;
        text-shadow: 0 -1px rgba(0, 0, 0, 0.4);
    }

    .login-input {
        display: block;
        width: 100%;
        height: 37px;
        margin-bottom: 20px;
        padding: 0 9px;
        color: white;
        text-shadow: 0 1px black;
        background: #2b3e5d;
        border: 1px solid #15243b;
        border-top-color: #0d1827;
        border-radius: 4px;
        background-image: -webkit-linear-gradient(top, rgba(0, 0, 0, 0.35), rgba(0, 0, 0, 0.2) 20%, rgba(0, 0, 0, 0));
        background-image: -moz-linear-gradient(top, rgba(0, 0, 0, 0.35), rgba(0, 0, 0, 0.2) 20%, rgba(0, 0, 0, 0));
        background-image: -o-linear-gradient(top, rgba(0, 0, 0, 0.35), rgba(0, 0, 0, 0.2) 20%, rgba(0, 0, 0, 0));
        background-image: linear-gradient(to bottom, rgba(0, 0, 0, 0.35), rgba(0, 0, 0, 0.2) 20%, rgba(0, 0, 0, 0));
        -webkit-box-shadow: inset 0 1px 2px rgba(0, 0, 0, 0.3), 0 1px rgba(255, 255, 255, 0.2);
        box-shadow: inset 0 1px 2px rgba(0, 0, 0, 0.3), 0 1px rgba(255, 255, 255, 0.2);
    }
    .login-input:focus {
        outline: 0;
        background-color: #32486d;
        -webkit-box-shadow: inset 0 1px 2px rgba(0, 0, 0, 0.3), 0 0 4px 1px rgba(255, 255, 255, 0.6);
        box-shadow: inset 0 1px 2px rgba(0, 0, 0, 0.3), 0 0 4px 1px rgba(255, 255, 255, 0.6);
    }
    .lt-ie9 .login-input {
        line-height: 35px;
    }

    .login-submit {
        display: block;
        width: 100%;
        height: 37px;
        margin-bottom: 15px;
        font-size: 14px;
        font-weight: bold;
        color: #294779;
        text-align: center;
        text-shadow: 0 1px rgba(255, 255, 255, 0.3);
        background: #adcbfa;
        background-clip: padding-box;
        border: 1px solid #284473;
        border-bottom-color: #223b66;
        border-radius: 4px;
        cursor: pointer;
        background-image: -webkit-linear-gradient(top, #d0e1fe, #96b8ed);
        background-image: -moz-linear-gradient(top, #d0e1fe, #96b8ed);
        background-image: -o-linear-gradient(top, #d0e1fe, #96b8ed);
        background-image: linear-gradient(to bottom, #d0e1fe, #96b8ed);
        -webkit-box-shadow: inset 0 1px rgba(255, 255, 255, 0.5), inset 0 0 7px rgba(255, 255, 255, 0.4), 0 1px 1px rgba(0, 0, 0, 0.15);
        box-shadow: inset 0 1px rgba(255, 255, 255, 0.5), inset 0 0 7px rgba(255, 255, 255, 0.4), 0 1px 1px rgba(0, 0, 0, 0.15);
    }
    .login-submit:active {
        background: #a4c2f3;
        -webkit-box-shadow: inset 0 1px 5px rgba(0, 0, 0, 0.4), 0 1px rgba(255, 255, 255, 0.1);
        box-shadow: inset 0 1px 5px rgba(0, 0, 0, 0.4), 0 1px rgba(255, 255, 255, 0.1);
    }

    .login-help {
        text-align: center;
    }
    .login-help > a {
        font-size: 11px;
        color: #d4deef;
        text-decoration: none;
        text-shadow: 0 -1px rgba(0, 0, 0, 0.4);
    }
    .login-help > a:hover {
    text-decoration: underline;
    }
    </style>
    <body>
        <div id="container">
        <BR><BR><BR>

            <div class="img"><CENTER><p align="center"><img src="volley.png" width="150" height="150"></p></CENTER></div>
            <div><form name="login" action="" class="login" method="POST" enctype="multipart/form-data">

                <h1>Member Login</h1>
                    <input type="email" name="account" class="login-input" placeholder="Enter your account" autofocus>
                    <input type="password" name="password" class="login-input" placeholder="Enter your password">
                    <input type="submit" value="Login" class="login-submit"> 
                    <p class="login-help"><a href="index.html">Forgot password?</a></p>
            </form>
            </div>
        </div>


            <?php
            if(isset($_POST["account"])){
                if($_POST["account"]!=null){
                    $account=$_POST["account"];
                    $password=$_POST["password"];


                    $SQL="SELECT * FROM Account WHERE account='$account' AND password='$password'";

                    $result=mysqli_query($link,$SQL);
            
                    if(mysqli_num_rows($result)==1){
                        $_SESSION["login"]="Yes";
                        setcookie("account", $account, time()+3600);
                        header('Location: page1_home.php');                
                    }else{
                        echo "帳號密碼錯誤";
                    }
                }
                else{
                    echo "你未輸入帳號密碼";
                }
            }
            else{
                echo "welcome 請輸入帳號密碼";
            }
            ?>
    </body>
</html>

