<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Developer Riaz Khan</title>
       
       

        <link rel="icon" type="image/x-icon" href="{{asset('assets/img/favicon.ico')}}" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v5.15.1/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
       <!-- CSS -->
       <link src="https://code.jquery.com/jquery-3.6.0.min.js" >
        <link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css">
        <!-- JavaScript -->
        <link src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js">
    
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="{{asset('css/styles1.css')}}" rel="stylesheet" />
        <link href="{{asset('css/style_slider_2.css')}}" rel="stylesheet" />
        <link href="{{asset('css/skill_style.css')}}" rel="stylesheet" />
        <link href="{{asset('css/particle.css')}}" rel="stylesheet" />
        <link href="{{asset('css/project_slide.css')}}" rel="stylesheet" />
        <link href="{{asset('css/about.css')}}" rel="stylesheet" />
        <link href="{{asset('css/contact.css')}}" rel="stylesheet" />
        <link href="{{asset('css/other_project.css')}}" rel="stylesheet" />
        <link href="{{asset('css/project.css')}}" rel="stylesheet" />
        <link href="{{asset('css/work_exp.css')}}" rel="stylesheet" />
        <link href="{{asset('css/certificate.css')}}" rel="stylesheet" />
        <link href="{{asset('css/responsive.css')}}" rel="stylesheet" />
       
{{-- code for preloader --}}
        
    
        
    </head>
   

    <body >

     



      
        
      
      


   
            
             
             
        

       

      
    
       <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-dark fixed-top " id="mainNav">
            <div class="container-fluid container-nav">
              
                <a class="navbar-brand js-scroll-trigger" href="#page-top"><img   src="{{asset('images')}}/{{$record->logo}}" /></a>
              
                <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars ml-1"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav text-uppercase ml-auto">
            
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#skills">SKILLS</a></li>
              
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#services">PROJECTS</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#workexp">Experience</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#certificate">Certificates</a></li>

                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#about">ABOUT</a></li>
                         <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#contact">CONTACT</a></li>
                    </ul>
                </div>
            </div>
        </nav>

      

        <!-- Masthead-->
        <header class="masthead">
           
            <div class="container masthead1 " >
                <div class="masthead-subheading">{{$main->sub_title}}</div>
                <div class="masthead-heading text-uppercase">{{$record->name}}</div>
                <div class="masthead-subheading-1 typingEffect"></div>
                
            </div>
        </header>
        <!-- Masthead-->
       

    
        
    

     


         <section class="skills" id="skills">

                      <h1>Skills of Riaz Khan</h1>  
                      
            <div class="skills_set">

                 

              @foreach ($skill as $item)

                <div class="skill">
                    <div class="progress">
                       <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: {{$item->percentage}}%">
                        <h4>{{$item->skill_name}}</h4>
                        </div>
                   </div>
                </div>

                @endforeach 

                
               

                  


                

            </div>

            
         </section>
        


          
            

  



            


       {{-- Skill Section end --}}





    <!-- Services-->
       
    <section class="page-section" id="services">

      <div class="container-fluid">
          <div class="text-center">
              <h2 class="section-heading text-uppercase">Projects  Done By Riaz Khan </h2>
              
          </div>
          <div class="row text-center services" >
              @if (count($services) > 0)
                 @foreach ($services as $service)


                 <div >
                  <div class="card  mb-3 service_card" >
                      <div class="card-body ">
                         <h5 class="card-title">{{$service->title}}</h5>
                         <p class="card-text">{{$service->description}}</p>
                         <a href="http://{{$service->link}}">Project Link</a>
                        
                       </div>
                  </div>
                 </div>

              
                   @endforeach
              @endif
              
          </div>
      </div>


  </section>
 
  
      



