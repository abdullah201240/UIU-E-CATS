<!DOCTYPE html>
<html lang="en">
  <head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="style.css">
 <script src="https://kit.fontawesome.com/391827d54c.js" crossorigin="anonymous"></script>
  <title>
   Chat
  </title>
</head>
<body>
  <!--navbar start-->
  <nav class="navbar">


    <div class="navbar-left">
      <a href="newsfeed" class="logo"><img src=" asset('images/logo.png')"></a>

      <div class="search-box">
        <img src="images/search.png">
        <input type="text" placeholder="Search">
      </div>
    </div>



    <div class="navbar-center">
      <ul>
        <li><a href="newsfeed" class="active-link"><img src="asset('images/home.png')"> <span>Home</span></a></li>
        <li><a href="#"><img src="images/network.png"> <span>My Network</span></a></li>
        <li><a href="#"><img src="images/jobs.png"> <span>Jobs</span></a></li>
        <li><a href="#"><img src="images/message.png"> <span>Messaging</span></a></li>
        <li><a href="#"><img src="images/notification.png"> <span>Notifications</span></a></li>
      </ul>
    </div>



    <div class="navbar-right">
      <div class="online">
        <img src="images/user-1.png" class="nav-profile-img" onclick="toggleMenu()">
      </div>

    </div>
    <!--profile drop menu-->
    <div class="profile-menu-wrap" id="profileMenu">
      <div class="profile-menu">
        <div class="user-info">
          <img src="images/user-1.png">
          <div>
            <h3>Sakib Vaiya</h3>
            <a href="profile.php">See Your Profile</a>
          </div>
        </div>
        <hr>
        <a href="#" class="profile-manu-link">
          <img src="images/logout.png">
          <p>Logout</p>
          <span>></span>
        </a>
      </div>
    </div>


  </nav>
  <!--navbar end-->



  <div class="main-container">







    <div class="right-container">
<!--header -->
@foreach ($data1 as $da1)


      <div class="header">
        <div class="img-text">
          <div class="user-img">
          <img class="dp" src="images/{{$da1->image}}" alt="image">
        </div>
          <h4>{{$da1->name}}<br></h4>
        </div>
        <div class="nav-icons">
          <li><i class="fa-solid fa-magnifying-glass"></i></li>
          <li><i class="fa-solid fa-ellipsis-vertical"></i></li>
        </div>
      </div>
      @endforeach

<!--chat-container -->
@foreach ($data as $da )


      <div class="chat-container">
        <div class="message-box my-message">
          <p>I've been waiting to see that show asap!<br><span>07:43</span></p>
        </div>
        <div class="message-box friend-message">
          <p>{{$da->massage}}<br></p>
        </div>

      </div>
      @endforeach

<!--input-bottom -->
      <div class="chatbox-input">
        <i class="fa-regular fa-face-grin"></i>
        <i class="fa-sharp fa-solid fa-paperclip"></i>
        <input type="text" placeholder="Type a message">
        <i class="fa-solid fa-microphone"></i>
      </div>
    </div>



<style>

  *{
	margin: 0;
	padding: 0;
	font-family: 'poppins', sans-serif;
	box-sizing: border-box;
}
body{
	background: #f0f2f5;
	color: #5f5f5f;
}
a{
	text-decoration: none;
	color: #5f5f5f;
}

/*----------start of navbar--------*/
.navbar{
	display: flex;
	align-items: center;
	justify-content: space-between;
	background: white;
	padding: 6px 6%;
	position: sticky;
	top: 0;
	z-index: 100;
	box-shadow: 0 5px 10px rgb(0,0,0,0.1);
}
.logo img{
	width: 160px;
	margin-right: 45px;
	display: block;

}
.navbar-center ul li{
   display: inline-block;
   list-style: none;
}
.navbar-center ul li a{
	display: flex;
	align-items: center;
	font-size: 14px;
	margin: 5px 8px;
	padding-right: 5px;
	position: relative;
}
.navbar-center ul li a img{
	width: 40px;

}
.navbar-center ul li a::after{
	content: '';
	width: 0;
	height: 2px;
	background: #DC7633;
	position: absolute;
	bottom: -15px;
	transition: width 0.3s;

}
.navbar-center ul li a:hover::after,
.navbar-center ul li a.active-link::after{

	width: 100%;


}
.nav-profile-img{
	width: 40px;
	display: block;
	border-radius: 50%;
	cursor: pointer;
	position: relative;
}
.online{
	position: relative;

}
.online::after{
	content: '';
	width: 7px;
	height: 7px;
	border:2px solid #fff;
	border-radius: 50%;
	right: 0px;
	top: 0px;
	background: #41db51;
	position: absolute;
}
.search-box{
	background: #f0f2f5;
	width: 250px;
	border-radius: 20px;
	display: flex;
	align-items: center;
	padding: 0 15px;

}
.navbar-left{
	display: flex;
	align-items: center;
}
.search-box img{
	width: 14px;
}
.search-box input{
	width: 100%;
	background: transparent;
	padding: 8px;
	outline: none;
	border: 0;
}
/*----------end of navbar--------*/

