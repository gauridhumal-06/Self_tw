<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

      <!-- <link rel="icon" type="image/x-icon" href="E:\Udemy\Web Development\hospital website\plus.ico"> -->
    <title>IT Comapny</title>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/style.css">
<style>@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700&display=swap');

:root{
    --green:#000080;
    --black:#444;
    --light-color:#777;
    --box-shadow:.5rem .5rem 0 rgba(22, 160, 133, .2);
    --text-shadow:.4rem .4rem 0 rgba(0, 0, 0, .2);
    --border:.2rem solid var(--green);
}

*{
    font-family: 'Poppins', sans-serif;
    margin:0; padding: 0;
    box-sizing: border-box;
    outline: none; border: none;
    text-transform: capitalize;
    transition: all .2s ease-out;
    text-decoration: none;
}

html{
    font-size: 62.5%;
    overflow-x: hidden;
    scroll-padding-top: 7rem;
    scroll-behavior: smooth;
}

section{
    padding:2rem 9%;
}

section:nth-child(even){
    background: #f5f5f5;
}

.heading{
    text-align: center;
    padding-bottom: 2rem;
    text-shadow: var(--text-shadow);
    text-transform: uppercase;
    color:var(--black);
    font-size: 5rem;
    letter-spacing: .4rem;
}

.heading span{
    text-transform: uppercase;
    color:var(--green);
}

.btn{
    display: inline-block;
    margin-top: 1rem;
    padding: .5rem;
    padding-left: 1rem;
    border:var(--border);
    border-radius: .5rem;
    box-shadow: var(--box-shadow);
    color:var(--green);
    cursor: pointer;
    font-size: 1.7rem;
    background: #fff;
}

.btn span{
    padding:.7rem 1rem;
    border-radius: .5rem;
    background: var(--green);
    color:#fff;
    margin-left: .5rem;
}

.btn:hover{
    background: var(--green);
    color:#fff;
}

.btn:hover span{
    color: var(--green);
    background:#fff;
    margin-left: 1rem;
}

.header{
    padding:2rem 9%;
    position: fixed;
    top:0; left: 0; right: 0;
    z-index: 1000;
    box-shadow: 0 .5rem 1.5rem rgba(0, 0, 0, .1);
    display: flex;
    align-items: center;
    justify-content: space-between;
    background: #fff;
}
.image{
  height:50%;
  width:50%;
  padding-left:20px;
  padding-right: 20px;
}



.header .logo{
    font-size: 2.5rem;
    color: var(--black);
}

.header .logo i{
    color: var(--green);
}

.header .navbar a{
    font-size: 1.7rem;
    color: var(--light-color);
    margin-left: 2rem;
}

.header .navbar a:hover{
    color: var(--green);
}

#menu-btn{
    font-size: 2.5rem;
    border-radius: .5rem;
    background: #eee;
    color:var(--green);
    padding: 1rem 1.5rem;
    cursor: pointer;
    display: none;
}

.home{
    display: flex;
    align-items: center;
    flex-wrap: wrap;
    gap:1.5rem;
    padding-top: 10rem;
}

.home .image{
    flex:1 1 45rem;
}

.home .image img{
    width: 100%;
}

.home .content{
    flex:1 1 45rem;
}

.home .content h3{
    font-size: 4.5rem;
    color:var(--black);
    line-height: 1.8;
    text-shadow: var(--text-shadow);
}

.home .content p{
    font-size: 1.7rem;
    color:var(--light-color);
    line-height: 1.8;
    padding: 1rem 0;
}

.icons-container{
    display: grid;
    gap:2rem;
    grid-template-columns: repeat(auto-fit, minmax(20rem, 1fr));
    padding-top: 5rem;
    padding-bottom: 5rem;
}

.icons-container .icons{
    border:var(--border);
    box-shadow: var(--box-shadow);
    border-radius: .5rem;
    text-align: center;
    padding: 2.5rem;
}

.icons-container .icons i{
    font-size: 4.5rem;
    color:var(--green);
    padding-bottom: .7rem;
}

.icons-container .icons h3{
    font-size: 4.5rem;
    color:var(--black);
    padding: .5rem 0;
    text-shadow: var(--text-shadow);
}

.icons-container .icons p{
    font-size: 1.7rem;
    color:var(--light-color);
}

.services .box-container{
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(27rem, 1fr));
    gap:2rem;
}

.services .box-container .box{
    background:#fff;
    border-radius: .5rem;
    box-shadow: var(--box-shadow);
    border:var(--border);
    padding: 2.5rem;
}

.services .box-container .box i{
    color: var(--green);
    font-size: 5rem;
    padding-bottom: .5rem;
}

.services .box-container .box h3{
    color: var(--black);
    font-size: 2.5rem;
    padding:1rem 0;
}