<section class="work_experience" id="workexp">
<div class="container">
  <h1 class="weh">Work Experience</h1>

  <div class="card mb-3 card-o" >
    <div class="row g-0">
      <div class="col-md-4">
        <h3 class="weht">Web Developer</h3>
      </div>
      <div class="col-md-6">
        <div class="card-body">
          <h5 class="card-title">Description</h5>
          <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>  
        </div>
      </div>
      <div class="col-md-2">
        <div class="card-body">
          <h5 class="card-title">Time Period</h5>
          <p class="card-text">22 september to 23 agust</p>  
        </div>
      </div>
    </div> 


    <div class="row g-0">
      <div class="col-md-4">
        <h3 class="weht">Web Developer</h3>
      </div>
      <div class="col-md-6">
        <div class="card-body">
          <h5 class="card-title">Description</h5>
          <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>  
        </div>
      </div>
      <div class="col-md-2">
        <div class="card-body">
          <h5 class="card-title">Time Period</h5>
          <p class="card-text">22 september to 23 agust</p>  
        </div>
      </div>
    </div>


    <div class="row g-0">
      <div class="col-md-4">
        <h3 class="weht">Web Developer</h3>
      </div>
      <div class="col-md-6">
        <div class="card-body">
          <h5 class="card-title">Description</h5>
          <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>  
        </div>
      </div>
      <div class="col-md-2">
        <div class="card-body">
          <h5 class="card-title">Time Period</h5>
          <p class="card-text">22 september to 23 agust</p>  
        </div>
      </div>
    </div>


    <div class="row g-0">
      <div class="col-md-4">
        <h3 class="weht">Web Developer</h3>
      </div>
      <div class="col-md-6">
        <div class="card-body">
          <h5 class="card-title">Description</h5>
          <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>  
        </div>
      </div>
      <div class="col-md-2">
        <div class="card-body">
          <h5 class="card-title">Time Period</h5>
          <p class="card-text">22 september to 23 agust</p>  
        </div>
      </div>
    </div>







  </div>

  
</div>




</section>



<section class="Certification" id="certificate">

<div class="container-fluid">
 
  <h1 class="cert_heading">Certificates</h1>
 
 <div class="row">

    <div class="card card-c" style="">
      <img src="{{asset('images/certificate/C.jpg')}}" class="card-img-top" alt="...">
      <div class="card-body">
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
      </div>
    </div>



    <div class="card card-c" style="">
      <img src="{{asset('images/certificate/python.jpg')}}" class="card-img-top" alt="...">
      <div class="card-body">
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
      </div>
    </div>



  

  <div class="card card-c" style="">
    <img src="{{asset('images/certificate/Java.jpg')}}" class="card-img-top" alt="...">
    <div class="card-body">
      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    </div>
  </div>



  <div class="card card-c" style="">
    <img src="{{asset('images/certificate/Javascript_sololearn.jpg')}}" class="card-img-top" alt="...">
    <div class="card-body">
      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    </div>
  </div>



  <div class="card card-c" style="">
    <img src="{{asset('images/certificate/Javascript-JQuery.jpg')}}" class="card-img-top" alt="...">
    <div class="card-body">
      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    </div>
  </div>


  
  <div class="card card-c" style="">
    <img src="{{asset('images/certificate/MYQL.PNG')}}" class="card-img-top" alt="...">
    <div class="card-body">
      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    </div>
  </div>




  <div class="card card-c" style="">
    <img src="{{asset('images/certificate/php_udemy.jpg')}}" class="card-img-top" alt="...">
    <div class="card-body">
      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    </div>
   </div>


  <div class="card card-c" style="">
    <img src="{{asset('images/certificate/PHP-and-MySQL.jpg')}}" class="card-img-top" alt="...">
    <div class="card-body">
      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    </div>
  </div>




  


</div>

 </div>





   
</section>




 <section class="about_section" id="about">

  <div class="card about_card">

   <div class="card-body about_card-body">
     <h5 class="card-title about_card-title">{{$about->about_name}}</h5>
     
     <p class="card-text">
       {{$about->about_desc}}
       </p>
       <a class="btn  btn_about text-uppercase " href="{{url($main->resume)}}">Download CV</a>
  
   </div>


 </div>
</section>




    

    
       
    

        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
      
        <script src="{{asset('assets/mail/jqBootstrapValidation.js')}}"></script>
        <script src="{{asset('assets/mail/contact_me.js')}}"></script>
        <script type="text/javascript" src="{{asset('js/scripts.js')}}"></script>
        <script type="text/javascript" src="{{asset('js/other_project.js')}}"></script>
        <script type="text/javascript" src="{{asset('js/animate1.js')}}"></script>
        <script type="text/javascript" src="{{asset('js/slide.js')}}"></script>
       

</body>
</html>
