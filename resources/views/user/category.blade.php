@extends('user.site_user.user_master')

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
    .category-area{
        margin-top: -110px;
    }
    
   
}

</style>
    <div class="text-center">
        <img src="{{asset('user/images/about.jpg')}}" alt="" class="img-fluid div" width="100%">
        <div class="div texts" style="position: relative;top: -100px; z-index: 100;">
            <h2 class="aab" style="color: #fff; margin-top: -100px;font-size: 48px;" >All Company</h2>
            <div class="breadcrumbs">
                <ul>
                    <li><a href="{{url('/')}}" style="color:#fff!important;">Home</a></li>
                    <li>Company</li>
                </ul>
            </div>
        </div>
    </div>
       <section class="category-area section-padding">
        <div class="container">

            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="single-category text-center mb-4">
                        <img src="assets/images/cat1.png" alt="category">
                        <h4>accounting & Finance</h4>
                        <h5>30 Companies</h5>
                        <a href="company-category-detail.html" class="more">More Details >>></a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="single-category text-center mb-4">
                        <img src="assets/images/cat2.png" alt="category">
                        <h4>production & operation</h4>
                        <h5>250 Companies</h5>
                        <a href="company-category-detail.html" class="more">More Details >>></a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="single-category text-center mb-4">
                        <img src="assets/images/cat3.png" alt="category">
                        <h4>telecommunication</h4>
                        <h5>50 Companies</h5>
                        <a href="#" class="more">More Details >>></a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="single-category text-center mb-4">
                        <img src="assets/images/cat4.png" alt="category">
                        <h4>garments & textile</h4>
                        <h5>5 Companies</h5>
                        <a href="#" class="more">More Details >>></a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="single-category text-center mb-4 mb-lg-0">
                        <img src="assets/images/cat5.png" alt="category">
                        <h4>marketing and sales</h4>
                        <h5>43 Companies</h5>
                        <a href="#" class="more">More Details >>></a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="single-category text-center mb-4 mb-lg-0">
                        <img src="assets/images/cat6.png" alt="category">
                        <h4>engineer & architech</h4>
                        <h5>25 Companies</h5>
                        <a href="#" class="more">More Details >>></a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="single-category text-center mb-4 mb-md-0">
                        <img src="assets/images/cat7.png" alt="category">
                        <h4>design & crative</h4>
                        <h5>7 Companies</h5>
                        <a href="#" class="more">More Details >>></a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="single-category text-center">
                        <img src="assets/images/cat8.png" alt="category">
                        <h4>customer support</h4>
                        <h5>30 Companies</h5>
                        <a href="#" class="more">More Details >>></a>
                    </div>
                </div>
            </div>
           
        </div>
    </section>
    <!-- Category Area End -->
@endsection