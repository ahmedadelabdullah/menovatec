@extends('front.app')
@section('title' , 'About Menova-Tech ')
@extends('front.parts.singleSlider')
@section('page-name')
    <h2>About Us</h2>
@endsection
@section('content')
        <!-- Hero Area End -->
        <div class="about_info_area plus_padding py-4" style="margin: 110px 0">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-xl-6 col-lg-6">
                        <div class="about_text">
                            <h3 class="font-weight-bold">Why our Consulting?</h3>
                            <p>We won’t speak, we’ll let our work speak for us! Join our family as we expand our horizons.
                                By using creativity and technology, we create digital experiences
                                for brands and companies. Let us worry about all the details as you shine loving what you do!</p>
                            <a href="#" class="boxed-btn3">About Us</a>
                        </div>
                    </div>


                    <div class="col-xl-6 col-lg-6">
                        <div class="about_thumb">
                            <img src="/assets/img/about/about.png" alt="" style="border-radius: 8px;width: 100%">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--All startups Start -->
        <div class="all-starups-area fix">
            <!-- left Contents -->
            <div class="starups">
                <div class="starups-details">
                    <h3>Yuo need to make<br>their business work</h3>
                    <!-- Details -->
                    <div class="starups-list">
                        <ul>
                            <li>
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="30px" height="30px">
                                <path fill-rule="evenodd"  fill="rgb(4, 219, 236)" d="M15.000,0.000 C23.284,0.000 30.000,6.716 30.000,15.000 C30.000,23.284 23.284,30.000 15.000,30.000 C6.716,30.000 -0.000,23.284 -0.000,15.000 C-0.000,6.716 6.716,0.000 15.000,0.000 Z"/>
                                <text kerning="auto" font-family="themify" fill="rgb(255, 255, 255)" font-size="14px" x="9px" y="22.0320000000002px">&#58956;</text>
                                </svg>
                            </li>
                            <li>
                                <p>Established in 2020, MENOVAtEC was created with the ultimate dream of helping you illustrate your vision
                                    on the web. Art isn’t only what you
                                    draw on paper; art is what we promise to offer as we paint your vision and help your business grow.</p>
                            </li>
                        </ul>
                        <ul>
                            <li>
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="30px" height="30px">
                                <path fill-rule="evenodd"  fill="rgb(4, 219, 236)" d="M15.000,0.000 C23.284,0.000 30.000,6.716 30.000,15.000 C30.000,23.284 23.284,30.000 15.000,30.000 C6.716,30.000 -0.000,23.284 -0.000,15.000 C-0.000,6.716 6.716,0.000 15.000,0.000 Z"/>
                                <text kerning="auto" font-family="themify" fill="rgb(255, 255, 255)" font-size="14px" x="9px" y="22.0320000000002px">&#58956;</text>
                                </svg>
                            </li>
                            <li>
                                <p>Think you got what it takes? Join us in our journey of synchronizing thoughts that live in our
                                    minds with reality as we create wonders.
                                    P.S. Magic is about to happen. Become part of it! Contact information is provided
                                    on our website.</p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!--Right Contents  -->
            <div class="starups-img"></div>
        </div>
        <!--All startups End -->
        <!-- Testimonial Start -->
        <div class="testimonial-area testimonial-padding">
            <div class="container ">
                <div class="row d-flex justify-content-center">
                    <div class="col-xl-11 col-lg-11 col-md-9">
                        <div class="h1-testimonial-active">
                            <!-- Single Testimonial -->
                            <div class="single-testimonial text-center">
                                    <!-- Testimonial Content -->
                                <div class="testimonial-caption ">
                                    <div class="testimonial-top-cap">
                                        <img src="/assets/img/icon/testimonial.png" alt="">
                                        <p>“Initially we thought our website was going be just to validate us as a company. But
                                            what it did actually was save a bunch of
                                            time by implementing different tools that we didn’t even know we could use a
                                            website for.”</p>
                                    </div>
                                    <!-- founder -->
                                    <div class="testimonial-founder d-flex align-items-center justify-content-center">
                                        <div class="founder-img">
                                            <img src="/assets/img/testmonial/testim.jpg" alt="" style="border-radius: 50%;">

                                        </div>
                                        <div class="founder-text">
                                            <span>Mohamed Ali</span>
                                            <p>UIX designer</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Single Testimonial -->
                            <div class="single-testimonial text-center">
                                    <!-- Testimonial Content -->
                                <div class="testimonial-caption ">
                                    <div class="testimonial-top-cap">
                                        <img src="/assets/img/icon/testimonial.png" alt="">
                                        <p>“When you choose Iceberg you get a wonderful, professional team with innovative ideas, awesome customer
                                            service, and exactly what you’re
                                            looking for. Iceberg took the ideas that we had and put them perfectly on the web.” </p>
                                    </div>
                                    <!-- founder -->
                                    <div class="testimonial-founder d-flex align-items-center justify-content-center">
                                        <div class="founder-img">
                                            <img src="/assets/img/testmonial/Homepage_testi.png" alt="">
                                        </div>
                                        <div class="founder-text">
                                            <span>Ahmed Adel</span>
                                            <p>UIX designer</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Testimonial End -->
    </main>
@stop
