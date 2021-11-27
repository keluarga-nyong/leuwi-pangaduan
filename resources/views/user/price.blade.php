@extends('layouts.user.new-app')

@section('content')
    
        <!-- MAIN FEATURES -->
        <div class="main-features" >
            <div class="container">
                <div class="row">
                <h1 style="color: #fff;">PRICE</h1>
                </div>
            </div>
        </div>
        <!-- END MAIN FEATURES -->
       
        <section>
            <div class="container">
                <div class="row">
                    <div class="col-md-6 justify-content-center">
                        <div class="card-price">
                            <div class="imgBx">
                                <img src="{{ asset('user/assets/img/logo/logo.png') }}">
                            </div>
                            <div class="contentBx">
                                <h2 style="margin-bottom:20px;">Weekday</h2>
                                <div class="size" style="margin-bottom:4px;">
                                    <h3>Dewasa :</h3>
                                    <span>Rp. 20.000</span>
                                </div>
                                <div class="size" style="margin-bottom:20px;">
                                    <h3>Anak :</h3>
                                    <span>Rp. 10.000</span>
                                </div>
                                <a href="tiket">Buy Now</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 justify-content-center">
                        <div class="card-price">
                            <div class="imgBx">
                                <img src="{{ asset('user/assets/img/logo/logo.png') }}">
                            </div>
                            <div class="contentBx">
                                <h2 style="margin-bottom:20px;">Weekend</h2>
                                <div class="size" style="margin-bottom:4px;">
                                    <h3>Dewasa :</h3>
                                    <span>Rp. 30.000</span>
                                </div>
                                <div class="size" style="margin-bottom:20px;">
                                    <h3>Anak :</h3>
                                    <span>Rp. 15.000</span>
                                </div>
                                <a href="/tiket">Buy Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <div class="main-features " style="margin-bottom: 0px;">
            <div class="container">
                <div class="row">
                <h1 style="color: #fff;">TESTIMONI</h1>
                </div>
            </div>
        </div>
        <!-- TESTIMONI -->
        <section id="testimoial-parallax" class="testimonial-with-bg parallax" style="margin-bottom: 0px;">
            <div class="container">
                <div class="testimonial slick-carousel">
                    <div class="testimonial-container">
                        <div class="testimonial-body">
                            <div class="testimonial-author">
                                <span class="author-name"> <i class="fa fa-user" color="white"></i>&nbsp; Antonius</span>
                            </div><br>
                            <p>Credibly extend parallel relationships after clicks-and-mortar content. Credibly pontificate team building alignments rather than diverse quality vectors.</p>

                        </div>
                        <div class="testimonial-body">
                            <div class="testimonial-author">
                                <span class="author-name"> <i class="fa fa-user" color="white"></i>&nbsp;Michael</span>
                            </div><br>
                            <p>Credibly pontificate team building alignments rather than diverse quality vectors. Monotonectally benchmark business communities for distinctive mindshare.</p>
                        </div>
                        <div class="testimonial-body">
                            <div class="testimonial-author">
                                <span class="author-name"> <i class="fa fa-user" color="white"></i>&nbsp;Palmer</span>
                            </div><br>
                            <p>Appropriately morph low-risk high-yield process improvements through progressive partnerships. Uniquely brand enabled. Globally network timely imperatives without plug-and-play schemas.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- END TESTIMONI -->
@endsection('content')
        