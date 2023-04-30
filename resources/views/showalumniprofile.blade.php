

<!DOCTYPE html>
<html lang="en">
  <head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">


	<title>
		Profile
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
				<li><a href="#"><img src="images/network.png"> <span>My Network</span></a></li>

				<li><a href="#"><img src="images/message.png"> <span>Messaging</span></a></li>

			</ul>
		</div>

@foreach ($data as $da )



		<div class="navbar-right">
			<div class="online">
				<img src="images/{{ $da->image }}" alt="{{$da->image}}" class="nav-profile-img" onclick="toggleMenu()">
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
    @endforeach

	<!--navbar end-->
@foreach ($data1 as $da1)


<div class="container">
	<div class="profile-main">
		<div class="profile-container">
			<img src="images/{{ $da1->cover }}" height="400px" width="100%">
			<div class="profile-container-inner">
				<img src="images/{{ $da1->image }}" class="profile-pic">
				<h1>{{ $da1->name }}</h1>

				<p>Email : {{ $da1->email }}</p>
                <p>Phone : {{ $da1->phone }}</p>


			</div>

		</div>
        <div class="profile-description">
  <h2>About</h2>
  <p class="description-text">{{ $da1->intro}}</p>
  <a href="#" class="see-more-link">See more...</a>
</div>
@endforeach
<style>

	.profile-description .description-text {
  height: 20px; /* Show only two lines of text */

  .profile-description .description-text {
  height: 20px; /* Show only two lines of text */
  overflow: hidden;
}

.profile-description .show-more {
  height: auto; /* Show full text */
}


</style>
<script>
	const seeMoreLink = document.querySelector('.see-more-link');
const descriptionText = document.querySelector('.description-text');

seeMoreLink.addEventListener('click', (event) => {
  event.preventDefault();
  descriptionText.classList.toggle('show-more');
  seeMoreLink.textContent = descriptionText.classList.contains('show-more') ? 'See less' : 'See more...';
});

</script>
      <div class="profile-description">
  <h2>Experience </h2>
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
</style>
<style>
/* Style the form */


/* Style the modal */
.modal {
  display: none;
  position: fixed;
  z-index: 1;
  left: 0;
  top: 0;
  width: 100%;
  height: 300%;
  overflow: auto;
  background-color: rgb(0, 0, 0);
  background-color: rgba(0, 0, 0, 0.4);
}

.modal-content {
  background-color: #f8f8f8;
  margin: 15% auto;
  padding: 20px;
  border: 1px solid #ccc;
  border-radius: 5px;
  max-width: 600px;
}

.close {
  float: right;
  font-size: 28px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: #000;
  text-decoration: none;
  cursor: pointer;
}

</style>
<script>
	var modal = document.getElementById("myModal");
var btn = document.getElementById("myBtn");
var close = document.getElementsByClassName("close")[0];

btn.onclick = function() {
  modal.style.display = "block";
}

close.onclick = function() {
  modal.style.display = "none";
}

window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}

</script>
<div class="profile-desc-row">

    <div>
          <h3>Govt job </h3>
        <b>BSCE</b>
        <b>2020-2024</b>



    </div>
</div>

  <hr>
  <a href="#" class="experience-link">Show All Experiences <img src="images/right-arrow.png"></a>
</div>


<style>
	.popup-form-container {
  position: fixed;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  background-color: white;
  padding: 20px;
  z-index: 999;
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
}

.popup-form-container label, .popup-form-container textarea {
  display: block;
  margin-bottom: 10px;
}

.popup-form-container input, .popup-form-container select, .popup-form-container textarea {
  width: 100%;
  padding: 5px;
  border: 1px solid gray;
  border-radius: 5px;
}

.popup-form-container button {
  margin-top: 10px;
  padding: 5px 10px;
  background-color: #2196f3;
  color: white;
  border: none;
  border-radius: 5px;
  cursor: pointer;
}

.popup-form-container button.close-form-btn {
  margin-top: 20px;
  background-color: #f44336;
}

.hidden {
  display: none;
}

</style>
<script>
  // Get the "Show All Experiences" link and the experience rows
const showAllExperiencesLink = document.querySelector('.experience-link');
const experienceRows = document.querySelectorAll('.profile-desc-row');

