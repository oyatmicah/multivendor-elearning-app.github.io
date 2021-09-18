<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous"> -->
    <link rel="stylesheet" href="css/custom.css" >
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
    <link rel="stylesheet" href="css/custom-style.css" >
    
    <title>ClayboardsAcademy</title>
    <link rel="manifest" href="/manifest.json" />
    <script src="https://cdn.onesignal.com/sdks/OneSignalSDK.js" async=""></script>
    <script>
        var OneSignal = window.OneSignal || [];
        OneSignal.push(function() {
            OneSignal.init({
            appId: "927dc3a7-ced1-4550-bbfa-cc127860a2e1",
            });
        });
    </script>

    <!-- Start of Async ProveSource Code -->
    <script>
        !function(o,i){window.provesrc&&window.console&&console.error&&console.error("ProveSource is included twice in this page."),provesrc=window.provesrc={dq:[],display:function(o,i){this.dq.push({n:o,g:i})}},o._provesrcAsyncInit=function(){provesrc.init({apiKey:"eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJhY2NvdW50SWQiOiI1Y2E0MWY0MWU4MDZhYTU5NGUwNWU2OTgiLCJpYXQiOjE1NTQyNTk3Nzd9.7w44V8Fyc9z_dYF0napNhfJFAgp0o9Hr9IGaMbPdFhU",v:"0.0.3"})};var r=i.createElement("script");r.type="text/javascript",r.async=!0,r.charset="UTF-8",r.src="https://cdn.provesrc.com/provesrc.js";var e=i.getElementsByTagName("script")[0];e.parentNode.insertBefore(r,e)}(window,document);
    </script>
  </head>

  <body>
    

    <nav class="navbar navbar-expand-lg navbar-light bg-white">
        <a class="navbar-brand mb-3" href="#">
          <img src="" width="100px" >
        </a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" 
        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
         aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      
        <div class="collapse navbar-collapse " id="navbarSupportedContent">


          <ul class="navbar-nav mr-auto container-fluid">
           
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-list-ul"></i> Categories
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                @foreach($categories as $category)
                    <a class="dropdown-item" href="/categories/{{ $category->id }}">{{ $category->name }}</a>
                @endforeach
              </div>
            </li>

            <li class="nav-item col-8">
                     <form class="form-inline my-2 my-lg-0 inbutton">
                            <input class="form-control form-control-lg mr-sm-0 col-8 bg-light border-0 "
                            style="border-radius: 5px 0px 0px 5px" 
                            type="search" placeholder="Search for Courses" aria-label="Search">
                             
                            <button class="btn btn-light btn-lg  my-2 my-sm-0 ml-0 col-2" 
                          style="border-radius: 0px 5px 5px 0px;"
                            type="submit"><i class="fas fa-search text-danger "></i></button>
                        </form>
                    </li>

          </ul>

           
                <a class="nav-link btn btn-light  mx-2" href="#"
                
                data-toggle="popover" title="Try ClayboardsAcademy for Business"
                data-placement="bottom"
                data-trigger="focus"
                data-content="Get your team access to ClayboardsAcademy's top 2,500 courses anytime,
                 anywhere."
                
                >ClayboardsAcademy for Business</a>
                <a class="nav-link btn btn-light  mx-2" href="{{ route('login') }}">Become an Instructor</a>
                <a class="nav-link btn btn-light  mx-2 rounded-circle" href="#">  <i class="fas fa-shopping-cart"></i> </a>
                @auth
                    <a href="{{ url('/home') }}" class="nav-link btn btn-outline-dark">Home</a>
                @else
                    <a href="{{ route('login') }}" class="nav-link btn btn-outline-dark">Log in</a>

                    @if (Route::has('register'))
                        <a href="{{ route('register') }}" class="nav-link btn btn-danger mx-2">Register</a>
                    @endif
                @endauth
            

          
        </div>
      </nav>

            
     
      <div class="jumbotron big-banner mb-0 jumbotron-fluid" style="height: 500px; padding-top: 150px;">
         

          <div class="container">
                <div class="row align-items-center">
                  <div class="col">
                    
                    <div class="col-md-4 text-light">
                        <h1 class="display-5">Hot Sale—$9.99 courses!</h1>
                        <p class="lead">Get our best deal on courses</p>
                  </div>

                  <div class="col-md-6">
                        <form class="form-inline my-2 my-lg-0" >
                                <input class="form-control form-control-lg mr-sm-0 col-8
                                 border-right-0 "
                                style="border-radius: 5px 0px 0px 5px; " 
                                 type="search" placeholder="What Do You Want To Learn?" 
                                 aria-label="Search">
                                
                                <button class="btn btn-light btn-lg my-2 my-sm-0 col-2 border-left-0" 
                                style="border-radius: 0px 5px 5px 0px;"
                                type="submit"><i class="fas text-danger fa-search"></i></button>
                            </form>
                    </div>


                  </div>
                 
                </div>
              </div>

       </div>


       <div class="fresh-content text-light py-3" >
           <div class="container">
               <div class="row">
                   <div class="col-md-4">
                       <div class="media">
                            <i class="far fa-play-circle mr-3 display-4" ></i>
                            <div class="media-body">
                              <h5 class="mt-0">Fresh Content</h5>
                              Choose from 65,000 courses with new additions published every month
                            </div>
                          </div>
                   </div>

                   <div class="col-md-4">
                        <div class="media">
                             <i class="fas fa-ribbon mr-3 display-4" ></i>
                             <div class="media-body">
                               <h5 class="mt-0">Trusted Instructors</h5>
                               Take courses taught by industry experts around the world
                             </div>
                           </div>
                    </div>
                   
                   <div class="col-md-4">
                        <div class="media">
                             <i class="fas fa-spinner mr-3 display-4" ></i>
                             <div class="media-body">
                               <h5 class="mt-0">Flexible Learning</h5>
                               Learn on your terms with lifetime course access and the Udemy mobile app
                             </div>
                           </div>
                    </div>

                    
                 
               </div>
           </div>
       </div>




       <div class="container mt-5 text-center" >
          <h3>
               <small class="text-muted">Top Courses</small>
             </h3>
           <div class="card-deck" >
           @foreach($courses as $course)
                    <div class="card mx-1">
                        <span class="badge  badge-warning w-50 mt-2"
                          style="position: absolute; z-index: 3"
                        >BEST SELLER</span>
                    <a href="/courses/{{ $course->id }}" class="card-img-top h-50"  >  
                        <img   class="w-100" src="/images/laptop2.jpg" alt="{{ $course->title }}"> 
                    </a> 
                    <br/>
                      <div class="card-body px-2">
                        <h6>{{ $course->title }}</h6>
                        <p class="card-text" style="font-size: 11px;">{{ $course->user['name'] }} | {{ $course->sub_title }}</p>
                        <p class="card-text"><small class="text-muted">
                            <i class="fas fa-star text-warning"></i>
                            <i class="fas fa-star text-warning"></i>
                            <i class="fas fa-star text-warning"></i>
                            <i class="fas fa-star text-warning"></i>
                            <i class="fas fa-star-half text-warning"></i>
                          {{--  4.5 (18,560)  --}}
                        </small>
                          <span class="d-block"></span>
                         
                          <span class="float-left" style=" font-size: 25px;"> 
                            ${{ number_format($course->discount_price/400) }} 
                            <small style="text-decoration: line-through; color:brown;" >
                              (${{number_format($course->actual_price / 400)}}) </small> <br/>

                              
                              <small style="font-size: 15px;">
                               or 
                               
                               <span class="text-success text-bold">
                                 <b>₦{{ number_format($course->discount_price) }}</b>
                              </small>
                              </small>
                              <small style="font-size: 15px;text-decoration: line-through; color:brown;" >
                              (₦{{number_format($course->actual_price)}}) </small>
                              
                            </span>
                           <div style="float:right;" >
                          {{-- <a href="/courses/{{ $course->id }}" class="btn btn-lg btn-default text-dark btn-oyline" >Read more</a> --}}
                          <a href="/courses/{{ $course->id }}" class="btn btn-lg btn-danger" >Enroll Now</a>
                           </div>
                          </p>
                      </div>
                    </div>
                    @endforeach
                   </div>

                

                 
      </div>


      

      <div class="container mt-5 text-center" >
          <h3>
               <small class="text-muted">Achieve Your Goals</small>
             </h3>

             <div class="row">
               <div class="col-md-4">
                  <a href="#" >
                      <figure class="figure">
                          <img src="images/woman_photo2.jpg" style="height: 250px;" class="figure-img img-fluid rounded" alt="A generic square placeholder image with rounded corners in a figure.">
                          <figcaption class="figure-caption text-center">
                            Expand your programming knowledge</figcaption>
                        </figure>
                  </a>
               </div>
               <div class="col-md-4">
                  <a href="#" >
                      <figure class="figure">
                          <img src="images/woman_photo1.jpeg" style="height: 250px;" class="figure-img img-fluid rounded" alt="A generic square placeholder image with rounded corners in a figure.">
                          <figcaption class="figure-caption text-center">
                            Be your own boss</figcaption>
                        </figure>
                  </a>
                </div>
               <div class="col-md-4">
                  <a href="#" >
                      <figure class="figure">
                          <img src="images/laptop1.jpg" style="height: 250px;" class="figure-img img-fluid rounded" alt="A generic square placeholder image with rounded corners in a figure.">
                          <figcaption class="figure-caption text-center">
                            Land an exciting new tech job</figcaption>
                        </figure>
                  </a>
               </div>
             </div>

      </div>




      <div class="container mt-3" >
             <div class="row">
                <div class="col-md-3">
                    <a href="#" >
                        <figure class="figure">
                            <img src="images/laptop2.jpg" style="height: 150px;" class="figure-img img-fluid rounded" alt="A generic square placeholder image with rounded corners in a figure.">
                            <figcaption class="figure-caption text-center">
                              Indulge your curiousity</figcaption>
                          </figure>
                    </a>
                 </div>

               <div class="col-md-3">
                  <a href="#" >
                      <figure class="figure">
                          <img src="images/woman_photo2.jpg" style="height: 150px;" class="figure-img img-fluid rounded" alt="A generic square placeholder image with rounded corners in a figure.">
                          <figcaption class="figure-caption text-center">
                            Expand your programming knowledge</figcaption>
                        </figure>
                  </a>
               </div>
               <div class="col-md-3">
                  <a href="#" >
                      <figure class="figure">
                          <img src="images/woman_photo1.jpeg" style="height: 150px;" class="figure-img img-fluid rounded" alt="A generic square placeholder image with rounded corners in a figure.">
                          <figcaption class="figure-caption text-center">
                            Be your own boss</figcaption>
                        </figure>
                  </a>
                </div>
               <div class="col-md-3">
                  <a href="#" >
                      <figure class="figure">
                          <img src="images/laptop1.jpg" style="height: 150px;" class="figure-img img-fluid rounded" alt="A generic square placeholder image with rounded corners in a figure.">
                          <figcaption class="figure-caption text-center">
                            Land an exciting new tech job</figcaption>
                        </figure>
                  </a>
               </div>
             </div>

      </div>



      <div class="container mt-5 text-center" >
          <h3>
               <small class="text-muted">Featured Topics</small>
             </h3>
            @foreach($categories as $category)
                <a class="btn btn-light shadow" href="/categories/{{ $category->id }}">{{ $category->name }}</a>
            @endforeach
             
      </div>


      <div class="container " style="margin-top: 120px;">
         <div class="row">
           <div class="col text-center border-right">
            <div class="col-8 offset-1">
             <h4>Become an Instructor</h4>
             <p class="lead" style="font-size: 15px;">Teach what you love. ClayboardsAcademy gives you the tools to create an online course.</p>
            <a href="{{ route('login') }}" class="btn btn-lg btn-danger">Start Teaching</a>
            </div>
          </div>

          <div class="col text-center">
              <div class="col-8 offset-1">
               <h4>ClayboardsAcademy for Business</h4>
               <p class="lead" style="font-size: 15px;">Get unlimited access to 2,500 of ClayboardsAcademy's top courses for your team.</p>
              <a href="{{ route('login') }}" class="btn btn-lg btn-danger">Get ClayboardsAcademy for business</a>
              </div>
            </div>


         </div>
      </div>


<div class="row pt-5 px-3 border-top mt-5 " style="font-size: 13px;">
  <div class="col">


  </div>
  <div class="col">

      <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link text-info" href="#">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-info" href="#">Careers</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-info" href="#">Blog</a>
          </li>
        </ul>

  </div>
  <div class="col">

      <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link text-info" href="#">Topics</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-info" href="#">Support</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-info" href="#">Affiliate</a>
          </li>
        </ul>

  </div>
</div>

<hr/>

<div class="row" style="font-size: 12px;">
      <div class="col pl-5">
          <img src="" width="100px" class="mr-5" > <span>Copyright © 2021 ClayboardsAcademy, Inc.</span>
      </div>
      <div class="col">
          <ul class="nav justify-content-end">
              <li class="nav-item">
                <a class="nav-link active text-info" href="#">Terms</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-info" href="#">Privacy and Cookie Police</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-info" href="#">Intellectual Property</a>
              </li>
            </ul>

      </div>
</div>


 

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
  
  <script>
    $(function () {
      $('[data-toggle="popover"]').popover()
    })
  
  </script>
  
</body>



</html>