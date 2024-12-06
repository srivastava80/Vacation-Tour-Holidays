<HTML>
<HEAD><TITLE>Vacation-Travel & Holidays</TITLE>
<link rel="shortcut icon" href="logo.jpeg" type="image/x-icon">
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <style>
         @import url('https://fonts.googleapis.com/css2?family=Merienda:wght@300..900&display=swap');
    @import url('https://fonts.googleapis.com/css2?family=Merienda:wght@300..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');
    
@import url('https://fonts.googleapis.com/css2?family=Pacifico&display=swap');
*{
      font-family: "Poppins", sans-serif;
    }
    .h-font{
      font-family: "Merienda", cursive;
    }
    .hp-font{
      font-family: "Pacifico", cursive;
    }
        .navbar li{ float:left;
            list-style: none;
            padding: 2px 2px;
            text-decoration: none;
            margin:5px 5px;
            color: black;
            background-color: transparent;


        }


      

        .navbar li a {  text-decoration: none;
        color: Black;
    font-weight: bold;
font-size: 15px;
background-color: transparent;
}
/* Change the color of links on hover */
.navbar a:hover {
  background-color: #ddd;
  color: black;
}

.video{
  width: 100%;
  height: 100%;
  position: absolute;
  bottom: 0;
  z-index: -100;
  right: 0;
  filter: blur(0.2px);
  /* -webkit-filter: blur(8px); */

}

.video {
  width: 100%;
  height: auto;
}

@media (max-aspect-ratio: 16/9) {
  .video {
    height: 100vh; /* Full height */
    width: auto;
  }
}


.Newbar li{
  list-style: none;
            padding: 2px 2px;
            text-decoration: none;
            margin:5px 5px;
            color: Red;


}
.Newbar li a {text-decoration: none;
        color: burlywood;
    font-weight: bold;
    font-size: 15px;

}
/* Style the video: 100% width and height to cover the entire window */
#myVideo {
  position: fixed;
  right: 0;
  bottom: 0;
  min-width: 100%;
  min-height: 100%;
}

/* Add some content at the bottom of the video/page */
.content {
  position: fixed;
  bottom: 0;
  background: rgba(0, 0, 0, 0.5);
  color: #f1f1f1;
  width: 100%;
  padding: 20px;
}

/* Style the button used to pause/play the video */
#myBtn {
  width: 200px;
  font-size: 18px;
  padding: 10px;
  border: none;
  background: #000;
  color: #fff;
  cursor: pointer;
}

#myBtn:hover {
  background: black;
  color: black;
}


.modi{
  float: left;
}
.Video{
  float: right;
  
}
.Facebook{
  opacity: 1;
}
.Extra{
  opacity: 1;
  padding: 40px;
}
img {
  opacity: 0.1;
}

img:hover {
  opacity: 1.0;
}
.Myimg {
    float: left;
height: 70px;
width: 120px;
opacity: 1.0;

}
.G20 { 
    float: right;
height: 70px;
width: 120px;
opacity: 1.0;

}
/* Style the form element with a border around it */
form {
  border: 4px solid #f1f1f1;
}

/* Add some padding and a grey background color to containers */
.container {
  padding: 20px;
  background-color: #f1f1f1;
}








.latest {text-decoration: none;
        color: Black;
    font-weight: bold;
font-size: 20px;


}
.Va {
  opacity: 0.5;
}
.navbar{
  background-color: transparent;
}

.parent-wrapper {
  position: relative;
  width: 400px;
  height: 270px;
  margin: 40px auto 0;
  background-size: 100%;
  background-repeat: no-repeat;
  background-position-y: -600%;
  background-color: #000;
  border-radius: 4px;
  color: #FFF;
  box-shadow: 0px 0px 50px 5px rgba(0, 0, 0, 0.5);
}

.close-btn {
  margin: 20px;
  font-size: 18px;
  cursor: pointer;
}

.subscribe-wrapper {
  position: absolute;
  left: -30px;
  right: -30px;
  height: 200px;
  padding: 30px;
  background-image: url('https://i.imgur.com/MRjF1PL.png?1');
  background-position-x: 272%;
  background-position-y: -1px;
  background-repeat: no-repeat;
  background-color: #FFF;
  border-radius: 4px;
  color: #333;
  box-shadow: 0px 0px 60px 5px rgba(0, 0, 0, 0.4);
}

.subscribe-wrapper:after {
  position: absolute;
  content: "";
  right: -10px;
  bottom: 71px;
  width: 0;
  height: 0;
  border-left: 0px solid transparent;
  border-right: 10px solid transparent;
  border-bottom: 10px solid #7149c7;
}