// Get the "Add Experience" button and the popup form
const addExperienceBtn = document.querySelector('.add-experience-btn');
const addExperiencePopup = document.querySelector('.add-experience-popup');

// Hide all the experience rows except the first one
for (let i = 1; i < experienceRows.length; i++) {
  experienceRows[i].style.display = 'none';
}

// Show all the experience rows when "Show All Experiences" is clicked
showAllExperiencesLink.addEventListener('click', () => {
  for (let i = 1; i < experienceRows.length; i++) {
    experienceRows[i].style.display = 'block';
  }

  if (showAllExperiencesLink.innerText === 'Show All Experiences') {
    showAllExperiencesLink.innerText = 'Show Less Experiences';
  } else {
    showAllExperiencesLink.innerText = 'Show All Experiences';
    for (let i = 2; i < experienceRows.length; i++) {
      experienceRows[i].style.display = 'none';
    }
  }
});

// Show the popup form when "Add Experience" button is clicked
addExperienceBtn.addEventListener('click', () => {
  addExperiencePopup.style.display = 'block';
});

// Hide the popup form when the close button is clicked
const closeBtn = document.querySelector('.close-btn');
closeBtn.addEventListener('click', () => {
  addExperiencePopup.style.display = 'none';
});

// Hide the popup form when the cancel button is clicked
const cancelBtn = document.querySelector('.cancel-btn');
cancelBtn.addEventListener('click', () => {
  addExperiencePopup.style.display = 'none';
});

// Handle form submission when the submit button is clicked
const submitBtn = document.querySelector('.submit-btn');
submitBtn.addEventListener('click', (e) => {
  e.preventDefault();
  // Code to handle form submission
  // ...
  // Hide the popup form
  addExperiencePopup.style.display = 'none';
});

</script>

        <div class="profile-description">
        	<h2>Education&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<button id="openFormButton" class="add-education-btn"><img src="images/plus.png" style="height: 15px;width: 15px;"></button></h2>




@foreach ($data2 as $da1 )


<div class="profile-desc-row1">

            <div>
              <h3>{{$da1->name}}</h3>

              <b>{{$da1->degree}}</b>
              <b>{{$da1->year}}</b>

            </div>

   </div>

   @endforeach


  <a href="#" class="education-link" style="display: flex;
align-items: center;
justify-content: center;
padding-top: 20px;
font-weight: 500;">Show All Educations <img src="images/right-arrow.png" style="width: 20px;
margin-left: 8px;"></a>
</div>

<script>
const showMoreLink = document.querySelector('.education-link');
const educations = document.querySelectorAll('.profile-desc-row1');
const educationCount = educations.length;

let isExpanded = false;

function toggleEducations() {
  if (isExpanded) {
    // Show only one education
    for (let i = 1; i < educationCount; i++) {
      if (i === 1) {
        educations[i].style.display = 'flex';
      } else {
        educations[i].style.display = 'none';
      }
    }
    showMoreLink.innerText = 'Show All Educations ▼';
  } else {
    // Show all educations
    for (let i = 0; i < educationCount; i++) {
      educations[i].style.display = 'flex';
    }
    showMoreLink.innerText = 'Show less Educations ▲';
  }
  isExpanded = !isExpanded;
}

// Show only one education initially
for (let i = 1; i < educationCount; i++) {
  if (i === 1) {
    educations[i].style.display = 'flex';
  } else {
    educations[i].style.display = 'none';
  }
}

showMoreLink.addEventListener('click', toggleEducations);


</script>



<style>
	#popupFormContainer {
  display: none;
  position: fixed;
  z-index: 1;
  padding-top: 100px;
  left: 0;
  top: 0;
  width: 100%;
  height: 100%;
  overflow: auto;
  background-color: rgba(0,0,0,0.4);
}

#popupForm {
  background-color: white;
  margin: auto;
  padding: 20px;
  border: 1px solid #888;
  width: 60%;
}

#closeForm {
  color: #aaa;
  float: right;
  font-size: 28px;
  font-weight: bold;
  cursor: pointer;
}

#closeForm:hover,
#closeForm:focus {
  color: black;
  text-decoration: none;
  cursor: pointer;
}

button {
  padding: 10px 20px;
  font-size: 16px;
}

input[type="text"],
input[type="email"],
input[type="submit"] {
  display: block;
  width: 100%;
  padding: 10px;
  font-size: 16px;
  border-radius: 5px;
  border: 1px solid #ccc;
  margin-bottom: 20px;
}