.services .box-container .box p{
    color: var(--light-color);
    font-size: 1.4rem;
    line-height: 2;
}

.about .row{
    display: flex;
    align-items: center;
    flex-wrap: wrap;
    gap:2rem;
}

.about .row .image{
    flex:1 1 45rem;
}

.about .row .image img{
    width: 100%;
}

.about .row .content{
    flex:1 1 45rem;
}

.about .row .content h3{
    color: var(--black);
    text-shadow: var(--text-shadow);
    font-size: 4rem;
    line-height: 1.8;
}

.about .row .content p{
    color: var(--light-color);
    padding:1rem 0;
    font-size: 1.5rem;
    line-height: 1.8;
}

.doctors .box-container{
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(30rem, 1fr));
    gap:2rem;
}

.doctors .box-container .box{
    text-align: center;
    background:#fff;
    border-radius: .5rem;
    border:var(--border);
    box-shadow: var(--box-shadow);
    padding:2rem;
}

.doctors .box-container .box img{
    height: 20rem;
    border:var(--border);
    border-radius: .5rem;
    margin-top: 1rem;
    margin-bottom: 1rem;
}

.doctors .box-container .box h3{
    color:var(--black);
    font-size: 2.5rem;
}

.doctors .box-container .box span{
    color:var(--green);
    font-size: 1.5rem;
}

.doctors .box-container .box .share{
    padding-top: 2rem;
}
.photo{
  height: 204px;
  width:204px;
}

.doctors .box-container .box .share a{
    height: 5rem;
    width: 5rem;
    line-height: 4.5rem;
    font-size: 2rem;
    color:var(--green);
    border-radius: .5rem;
    border:var(--border);
    margin:.3rem;
}

.doctors .box-container .box .share a:hover{
    background:var(--green);
    color:#fff;
    box-shadow: var(--box-shadow);
}

.book .row{
    display: flex;
    align-items: center;
    flex-wrap: wrap;
    gap:2rem;
}

.book .row .image{
    flex:1 1 45rem;
}

.book .row .image img{
    width: 100%;
}

.book .row form{
    flex:1 1 45rem;
    background: #fff;
    border:var(--border);
    box-shadow: var(--box-shadow);
    text-align: center;
    padding: 2rem;
    border-radius: .5rem;
}

.book .row form h3{
    color:var(--black);
    padding-bottom: 1rem;
    font-size: 3rem;
}

.book .row form .box{
    width: 100%;
    margin:.7rem 0;
    border-radius: .5rem;
    border:var(--border);
    font-size: 1.6rem;
    color: var(--black);
    text-transform: none;
    padding: 1rem;
}

.book .row form .btn{
    padding:1rem 4rem;
}

.review .box-container{
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(27rem, 1fr));
    gap:2rem;
}

.review .box-container .box{
    border:var(--border);
    box-shadow: var(--box-shadow);
    border-radius: .5rem;
    padding:2.5rem;
    background: #fff;
    text-align: center;
    position: relative;
    overflow: hidden;
    z-index: 0;
}

.review .box-container .box img{
    height: 10rem;
    width: 10rem;
    border-radius: 50%;
    object-fit: cover;
    border:.5rem solid #fff;
}

.review .box-container .box h3{
    color:#fff;
    font-size: 2.2rem;
    padding:.5rem 0;
}

.review .box-container .box .stars i{
    color:#fff;
    font-size: 1.5rem;
}

.review .box-container .box .text{
    color:var(--light-color);
    line-height: 1.8;
    font-size: 1.6rem;
    padding-top: 4rem;
}

.review .box-container .box::before{
    content: '';
    position: absolute;
    top:-4rem; left: 50%;
    transform:translateX(-50%);
    background:var(--green);
    border-bottom-left-radius: 50%;
    border-bottom-right-radius: 50%;
    height: 25rem;
    width: 120%;
    z-index: -1;
}

.blogs .box-container{
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(30rem, 1fr));
    gap:2rem;
}

.blogs .box-container .box{
    border:var(--border);
    box-shadow: var(--box-shadow);
    border-radius: .5rem;
    padding: 2rem;
}

.blogs .box-container .box .image{
    height: 20rem;
    overflow:hidden;
    border-radius: .5rem;
}

.blogs .box-container .box .image img{
    height: 100%;
    width: 100%;
    object-fit: cover;
}

.blogs .box-container .box:hover .image img{
    transform:scale(1.2);
}

.blogs .box-container .box .content{
    padding-top: 1rem;
}

.blogs .box-container .box .content .icon{
    padding: 1rem 0;
    display: flex;
    align-items: center;
    justify-content: space-between;
}

.blogs .box-container .box .content .icon a{
    font-size: 1.4rem;
    color: var(--light-color);
}