.container{
	padding: 20px 6%;
	display: flex;
	flex-wrap: wrap;
	justify-content: space-between;
}
/*----------start of left sidebar--------*/
.left-sidebar{
	flex-basis: 25%;
	align-self: flex-start;
	position: sticky;
	top: 73px;
}

.sidebar-profile-box{
	background: #fff;
}
.sidebar-profile-info{
	padding: 0 25px;
}
.sidebar-profile-info img{
	width: 90px;
	border-radius: 50%;
	background: #fff;
	padding: 4px;
	margin-top: -45px;
}
.sidebar-profile-info h1{
	font-size: 20px;
	font-weight: 600;
	color: #222;
}
.sidebar-profile-info h3{
	font-size: 14px;
	font-weight: 500;
	color: #777;
}
.sidebar-profile-info ul{
	list-style: none;
	margin: 20px 0px;
}

.sidebar-profile-info ul li{

	margin: 5px 0;
	width: 100%;
	font-size: 13px;
}
.sidebar-profile-info ul li span{
	float: right;
	color: #045be6;
}
.sidebar-profile-link{
	display: flex;
	align-items: center;
	border-top: 1px solid #ccc;

}
.sidebar-profile-link a{
	flex-basis: 50%;
	display: flex;
	align-items: center;
	justify-content: center;
	padding-right: 15px 0;
	font-size: 13px;
	border-left: 1px solid #ccc;


}
.sidebar-profile-link a:first-child{
	border-left: 0;
}
.sidebar-profile-link a img{
	width: 20px;
	margin-right: 10px;
}
.sidebar-activity{
   background: #fff;
   padding: 5px 25px;
    margin: 12px 0;
}

.sidebar-activity h3{
color: #777;
font-size: 14px;
font-weight: 500;
margin: 20px 0 10px;
}
.sidebar-activity a{
display: flex;
align-items: center;
font-size: 12px;
font-weight: 500;
color: #888;
margin: 3px 0;
}
.sidebar-activity a img{
width: 20px;
margin-right: 10px
}
.discover-more-link{
border-top: 1px solid #ccc;
text-align: center;
margin-top: 20px;
margin-left: -25px;
margin-right: -25px;
}


.discover-more-link a{
color: #045be6;
display: inline-block;
margin: 10px 0;
}


/*----------start of right sidebar--------*/

.right-sidebar{
	flex-basis: 25%;
	align-self: flex-start;
	position: sticky;
	top: 73px;
}
.sidebar-news{
background: #fff;
padding: 10px 25px;
}
.info-icon{
width: 15px;
float: right;
margin-top: 15px;
}
.sidebar-news h3{
font-size: 18px;
font-weight: 600;
color: #333;
margin: 10px 0 30px;
}
.sidebar-news a{
display: block;
font-size: 12px;
font-weight: 600;
margin-top: 10px;
margin-bottom: -5px;
}
.sidebar-news span{
font-size: 12px;
}
.sidebar-news .read-more-link{
color: #045be6;
font-weight: 500;
margin: 20px 0 10px;
}
.sidebar-ad{
background: #fff;
padding: 15px 25px;
text-align: center;
margin: 12px 0;
font-size: 12px;
}
.sidebar-ad img{
width: 60px;
border-radius: 50%;
margin: 4px;
}
.sidebar-ad small{
float: right;
font-weight: 500;
}
.sidebar-ad p{
margin-top: 30px;
margin-bottom: 10px;
}
.sidebar-ad b{
display: block;
font-weight: 500;
margin-top: 10px;
}