input[type="submit"] {
  background-color: #4CAF50;
  color: white;
  border: none;
}

input[type="submit"]:hover {
  background-color: #45a049;
}

</style>
<script>
	// Get the button that opens the form
var openFormButton = document.getElementById("openFormButton");

// Get the popup form container
var popupFormContainer = document.getElementById("popupFormContainer");

// Get the <span> element that closes the form
var closeForm = document.getElementById("closeForm");

// When the user clicks on the button, open the form
openFormButton.onclick = function() {
  popupFormContainer.style.display = "block";
}

// When the user clicks on <span> (x), close the form
closeForm.onclick = function() {
  popupFormContainer.style.display = "none";
}

// When the user clicks anywhere outside of the form, close it
window.onclick = function(event) {
  if (event.target == popupFormContainer) {
    popupFormContainer.style.display = "none";
  }
}

</script>


         <div class="profile-description">
        	<h2>Skills&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<button id="myBtn1" class="add-experience-btn"><img src="images/plus.png" style="height: 15px;width: 15px;"></button></h2>


<div id="myModal1" class="modal1">
  <div class="modal-content1">
    <span class="close1">&times;</span>
    <h2 style="color: #045be6;">Add Your Skill Here!</h2><br><br>
    <form action="alumniaddskill" method="post" enctype="multipart/form">
        @csrf
      <label for="skill-name" style="color: black;">Skill Name</label><br>
      <input type="text" id="skill-name" name="skill_name"><br><br><br>
    <center><button type="submit" class="btn btn-primary" style="background-color: #045be6;border-radius: 3%; color: white; width: 100px; height: 40px;">Done</button></center>
    </form>
  </div>
</div>
<style>
	/* The Modal (background) */
.modal1 {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}

/* Modal Content/Box */
.modal-content1 {
  background-color: #fefefe;
  margin: 15% auto; /* 15% from the top and centered */
  padding: 20px;
  border: 1px solid #888;
  width: 50%; /* Could be more or less, depending on screen size */
}

/* The Close Button */
.close1 {
  color: #aaa;
  float: right;
  font-size: 28px;
  font-weight: bold;
}

.close1:hover,
.close1:focus {
  color: black;
  text-decoration: none;
  cursor: pointer;
}

</style>
<script>
	// Get the modal
var modal1 = document.getElementById("myModal1");

// Get the button that opens the modal
var btn = document.getElementById("myBtn1");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close1")[0];

// When the user clicks on the button, open the modal
btn.onclick = function() {
  modal1.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal1.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal1) {
    modal1.style.display = "none";
  }
}


</script>
@foreach ($data2 as $da2 )


        	<a href="#" class="skills-btn">{{$da2->skill}}</a>

            @endforeach

	     </div>
	     <div class="profile-description">
        	<h2>Languages&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<button id="myBtn2" class="add-experience-btn"><img src="images/plus.png" style="height: 15px;width: 15px;"></button></h2>

<div id="pop" class="pop">
  <div class="pop-content2">
    <span class="close2">&times;</span>
    <h2 style="color: #045be6;">Add Your Known Language Here!</h2><br><br>
    <form action="alumniaddlanguage" method="post" enctype="multipart/form">
        @csrf
      <label for="Language-name" style="color: black;">Language Name</label><br>
      <input type="text" id="Language-name" name="lang"><br><br><br>
    <center><button type="submit" class="btn btn-primary" style="background-color: #045be6;border-radius: 3%; color: white; width: 100px; height: 40px;">Done</button></center>
    </form>
  </div>
</div>
<style>
	/* The Modal (background) */
.pop {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}

/* Modal Content/Box */
.pop-content2{
  background-color: #fefefe;
  margin: 15% auto; /* 15% from the top and centered */
  padding: 20px;
  border: 1px solid #888;
  width: 50%; /* Could be more or less, depending on screen size */
}

/* The Close Button */
.close2 {
  color: #aaa;
  float: right;
  font-size: 28px;
  font-weight: bold;
}

.close2:hover,
.close2:focus {
  color: black;
  text-decoration: none;
  cursor: pointer;
}

</style>
<script>
	// Get the modal
var pop = document.getElementById("pop");

