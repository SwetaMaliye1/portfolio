<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>

<!-- Popper JS -->
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>

<script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.9.1/gsap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.9.1/ScrollTrigger.min.js"></script>


    <title>Document</title>
</head>
<body>
<script src="main.js"></script>
<!-- <canvas id="starCanvas"></canvas> -->


<!-- <div class="cursor_dot"></div> -->
<!-- <div class="curser-outline"></div> -->

<div class="mainc">
            

    <nav class="navbar navbar-expand-lg navbar-light ">
    <div class="container-fluid">
    <a class="navbar-brand" href="#"> <img src="image/Add a little bit of body text (1).png" alt="" 
                              width="50"
                              height="50"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <!-- <button> Let work toghter  </button> -->
  
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <!-- <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li> -->
        <li class="nav-item location_col">
          <a class="nav-link font-s-small" href="#">Amravati</a>
        </li>
        <li class="nav-item location_col">
          <a class="nav-link font-s-small"  id="temperature"  href="#">30.2°c</a>
        </li>
        <li class="nav-item location_col">
          <a class="nav-link font-s-small" id="time" href="#">3:34 PM</a>
        </li>
        <div class="location_col weather">
                <img src="image/clouds.svg" loading="lazy" id="weather-icon" alt="Snowy weather icon" class="weather_icon" width="20px" height="20px">
              </div>
             

      </ul>
      <div class="location_col contactmail">
              <button class="btn-grad btn_copied " id="copyButton">Let's work together</button>
              <div class="text_white font-s-p btn_copied btnhidden"></div>
              </div>
    </div>
  </div>

</nav>



<!-- nav end -->



<div class="container container-1">
  <div class="canvas"></div>
    <div class="framer">
         <div class="svg-container">
         <div class="gradient-circle"></div>
             <img src="image/ui-ux-design-portfolio-cover.svg" alt="design" class ="main-svg">

                 <div class="gradient-circle1"></div> 
        </div>
        </div>  
        <!-- <div class="gradient-circle2"></div>
        <div class="gradient-circle3"></div> -->
        <section class="cool-sites btn-grad">
            <h4>Cool Sites!</h4>
        </section>
    </div>
</div>
  
</div>


    <section class="intro-text">
      <div class="container_new flex-vert-center container">
      <div class="title-gsap margin-bottom-custom1" >
          <!-- <img src="" alt="Illustration of rapid innovation and growth"> -->
          <h3>Hii. <strong> I’m Sweta</strong></h3>
        </div>
        <div class="title-gsap margin-bottom-custom1" >
          <!-- <img src="" alt="Illustration of rapid innovation and growth"> -->
          <h3>nice to <strong> meet you</strong>...</h3>
        </div>
        <div class="title-gsap margin-bottom-custom1" >
        <h3>Please take a look <strong>around!</strong>.</h3>
        </div>
        <div class="title-gsap margin-bottom-custom1" >
          <!-- <img src="" alt="Illustration of rapid innovation and growth"> -->
          <h3>Creating <strong>pixel-perfect websites</strong>...</h3>
        </div>
       
        <!-- <div class="title-gsap margin-bottom-custom1" style="transform: translate(0px, 8vh) scale(1.1, 1.1); opacity: 0;">
                  <h3><strong>Team player</strong>, success is everyone's <br> effort.</h3>
         </div> -->
        <!-- <div class="title-gsap margin-bottom-custom1" style="transform: translate(0px, 8vh) scale(1.1, 1.1); opacity: 0;"> -->
                  <!-- <img src="img/tech-innovation.gif" alt="Depicting the use of tools for technology and design innovation"> -->
                  <!-- <h3>Driven to learn and adapt to <strong>new <br> technologies</strong> and <strong>design trends</strong></h3> -->
         <!-- </div> -->

      </div>
    </section>
    <section>
	<div class="contenttitle" >
		<h2 class="titleh">ABOUT</h2>
	</div>
