<?php
require 'config/config.php';
try {
		$stmt = $connect->prepare('SELECT * FROM room_rental_registrations_apartment WHERE approved = 1 LIMIT 3');
		$stmt->execute();
		$data1 = $stmt->fetchAll(PDO::FETCH_ASSOC);

		$stmt = $connect->prepare('SELECT * FROM room_rental_registrations WHERE approved = 1 LIMIT 3');
		$stmt->execute();
		$data2 = $stmt->fetchAll(PDO::FETCH_ASSOC);

		$data = array_merge($data1, $data2);
} catch (PDOException $e) {
	$errMsg = $e->getMessage();
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Renta-place</title>
    
    <link rel="stylesheet" href="assets/css/main.css">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,600,700,900" rel="stylesheet">
    <style>
.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  max-width: 300px;
  margin: auto;
  text-align: center;
  font-family: arial;
}

.price {
  color: grey;
  font-size: 22px;
}

.card button {
  border: none;
  outline: 0;
  padding: 12px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
  font-size: 18px;
}

.card button:hover {
  opacity: 0.7;
}
</style>


</head>
<body>
    <nav>
        <a class="brandName scrollLink" scrolllink="#header">RENTA-PLACE</a>
        <button class="menuButton">
            <svg class="menuIcon" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M24 6h-24v-4h24v4zm0 4h-24v4h24v-4zm0 8h-24v4h24v-4z"/></svg>
            <svg class="closeIcon" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M23 20.168l-8.185-8.187 8.185-8.174-2.832-2.807-8.182 8.179-8.176-8.179-2.81 2.81 8.186 8.196-8.186 8.184 2.81 2.81 8.203-8.192 8.18 8.192z"/></svg>
        </button>
        <ul>
            <a class="scrollLink" scrolllink="#about">About</a
            ><a class="scrollLink" scrolllink="#template">Template</a
            ><a class="scrollLink" scrolllink="#download">Join Us</a
            ><a class="scrollLink" scrolllink="#contact">Contact</a>
        </ul>
    </nav>
    <header id="header">
        <h1>Make your vacation planning<br> Simpler With renta-place.</h1>
        <ul class="takeActionBtns">
            <a scrolllink="#info" class="download scrollLink">See Our Offers</a>
            <a scrolllink="#about" class="learnMore scrollLink">Learn More</a>
        </ul>
    </header>
    
    <section id="about">
        <h1 class="headerLine">What We Offer</h1>
        <div class="lineContainer"><div class="line"></div></div>
        <p>Planning a vacation or a bussiness trip has never been easier with Renta-place. This is a place where you and others can offer or find a place or space with safety and trust. Every place is checked by our team to insure its quality and its conditions for staying and living</p>
        <br>
        <a scrolllink="#template" class="learnMore scrollLink">Learn More</a>
    </section>
    
    <section id="template">
        <h1 class="headerLine">Our Services</h1>
        <div class="lineContainer"><div class="line"></div></div>
        <div class="row">
            <div class="col">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M18 1h-11.916l-6.084 7 12 15 12-14.917-6-7.083zm-11.667 8l3.231 7.753-6.203-7.753h2.972zm9.167 0l-3.5 8.4-3.5-8.4h7zm-6.365-2l2.865-3.438 2.865 3.438h-5.73zm8.532 2h3.028l-6.283 7.811 3.255-7.811zm2.794-2h-2.992l-3.334-4h2.938l3.388 4zm-13.465-4h2.869l-3.334 4h-3.011l3.476-4z"/></svg>
                <h1>Strong History</h1>
                <p>We have been in this bussiness since 1909, offering travel suites for clients across the world</p>
            </div>
            <div class="col">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M24 10.935v2.131l-8 3.947v-2.23l5.64-2.783-5.64-2.79v-2.223l8 3.948zm-16 3.848l-5.64-2.783 5.64-2.79v-2.223l-8 3.948v2.131l8 3.947v-2.23zm7.047-10.783h-2.078l-4.011 16h2.073l4.016-16z"/></svg>
                <h1>Consistency</h1>
                <p>Always up to date in terms of speed and design</p>
            </div>
            <div class="col">
                <svg width="24" height="24" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill-rule="evenodd" clip-rule="evenodd"><path d="M13.563 24h-11.563c-1.104 0-2-.896-2-2v-20c0-1.104.896-2 2-2h14c1.104 0 2 .896 2 2v4h-2v-3h-14v17h11v2.5c0 .524.182 1.175.563 1.5zm8.937-17c.828 0 1.5.672 1.5 1.5v14c0 .826-.671 1.5-1.5 1.5h-7c-.829 0-1.5-.675-1.5-1.5v-14c0-.827.673-1.5 1.5-1.5h7zm-13.5 14c.552 0 1 .448 1 1s-.448 1-1 1-1-.448-1-1 .448-1 1-1zm10 2c-.553 0-1-.448-1-1s.447-1 1-1c.552 0 .999.448.999 1s-.447 1-.999 1zm4-3v-10.024h-8v10.024h8zm-3.5-11c.275 0 .5-.224.5-.5s-.225-.5-.5-.5h-1c-.276 0-.5.224-.5.5s.224.5.5.5h1z"/></svg>
                <h1>Responsive</h1>
                <p>Available from any and every device.</p>
            </div>
        </div>
    </section>
    
    <section id="download">
        <h1 class="headerLine">Join Today!</h1>
        <div class="lineContainer"><div class="line"></div></div>
        <p>No subscription needed! Sign up, find what you like or what you offer, and we'll have our team meet with you under our Terms of Agreements and Privacy</p>
        <br>
        <a href="auth/login.php">SIGN UP</a>
    </section>
    <section id="info">
    <?php
				foreach ($data as $key => $value) { ?>
					<form method="get" class="approve-form">
					<?php
                    echo '<div class="card card-inverse card-info mb-3" style="border-radius: 10px; padding:1%; background-image: url('. 'app/' . $value['image'] .'); background-size: cover; justify-content: center;display: flex; background-repeat: no-repeat; align-items: center; background-position: center; margin-bottom: 25px;">					
								  <div class="card-block";>';
					echo 	'<div class="row"">
											<div class="col">';
					echo '<p><b>Contact Number: </b>' . $value['mobile'] . '</p>';
					echo '<p><b>Email: </b>' . $value['email'] . '</p>';
					echo '<p><b>Country: </b>' . $value['country'] . '</p><p><b> State: </b>' . $value['state'] . '</p><p><b> City: </b>' . $value['city'] . '</p>';
			

					if (isset($value['ap_number_of_plats']))
						echo '<div class="alert alert-success" role="alert"><p><b>Flat Number: </b>' . $value['ap_number_of_plats'] . '</p></div>';
					if (isset($value['floor'])) {
						echo '<p><b>Floor: </b>' . $value['floor'] . '</p>';
                        echo '<p><b>Available Area: </b>' . $value['area'] . '</p>';
                        echo '<p><b>Purpose: </b>' . $value['purpose'] . '</p>';
					}
                    echo '<p><b>Owner/Rental: </b>' . $value['fullname'] . '</p>';
					echo '<p><b>Available Rooms: </b>' . $value['rooms'] . '</p><br>';
					if ($value['vacant'] == 0) {
						echo '<div class="alert alert-danger" role="alert"><p><b>Occupied</b></p></div>';
					} else {
						echo  '<br>
                        <ul class="takeActionBtns">
                        </ul><br>';
					}
                    echo '<br><a href="auth/login.php" class="learnMore scrollLink" style="border: 1px solid white; padding:9px; border-radius: 12px; color: black; text-decoration: none"><b>INTERESTED</b></a><br>';
					echo '</div>
										</div>				      
								   </div>
								</div>';
				}
					?>
                    
                    </section>

    <section id="contact">
        <h1 class="headerLine">Contact Us</h1>
        <div class="lineContainer"><div class="line"></div></div>
        <p class="desc">We have a team on standby 24/7 ready for your questions with fast responses for our services.</p>
        <ul class="contactInfo">
            <li>
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M20 22.621l-3.521-6.795c-.008.004-1.974.97-2.064 1.011-2.24 1.086-6.799-7.82-4.609-8.994l2.083-1.026-3.493-6.817-2.106 1.039c-7.202 3.755 4.233 25.982 11.6 22.615.121-.055 2.102-1.029 2.11-1.033z"/></svg>
                <br>
                <p>192</p>
            </li>
            <li>
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M0 3v18h24v-18h-24zm21.518 2l-9.518 7.713-9.518-7.713h19.036zm-19.518 14v-11.817l10 8.104 10-8.104v11.817h-20z"/></svg>
                <br>
                <p><a href="mailto:contact@example.com" target="_top">rentaplace@gmail.com</a></p>
            </li>
        </ul>
    </section>
    
    <footer>
        <ul class="links">
            <a href="#">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z"/></svg>
            </a
            ><a href="#">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z"/></svg>
            </a
            ><a href="#">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M9 8h-3v4h3v12h5v-12h3.642l.358-4h-4v-1.667c0-.955.192-1.333 1.115-1.333h2.885v-5h-3.808c-3.596 0-5.192 1.583-5.192 4.615v3.385z"/></svg>
            </a>
        </ul>
        <p class="copyright">&copy; Renta-place</p>
    </footer>

    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/jquery.easing.min.js"></script>
    <script>

    window.onscroll = checkNavClassNameHeaderType;
    window.onload = checkNavClassNameHeaderType;

    function checkNavClassNameHeaderType(){
        if(document.getElementsByTagName("html")[0].scrollTop > 0){
            $("nav").addClass("nonTopNav");
        }else{
            $("nav").removeClass("nonTopNav");;
        }
    }

    $("nav button.menuButton").on("click",function(){
        $("body").toggleClass("activeNavLinks");
    });

    $(".scrollLink").on("click",function(){
        $("body").removeClass("activeNavLinks");
        var scrollTo = this.getAttribute("scrolllink");
        if(window.innerWidth <= 500){
            $('html, body').animate({scrollTop: $(scrollTo).offset().top - 65}, 600,'easeInOutExpo');
        }else{
            $('html, body').animate({scrollTop: $(scrollTo).offset().top - 50}, 600,'easeInOutExpo');
        }
    });

    </script>
</body>
</html>