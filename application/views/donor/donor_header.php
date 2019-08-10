<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

        <link href="https://fonts.googleapis.com/css?family=Quicksand&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Contrail+One&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Overpass:700&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Oswald&display=swap" rel="stylesheet">


        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">

        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

        <title>Donation Form</title>
    </head>

    <style>
        a.nav-link:hover{
            color: #655650;
        }
        a.nav-link{
            color: #ececec;
        }
        /*div.card{
            background-color: transparent; /*303c6c*/
        /*    color: #ececec;
            border: none;
        }*/
        a.btn-light{
            background-color: #b69b90;
            border-color: #b69b90;
            color: #ececec;
        }
        a.btn-light:hover{
            background-color: #837772;
            color: #ececec;
            border: none;
        }
        h4.card-title{
            border-bottom: 1px solid;
        }
        /*a.stretched-link{
            color: #b4dfe5; 
            letter-spacing: 1px;
        }*/
        body{
            background-color:#d9b09c;
            font-family: 'Overpass', sans-serif;
        }
        #tinynav{
            font-family: 'Quicksand', sans-serif;
            background-color: #e5d5cf;
            color: #655650;
        }
        .jumbotron{
            background-image: linear-gradient(rgba(0,0,0,0.4),rgba(0,0,0,0.4)), url(<?php echo base_url('images/download.jpg'); ?>);
            background-position: center;
            height: 50vh;
        }
        h1.display-4{
            font-family: 'Overpass', sans-serif;
            font-size: 85px;        
        }
        div.bod{
            color: #ececec;
            text-align: center;
            position: absolute;
            top: 40%;
            left: 50%;
            transform: translate(-50%,-50%);
        }
        p.lamaoquote{
            font-family: 'Oswald', sans-serif;
            letter-spacing: 2px;
        }
        #bottomnav{
            font-family: 'Quicksand', sans-serif;
            background-color: #e5d5cf;
            color: #655650;
        }
        a.footerlink{
            text-decoration: none;
            color: #655650;
        }
        a.footerlink:hover{
            color: #938884; /* #837772;*/
        }
    </style>