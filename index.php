<?php
 if($_COOKIE['user'] == ''):
   header('Location: login.php')
 ?>

<?php else: ?>

<!DOCTYPE html>
<html style="font-size: 16px;">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="TRUST US YOUR PREFERENCES!">
    <meta name="description" content="">
    <meta name="page_type" content="np-template-header-footer-from-plugin">

    <link rel="stylesheet" href="nicepage.css" media="screen">
    <link rel="stylesheet" href="HOME.css" media="screen">
    <link rel="stylesheet" href="style.css" media="screen">

    <script class="u-script" type="text/javascript" src="jquery.js" defer=""></script>
    <script class="u-script" type="text/javascript" src="nicepage.js" defer=""></script>

    <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i">
    <link id="u-page-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Titillium+Web:200,200i,300,300i,400,400i,600,600i,700,700i,900">

    <meta property="og:title" content="HOME">
    <meta property="og:type" content="website">

    <title>Laptops advertisement website</title>

    <script class="u-script" type="text/javascript" src="jquery.js" defer=""></script>
    <script class="u-script" type="text/javascript" src="nicepage.js" defer=""></script>

    <style>
     #map {
       height: 500px;
       width: 900px;
       margin-right: 200px;
       margin-top: 30px;
       margin-left: 250px;
       margin-bottom: 100px;
       border: 3px;
       border-radius: 25px;
       box-shadow: 10px 15px 5px #7FFFD4;
     }

     .container8 {
       margin-top: 100px;
       padding: 32px;
     }

     .select-box {
       position: relative;
       display: flex;
       width: 400px;
       flex-direction: column;
     }

     .select-box .options-container {
       background: #2f3640;
       color: #f5f6fa;
       max-height: 0;
       width: 100%;
       opacity: 0;
       transition: all 0.4s;
       border-radius: 8px;
       overflow: hidden;

       order: 1;
     }

     .selected {
       background: #2f3640;
       border-radius: 8px;
       margin-bottom: 8px;
       color: #f5f6fa;
       position: relative;

       order: 0;
     }

     .selected::after {
       content: "";
       background: url("assets/arrow-down.svg");
       background-size: contain;
       background-repeat: no-repeat;

       position: absolute;
       height: 100%;
       width: 32px;
       right: 10px;
       top: 5px;

       transition: all 0.4s;
     }

     .select-box .options-container.active {
       max-height: 240px;
       opacity: 1;
       overflow-y: scroll;
       margin-top: 54px;
     }

     .select-box .options-container.active + .selected::after {
       transform: rotateX(180deg);
       top: -6px;
     }

     .select-box .options-container::-webkit-scrollbar {
       width: 8px;
       background: #0d141f;
       border-radius: 0 8px 8px 0;
     }

     .select-box .options-container::-webkit-scrollbar-thumb {
       background: #525861;
       border-radius: 0 8px 8px 0;
     }

     .select-box .option,
     .selected {
       padding: 12px 24px;
       cursor: pointer;
     }

     .select-box .option:hover {
       background: #414b57;
     }

     .select-box label {
       cursor: pointer;
     }

     .select-box .option .radio {
       display: none;
     }

     /* Searchbox */

     .search-box input {
       width: 100%;
       padding: 12px 16px;
       font-family: "Roboto", sans-serif;
       font-size: 16px;
       position: absolute;
       border-radius: 8px 8px 0 0;
       z-index: 100;
       border: 8px solid #2f3640;

       opacity: 0;
       pointer-events: none;
       transition: all 0.4s;
     }

     .search-box input:focus {
       outline: none;
     }

     .select-box .options-container.active ~ .search-box input {
       opacity: 1;
       pointer-events: auto;
     }
     .u-clearfix.u-image.u-section-1 {
      background-image: url("assets/background.png");
     }
     h5{
      color: white;
     }
     .categories1.small-container.row{
      margin-bottom: 500px;
      padding-bottom: 5000px;
     }

     .u-image.u-logo.u-image-1{
      width: 15%;

     }
   </style>

    <meta property="og:title" content="HOME">
    <meta property="og:type" content="website">
  </head>




  <body class="u-body u-xl-mode">
    <header class="u-black u-clearfix u-header u-header" id="sec-adc2">
      <div class="u-clearfix u-sheet u-sheet-1">



    <form action="cabinet.php" method = "post">
        <a href="index.php" class="u-image u-logo u-image-1" data-image-width="690" data-image-height="388">
          <img src="assets/ezgif.com-gif-maker.gif" class="u-logo-image u-logo-image-1" style="width: 200%;">
        </a>
        <a href="HOME.php" data-page-id="333829213" class="u-border-1 u-border-active-palette-2-base u-border-hover-palette-1-base u-btn u-button-style u-none u-text-palette-1-base u-btn-1">
          <br>
        </a>

        <nav class="u-menu u-menu-dropdown u-offcanvas u-menu-1">
          <div class="u-custom-menu u-nav-container">
            <ul class="u-nav u-spacing-0 u-unstyled u-nav-1">
              <li class="u-nav-item"><a class="u-border-2 u-border-active-grey-30 u-border-grey-30 u-border-hover-grey-30 u-border-no-bottom u-border-no-left u-border-no-top u-button-style u-nav-link u-text-active-custom-color-2 u-text-hover-palette-1-base u-text-white" href="index.php" style="padding: 0px 20px;">HOME</a></li>
              <li class="u-nav-item"><a class="u-border-2 u-border-active-grey-30 u-border-grey-30 u-border-hover-grey-30 u-border-no-bottom u-border-no-left u-border-no-top u-button-style u-nav-link u-text-active-custom-color-2 u-text-hover-palette-1-base u-text-white" href="profile.php" style="padding: 0px 20px;">Account</a></li>
              <li class="u-nav-item"><a class="u-border-2 u-border-active-grey-30 u-border-grey-30 u-border-hover-grey-30 u-border-no-bottom u-border-no-left u-border-no-top u-button-style u-nav-link u-text-active-custom-color-2 u-text-hover-palette-1-base u-text-white" href="Contacts.html" style="padding: 0px 20px;">Contacts</a></li>
              <li class="u-nav-item"><a class="u-border-2 u-border-active-grey-30 u-border-grey-30 u-border-hover-grey-30 u-border-no-bottom u-border-no-left u-border-no-top u-button-style u-nav-link u-text-active-custom-color-2 u-text-hover-palette-1-base u-text-white" href="login.php" style="padding: 0px 20px;">Sign In</a>
            </ul>
          </div>

          <ul id="Menuitems">
    <div class="container">
      <div class="select-box">
        <div class="options-container">
          <div class="option">
            <input type="radio" class="radio" id="applemacbookprom1" name="category"/>
            <a href="prodPage/applemac.php"><label for="apple">Apple MacBook Pro M1 13</label></a>
          </div>

          <div class="option">
            <input type="radio" class="radio" id="asusrogstrixg15" name="category" />
            <a href="prodPage/asus.php"><label for="asusrog">Asus Rog Strix G15 G513IH</label></a>
          </div>

          <div class="option">
            <input src="predator.html" type="radio" class="radio" id="AcerPredator" name="category" />
            <a href="prodPage/predator.php"><label for="Acer">Acer Predator Triton 300SE</label></a>
          </div>

          <div class="option">
            <input type="radio" class="radio" id="Lenovo" name="category" />
            <a href="prodPage/ideapad.php"><label for="LenovoIdeapad">Lenovo Ideapad 3 15ALC6</label></a>
          </div>

          <div class="option">
            <input type="radio" class="radio" id="Razer" name="category" />
            <a href="prodPage/blackshark.php"><label for="RazerBlackshark">Razer Blackshark V2 X</label></a>
          </div>

          <div class="option">
            <input type="radio" class="radio" id="LogitechG102" name="category" />
            <a href="prodPage/log.php"><label for="logitech">Logitech G102</label></a>
          </div>

          <div class="option">
            <input type="radio" class="radio" id="BeyerdynamicDT" name="category" />
            <a href="prodPage/beyer.php"><label for="Beyerdynamic">Beyerdymanic DT 240 PRO</label></a>
          </div>

          <div class="option">
            <input type="radio" class="radio" id="Victus" name="category" />
            <a href="prodPage/victus.php"><label for="HPVictus">HP Victus 16-e0010ur</label></a>
          </div>

          <div class="option">
            <input type="radio" class="radio" id="DefenderMasterCHAIR" name="category" />
            <a href="prodPage/defender.php"><label for="DefenderMaster">Defender Master</label></a>
          </div>
        </div>

        <div class="selected">
          Select the product
        </div>
        
        <div class="search-box">
          <input style="color: #000000;" type="text" placeholder="Type the name of the product..." />
        </div>
      </div>
    </div>
          </a>
          </ul>
        </nav>
      </div>
    </header>

    <section class="u-clearfix u-image u-section-1" id="sec-59ed" data-image-width="3840" data-image-height="2160">
      <div class="u-clearfix u-sheet u-sheet-1">
        <h2 class="u-custom-font u-font-titillium-web u-text u-text-white u-text-1" data-animation-name="customAnimationIn" data-animation-duration="1000" data-animation-direction="">TAKE WHAT YOU WANT!</h2>
        <a href="allprod.php" class="u-border-6 u-border-hover-custom-color-8 u-border-white u-bottom-left-radius-0 u-bottom-right-radius-0 u-btn u-button-style u-custom-font u-font-titillium-web u-none u-radius-0 u-text-hover-custom-color-8 u-text-white u-top-left-radius-0 u-top-right-radius-0 u-btn-1" data-animation-name="customAnimationIn" data-animation-duration="2000" data-animation-direction="X">LET'S CHOOSE</a>
      </div>
    </section>


    <section class="u-clearfix u-gradient u-section-2" id="sec-5ba8">
      <div class="u-clearfix u-sheet u-sheet-1">

        <div class="emptyBackground">
	<div class="categories">
		<div class="small-container">
			<h2 class="u-custom-font u-font-titillium-web u-text u-text-white u-text-1" style="  margin: 0 auto 80px; text-align: center;">Categories</h2>
			<div class="row">
				<div class="col-3">
					<a href="gamelap.html"><img src="assets/categ1.jpg" style="width: 350px; height: 250px;" title="Gaming Laptops"></a>
				</div>
				<div class="col-3">
					<a href="studylap.html"><img src="assets/categ2.jpg" style="width: 350px; height: 250px;" title="Studying Laptops"></a>
				</div>
				<div class="col-3">
					<a href="periphery.html"><img src="assets/categ3.jpg" style="width: 350px; height: 250px;" title="Devices"></a>
				</div>
			</div>
		</div>
	</div>

	<div class="categories1">
		<div class="small-container">
			<h2 class="u-custom-font u-font-titillium-web u-text u-text-white u-text-1" style="  margin: 0 auto 80px; text-align: center;">Featured Products</h2>
			<div class="row">
				<div class="col-4">
					<a href="prodPage/applemac.php">
					<img src="assets/f_apple.png" style="width: 230px; height: 230px;">
					<h5>Apple MacBook Pro M1 13</h5>
					</a>
				</div>
				<div class="col-4">
					<a href="prodPage/asus.php">
					<img src="assets/f_asus.png" style="width: 230px; height: 230px;">
					<h5>ASUS ROG STRIX G15</h5>
				</a>
				</div>
				<div class="col-4">
					<a href="prodPage/log.php">
					<img src="assets/f_log.png" style="width: 230px; height: 230px;">
					<h5>Logitech G102</h5>
				</a>
				</div>
				<div class="col-4">
          <a href="prodPage/beyer.php">
					<img src="assets/f_beyer.png" style="width: 230px; height: 230px;">
					<h5>Beyerdinamic DT 240 Pro</h5>
          </a>
				</div>
			</div>
		</div>
	</div>

  <h2 class="u-custom-font u-font-titillium-web u-text u-text-white u-text-1" style="  margin: 0 auto 80px; text-align: center;">List of electronic devices store</h2>
    <div class = "row">
      <div id = "map"></div>
    </div>

    <script src = "https://maps.googleapis.com/maps/api/js?key=AIzaSyA-EE7EabIM9Hvh0mF5Z-DDWrWXmAdaPV4&callback=initMap" async defer></script>

    <script>
      function initMap(){
      var loc = {lat: 51.175167, lng: 71.418098 } ;
      var map = new google.maps.Map(document.getElementById('map'), {
        center: loc,
        zoom: 17
      });
      var marker = new google.maps.Marker( {
        map: map,
        position: loc,
        title: '?????????? ??????????'
      });
              }
    </script>

    <script type="text/javascript">
      const selected = document.querySelector(".selected");
      const optionsContainer = document.querySelector(".options-container");
      const searchBox = document.querySelector(".search-box input");
      const optionsList = document.querySelectorAll(".option");
      selected.addEventListener("click", () => {
      optionsContainer.classList.toggle("active");
      searchBox.value = "";
      filterList("");
      if (optionsContainer.classList.contains("active")) {
        searchBox.focus();
      }
    });
      optionsList.forEach(o => {
        o.addEventListener("click", () => {
          selected.innerHTML = o.querySelector("label").innerHTML;
          optionsContainer.classList.remove("active");
        });
      });
      searchBox.addEventListener("keyup", function(e) {
        filterList(e.target.value);
        });
        const filterList = searchTerm => {
          searchTerm = searchTerm.toLowerCase();
          optionsList.forEach(option => {
          let label = option.firstElementChild.nextElementSibling.innerText.toLowerCase();
            if (label.indexOf(searchTerm) != -1) {
              option.style.display = "block";
              } else {
                option.style.display = "none";
              }
          });
        };
      </script>

      <script type = "module">
        let hide = document
      </script>
    </div>
  </section>

  </form>
  
 <?php
     if($_COOKIE['user'] == true):
     ?>
  <div class="wrapper">


 <div class="container">
      <div class="image">
       <img src="assets/cookies.png" alt="">
      </div>
      <div class="text">
        <header style="color: white;">Cookies</header>
      </div>
    </div>


    
    <div class="content">
      
     <p style="color: white; font-size: 20px;">
         Welcome, <?php echo $_COOKIE['user'];
         session_start();

        
         ?>
         <?php
         echo $counter;?>
         !
    </p>
    <p>We use cookies to make your experience of our websites better. By using and further navigating this website you accept this. Detailed information about the use of cookies on this website is available by clicking on more information.</p>
      <div class="buttons">
        <button class="item">Accept and close</button>
        <a href="https://en.wikipedia.org/wiki/HTTP_cookie" class="item">Learn more</a>
      </div>
    </div>
  </div>
   
  <?php endif; ?>
    
      
     
  
    

    <style type="text/css">

