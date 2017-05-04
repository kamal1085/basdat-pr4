<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>MINI</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- JS -->
    <!-- please note: The JavaScript files are loaded in the footer to speed up page construction -->
    <!-- See more here: http://stackoverflow.com/q/2105327/1114320 -->

    <!-- CSS -->
    <link href="<?php echo URL; ?>assets/css/bootstrap.css" rel="stylesheet">
</head>
<body>
    <!-- logo -->
    <div class="logo">
        TOKOKEREN
    </div>

    <!-- navigation -->
    <div class="navigation">
        <a href="<?php echo URL; ?>">home</a>
        <a href="<?php echo URL; ?>home/login">login</a>

    </div>

    <div id="user-nav" class="navbar">
                <ul class="nav btn-group">
                    <li class="btn btn-inverse" ><a title="" href="<?php echo URL; ?>"><i class="icon icon-user"></i> <span class="text">Home</span></a></li>
                    <li class="btn btn-inverse" ><a title="" href="<?php echo URL; ?>home/login"><i class="icon icon-user"></i> <span class="text">Login</span></a></li>

                    <li class="btn btn-inverse dropdown" id="menu-messages"><a href="#" data-toggle="dropdown" data-target="#menu-messages" class="dropdown-toggle"><i class="icon icon-envelope"></i> <span class="text">Messages</span> <span class="label label-important">5</span> <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a class="sAdd" title="" href="#">new message</a></li>
                            <li><a class="sInbox" title="" href="#">inbox</a></li>
                            <li><a class="sOutbox" title="" href="#">outbox</a></li>
                            <li><a class="sTrash" title="" href="#">trash</a></li>
                        </ul>
                    </li>
                    </ul>
                    </div>