.subscribe-wrapper h4 {
  text-align: center;
  font-size: 20px;
  font-weight: bold;
  letter-spacing: 3px;
  line-height: 28px;
}

.subscribe-wrapper input {
  position: right;
  bottom: 30px;
  border: none;
  border-bottom: 1px solid #d4d4d4;
  padding: 10px;
  width: 65%;
  background: transparent;
  transition: all .25s ease;
}

.subscribe-wrapper input:focus {
  outline: none;
  border-bottom: 1px solid #a77cf4;
}

.subscribe-wrapper .submit-btn {
  position: right;
  border-radius: 30px;
  border-bottom-right-radius: 0;
  border-top-right-radius: 0;
  background-color: #a77cf4;
  color: #FFF;
  padding: 12px 25px;
  display: inline-block;
  font-size: 12px;
  font-weight: bold;
  letter-spacing: 2px;
  right: -10px;
  bottom: 30px;
  cursor: pointer;
  transition: all .25s ease;
  box-shadow: -5px 6px 20px 0px rgba(51, 51, 51, 0.4);
}

.subscribe-wrapper .submit-btn:hover {
  background-color: #8e62dc;
}
      h1{
        text-align: center;
        text-decoration: none;
        text-overflow: clip;
       
      }  
        
.vac{
  width: 100px;
  height:50px;
}
.alert {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  width: 600px;
  height: 400px;

  background-size: cover;
  border-radius: 10px;
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
  padding: 20px;
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
}
.alert {
  background-image: url('https://static.vecteezy.com/system/resources/previews/022/255/886/non_2x/construction-background-empty-background-alarm-with-police-line-free-photo.jpg');
  background-size: cover;
  background-position: center;
  background-repeat: no-repeat;
}


.alert img.vac {
  width: 90px;
  height: 90px;
  border-radius: 50%;
  margin-bottom: 10px;
}

.alert strong {
  font-size: 20px;
  margin-bottom: 10px;
}

.alert p {
  font-size: 16px;
  text-align: center;
}

.btn-close {
  position: absolute;
  top: 10px;
  right: 10px;
}

/* Responsive design */
@media (max-width: 768px) {
  .alert {
    width: 100%;
    height: auto;
  }
}
    .text{
      color:white;
    }  
    .p{
      color:white;
    }  
    .btn-close {
  color: white;
}
    </style>

</HEAD>

<body class="bg-light">
    <nav class="navbar navbar-expand-lg navbar-light bg-white px-lg-3 py-lg-2 shadow-sm sticky-top">
        <div class="container-fluid">
            <a class="navbar-brand me-5 fw-bold fs-3 h-font" href="home.php">Vacation</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link me-3" aria-current="page" href="home.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link me-3" href="About us.php">About</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Tickets Booking
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="https://www.makemytrip.com/bus-tickets/">Bus</a></li>
                            <li><a class="dropdown-item" href="https://www.irctc.co.in/nget/">Train</a></li>
                            <li><a class="dropdown-item" href="Railways Tour Packages.php">Railway Tour Package</a></li>
                            <li><a class="dropdown-item" href="https://disneycruise.disney.go.com/ships/adventure/">Ship</a></li>
                            <li><a class="dropdown-item" href="https://www.emirates.com/english/book/">Flight</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link me-3" href="http://localhost/Hotel-Booking/hotel.php">Hotel Booking</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link me-3" href="https://enchanting-naiad-d685e5.netlify.app">Food Order</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link me-3" href="contact.php">Contact us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link me-3" href="Terms.php">Terms & Conditions</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

  
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
       <strong class="text"><b>Important Notice!!</b></strong> <p class="p">  All ticket bookings are sponsored by third-party websites.
          Clicking on any ticket booking will redirect you to their official website. Please note that the redirection is safe and secure.
            We ensure that our partners provide the best possible experience.</p><br>

            <strong class="text"><b>महत्वपूर्ण सूचना!!</b></strong> 
           <p class="p"> सभी टिकट बुकिंग तृतीय-पक्ष वेबसाइटों द्वारा प्रायोजित हैं। किसी भी टिकट बुकिंग पर क्लिक करने से आपको उनकी आधिकारिक वेबसाइट पर रीडायरेक्ट किया जाएगा। कृपया ध्यान दें कि यह रीडायरेक्शन पूरी तरह से सुरक्षित और सुरक्षित है। हम सुनिश्चित करते हैं कि हमारे भागीदार आपको सर्वोत्तम संभव अनुभव प्रदान करें। </p>

           

           
      
           <button type="button" class="btn-close text-white" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>

        <video autoplay muted loop plays-inline class="video">
            <source src="https://videos.pexels.com/video-files/3736780/3736780-uhd_2560_1440_24fps.mp4" type="video/mp4" alt="Travel Video">
        </video>
