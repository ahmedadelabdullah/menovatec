@extends('front.app')
@section('title' , 'Contact with Menova-Tech ')
@extends('front.parts.singleSlider')
@section('page-name')
    <h2>Contact Us</h2>
@endsection
@section('content')
    <main>
        <!-- ================ contact section start ================= -->
        <section class="contact-section">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <h2 class="contact-title">Get in Touch</h2>
                        </div>
                        <div class="col-lg-8">
                            <form class="form-contact contact_form" action="{{route('email.contact')}}" method="post">
                             @csrf
                                <div class="row">
                                    <div class="col-12">
                                        <div class="form-group">
                                            <textarea class="form-control w-100" name="description" id="message" cols="30" rows="9" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Message'" placeholder=" Enter Message"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <input class="form-control valid mt-5" name="name" id="name" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your name'" placeholder="Enter your name">


                                            <div class="" style="color: red">
                                                {{$errors->first('name')}}
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <input class="form-control valid mt-md-5" name="email" id="email" type="email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter email address'" placeholder="Email">

                                            <div class="" style="color: red">
                                                {{$errors->first('email')}}
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group">
                                            <input class="form-control" name="phone" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Phone'" placeholder="Enter Phone">
                                           <div class="" style="color: red">
                                               {{$errors->first('phone')}}
                                           </div>

                                        </div>
                                    </div>

                                    <div class="col-12">
                                        <div class="form-group">
                                            <input class="form-control" name="subject" id="subject" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Subject'" placeholder="Enter Subject">

                                            <div class="" style="color: #ff0000">
                                                {{$errors->first('subject')}}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group mt-3">
                                    <button type="submit" class="button button-contactForm boxed-btn">Send</button>
                                </div>
                            </form>
                        </div>
                        <div class="col-lg-3 offset-lg-1">
                            <div class="media contact-info">
                                <span class="contact-info__icon"><i class="ti-home"></i></span>
                                <div class="media-body">
                                    <h3>Alex, Egypt.</h3>
                                    <p>Semouha</p>
                                </div>
                            </div>
                            <div class="media contact-info">
                                <span class="contact-info__icon"><i class="ti-tablet"></i></span>
                                <div class="media-body">
                                    <h3>+2 01001173593</h3>
                                    <p>Sun to Fri 9am to 6pm</p>
                                </div>
                            </div>
                            <div class="media contact-info">
                                <span class="contact-info__icon"><i class="ti-email"></i></span>
                                <div class="media-body">
                                    <h3>Info@menovatec.com</h3>
                                    <p>Send us your query anytime!</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        <!-- ================ contact section end ================= -->
    </main>
@stop


