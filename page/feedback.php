<?php
require_once('function/helper.php');
require_once('function/koneksi.php');

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Sidang</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet">
    <link rel="style<link rel="stylesheet" href="<?= base_url('aset/css/font.css') ?>">
    <style>
        :root{
           font-family: "Poppins", sans-serif;
        }
        * {
            margin: 0;
            padding: 0;
        }
        
        .mp {
            display: flex;
            height: 100vh;
        }
        .sidebar {
            background-image: url(<?= base_url('aset/images/mp-dosen/bg.png') ?>);
            background-size: cover;
            flex: 11;
        }
        .dot {
            background-image: url(<?= base_url('aset/images/mp-dosen/profile.png') ?>);
            background-size: cover;
            height: 3rem;
            width: 3rem;
            background-color: white;
            border-radius: 50%;
            display: inline-block;
            margin-left: 1%;
            margin-top: 1%;
        }
        .myprofile {
            color: white;
            display: flex;
            align-items: center;
            margin-bottom: 20%;
        }
        .myprofile > p {
            padding: 0 10px;
        }
        
        .menu-option {
            border-radius: 10px;
            border: none;
            margin: 15px;
            width: 80%;
            display: flex;
            align-items: center;
            padding: 0px 20px;
            font-family: "Poppins", sans-serif;
            font-weight: bold;
        }
        
        .menu-option > img {
            margin: 0px 15px;
        }
        .option {
            display: flex;
            align-items: center;
            flex-direction: column;
            justify-content: stretch;
        }
        .esgulpage {
            background-image: url(<?= base_url('aset/images/mp-dosen/esgulpage.png') ?>);
            background-size: cover;
            display: flex;
            flex: 37;
            justify-content: center;
            align-items: center
        }
        
       .rectangle{
        display 
       }
        
        .rectangle2 {
            width: 1207px;
            height: 498px;
            background: rgba(217, 217, 217, 0.3);
            margin-top: 4%;
            border-radius: 20px;
        }
        
        .header {
            font-size: 24px;
            font-weight: bold;
            padding-left: 2%;
            top: 3rem;
            position: relative;
        }
        
        .headerdate{
            font-weight: bold;
            margin-left: 55rem;
            top: 1rem;
            position: relative;
        }
        
        .line1 {
            width: 1207px;
            height: 1px;
            background-color: #000000;
            opacity: 33%;
            position: relative;
            top: 2rem;
        }
        
        .status {
            position: relative;
            top: 3.5em;
            padding-left: 2%;
            font-size: 24px;
            font-weight: bold;
        }
        
        .rectangle3 {
            width: 705px;
            height: 243px;
            background: rgba(255, 255, 255, 0.35);
            position: relative;
            top: 6rem;
            left: 1.5rem;
            border-radius: 20px;
        }
        
        .rectangle4 {
            width: 552px;
            height: 243px;
            background: rgba(217, 217, 217, 0.5);
            position: absolute;
            left: 21.7%;
            border-radius: 0px 20px 20px 0px;
        }
        
        .text {
            font-size: 15px;
            font-weight: 500;
            padding-left: 0.5rem;
            padding-top: 0.3rem;
            padding-bottom: 0.3rem;
        }
        
        .text2 {
            font-size: 15px;
            font-weight: 500;
            padding-left: 0.5rem;
            padding-top: 1rem;
            padding-bottom: 1rem;
        }
        
        .textbot {
            font-size: 15px;
            font-weight: 500;
            padding-left: 0.5rem;
            padding-top: 0.15rem;
            padding-bottom: 0.15rem;
        }
        
        .textbot2 {
            font-size: 15px;
            font-weight: 500;
            padding-left: 0.5rem;
            padding-top: 1rem;
            padding-bottom: 0.15rem;
        }
        
        .textgreentop {
            border-radius: 0px 20px 0px 0px;
            background: rgba(173, 255, 47, 0.4);
            font-size: 15px;
            font-weight: 500;
            padding-left: 0.5rem;
            padding-top: 0.3rem;
            padding-bottom: 0.3rem;
        }
        
        .textgreenbot {
            background: rgba(173, 255, 47, 0.4);
            font-size: 15px;
            font-weight: 500;
            padding-left: 0.5rem;
            padding-top: 0.3rem;
            padding-bottom: 0.3rem;
        }
        
        
        .choose-file {
            width: 10rem;
            height: 2rem;
            margin: 1.5rem;
            border-radius: 15px;
        }
        
        .line2 {
            width: 705px;
            height: 1px;
            background-color: #000000;
            opacity: 33%;
            position: relative;
        }
        
        .rectangle5 {
            position: relative;
            width:1207px;
            height:145px;
            background: rgba(217, 217, 217, 0.5);
            margin-top: 5rem;
            border-radius: 20px;
            
        }
        
        .rectangle6 {
            position: absolute;
            width: 705px;
            height: 145px;
            background: rgba(217, 217, 217, 0.5);
            left: 41.5%;
            border-radius: 0px 20px 20px 0px;
        
        }
        
        .header2{
            font-size: 24px;
            font-weight: 600;
            padding-left: 2%;
            margin-top: -3rem;
            position: absolute;
        }
        a {
            text-decoration: none;
        }
    </style>
</head>

<body>
            
                <div class="rectangle2">
                    <p class="header">Kumpulkan sidang skripsi kamu disubmission bawah ini!</p>
                    <p class="headerdate">6 July 2022, 12.34 AM</p>
                    <div class="line1"></div>
                    <p class="status">Submission Status</p>
                    <div class="rectangle3">
                        <div class="rectangle4">
                            <p class="textgreentop">Submitted for grading</p>
                            <p class="textgreenbot">Graded</p>
                            <p class="text">Tuesday, 5 July 2022, 12.34 AM</p>
                            <p class="text">Assignment was submitted 1 day 22 hours early</p>
                            <p class="text">Monday, 4 July 2022, 1;17 AM</p>
                            <button class="choose-file">Choose file</p>
                        </div>
                        <p class="text">Submission Status</p>
                        <div class="line2"></div>
                        <p class="text">Grading status</p>
                        <div class="line2"></div>
                        <p class="text">Due Date</p>
                        <div class="line2"></div>
                        <p class="text">Time remaining</p>
                        <div class="line2"></div>
                        <p class="text">Last modified</p>
                        <div class="line2"></div>
                        <p class="text2">File submissions</p>
                    </div>
                </div>
                <div class="rectangle5">
                    <div class="rectangle6">
                        <p class="textbot">90.0/100.0</p>
                        <div class="line2"></div>
                        <p class="textbot">Tuesday, 5 July 2022, 12.34 AM</p>
                        <div class="line2"></div>
                        <p class="textbot">72234 Aaron Ganteng S.Kom/p>
                        <div class="line2"></div>
                        <p class="textbot2">bagus sidangnya bro selamat kamu lulus</p>
                    </div>
                    <h1 class="header2">FEEDBACK</h1>
                    <p class="textbot">Grade</p>
                    <div class="line2"></div>
                    <p class="textbot">Graded on</p>
                    <div class="line2"></div>
                    <p class="textbot">Graded by/p>
                    <div class="line2"></div>
                    <p class="textbot2">Feedback comments</p>
                </div>
            </div>
        </div>