@extends('front.app')
    @include('front.parts.slider')
@section('content')
    <main>
        <!-- slider Area Start-->
        <div class="our-services  pt-50 pb-150 m-5">
            <h2 class="text-center m-5">What we Do?</h2>
            <div class="container">
                <div class="row">
                    <div class=" col-lg-4 col-md-6 col-sm-6">
                        <div class="single-services text-center mb-30">
                            <div class="services-ion">
                                <span class="flaticon-experience"></span>
                            </div>
                            <div class="services-cap">
                                <h5>SOFTWARE DEVELOPMENT</h5>
                                <p>In software development we introduce Innovative solutions are only
                                    possible with sound strategy and the knowledge that the environment
                                    is constantly changing.</p>
                            </div>
                        </div>
                    </div>
                    <div class=" col-lg-4 col-md-6 col-sm-6">
                        <div class="single-services text-center mb-30">
                            <div class="services-ion">
                                <span class="flaticon-pay"></span>
                            </div>
                            <div class="services-cap">
                                <h5>Trades & stocks</h5>
                                <p>MENOVA-TECH is a technology partner leveraging the latest technologies and premier
                                    vendors in the
                                    design andsupport of IT infrastructure to produce better
                                    business outcomes to our clients.</p>
                            </div>
                        </div>
                    </div>
                    <div class=" col-lg-4 col-md-6 col-sm-6">
                        <div class="single-services text-center mb-30">
                            <div class="services-ion">
                                <span class="flaticon-good"></span>
                            </div>
                            <div class="services-cap">
                                <h5>Digital Marketing</h5>
                                <p>As marketing services , our organization prides itself on driving traffic, converting visitors and
                                    evaluating productivity to eventually produce real results for our customers.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

{{--counter--}}

{{--counter--}}
        <!-- David Droga start -->
\        <!-- David Droga End -->
        <!-- Want To Work Start -->
        <div class="wantToWork-area wantToWork-area2 w-padding2">
            <form action="{{route('email.subscribe')}}" class="form-group" method="post">
                @csrf
            <div class="container">
                <div class="row align-items-center justify-content-between">



                    <div class="col-xl-12 col-lg-12 col-md-12">
                        <div class="wantToWork-caption wantToWork-caption2">
                            <h4 class="black-color text-center">We welcome you to contact us to see what's new</h4>
                        </div>
                    </div>
                    <div class="offset-sm-3 col-md-6">
                        <div class="form-group">
                            <input class="form-control p-4 m-3" name="email" id="name" type="text"  placeholder="Enter your email" required>
                        </div>
                        <div class="" style="color: red;margin-left: 15px;">
                            {{$errors->first('email')}}
                        </div>
                    </div>

                    <div class="offset-sm-3 col-md-6">
                        <div class="form-group text-center">
                            <button class="btn border-dark">submit</button>
                        </div>
                    </div>

                </div>

            </div>
            </form>
        </div>
        <!-- Want To Work End -->

    </main>
    <!-- Scroll Up -->
@stop

