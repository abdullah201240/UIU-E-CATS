@extends('hlayout')
@section('content')





<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bookings</title>
    <!-- google fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500&display=swap"
        rel="stylesheet">
    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/d8cfbe84b9.js" crossorigin="anonymous"></script>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <!-- External CSS -->

</head>

<style>
    body {
        margin: 0;
        box-sizing: border-box;
        font-family: 'Montserrat', sans-serif;
        background-color: rgb(242, 244, 244);
    }

    html {
        scroll-behavior: smooth;
    }

    *,
    *::after,
    *::before {
        box-sizing: inherit;
    }


    #USER {
        color: #207DFF;
    }


    .adminDp {
        border-radius: 50%;
    }

    #welcome {
        background-color: white;
        /* border-bottom: 1px solid rgb(19, 18, 18); */
    }

    #welcome ul {
        display: flex;
        justify-content: space-between;
        list-style-type: none;
        padding: 0;
        margin: 0;
    }

    #welcome li {
        margin: 0 1rem;
        padding: 0.5rem 0;
    }

    #welcome li:first-child {
        font-weight: 800;
        font-size: 1.4rem;
    }

    #logout {
        padding: 0.3rem 0.7rem;
        background-color: #207DFF;
        font-weight: 600;
        outline: none;
        border: none;
        border-radius: 7px;
    }

    #logout a {
        color: white;
        text-decoration: none;
    }

    footer {
        border-top: 2px solid #e2e2e2;
        padding: 0.5rem 0;
        text-align: center;
        font-weight: bold;
    }

    footer p {
        margin: 0;
    }

    @media only screen and (min-width:1000px) {
        #sidebar {
            text-align: center;
            /* background-color: #207DFF; */
            background-color: #3885c5;
            color: white;
            width: 15%;
            position: fixed;
            top: 0%;
            padding-top: 1rem;
            z-index: 2;
            height: 100vh;
        }

        #sidebar h3 {
            margin: 0.5rem 0;
        }

        #sidebar p {
            margin: 0;
        }

        #sidebar ul {
            margin-top: 2rem;
        }

        #options {
            list-style-type: none;
            text-align: left;
            padding-left: 0;
        }

        .option a {
            display: block;
            padding: 0.5rem;
            text-decoration: none;
            color: inherit;
        }

        .active {
            background-color: #f7f7f7;
            color: black;
        }

        .option a:hover {
            color: black;
            background-color: white;
        }

        #main-content {
            margin-left: 16%;
        }

        .info-box {
            flex-basis: 20%;
        }
    }

    <style>* {
        font-family: Montserrat;
    }

    .error {
        font-size: 15px;
        color: red;
    }


    #booking #head,
    #customer #head,
    #route #head,
    #seat #head,
    #bus #head {
        /* display: flex;
                justify-content: space-between; */
        padding-top: 1rem;
    }


    #head #search {
        display: flex;
        align-items: center;
    }

    #search #wrapper {
        border: 2px solid black;
        border-radius: 20px;
        background-color: white;
        padding: 0.1rem 0.5rem;
    }

    #wrapper input {
        border: none;
        font-size: 17px;
        outline: none;
    }

    #wrapper a {
        color: #8B8989;

    }

    #wrapper a:hover {
        color: black;

    }

    #booking,
    #customer,
    #route,
    #bus,
    #seat {
        padding: 0 1rem;
    }

    #booking-results>div,
    #customer-results>div,
    #route-results>div,
    #bus-results>div {
        margin-bottom: 0.5rem;
    }

    #booking-results button,
    #customer-results button,
    #route button,
    #bus-results button {
        /* padding: 0.3rem 1rem; */
        border-radius: 5px;
    }

    .button {
        border: none;
        font-weight: bold;
        text-transform: uppercase;
    }

    #add-button {
        background-color: black;
        color: white;
    }

    #route table {
        width: 100%;
    }

    table {
        font-size: 14px;
    }

    #bus table {
        width: 50%;
        margin: 0 auto;
    }

    #bus .edit-button,
    #bus .delete-button,
    #route .edit-button,
    #route .delete-button,
    #customer .edit-button,
    #customer .delete-button {
        padding: 0.3rem 0.7rem;
    }

    /* #booking table{
                width: 100%;
            } */


    table th,
    td {
        padding-left: 0.3rem;
    }

    table button {
        color: white;
    }

    .edit-button {
        background-color: #4370E2;
    }

    .delete-button {
        background-color: #EF0000;
    }

    .edit-button,
    .delete-button {
        font-size: 10px
    }

    .disabled {
        opacity: 0.5;
    }

    .editRouteForm input {
        margin: 0 1rem;
    }

    .editRouteForm input.cost {
        flex-basis: 15%;
    }

    .editRouteForm input.time,
    .editRouteForm input.date,
    .editRouteForm>div.searchBus {
        flex-basis: 40%;
    }

    .editRouteForm input.busnoInput {
        width: 100%;
        margin: 0;
    }

    #noRoutes,
    #noCustomers {
        background-color: black;
        color: white;
    }

    /* For seat.html */
    #main form {
        display: flex;
    }

    #main form input,
    #main form button {
        margin: 0;
        padding: 0.4rem 1rem;
        font-size: 1.1rem;
    }

    #main form input {
        border-radius: 5px 0px 0px 5px;
        outline: none;
        border: 2px solid grey;
    }

    #main form button {
        background-color: black;
        color: white;
        border: none;
        border-radius: 0px 5px 5px 0px;
    }

    .hl {
        background-color: #79ff9c;
    }

    .editRouteForm .searchBus {
        margin: 0 1rem;
    }

    .searchBus {
        position: relative;
    }

    .sugg {
        background-color: white;
        position: absolute;
        margin-top: 0.4rem;
        width: 100%;
        border-radius: 5px;
        max-height: 114px;
        overflow: auto;
    }

    .editRouteForm .sugg {}

    .sugg li {
        border: solid #b0b0b0;
        border-width: 0 2px 2px 2px;
        border-radius: 5px;
        list-style-type: none;
        padding: 0.35rem 0.8rem;
    }

    .sugg li:first-child {
        border-top-width: 2px;
    }

    .sugg li:hover {
        cursor: pointer;
        background-color: #b0b0b0;
    }

    /* styles for Booking.php Forms nd all */
    #seatsDiagram td,
    #displaySeats td {
        padding: 1rem;
        text-align: center;
        margin: 0.3rem;
        width: 55px;
        border: 3px solid transparent;
        display: inline-block;
        background-color: #95bd97;
        border-radius: 5px;
    }

    #displaySeats {
        margin: 3rem auto 1rem auto;
    }


    #seatsDiagram {
        width: 100%;
        margin-bottom: 1rem;
    }

    #seatsDiagram td.selected {
        background-color: greenyellow;
        -webkit-animation-name: rubberBand;
        animation-name: rubberBand;
        animation-duration: 300ms;
        animation-fill-mode: both;
    }

    #seatsDiagram td.notAvailable,
    #displaySeats td.notAvailable {
        color: white;
        background-color: #db2619;
    }

    #seatsDiagram td:not(.space, .notAvailable):hover {
        cursor: pointer;
        border-color: greenyellow;
    }

    #seatsDiagram .space,
    #displaySeats .space {
        background-color: white;
        border: none;
    }

    #routeSugg {
        display: flex;
        justify-content: space-between;
    }

    @-webkit-keyframes rubberBand {
        0% {
            -webkit-transform: scale3d(1, 1, 1);
            transform: scale3d(1, 1, 1);
        }

        30% {
            -webkit-transform: scale3d(1.25, 0.75, 1);
            transform: scale3d(1.25, 0.75, 1);
        }

        40% {
            -webkit-transform: scale3d(0.75, 1.25, 1);
            transform: scale3d(0.75, 1.25, 1);
        }

        50% {
            -webkit-transform: scale3d(1.15, 0.85, 1);
            transform: scale3d(1.15, 0.85, 1);
        }

        65% {
            -webkit-transform: scale3d(.95, 1.05, 1);
            transform: scale3d(.95, 1.05, 1);
        }

        75% {
            -webkit-transform: scale3d(1.05, .95, 1);
            transform: scale3d(1.05, .95, 1);
        }

        100% {
            -webkit-transform: scale3d(1, 1, 1);
            transform: scale3d(1, 1, 1);
        }
    }

    @keyframes rubberBand {
        0% {
            -webkit-transform: scale3d(1, 1, 1);
            transform: scale3d(1, 1, 1);
        }

        30% {
            -webkit-transform: scale3d(1.25, 0.75, 1);
            transform: scale3d(1.25, 0.75, 1);
        }

        40% {
            -webkit-transform: scale3d(0.75, 1.25, 1);
            transform: scale3d(0.75, 1.25, 1);
        }

        50% {
            -webkit-transform: scale3d(1.15, 0.85, 1);
            transform: scale3d(1.15, 0.85, 1);
        }

        65% {
            -webkit-transform: scale3d(.95, 1.05, 1);
            transform: scale3d(.95, 1.05, 1);
        }

        75% {
            -webkit-transform: scale3d(1.05, .95, 1);
            transform: scale3d(1.05, .95, 1);
        }

        100% {
            -webkit-transform: scale3d(1, 1, 1);
            transform: scale3d(1, 1, 1);
        }
    }

    .rubberBand {
        -webkit-animation-name: rubberBand;
        animation-name: rubberBand;
    }