</section>
    <div class="container2 container">
      <div class="row">
                <div class="card-deck">
            <div class="card col-md">
              <img class="card-img-top icon-img" src="image/speed.png" alt="Card image cap">
              <div class="card-body">
                <h2 class="card-title">Fast</h2>
                <p class="card-text">Fast load times and lag free interaction, my highest priority.</p>
              </div>
            </div>
            <div class="card col-md">
              <img class="card-img-top icon-img" src="image/responsive.png" alt="Card image cap">
              <div class="card-body">
                <h2 class="card-title">Responsive</h2>
                <p class="card-text">My layouts will work on any device, big or small.</p>
              </div>
            </div>
            <div class="card col-md">
              <img class="card-img-top icon-img" src="image/idea.png" alt="Card image cap">
              <div class="card-body">
                <h2 class="card-title">Intuitive</h2>
                <p class="card-text">Strong preference for easy to use, intuitive UX/UI.</p>
              </div>
            </div>
            <div class="card col-md">
              <img class="card-img-top icon-img" src="image/dynamic.png" alt="Card image cap">
              <div class="card-body">
                <h2 class="card-title">Dynamic</h2>
                <p class="card-text">Websites don't have to be static, I love making pages come to life.</p>
              </div>
            </div>
          </div>
      </div>
    </div>

    <!-- skill section  -->

    
    <div class="container3 container mt-5">
      <div class="row">
        <div class="col-xl">
        <div class="skill-set container">
           
           <div class="content content--mlarge skill-set__flex">
             <ul class="skill-set__list">
             <li class="skill-set__item">
                 <div class="skill-set__icon"><img src="http://www.webcoderskull.com/img/icon/html.svg" alt="HTML/CSS"></div>
                 <div class="skill-set__detail">
                   <div class="skill-set__meta">
                     <div class="skill-set__name">
                       <h4 class="small-title small-title--skill">HTML/CSS</h4>
                       <p class="skill-set__year">3YEARS</p>
                     </div>
                     <p class="small-title small-title--skill skill-set__high">90<span class="skill-set__ratio">%</span></p>
                   </div>
                   <div class="skill-set__bar p90 js-scroll in"></div>
                 </div>
               </li>
               <li class="skill-set__item">
                 <div class="skill-set__icon"><img src="image/phplogo.jpg" alt="Pug"></div>
                 <div class="skill-set__detail">
                   <div class="skill-set__meta">
                     <div class="skill-set__name">
                       <h4 class="small-title small-title--skill">PHP</h4>
                       <p class="skill-set__year">3YEAR</p>
                     </div>
                     <p class="small-title small-title--skill">80<span class="skill-set__ratio">%</span></p>
                   </div>
                   <div class="skill-set__bar p80 js-scroll in"></div>
                 </div>
               </li>
               <li class="skill-set__item">
                 <div class="skill-set__icon"><img src="image/Bootstrap_logo.svg" alt="bootstrap"></div>
                 <div class="skill-set__detail">
                   <div class="skill-set__meta">
                     <div class="skill-set__name">
                       <h4 class="small-title small-title--skill">Bootstrap</h4>
                       <p class="skill-set__year">3YEAR</p>
                     </div>
                     <p class="small-title small-title--skill">80<span class="skill-set__ratio">%</span></p>
                   </div>
                   <div class="skill-set__bar p80 js-scroll in"></div>
                 </div>
               </li>
               <!-- <li class="skill-set__item">
                 <div class="skill-set__icon"><img src="http://www.webcoderskull.com/img/icon/ps.svg" alt="Photoshop"></div>
                 <div class="skill-set__detail">
                   <div class="skill-set__meta">
                     <div class="skill-set__name">
                       <h4 class="small-title small-title--skill">Photoshop</h4>
                       <p class="skill-set__year">3YEARS</p>
                     </div>
                     <p class="small-title small-title--skill">70<span class="skill-set__ratio">%</span></p>
                   </div>
                   <div class="skill-set__bar p70 js-scroll in"></div>
                 </div>
               </li> -->
               <!-- <li class="skill-set__item">
                 <div class="skill-set__icon"><img src="http://www.webcoderskull.com/img/icon/flinto.png" alt="Flinto for mac"></div>
                 <div class="skill-set__detail">
                   <div class="skill-set__meta">
                     <div class="skill-set__name">
                       <h4 class="small-title small-title--skill">Flinto for mac</h4>
                       <p class="skill-set__year">2MONTHS</p>
                     </div>
                     <p class="small-title small-title--skill">50<span class="skill-set__ratio">%</span></p>
                   </div>
                   <div class="skill-set__bar p50 js-scroll in"></div>
                 </div>
               </li> -->
