@extends('base.frontEnd')

	@section('content')

		<div class="iq-breadcrumb-one  iq-bg-over iq-over-dark-50" style="background-image: url(images/about-us/01.jpg);">  
            <div class="container-fluid"> 
                <div class="row align-items-center">
                    <div class="col-sm-12">
                        <nav aria-label="breadcrumb" class="text-center iq-breadcrumb-two">
                            <h2 class="title">Contact</h2>
                            <ol class="breadcrumb main-bg">
                                <li class="breadcrumb-item"><a href="/">Home</a></li> 
                                <li class="breadcrumb-item active">Contact</li>
                            </ol>
                        </nav>
                    </div>
                </div> 
            </div>
        </div>

        <main id="main" class="site-main">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-sm-12">

                      @if (session('success'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                          {{ session('success') }}
                          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                      @endif

                        <div class="text-center iq-title-box iq-box iq-title-default">
                            <h2 class="iq-title">
                                Say Hello..!
                            </h2>                      
                            <p class="iq-title-desc">Are you a Chakras Support Professional? Want to submit content or work with us to have a more positive effect on your life and others? Contact Us. </p>
                        </div>

                        <div class="wrapper">

                            <form action="/contact" method="post" class="wpcf7-form init" data-status="init">
                                @csrf
                                <div class="contact-form contact-style">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="cfield">
                                                <span class="wpcf7-form-control-wrap your-name">
                                                    <input type="text" name="name" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" placeholder="Your full name please" required>
                                                </span>
                                            </div>
                                        </div>
                                        
                                        <div class="col-md-6">
                                            <div class="cfield">
                                                <span class="wpcf7-form-control-wrap tel-478">
                                                    <input type="tel" name="phone" class="wpcf7-form-control wpcf7-text wpcf7-tel wpcf7-validates-as-required wpcf7-validates-as-tel" aria-required="true" placeholder="Phone Number">
                                                </span>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="cfield">
                                                <span class="wpcf7-form-control-wrap your-email">
                                                    <input type="email" name="email" class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email" placeholder="Your Email" required>
                                                </span>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="cfield">
                                                <span class="wpcf7-form-control-wrap your-message">
                                                    <textarea name="message" cols="40" rows="10" class="wpcf7-form-control wpcf7-textarea wpcf7-validates-as-required" aria-required="true" aria-invalid="false" placeholder="Your Message" required></textarea>
                                                </span>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <button id="submit" name="submit" type="submit" value="Send" class="btn btn-hover iq-button">
                                                <span class="iq-btn-text-holder">Send Message</span>
                                                <span class="iq-btn-icon-holder">
                                                    <i aria-hidden="true" class="ion ion-plus"></i>
                                                </span>
                                                <br>
                                            </button>
                                        </div>
                                        <div class="wpcf7-response-output" aria-hidden="true"></div>
                                    </form>
                                    
                        </div>
                        
                    </div>
                </div>
            </div>
        </main>

	@endsection