</style>


<body>
    <br><br>

    <center>
        <div class="mb-3" style="">
            <label for="sourceSearch" class="form-label"><h1>Hostel check in</h1></label>
            <!-- Search Functionality -->




        </div>
        </div>
    </center>
    <!-- Seats Diagram -->
    <div class="mb-3" style="margin-left:7%;">
        <table id="seatsDiagram" style="display: block;
  margin-left: auto;
  margin-right: auto;">
            <thead>
                <tr class="space">
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                </tr>
                <tr>Floor-1(A)</tr>
                <tr class="space">
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                </tr>
                <tr>Floor-1(B)</tr>
            </thead>



            <tr>
                <?php
                $arr = [];

                foreach ($data as $da)
                $arr[] = $da->seatNum;

                ?>
                <?php

                for ($i = '1'; $i <= '10'; $i++) {
                    $class = in_array($i, $arr) ? 'booked' : 'free';
                    if ($class == 'free') {

                        echo" <td style='background:green;color:white;'>$i</td>";
                    } else {
                        echo" <td style='background:red;color:white;'>$i</td>";
                    }


                }
                ?>




                <td class="space">&nbsp;</td>



                <?php
                $arr = [];

                foreach ($data1 as $da)
                $arr[] = $da->seatNum;

                ?>
                <?php

                for ($i = '11'; $i <= '20'; $i++) {
                    $class = in_array($i, $arr) ? 'booked' : 'free';
                    if ($class == 'free') {

                        echo" <td style='background-color:green; color:white;'>$i</td>";
                    } else {
                        echo" <td style='background:red;color:white;'>$i</td>";
                    }


                }
                ?>

            </tr>


        </table>
        <br>
        <table id="seatsDiagram" style="display: block;
  margin-left: auto;
  margin-right: auto;">
            <thead>
                <tr class="space">
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                </tr>
                <tr>Floor-2(A)</tr>
                <tr class="space">
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                </tr>
                <tr>Floor-2(B)</tr>
            </thead>
            <tr>

                <?php
                $arr = [];

                foreach ($data2 as $da)
                $arr[] = $da->seatNum;

                ?>
                <?php

                for ($i = '1'; $i <= '10'; $i++) {
                    $class = in_array($i, $arr) ? 'booked' : 'free';
                    if ($class == 'free') {

                        echo" <td style='background-color:green; color:white;'>$i</td>";
                    } else {
                        echo" <td style='background-color:red; color:white;'>$i</td>";
                    }


                }
                ?>





                <td class="space">&nbsp;</td>



                <?php
                $arr = [];

                foreach ($data3 as $da)
                $arr[] = $da->seatNum;

                ?>
                <?php

                for ($i = '11'; $i <= '20'; $i++) {
                    $class = in_array($i, $arr) ? 'booked' : 'free';
                    if ($class == 'free') {

                        echo" <td style='background-color:green; color:white;'>$i</td>";
                    } else {
                        echo" <td style='background-color:red; color:white;'>$i</td>";
                    }


                }
                ?>




            </tr>


        </table>
        <br>
        <table id="seatsDiagram" style="display: block;
  margin-left: auto;
  margin-right: auto;">
            <thead>
                <tr class="space">
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                </tr>
                <tr>Floor-3(A)</tr>
                <tr class="space">
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                </tr>
                <tr>Floor-3(B)</tr>
            </thead>
            <tr>

                <?php
                $arr = [];

                foreach ($data4 as $da)
                $arr[] = $da->seatNum;

                ?>
                <?php

                for ($i = '1'; $i <= '10'; $i++) {
                    $class = in_array($i, $arr) ? 'booked' : 'free';
                    if ($class == 'free') {

                        echo" <td style='background-color:green; color:white;'>$i</td>";
                    } else {
                        echo" <td style='background-color:red; color:white;'>$i</td>";
                    }


                }
                ?>






                <td class="space">&nbsp;</td>



                <?php
                $arr = [];

                foreach ($data5 as $da)
                $arr[] = $da->seatNum;

                ?>
                <?php

                for ($i = '11'; $i <= '20'; $i++) {
                    $class = in_array($i, $arr) ? 'booked' : 'free';
                    if ($class == 'free') {

                        echo" <td style='background-color:green; color:white;'>$i</td>";
                    } else {
                        echo" <td style='background-color:red; color:white;'>$i</td>";
                    }


                }
                ?>




            </tr>


        </table>
        <br>
        <table id="seatsDiagram" style="display: block;
  margin-left: auto;
  margin-right: auto;">
            <thead>
                <tr class="space">
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                </tr>
                <tr>Floor-4(A)</tr>
                <tr class="space">
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                </tr>
                <tr>Floor-4(B)</tr>
            </thead>
            <tr>

                <?php
                $arr = [];

                foreach ($data6 as $da)
                $arr[] = $da->seatNum;

                ?>
                <?php

                for ($i = '1'; $i <= '10'; $i++) {
                    $class = in_array($i, $arr) ? 'booked' : 'free';
                    if ($class == 'free') {

                        echo" <td style='background-color:green; color:white;'>$i</td>";
                    } else {
                        echo" <td style='background-color:red; color:white;'>$i</td>";
                    }


                }
                ?>






                <td class="space">&nbsp;</td>



                <?php
                $arr = [];

                foreach ($data7 as $da)
                $arr[] = $da->seatNum;

                ?>
                <?php

                for ($i = '11'; $i <= '20'; $i++) {
                    $class = in_array($i, $arr) ? 'booked' : 'free';
                    if ($class == 'free') {

                        echo" <td style='background-color:green; color:white;'>$i</td>";
                    } else {
                        echo" <td style='background-color:red; color:white;'>$i</td>";
                    }


                }
                ?>




            </tr>


        </table>
        <br>
        <table id="seatsDiagram" style="display: block;
  margin-left: auto;
  margin-right: auto;">
            <thead>
                <tr class="space">
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                </tr>
                <tr>Floor-5(A)</tr>
                <tr class="space">
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                </tr>
                <tr>Floor-5(B)</tr>
            </thead>
            <tr>

                <?php
                $arr = [];

                foreach ($data8 as $da)
                $arr[] = $da->seatNum;

                ?>
                <?php

                for ($i = '1'; $i <= '10'; $i++) {
                    $class = in_array($i, $arr) ? 'booked' : 'free';
                    if ($class == 'free') {

                        echo" <td style='background-color:green; color:white;'>$i</td>";
                    } else {
                        echo" <td style='background-color:red; color:white;'>$i</td>";
                    }


                }
                ?>





                <td class="space">&nbsp;</td>



                <?php
                $arr = [];

                foreach ($data9 as $da)
                $arr[] = $da->seatNum;

                ?>
                <?php

                for ($i = '11'; $i <= '20'; $i++) {
                    $class = in_array($i, $arr) ? 'booked' : 'free';
                    if ($class == 'free') {

                        echo" <td style='background-color:green; color:white;'>$i</td>";
                    } else {
                        echo" <td style='background-color:red; color:white;'>$i</td>";
                    }


                }
                ?>




            </tr>


        </table>
        <br>


        <br>
    </div>


    <div class="modal-content"
        style=" width: 50%; background: #c2d8de ;  display: block;
  margin-left: auto;
  margin-right: auto;
  ">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Make Bookings</h5>
        </div>
        <div class="modal-body">
            <form id="from" action="" method="POST">
                @csrf



                <div class="mb-3">
                    <label for="cid" class="form-label">Student ID</label>
                    <!-- Search Functionality -->
                    <div class="input-group">
                        <input type="text" class="form-control searchInput" id="sid" name="sid">
                        <div class="sugg">

                        </div>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="cname" class="form-label">Student Name</label>
                    <input type="text" class="form-control" id="sname" name="sname">
                </div>
                <div class="mb-3">
                    <label for="cphone" class="form-label">Contact Number</label>
                    <input type="tel" class="form-control" id="sphone" name="sphone">
                </div>
                <div class="mb-3">
                    <label for="cname" class="form-label">Email</label>
                    <input type="email" class="form-control" id="semail" name="semail">
                </div>
                <div class="mb-3">
                    <label for="gender">Select your gender:</label>
                    <select id="gender" name="gender" style="width: 100%; border-radius: 3%; height: 35px;">
                        <option value="male">Male</option>
                        <option value="female">Female</option>
                        <option value="other">Other</option>
                    </select>
                </div>



                <div class="row g-3 align-items-center mb-3">
                    <div class="col-auto">
                        <label for="seatInput" class="col-form-label">Seat Number</label>
                    </div>
                    <div class="col-auto">
                        <input type="text" id="seatInput" class="form-control" name="seat">
                    </div>
                    <div class="col-auto">
                        <label for="seatInput" class="col-form-label">Floor Number</label>
                    </div>
                    <div class="col-auto">
                        <input type="text" id="seatInput" class="form-control" name="floor">
                    </div>
                    <div class="col-auto">
                        <span id="seatInfo" class="form-text">
                            Select from the above figure, Maximum 1 seat.
                        </span>
                    </div>
                    <label for="seatInput" class="col-form-label">Booking Date</label>
                    <input type="date" name="date">
                </div>
                <center><button type="submit" class="btn btn-success" name="submit" style="background: rgb(41, 155, 41);">Submit</button></center>

            </form>
        </div>
        <div class="modal-footer">

        </div>
    </div>
    <br><br>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous">
    </script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>

    <script>
        const search = document.querySelector('.input-group input');
        search.addEventListener('input', searchTable);

        function searchTable() {
            $.ajax({
                url: '/get_info',
                type: 'POST',
                dataType: 'json',
                data: {
                    "_token": "{{ csrf_token() }}",
                    search: search
                },
                success: function(data) {
                    var options = '';
                    for (var i = 0; i < data.length; i++) {
                        document.getElementById("sname").innerHTML = "I have changed!";

                        //options += '<option value="' + data[i].section + '">' + data[i].section + '</option>';
                    }
                    //$('#section').html(options);
                }
            });

        };


        $(document).ready(function() {
            $('#sid').on('change', function() {
                var course = $(this).val();
                $.ajax({
                    url: '/get_info',
                    type: 'POST',
                    dataType: 'json',
                    data: {
                        "_token": "{{ csrf_token() }}",
                        course: course
                    },
                    success: function(data) {
                        var options = '';
                        for (var i = 0; i < data.length; i++) {
                            document.getElementById("sname").innerHTML = "I have changed!";

                            //options += '<option value="' + data[i].section + '">' + data[i].section + '</option>';
                        }
                        //$('#section').html(options);
                    }
                });
            });
        });
    </script>
