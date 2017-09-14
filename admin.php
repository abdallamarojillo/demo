<?php
require_once("incs/connect.php");
?>
<!DOCTYPE html>
    <html>
        <head>
            <title>Admin-username</title>
            <link href="css/font-awesome.min.css" rel="stylesheet"/>
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <style>
                body{
                    background-color: silver;
                }
                #body{
                    
                }
                #header{
                    background: black;
                    color: white;
                    height: 50px;
                    border-radius:7px;
                }
                #header ul{
                    list-style: none;
                }
                #header ul li{
                    float: left;
                    padding-right:15px;
                    
                }
                #header ul li a{
                    text-decoration: none;
                    color: white;
                }
                #header ul li:hover{
                    background: silver;
                }
                /** styling the content **/
                #content{
                    background: rgb(18,71,150);
                }
                .explore{
                    background: orange;
                    height: 300px;
                    margin-bottom: 5px;
                }
                .explore ul li{
                   float: left;
                    list-style: none;
                    margin-right:80px;
                }
                .responses{
                    background: grey;
                    height: 200px;
                    
                }
                .responses h1{
                    text-align: center;
                    color: blue;
                }
                #ratings{
                    float: left;
                    width: 450px;
                }
                #ratings li{
                    background: silver;
                    margin: 5px;
                    list-style: none;
                    width: 400px;
                }
                .comments{
                    margin-top: 5px;
                    float: left;
                    width: 550px;
                    background: orange;
                }
                
                
                /****MEDIA QUERIES ***/
                @media only screen and (min-width:480px) and (max-width:1064px){
                    #content{
                        width: 90%;
                    }

                }
            </style>
        </head>
        <body>
            <div id="body">
                <div id="header">
                    <ul>
                        <li><a href="#">Welcome Admin</a><i class="fa fa-user"></i></li>
                        <li><a href="#">Add Admin </a><i class="fa fa-user"></i></li>
                        <li><a href="#">Notifications </a><i class="fa fa-user"></i></li>
                        <li><a href="#">Messages </a><i class="fa fa-envelope"></i></li>
                        <li><a href="#">Logout </a><i class="fa fa-user"></i></li>
                    </ul>
                </div> <!-- End of div header--->
                <div id="content">
                    <div class="explore">
                        <ul id="explore_site">
                            <li><a href="registered_users.php"><i class="fa fa-circle" style="font-size: 200px; color: green;"></i><br/>Registered users</a></li>
                            <li> <i class="fa fa-circle" style="font-size: 200px; color: green;"></i><br/>online users</li>
                            <li> <i class="fa fa-circle" style="font-size: 200px; color: green;"></i><br/>Total Posts</li>
                            <li> <i class="fa fa-circle" style="font-size: 200px; color: green;"></i><br/>Common category</li>
                        </ul>
                    </div>  <!-- End of div class explore--->
                    <div class="responses">
                        <h1>Responses</h1>
                        <div id="ratings">
                            <li>Satisfactory </li>
                            <li>Good</li>
                            <li>Need to Improve</li>
                            <li>Unsatisfactory</li>
                        </div>
                        <div class="comments">
                            show a text area here
                        </div>
                    </div>  <!-- End of div class user responses--->
                    <div class="activities">
                        <div id="activities1">
                            <li></li>
                        </div>
                        <div id="activities2">
                            <a href="incs/disconnect.php">Disconnect Website </a>
                        </div>
                    </div>
                </div>
            </div>
        </body>
    </html>