// Get the button that opens the modal
var btn2 = document.getElementById("myBtn2");

// Get the <span> element that closes the modal
var span2 = document.getElementsByClassName("close2")[0];

// When the user clicks on the button, open the modal
btn2.onclick = function() {
  pop.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span2.onclick = function() {
  pop.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == pop) {
    pop.style.display = "none";
  }
}

</script>
@foreach ($data3 as $da3 )


<a href="#" class="language-btn">{{$da3->lang}}</a>

            @endforeach


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
    background-color:rgb(0 0 0 / 0%);
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

 #popup-container .active{
  height: 590px;
}
 #popup-container #popup-content{
  width: 1000px;
  display: flex;
}
 #popup-container section{
  width: 500px;
  background: #fff;
}
#popup-container img{
  cursor: pointer;
}
#popup-container .post{
  transition: margin-left 0.18s ease;
}
#popup-container.active .post{
  margin-left: -500px;
}
.post header{
  font-size: 22px;
  font-weight: 600;
  padding: 17px 0;
  text-align: center;
  border-bottom: 1px solid #bfbfbf;
}
.post form{
  margin: 20px 25px;
}
.post form .content{
  display: flex;
  align-items: center;
}
.post form .content img{
  cursor: default;
  max-width: 52px;
}
.post form .content .details{
  margin: -3px 0 0 12px;
}
form .content .details p{
  font-size: 17px;
  font-weight: 500;
}
.content .details .privacy{
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
.details .privacy span{
  font-size: 13px;
  margin-top: 1px;
  font-weight: 500;
}
.details .privacy i:last-child{
  font-size: 13px;
  margin-left: 1px;
}
form :where(textarea, button){
  width: 100%;
  outline: none;
  border: none;
}
form textarea{
  resize: none;
  font-size: 18px;
  margin-top: 30px;
  min-height: 100px;
}
form textarea::placeholder{
  color: #858585;
}
form textarea:focus::placeholder{
  color: #b3b3b3;
}
form :where(.theme-emoji, .options){
  display: flex;
  align-items: center;
  justify-content: space-between;
}
.theme-emoji img:last-child{
  max-width: 24px;
}
form .options{
  height: 57px;
  margin: 15px 0;
  padding: 0 15px;
  border-radius: 7px;
  border: 1px solid #B9B9B9;
  box-shadow: 0 1px 2px rgba(0, 0, 0, 0.1);
}
form .options :where(.list, li),
.audience :where(.arrow-back, .icon, li .radio){
  display: flex;
  align-items: center;
  justify-content: center;
}
form .options p{
  color: #595959;
  font-size: 15px;
  font-weight: 500;
  cursor: default;
}
form .options .list{
  list-style: none;
}
.options .list li{
  height: 42px;
  width: 42px;
  margin: 0 -1px;
  cursor: pointer;
  border-radius: 50%;
}
.options .list li:hover{
  background: #f0f1f4;
}
.options .list li img{
  width: 23px;
}
form button{
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
form textarea:valid ~ button{
  color: #fff;
  cursor: pointer;
  background: #4599FF;
}
form textarea:valid ~ button:hover{
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
       <div class="post">
        @foreach ( $data4 as $da4)
         <div class="post-author">
            <img src="images/{{ $da4->userimage }}">
            <div>
              <h1>{{$da4->aname}}
                <a href="dletepost/{{$da4->id}}"><button type="button" class="btn btn-danger" style="border: #f0f2f5; background-color:#f0f2f5;margine-left:50%;">&times;</button></a></h1>
                <small>{{ $da4->time }}</small>

            </div>
         </div>
          <p>{{ $da4->text }}</p>
          <img src="images/{{ $da4->image }}" width="100%">





       </div>
       <div class="post-activity">



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



       </div>

<br>
       @endforeach








	</div>


 <div class="profile-footer">
 	 <div class="sidebar-useful-links">

    	<div class="copyright-msg">
    		<img src="images/logo.png">

    	</div>
    	<p>Created at 2023 by team Echo</p>
    </div>
 </div>






</div>





	<script>
	let profileMenu=document.getElementById("profileMenu");
	function toggleMenu(){
		profileMenu.classList.toggle("open-menu");

	}
</script>
<style>

80% of storage used … You can clean up space or get more storage for Drive, Gmail, and Google Photos.
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
</style>

</body>
</html>