.container {
  display: flex;
  align-items: center;
  justify-content: center
}

img {
  max-width: 100%
}

.image {
  flex-basis: 40%;
  padding-left: 460px;
}

.text {
  font-size: 40px;
padding-right: 500px;
}



      .wrapper{
  position: fixed;
 bottom: 0px;
  width: 100%;
    background: #000;
  opacity: 0.9;
 
  box-shadow: 1px 7px 14px -5px rgba(0,0,0,0.15);
  text-align: center;
  z-index: 1;
}
.wrapper.hide{
  opacity: 0;
  pointer-events: none;
  transform: scale(0.8);
  transition: all 0.3s ease;
}
::selection{
  color: #fff;
  background: #FCBA7F;
}
.wrapper img{
  max-width: 90px;
}
.content header{
  font-size: 25px;
  font-weight: 600;
}
.content{
  margin-top: 10px;
}
.content p{
  color: #858585;
  margin: 5px 0 20px 0;
}
.content .buttons{
  display: flex;
  align-items: center;
  justify-content: center;
}
.buttons button{
  padding: 10px 20px;
  border: none;
  outline: none;
  color: #fff;
  font-size: 16px;
  font-weight: 500;
  border-radius: 5px;
  background: #FCBA7F;
  cursor: pointer;
  transition: all 0.3s ease;
}
.buttons button:hover{
  transform: scale(0.97);
}
.buttons .item{
  margin: 0 10px;
}
.buttons a{
  color: #FCBA7F;
}

    </style>
    

    <script>
    const cookieBox = document.querySelector(".wrapper"),
    acceptBtn = cookieBox.querySelector("button");
    acceptBtn.onclick = ()=>{
      //setting cookie for 1 month, after one month it'll be expired automatically
      document.cookie = "CookieBy=CodingNepal; max-age="+60*60*24*30;
      if(document.cookie){ //if cookie is set
        cookieBox.classList.add("hide"); //hide cookie box
      }else{ //if cookie not set then alert an error
        alert("Cookie can't be set! Please unblock this site from the cookie setting of your browser.");
      }
    }
    let checkCookie = document.cookie.indexOf("CookieBy=CodingNepal"); //checking our cookie
    //if cookie is set then hide the cookie box else show it
    checkCookie != -1 ? cookieBox.classList.add("hide") : cookieBox.classList.remove("hide");
  </script>

  </body>
</html>

<?php endif; ?>
