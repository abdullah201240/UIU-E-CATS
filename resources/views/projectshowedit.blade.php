@extends('layout')
@section('content')











<!DOCTYPE html>

    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Responsive Card Slider</title>


        <!-- CSS -->

        <link href="{{ asset('css/swiper-bundle.min.css') }}" rel="stylesheet">
        <link href="{{ asset('css/style.css') }}" rel="stylesheet">
        <script type="text/javascript" src="{{ asset('js/scripts.js') }}"></script>
        <script type="text/javascript" src="{{ asset('js/swiper-bundle.min.js') }}"></script>

    </head>




    <body>
        <!-- form -->
          <div class="container">
            @foreach($data6 as $da6)
        <form id="form" action="" method="post" enctype="multipart/form-data">
            @csrf
            <h1>Project Proposal Form</h1>
            <div class="input-control">
                <label for="pt">Project Title: </label>
                <input type="text" id="pt" name="pt" placeholder="Enter project title" type="text" value="{{$da6->project_name}}">
                <div class="error"></div>
            </div>

            <div class="input-control">
                <label for="tn">Team Name: </label>
                <input type="text" id="tn" name="tn" placeholder="Enter Team Name" type="text" value="{{$da6->tn}}">
                <div class="error"></div>
            </div>
            <div class="input-control">
                <label for="tri">Trimester: </label>
                <select name="tri" id="Trimester" class="InputBox"value="{{$da6->tri}}">
                    <option value disabled selected></option>
                    <option>Spring 2023

                    </option>
                    <option>Summer 2023</option>
                    <option>Fall 2023</option>

                </select>


                <div class="error"></div>
            </div>
            <div class="input-control">
                <label for="cn">Course Name: </label>
                <select name="cn" id="course-list" class="InputBox" value="{{$da6->cname}}">
                    <option value disabled selected></option>
                    <option value='Advanced Object Oriented Programming Lab'>Advanced Object Oriented Programming Lab</option>
                    <option value='Electronics Laboratory'>Electronics Laboratory</option>
                    <option value='Database Management Systems Laboratory'>Database Management Systems Laboratory</option>
                    <option value='System Analysis and Design Laboratory'>System Analysis and Design Laboratory</option>
                    <option value='Software Engineering Laboratory'>Software Engineering Laboratory</option>
                    <option value='Microprocessors and Microcontrollers Laboratory'>Microprocessors and Microcontrollers Laboratory</option>




                </select>
                <div class="error"></div>
            </div>
            <div class="input-control">
                <label for="cn">Course ID: </label>

                <select name="ci" id="course id" class="InputBox" value="{{$da6->cid}}">
                    <option value disabled selected></option>
                    <option value='CSE 2118'>CSE 2118</option>
                    <option value='EEE 2124'>EEE 2124</option>
                    <option value='CSE 3522'>CSE 3522</option>
                    <option value='CSE 3412'>CSE 3412</option>
                    <option value='CSE 3422'>CSE 3422</option>
                    <option value='CSE 4326'>CSE 4326</option>
                </select>
                <div class="error"></div>
            </div>
            <div class="input-control">
                <label for="sec">Section: </label>
                <select name="sec" id="section-list" class="InputBox" value="{{$da6->sec}}">
                     <option value disabled selected></option>
                     <option value='A'>A</option>
                     <option value='B'>B</option>
                     <option value='C'>C</option>
                </select>
                <div class="error"></div>
            </div>
            <div class="input-control">
                <label for="faculty">Faculty: </label>
                <select name="faculty" id="section-list" class="InputBox" value="{{$da6->fid}}">
                     <option value disabled selected></option>
                    @foreach($data as $da)
                     <option value="{{$da->id}}">{{$da->name}}</option>

                     @endforeach


                </select>
                <div class="error"></div>
            </div>



            <div class="input-control">
                <label for="de">Details: </label>
                <textarea type="text" id="de" name="de"  type="text" style="height: 80px">{{$da6->project_dis}}</textarea>

                <div class="error"></div>
            </div>
            <div class="input-control">
                <label for="de">Title Image : </label>
                <input type="file" name="timage" value="{{$da6->image}}" >

                <div class="error"></div>
            </div>
            <div class="input-control">
                <label for="de">Title Video : </label>
                <input type="file" name="tvideo" value="{{$da6->video}}">

                <div class="error"></div>
            </div>

            <div>
             <button type="submit">Submit</button>
             </div>
        </form>

        <br>
        <!-- form end -->
          <div class="slide-container swiper" style="background: #f8f8ff ; border-radius: 5%;">
            <center><h1>Additional Images</h1></center>
            <center>
             <form action="" method="post" enctype="multipart/form-data">

                <input type="file" name="addimage" >
            </form>
            </center>
            <br>



            <div class="slide-content">
                <div class="card-wrapper swiper-wrapper">
                    @foreach ( $data7 as $da7 )
                    <div class="card swiper-slide">
                        <div class="image-content">
                            <span class="overlay"></span>

                            <div class="card-image1">
                               <a href='{{ asset('images/' . $da7->image) }}'> <img src="{{ asset('images/' . $da7->image) }}" alt="{{$da7->image}}"  class="card-img1"></a>
                                {{-- <img src="images/profile1.jpg" alt="" class="card-img1"> --}}
                            </div>
                        </div>

                        <div class="card-content">

                            <button class="button1">Remove</button>
                        </div>
                    </div>


                    @endforeach

                </div>
            </div>

            <div class="swiper-button-next swiper-navBtn"></div>
            <div class="swiper-button-prev swiper-navBtn"></div>
            <div class="swiper-pagination"></div>
        </div>
        <br>

        <!-- additional image end -->
        <div class="slide-container swiper" style="background: #f8f8ff ; border-radius: 5%;">
            <center><h1>Project Members</h1></center>
            <br>

            <div class="slide-content">
                <div class="card-wrapper swiper-wrapper">
                    @foreach ( $data8 as $da8 )
                    <div class="card swiper-slide">
                        <div class="image-content">
                            <span class="overlay"></span>

                            <div class="card-image">
                                <img src="{{ asset('images/' . $da8->image) }}" alt="" class="card-img">
                            </div>
                        </div>

                        <div class="card-content">
                            <h2 class="name"> {{$da8->partnerName}}</h2>
                            <p class="description">ID: {{$da8->partnerID}}</p>

                           <a href="/showstudentprofile/{{$da8->partnerID}}"> <button class="button">View Profile</button></a>
                            <button type="button" class="btn btn-danger">Delete</button>
                        </div>
                    </div>
                    @endforeach


                </div>
            </div>

            <div class="swiper-button-next swiper-navBtn"></div>
            <div class="swiper-button-prev swiper-navBtn"></div>
            <div class="swiper-pagination"></div>
        </div>
        <br>
        <br>
        <!-- table start -->
         <center>
         <main class="table">
        <section class="table__header">
            <h1>All Student List</h1>
          <div class="input-group">
                <input type="search" placeholder="Search Data...">

            </div>

        </section>
        <section class="table__body">
            <table>
                <thead>
                    <tr id="thead_tr">

                        <th> Student Name <span class="icon-arrow">&UpArrow;</span></th>
                        <th> Student Id <span class="icon-arrow">&UpArrow;</span></th>

                        <th> Action <span class="icon-arrow">&UpArrow;</span></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data9 as $da9 )


                    <tr>

                        <td>{{$da9->name}}</td>
                        <td>{{$da9->id}} </td>

                        <td>
                           <a href="/addpatners/{{$da9->id}}/{{$da6->project_id}}" ><button type="button" class="btn btn-success">ADD</button></a>
                        </td>

                    </tr>
                    @endforeach

                </tbody>
            </table>
            @endforeach
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>

        </section>
    </main>
    </center>
    <br><br>
    </body>

    <style>

        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap');



               #container{
                  max-width: 700px;
                  width: 100%;
                  padding: 25px 30px;
                  background-color: white;
                  border-radius: 5px;

               }


              #form{
                  width: 700px;
                 margin: 5vh auto 0 auto;
                 padding: 50px;
                 background-color: #D1E9F5  ;
                border-radius: 5px;
                font-size: 12px;

              }
              #form h4{
                  color: #0f2027;
                  text-align: center;
              }
              #form button {
                padding: 10px;

                margin-top: 10px;
                color: black;
                background-color: #229954;
                display: flex;
                display: grid;
                margin: auto;
                font-size: 16px;
                font-weight: 500;
                border-radius: 4px;

               }


         .input-control{
                  display: flex;
                  flex-direction: column;
              }
            .input-control label{
              color: black;
            }

           .input-control input{
                  border: -5px solid #000000;
                  border-radius: 4px;
                  display: block;
                  font-size: 10px;
                  padding: 5px;
              }
            .input-control select{
                  border: -5px solid #000000;
                  display: block;
                  font-size: 10px;
                  padding: 5px;
              }
              .input-control .blank_row
              {
               height: 100px !important; /* overwrites any other rules */
               background-color: #FFFFFF;
              }
              .input-control input:focus {
                 outline: 0;
               }

           .input-control.success input {
               border-color: #09c372;
             }
            .input-control.error input {
          border-color: #ff3860;
           }

          .input-control .error {
          color: #ff3860;
          font-size: -5px;
            height: 5px;
         }
         .input-control details{
          color: #ff3860;
          font-size: 15px;
          height: 25px;
      }

      .wrapper .search-input{
          width: 100%;
          border-radius: 5px;
          outline: none;
          border: none;
          padding: 5 0px 0 -5px;
      }
      .search-input input{
          height: 50px;
          width: 50%;
          outline: none;
          border: none;
          border-radius: 5px;
          padding: 4 0px 0 -4px;
          font-size: 18px;
          box-shadow: 0px 1px 5px rgb(0, 0, 0.1);
      }
      .search-input .active input{
          border-radius: 5px 5px 0 0;
      }
      .search-input .autocom-box{
        padding: 0;
        opacity: 0;
        pointer-events: none;
        max-height: 280px;
        overflow-y: auto;
      }

      .search-input.active .autocom-box{
        padding: 10px 8px;
        opacity: 1;
        pointer-events: auto;
      }

      .autocom-box li{
        list-style: none;
        padding: 8px 12px;
        display: none;
        width: 100%;
        cursor: default;
        border-radius: 3px;
      }

      .search-input.active .autocom-box li{
        display: block;
      }
      .autocom-box li:hover{
        background: #efefef;
      }

      .search-input .icon{
        position: absolute;
        right: 0px;
        top: 0px;
        height: 50px;
        width: 55px;
        text-align: center;
        line-height: 55px;
        font-size: 20px;
        color: #644bff;
        cursor: pointer;
      }


      </style>
      <style>
          main.table {
          width: 62vw;

          background-color: #fff5;

          backdrop-filter: blur(7px);
          box-shadow: 0 .4rem .8rem #0005;
          border-radius: .8rem;

          overflow: hidden;
      }

      .table__header {
          width: 100%;
          height: 10%;
          background-color: #fff4;
          padding: .8rem 1rem;

          display: flex;
          justify-content: space-between;
          align-items: center;
      }

      .table__header .input-group {
          width: 35%;
          height: 100%;
          background-color: #fff5;
          padding: 0 .8rem;
          border-radius: 2rem;

          display: flex;
          justify-content: center;
          align-items: center;

          transition: .2s;
      }

      .table__header .input-group:hover {
          width: 45%;
          background-color: #fff8;
          box-shadow: 0 .1rem .4rem #0002;
      }

      .table__header .input-group img {
          width: 1.2rem;
          height: 1.2rem;
      }

      .table__header .input-group input {
          width: 100%;
          padding: 0 .5rem 0 .3rem;
          background-color: transparent;
          border: none;
          outline: none;
      }

      .table__body {
          width: 95%;
          max-height: calc(89% - 1.6rem);
          background-color: #fffb;

          margin: .8rem auto;
          border-radius: .6rem;

          overflow: auto;
          overflow: overlay;
      }

      .table__body::-webkit-scrollbar{
          width: 0.5rem;
          height: 0.5rem;
      }

      .table__body::-webkit-scrollbar-thumb{
          border-radius: .5rem;
          background-color: #0004;
          visibility: hidden;
      }

      .table__body:hover::-webkit-scrollbar-thumb{
          visibility: visible;
      }

      table {
          width: 100%;
      }

      td img {
          width: 36px;
          height: 36px;
          margin-right: .5rem;
          border-radius: 50%;

          vertical-align: middle;
      }

      table, th, td {
          border-collapse: collapse;
          padding: 1rem;
          text-align: left;
      }

      thead th {
          position: sticky;
          top: 0;
          left: 0;
          background-color: #d5d1defe;
          cursor: pointer;
          text-transform: capitalize;
      }

      tbody tr:nth-child(even) {
          background-color: #0000000b;
      }

      tbody tr {
          --delay: .1s;
          transition: .5s ease-in-out var(--delay), background-color 0s;
      }

      tbody tr.hide {
          opacity: 0;
          transform: translateX(100%);
      }

      tbody tr:hover {
          background-color: #fff6 !important;
      }

      tbody tr td,
      tbody tr td p,
      tbody tr td img {
          transition: .2s ease-in-out;
      }

      tbody tr.hide td,
      tbody tr.hide td p {
          padding: 0;
          font: 0 / 0 sans-serif;
          transition: .2s ease-in-out .5s;
      }

      tbody tr.hide td img {
          width: 0;
          height: 0;
          transition: .2s ease-in-out .5s;
      }




      @media (max-width: 1000px) {
          td:not(:first-of-type) {
              min-width: 12.1rem;
          }
      }

      thead th span.icon-arrow {
          display: inline-block;
          width: 1.3rem;
          height: 1.3rem;
          border-radius: 50%;
          border: 1.4px solid transparent;

          text-align: center;
          font-size: 1rem;

          margin-left: .5rem;
          transition: .2s ease-in-out;
      }

      thead th:hover span.icon-arrow{
          border: 1.4px solid #6c00bd;
      }

      thead th:hover {
          color: #6c00bd;
      }

      thead th.active span.icon-arrow{
          background-color: #6c00bd;
          color: #fff;
      }

      thead th.asc span.icon-arrow{
          transform: rotate(180deg);
      }

      thead th.active,tbody td.active {
          color: #6c00bd;
      }
          </style>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <!-- Swiper JS -->
    <script src="js/swiper-bundle.min.js"></script>

    <!-- JavaScript -->
    <script src="js/script.js"></script>
    <script src="./assets/js/core/popper.min.js" ></script>
