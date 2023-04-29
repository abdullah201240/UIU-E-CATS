@extends('layout')
@section('content')




    <!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="apple-touch-icon" sizes="76x76" href="">
    <link rel="icon" type="image/png" href="">
    <link rel="stylesheet" href="now/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <title>Project list</title>

    <!-- Fonts and icons -->
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400"/>



<!--     Fonts and icons     -->
<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />

<!-- Nucleo Icons -->
<link href="./assets/css/nucleo-icons.css" rel="stylesheet" />
<link href="./assets/css/nucleo-svg.css" rel="stylesheet" />

<!-- Font Awesome Icons -->
<script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>

<!-- Material Icons -->
<link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">

<!-- CSS Files -->



<link id="pagestyle" href="./assets/css/material-dashboard.css?v=3.0.4" rel="stylesheet" />





  </head>

<body>

    <div class = "main-wrapper" style="background:#b8ddc7;">
        <div class = "container" >
            <div class = "main-title">
                 <h1></h1>

            <div class = "display-style-btns">
                <h1 style = "margin-right:20%;">Project List</h1>
              <div class="search-bar">
             <input type="text" placeholder="Search projects...">
              <button type="submit"><i class="fa fa-search"></i></button>
             </div>
            </div>
        </div>
            <section>
            @foreach ($data as $da1)
                        <div class='item-list details-active'>
                            <div class='item'>
                                <div class='item-img'>
                                    <img src='images/sakib.jpg'>
                                    <div class='icon-list'>
                                        <button type='button'>
                                            <a href='p_video.php'> <i class='fa fa-play-circle'
                                                    style='font-size:40px;'></i></a>
                                        </button>
                                        <button type='button'>
                                            <a href='p_rating.php'> <i class='fa fa-star' style='font-size:30px;'></i></a>
                                        </button>



                                    </div>
                                </div>
                                <div class='item-detail'>


                                    <div  class='item-name'>
                                    <h1 >{{ $da1->project_name }} </h1>
                                    <p>Team Name : {{ $da1->tn }} </p>
                                    <p>Course Name : {{ $da1->cname }} </p>
                                    <p>Trimester : {{ $da1->tri }} <b>{{ $da1->position }}</b></p>
</div>

                                    <a href='p_details/{{ $da1->project_id }}'> <button type='button' class='add-btn'>See
                                            More</button></a>
                                </div>
                            </div>
                        </div>
                </section>
                @endforeach


        </div>
    </div>



    <script src = "now/script.js"></script>

</body>



  <style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap');

*{
    padding: 0;
    margin: 0;
    box-sizing: border-box;
}
body{
    font-family: 'Poppins', sans-serif;
}
img{
    width: 100%;
    display: block;
}

.main-wrapper{
    background-color: #fff;
    min-height: 100vh;
    overflow-x: 0;
}
.container{
    max-width: 1200px;
    margin: 0 auto;
    padding: 0 16px;
}
.main-title{
    text-align: center;
}
.main-title h1{
    padding: 16px 0;
    font-weight: 500;
    text-transform: uppercase;
    letter-spacing: 2px;
}
.display-style-btns{
    margin: 10px 0;
    display: flex;
    align-items: center;
    justify-content: flex-end;
    background-color: #fff;
    padding: 16px 0;
    border-radius: 5px;
}
.display-style-btns button{
    border: none;
    font-size: 22px;
    display: inline-block;
    vertical-align: top;
    margin: 0 8px;
    background-color: transparent;
    cursor: pointer;
    transition: all 0.3s ease-out;
}
.display-style-btns button:hover{
    color: #f79410;
}
.active-btn{
    color: #f79410;
}


