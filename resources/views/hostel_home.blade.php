<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hostel Home</title>
    <!-- google fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500&display=swap"
        rel="stylesheet">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/d8cfbe84b9.js" crossorigin="anonymous"></script>
    <!-- External CSS -->
    <style>
        /*Common CSS*/
        body {
            margin: 0px;
            font-family: Arial, Helvetica, sans-serif;
            font-size: 13px;
            color: #5d5d5d;

        }

        .floatLeft {
            float: left;
        }

        .floatRight {
            float: right;
        }

        .cleaner {
            clear: both;
        }

        .display-inline {
            display: inline-block;
            width: 124px;
        }

        .margin-zero {
            margin: 0px;
        }

        /*Master Page CSS*/
        #MasterBody .mainBodyContainer {
            margin: 0px 20px;
        }

        #MasterBody .ContainWrapper {
            /*min-width: 780px;*/
            min-width: 640px;
            max-width: 1366px;
            /*border:1px solid red;*/
            margin: 0 auto;
        }

        #MasterBody .notice-wrapper {
            display: inline-block;
            min-width: 930px;
            max-width: 96%;
        }

        #MasterBody .Header-Container {
            padding: 0 25px 0 25px;
            /*background-color: red;*/
        }

        #MasterBody .Banner-Container {
            /*margin-top: 10px;*/
        }

        #MasterBody .loginStatusPanel {
            margin-top: 5px;
            text-align: right;
            font-size: 12px;
        }

        #MasterBody .loginStatusPanel .StatusPanelContainer {
            margin-top: 5px;
        }

        #MasterBody .loginStatusPanel .StatusPanelContainer .StatusPanel #ctl00_lblAvatarName {
            display: inline-block;
            margin: 6px 0px;
            letter-spacing: 1px;
            word-spacing: 3px;
            font-weight: bold;
            color: #1d0909;
        }

        #MasterBody .loginStatusPanel .StatusPanelContainer .StatusPanel #ctl00_lbtnUserName {
            color: #1f6c14;
        }

        #MasterBody .loginStatusPanel .StatusPanelContainer .AvatarStatusPanel #ctl00_imgAvatar {
            height: 44px;
            width: auto;
            margin-left: 5px;
        }

        #MasterBody .loginStatusPanel .StatusPanel {}

        #MasterBody .loginStatusPanel .AvatarStatusPanel {}

        #MasterBody .loginStatusPanel .semesterStatusLabel {
            display: inline-block;
            width: 110px;
            text-align: right;
            color: #1f6c14;
            font-weight: bolder;
            letter-spacing: 1px;
        }

        #MasterBody .loginStatusPanel .semesterStatusLabel1 {
            display: inline-block;
            width: 110px;
            text-align: right;
            color: #cf6c6c;
            font-weight: bolder;
            letter-spacing: 1px;
        }

        #MasterBody .loginStatusPanel .semesterStatus {
            display: inline-block;
            text-align: end;
            font-weight: bold;
            margin-left: 12px;
            color: #cf6c6c;
        }

        #MasterBody .loginStatusPanel .semesterStatus1 {
            display: inline-block;
            text-align: end;
            font-weight: bold;
            margin-left: 12px;
            color: #1f6c14;
        }

        #MasterBody .loginStyle {
            cursor: pointer;
            display: inline-block;
            width: 300px;
            text-align: right;
            padding-right: 3px;
            color: #5d5d5d;
            text-decoration: none;

        }

        /*#MasterBody .logoutStyle {
    cursor: pointer;
    display: inline-block;
    width: 60px;
    height: 18px;
    text-align: center;
    padding: 3px 5px 2px 5px;
    color: #f6f1ef;
    text-decoration: none;
    font-size: 13px;
    font-weight: 600;
    margin-top: 5px;
    background-color:#f2531c;
    border-radius: 3px;
}*/
        #MasterBody .loginStyle:hover,
        #MasterBody .logoutStyle:hover {
            color: #615b5b;
            font-style: oblique;
        }

        /*Menu*/

        #MasterBody .navMenu {
            background-color: #F2F2F2;
            height: 40px;
            border-bottom: 4px solid #FFA500;
            margin-top: 5px;
        }

        #MasterBody .navMenu .staticHome {
            list-style: none;
            display: inline-block;
            float: left;
            padding: 0px;
        }

        /*#MasterBody .navMenu .staticHome li a {
    cursor: pointer;
    /*height: 28px;
    padding: 12px 10px;
    color: #5d5d5d;
    text-decoration: initial;
    font-weight: bold;
}*/
        /*#MasterBody .navMenu .staticHome li a:hover {
        color: white;
        background-color: black;
    }*/
        #MasterBody .navMenu a img {
            display: none;
        }

        #MasterBody .navMenu #ctl00_menuMain tr td table tr td a {
            padding: 0 10px;
            cursor: pointer;
            height: 28px;
            padding-top: 12px;
            color: #5d5d5d;
            display: inline-block;
        }

        #MasterBody .navMenu #ctl00_menuMain tr td table tr td img {
            display: none;
        }

        /*#MasterBody .navMenu #ctl00_menuMain tr td table tr td a:hover {
        color: white;
        background-color: black;
    }*/
        /*#MasterBody .navMenu > div {
        border-bottom: 2px solid #FFA500;
        background-color: #F2F2F2;
    }*/
        /*#MasterBody .navMenu > div tr td a {
        padding: 0 20px;
        cursor: pointer;
        height: 23px;
        padding-top: 8px;
        color: #5d5d5d;
        display: inline-block;
        width: 100%;
    }*/
        /*#MasterBody .navMenu > div tr td a:hover {
            color: white;
            background-color: black;
        }*/
        /*navMenu*/

        /*Footer*/
        #MasterBody .footer {
            width: 80%;
            margin: 0 auto;
            margin-top: 50px;
            border-top: 1px solid #FFA500;
            padding-top: 10px;
            text-align: center;
            margin-bottom: 10px;
        }

        /*Footer*/

        /*Message and Page Title*/
        .ContainWrapper .Message-Area {
            margin-top: 5px;
            margin-bottom: 5px;
            border-top: 1px solid #FFA500;
            border-bottom: 1px solid #FFA500;
            background-color: #f9f9f9;
            padding: 2px;
        }

        .ContainWrapper .Message-Area .msgTitle {
            font-weight: bold;
            font-size: 9pt;
        }

        .ContainWrapper .Message-Area #ctl00_MainContainer_lblMsg {
            color: red;
        }

        .ContainWrapper .PageTitle {
            margin-top: 10px;
        }

        .ContainWrapper .PageTitle label {
            color: black;
            font-weight: 600;
            font-size: 12px;
            letter-spacing: 2px;
            word-spacing: 3px;
        }

        /*login page div gradient*/

        .gradient_div {
            width: 100%;
            margin: 150px auto;
            border: 0px solid #B5C7DE;
            text-align: left;
            padding-bottom: 4px;
            background: -webkit-radial-gradient(red, green, blue);
            /* Safari 5.1 to 6.0 */
            background: -o-radial-gradient(red, green, blue);
            /* For Opera 11.6 to 12.0 */
            background: -moz-radial-gradient(red, green, green);
            /* For Firefox 3.6 to 15 */
            background: radial-gradient(#c1e6b2, #d0f0c3, #defad2);
            /* Standard syntax (must be last) */
        }

        .Padding {
            padding: 0 10px 0 10px;
        }

        input.button {
            color: #127817;
            font-weight: normal;
            font-size: 9pt;
            font-family: Tahoma;
            vertical-align: middle;
            border: solid 1px #fab564;
            background: #eab434 50% top;
            padding: 1px 1px 1px 1px;
            cursor: pointer;
            margin-right: 0px;
            margin-left: 0px;
        }

        input.button:hover {
            background: #B5D7DB top;
            border: solid 1px #71ACB4;
        }

        hr {
            color: #74c166;
            background-color: #74c166;
            height: 1px;
            border: 0px solid;
        }

        .pointer {
            cursor: pointer;
        }

        .center {
            margin: 0 auto;
            padding: 10px;
        }




        /*Edit Sakim 26-01-2020*/


        .btn-orange {
            width: 100%;
            margin-top: 0px;
            background: #4781f0;
            color: white;
        }



        .nav>li>a:hover,
        .nav>li>a:focus {
            text-decoration: none;
            background-color: #f0cdb8;
            transition: all 0.10s ease-in-out;
            box-shadow: 0 8px 9px rgba(0, 0, 0, 0.2), 0 5px 6px rgba(0, 0, 0, 0.19);
            color: #B03E1A;
        }


        #MasterBody .navMenu .staticHome li a:hover {
            background-color: #f0cdb8;
            transition: all 0.10s ease-in-out;
            box-shadow: 0 8px 9px rgba(0, 0, 0, 0.2), 0 5px 6px rgba(0, 0, 0, 0.19);
            color: #B03E1A;
        }

        #MasterBody .navMenu .staticHome li a {
            cursor: pointer;
            /*height: 28px;*/
            padding: 13px 20px;
            color: #5d5d5d;
            text-decoration: initial;
            font-weight: bold;
        }


        ul,
        ol {
            margin-top: 11px;
            margin-bottom: 0;
        }


        .navbar {
            position: relative;
            min-height: 42px !important;
            margin-bottom: 20px;
            border: 1px solid transparent;

        }


        #MasterBody .navMenu #ctl00_menuMain tr td table tr td a:hover {
            color: #8C2B15;
            background-color: #f0cdb8;
            transition: all 0.10s ease-in-out;
            box-shadow: 0 8px 9px rgba(0, 0, 0, 0.2), 0 5px 6px rgba(0, 0, 0, 0.19);
        }


        a {
            color: #5d5d5d;
            text-decoration: none;
        }

        .navbar-nav>li>a {

            padding-top: 10px;
            padding-bottom: 10px;
            line-height: 20px;

        }



        .col-xs-1,
        .col-sm-1,
        .col-md-1,
        .col-lg-1,
        .col-xs-2,
        .col-sm-2,
        .col-md-2,
        .col-lg-2,
        .col-xs-3,
        .col-sm-3,
        .col-md-3,
        .col-lg-3,
        .col-xs-4,
        .col-sm-4,
        .col-md-4,
        .col-lg-4,
        .col-xs-5,
        .col-sm-5,
        .col-md-5,
        .col-lg-5,
        .col-xs-6,
        .col-sm-6,
        .col-md-6,
        .col-lg-6,
        .col-xs-7,
        .col-sm-7,
        .col-md-7,
        .col-lg-7,
        .col-xs-8,
        .col-sm-8,
        .col-md-8,
        .col-lg-8,
        .col-xs-9,
        .col-sm-9,
        .col-md-9,
        .col-lg-9,
        .col-xs-10,
        .col-sm-10,
        .col-md-10,
        .col-lg-10,
        .col-xs-11,
        .col-sm-11,
        .col-md-11,
        .col-lg-11,
        .col-xs-12,
        .col-sm-12,
        .col-md-12,
        .col-lg-12 {

            position: static;
            min-height: 1px;
            padding-right: 15px;
            padding-left: 15px;

        }



        .dropdown-menu {
            position: absolute;
            top: 100%;
            left: 0;
            z-index: 1000;
            display: none;
            float: left;
            min-width: 160px;
            padding: 5px 0;
            margin: 2px 0 0;
            margin-top: 2px;
            font-size: 14px;
            text-align: left;
            list-style: none;
            background-color: #fdf0e9;
            -webkit-background-clip: padding-box;
            background-clip: padding-box;
            border: 1px solid #ccc;
            border: 1px solid rgba(0, 0, 0, .15);
            border-radius: 4px;
            border-top-left-radius: 4px;
            border-top-right-radius: 4px;
            -webkit-box-shadow: 0 6px 12px rgba(0, 0, 0, .175);
            box-shadow: 0 6px 12px rgba(0, 0, 0, .175);
        }

        #MasterBody .navMenu>div tr td a {
            padding: 0 20px;
            padding-top: 0px;
            cursor: pointer;
            height: 23px;
            padding-top: 8px;
            color: #5d5d5d;
            display: inline-block;
            width: 100%;
            background: #fdf0e9;
        }

        #MasterBody .navMenu>div tr td a:hover {
            color: #262626;
            background-color: #f2d6c5;
            box-shadow: 0 8px 8px rgba(0, 0, 0, 0.2), 0 6px 6px rgba(0, 0, 0, 0.19);
            transition: all 0.11s ease-in-out;
        }

        #MasterBody .navMenu>div {
            border-bottom: 1px solid #FFA500;
            background-color: #F2F2F2;
        }



        #MasterBody .logoutStyle {
            cursor: pointer;
            display: inline-block;
            width: 60px;
            height: 25px;
            text-align: center;
            padding: 3px 5px 2px 5px;
            color: #f6f1ef;
            text-decoration: none;
            font-size: 13px;
            font-weight: 600;
            margin-top: 5px;
            background-color: #f2531c;
            border-radius: 3px;
        }



        @media screen and (max-width: 767px) {
            .navbar-nav .open .dropdown-menu {

                position: static;
                float: none;
                width: auto;
                margin-top: 0;
                background-color: gainsboro;
                border: 0;
                -webkit-box-shadow: none;
                box-shadow: none;

            }

            .table_scroll {
                overflow-x: scroll !important;
            }



            .navbar-nav {

                margin: 0 !important;
                width: 100% !important;

            }

            .level2,
            .lavel3 {
                width: 100% !important;
            }

            .ttable {
                height: 500px;
                overflow: scroll;

            }


            .btn-orange {
                width: 100% !important;
                margin-top: 10px;
                background: #4781f0;
                color: white;
            }


        }


        .btn:hover,
        .btn:focus,
        .btn.focus {
            color: #262424;
            text-decoration: none;
            background: none;
            box-shadow: 0 0 10px 0 #3498db inset, 0 0 10px 4px #3498db;
            outline: none;
            transition: all 150ms ease-in-out;
            border-color: #3498db;
        }


        .ttable table tr td,
        .ttable table tr th {
            border-color: #637eb3;


        }


        .navbar-toggle {
            position: relative;
            float: right;
            padding: 5px 5px;
            margin-top: 8px;
            margin-right: 15px;
            margin-bottom: 8px;

            background-image: none;
            border: 1px solid transparent;
            border-radius: 4px;
        }



        .dropdown-menu>li>a:hover,
        .dropdown-menu>li>a:focus {
            color: #262626;
            text-decoration: none;
            background-color: #f2d6c5;
            box-shadow: 0 8px 8px rgba(0, 0, 0, 0.2), 0 6px 6px rgba(0, 0, 0, 0.19);
            transition: all 0.11s ease-in-out;
        }


        input[type="date"].form-control,
        input[type="time"].form-control,
        input[type="datetime-local"].form-control,
        input[type="month"].form-control {
            line-height: 22px;
        }



        .view_all {

            text-align: center;
            color: black;
            cursor: pointer
        }

        .view_all:hover {

            color: #2196F3;
        }


        .bg-c-yellow {
            background: -webkit-gradient(linear, left top, right top, from(#fe9365), to(#feb798));
            background: linear-gradient(to right, #fe9365, #feb798);
        }

        .bg-c-green {
            background: -webkit-gradient(linear, left top, right top, from(#0ac282), to(#0df3a3));
            background: linear-gradient(to right, #0ac282, #0df3a3);
        }

        .bg-c-pink {
            background: -webkit-gradient(linear, left top, right top, from(#fe5d70), to(#fe909d));
            background: linear-gradient(to right, #fe5d70, #fe909d);
        }

        .bg-c-lite-green {
            background: -webkit-gradient(linear, left top, right top, from(#01a9ac), to(#01dbdf));
            background: linear-gradient(to right, #01a9ac, #01dbdf);
        }

        .user-card-full .user-profile {
            border-radius: 5px 0 0 5px;
        }


        .update-card {
            color: #fff;
            border-radius: 10px;
            outline: none;
            border: none;
        }

        .card-block {
            padding: 1.25rem;
        }

        .text-white {
            color: #fff !important;
        }

        .update-card .card-footer {
            background-color: transparent;
            border-top: 1px solid #fff;
        }


        .badge-success {
            color: #fff !important;
            background-color: #00c851 !important;
        }

        .badge {
            color: #fff !important;
            border-radius: .125rem;
            -webkit-box-shadow: 0 2px 5px 0 rgba(0, 0, 0, 0.16), 0 2px 10px 0 rgba(0, 0, 0, 0.12);
            box-shadow: 0 2px 5px 0 rgba(0, 0, 0, 0.16), 0 2px 10px 0 rgba(0, 0, 0, 0.12);
        }

        .badge-warning {
            color: #fff !important;
            background-color: #fb3 !important;
        }

        .badge-light {
            color: #000 !important;
            background-color: #e0e0e0 !important;
        }

        .text-center {
            text-align: center;
        }

        .card-block {
            padding: 1.25rem;
        }

        .m-b-25 {
            margin-bottom: 25px;
        }

        .img-radius {
            border-radius: 5px;
            vertical-align: middle;
            border-style: none;
        }


        .f-w-600 {
            font-weight: 600;
        }

        h6 {
            font-size: 14px;
        }

        .card-block {
            padding: 1.25rem;
        }

        .b-b-default {
            border-bottom: 1px solid #e0e0e0;
        }

        .m-b-20 {
            margin-bottom: 20px;
        }

        .p-b-5 {
            padding-bottom: 5px !important;
        }

        .text-muted {
            color: #919aa3 !important;
        }

        .f-w-400 {
            font-weight: 400;
        }

        .card .card-block p {
            line-height: 25px;
        }

        .m-b-10 {
            margin-bottom: 10px;
        }

        .user-card-full .user-profile {}

        .proff {
            border-radius: 5px 0 0 5px !important;
            height: 280px;
        }

        label {
            display: inline-block;
            max-width: 100%;
            margin-bottom: 5px;
            font-weight: bold;
            margin-top: 5px;
        }

        .text-right {
            text-align: right !important
        }

        .all_notice {
            max-height: 337px;
            overflow-y: scroll;
        }

        .notice {
            border-bottom: 1px solid #d7d7d7;
        }

        .panel-heading {
            padding: 5px 15px;
            border-bottom: 1px solid transparent;
            border-bottom-color: transparent;
            border-top-left-radius: 3px;
            border-top-right-radius: 3px;
        }

        .panel-footer {
            padding: 4px 15px;
            background-color:
                #f5f5f5;
            border-top: 1px solid #ddd;
            border-bottom-right-radius: 3px;
            border-bottom-left-radius: 3px;
        }



        .b_width {
            width: 90px;
            text-align: right;

        }


        .white-text {
            background: #2196F3;
            color: white;
            text-align: center
        }
    </style>
</head>

<body>


    @foreach ($data1 as $da1)
        <div class="row">

            <div class="col-sm-12 col-md-12 col-lg-12">
                <div class="container-fluid">


                    <div class="row" style="margin: 10px 8px; background-color: #f6f7f7;">

                        <div class="col-md-12 col-lg-12" style="position: static">
                            <h2 style="color: #FF5722; font-size: 26px">Hostel Bill &amp; Payment History</h2>
                        </div>
                        <div class="col-md-12 col-lg-12" style="position: static">
                            <div class="Message-Area">
                                <div id="ctl00_MainContainer_UpdatePanel2">

                                    <div id="ctl00_MainContainer_pnlMessage" class="panel panel-default pp"
                                        style="padding: 15px 15px 10px 15px">

                                       <a href="/student_login"> <button type="button" class="btn btn-info">Log Out</button></a>
                                        <span id="ctl00_MainContainer_lblMsg"
                                            style="text-align: center; font-size: 18px; color: #ff0000; font-weight: bold;"></span>

                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="col-md-8 col-lg-8" style="position: static">
                            <div class="Message-Area" style="height: auto">
                                <div>
                                    <div id="ctl00_MainContainer_UpdatePanel1">



                                        <div class="row" style="width: auto;" id="tblHeader">
                                            <br>
                                            <div class="col-md-6"
                                                style="background-color: #fff;    box-shadow: 0 1px 1px rgba(0, 0, 0, .05); ">
                                                <div class="panel panel-default pp"
                                                    style="padding: 20px 15px 10px 15px">
                                                    <div class="form-group row ">
                                                        <div class="col-md-5 mb-2 mt-2">

                                                            <span id="ctl00_MainContainer_lblStudentId">Student
                                                                Id</span>
                                                        </div>
                                                        <div class="col-md-7 mb-2">
                                                            <input name="ctl00$MainContainer$txtStudentId"
                                                                type="text" value="{{ $da1->sid }}"
                                                                id="ctl00_MainContainer_txtStudentId"
                                                                disabled="disabled" class="form-control"
                                                                placeholder="Student Id">

                                                        </div>

                                                        <div class="col-md-12 mb-2">

                                                        </div>
                                                    </div>
                                                    <div class="form-group row ">
                                                        <div class="col-md-5 mb-2 mt-2">
                                                            <span id="ctl00_MainContainer_Label2">Student Name </span>
                                                        </div>
                                                        <div class="col-md-7 mb-2">
                                                            <span
                                                                id="ctl00_MainContainer_lblStudentName">{{ $da1->sname }}
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6"
                                                style="background-color: #fff;    box-shadow: 0 1px 1px rgba(0, 0, 0, .05);">
                                                <div class="panel panel-default pp oo">
                                                    <br>
                                                    <div class="form-group row ">
                                                        <div class="col-md-5 mb-2">
                                                            <label>User</label>
                                                        </div>
                                                        <div class="col-md-7 mb-2">
                                                            <span
                                                                id="ctl00_MainContainer_lblUserName">{{ $da1->sid }}</span>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row ">
                                                        <div class="col-md-5 mb-2">
                                                            <label>Date</label>
                                                        </div>
                                                        <div class="col-md-4 mb-2">
                                                            <span
                                                                id="ctl00_MainContainer_lblCurrentDate">{{ $da1->date }}</span>
                                                        </div>
                                                        <div class="col-md-1 mb-2" id="divProgress"
                                                            style="display: none; z-index: 1000;">
                                                            <img id="ctl00_MainContainer_LoadingImage"
                                                                src="../Images/Img/Waiting.gif"
                                                                style="height:35px;width:35px;border-width:0px;">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>





                                        </div>


                                    </div>
                                </div>
                            </div>
                        </div>

    <div class="col-md-4 col-lg-4" style="position: static">
        <div id="ctl00_MainContainer_UpdatePanel5">

            <div id="ctl00_MainContainer_pnlOnlinePayment" class="msgPanel">

                <div class="panel panel-default pp" style="padding: 20px 15px 10px 15px; background-color: #fff;">
                    <div>
                        <div id="ctl00_MainContainer_UpdatePanel4">


                            <div class=" row ">
                                <div class="col-md-6 mb-2">
                                    <span id="ctl00_MainContainer_lbl123" style="color:Green;font-size: 16px;"> I want
                                        to pay <b>&lrm;৳</b> : </span>

                                </div>
                                <div class="col-md-6 mb-2">
                                  <form action="{{ url('/pay') }}" method="POST" class="needs-validation">
                                    <input type="hidden" value="{{ csrf_token() }}" name="_token" />
                                    <input type="hidden" value="{{ $da1->sname }}" name="sname" />
                                    <input type="hidden" value="{{ $da1->sid }}" name="sid" />
                                    <input id='total_amount' name="total_amount" type="text" value="21250"
                                        id="ctl00_MainContainer_txt_online_amount" class="ssl_amount"
                                        style="height: 30px;background-color: #e9ecef;
    opacity: 1;">

                                </div>
                            </div>



                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                             <button class="button"
                                    style="    display: inline-block;
    border-radius: 4px;
    background-color: #f2a81d;
    border: none;
    color: #FFFFFF;
    text-align: center;
    font-size: 18px;
    padding: 6px;
    width: 100%;
    transition: all 0.5s;
    cursor: pointer;
    margin: 5px auto;
} "><span
                                        style="left:0 !important;">Pay Online</span></button>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </div>
</form>
@endforeach
    <div class="col-md-12 col-lg-12" style="position: static">
        <div id="ctl00_MainContainer_UpdatePanel3">

            <div class="panel panel-default pp" style="padding: 20px 15px 10px 15px">
                <div style="float: left; display: block; margin-right: 20px;">

                </div>
                <div class="row" id="Table1">
                    <div class="col-md-4"
                        style="background-color: #fff;    box-shadow: 0 1px 1px rgba(0, 0, 0, .05); ">
                        <br>
                        <div class="form-group row ">

                            <div class="col-md-4 mb-2 mt-2">
                                <span id="ctl00_MainContainer_lblTxtTotalFee">Total Fee </span>
                            </div>
                            <div class="col-md-8 mb-2">
                                <input name="ctl00$MainContainer$txtTotalFee" type="text" value="<?php
                                $year=($diff->y*12)*3500;
                                $month=($diff->m*3500);
                                $total=$year+$month;
                                echo$total;
                                ?>"
                                    id="ctl00_MainContainer_txtTotalFee" disabled="disabled" class="form-control">
                            </div>
                        </div>

                        <div class="form-group row ">

                            <div class="col-md-4 mb-2 mt-2">
                                <span id="ctl00_MainContainer_lblTxtTotalDiscount">Total Discount </span>
                            </div>
                            <div class="col-md-8 mb-2">
                                <input name="ctl00$MainContainer$txtTotalDiscount" type="text" value="0"
                                    id="ctl00_MainContainer_txtTotalDiscount" disabled="disabled"
                                    class="form-control">
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="col-md-4"
                        style="background-color: #fff;    box-shadow: 0 1px 1px rgba(0, 0, 0, .05); ">
                        <br>
                        <div class="form-group row ">
                            <div class="col-md-4 mb-2 mt-2">
                                <span id="ctl00_MainContainer_lblPaidAmont">Paid Amount </span>
                            </div>
                            <div class="col-md-8 mb-2">
                                <input name="ctl00$MainContainer$txtPaidAmount" type="text" value="{{$t}}"
                                    id="ctl00_MainContainer_txtPaidAmount" disabled="disabled" class="form-control">
                            </div>
                        </div>
                        <div class="form-group row ">
                            <div class="col-md-4 mb-2 mt-2">
                                <span id="ctl00_MainContainer_lblTxtBalance">Balance </span>
                            </div>
                            <div class="col-md-8 mb-2">
                                <input name="ctl00$MainContainer$txtBalance" type="text" value="<?php
                                echo$total-$t;

                                ?>

                                "
                                    id="ctl00_MainContainer_txtBalance" disabled="disabled" class="form-control">
                                <br>
                                <span id="ctl00_MainContainer_lblNote" style="color:Blue;"> Negative(-) balance means
                                    advance payment </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="panel panel-default pp" style="padding: 20px 15px 10px 15px">
                <div class="ttable" style="">
                    <div>
                        <table class="gridcss" cellspacing="0" cellpadding="4" rules="all" border="1"
                            id="ctl00_MainContainer_gvStudentBillView" style="width:100%;border-collapse:collapse;">
                            <tbody>
                                <tr style="color:White;background-color:#2196F3;height:40px;">

                                    <th class="center" scope="col" style="width:500px;">Student Name</th>
                                    <th class="center" scope="col" style="width:500px;">ID</th>
                                    <th class="center" scope="col" style="width:500px;">Amount</th>
                                    <th class="center" scope="col" style="width:500px;">Date</th>

                                </tr>
                                @foreach ($data2 as $da2 )


                                <tr>

                                    <td>{{ $da2->sname}}</td>
                                    <td>{{ $da2->sid}}</td>
                                    <td>{{ $da2->amount}}</td>
                                    <td>{{ $da2->date}}</td>

                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <input type="hidden" name="ctl00$MainContainer$hdnBillHistoryId" id="ctl00_MainContainer_hdnBillHistoryId">
    </div>

    <!-- Modal for dbbl card type -->
    <div id="CardTypeModal" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">×</button>
                    <h4 class="modal-title">Payment Method</h4>
                </div>
                <div class="modal-body">
                    <div class="row text-center ok" style="margin-bottom: 5px;">
                        <div id="bk" class="col-lg-9 table-bordered gateway"
                            onclick="ShowGatewayModal(4,'bk')">
                            <img id="Bkash" alt="Bkash" style="width: 100px; height: 50px; cursor: pointer;"
                                src="../Images/bkash.png" onclick="ShowGatewayModal(4,'bk')">
                            <span style="float: right; margin-top: 18px;"><input id="ctl00_MainContainer_rbtnBkash"
                                    type="radio" name="ctl00$MainContainer$rbtnBkash" value="rbtnBkash"
                                    onclick="ShowGatewayModal(4,'bk');"></span>
                        </div>
                        <div id="vs" class="col-lg-9 table-bordered gateway"
                            onclick="ShowGatewayModal(1,'vs')">
                            <img id="anyVisa" alt="Visa" style="width: 100px; height: 50px; cursor: pointer;"
                                src="../Images/visa.png" onclick="ShowGatewayModal(1,'vs')">
                            <span style="float: right; margin-top: 18px;"><input id="ctl00_MainContainer_rbtnVisa"
                                    type="radio" name="ctl00$MainContainer$rbtnVisa" value="rbtnVisa"
                                    onclick="ShowGatewayModal(1,'vs');"></span>
                        </div>
                        <div id="ms" class="col-lg-9 table-bordered gateway"
                            onclick="ShowGatewayModal(2,'ms')">
                            <img id="AnyMaster" alt="Master Card"
                                style="width: 100px; height: 50px; cursor: pointer;" src="../Images/master.png"
                                onclick="ShowGatewayModal(2,'ms')">
                            <span style="float: right; margin-top: 18px;"><input id="ctl00_MainContainer_rbtnMaster"
                                    type="radio" name="ctl00$MainContainer$rbtnMaster" value="rbtnMaster"
                                    onclick="ShowGatewayModal(2,'ms');"></span>
                        </div>
                        <div id="mx" class="col-lg-9 table-bordered gateway"
                            onclick="ShowGatewayModal(5,'mx')">
                            <img id="AmEx" alt="American Express Card"
                                style="width: 100px; height: 50px; cursor: pointer;" src="../Images/amex_logo.png"
                                onclick="ShowGatewayModal(5,'mx')">
                            <span style="float: right; margin-top: 18px;"><input id="ctl00_MainContainer_rbtnAmEx"
                                    type="radio" name="ctl00$MainContainer$rbtnAmEx" value="rbtnAmEx"
                                    onclick="ShowGatewayModal(5,'mx');"></span>
                        </div>
                        <div id="nx" class="col-lg-9 table-bordered gateway"
                            onclick="ShowGatewayModal(3,'nx')">
                            <img id="Nexus" alt="DBBL Nexus" style="width: 100px; height: 50px; cursor: pointer;"
                                src="../Images/dbbl_nexus.png" onclick="ShowGatewayModal(3,'nx')">
                            <span style="float: right; margin-top: 18px;"><input id="ctl00_MainContainer_rbtnNexus"
                                    type="radio" name="ctl00$MainContainer$rbtnNexus" value="rbtnNexus"
                                    onclick="ShowGatewayModal(3,'nx');"></span>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="col-md-4">
                                <label>Total Fee:</label>
                                <label id="TotalAmount"></label>
                            </div>

                            <div class="col-md-4">
                                <label>Convenience Fee:</label>
                                <label id="BankAmount"></label>
                            </div>

                            <div class="col-md-4">
                                <label>Payable Amount:</label>
                                <label id="TotalPayableAmount"></label>
                                <input type="hidden" name="ctl00$MainContainer$TotalAmountToBePaid"
                                    id="ctl00_MainContainer_TotalAmountToBePaid">
                            </div>
                        </div>

                    </div>
                </div>
                <div class="modal-footer">
                    <div class="row">
                        <div class="col-md-10 new" style="margin-left:45px;">
                            <input type="submit" name="ctl00$MainContainer$btnSubmit" value="Continue"
                                id="ctl00_MainContainer_btnSubmit" class="btn btn-block btn-primary"
                                style="width:100%;">
                        </div>

                        <div class="col-md-10 new" style="margin-top:5px; margin-left:45px;">
                            <button type="button" class="w-100 btn btn-default" style="width:100%;"
                                data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    </div>
    </div>

    </div>
    <script>
        var obj = {};
        obj.cus_name = $('#customer_name').val();
        obj.cus_phone = $('#mobile').val();
        obj.cus_email = $('#email').val();
        obj.cus_addr1 = $('#address').val();
        obj.amount = $('#total_amount').val();

        $('#sslczPayBtn').prop('postdata', obj);
    </script>
    <script>
        (function(window, document) {
            var loader = function() {
                var script = document.createElement("script"),
                    tag = document.getElementsByTagName("script")[0];
                script.src = "https://sandbox.sslcommerz.com/embed.min.js?" + Math.random().toString(36).substring(
                    7);
                tag.parentNode.insertBefore(script, tag);
            };

            window.addEventListener ? window.addEventListener("load", loader, false) : window.attachEvent("onload",
                loader);
        })(window, document);
    </script>

</body>
<style>
    /*Common CSS*/
    body {
        margin: 0px;
        font-family: Arial, Helvetica, sans-serif;
        font-size: 13px;
        color: #5d5d5d;

    }

    .floatLeft {
        float: left;
    }

    .floatRight {
        float: right;
    }

    .cleaner {
        clear: both;
    }

    .display-inline {
        display: inline-block;
        width: 124px;
    }

    .margin-zero {
        margin: 0px;
    }

    /*Master Page CSS*/
    #MasterBody .mainBodyContainer {
        margin: 0px 20px;
    }

    #MasterBody .ContainWrapper {
        /*min-width: 780px;*/
        min-width: 640px;
        max-width: 1366px;
        /*border:1px solid red;*/
        margin: 0 auto;
    }

    #MasterBody .notice-wrapper {
        display: inline-block;
        min-width: 930px;
        max-width: 96%;
    }

    #MasterBody .Header-Container {
        padding: 0 25px 0 25px;
        /*background-color: red;*/
    }

    #MasterBody .Banner-Container {
        /*margin-top: 10px;*/
    }

    #MasterBody .loginStatusPanel {
        margin-top: 5px;
        text-align: right;
        font-size: 12px;
    }

    #MasterBody .loginStatusPanel .StatusPanelContainer {
        margin-top: 5px;
    }

    #MasterBody .loginStatusPanel .StatusPanelContainer .StatusPanel #ctl00_lblAvatarName {
        display: inline-block;
        margin: 6px 0px;
        letter-spacing: 1px;
        word-spacing: 3px;
        font-weight: bold;
        color: #1d0909;
    }

    #MasterBody .loginStatusPanel .StatusPanelContainer .StatusPanel #ctl00_lbtnUserName {
        color: #1f6c14;
    }

    #MasterBody .loginStatusPanel .StatusPanelContainer .AvatarStatusPanel #ctl00_imgAvatar {
        height: 44px;
        width: auto;
        margin-left: 5px;
    }

    #MasterBody .loginStatusPanel .StatusPanel {}

    #MasterBody .loginStatusPanel .AvatarStatusPanel {}

    #MasterBody .loginStatusPanel .semesterStatusLabel {
        display: inline-block;
        width: 110px;
        text-align: right;
        color: #1f6c14;
        font-weight: bolder;
        letter-spacing: 1px;
    }

    #MasterBody .loginStatusPanel .semesterStatusLabel1 {
        display: inline-block;
        width: 110px;
        text-align: right;
        color: #cf6c6c;
        font-weight: bolder;
        letter-spacing: 1px;
    }

    #MasterBody .loginStatusPanel .semesterStatus {
        display: inline-block;
        text-align: end;
        font-weight: bold;
        margin-left: 12px;
        color: #cf6c6c;
    }

    #MasterBody .loginStatusPanel .semesterStatus1 {
        display: inline-block;
        text-align: end;
        font-weight: bold;
        margin-left: 12px;
        color: #1f6c14;
    }

    #MasterBody .loginStyle {
        cursor: pointer;
        display: inline-block;
        width: 300px;
        text-align: right;
        padding-right: 3px;
        color: #5d5d5d;
        text-decoration: none;

    }

    #MasterBody .loginStyle:hover,
    #MasterBody .logoutStyle:hover {
        color: #615b5b;
        font-style: oblique;
    }



    #MasterBody .navMenu {
        background-color: #F2F2F2;
        height: 40px;
        border-bottom: 4px solid #FFA500;
        margin-top: 5px;
    }

    #MasterBody .navMenu .staticHome {
        list-style: none;
        display: inline-block;
        float: left;
        padding: 0px;
    }

    #MasterBody .navMenu a img {
        display: none;
    }

    #MasterBody .navMenu #ctl00_menuMain tr td table tr td a {
        padding: 0 10px;
        cursor: pointer;
        height: 28px;
        padding-top: 12px;
        color: #5d5d5d;
        display: inline-block;
    }

    #MasterBody .navMenu #ctl00_menuMain tr td table tr td img {
        display: none;
    }

    #MasterBody .footer {
        width: 80%;
        margin: 0 auto;
        margin-top: 50px;
        border-top: 1px solid #FFA500;
        padding-top: 10px;
        text-align: center;
        margin-bottom: 10px;
    }

    /*Footer*/

    /*Message and Page Title*/
    .ContainWrapper .Message-Area {
        margin-top: 5px;
        margin-bottom: 5px;
        border-top: 1px solid #FFA500;
        border-bottom: 1px solid #FFA500;
        background-color: #f9f9f9;
        padding: 2px;
    }

    .ContainWrapper .Message-Area .msgTitle {
        font-weight: bold;
        font-size: 9pt;
    }

    .ContainWrapper .Message-Area #ctl00_MainContainer_lblMsg {
        color: red;
    }

    .ContainWrapper .PageTitle {
        margin-top: 10px;
    }

    .ContainWrapper .PageTitle label {
        color: black;
        font-weight: 600;
        font-size: 12px;
        letter-spacing: 2px;
        word-spacing: 3px;
    }

    /*login page div gradient*/

    .gradient_div {
        width: 100%;
        margin: 150px auto;
        border: 0px solid #B5C7DE;
        text-align: left;
        padding-bottom: 4px;
        background: -webkit-radial-gradient(red, green, blue);
        /* Safari 5.1 to 6.0 */
        background: -o-radial-gradient(red, green, blue);
        /* For Opera 11.6 to 12.0 */
        background: -moz-radial-gradient(red, green, green);
        /* For Firefox 3.6 to 15 */
        background: radial-gradient(#c1e6b2, #d0f0c3, #defad2);
        /* Standard syntax (must be last) */
    }

    .Padding {
        padding: 0 10px 0 10px;
    }

    input.button {
        color: #127817;
        font-weight: normal;
        font-size: 9pt;
        font-family: Tahoma;
        vertical-align: middle;
        border: solid 1px #fab564;
        background: #eab434 50% top;
        padding: 1px 1px 1px 1px;
        cursor: pointer;
        margin-right: 0px;
        margin-left: 0px;
    }

    input.button:hover {
        background: #B5D7DB top;
        border: solid 1px #71ACB4;
    }

    hr {
        color: #74c166;
        background-color: #74c166;
        height: 1px;
        border: 0px solid;
    }

    .pointer {
        cursor: pointer;
    }

    .center {
        margin: 0 auto;
        padding: 10px;
    }




    /*Edit Sakim 26-01-2020*/


    .btn-orange {
        width: 100%;
        margin-top: 0px;
        background: #4781f0;
        color: white;
    }



    .nav>li>a:hover,
    .nav>li>a:focus {
        text-decoration: none;
        background-color: #f0cdb8;
        transition: all 0.10s ease-in-out;
        box-shadow: 0 8px 9px rgba(0, 0, 0, 0.2), 0 5px 6px rgba(0, 0, 0, 0.19);
        color: #B03E1A;
    }


    #MasterBody .navMenu .staticHome li a:hover {
        background-color: #f0cdb8;
        transition: all 0.10s ease-in-out;
        box-shadow: 0 8px 9px rgba(0, 0, 0, 0.2), 0 5px 6px rgba(0, 0, 0, 0.19);
        color: #B03E1A;
    }

    #MasterBody .navMenu .staticHome li a {
        cursor: pointer;
        /*height: 28px;*/
        padding: 13px 20px;
        color: #5d5d5d;
        text-decoration: initial;
        font-weight: bold;
    }


    ul,
    ol {
        margin-top: 11px;
        margin-bottom: 0;
    }


    .navbar {
        position: relative;
        min-height: 42px !important;
        margin-bottom: 20px;
        border: 1px solid transparent;

    }


    #MasterBody .navMenu #ctl00_menuMain tr td table tr td a:hover {
        color: #8C2B15;
        background-color: #f0cdb8;
        transition: all 0.10s ease-in-out;
        box-shadow: 0 8px 9px rgba(0, 0, 0, 0.2), 0 5px 6px rgba(0, 0, 0, 0.19);
    }


    a {
        color: #5d5d5d;
        text-decoration: none;
    }

    .navbar-nav>li>a {

        padding-top: 10px;
        padding-bottom: 10px;
        line-height: 20px;

    }



    .col-xs-1,
    .col-sm-1,
    .col-md-1,
    .col-lg-1,
    .col-xs-2,
    .col-sm-2,
    .col-md-2,
    .col-lg-2,
    .col-xs-3,
    .col-sm-3,
    .col-md-3,
    .col-lg-3,
    .col-xs-4,
    .col-sm-4,
    .col-md-4,
    .col-lg-4,
    .col-xs-5,
    .col-sm-5,
    .col-md-5,
    .col-lg-5,
    .col-xs-6,
    .col-sm-6,
    .col-md-6,
    .col-lg-6,
    .col-xs-7,
    .col-sm-7,
    .col-md-7,
    .col-lg-7,
    .col-xs-8,
    .col-sm-8,
    .col-md-8,
    .col-lg-8,
    .col-xs-9,
    .col-sm-9,
    .col-md-9,
    .col-lg-9,
    .col-xs-10,
    .col-sm-10,
    .col-md-10,
    .col-lg-10,
    .col-xs-11,
    .col-sm-11,
    .col-md-11,
    .col-lg-11,
    .col-xs-12,
    .col-sm-12,
    .col-md-12,
    .col-lg-12 {

        position: static;
        min-height: 1px;
        padding-right: 15px;
        padding-left: 15px;

    }



    .dropdown-menu {
        position: absolute;
        top: 100%;
        left: 0;
        z-index: 1000;
        display: none;
        float: left;
        min-width: 160px;
        padding: 5px 0;
        margin: 2px 0 0;
        margin-top: 2px;
        font-size: 14px;
        text-align: left;
        list-style: none;
        background-color: #fdf0e9;
        -webkit-background-clip: padding-box;
        background-clip: padding-box;
        border: 1px solid #ccc;
        border: 1px solid rgba(0, 0, 0, .15);
        border-radius: 4px;
        border-top-left-radius: 4px;
        border-top-right-radius: 4px;
        -webkit-box-shadow: 0 6px 12px rgba(0, 0, 0, .175);
        box-shadow: 0 6px 12px rgba(0, 0, 0, .175);
    }

    #MasterBody .navMenu>div tr td a {
        padding: 0 20px;
        padding-top: 0px;
        cursor: pointer;
        height: 23px;
        padding-top: 8px;
        color: #5d5d5d;
        display: inline-block;
        width: 100%;
        background: #fdf0e9;
    }

    #MasterBody .navMenu>div tr td a:hover {
        color: #262626;
        background-color: #f2d6c5;
        box-shadow: 0 8px 8px rgba(0, 0, 0, 0.2), 0 6px 6px rgba(0, 0, 0, 0.19);
        transition: all 0.11s ease-in-out;
    }

    #MasterBody .navMenu>div {
        border-bottom: 1px solid #FFA500;
        background-color: #F2F2F2;
    }



    #MasterBody .logoutStyle {
        cursor: pointer;
        display: inline-block;
        width: 60px;
        height: 25px;
        text-align: center;
        padding: 3px 5px 2px 5px;
        color: #f6f1ef;
        text-decoration: none;
        font-size: 13px;
        font-weight: 600;
        margin-top: 5px;
        background-color: #f2531c;
        border-radius: 3px;
    }



    @media screen and (max-width: 767px) {
        .navbar-nav .open .dropdown-menu {

            position: static;
            float: none;
            width: auto;
            margin-top: 0;
            background-color: gainsboro;
            border: 0;
            -webkit-box-shadow: none;
            box-shadow: none;

        }

        .table_scroll {
            overflow-x: scroll !important;
        }



        .navbar-nav {

            margin: 0 !important;
            width: 100% !important;

        }

        .level2,
        .lavel3 {
            width: 100% !important;
        }

        .ttable {
            height: 500px;
            overflow: scroll;

        }


        .btn-orange {
            width: 100% !important;
            margin-top: 10px;
            background: #4781f0;
            color: white;
        }


    }


    .btn:hover,
    .btn:focus,
    .btn.focus {
        color: #262424;
        text-decoration: none;
        background: none;
        box-shadow: 0 0 10px 0 #3498db inset, 0 0 10px 4px #3498db;
        outline: none;
        transition: all 150ms ease-in-out;
        border-color: #3498db;
    }


    .ttable table tr td,
    .ttable table tr th {
        border-color: #637eb3;


    }


    .navbar-toggle {
        position: relative;
        float: right;
        padding: 5px 5px;
        margin-top: 8px;
        margin-right: 15px;
        margin-bottom: 8px;

        background-image: none;
        border: 1px solid transparent;
        border-radius: 4px;
    }



    .dropdown-menu>li>a:hover,
    .dropdown-menu>li>a:focus {
        color: #262626;
        text-decoration: none;
        background-color: #f2d6c5;
        box-shadow: 0 8px 8px rgba(0, 0, 0, 0.2), 0 6px 6px rgba(0, 0, 0, 0.19);
        transition: all 0.11s ease-in-out;
    }


    input[type="date"].form-control,
    input[type="time"].form-control,
    input[type="datetime-local"].form-control,
    input[type="month"].form-control {
        line-height: 22px;
    }



    .view_all {

        text-align: center;
        color: black;
        cursor: pointer
    }

    .view_all:hover {

        color: #2196F3;
    }


    .bg-c-yellow {
        background: -webkit-gradient(linear, left top, right top, from(#fe9365), to(#feb798));
        background: linear-gradient(to right, #fe9365, #feb798);
    }

    .bg-c-green {
        background: -webkit-gradient(linear, left top, right top, from(#0ac282), to(#0df3a3));
        background: linear-gradient(to right, #0ac282, #0df3a3);
    }

    .bg-c-pink {
        background: -webkit-gradient(linear, left top, right top, from(#fe5d70), to(#fe909d));
        background: linear-gradient(to right, #fe5d70, #fe909d);
    }

    .bg-c-lite-green {
        background: -webkit-gradient(linear, left top, right top, from(#01a9ac), to(#01dbdf));
        background: linear-gradient(to right, #01a9ac, #01dbdf);
    }

    .user-card-full .user-profile {
        border-radius: 5px 0 0 5px;
    }


    .update-card {
        color: #fff;
        border-radius: 10px;
        outline: none;
        border: none;
    }

    .card-block {
        padding: 1.25rem;
    }

    .text-white {
        color: #fff !important;
    }

    .update-card .card-footer {
        background-color: transparent;
        border-top: 1px solid #fff;
    }


    .badge-success {
        color: #fff !important;
        background-color: #00c851 !important;
    }

    .badge {
        color: #fff !important;
        border-radius: .125rem;
        -webkit-box-shadow: 0 2px 5px 0 rgba(0, 0, 0, 0.16), 0 2px 10px 0 rgba(0, 0, 0, 0.12);
        box-shadow: 0 2px 5px 0 rgba(0, 0, 0, 0.16), 0 2px 10px 0 rgba(0, 0, 0, 0.12);
    }

    .badge-warning {
        color: #fff !important;
        background-color: #fb3 !important;
    }

    .badge-light {
        color: #000 !important;
        background-color: #e0e0e0 !important;
    }

    .text-center {
        text-align: center;
    }

    .card-block {
        padding: 1.25rem;
    }

    .m-b-25 {
        margin-bottom: 25px;
    }

    .img-radius {
        border-radius: 5px;
        vertical-align: middle;
        border-style: none;
    }


    .f-w-600 {
        font-weight: 600;
    }

    h6 {
        font-size: 14px;
    }

    .card-block {
        padding: 1.25rem;
    }

    .b-b-default {
        border-bottom: 1px solid #e0e0e0;
    }

    .m-b-20 {
        margin-bottom: 20px;
    }

    .p-b-5 {
        padding-bottom: 5px !important;
    }

    .text-muted {
        color: #919aa3 !important;
    }

    .f-w-400 {
        font-weight: 400;
    }

    .card .card-block p {
        line-height: 25px;
    }

    .m-b-10 {
        margin-bottom: 10px;
    }

    .user-card-full .user-profile {}

    .proff {
        border-radius: 5px 0 0 5px !important;
        height: 280px;
    }

    label {
        display: inline-block;
        max-width: 100%;
        margin-bottom: 5px;
        font-weight: bold;
        margin-top: 5px;
    }

    .text-right {
        text-align: right !important
    }

    .all_notice {
        max-height: 337px;
        overflow-y: scroll;
    }

    .notice {
        border-bottom: 1px solid #d7d7d7;
    }

    .panel-heading {
        padding: 5px 15px;
        border-bottom: 1px solid transparent;
        border-bottom-color: transparent;
        border-top-left-radius: 3px;
        border-top-right-radius: 3px;
    }

    .panel-footer {
        padding: 4px 15px;
        background-color:
            #f5f5f5;
        border-top: 1px solid #ddd;
        border-bottom-right-radius: 3px;
        border-bottom-left-radius: 3px;
    }



    .b_width {
        width: 90px;
        text-align: right;

    }


    .white-text {
        background: #2196F3;
        color: white;
        text-align: center
    }
</style>


</html>
