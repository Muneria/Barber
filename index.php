<?php
try{
    $db=new mysqli("localhost","root","","barber");

}catch (Exception $exc){
    echo $exc->getTraceAsString("localhost","root","","barber");
}
if(isset($_POST['name'])&&isset($_POST['email'])&&isset($_POST['message'])){

    $name=$_POST['name'];
    $email=$_POST['email'];
    $message=$_POST['message'];



    $is_insert= $db->query("INSERT INTO `barber form`(`Name`, `Email`, `Message`) VALUES ('$name','$email','$message')");
}
if($is_insert ==TRUE){
    echo "<h2>Message Send!</h2>>";
    exit();
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Barber shop</title>
    <link rel="icon" href="img/barber7.png"class="icon">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.4/css/fontawesome.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kaushan+Script&family=Poppins:ital,wght@0,200;0,300;0,400;0,700;1,600;1,700&display=swap" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/gh/cferdinandi/smooth-scroll/dist/smooth-scroll.polyfills.min.js"></script>

</head>
<body>
<section id="banner">
    <h1 class="logo">FLAMES</h1>
    <div class="banner-text">
        <h1>Flames Barber</h1>
        <p>Style your hair is styling your life</p>
        <div class="banner-btn">
            <a href="#feature"><span></span>Find out</a>
            <a href="#service"><span></span>Read more</a>
        </div>
    </div>
</section>
<div id="sideNav">
    <nav>
        <ul>
            <li><a href="#banner">HOME</a></li>
            <li><a href="#feature">FEATURES</a></li>
            <li><a href="#service">SERVICES</a></li>
            <li><a href="#testimonial">TESTIMONIALS</a></li>
            <li><a href="#footer">CONTACT US</a></li>
        </ul>
    </nav>
    <div id="menuBtn">
        <img src="img/pic4.png" id="menu">
    </div>
</div>

<!--=========features=====-->
<section id="feature">
    <div class="title-text">
        <p>FEATURES</p>
        <h1>Why Choose Us</h1>
    </div>
    <div class="feature-box">
        <div class="features">
            <h1>Highly Trained Personnel</h1>
            <div class="features-desc">
                <div class="feature-icon">
                    <i class="fa fa-shield" ></i>
                </div>
                <div class="feature-text">
                    <p>We have a good trained staff to satisfy your needs. They are self-motivated and work under minimal supervision</p>
                </div>
            </div>
            <h1>Large number of barbers</h1>
            <div class="features-desc">
                <div class="feature-icon">
                    <i class="fa fa-users" ></i>
                </div>
                <div class="feature-text">
                    <p>We have many barbers to enhance faster services to reduce congestions in the site</p>
                </div>
            </div>
            <h1>Pre booking Online</h1>
            <div class="features-desc">
                <div class="feature-icon">
                    <i class="fa fa-calendar-check-o" ></i>
                </div>
                <div class="feature-text">
                    <p>We run an online booking site incase you want to book a special attention to your hair.</p>
                </div>
            </div>
        </div>
        <div class="features-img">
            <img src="img/barber9.png" alt="">
        </div>
    </div>

</section>


<!--======services====-->

<secton id="service">
    <div class="title-text">
        <p>SERVICES</p>
        <h1>We provide the best services you have ever imagined</h1>
    </div>
    <div class="service-box">
        <div class="single-service"><img src="img/barber5.png" alt="">
        <div class="overlay"></div>
            <div class="service-desc">
                <h3>Hair styling</h3>
                <hr>
                <p>We have the best hair stylists who are well-trained in different hairstyles</p>
            </div>
        </div>
        <div class="single-service"><img src="img/barber2.png" alt="">
            <div class="overlay"></div>
            <div class="service-desc">
                <h3>Dry shampoo</h3>
                <hr>
                <p>We provide dry shampoo to absorb dirt and freshen hair,at the cheapest price </p>
            </div>
        </div>
        <div class="single-service"><img src="img/barber6.png" alt="">
            <div class="overlay"></div>
            <div class="service-desc">
                <h3>Beard trim</h3>
                <hr>
                <p>Visit us for the best beard trims techniques that are good for your skin</p>
            </div>

        </div>
        <div class="single-service"><img src="img/barber4.png" alt="">
            <div class="overlay"></div>
            <div class="service-desc">
                <h3>Scrubbing</h3>
                <hr>
                <p>We offer a free scrubbing service after one has shaved or beard trim</p>
            </div>
        </div>

    </div>
</secton>

<!--====testimonial==-->

<section id="testimonial">
    <div class="title-text">
        <p>TESTIMONIALS</p>
        <h1>Sayings from our various clients</h1>
    </div>
    <div class="testimonial-row">
        <div class="testimonial-col">
            <div class="user">
                <img src="img/evanso.png" alt="">
                <div class="user-info"><h4>Evans  <i class="fa fa-twitter" ></i></h4>
                <small>@olympia</small>
                </div>
            </div>
            <p>I will never choose another place. This is my shaving point till my death </p></div>
        <div class="testimonial-col">
            <div class="user">
                <img src="img/dero.png" alt="">
                <div class="user-info"><h4>Derick  <i class="fa fa-twitter" ></i></h4>
                    <small>@deroo</small>
                </div>
            </div>
            <p>I have never seen a barber shop like Flames,the workers are really determined to make you smile</p></div>
        <div class="testimonial-col">
            <div class="user">
                <img src="img/abby.png" alt="">
                <div class="user-info"><h4>Abigael <i class="fa fa-twitter" ></i></h4>
                    <small>@abbydee</small>
                </div>
            </div>
            <p>My man's hair was attended to by one of the barbers in Flames,he is happy ever since. I think Flames is the best choice</p></div>
    </div>

</section>

<!--====footer===-->
<section id="footer">
    <img src="img/barber8.png" alt="flames barber"class="footer-img">
    <div class="title-text">
        <p>CONTACT</p>
        <h1>Get in touch with us today</h1>
    </div>
    <div class="footer-row">
        <div class="footer-left">
            <h1>Opening Hours</h1>
            <p><i class="fa fa-clock-o" ></i>Monday to Friday-8am to 8pm</p>
            <p><i class="fa fa-clock-o" ></i>Saturday and Sunday-10am to 8pm</p>
        </div>
        <div class="footer-right">
            <h1>CONTACT US
                <hr></h1>
            <form action=""method="POST" id="my-form">
                <label for="name">Name <iclass="fa fa-asterisk"></i></label>
                <input type="text"id="namee"name="name"placeholder="Enter your Name"><br>
                <label for="email">Email<iclass="fa fa-asterisk"></i></label>
                <input type="email"id="emaill"name="email"placeholder="Enter your Email"><br>
                <textarea name="message" id="texta" cols="30" rows="5"placeholder="Write your message here"></textarea><br>
                <input type="submit"value="Send Message"><br>
            </form>
        </div>
    </div>
    <div class="get-in">
        <h1>Get in touch</h1>
        <p>flamesbarbers@gmail.com<i class="fa fa-paper-plane" ></i></p>
        <p>4639 Kitale KENYA<i class="fa fa-map-marker" ></i></p>
        <p>+254717805360<i class="fa fa-phone" ></i></p>
    </div>
    <div class="maps">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3989.208819860032!2d35.00461371392431!3d1.0015061628766144!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x178227901480c69b%3A0xaaa7e3015ced2e57!2sKitale%20club!5e0!3m2!1sen!2ske!4v1646113716173!5m2!1sen!2ske" width="100%" height="200" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
    </div>
    <div class="social-links">
        <a href="https://www.facebook.com/bruce.muneria.9"><i class="fa fa-facebook" ></i></a>
        <a href="https://www.instagram.com/muchina_._/"> <i class="fa fa-instagram" ></i></a>
        <a href="https://www.linkedin.com/in/brucelee-muneria-a91177230/"></a> <i class="fa fa-linkedin" ></i>
        <a href="https://twitter.com/sheelkenya"><i class="fa fa-twitter" ></i></a>
        <p>Designed by <a href="https://github.com/Muneria"><i class="fa fa-github" ></i></a>Brucelee Muneria</p>

    </div>


</section>





<script src="https://use.fontawesome.com/fcd40d745f.js"></script>
<script>
    var menuBtn=document.getElementById("menuBtn")
    var sideNav=document.getElementById("sideNav")
    var menu=document.getElementById("menu")
    sideNav.style.right="-250px"
    menuBtn.onclick=function (){
        if (sideNav.style.right=="-250px"){
            sideNav.style.right="0";
            menu.src="img/close.png";
        }
        else{
            sideNav.style.right="-250px";
            menu.src="img/pic4.png";
        }
    }
    var scroll = new SmoothScroll('a[href*="#"]', {
        speed: 1000,
        speedAsDuration: true
    });
</script>
</body>
</html>