.item-list{
    margin: 36px 0;
    display: grid;
    grid-template-columns: repeat(1, 1fr);
    row-gap: 32px;
}
.item{
    background-color: #fff;
    border-radius: 5px;
    overflow: hidden;
    box-shadow: 0 0 4px 0 rgba(15, 4, 4, 0.05);
    transition: all 0.2s ease-out;
}
.item:hover{
    box-shadow: 0 0 10px 1px rgba(0, 4, 4, 0.15);
}
.item-img{
    position: relative;
    overflow: hidden;
}
.item-img img{
    width: 70%;
    margin: 16px auto;
}
.icon-list{
    position: absolute;
    bottom: -100px;
    left: 50%;
    transform: translateX(-50%);
    display: flex;
    align-items: center;
    justify-content: center;
    transition: all 0.3s ease-out;
}
.icon-list button{
    border: none;
    background-color: #202020;
    color: #fff;
    margin: 0 6px;
    width: 35px;
    height: 35px;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 15px;
    cursor: pointer;
    transition: all 0.3s ease-out;
}
.icon-list button:hover{
    background-color: #f4f4f4;
    color: #202020;
}
.item-img:hover .icon-list{
    bottom: 26px;
}
.item-detail{
    padding: 16px;
    color: #202020;
    text-align: center;
}
.item-name{
    font-weight: 500;
    font-size: 18px;
    color: #202020;
    display: block;
}
.video-player{
    width: 80%;
    position: absolute;
    left: 50%;
    top: 50%;
    transform: translate(-50,-50);
    display: none;

}
video:focus{
    outline: none;
}
.close-btn{
  position: absolute;
  top: 10px;
  right: 10px;
  width: 30px;
  cursor: pointer;
}

.checked {
  color: orange;
}
.item-detail p{
    font-weight: 300;
    opacity: 0.9;
    font-size: 15px;
    line-height: 1.7;
    display: none;
}
.add-btn{
    margin: 16px 0;
    text-transform: uppercase;
    border: none;
    background-color: #202020;
    color: #fff;
    font-family: inherit;
    padding: 10px 28px;
    border: 1px solid #202020;
    cursor: pointer;
    transition: all 0.3s ease-out;
    display: none;
}
.add-btn:hover{
    background-color: #fff;
    color: #202020;
}


/* stylings for details active */
.details-active.item-list{
    grid-template-columns: 100%;
}
.details-active .item{
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    align-items: center;
}
.details-active .item-detail{
    text-align: left;
}
.details-active .item-price{
    justify-content: flex-start;
}
.details-active .item-detail p{
    display: block;
}
.details-active .item-detail .add-btn{
    display: block;
}



@media screen and (min-width: 678px){
    .item-list{
        grid-template-columns: repeat(2, 1fr);
        gap: 32px;
    }
}

@media screen and (min-width: 768px){
    .item-list{
        grid-template-columns: repeat(3, 1fr);
    }
}

@media screen and (max-width: 576px){
    .details-active .item{
        grid-template-columns: 100%;
    }
}
    .search-bar {
  display: flex;
  align-items: center;
  margin-bottom: 20px;
}
.search-bar input {
  flex: 1;
  padding: 10px;
  font-size: 16px;
  border: none;
  border-bottom: 2px solid #ccc;
  margin-right: 10px;
}
.search-bar button {
  background-color: #f1f1f1;
  border: none;
  color: #333;
  padding: 10px;
  font-size: 16px;
  cursor: pointer;
}
.search-bar button:hover {
  background-color: #ddd;
}
  </style>

  <script>
  function searchProjects() {
    // Get the input value
    var input = document.querySelector(".search-bar input").value.toLowerCase();
    // Get the project list items
    var items = document.querySelectorAll(".item-list .item");
    // Loop through the items and hide/show them based on the search query
    for (var i = 0; i < items.length; i++) {
      var name = items[i].querySelector(".item-name").innerText.toLowerCase();
      var details = items[i].querySelector("p").innerText.toLowerCase();
      if (name.indexOf(input) > -1 || details.indexOf(input) > -1) {
        items[i].style.display = "block";
      } else {
        items[i].style.display = "none";
      }
    }
  }
  // Add an event listener to the search button
  document.querySelector(".search-bar button").addEventListener("click", searchProjects);
</script>









































<script>
  var win = navigator.platform.indexOf('Win') > -1;
  if (win && document.querySelector('#sidenav-scrollbar')) {
    var options = {
      damping: '0.5'
    }
    Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
  }
</script>

<!-- Github buttons -->
<script async defer src="https://buttons.github.io/buttons.js"></script>


<!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc --><script src="./assets/js/material-dashboard.min.js?v=3.0.4"></script>
  </body>

</html>



