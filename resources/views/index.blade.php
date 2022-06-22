@extends("base")

@section("content")
<!-- ==================== Start Slider ==================== -->

    <header class="slider">
        <div class="swiper-container parallax-slider">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="bg-img valign" data-background="{{ public_path().'/img/slid/slider3.webp' }}" data-overlay-dark="6">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-10 offset-lg-1">
                                    <div class="caption hmone">
                                        <h5 class="thin custom-font">Innovative</h5>
                                        <h1 data-splitting><a href="#0">Architecture</a>
                                        </h1>
                                        <p class="mt-10">Right design and right ideas matter a lot of in interior design
                                            business. <br> a style that makes a statement.</p>
                                        <a href="#0" class="btn-curve btn-bord btn-lit mt-30">
                                            <span>Read More</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="bg-img valign" data-background="{{ public_path().'/img/slid/slider2.webp' }}" data-overlay-dark="5">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-10 offset-lg-1">
                                    <div class="caption hmone">
                                        <h5 class="thin custom-font">Classic</h5>
                                        <h1 data-splitting><a href="#0">
                                                and Modern
                                            </a></h1>
                                        <p class="mt-10">Right design and right ideas matter a lot of in interior design
                                            business. <br> a style that makes a statement.</p>
                                        <a href="#0" class="btn-curve btn-bord btn-lit mt-30">
                                            <span>Read More</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="bg-img valign" data-background="{{ public_path().'/img/slid/slider1.webp' }}" data-overlay-dark="6">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-10 offset-lg-1">
                                    <div class="caption hmone">
                                        <h5 class="thin custom-font">Elegant &</h5>
                                        <h1 data-splitting><a href="#0">
                                                Unique Design
                                            </a>
                                        </h1>
                                        <p class="mt-10">Right design and right ideas matter a lot of in interior design
                                            business. <br> a style that makes a statement.</p>
                                        <a href="#0" class="btn-curve btn-bord btn-lit mt-30">
                                            <span>Read More</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="bg-img valign" data-background="{{ public_path().'/img/slid/slider5.webp' }}" data-overlay-dark="5">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-10 offset-lg-1">
                                    <div class="caption hmone">
                                        <h5 class="thin custom-font">interior</h5>
                                        <h1 data-splitting><a href="#0">
                                                design agency
                                            </a></h1>
                                        <p class="mt-10">Right design and right ideas matter a lot of in interior design
                                            business. <br> a style that makes a statement.</p>
                                        <a href="#0" class="btn-curve btn-bord btn-lit mt-30">
                                            <span>Read More</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- slider setting -->
            <div class="setone">
                <div class="swiper-button-next swiper-nav-ctrl next-ctrl">
                    <i class="fas fa-chevron-right"></i>
                </div>
                <div class="swiper-button-prev swiper-nav-ctrl prev-ctrl">
                    <i class="fas fa-chevron-left"></i>
                </div>
            </div>
            <div class="swiper-pagination top custom-font"></div>
        </div>
    </header>

    <!-- ==================== End Slider ==================== -->



    <!-- ==================== Start about ==================== -->

    <section class="about section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <div class="exp-img wow fadeInUp" data-wow-delay=".3s">
                        <div class="img bg-img wow imago" data-background="{{ public_path().'/img/exp02.jpg' }}">
                            <div class="since custom-font">
                                <span>Since</span>
                                <span>2020</span>
                            </div>
                            <div class="years custom-font">
                                <h2>STUDIO1</h2>
                                <h5>Creators</h5>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7 valign">
                    <div class="exp-content wow fadeInUp" data-wow-delay=".3s">
                        <h6 class="sub-title">About Us</h6>
                        <h2 class="mb-20 playfont">Best Designers <br> Architectures for You.</h2>
                        <p>Architecture bibendum pharetra eleifend. Suspendisse vel volutpat purus, sit amet bibendum
                            nisl. Cras mollis turpis a ipsum ultes, nec condimentum ipsum consequat. Mauris vitae
                            consequat nibh, vitae interdum mi.</p>
                        <div class="numbers mt-50">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="item">
                                        <h3><span class="nbr custom-font">50+</span></h3>
                                        <h6>Projects</h6>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="item">
                                        <h3><span class="nbr custom-font">20+</span></h3>
                                        <h6>Clients</h6>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="item">
                                        <h3><span class="nbr custom-font">3+</span></h3>
                                        <h6>Years</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ==================== End about ==================== -->



    <!-- ==================== Start Services ==================== -->

    <section class="services section-padding bg-dark">
        <div class="container">
            <div class="section-head text-center">
                <div class="row justify-content-center">
                    <div class="col-lg-6 col-md-8 col-sm-10">
                        <h6 class="custom-font wow fadeInDown" data-wow-delay=".3s">Best Features</h6>
                        <h4 class="playfont wow flipInX" data-wow-delay=".5s">Our Services</h4>
                    </div>
                </div>
            </div>
            <div class="row bord-box bg-img wow fadeInUp" data-wow-delay=".3s" data-background="{{ public_path().'/img/slid/slider1.webp' }}">

                <div class="col-lg-3 col-md-6 item-bx">
                    <h2 class="custom-font numb">01</h2>
                    <h6 class="mb-20 text-info">Interior</h6>
                    <p>Cras mollis turpis a ipsum ultes, nec cond imentum ipsum consequat.</p>
                    <a href="#0" class="more custom-font mt-30">Read More</a>
                </div>

                <div class="col-lg-3 col-md-6 item-bx">
                    <h2 class="custom-font numb">02</h2>
                    <h6 class="mb-20 text-info">Architectural</h6>
                    <p>Cras mollis turpis a ipsum ultes, nec cond imentum ipsum consequat.</p>
                    <a href="#0" class="more custom-font mt-30">Read More</a>
                </div>

                <div class="col-lg-3 col-md-6 item-bx">
                    <h2 class="custom-font numb">03</h2>
                    <h6 class="mb-20 text-info">Landscape</h6>
                    <p>Cras mollis turpis a ipsum ultes, nec cond imentum ipsum consequat.</p>
                    <a href="#0" class="more custom-font mt-30">Read More</a>
                </div>

                <div class="col-lg-3 col-md-6 item-bx">
                    <h2 class="custom-font numb">04</h2>
                    <h6 class="mb-20 text-info">Fitouts</h6>
                    <p>Cras mollis turpis a ipsum ultes, nec cond imentum ipsum consequat.</p>
                    <a href="#0" class="more custom-font mt-30">Read More</a>
                </div>

            </div>
        </div>
    </section>

    <!-- ==================== End Services ==================== -->



    <!-- ==================== Start works ==================== -->

    <section class="portfolio section-padding">
        <div class="container-fluid">
            <div class="container">
                <div class="section-head text-center">
                    <div class="row justify-content-center">
                        <div class="col-lg-6 col-md-8 col-sm-10">
                            <h6 class="custom-font wow fadeInDown" data-wow-delay=".3s">Best Works</h6>
                            <h4 class="playfont wow flipInX" data-wow-delay=".5s">Our Projects</h4>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">

                <!-- filter links -->
                <div class="filtering text-center col-12 wow fadeInUp" data-wow-delay=".3s">
                    <div class="filter bg-img bg-repeat" data-background="{{ public_path().'/img/line-pattern1.png' }}">
                        <span data-filter='*' class="active">All</span>
                        <span data-filter='.interior'>Interior</span>
                        <span data-filter='.arch'>Architectural</span>
                        <span data-filter='.land'>Landsacape</span>
                        <span data-filter='.fit'>Fitouts</span>
                    </div>
                </div>

                <!-- gallery -->
                <div class="gallery twsty full-width">

                    <!-- gallery item -->
                    <div class="items interior mt-50 wow fadeInUp" data-wow-delay=".3s">
                        <div class="item-img bg-img wow imago" data-background="{{ public_path().'/img/portfolio/mas/01.jpg' }}">
                            <a href="#0">
                                <div class="item-img-overlay"></div>
                            </a>
                        </div>
                        <div class="info mt-10">
                            <h5>Fantastic interior</h5>
                            <span>Interior Designing</span>
                        </div>
                    </div>

                    <!-- gallery item -->
                    <div class="items arch mt-50 wow fadeInUp" data-wow-delay=".3s">
                        <div class="item-img bg-img wow imago" data-background="{{ public_path().'/img/portfolio/mas/02.jpg' }}">
                            <a href="#0">
                                <div class="item-img-overlay valign"></div>
                            </a>
                        </div>
                        <div class="info mt-10">
                            <h5>Choose Your Dream</h5>
                            <span>Architectural Designing</span>
                        </div>
                    </div>

                    <!-- gallery item -->
                    <div class="items land mt-50 wow fadeInUp" data-wow-delay=".3s">
                        <div class="item-img bg-img wow imago" data-background="{{ public_path().'/img/portfolio/mas/03.jpg' }}">
                            <a href="#0">
                                <div class="item-img-overlay valign"></div>
                            </a>
                        </div>
                        <div class="info mt-10">
                            <h5>Luxury Villa</h5>
                            <span>Landsacape</span>
                        </div>
                    </div>

                    <!-- gallery item -->
                    <div class="items fit theaters mt-50 wow fadeInUp" data-wow-delay=".3s">
                        <div class="item-img bg-img wow imago" data-background="{{ public_path().'/img/portfolio/mas/04.jpg' }}">
                            <a href="#0">
                                <div class="item-img-overlay valign"></div>
                            </a>
                        </div>
                        <div class="info mt-10">
                            <h5>Creative Spaces</h5>
                            <span>Fitout Services</span>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </section>

    <!-- ==================== End works ==================== -->



    <!-- ==================== Start Skills Circle ==================== -->

    <section class="skills-circle section-padding bg-img parallaxie" data-background="{{ public_path().'/img/0001.webp' }}" data-overlay-dark="7">
        <div class="container">
            <div class="section-head text-center">
                <div class="row justify-content-center">
                    <div class="col-lg-6 col-md-8 col-sm-10">
                        <h6 class="custom-font wow fadeInDown" data-wow-delay=".3s">Best Skills</h6>
                        <h4 class="playfont wow flipInX" data-wow-delay=".5s">Best Skills</h4>
                    </div>
                </div>
            </div>
            <div class="row wow fadeInUp" data-wow-delay=".3s">
                <div class="col-lg-3 col-md-6">
                    <div class="item text-center">
                        <div class="skill" data-value="0.98">
                            <span class="custom-font">98%</span>
                            <h6>INTERIOR DESIGNING</h6>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="item text-center">
                        <div class="skill" data-value="0.95">
                            <span class="custom-font">95%</span>
                            <h6>ARCHITECTURAL DESIGNING</h6>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="item text-center">
                        <div class="skill" data-value="0.95">
                            <span class="custom-font">95%</span>
                            <h6>LANDSCAPE</h6>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="item text-center">
                        <div class="skill" data-value="0.92">
                            <span class="custom-font">92%</span>
                            <h6>FITOUT SERVICES</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ==================== End Skills Circle ==================== -->

    <!-- ==================== Start contact ==================== -->

    <section class="contact cont-map mt-50">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-md-6 contact-form wow fadeInDown" data-wow-delay=".3s">
                    <form id="contact-form" method="post" action="contact.php">
                        <div class="section-head">
                            <h6 class="custom-font">Contact Us</h6>
                            <h4 class="playfont">Get In Touch</h4>
                        </div>

                        <div class="messages"></div>

                        <div class="controls">

                            <div class="form-group">
                                <input id="form_name" type="text" name="name" placeholder="Name" required="required">
                            </div>

                            <div class="form-group">
                                <input id="form_phone" type="text" name="phone" placeholder="Phone Number"
                                    required="required">
                            </div>

                            <div class="form-group">
                                <input id="form_email" type="email" name="email" placeholder="Email"
                                    required="required">
                            </div>

                            <div class="form-group">
                                <textarea id="form_message" name="message" placeholder="Message" rows="4"
                                    required="required"></textarea>
                            </div>

                            <button type="submit" class="btn-curve btn-color"><span>Send Message</span></button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="contact-map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3040.986111620221!2d55.087222972550585!3d24.98780158178485!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e5f127c765bfb7b%3A0xac18e62af75d21df!2s!5e0!3m2!1sen!2sin!4v1655724052368!5m2!1sen!2sin" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
        <div class="bg-img" data-background="{{ public_path().'/img/002.webp' }}"></div>
    </section>

    <!-- ==================== End contact ==================== -->
@endsection("content")