.ad-link{
display: inline-block;
border: 1px solid #045be6;
border-radius: 30px;
padding: 5px 15px;
color: #045be6;
font-weight: 500;
margin: 20px auto 10px;
}
.sidebar-useful-links{
padding: 15px 25px;
text-align: center;
}
.sidebar-useful-links a{
display: inline-block;
font-size: 14px;
margin: 4px 2px;
}
.copyright-msg{
display: flex;
align-items: center;
justify-content: center;
font-size: 12px;
margin-top: 10px;
font-weight: 500;
}
.copyright-msg img{
width: 80px;
margin-right: 4px;
}

/*----------start of main-content--------*/
.like-btn {
  background-color: blue;
}

.main-content{
	flex-basis: 47%;
}
.create-post{
background: #fff;
}
.create-post-input{
padding: 20px 25px 10px;
display: flex;
align-items: flex-start;

}

.create-post-input img{
width: 35px;
border-radius: 50%;
margin-right: 10px;
}
.create-post-input textarea{
width: 100%;
border: 0;
outline: 0;
resize: none;
background: transparent;
margin-top: 8px;
}

::placeholder{
font-weight: 500;
}
.create-post-links{
display: flex;
align-items: flex-start;
}
.create-post-links li{
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

.create-post-links li img{
width: 15px;
margin-right: 5px;
}
.create-post-links li:last-child{
background: #fff;
color: #fff;
border-top: 0;
border-right: 0;
}

.sort-by{
display: flex;
align-items: center;
margin: 10px 0;
}
.sort-by hr{
flex: 1;
border: 0;
height: 1px;
background: #ccc;
}
.sort-by p{
font-size: 13px;
padding-left: 5px;
}
.sort-by p span{
font-weight: 600;
cursor: pointer;
}
.sort-by p span img{

width: 12px;
margin-left: 3px;
}
.post{
background: #fff;
padding: 20px 25px 5px;
margin: 5px 0 15px;
}
.post-author{
display: flex;
align-items: flex-start;
margin-bottom: 20px;
}
.post-author img{
width: 35px;
border-radius: 50%;
margin-right: 10px;
margin-top: 5px;
}
.post-author h1{
font-size: 18px;
font-weight: 600;
color: #333;
}
.post-author small{
display: block;
margin-bottom: -2px;
}
.post p{
font-size: 14px;
margin-bottom: 15px;
}
.post p{
font-size: 14px;
margin-bottom: 15px;
}
.post-stats{
display: flex;
flex-wrap: wrap;
align-items: center;
justify-content: space-between;
font-size: 12px;
border-bottom: 1px solid #ccc;
padding-bottom: 6px;
}
.post-stats div{
display: flex;
align-items: center;
}
.post-stats img{
width: 15px;
margin-right: -5 px;
}
.liked-users{
 margin-left: 10px;
}

.post-activity{
display: flex;
align-items: center;
justify-content: space-between;
padding: 10px 0;
font-size: 14px;
font-weight: 500;
}
.post-activity div{
display: flex;
align-items: center;
}
.post-activity-user-icon{
width: 22px;
border-radius: 50%;
}
.post-activity-arrow-icon{
width: 12px;
margin-left: 5px;
}
.post-activity-link img{
width: 18px;
margin-right: 8px;
}

/*profile drop down menu*/
.profile-menu-wrap{
position: absolute;
top: 100%;
right: 5%;
width: 320px;
max-height: 0;
overflow: hidden;
transition: max-height 0.5s;

}
.profile-menu-wrap.open-menu{
max-height: 400px;
}
.profile-menu{
background: #222;
color: #fff;
padding: 20px;
margin: 10px;
}
.user-info{
display: flex;
align-items: center;
}
.user-info img{
width: 50px;
border-radius: 50%;
margin-right: 15px;
}
.user-info h3{
font-weight: 500;
margin-bottom: -7px;
}
.user-info a{
color: #c9dbf8;
font-size: 13px;
}

.profile-menu hr{
border: 0;
height: 1px;
width: 100%;
background: #fff;
margin: 15px 0 10px;
}
.profile-manu-link{
display: flex;
align-items: center;
color: #fff;
margin: 12px 0;
font-size: 14px;
}
.profile-manu-link p{
	width: 100%;
}
.profile-manu-link img{
width: 35px;
border-radius: 50%;
margin-right: 15px;
}
/*-----profile page--------*/
.profile-main {
flex-basis: 73%;
}

.profile-sidebar{
flex-basis: 25%;
align-self: flex-start;
position: sticky;
top: 73px;
}
.profile-container{
background: #fff;
}
.profile-container-inner{
padding: 0 4% 10px;
}
.profile-pic{
width: 150px;
border-radius: 50%;
margin-top: -75px;
padding: 5px;
background: #fff;
}
.profile-container h1{
font-size: 28px;
font-weight: 600;
color: #222;
}
.profile-container b{
font-weight: 500;
}
.profile-container p{
margin-top: 5px;
}
.profile-container p a{
color: #045be6;
font-weight: 500;
}

.profile-btn{
margin: 20px 0;
}
.profile-btn a{
display: inline-flex;
align-items: center;
background: #e4e6eb;
padding: 6px 15px;
border-radius: 4px;
margin-right: 10px;
}
.profile-btn a img{
width: 18px;
margin-right: 5px;
}
.profile-btn .primary-btn{
background: #045be6;
color: #fff;
}
.profile-description{
background: #fff;
padding: 20px 4% 30px;
margin: 12px 0;
}
.profile-description h2{
color: #333;
margin: 10px 2px;
font-weight: 600;
}
.see-more-link{
display: block;
text-align: right;
font-size: 15px;
}

.profile-desc-row{
display: flex;
align-items: flex-start;
margin: 20px 0;
}
.profile-desc-row img{
width: 50px,
margin-right: 25px;
margin-top: 5px;
}
.profile-desc-row div{
width: 100%;
}
.profile-desc-row h3{
font-size: 18px;
font-weight: 600;
color: #333;
}
.profile-desc-row b{
display: block;
font-weight:500;
font-size: 15px;
}
.profile-desc-row p{
margin-top: 15px;
}
.profile-desc-row hr{
border: 0;
border-bottom: 1px solid #999;
margin-top: 10px;
}
.experience-link{
display: flex;
align-items: center;
justify-content: center;
padding-top: 20px;
font-weight: 500;
}
.experience-link img{
width: 20px;
margin-left: 8px;
}
.education-link{
display: flex;
align-items: center;
justify-content: center;
padding-top: 20px;
font-weight: 500;
}
.education-link img{
width: 20px;
margin-left: 8px;
}
.skills-btn{
background-color: #BEE37D ;
display: inline-block;
margin: 10px 5px;
padding: 6px 18px;
border: 1px solid #777;
border-radius: 30px;
font-size: 12px;
font-weight: 500;
}
.language-btn{
background-color: #85C1E9  ;
display: inline-block;
margin: 10px 5px;
padding: 6px 18px;
border: 1px solid #777;
border-radius: 30px;
font-size: 12px;
font-weight: 500;
}


/*-----profile right sidebar--------*/

.profile-sidebar .sidebar-ad{
margin: 0;
}
.sidebar-people{
background: #fff;
padding: 15px 25px;
margin: 12px 0;
font-size: 12px;
}
.sidebar-people h3{
font- size: 16px;
font-weight: 600;
margin: 10px 0 20px;
}
.sidebar-people-row{
display: flex;
align-items: flex-start;
margin: 6px 0;
}
.sidebar-people-row img{
width: 40px ;
border-radius: 50%;
margin-right: 8px;
margin-top: 5px;
}
.sidebar-people-row h2{
font-weight: 500;
font- size: 16px;
}
.sidebar-people-row a{
display: inline-block;
margin: 10px 0;
padding: 5px 25px;
border: 1px solid #045be6;
border-radius: 30px;
font-weight: 500;
color: #045be6;
}

.profile-footer{
padding: 0 6% 30px;
}
.profile-footer .sidebar-useful-links{
text-align: left;
padding: 0;
}
.profile-footer .copyright-msg{
justify-content: flex-start;
}

#showMoreLink{
	display: none;
}