</body>

</html>
<script>
    window.addEventListener("scroll", styleNav);

    function styleNav() {
        document.querySelector("header").classList.toggle("nav-scroll", window.scrollY > 0);
    }





    const destState = document.querySelector(".route-desc").dataset.dest;
    const covidInfo = document.querySelector("#covidInfo");

    const endpoint = "https://api.apify.com/v2/key-value-stores/toDWvRj1JpTXiM8FF/records/LATEST?disableRedirect=true";

    let data;

    async function getCovidData() {
        const response = await fetch(endpoint);
        data = await response.json();
        data = data.regionData.find(({
            region
        }) => {
            return region.toUpperCase() === destState.toUpperCase();
        });
        console.log(data);
        covidInfo.innerHTML = `<div class="alert alert-warning alert-dismissible fade show" role="alert">
    <h4 class="alert-heading">Destination Covid Details</h4>
    <p>Destination State : <strong>${destState.toUpperCase()}<strong></p>
    <hr>
    <p class="mb-0">
        <ul class="covid-details">
            <li>
                <strong>Active Cases : </strong>
                ${data.activeCases}
            </li>
            <li>
                <strong>Total Infected : </strong>
                ${data.totalInfected}
            </li>
            <li>
                <strong>Total Recovered : </strong>
                ${data.recovered}
            </li>
            <li>
                <strong>Total Deceased : </strong>
                ${data.deceased}
            </li>
        </ul>
    </p>
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>`;
    }

    getCovidData();


    function capitalize(data) {
        return data[0].toUpperCase() + data.slice(1).toLowerCase();
    }

    // Booking Operations
    const routeItems = document.querySelectorAll(".searched-result-item");
    const bookContainers = document.querySelectorAll(".bookContainer");

    bookContainers.forEach(container => container.addEventListener("click", collapseForm));

    routeItems.forEach(route => route.addEventListener("click", bookingForm));

    function bookingForm(evt) {
        if (evt.target.className.includes("book-seat-btn")) {
            const btn = evt.target;
            btn.disabled = true;
            btn.style.opacity = "0.5";

            const bus_no = btn.dataset.busno;
            const route_id = btn.dataset.routeid;
            const booked_amount = btn.dataset.amount;
            const source = btn.dataset.source;
            const destination = btn.dataset.destination;

            const bookRow = btn.parentElement.parentElement.nextElementSibling;
            bookRow.classList.add("bookRow");

            bookRow.innerHTML = `
        <form class="bookForm" action="assets/partials/_handleBooking.php" method="POST">
        <!-- Seats Diagram -->
                <div>
                <table class="seatsDiagram">
                    <tr>
                        <td class="seat-1" data-name="1">1</td>
                        <td class="seat-2" data-name="2">2</td>
                        <td class="seat-3" data-name="3">3</td>
                        <td class="seat-4" data-name="4">4</td>
                        <td class="seat-5" data-name="5">5</td>
                        <td class="seat-6" data-name="6">6</td>
                        <td class="seat-7" data-name="7">7</td>
                        <td class="seat-8" data-name="8">8</td>
                        <td class="seat-9" data-name="9">9</td>
                        <td class="seat-10" data-name="10">10</td>
                            </tr>
                    <tr>
                        <td class="seat-11" data-name="11">11</td>
                        <td class="seat-12" data-name="12">12</td>
                        <td class="seat-131" data-name="13">13</td>
                        <td class="seat-14" data-name="14">14</td>
                        <td class="seat-15" data-name="15">15</td>
                        <td class="seat-16" data-name="16">16</td>
                        <td class="seat-17" data-name="17">17</td>
                        <td class="seat-18" data-name="18">18</td>
                        <td class="seat-19" data-name="19">19</td>
                        <td class="seat-20" data-name="20">20</td>
                            </tr>
                    <tr>
                            <td class="space">&nbsp;</td>
                            <td class="space">&nbsp;</td>
                            <td class="space">&nbsp;</td>
                            <td class="space">&nbsp;</td>
                            <td class="space">&nbsp;</td>
                            <td class="space">&nbsp;</td>
                            <td class="space">&nbsp;</td>
                            <td class="space">&nbsp;</td>
                            <td class="space">&nbsp;</td>
                            <td class="space">&nbsp;</td>
                            </tr>
                    <tr>
                        <td class="seat-21" data-name="21">21</td>
                        <td class="seat-22" data-name="22">22</td>
                        <td class="seat-23" data-name="23">23</td>
                        <td class="seat-24" data-name="24">24</td>
                        <td class="seat-25" data-name="25">25</td>
                        <td class="seat-26" data-name="26">26</td>
                        <td class="seat-27" data-name="27">27</td>
                        <td class="space">&nbsp;</td>
                        <td class="seat-28" data-name="28">28</td>
                        <td class="seat-29" data-name="29">29</td>
                            </tr>
                    <tr>
                        <td class="seat-30" data-name="30">30</td>
                        <td class="seat-31" data-name="31">31</td>
                        <td class="seat-32" data-name="32">32</td>
                        <td class="seat-33" data-name="33">33</td>
                        <td class="seat-34" data-name="34">34</td>
                        <td class="seat-35" data-name="35">35</td>
                        <td class="seat-36" data-name="36">36</td>
                        <td class="space">&nbsp;</td>
                        <td class="seat-37" data-name="37">37</td>
                        <td class="seat-38" data-name="38">38</td>
                    </tr>
                </table>
                <div class="busNo">${bus_no}</div>
                </div>
                <div class="customer-details">
                    <div class="form-continued">
                        <div>
                            <input type="text" name="firstName" placeholder="First Name*">
                            <input type="text" name="lastName" placeholder="Last Name*">
                        </div>
                        <div>
                            <input type="text" name="phone" placeholder="Phone Number*">
                        </div>
                        <div>
                            <input type="text" name="seat_selected" placeholder="Seat Number*" readonly>
                        </div>

                        <input type="hidden" name="route_id" value="">
                        <input type="hidden" name="booked_amount" value="">
                        <input type="hidden" name="source" value="">
                        <input type="hidden" name="destination" value="">

                        <button class="book-btn" type="submit" name="book">BOOK</button>
                    </div>
                </div>
                <i class="fas fa-times close-btn"></i>
        </form>
        `;

            // Coloring booked seats
            let seatData = btn.dataset.seats;

            // If already booked seat exists
            if (seatData) {
                seatData = seatData.split(",");
                seatData.forEach(seatNo => {
                    const seat = bookRow.querySelector(`.seat-${seatNo}`);
                    seat.classList.add("notAvailable");
                })
            }
        }
    }

    function collapseForm(evt) {
        if (evt.target.className.includes("close-btn")) {
            const close = evt.target;
            console.dir(close);
            const bookForm = close.parentElement;
            const bookContainer = bookForm.parentElement;
            const bookBtn = bookContainer.previousElementSibling.children[4].children[1];
            bookBtn.disabled = false;
            bookBtn.style.opacity = "1";

            bookContainer.classList.remove("bookRow");
            bookForm.remove();
        }
    }

    // Selecting Seats
    bookContainers.forEach(container => {
        container.addEventListener("click", selectSeat);
    });

    let selected_id;

    function selectSeat(evt) {
        if (evt.target.nodeName == "TD" && !evt.target.className.includes("space") && !evt.target.className.includes(
                "notAvailable")) {
            if (!selected_id || evt.target.dataset.name === selected_id) {
                selected_id = evt.target.dataset.name;
                evt.target.classList.toggle("selected");

                if (!evt.target.className.includes("selected")) {
                    selected_id = "";
                }

                //   Selected seat will be shown in the particular input
                evt.target.parentElement.parentElement.parentElement.parentElement.nextElementSibling.children[0]
                    .children[2].children["seat_selected"].value = selected_id;

            }
        }
    }
</script>
