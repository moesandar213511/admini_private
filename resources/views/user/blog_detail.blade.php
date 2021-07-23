@extends('user.site_user.user_master')
{{-- @section('title')
    {!! $blog['name'] !!} |{{$websiteinfo['website_name']}}
@endsection --}}
@section('css')
    <script type="text/javascript" src="https://platform-api.sharethis.com/js/sharethis.js#property=5da47a4026f4f800126d341a&product=inline-share-buttons" async="async"></script>

    
   
}
@endsection
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
   
    
   
}

h1,h2,h3,h4,h5,h6,p,span{
        font-family: Pyidaungsu!important;
}

</style>
    <div class="text-center">
        <img src="{{asset('user/images/about.jpg')}}" alt="" class="img-fluid div" width="100%">
        <div class="div texts" style="position: relative;top: -100px; z-index: 100;">
            <h2 class="aab" style="color: #fff; margin-top: -100px;font-size: 48px;" >News-Detail</h2>
            <div class="breadcrumbs">
                <ul>
                    <li><a href="{{url('/')}}" style="color:#fff!important;">Home</a></li>
                    <li>News-Detail</li>
                </ul>
            </div>
        </div>
    </div>
  
    <!-- Start blog-posts Area -->
        <section class="blog-posts-area section-padding">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 post-list blog-post-list">
                            <div class="single-post">
                                <img class="img-fluid" src="{{asset('user/images/p1.jpg')}}" alt="">
                                <ul class="tags">
                                    <li><a href="#">Art</a></li>
                                    <li><a href="#">Technology</a></li>
                                    <li><a href="#">Fashion</a></li>
                                </ul>
                                <a href="#">
                                    <h2>
                                        Cartridge Is Better Than Ever
                                        A Discount Toner
                                    </h2>
                                </a>
                                <div class="content-wrap">
                                    <p>
                                        MCSE boot camps have its supporters and its detractors. Some people do not understand why you should have to spend money on boot camp when you can get the MCSE study materials yourself at a fraction of the camp price. However, who has the willpower to actually sit through a self-imposed MCSE training. who has the willpower to actually sit through a self-imposed MCSE training.
                                    </p>

                                    <p>
                                        MCSE boot camps have its supporters and its detractors. Some people do not understand why you should have to spend money on boot camp when you can get the MCSE study materials yourself at a fraction of the camp price. However, who has the willpower to actually sit through a self-imposed MCSE training. who has the willpower to actually sit through a self-imposed MCSE training.
                                    </p>
                                    
                                    <p>
                                        MCSE boot camps have its supporters and its detractors. Some people do not understand why you should have to spend money on boot camp when you can get the MCSE study materials yourself at a fraction of the camp price. However, who has the willpower to actually sit through a self-imposed MCSE training. who has the willpower to actually sit through a self-imposed MCSE training.
                                    </p>

                                </div>
                                

                            <div class="bottom-meta">
                                    <div class="user-details row align-items-center">
                                        <div class="social-wrap col-lg-6">
                                            <ul>
                                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                                <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                                                <li><a href="#"><i class="fa fa-behance"></i></a></li>
                                            </ul>
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>																		
                        </div>
                        <div class="col-lg-4 sidebar mt-5 mt-lg-0">
                                <div class="single-widget search-widget">
                                    <form class="example" action="#" style="margin:auto;max-width:300px">
                                        <input type="text" placeholder="Search Blogs" name="search2">
                                        <button type="submit"><i class="fa fa-search"></i></button>
                                    </form>								
                                </div>
            
                                
            
                                <div class="single-widget recent-posts-widget">
                                    <h4 class="title">Recent Blogs</h4>
                                    <div class="blog-list ">
                                        <div class="single-recent-post d-flex flex-row">
                                            <div class="recent-thumb">
                                                <img class="img-fluid" src="{{asset('user/images/r1.jpg')}}" alt="">
                                            </div>
                                            <div class="recent-details">
                                                <a href="{{url('/blog/{id}')}}">
                                                    <h4>
                                                        Home Audio Recording
                                                        For Everyone
                                                    </h4>
                                                </a>
                                                <p>
                                                    02 hours ago
                                                </p>
                                            </div>
                                        </div>	
                                        <div class="single-recent-post d-flex flex-row">
                                            <div class="recent-thumb">
                                                <img class="img-fluid" src="{{asset('user/images/r2.jpg')}}" alt="">
                                            </div>
                                            <div class="recent-details">
                                                <a href="blog-single.html">
                                                    <h4>
                                                        Home Audio Recording
                                                        For Everyone
                                                    </h4>
                                                </a>
                                                <p>
                                                    02 hours ago
                                                </p>
                                            </div>
                                        </div>	
                                        <div class="single-recent-post d-flex flex-row">
                                            <div class="recent-thumb">
                                                <img class="img-fluid" src="{{asset('user/images/r3.jpg')}}" alt="">
                                            </div>
                                            <div class="recent-details">
                                                <a href="blog-single.html">
                                                    <h4>
                                                        Home Audio Recording
                                                        For Everyone
                                                    </h4>
                                                </a>
                                                <p>
                                                    02 hours ago
                                                </p>
                                            </div>
                                        </div>	
                                        <div class="single-recent-post d-flex flex-row">
                                            <div class="recent-thumb">
                                                <img class="img-fluid" src="{{asset('user/images/r4.jpg')}}" alt="">
                                            </div>
                                            <div class="recent-details">
                                                <a href="blog-single.html">
                                                    <h4>
                                                        Home Audio Recording
                                                        For Everyone
                                                    </h4>
                                                </a>
                                                <p>
                                                    02 hours ago
                                                </p>
                                            </div>
                                        </div>																																					
                                    </div>								
                                </div>		
                            </div>
                    </div>
                </div>	
        </section>
    <!-- End blog-posts Area -->
@endsection