/* ---------responsive------------*/

@media only screen and (max-width: 600px){
.search-box{
background: transparent;
width: auto;
padding: 0;
}
.search-box input{
width: 0;
padding: 0;
}
.navbar-center ul li a span{
	display: none;
}

.navbar-center ul li a{
padding-right: 0;
margin: 5px;
}
.nav-profile-img{
width: 30px;
}
.container{
padding: 15px 3%;
}
.left-sidebar, .right-sidebar{
flex-basis: 100%;
position: relative;
top: unset;
}
.main-content{
flex-basis:100%;
}

.post-stats div{
margin: 2px 0;
}
.post-activity-link span{
display: none;
}
.post-activity-link img{
margin-right: 0;
}
.profile-main, .profile-sidebar{
flex-basis: 100%;
}
.profile-container{
font- size: 14px;
}
.profile-pic{
width: 100px;
margin-top: -50px;
}
.profile-description{
	font-size: 14px;
}
#showMoreLink{
display: block;
width: fit-content;
margin: 10px auto;
font-size: 14px;
cursor: pointer;
}
.sidebar-activity{
display: none;
}
.sidebar-activity.open-activity{
display: block;
}

}




.main-container {

  margin-left: auto;
  margin-right: auto;
  position: relative;
  width: 1200px;
  max-width: 100%;
  height: calc(100vh - 80px);
  background: #fff;
  display: flex;
  box-shadow: 0px 1px 1px  0 rgba(0,0,0,0.5), 0px 2px 5px 0 rgba(0,0,0,0.6);
}