<br>
<br>
<br>
<br>




 <h1 class=" fw-bold fs-3 h-font"><i>Have you not found the right one?</i></h1>
 <h1 class=" fw-bold fs-3 h-font"><i>Find a service suitable for you here!!</i></h1> 

 <a href="https://enchanting-naiad-d685e5.netlify.app" target="_main" ><img src="https://t3.ftcdn.net/jpg/02/41/30/72/360_F_241307210_MjjaJC3SJy2zJZ6B7bKGMRsKQbdwRSze.jpg" height="150" width="150"  class="Extra"></a>
<a href="https://www.emirates.com/english/book/?pub&utm_source=google&utm_medium=cpc&utm_campaign=GGS_WO_EN_Gen_D_XXX_BE_WO_P&gad_source=1&gclid=CjwKCAjw68K4BhAuEiwAylp3kpR6H0d2fSLg8QX3kMs6_qrLPaAm2IeTaVui1uTpTIOYDjAutfT8oBoChLwQAvD_BwE&gclsrc=aw.ds"  target="_main"> <img src="https://cdn-icons-png.flaticon.com/512/4283/4283062.png" height="150" width="150" class="Extra"></a>
<a href="http://localhost/Hotel-Booking/hotel.php" target="_main"> <img src="https://cdn-icons-png.flaticon.com/256/3009/3009489.png"height="150" width="150" class="Extra"></a>
<a href="https://www.makemytrip.com/bus-tickets/" target="_main"><img src="https://img.freepik.com/premium-vector/minimal-abstract-logo-bus-icon-school-bus-vector-silhouette-isolated-design-template_653669-2867.jpg" height="150" width="150" class="Extra"></a>
<a href="https://www.irctctourism.com/gallery/" target="_main"><img src="https://cdn-icons-png.flaticon.com/512/8377/8377243.png" height="150" width="150" class="Extra"></a>
<a href="https://delhimetrorail.com/" target="_main"><img src="https://cdn-icons-png.flaticon.com/512/10682/10682017.png"   height="150" width="150"         class="Extra"   >      </a>
<a href="http://localhost/Hotel-Booking/hotel.php " target="_main"><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQnTHii_9V3xrH1jeX0c1GlMR3iMmHGkgOMAw&s" height="150" width="150" class="Extra"> </a>
<a href="https://disneycruise.disney.go.com/ships/adventure/?CMP=KAC-DCLFY25Q1DCLINDIGI0028&gad_source=1&gclid=CjwKCAjw68K4BhAuEiwAylp3kuuAnjsskBsfh7MHp2lb50lPP7SYBi5AntZJmF25c3IM0RUpdWYoUhoCAbwQAvD_BwE%2F" target="_main"><img src="https://img.freepik.com/premium-photo/minimalist-cruise-ship-vector-logo_925613-47689.jpg" height="150" width="150" class="Extra" ></a>








  
<div class="parent-wrapper">
  <span class="close-btn glyphicon glyphicon-remove"></span>
  <div class="subscribe-wrapper">
    <h4>SUBSCRIBE TO OUR NEWSLETTER</h4>
    <input type="email" name="email" class="subscribe-input" placeholder="Your e-mail">
    <div class="submit-btn" onclick="location.href='home.php'">SUBMIT</div>
 
    
  </div>
  </div>
</div>
</FORM>





<a href="https://www.facebook.com/profile.php?id=61566877043984" target="_main" ><img src="https://img.freepik.com/premium-vector/blue-social-media-logo_197792-1759.jpg" height="50" width="50"  class="facebook"></a>
<a href="https://x.com/Vacation_TnH?t=nRNMAPn5J5O14keOfqvJvw&s=08"  target="_main"> <img src="https://static.vecteezy.com/system/resources/thumbnails/018/930/745/small/twitter-logo-twitter-icon-transparent-free-free-png.png" height="50" width="50" class="facebook"></a>
<a href="https://youtube.com/user/RailMinIndia" target="_main"> <img src="https://t3.ftcdn.net/jpg/03/00/38/90/360_F_300389025_b5hgHpjDprTySl8loTqJRMipySb1rO0I.jpg"height="50" width="50" class="facebook"></a>
<a href="https://www.instagram.com/vacation_travelnholidays.16/profilecard/?igsh=MW50Z3l5cHh0b2oz" target="_main"><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ6IB5qpWdVHsMpYNy2w_LywTl6mwn6qr39qQ&s" height="50" width="50" class="facebook"></a>






<h6 class="text-center bg-dark text-white ">2024 Vaccation. All Rights Reserved </h6>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    </body>
</HTML>