<script src="./assets/js/core/bootstrap.min.js" ></script>
<script src="./assets/js/plugins/perfect-scrollbar.min.js" ></script>
<script src="./assets/js/plugins/smooth-scrollbar.min.js" ></script>

<script>
  const search = document.querySelector('.input-group input'),
    table_rows = document.querySelectorAll('tbody tr'),
    table_headings = document.querySelectorAll('thead th');

// 1. Searching for specific data of HTML table
search.addEventListener('input', searchTable);

function searchTable() {
    table_rows.forEach((row, i) => {
        let table_data = row.textContent.toLowerCase(),
            search_data = search.value.toLowerCase();

        row.classList.toggle('hide', table_data.indexOf(search_data) < 0);
        row.style.setProperty('--delay', i / 25 + 's');
    })

    document.querySelectorAll('tbody tr:not(.hide)').forEach((visible_row, i) => {
        visible_row.style.backgroundColor = (i % 2 == 0) ? 'transparent' : '#0000000b';
    });
}

// 2. Sorting | Ordering data of HTML table

table_headings.forEach((head, i) => {
    let sort_asc = true;
    head.onclick = () => {
        table_headings.forEach(head => head.classList.remove('active'));
        head.classList.add('active');

        document.querySelectorAll('td').forEach(td => td.classList.remove('active'));
        table_rows.forEach(row => {
            row.querySelectorAll('td')[i].classList.add('active');
        })

        head.classList.toggle('asc', sort_asc);
        sort_asc = head.classList.contains('asc') ? false : true;

        sortTable(i, sort_asc);
    }
})