.blogs .box-container .box .content .icon a:hover{
    color:var(--green);
}

.blogs .box-container .box .content .icon a i{
    padding-right: .5rem;
    color: var(--green);
}

.blogs .box-container .box .content h3{
    color:var(--black);
    font-size: 3rem;
}
.mail{
  align-items: center;
}
.blogs .box-container .box .content p{
    color:var(--light-color);
    font-size: 1.5rem;
    line-height: 1.8;
    padding:1rem 0;
}

.footer .box-container{
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(22rem, 1fr));
    gap:2rem;
}

.footer .box-container .box h3{
    font-size: 2.5rem;
    color:var(--black);
    padding: 1rem 0;
}

.footer .box-container .box a{
    display: block;
    font-size: 1.5rem;
    color:var(--light-color);
    padding: 1rem 0;
}

.footer .box-container .box a i{
    padding-right: .5rem;
    color:var(--green);
}

.footer .box-container .box a:hover i{
    padding-right:2rem;
}

.footer .credit{
    padding: 1rem;
    padding-top: 2rem;
    margin-top: 2rem;
    text-align: center;
    font-size: 2rem;
    color:var(--light-color);
    border-top: .1rem solid rgba(0, 0, 0, .1);
}

.footer .credit span{
    color:var(--green);
}









/* media queries  */
@media (max-width:991px){

    html{
        font-size: 55%;
    }

    .header{
        padding: 2rem;
    }

    section{
        padding:2rem;
    }

}

@media (max-width:768px){

    #menu-btn{
        display: initial;
    }

    .header .navbar{
        position: absolute;
        top:115%; right: 2rem;
        border-radius: .5rem;
        box-shadow: var(--box-shadow);
        width: 30rem;
        border: var(--border);
        background: #fff;
        transform: scale(0);
        opacity: 0;
        transform-origin: top right;
        transition: none;
    }

    .header .navbar.active{
        transform: scale(1);
        opacity: 1;
        transition: .2s ease-out;
    }

    .header .navbar a{
        font-size: 2rem;
        display: block;
        margin:2.5rem;
    }

}

@media (max-width:450px){

    html{
        font-size: 50%;
    }

}
/* --------------------------------------------------------------------------------------- */
*{
    box-sizing: border-box;
    margin: 0;
}
div.form{
    height: 100vh;
    width: 100%;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 20px;
    font-family: Arial, Helvetica, sans-serif;
}
form input[type=text], input[type=email], textarea{
    width: 600px;
    font-size: 20px;
    padding: 8px 6px;
    border: none;
    border-bottom: 3px solid #5f5f5f;
    background-color: #f1f1f1;
}
form input[type=text]:focus, input[type=email]:focus, textarea:focus{
    outline: 1px solid #5f5f5f;
}

form input[type=submit]{
    font-size: 20px;
    padding: 8px 26px;
    border: none;
    background-color: black;
    color: white;
    border-radius: 4px;
}
form input[type=submit]:hover{
    background-color: #0e42de;
}
textarea{
    resize: none;
}

.myVideo {
    position: absolute;
    right: 0;
    bottom: 0;
    z-index: -1;
    min-width: 100%;
    min-height: 100%;
  }
</style>
</head>
<body>
  <video autoplay loop muted plays-inline class="myVideo">
      <source src="https://player.vimeo.com/progressive_redirect/playback/697718072/rendition/720p?loc=external&oauth2_token_id=1027659655&signature=e13c10fe21b80d3bc75e7d95a716811fc7eb2f0485cc5e4982783e862c6835f9" type="video/mp4">

    </video>

<!-- header section starts  -->

<header class="header">

    <a href="#" class="logo"> technology. </a>

    <nav class="navbar">
        <a href="#home">home</a>
        <a href="#services">services</a>
        <a href="#about">about</a>
        <a href="#review">review</a>
        <!-- <a href="#blogs">blogs</a> -->
    </nav>

    <div id="menu-btn" class="fas fa-bars"></div>

</header>

<!-- header section ends -->

<!-- home section starts  -->

<section class="home" id="home">


    <div class="image">
        <img src="https://wallpaperaccess.com/full/3771025.jpg" alt="">
    </div>

    <div class="content">
        <h3>VS technology</h3>
        <p><strong>A trusted Digital Engineering and Enterprise Modernization partner.</strong></p>

          <a class="btn" href="mailto:sejaldkharche@gmail.com">contact us<span class="fas fa-chevron-right"></span> </a>
    </div>

</section>

<!-- home section ends -->

<!-- icons section starts  -->
<h1 class="heading">Company<span>Contains</span> </h1>

<section class="icons-container">

    <div class="icons">
        <p>Insights
