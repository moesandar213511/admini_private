@extends('user.site_user.user_master')
{{-- @section('title')
    {{$company['name']}} |{{$websiteinfo['website_name']}}
@endsection --}}
@section('content')
<style>
.breadcrumbs ul li {
    display: inline-block;
    position: relative;
    color: #08A8F1;
    font-size: 12px;
    font-weight: 600;

}
.breadcrumbs ul li:not(:last-child)::after {
    display: inline-block;
    position: relative;
    content: '/';
    margin-left: 6px;
    font-size: 12px;
    font-weight: 600;
    color: #FFFFFF;
    line-height: 0.75;

}
@media(min-width: 991px){
    header li a{
        font-size: 12px!important;
    }
}
@media(min-width: 991px) and (max-width: 1200px){
    .texts{
        top: 100px;
    }
}
@media(max-width: 991px){
    img.div{
        height:35vh!important;
        margin-top: 100px!important;
    }
    h2{
        display: inline-block;
    }
    .whole-wrap{
        margin-top: 0px!important;
    }
    .blog-posts-area{
        margin-top: -120px;
    }
    .custom-sidebar{
      margin-top: 20px;
    }



}

</style>
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.css">
    <div class="text-center">
        <img src="{{asset('user/images/about.jpg')}}" alt="" class="img-fluid div" width="100%">
        <div class="div texts" style="position: relative;top: -100px; z-index: 100;">
            <h2 class="aab" style="color: #fff; margin-top: -100px;font-size: 48px;" >Company Profile</h2>
            <div class="breadcrumbs">
                <ul>
                    <li><a href="{{url('/')}}" style="color:#fff!important;">Home</a></li>
                    <li>Company Profile</li>
                </ul>
            </div>
        </div>
    </div>
     
    
    <!-- Search Area Starts -->
    <div class="search-area">
        <div class="search-bg">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="single-job mb-4 d-lg-flex justify-content-between">
                                <div class="job-img align-self-center">
                                <img src="{{ url('user/images/job4.png') }}" alt="job">
                                </div>
                                <div class="job-text">
                                    <h4>Green Hackers Institute</h4>
                                    <h5>Web Company</h5>
                                    <ul class="mt-4">
                                        <li class="mb-3"><h5><i class="fa fa-map-marker"></i>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</h5></li>
                                        <li class="mb-3"><h5><i class="fa fa-envelope"></i> info@Gmail.Com</h5></li>
                                        <li><h5><i class="fa fa-phone"></i> 09787652747</h5></li>
                                    </ul>
                                </div>
                                <div class="job-btn align-self-center">
                                    
                                </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Search Area End -->
    <style>
        .custom-icon i {
            font-size: 35px!important;
        }
    </style>
    <div class="container">
         <div class="section-top-border">
             <h3 class="title_color">About Us</h3>
             <div class="row">
                 <div class="col-md-12">
                     <p class="generic-blockquote">Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus, facere nobis. Quibusdam odit tenetur ipsum exercitationem repellendus nisi, labore ipsa libero molestias, magni laborum culpa quas consequatur esse porro quasi.</p>
                 </div>
             </div>
         </div>
    </div>


    <style>
.gallery-container p.page-description {
    text-align: center;
    max-width: 800px;
    margin: 25px auto;
    color: #888;
    font-size: 18px;
}

.tz-gallery {
    padding: 40px;
}

.tz-gallery .lightbox img {
    width: 100%;
    margin-bottom: 30px;
    transition: 0.2s ease-in-out;
    box-shadow: 0 2px 3px rgba(0,0,0,0.2);
}


.tz-gallery .lightbox img:hover {
    transform: scale(1.05);
    box-shadow: 0 8px 15px rgba(0,0,0,0.3);
}

.tz-gallery img {
    border-radius: 4px;
}

.baguetteBox-button {
    background-color: transparent !important;
}


@media(max-width: 768px) {
    body {
        padding: 0;
    }

    .container.gallery-container {
        border-radius: 0;
    }
}
</style>
<div class="container gallery-container">


    <div class="tz-gallery">

        <div class="row">
            <div class="col-md-3">
                <a class="lightbox" href="{{ asset('user/images/new-1.jpg')}}">
                    <img src="{{ asset('user/images/new-1.jpg')}}" alt="Park" class="img-responsive" width="300px;" height="200px;">
                </a>
            </div>
            <div class="col-md-3">
                <a class="lightbox" href="{{ asset('user/images/new-1.jpg')}}">
                    <img src="{{ asset('user/images/new-1.jpg')}}" alt="Park" class="img-responsive" width="300px;" height="200px;">
                </a>
            </div>
            <div class="col-md-3">
                <a class="lightbox" href="">
                    <img src="{{ asset('user/images/new-1.jpg')}}" alt="Park" class="img-responsive" width="300px;" height="200px;">
                </a>
            </div>
            <div class="col-md-3">
                <a class="lightbox" href="">
                    <img src="{{ asset('user/images/new-1.jpg')}}" alt="Park" class="img-responsive" width="300px;" height="200px;">
                </a>
            </div>
            <div class="col-md-3">
                <a class="lightbox" href="{{ asset('user/images/new-1.jpg')}}">
                    <img src="{{ asset('user/images/new-1.jpg')}}" alt="Park" class="img-responsive" width="300px;" height="200px;">
                </a>
            </div>
            <div class="col-md-3">
                <a class="lightbox" href="{{ asset('user/images/new-1.jpg')}}">
                    <img src="{{ asset('user/images/new-1.jpg')}}" alt="Park" class="img-responsive" width="300px;" height="200px;">
                </a>
            </div>
            <div class="col-md-3">
                <a class="lightbox" href="">
                    <img src="{{ asset('user/images/new-1.jpg')}}" alt="Park" class="img-responsive" width="300px;" height="200px;">
                </a>
            </div>
            <div class="col-md-3">
                <a class="lightbox" href="">
                    <img src="{{ asset('user/images/new-1.jpg')}}" alt="Park" class="img-responsive" width="300px;" height="200px;">
                </a>
            </div>
            
        </div>

    </div>

</div>

    <div class="whole-wrap">
        <div class="container">
            <div class="section-top-border">
                        <h3 class="title_color">What we do</h3>
                        <div class="row">
                            <div class="col-md-12">
                                <p class="generic-blockquote">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quo laborum, alias recusandae dolores error quam accusantium veniam iste sequi debitis, sed inventore voluptatibus ratione animi consequuntur officia quae incidunt maxime?lorem</p>
                            </div>
                        </div>
            </div>
            <div class="section-top-border">
                        <h3 class="title_color">Why you should join us</h3>
                        <div class="row">
                            <div class="col-md-12">
                                <p class="generic-blockquote">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quo laborum, alias recusandae dolores error quam accusantium veniam iste sequi debitis, sed inventore voluptatibus ratione animi consequuntur officia quae incidunt maxime?lorem</p>
                            </div>
                        </div>
            </div>
            <div class="section-top-border">
                <h3 class="title_color">Our Vision and Mission</h3>
                        <div class="row">
                            <div class="col-md-12">
                                <p class="generic-blockquote">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quo laborum, alias recusandae dolores error quam accusantium veniam iste sequi debitis, sed inventore voluptatibus ratione animi consequuntur officia quae incidunt maxime?lorem</p>
                            </div>
                        </div>
            </div>

        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.js"></script>
<script>
    baguetteBox.run('.tz-gallery');
</script>

@endsection