function sortTable(column, sort_asc) {
    [...table_rows].sort((a, b) => {
        let first_row = a.querySelectorAll('td')[column].textContent.toLowerCase(),
            second_row = b.querySelectorAll('td')[column].textContent.toLowerCase();

        return sort_asc ? (first_row < second_row ? 1 : -1) : (first_row < second_row ? -1 : 1);
    })
        .map(sorted_row => document.querySelector('tbody').appendChild(sorted_row));
}


</script>
 <script>
      const form = document.querySelector("form"),
fileInput = document.querySelector(".file-input"),
progressArea = document.querySelector(".progress-area"),
uploadedArea = document.querySelector(".uploaded-area");

form.addEventListener("click", () =>{
  fileInput.click();
});

fileInput.onchange = ({target})=>{
  let file = target.files[0];
  if(file){
    let fileName = file.name;
    if(fileName.length >= 12){
      let splitName = fileName.split('.');
      fileName = splitName[0].substring(0, 13) + "... ." + splitName[1];
    }
    uploadFile(fileName);
  }
}

function uploadFile(name){
  let xhr = new XMLHttpRequest();
  xhr.open("POST", "php/upload.php");
  xhr.upload.addEventListener("progress", ({loaded, total}) =>{
    let fileLoaded = Math.floor((loaded / total) * 100);
    let fileTotal = Math.floor(total / 1000);
    let fileSize;
    (fileTotal < 1024) ? fileSize = fileTotal + " KB" : fileSize = (loaded / (1024*1024)).toFixed(2) + " MB";
    let progressHTML = `<li class="row">
                          <i class="fas fa-file-alt"></i>
                          <div class="content">
                            <div class="details">
                              <span class="name">${name} • Uploading</span>
                              <span class="percent">${fileLoaded}%</span>
                            </div>
                            <div class="progress-bar">
                              <div class="progress" style="width: ${fileLoaded}%"></div>
                            </div>
                          </div>
                        </li>`;
    uploadedArea.classList.add("onprogress");
    progressArea.innerHTML = progressHTML;
    if(loaded == total){
      progressArea.innerHTML = "";
      let uploadedHTML = `<li class="row">
                            <div class="content upload">
                              <i class="fas fa-file-alt"></i>
                              <div class="details">
                                <span class="name">${name} • Uploaded</span>
                                <span class="size">${fileSize}</span>
                              </div>
                            </div>
                            <i class="fas fa-check"></i>
                          </li>`;
      uploadedArea.classList.remove("onprogress");
      uploadedArea.insertAdjacentHTML("afterbegin", uploadedHTML);
    }
  });
  let data = new FormData(form);
  xhr.send(data);
}
  </script>


