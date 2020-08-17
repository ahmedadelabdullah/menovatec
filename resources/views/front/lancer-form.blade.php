@extends('front.app')
@section('title' , 'Join Us with Menova-Tech ')
@extends('front.parts.singleSlider')
@section('page-name')
    <h2>Join us as a free lancer</h2>
@endsection
@section('content')
    <main>
        <!-- ================ contact section start ================= -->
        <section class="contact-section">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <h2 class="contact-title">WE ARE HIRING </h2>
                            <p class="" style="max-width: 750px">Join us in our journey of synchronizing thoughts that
                                live in our minds with reality as we create wonders. P.S. Magic is about to happen.
                                Become part of it! Contact information is provided on our website.</p>
                        </div>
                        <div class="col-lg-8">
                            <form class="form-contact contact_form" action="{{route('email.freelancer')}}" method="post" >
                                @csrf
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <input class="form-control valid mt-5" name="name" type="text" placeholder = 'Enter your name' required>
                                            <div class="" style="color: red">
                                                {{$errors->first('name')}}
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <input class="form-control valid mt-md-5" name="email" id="email" type="email"  placeholder="Email" required>
                                            <div class="" style="color: red">
                                                {{$errors->first('email')}}
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group">
                                            <input class="form-control" name="phone" type="text"  placeholder="Phone" required>
                                            <div class="" style="color: red">
                                                {{$errors->first('phone')}}
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group">

                                            <input class="form-control" name="subject" id="subject" type="text" placeholder="Enter Subject" required>
                                            <div class="" style="color: red">
                                                {{$errors->first('subject')}}
                                            </div>
                                        </div>
                                    </div>


                                    <div class="col-12 my-4">
                                        <div class="form-group">
                                            <textarea class="form-control" name="description" id="message" cols="25" rows="5"  placeholder=" Add some things about you" required></textarea>
                                            <div class="" style="color: red">
                                                {{$errors->first('description')}}
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
                                    <h3>01016070906</h3>
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