.main-container .left-container {
  position:relative;
  width: 30%;
  height:100%;
  flex: 30%;
  background: #fff;
}

.main-container .right-container {
  position: relative;
  width: 70%;
  height: 100%;
  flex: 70%;
  background: #e5ddd5;
}

.main-container .right-container::before {
  content: '';
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background: url(https://camo.githubusercontent.com/854a93c27d64274c4f8f5a0b6ec36ee1d053cfcd934eac6c63bed9eaef9764bd/68747470733a2f2f7765622e77686174736170702e636f6d2f696d672f62672d636861742d74696c652d6461726b5f61346265353132653731393562366237333364393131306234303866303735642e706e67);
  opacity: 0.5;
}

.header {
  position: relative;
  display: flex;
  align-items: center;
  width: 100%;
  height: 60px;
  background: #F7F9F9 ;
  padding: 0 15px;
}

.user-img {
  position:relative;
  width: 40px;
  height: 40px;
  overflow: hidden;
  border-radius: 50%;
}

.dp {
  position:absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  object-fit: cover;
  cursor: pointer;
}

.nav-icons {
  display:flex;
  justify-content: flex-end;
  padding-left: 110px;
}

.nav-icons li {
  backgroud-color:pink;
  list-style: none;
  display: flex;
  cursor: pointer;
  color: #51585c;
  margin-left: 22px;
  font-size: 18px;
}

.notif-box {
  position: relative;
  display: flex;
  width: 100%;
  height: 70px;
  background: #76daff;
  align-items: center;
  font-size: 0.8em;
  text-decoration: none;
}

.notif-box i {
  position:relative;
  left: 13px;
  background:#fff;
  padding:10px;
  width: 42px;
  height: auto;
  font-size: 20px;
  border-radius: 55%;
  cursor: pointer;
  color:#76daff;
}

.notif-box .fa-xmark {
  position: absolute;
  left: 260px;
  text-align:center;
  background:#76daff;
  color: #fff;
}

.notif-text {
  margin: 25px;
}

.notif-text a {
  text-decoration: none;
  color: #333;
  font-size: 0.9em;
}

.search-container {
  position:relative;
  width: 100%;
  height: 40px;
  background: #f6f6f6;
  display: flex;
/*   justify-content: center; */
  align-items: center;
}

.search-container .input input {
  width: 121%;
  outline: none;
  border: none;
  background: #fff;
  padding: 5px;
  height: 30x;
  border-radius: 10px;
  font-size: 12px;
  padding-left: 60px;
  margin: 10px
}

.search-container .input i {
  position: absolute;
  left: 26px;
  top: 14px;
  color:#bbb;
  font-size: 0.8em;
}

.chat-list {
  position: relative;
  height:calc(100% - 170px);
  overflow-y: auto;
}

.chat-list .chat-box {
  position: relative;
  width: 100%;
  display:flex;
/*   justify-content: center; */
  align-items:center;
  cursor: pointer;
  padding: 15px;
  border-bottom: 1px solid #eee;
}

.chat-list .chat-box .img-box {
  position:relative;
  width: 55px;
  height:45px;
  overflow:hidden;
  border-radius: 50%;
}

.chat-list .chat-box .chat-details {
  width: 100%;
  margin-left: 10px;
}

.chat-list .chat-box .chat-details .text-head {
  display:flex;
  justify-content: space-between;
  align-items: center;
  margin-bottom:2px;
}

.chat-list .chat-box .chat-details .text-head h4 {
  font-size: 1.1em;
  font-weight: 600;
  color: #000;
}

.chat-list .chat-box .chat-details .text-head .time {
  font-size: 0.8em;
  color: #aaa;
}

.chat-list .chat-box .chat-details .text-message {
  display: flex;
  justify-content: space-between;
  align-items: center;
}

.chat-list .chat-box .chat-details .text-message p {
  color: #aaa;
  font-size: 0.9em;
  overlay: hidden;
}

img {
  width: 100%;
  object-fit: cover;
}

.chat-list .chat-box .chat-details .text-message b {
  background: #06e744;
  color: #fff;
  min-width: 20px;
  height: 20px;
  border-radius: 50%;
/*   text-align: center; */
  font-size: 0.8em;
  font-weight: 400;
  display:flex;
  justify-content:center;
  align-items:center;
}

.chat-list .active {
  background: #ebebeb;
}

.chat-list .chat-box:hover {
  background: #f5f5f5;
}

.chat-list .chat-box .chat-details .text-head .unread {
  color: #06e744;
}


/* right-container */


.right-container .header {
  display: flex;
  justify-content: space-between;
  align-items: center;
}

.right-container .header .img-text .user-img .dp {
  position:relative;
  top: -2px;
  left: 0px;
  width: 40px;
  height:auto;
  overflow:hidden;
  object-fit: cover;
}

.right-container .header .img-text {
  position: relative;
  display: flex;
  justify-content: center;
  align-items: center;
  cursor: pointer;
}

.right-container .header .img-text h4 {
  font-weight: 500;
  line-height: 1.2em;
  margin-left: 15px;
}

.right-container .header .img-text h4 span {
  font-size: 0.8em;
  color: #555;
}

.right-container .header .nav-icons {
  position: relative;
  margin-right:0px;
/*   padding: 5px; */
}

.right-container .header .nav-icons i {
  padding: 10px;
}

.chat-container {
  position:relative;
  width: 100%;
  height: calc(100% - 120px);  /*60+60*/
  padding: 50px;
  overflow-y: auto;
}

.message-box {
  position:relative;
  display: flex;
  width:100%;
  margin: 5px 0;
}

.message-box p {
  position:relative;
  right: 0;
  text-align: right;
  max-width: 65%;
  padding: 12px;
  background: #dcf8c6;
  border-radius: 10px;
  font-size: 0.9em;
}

.message-box.my-message p::before {
  content : '';
  position: absolute;
  top: 0;
  right: -12px;
  width: 20px;
  height: 20px;
  background: linear-gradient(135deg, #dcf8c6 0%, #dcf8c6 50%, transparent 50%, transparent);
}

.message-box p span {
  display: block;
  margin-top: 5px;
  font-size: 0.8em;
  opacity: 0.5;
}

.my-message {
  justify-content: flex-end;
}

.friend-message p {
  background: #fff;
}

.friend-message {
  justify-content: flex-start;

}

.chat-container .my-message i {
  color: yellow;
}

.message-box.friend-message::before {
  content : '';
  position: absolute;
  top: 0;
  left: -12px;
  width: 20px;
  height: 20px;
  background: linear-gradient(225deg, #fff 0%, #fff 50%, transparent 50%, transparent);
}

.chatbox-input {
  position:relative;
  width: 100%;
  height: 60px;
  background: #f0f0f0;
  display: flex;
  justify-content: space-between;
  align-items: center;
}

.chatbox-input i {
  cursor: pointer;
  font-size: 1.8em;
  color: #515855;
}

.chatbox-input i:nth-child(1) {
   margin: 15px;
}

.chatbox-input i:last-child {
  margin-right: 25px;
}

 .chatbox-input input {
    position: relative;
    width: 90%;
    margin: 0 20px;
    padding: 10px 20px;
    border-radius:10px;
    font-size: 1em;
    border:none;
    outline:none;
 }

</style>

<script>

</script>

<!--
 <div class="profile-footer">
   <div class="sidebar-useful-links">

      <div class="copyright-msg">
        <img src="images/logo.png">

      </div>
      <p>Created at 2023 by team</p>
    </div>
 </div>
 -->





</div>




  <script>
  let profileMenu=document.getElementById("profileMenu");
  function toggleMenu(){
    profileMenu.classList.toggle("open-menu");

  }
</script>

</body>

</html>