<script>
   // getting all required elements
const searchWrapper = document.querySelector(".search-input");
const inputBox = searchWrapper.querySelector("input");
const suggBox = searchWrapper.querySelector(".autocom-box");
const icon = searchWrapper.querySelector(".icon");
let linkTag = searchWrapper.querySelector("a");
let webLink;

// if user press any key and release
inputBox.onkeyup = (e)=>{
    let userData = e.target.value; //user enetered data
    let emptyArray = [];
    if(userData){
        icon.onclick = ()=>{
            webLink = `https://www.google.com/search?q=${userData}`;
            linkTag.setAttribute("href", webLink);
            linkTag.click();
        }
        emptyArray = suggestions.filter((data)=>{
            //filtering array value and user characters to lowercase and return only those words which are start with user enetered chars
            return data.toLocaleLowerCase().startsWith(userData.toLocaleLowerCase());
        });
        emptyArray = emptyArray.map((data)=>{
            // passing return data inside li tag
            return data = `<li>${data}</li>`;
        });
        searchWrapper.classList.add("active"); //show autocomplete box
        showSuggestions(emptyArray);
        let allList = suggBox.querySelectorAll("li");
        for (let i = 0; i < allList.length; i++) {
            //adding onclick attribute in all li tag
            allList[i].setAttribute("onclick", "select(this)");
        }
    }else{
        searchWrapper.classList.remove("active"); //hide autocomplete box
    }
}