Welcome to what comes next: Engineering for the era of digital acceleration</p>
    </div>

    <div class="icons">

        <p>Article
Forbes: Persistent Systems Navigates New ‘Digital Engineering’ Zones</p>
    </div>

    <div class="icons">

        <p>Event
Persistent is a proud Groundbreaker Sponsor at Dreamforce 2022</p>
    </div>

</section>

<!-- icons section ends -->

<!-- services section starts  -->

<section class="services" id="services">

    <h1 class="heading">We <span>imagine</span> </h1>
    <p align="center">Design and deliver new digital experiences, revenue streams and business models to meet rising customer expectations and accelerate your growth.</p>

    <div class="box-container">

        <div class="box">

            <p>Blog

Metaverse – The Future of Digital CX Transformation</p>
            <!-- <a href="#" class="btn"> learn more <span class="fas fa-chevron-right"></span> </a> -->
        </div>

        <div class="box">

            <p>Offering

Persistent Intelligent Cyber Recovery</p>
            <!-- <a href="#" class="btn"> learn more <span class="fas fa-chevron-right"></span> </a> -->
        </div>

        <div class="box">

            <p>Video

HBR video series: Digital transformation is shaping the future of industries</p>
            <!-- <a href="#" class="btn"> learn more <span class="fas fa-chevron-right"></span> </a> -->
        </div>





    </div>

</section>

<!-- services section ends -->

<!-- about section starts  -->

<section class="about" id="about">

    <h1 class="heading"> <span>We </span>Engineers</h1>

    <div class="row">

        <div class="image">
            <img src="https://wallpaperaccess.com/full/3771025.jpg" alt="">
        </div>

        <div class="content">
            <h3>Streamline your software engineering to drive greater efficiency and enable resiliency across your products and platforms.</h3>
            <p>Blog

Cloud Automation Stack – Building Blocks for Accelerating Cloud Infrastructure Development</p>
            <p>-------------------------------------------------------------------</p>
            <p>Whitepaper

Knowledge Graphs for Prediction of Drug-Drug Interactions Associated with Cancer Chemotherapy Regimens</p>
<p>Blog

Securing DevOps at the Speed of Your Business</p>


            <!-- <a href="#" class="btn"> learn more <span class="fas fa-chevron-right"></span> </a> -->
        </div>

    </div>

</section>

<!-- about section ends -->








<!-- footer section starts  -->

<section class="footer">

    <div class="box-container">

        <div class="box">
            <h3>quick links</h3>



          <a href="#home"> <i class="fas fa-chevron-right"></i> home </a>
          <a href="#services"> <i class="fas fa-chevron-right"></i> services </a>
          <a href="#about"> <i class="fas fa-chevron-right"></i> about </a>
          <a href="#doctors"> <i class="fas fa-chevron-right"></i> doctors </a>
          <a href="#book"> <i class="fas fa-chevron-right"></i> book </a>
          <a href="#review"> <i class="fas fa-chevron-right"></i> review </a>
            <!-- <a href="#"> <i class="fas fa-chevron-right"></i> blogs </a> -->
        </div>

        <div class="box">
            <h3>our services</h3>
            <a href="#"> <i class="fas fa-chevron-right"></i> All facilities</a>
            <a href="#"> <i class="fas fa-chevron-right"></i> All vaccination </a>
            <a href="#"> <i class="fas fa-chevron-right"></i> Baby care unit </a>
            <a href="#"> <i class="fas fa-chevron-right"></i> diagnosis </a>
            <a href="#"> <i class="fas fa-chevron-right"></i> ambulance service </a>
        </div>

        <div class="box">
            <h3>contact info</h3>
            <a href="#"> <i class="fas fa-phone"></i> 9595206207 </a>
            <a href="#"> <i class="fas fa-phone"></i> 1234567890 </a>
            <a href="#"> <i class="fas fa-envelope"></i> sukhakarta@gmail.com </a>
            <a href="#"> <i class="fas fa-envelope"></i> mayurwarade@gmail.com </a>
            <a href="#"> <i class="fas fa-map-marker-alt"></i> Malkapur,Buldhana-443101 </a>
        </div>

        <div class="box">
            <h3>follow us</h3>
            <a href="#"> <i class="fab fa-facebook-f"></i> facebook </a>
            <a href="#"> <i class="fab fa-twitter"></i> twitter </a>
            <a href="#"> <i class="fab fa-instagram"></i> instagram </a>
            <a href="#"> <i class="fab fa-linkedin"></i> linkedin </a>
            <a href="#"> <i class="fab fa-pinterest"></i> pinterest </a>
        </div>

    </div>

    <div class="credit"> created by <span>sejal d kharche</span> | @SukhakartaHospital</div>

</section>

<!-- footer section ends -->
<script src="js/script.js"></script>

</body>
</html>