<!-- <div class="btn"> all about data  to save the data </div> 
.btn all
 ootstap a data change media query to responsive -->

             </ul>
             <ul class="skill-set__list">
             <li class="skill-set__item">
                 <div class="skill-set__icon"><img src="http://www.webcoderskull.com/img/icon/wp.svg" alt="Wordpress"></div>
                 <div class="skill-set__detail">
                   <div class="skill-set__meta">
                     <div class="skill-set__name">
                       <h4 class="small-title small-title--skill">Wordpress</h4>
                       <p class="skill-set__year">3YEARS</p>
                     </div>
                     <p class="small-title small-title--skill">70<span class="skill-set__ratio">%</span></p>
                   </div>
                   <div class="skill-set__bar p70 js-scroll in"></div>
                 </div>
               </li>
               <li class="skill-set__item">
                 <div class="skill-set__icon"><img src="http://www.webcoderskull.com/img/icon/js.svg" alt="Javascript"></div>
                 <div class="skill-set__detail">
                   <div class="skill-set__meta">
                     <div class="skill-set__name">
                       <h4 class="small-title small-title--skill">Javascript</h4>
                       <p class="skill-set__year">2YEARS</p>
                     </div>
                     <p class="small-title small-title--skill">60<span class="skill-set__ratio">%</span></p>
                   </div>
                   <div class="skill-set__bar p60 js-scroll in"></div>
                 </div>
               </li>
               <li class="skill-set__item">
                 <div class="skill-set__icon"><img src="image/React (1).webp" alt="Wordpress"></div>
                 <div class="skill-set__detail">
                   <div class="skill-set__meta">
                     <div class="skill-set__name">
                       <h4 class="small-title small-title--skill">ReactJs</h4>
                       <p class="skill-set__year">2MONTHS</p>
                     </div>
                     <p class="small-title small-title--skill">70<span class="skill-set__ratio">%</span></p>
                   </div>
                   <div class="skill-set__bar p70 js-scroll in"></div>
                 </div>
               </li>
              
             </ul>
           </div>
         </div>
       
         </div>
        
      </div>
    </div>
    
  
    <section>
	<div class="contenttitle1">
  <h2 class="titleh">PROJECTS</h2>
	</div>
</section>

    <section class="gallery">

  <div class="box  postcard">
  <img src="image/after-the-rain-8311416_1280.jpg" alt="" height="" width=""  class="w-100 shadow-1-strong rounded mb-4">
  </div>
  <div class="box  postcard">
  <img src="image/reading-5173530_1280.jpg" alt="" height="" width=""  class="w-100 shadow-1-strong rounded mb-4">
  </div>
  <div class="box  postcard">
  <img src="image/man-6253257_1280.jpg" alt="" height="" width=""  class="w-100 shadow-1-strong rounded mb-4">
  </div>
  <div class="box  postcard">
  <img src="image/feather-3010848_1280.jpg" alt="" height="" width=""  class="w-100 shadow-1-strong rounded mb-4">
  </div>
  <div class="box  postcard">
  <img src="image/plants-6492284_1280.jpg" alt="" height="" width=""  class="w-100 shadow-1-strong rounded mb-4" >
  </div>
  <div class="box  postcard">
  <img src="image/abstract-rainbow-7251810_1280.jpg" alt="" height="" width=""  class="w-100 shadow-1-strong rounded mb-4" >
  </div>
  <div class="box  postcard">
  <img src="image/art-2369664_1280.jpg" alt="" height="" width=""  class="w-100 shadow-1-strong rounded mb-4">
  </div>
  <div class="box image postcard">
  <img src="image/after-the-rain-8311416_1280.jpg.jpg" alt="" height="" width=""  class="w-100 shadow-1-strong rounded mb-4">
  </div>
  <!-- <div class="image">
    <img src="https://images.unsplash.com/photo-1509114397022-ed747cca3f65?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8NHx8YWJzdHJhY3QlMjAlMjBza3l8ZW58MHx8MHx8&auto=format&fit=crop&w=500&q=60" alt="image" />
  </div>
  <div class="image">
    <img src="https://images.unsplash.com/photo-1460411794035-42aac080490a?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MTd8fGFic3RyYWN0JTIwJTIwc2t5fGVufDB8fDB8fA%3D%3D&auto=format&fit=crop&w=500&q=60" alt="image" />
  </div>
  <div class="image">
    <img src="https://images.unsplash.com/photo-1620121692029-d088224ddc74?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MTF8fGFic3RyYWN0JTIwJTIwc2t5fGVufDB8fDB8fA%3D%3D&auto=format&fit=crop&w=500&q=60" alt="image" />
  </div> -->
</section>




<section id="future">
        <h2 class="visually-hidden">Embark on Your Future Projects With Us</h2>
        <video id="futureVideo" src="image/147290-791334083_small.mp4" autoplay="" muted="" loop="" style="opacity: 0;"></video>
        <div id="ftext">
          <h3><strong>Envision Your Future</strong></h3>
          <button id="hoverButton" class="btn btn-cta btn-nav-cta w-inline-block" style="width: 200px; height: 60px; display: flex; justify-content: center; align-items: center;">
            <div class="btn-cta-title btn-flex js-btn-loop" style="translate: none; rotate: none; scale: none;">
              <p class="p2" style="margin: 0;">Start a Project</p>
            </div>
            <div class="btn-cta-bg">
              <div class="btn-cta-bg-hover cta-bg-secondary"></div>
            </div>
            <div class="btn-cta-text-hover">
              <div class="text_white font-s-p btn_copied">Let's Build the Future</div>
            </div>
          </button>
        </div>
      </section>


</body>
</html>