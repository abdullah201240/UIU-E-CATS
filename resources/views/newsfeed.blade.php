<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>
        newsfeed
    </title>
</head>

<body>


    <!--navbar start-->
    <nav class="navbar">


        <div class="navbar-left">
            <a href="newsfeed" class="logo"><img src="images/logo.png"></a>

            <div class="search-box">
                <img src="images/search.png">
                <input type="text" placeholder="Search">
            </div>
        </div>



        <div class="navbar-center">
            <ul>
                <li><a href="/newsfeed" class="active-link"><img src="images/home.png"> <span>Home</span></a></li>
                <li><a href="mynetwork"><img src="images/network.png"> <span>My Network</span></a></li>
                <li><a href="/alumnifind"><img src="images/jobs.png"> <span>Find People</span></a></li>
                <li><a href="/alumninotificatin"><img src="images/notification.png"> <span>Notifications</span></a></li>
                {{-- <li><a href="#"><img src="images/message.png"> <span>Messaging</span></a></li> --}}

            </ul>
        </div>

        @foreach ($data as $da)
            <div class="navbar-right">
                <div class="online">
                    <img src="images/{{ $da->image }}" class="nav-profile-img" onclick="toggleMenu()">
                </div>

            </div>
            <!--profile drop menu-->



            <div class="profile-menu-wrap" id="profileMenu">
                <div class="profile-menu">
                    <div class="user-info">
                        <img src="images/{{ $da->image }}">
                        <div>
                            <h3>{{ $da->name }}</h3>
                            <a href="/alumniprofile">See Your Profile</a>
                        </div>
                    </div>
                    <hr>
                    <a href="/alumnilogin" class="profile-manu-link">
                        <img src="images/logout.png">
                        <p>Logout</p>
                        <span>></span>
                    </a>
                </div>
            </div>


    </nav>
    <!--navbar end-->

    <div class="container">


        <!--left-sidebar-->
        <div class="left-sidebar">

            <div class="sidebar-profile-box">
                <img src="images/{{ $da->cover }}" width="100%">
                <div class="sidebar-profile-info">
                    <img src="images/{{ $da->image }}">
                    <a href="profile.php">
                        <h1>{{ $da->name }}</h1>
                    </a>
                    <h3>{{ $da->intro }}</h3>

                </div>

            </div>

            <div class="sidebar-activity" id="sidebarActivity">
                <h3>RECENT</h3>
                <a href="#"><img src="images/recent.png">Web Development</a>

                <br>
                <hr>


                <h3>GROUPS</h3>
                <a href="#"><img src="images/group.png">Web Design Groupt</a>

                <div class="discover-more-link">
                    <a href="#">Discover more</a>
                </div>
            </div>

            <p id="showMoreLink" onclick="toggleActivity()">Show More <b>+</b></p>


        </div>



        <!--main-content-->
        <div class="main-content">
            <div class="create-post">
                <div class="create-post-input">
                    <img src="images/{{ $da->image }}">

                    <textarea id="post-textarea" rows="4" placeholder="Write a post here!"></textarea>
                </div>
                <div class="create-post-links">
                    <li><img src="images/event.png">Event</li>
                    <li><img src="images/p.png">Photo</li>
                    <li><img src="images/video (2).png">Video</li>
                    <li>Post</li>
                </div>
            </div>
            <center>
                <div id="popup-container">
                    <div id="popup-content">
                        <center>
                            <section class="post" style="margin-left: 50%; margin-right: 50%;">

                                <header>Create Post</header>
                                <form action="" method="post" enctype="multipart/form-data">
                                    @csrf
                                    <div class="content">
                                        <img src="images/{{ $da->image }}" alt="logo"
                                            style="    overflow-clip-margin: content-box;
    overflow: clip;    width: 40px;
    border-radius: 50%;
    margin-right: 10px;">

                                        <div class="details">
                                            <p>{{ $da->name }}</p>

                                        </div>
                                    </div>
                                    <textarea placeholder="What's on your mind?" spellcheck="false" name="postText"></textarea>
                                    <div class="theme-emoji">
                                        <img src="icons/theme.svg" alt="theme">
                                        <img src="icons/smile.svg" alt="smile">
                                    </div>
                                    <div class="options">
                                        <p>Add to Your Post</p>
                                        <ul class="list">
                                            <li>

                                                <input type="file" name="file">
                                            </li>



                                            <li><img src="icons/tag.svg" alt="gallery"></li>
                                            <li><img src="icons/emoji.svg" alt="gallery"></li>
                                            <li><img src="icons/mic.svg" alt="gallery"></li>
                                            <li><img src="icons/more.svg" alt="gallery"></li>
                                        </ul>
                                    </div>
                                    <button type="submit" class="btn btn-primary">Post</button>
                                </form>

                            </section>
                        </center>
                        <span id="popup-close">&times;</span>
                    </div>
                </div>

                <style>
                    #popup-container {
                        display: none;
                        position: fixed;
                        top: 0;
                        left: 0;
                        width: 100%;
                        height: 100%;
                        background-color: rgba(0, 0, 0, 0.5);
                        z-index: 1;
                    }

                    #popup-content {
                        background-color: rgb(0 0 0 / 0%);
                        position: absolute;
                        top: 50%;
                        left: 50%;
                        transform: translate(-50%, -50%);
                        padding: 20px;
                        width: 100px;
                        height: 400px;
                    }

                    #popup-close {
                        position: absolute;
                        top: 10px;
                        right: 10px;
                        font-size: 30px;
                        font-weight: bold;
                        color: #aaa;
                        cursor: pointer;
                    }

                    #popup-close:hover {
                        color: black;
                    }

                    #popup-container .active {
                        height: 590px;
                    }

                    #popup-container #popup-content {
                        width: 1000px;
                        display: flex;
                    }

                    #popup-container section {
                        width: 500px;
                        background: #fff;
                    }

                    #popup-container img {
                        cursor: pointer;
                    }

                    #popup-container .post {
                        transition: margin-left 0.18s ease;
                    }

                    #popup-container.active .post {
                        margin-left: -500px;
                    }

                    .post header {
                        font-size: 22px;
                        font-weight: 600;
                        padding: 17px 0;
                        text-align: center;
                        border-bottom: 1px solid #bfbfbf;
                    }

                    .post form {
                        margin: 20px 25px;
                    }

                    .post form .content {
                        display: flex;
                        align-items: center;
                    }

                    .post form .content img {
                        cursor: default;
                        max-width: 52px;
                    }

                    .post form .content .details {
                        margin: -3px 0 0 12px;
                    }

                    form .content .details p {
                        font-size: 17px;
                        font-weight: 500;
                    }

                    .content .details .privacy {
                        display: flex;
                        height: 25px;
                        cursor: pointer;
                        padding: 0 10px;
                        font-size: 11px;
                        margin-top: 3px;
                        border-radius: 5px;
                        align-items: center;
                        max-width: 98px;
                        background: #E4E6EB;
                        justify-content: space-between;
                    }

                    .details .privacy span {
                        font-size: 13px;
                        margin-top: 1px;
                        font-weight: 500;
                    }

                    .details .privacy i:last-child {
                        font-size: 13px;
                        margin-left: 1px;
                    }

                    form :where(textarea, button) {
                        width: 100%;
                        outline: none;
                        border: none;
                    }

                    form textarea {
                        resize: none;
                        font-size: 18px;
                        margin-top: 30px;
                        min-height: 100px;
                    }

                    form textarea::placeholder {
                        color: #858585;
                    }

                    form textarea:focus::placeholder {
                        color: #b3b3b3;
                    }

                    form :where(.theme-emoji, .options) {
                        display: flex;
                        align-items: center;
                        justify-content: space-between;
                    }

                    .theme-emoji img:last-child {
                        max-width: 24px;
                    }

                    form .options {
                        height: 57px;
                        margin: 15px 0;
                        padding: 0 15px;
                        border-radius: 7px;
                        border: 1px solid #B9B9B9;
                        box-shadow: 0 1px 2px rgba(0, 0, 0, 0.1);
                    }

                    form .options :where(.list, li),
                    .audience :where(.arrow-back, .icon, li .radio) {
                        display: flex;
                        align-items: center;
                        justify-content: center;
                    }

                    form .options p {
                        color: #595959;
                        font-size: 15px;
                        font-weight: 500;
                        cursor: default;
                    }

                    form .options .list {
                        list-style: none;
                    }

                    .options .list li {
                        height: 42px;
                        width: 42px;
                        margin: 0 -1px;
                        cursor: pointer;
                        border-radius: 50%;
                    }

                    .options .list li:hover {
                        background: #f0f1f4;
                    }

                    .options .list li img {
                        width: 23px;
                    }

                    form button {
                        height: 53px;
                        color: #fff;
                        font-size: 18px;
                        font-weight: 500;
                        cursor: pointer;
                        color: #BCC0C4;
                        cursor: no-drop;
                        border-radius: 7px;
                        background: #e2e5e9;
                        transition: all 0.3s ease;
                    }

                    form textarea:valid~button {
                        color: #fff;
                        cursor: pointer;
                        background: #4599FF;
                    }

                    form textarea:valid~button:hover {
                        background: #1a81ff;
                    }
                </style>

                <script>
                    const postTextarea = document.getElementById('post-textarea');
                    const popupContainer = document.getElementById('popup-container');
                    const popupClose = document.getElementById('popup-close');

                    postTextarea.addEventListener('click', () => {
                        popupContainer.style.display = 'block';
                    });

                    popupClose.addEventListener('click', () => {
                        popupContainer.style.display = 'none';
                    });
                </script>

                <div class="sort-by">
                    <hr>
                    <p>Sort by: <span>top <img src="images/down-arrow.png"></span></p>
                </div>


                <!--post show-->
                @foreach ($data1 as $da1)
                    <div class="post">
                        <div class="post-author">
                            <img src="images/{{ $da1->userimage }}">
                            <div>
                                <h1>{{ $da1->aname }}</h1>
                                <small>{{ $da1->time }}</small>

                            </div>
                        </div>
                        <p>{{ $da1->text }}</p>
                        <img src="images/{{ $da1->image }}" width="100%">

                        <div class="post-activity">

                            <div class="post-activity-link">

                            </div>
                            <script>
                                const likeButton = document.getElementById("like-button");

                                likeButton.addEventListener("click", function() {
                                    if (likeButton.src.endsWith("like.png")) {
                                        likeButton.src = "images/like1.png";
                                    } else {
                                        likeButton.src = "images/like.png";
                                    }
                                });
                            </script>
                            <div class="post-activity-link">
                                <img src="images/comment.png">
                                <span>
                                    <button onclick="myFunction('{{ $da1->id }}')">Comment</button>

                                </span>
                            </div>
                            <div>
                                <img src="images/{{ $da1->userimage }}" class="post-activity-user-icon">
                                <img src="images/down-arrow.png" class="post-activity-arrow-icon">
                            </div>

                        </div>
                        <hr>
                        <br>
                        <div style="text-align:left">



                            <div id="myPopup">
                               <a href=''><button id='close'>&times;</button></a>

                            </div>
                            <script>
                                function closef(){

                                    //alert("Hello! I am an alert box!!");
                                    document.querySelector(".myPopup").style.display = "none";
                                }

                            </script>

                            <script>
                                function myFunction(id) {
                                    var t_data = document.getElementById("myPopup");


                                    var xhr = new XMLHttpRequest();
                                    xhr.open("GET", "/showcomment/" + id, true);
                                    xhr.send();
                                    xhr.onreadystatechange = function() {

                                        if (xhr.readyState == 4 && xhr.status == 200) {
                                            var obj = JSON.parse(xhr.responseText);
                                            var myPopup = document.getElementById("myPopup");
                                            myPopup.style.display = "block";

                                            for (i = 0; i < obj.data.length; i++) {

                                                t_data.innerHTML += " <img src='images/" + obj.data[i][
                                                        'userImage'
                                                    ] + "'class='post-activity-user-icon'>" + "<h3>" + obj.data[i]['aname'] + "</h3><p>" + obj
                                                    .data[i]['comment'] + "</p><br>"
                                            }






                                            //document.getElementById("myPopup").innerHTML = this.responseText;




                                        }



                                    }



                                }
                            </script>
                        </div>

                        <br>
                        <!--comment start-->
                        <form action="/comment" method="post" enctype="multipart/form">
                            @csrf

                            <div class="create-post">
                                <div class="create-post-input">
                                    <img src="images/{{ $da->image }}">

                                    <textarea rows="2" placeholder="Write a comment here!" name="comments"></textarea>
                                    <input type="hidden" name='cid' value="{{ $da1->id }}">
                                    <input type="hidden" name='aid' value="{{ $da1->aid }}">
                                    <input type="hidden" name='aname' value="{{ $da1->aname }}">
                                    <input type="hidden" name='userimage' value="{{ $da->image }}">



                                    <button type="submit"
                                        style="  border-color: white; background-color: white;"><img
                                            src="images/send.png" alt=""></button>

                                </div>


                            </div>

                        </form>
                        <!--comment end-->


                    </div>
                    <!--post show end-->
                @endforeach
                @endforeach





        </div>



        <!--right-sidebar-->
        <div class="right-sidebar">
            <div class="sidebar-news">
                <img src="images/more.png" class="info-icon">
                <h2>Events</h2>
                <a href="#">Project Showcase</a>
                <span>10 March, 2022; at UIU</span>
                <a href="#" class="read-more-link">Read More</a>
            </div>
            <div class="sidebar-ad">
                <small>Job Ads</small>
                <p>Job Description</p>
                <div>
                    <img src="images/sakib.jpg">
                    <img src="images/IMG-631127da9460e7.69184791.jpg">
                </div>
                <b>dhfurhreghr</b>
                <a href="#" class="ad-link">Learn More</a>
            </div>
        </div>




    </div>
    <div class="sidebar-useful-links">

        <div class="copyright-msg">
            <img src="images/logo.png">

        </div>
        <p>Created at 2023 by Team Echo</p>
    </div>


    <script>
        let profileMenu = document.getElementById("profileMenu");

        function toggleMenu() {
            profileMenu.classList.toggle("open-menu");

        }
    </script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <script>
        let sideActivity = document.getElementById("sidebarActivity");
        let moreLink = document.getElementById("showMoreLink");

        function toggleActivity() {
            sideActivity.classList.toggle("open-activity");

            if (sideActivity.classList.contains("open-activity")) {
                moreLink.innerHTML = "Show less <b>-</b>";
            } else {
                moreLink.innerHTML = "Show more <b>+</b>";
            }
        }
    </script>

    <style>
        #myPopup {
            display: none;
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background-color: #fff;
            padding: 20px;
            border: 1px solid #000;
            width: 300px;
        }

        #myPopup form {
            display: flex;
            flex-direction: column;
        }

        #myPopup label {
            margin-bottom: 10px;
        }

        #myPopup input[type="text"] {
            padding: 30px;
            margin-bottom: 30px;
            border: 1px solid #ccc;
        }

        #myPopup input[type="submit"] {
            padding: 5px;
            background-color: #4CAF50;
            color: #fff;
            border: none;
            cursor: pointer;
        }

        #myPopup input[type="submit"]:hover {
            background-color: #3e8e41;
        }
    </style>
    <style>
        * {
            margin: 0;
            padding: 0;
            font-family: 'poppins', sans-serif;
            box-sizing: border-box;
        }

        body {
            background: #f0f2f5;
            color: #5f5f5f;
        }

        a {
            text-decoration: none;
            color: #5f5f5f;
        }

        /*----------start of navbar--------*/
        .navbar {
            display: flex;
            align-items: center;
            justify-content: space-between;
            background: white;
            padding: 6px 6%;
            position: sticky;
            top: 0;
            z-index: 100;
            box-shadow: 0 5px 10px rgb(0, 0, 0, 0.1);
        }

        .logo img {
            width: 160px;
            margin-right: 45px;
            display: block;

        }

        .navbar-center ul li {
            display: inline-block;
            list-style: none;
        }

        .navbar-center ul li a {
            display: flex;
            align-items: center;
            font-size: 14px;
            margin: 5px 8px;
            padding-right: 5px;
            position: relative;
        }

        .navbar-center ul li a img {
            width: 40px;

        }

        .navbar-center ul li a::after {
            content: '';
            width: 0;
            height: 2px;
            background: #DC7633;
            position: absolute;
            bottom: -15px;
            transition: width 0.3s;

        }

        .navbar-center ul li a:hover::after,
        .navbar-center ul li a.active-link::after {

            width: 100%;


        }

        .nav-profile-img {
            width: 40px;
            display: block;
            border-radius: 50%;
            cursor: pointer;
            position: relative;
        }

        .online {
            position: relative;

        }

        .online::after {
            content: '';
            width: 7px;
            height: 7px;
            border: 2px solid #fff;
            border-radius: 50%;
            right: 0px;
            top: 0px;
            background: #41db51;
            position: absolute;
        }

        .search-box {
            background: #f0f2f5;
            width: 250px;
            border-radius: 20px;
            display: flex;
            align-items: center;
            padding: 0 15px;

        }

        .navbar-left {
            display: flex;
            align-items: center;
        }

        .search-box img {
            width: 14px;
        }

        .search-box input {
            width: 100%;
            background: transparent;
            padding: 8px;
            outline: none;
            border: 0;
        }

        /*----------end of navbar--------*/

        .container {
            padding: 20px 6%;
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
        }

        /*----------start of left sidebar--------*/
        .left-sidebar {
            flex-basis: 25%;
            align-self: flex-start;
            position: sticky;
            top: 73px;
        }

        .sidebar-profile-box {
            background: #fff;
        }

        .sidebar-profile-info {
            padding: 0 25px;
        }

        .sidebar-profile-info img {
            width: 90px;
            border-radius: 50%;
            background: #fff;
            padding: 4px;
            margin-top: -45px;
        }

        .sidebar-profile-info h1 {
            font-size: 20px;
            font-weight: 600;
            color: #222;
        }

        .sidebar-profile-info h3 {
            font-size: 14px;
            font-weight: 500;
            color: #777;
        }

        .sidebar-profile-info ul {
            list-style: none;
            margin: 20px 0px;
        }

        .sidebar-profile-info ul li {

            margin: 5px 0;
            width: 100%;
            font-size: 13px;
        }

        .sidebar-profile-info ul li span {
            float: right;
            color: #045be6;
        }

        .sidebar-profile-link {
            display: flex;
            align-items: center;
            border-top: 1px solid #ccc;

        }

        .sidebar-profile-link a {
            flex-basis: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            padding-right: 15px 0;
            font-size: 13px;
            border-left: 1px solid #ccc;


        }

        .sidebar-profile-link a:first-child {
            border-left: 0;
        }

        .sidebar-profile-link a img {
            width: 20px;
            margin-right: 10px;
        }

        .sidebar-activity {
            background: #fff;
            padding: 5px 25px;
            margin: 12px 0;
        }

        .sidebar-activity h3 {
            color: #777;
            font-size: 14px;
            font-weight: 500;
            margin: 20px 0 10px;
        }

        .sidebar-activity a {
            display: flex;
            align-items: center;
            font-size: 12px;
            font-weight: 500;
            color: #888;
            margin: 3px 0;
        }

        .sidebar-activity a img {
            width: 20px;
            margin-right: 10px
        }

        .discover-more-link {
            border-top: 1px solid #ccc;
            text-align: center;
            margin-top: 20px;
            margin-left: -25px;
            margin-right: -25px;
        }


        .discover-more-link a {
            color: #045be6;
            display: inline-block;
            margin: 10px 0;
        }


        /*----------start of right sidebar--------*/

        .right-sidebar {
            flex-basis: 25%;
            align-self: flex-start;
            position: sticky;
            top: 73px;
        }

        .sidebar-news {
            background: #fff;
            padding: 10px 25px;
        }

        .info-icon {
            width: 15px;
            float: right;
            margin-top: 15px;
        }

        .sidebar-news h3 {
            font-size: 18px;
            font-weight: 600;
            color: #333;
            margin: 10px 0 30px;
        }

        .sidebar-news a {
            display: block;
            font-size: 12px;
            font-weight: 600;
            margin-top: 10px;
            margin-bottom: -5px;
        }

        .sidebar-news span {
            font-size: 12px;
        }

        .sidebar-news .read-more-link {
            color: #045be6;
            font-weight: 500;
            margin: 20px 0 10px;
        }

        .sidebar-ad {
            background: #fff;
            padding: 15px 25px;
            text-align: center;
            margin: 12px 0;
            font-size: 12px;
        }

        .sidebar-ad img {
            width: 60px;
            border-radius: 50%;
            margin: 4px;
        }

        .sidebar-ad small {
            float: right;
            font-weight: 500;
        }

        .sidebar-ad p {
            margin-top: 30px;
            margin-bottom: 10px;
        }

        .sidebar-ad b {
            display: block;
            font-weight: 500;
            margin-top: 10px;
        }

        .ad-link {
            display: inline-block;
            border: 1px solid #045be6;
            border-radius: 30px;
            padding: 5px 15px;
            color: #045be6;
            font-weight: 500;
            margin: 20px auto 10px;
        }

        .sidebar-useful-links {
            padding: 15px 25px;
            text-align: center;
        }

        .sidebar-useful-links a {
            display: inline-block;
            font-size: 14px;
            margin: 4px 2px;
        }

        .copyright-msg {
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 12px;
            margin-top: 10px;
            font-weight: 500;
        }

        .copyright-msg img {
            width: 80px;
            margin-right: 4px;
        }

        /*----------start of main-content--------*/
        .like-btn {
            background-color: blue;
        }

        .main-content {
            flex-basis: 47%;
        }

        .create-post {
            background: #fff;
        }

        .create-post-input {
            padding: 20px 25px 10px;
            display: flex;
            align-items: flex-start;

        }

        .create-post-input img {
            width: 35px;
            border-radius: 50%;
            margin-right: 10px;
        }

        .create-post-input textarea {
            width: 100%;
            border: 0;
            outline: 0;
            resize: none;
            background: transparent;
            margin-top: 8px;
        }

        ::placeholder {
            font-weight: 500;
        }

        .create-post-links {
            display: flex;
            align-items: flex-start;
        }

        .create-post-links li {
            list-style: none;
            border-top: 1px solid #ccc;
            border-radius: 1px solid #ccc;
            flex-basis: 25%;
            height: 40px;
            font-size: 13px;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
        }

        .create-post-links li img {
            width: 15px;
            margin-right: 5px;
        }

        .create-post-links li:last-child {
            background: #fff;
            color: #fff;
            border-top: 0;
            border-right: 0;
        }

        .sort-by {
            display: flex;
            align-items: center;
            margin: 10px 0;
        }

        .sort-by hr {
            flex: 1;
            border: 0;
            height: 1px;
            background: #ccc;
        }

        .sort-by p {
            font-size: 13px;
            padding-left: 5px;
        }

        .sort-by p span {
            font-weight: 600;
            cursor: pointer;
        }

        .sort-by p span img {

            width: 12px;
            margin-left: 3px;
        }

        .post {
            background: #fff;
            padding: 20px 25px 5px;
            margin: 5px 0 15px;
        }

        .post-author {
            display: flex;
            align-items: flex-start;
            margin-bottom: 20px;
        }

        .post-author img {
            width: 35px;
            border-radius: 50%;
            margin-right: 10px;
            margin-top: 5px;
        }

        .post-author h1 {
            font-size: 18px;
            font-weight: 600;
            color: #333;
        }

        .post-author small {
            display: block;
            margin-bottom: -2px;
        }

        .post p {
            font-size: 14px;
            margin-bottom: 15px;
        }

        .post p {
            font-size: 14px;
            margin-bottom: 15px;
        }

        .post-stats {
            display: flex;
            flex-wrap: wrap;
            align-items: center;
            justify-content: space-between;
            font-size: 12px;
            border-bottom: 1px solid #ccc;
            padding-bottom: 6px;
        }

        .post-stats div {
            display: flex;
            align-items: center;
        }

        .post-stats img {
            width: 15px;
            margin-right: -5 px;
        }

        .liked-users {
            margin-left: 10px;
        }

        .post-activity {
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 10px 0;
            font-size: 14px;
            font-weight: 500;
        }

        .post-activity div {
            display: flex;
            align-items: center;
        }

        .post-activity-user-icon {
            width: 22px;
            border-radius: 50%;
        }

        .post-activity-arrow-icon {
            width: 12px;
            margin-left: 5px;
        }

        .post-activity-link img {
            width: 18px;
            margin-right: 8px;
        }

        /*profile drop down menu*/
        .profile-menu-wrap {
            position: absolute;
            top: 100%;
            right: 5%;
            width: 320px;
            max-height: 0;
            overflow: hidden;
            transition: max-height 0.5s;

        }

        .profile-menu-wrap.open-menu {
            max-height: 400px;
        }

        .profile-menu {
            background: #222;
            color: #fff;
            padding: 20px;
            margin: 10px;
        }

        .user-info {
            display: flex;
            align-items: center;
        }

        .user-info img {
            width: 50px;
            border-radius: 50%;
            margin-right: 15px;
        }

        .user-info h3 {
            font-weight: 500;
            margin-bottom: -7px;
        }

        .user-info a {
            color: #c9dbf8;
            font-size: 13px;
        }

        .profile-menu hr {
            border: 0;
            height: 1px;
            width: 100%;
            background: #fff;
            margin: 15px 0 10px;
        }

        .profile-manu-link {
            display: flex;
            align-items: center;
            color: #fff;
            margin: 12px 0;
            font-size: 14px;
        }

        .profile-manu-link p {
            width: 100%;
        }

        .profile-manu-link img {
            width: 35px;
            border-radius: 50%;
            margin-right: 15px;
        }

        /*-----profile page--------*/
        .profile-main {
            flex-basis: 73%;
        }

        .profile-sidebar {
            flex-basis: 25%;
            align-self: flex-start;
            position: sticky;
            top: 73px;
        }

        .profile-container {
            background: #fff;
        }

        .profile-container-inner {
            padding: 0 4% 10px;
        }

        .profile-pic {
            width: 150px;
            border-radius: 50%;
            margin-top: -75px;
            padding: 5px;
            background: #fff;
        }

        .profile-container h1 {
            font-size: 28px;
            font-weight: 600;
            color: #222;
        }

        .profile-container b {
            font-weight: 500;
        }

        .profile-container p {
            margin-top: 5px;
        }

        .profile-container p a {
            color: #045be6;
            font-weight: 500;
        }

        .profile-btn {
            margin: 20px 0;
        }

        .profile-btn a {
            display: inline-flex;
            align-items: center;
            background: #e4e6eb;
            padding: 6px 15px;
            border-radius: 4px;
            margin-right: 10px;
        }

        .profile-btn a img {
            width: 18px;
            margin-right: 5px;
        }

        .profile-btn .primary-btn {
            background: #045be6;
            color: #fff;
        }

        .profile-description {
            background: #fff;
            padding: 20px 4% 30px;
            margin: 12px 0;
        }

        .profile-description h2 {
            color: #333;
            margin: 10px 2px;
            font-weight: 600;
        }

        .see-more-link {
            display: block;
            text-align: right;
            font-size: 15px;
        }

        .profile-desc-row {
            display: flex;
            align-items: flex-start;
            margin: 20px 0;
        }

        .profile-desc-row img {
            width: 50px,
                margin-right: 25px;
            margin-top: 5px;
        }

        .profile-desc-row div {
            width: 100%;
        }

        .profile-desc-row h3 {
            font-size: 18px;
            font-weight: 600;
            color: #333;
        }

        .profile-desc-row b {
            display: block;
            font-weight: 500;
            font-size: 15px;
        }

        .profile-desc-row p {
            margin-top: 15px;
        }

        .profile-desc-row hr {
            border: 0;
            border-bottom: 1px solid #999;
            margin-top: 10px;
        }

        .experience-link {
            display: flex;
            align-items: center;
            justify-content: center;
            padding-top: 20px;
            font-weight: 500;
        }

        .experience-link img {
            width: 20px;
            margin-left: 8px;
        }

        .education-link {
            display: flex;
            align-items: center;
            justify-content: center;
            padding-top: 20px;
            font-weight: 500;
        }

        .education-link img {
            width: 20px;
            margin-left: 8px;
        }

        .skills-btn {
            background-color: #BEE37D;
            display: inline-block;
            margin: 10px 5px;
            padding: 6px 18px;
            border: 1px solid #777;
            border-radius: 30px;
            font-size: 12px;
            font-weight: 500;
        }

        .language-btn {
            background-color: #85C1E9;
            display: inline-block;
            margin: 10px 5px;
            padding: 6px 18px;
            border: 1px solid #777;
            border-radius: 30px;
            font-size: 12px;
            font-weight: 500;
        }


        /*-----profile right sidebar--------*/

        .profile-sidebar .sidebar-ad {
            margin: 0;
        }

        .sidebar-people {
            background: #fff;
            padding: 15px 25px;
            margin: 12px 0;
            font-size: 12px;
        }

        .sidebar-people h3 {
            font- size: 16px;
            font-weight: 600;
            margin: 10px 0 20px;
        }

        .sidebar-people-row {
            display: flex;
            align-items: flex-start;
            margin: 6px 0;
        }

        .sidebar-people-row img {
            width: 40px;
            border-radius: 50%;
            margin-right: 8px;
            margin-top: 5px;
        }

        .sidebar-people-row h2 {
            font-weight: 500;
            font- size: 16px;
        }

        .sidebar-people-row a {
            display: inline-block;
            margin: 10px 0;
            padding: 5px 25px;
            border: 1px solid #045be6;
            border-radius: 30px;
            font-weight: 500;
            color: #045be6;
        }

        .profile-footer {
            padding: 0 6% 30px;
        }

        .profile-footer .sidebar-useful-links {
            text-align: left;
            padding: 0;
        }

        .profile-footer .copyright-msg {
            justify-content: flex-start;
        }

        #showMoreLink {
            display: none;
        }



        /* ---------responsive------------*/

        @media only screen and (max-width: 600px) {
            .search-box {
                background: transparent;
                width: auto;
                padding: 0;
            }

            .search-box input {
                width: 0;
                padding: 0;
            }

            .navbar-center ul li a span {
                display: none;
            }

            .navbar-center ul li a {
                padding-right: 0;
                margin: 5px;
            }

            .nav-profile-img {
                width: 30px;
            }

            .container {
                padding: 15px 3%;
            }

            .left-sidebar,
            .right-sidebar {
                flex-basis: 100%;
                position: relative;
                top: unset;
            }

            .main-content {
                flex-basis: 100%;
            }

            .post-stats div {
                margin: 2px 0;
            }

            .post-activity-link span {
                display: none;
            }

            .post-activity-link img {
                margin-right: 0;
            }

            .profile-main,
            .profile-sidebar {
                flex-basis: 100%;
            }

            .profile-container {
                font- size: 14px;
            }

            .profile-pic {
                width: 100px;
                margin-top: -50px;
            }

            .profile-description {
                font-size: 14px;
            }

            #showMoreLink {
                display: block;
                width: fit-content;
                margin: 10px auto;
                font-size: 14px;
                cursor: pointer;
            }

            .sidebar-activity {
                display: none;
            }

            .sidebar-activity.open-activity {
                display: block;
            }

        }
    </style>

</body>

</html>
