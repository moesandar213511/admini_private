@extends('user.site_user.user_master')
{{-- @section('title')
    Event | {{$websiteinfo['website_name']}}
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
    <div class="text-center">
        <img src="{{asset('user/images/about.jpg')}}" alt="" class="img-fluid div" width="100%">
        <div class="div texts" style="position: relative;top: -100px; z-index: 100;">
            <h2 class="aab" style="color: #fff; margin-top: -100px;font-size: 48px;" >Event</h2>
            <div class="breadcrumbs">
                <ul>
                    <li><a href="{{url('/')}}" style="color:#fff!important;">Home</a></li>
                    <li>Event</li>
                </ul>
            </div>
        </div>
    </div>
    
        <section class="blog-posts-area section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-8 post-list blog-post-list">
                    <div class="blog-listing">
                        <div class="blog-item">
                            <div class="post-item blog-post-item">
                                <div class="row">
                                    <div class="col-md-6 col-sm-12">
                                        <div class="content-pad">
                                            <div class="blog-thumbnail">
                                                <div class="item-thumbnail-gallery">
                                                    <div class="item-thumbnail">
                                                     <a href="{{url('/event/{id}')}}">
                                                                <img src="{{asset('user/images/1.jpg')}}" alt="image">
                                                                <div class="thumbnail-hoverlay main-color-1-bg"></div>
                                                                <div class="thumbnail-hoverlay-cross"></div>
                                                                </a>
                                                            </div>
                                                        </div>            
                                                    </div><!--/blog-thumbnail-->
                                                    <div class="thumbnail-overflow hidden-xs hidden-sm">
                                                        
                                                    </div><!--/thumbnail-overflow-->
                                                </div>
                                            </div>

                                            <div class="col-md-6 col-sm-12">
                                                <div class="content-pad">
                                                    <div class="item-content">
                                                        <h3 class="title"><a href="{{url('/event/{id}')}}" class="main-color-1-hover">Spark Of Genius</a></h3>
                                                        <div class="item-excerpt blog-item-excerpt">
                                                            <p>To take a trivial example which of us ever undertakes laborious physical exercise except.</p>
                                                        </div>
                                                        <div class="item-meta blog-item-meta">
                                                            
                                                            <div class="event-time">Time :  10am to 12pm</div>
                                                            <div class="event-place">Location : Yangon</div>
                                                        </div>
                                                        <a class="button" href="{{url('/event/{id}')}}">DETAILS<i class="fa fa-angle-right"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div><!--/post-item-->
                                    </div>
                                </div><!-- /blog-item -->


                                <div class="blog-item">
                                    <div class="post-item blog-post-item">
                                        <div class="row">
                                            <div class="col-md-6 col-sm-12">
                                                <div class="content-pad">
                                                    <div class="blog-thumbnail">
                                                        <div class="item-thumbnail-gallery">
                                                            <div class="featured-causes" data-item="3" data-nav="false" data-dots="false" data-auto="false">
                                                                <div class="item">
                                                                    <a href="{{url('/event/{id}')}}">
                                                                        <div class="item-thumbnail">
                                                                            <img src="{{asset('user/images/2.jpg')}}" alt="image">
                                                                            <div class="thumbnail-hoverlay main-color-1-bg"></div>
                                                                            <div class="thumbnail-hoverlay-cross"></div>
                                                                        </div>
                                                                    </a>
                                                                </div>

                                                                
                                                            </div>
                                                        </div>
                                                    </div>

                                                    
                                                </div>
                                            </div>

                                            <div class="col-md-6 col-sm-12">
                                                <div class="content-pad">
                                                    <div class="item-content">
                                                        <h3 class="title"><a href="{{url('/event/{id}')}}" class="main-color-1-hover">Our New Campus</a></h3>
                                                        <div class="item-excerpt blog-item-excerpt">
                                                            <p>Nor again is there anyone who loves or pursues or desires to obtain pain of itself but because occasionally circumstances.</p>
                                                        </div>
                                                        <div class="item-meta blog-item-meta">
                                                            <div class="event-time">Time :  10am to 12pm</div>
                                                            <div class="event-place">Location : Yangon</div>
                                                        </div>
                                                        <a class="button" href="{{url('/event/{id}')}}">DETAILS<i class="fa fa-angle-right"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div><!-- /blog-item -->

                               
                            </div><!-- /blog-listing -->
                        </div><!-- /col-md-9 -->
                <div class="col-lg-4 sidebar">
                    <div class="single-widget search-widget">
                        <form class="example" action="#" style="margin:auto;max-width:300px">
                            <input type="text" placeholder="Search Posts" name="search2" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Search Events'" required>
                            <button type="submit"><i class="fa fa-search"></i></button>
                        </form>                             
                    </div>

                    

                    <div class="single-widget recent-posts-widget">
                        <h4 class="title">Recent Events</h4>
                        <div class="blog-list ">
                            <div class="single-recent-post d-flex flex-row">
                                <div class="recent-thumb">
                                    <img class="img-fluid" src="{{asset('user/images/r1.jpg')}}" alt="">
                                </div>
                                <div class="recent-details">
                                    <a href="{{url('/event/{id}')}}">
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
                                    <img class="img-fluid" src="{{url('/event/{id}')}}" alt="">
                                </div>
                                <div class="recent-details">
                                    <a href="{{url('/event/{id}')}}">
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
@endsection