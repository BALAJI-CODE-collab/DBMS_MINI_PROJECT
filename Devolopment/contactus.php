<!DOCTYPE html>
<html>
     <?php session_start();?>
<title>Sign up</title>
    <head>
    <style>
.box{
    position: absolute;
    margin-top: 15%;
    margin-left: 30%;
    width: 35%;
    background-color: #383838;
    text-align: center;
    border-radius: 20px;
    border: 1px solid #383838;
    font-family: sans-serif;
    align-content: center;
    opacity: 0.9;
    
}
table{
    margin-left: 60px;
    margin-bottom: 10px;
    color: white;
    width: 70%;
}
td,tr{
    line-height: 250%;
    font-family: sans-serif;
    padding-left: none;
    
}
a{
    text-decoration-line: none;
}
 .header{
    width: 100%;
    background-color: #383838;
    text-align: center;
    border-top-style: solid;
    border-bottom-style: solid;
    border-bottom-color: white;
    border-top-color: white; 
}
.content{
   background-image: url("images/Pic5.jpg");
    height: 675px;
    width: 100%;
    background-repeat: no-repeat;
}
        body{
    margin:0;
    padding: 0;
}
h1{
    color: white;
    font-family: sans-serif;
}
h2,h4{
    color: white;
    font-family: sans-serif;
    
}
    </style>
    </head>
    <body>
        <div class="header">
            <span><a href="
                <?php
                if($_SESSION["flag"] == 1){
                    echo 'food_tracker_fitness.php';
                }
                else
                    echo 'login.php';
                ?>
                "><h1>Fitness.<i>com</i></h1></a></span><div class="tab">
        </div>
        <div class="content">
            <div class="box">
                <table>
                    <tr><th>Name</th><th>Email ID</th></tr>
                    <tr><td>Sanjay Kumar T S</td><td>sanjay.ts1997@gmail.com</td></tr>
                    <tr><td>Shathin R Rao</td><td>shathin.rao@gmail.com</td></tr>
                </table>
            </div>    
            </div></div>
    </body>
</html>