function select(element){
    let selectData = element.textContent;
    inputBox.value = selectData;
    icon.onclick = ()=>{
        webLink = `https://www.google.com/search?q=${selectData}`;
        linkTag.setAttribute("href", webLink);
        linkTag.click();
    }
    searchWrapper.classList.remove("active");
}

function showSuggestions(list){
    let listData;
    if(!list.length){
        userValue = inputBox.value;
        listData = `<li>${userValue}</li>`;
    }else{
      listData = list.join('');
    }
    suggBox.innerHTML = listData;
}

let suggestions = [
    "Channel",
    "CodingLab",
    "CodingNepal",
    "YouTube",
    "YouTuber",
    "YouTube Channel",
    "Blogger",
    "Bollywood",
    "Vlogger",
    "Vechiles",
    "Facebook",
    "Freelancer",
    "Facebook Page",
    "Designer",
    "Developer",
    "Web Designer",
    "Web Developer",
    "Login Form in HTML & CSS",
    "How to learn HTML & CSS",
    "How to learn JavaScript",
    "How to become Freelancer",
    "How to become Web Designer",
    "How to start Gaming Channel",
    "How to start YouTube Channel",
    "What does HTML stands for?",
    "What does CSS stands for?",
];


</script>

<script>
    var swiper = new Swiper(".slide-content", {
    slidesPerView: 3,
    spaceBetween: 25,
    loop: true,
    centerSlide: 'true',
    fade: 'true',
    grabCursor: 'true',
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
      dynamicBullets: true,
    },
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },

    breakpoints:{
        0: {
            slidesPerView: 1,
        },
        520: {
            slidesPerView: 2,
        },
        950: {
            slidesPerView: 3,
        },
    },
  });
</script>


</html>
