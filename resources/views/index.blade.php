@extends("base")

@section("content")
<!-- ==================== Start Slider ==================== -->

    <header class="slider">
        <div class="swiper-container parallax-slider">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="bg-img valign" data-background="{{ public_path().'/img/slid/interior.webp' }}" data-overlay-dark="6">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-10 offset-lg-1">
                                    <div class="caption hmone">
                                        <h5 class="thin custom-font">Studio1 Creators</h5>
                                        <h1 data-splitting><a href="/projects/interior/">Interior Design</a>
                                        </h1>
                                        <p class="mt-10">We are professionals to explore a wide set of ideas and also create a shared vision <br>to move forward within a short amount of time. </p>
                                        <a href="/projects/interior/" class="btn-curve btn-bord btn-lit mt-30">
                                            <span>View More</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="bg-img valign" data-background="{{ public_path().'/img/slid/architecture.webp' }}" data-overlay-dark="5">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-10 offset-lg-1">
                                    <div class="caption hmone">
                                        <h5 class="thin custom-font">Studio1 Creators</h5>
                                        <h1 data-splitting><a href="/projects/architectural/">
                                                Architectural Design
                                            </a></h1>
                                        <p class="mt-10">Architecture should speak of its time and place, but yearn for timelessness. <br>Our team put effort to accomplish it.</p>
                                        <a href="/projects/architectural/" class="btn-curve btn-bord btn-lit mt-30">
                                            <span>View More</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="bg-img valign" data-background="{{ public_path().'/img/slid/landscape.webp' }}" data-overlay-dark="6">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-10 offset-lg-1">
                                    <div class="caption hmone">
                                        <h5 class="thin custom-font">Studio1 Creators</h5>
                                        <h1 data-splitting><a href="/projects/landscape/">
                                                Landscape Design
                                            </a>
                                        </h1>
                                        <p class="mt-10">In this trendy world we remain classic but focus on the detailing and fulfill your <br>modern contemporary design which shows the aestheticism.</p>
                                        <a href="/projects/landscape/" class="btn-curve btn-bord btn-lit mt-30">
                                            <span>View More</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="bg-img valign" data-background="{{ public_path().'/img/slid/fitout.webp' }}" data-overlay-dark="5">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-10 offset-lg-1">
                                    <div class="caption hmone">
                                        <h5 class="thin custom-font">Studio1 Creators</h5>
                                        <h1 data-splitting><a href="/projects/fitout/">
                                                Fitout Services
                                            </a></h1>
                                        <p class="mt-10">Design is intelligence made visible that creates value faster than costs.</p>
                                        <a href="/projects/fitout/" class="btn-curve btn-bord btn-lit mt-30">
                                            <span>View More</span>
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

    <section id="about" class="about section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <div class="exp-img wow fadeInUp" data-wow-delay=".3s">
                        <div class="img bg-img wow imago" data-background="{{ public_path().'/img/2.webp' }}">
                            <!--{{ public_path().'/img/exp02.jpg' }}-->
                            <div class="since custom-font">
                                <!--<span>Since</span>
                                <span>2020</span>-->
                            </div>
                            <div class="years custom-font">
                                <!--<h2>STUDIO1</h2>
                                <h5>Creators</h5>-->
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7 valign">
                    <div class="exp-content wow fadeInUp" data-wow-delay=".3s">
                        <h6 class="sub-title">About Us</h6>
                        <h2 class="mb-20">Best Interior Designers <br> For You.</h2>
                        <p class="text-justify">Studio1 Creators are recognized as a leading professional providing excellent service for all types of interior architecture and architectural design projects, well established in the United Arab Emirates, our services extend throughout the GCC region. We are in the business of designing spaces by understanding and providing solutions that consider cost, time and quality - ensuring every project is of the highest quality.</p>
                        <p class="text-justify">Studio1 Creators also provides full-service interior design company providing luxury interior design and home décor services. Our services include Interior design, Architecture, Landscape and Fit-outs for residential, commercial, hospital, food & beverage units.</p>
                        <div class="numbers mt-50">
                            <!--<div class="row">
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
                            </div>-->
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                <p class="text-justify">Our team of esteemed interior designers developed a process to provide our clients with a flawless experience when designing their homes and villas. We believe that every client has unique requirements and idea, in order to support that, we the emerging Interior Designing firm in UAE, comprises of veteran team who can fulfill your dream building  by adding up the best and most elegant designs in order to become a reality. Thereby we are expecting the satisfaction of each and every Client.</p>
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
                        <h4 class="wow flipInX" data-wow-delay=".5s">Our Services</h4>
                    </div>
                </div>
            </div>
            <div class="row bord-box bg-img wow fadeInUp" data-wow-delay=".3s" data-background="{{ public_path().'/img/slid/fitout.webp' }}">

                <div class="col-lg-3 col-md-6 item-bx">
                    <h2 class="custom-font numb">01</h2>
                    <h6 class="mb-20 text-info">Interior Design</h6>
                    <p class="text-justify">We are professionals to explore a wide set of ideas and also create a shared vision. &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>
                    <a href="/services/" class="more custom-font mt-30">View More</a>
                </div>

                <div class="col-lg-3 col-md-6 item-bx">
                    <h2 class="custom-font numb">02</h2>
                    <h6 class="mb-20 text-info">Architectural Design</h6>
                    <p class="text-justify">Architecture should speak of its time and place, but yearn for timelessness and ..</p>
                    <a href="/services/" class="more custom-font mt-30">View More</a>
                </div>

                <div class="col-lg-3 col-md-6 item-bx">
                    <h2 class="custom-font numb">03</h2>
                    <h6 class="mb-20 text-info">Landscape Design</h6>
                    <p class="text-justify">In this trendy world we remain classic but focus on the detailing and fulfill your requirements. &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>
                    <a href="/services/" class="more custom-font mt-30">View More</a>
                </div>
                <!--Design is intelligence made visible that creates value faster than costs.-->
                <div class="col-lg-3 col-md-6 item-bx">
                    <h2 class="custom-font numb">04</h2>
                    <h6 class="mb-20 text-info">Turnkey Contract</h6>
                    <p class="text-justify">We are capable of managing all kinds of design projects. &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>
                    <a href="/services/" class="more custom-font mt-30">View More</a>
                </div>

                <div class="col-lg-3 col-md-6 item-bx">
                    <h2 class="custom-font numb">05</h2>
                    <h6 class="mb-20 text-info">Food & Beverage</h6>
                    <p class="text-justify">Our motto is to provide you complete exposure in the F&B outlets..&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>
                    <a href="/services/" class="more custom-font mt-30">View More</a>
                </div>

                <div class="col-lg-3 col-md-6 item-bx">
                    <h2 class="custom-font numb">06</h2>
                    <h6 class="mb-20 text-info">Spa & Wellness</h6>
                    <p class="text-justify">The concept & genre of Wellness Spa Design is determined by the ...</p>
                    <a href="/services/" class="more custom-font mt-30">View More</a>
                </div>

                <div class="col-lg-3 col-md-6 item-bx">
                    <h2 class="custom-font numb">07</h2>
                    <h6 class="mb-20 text-info">Art Consulting</h6>
                    <p class="text-justify">It’s the art of evaluating client needs, develop a prototype and create... </p>
                    <a href="/services/" class="more custom-font mt-30">View More</a>
                </div>

                <div class="col-lg-3 col-md-6 item-bx">
                    <h2 class="custom-font numb">08</h2>
                    <h6 class="mb-20 text-info">FF & E</h6>
                    <p class="text-justify">This is our forte, we will ensure you are happy with everything and get to ...</p>
                    <a href="/services/" class="more custom-font mt-30">View More</a>
                </div>

            </div>
        </div>
    </section>

    <!-- ==================== End Services ==================== -->



    <!-- ==================== Start works ==================== -->

    <section class="team section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <div class="tit">
                        <h3 class="wow flipInX" data-wow-delay=".3s">Our Projects</h3>
                        <div class="navs mt-30 wow fadeInUp" data-wow-delay=".3s">
                            <span class="prev">
                                <i class="fas fa-long-arrow-alt-left text-dark"></i>
                            </span>
                            <span class="next">
                                <i class="fas fa-long-arrow-alt-right text-dark"></i>
                            </span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="team-container">
                        <div class="item wow fadeInUp" data-wow-delay=".3s">
                            <div class="img wow imago">
                                <img src="{{ public_path().'/img/projects/dubai/1.webp' }}" alt="">                                
                            </div>
                            <div class="info">
                                <h5>Dubai</h5>
                                <span>TERHAB HOTEL & RESIDENCE , JVT</span>
                            </div>
                        </div>
                        <div class="item wow fadeInUp" data-wow-delay=".3s">
                            <div class="img wow imago">
                                <img src="{{ public_path().'/img/projects/dubai/2.webp' }}" alt="">                               
                            </div>
                            <div class="info">
                                <h5>Dubai</h5>
                                <span>TERHAB HOTEL & RESIDENCE , JVT</span>
                            </div>
                        </div>
                        <div class="item wow fadeInUp" data-wow-delay=".3s">
                            <div class="img wow imago">
                                <img src="{{ public_path().'/img/projects/dubai/3.webp' }}" alt="">                                
                            </div>
                            <div class="info">
                                <h5>Dubai</h5>
                                <span>TERHAB HOTEL & RESIDENCE , JVT</span>
                            </div>
                        </div>
                        <div class="item wow fadeInUp" data-wow-delay=".3s">
                            <div class="img wow imago">
                                <img src="{{ public_path().'/img/projects/dubai/4.webp' }}" alt="">                                
                            </div>
                            <div class="info">
                                <h5>Dubai</h5>
                                <span>TERHAB HOTEL & RESIDENCE , JVT</span>
                            </div>
                        </div>
                        <div class="item wow fadeInUp" data-wow-delay=".3s">
                            <div class="img wow imago">
                                <img src="{{ public_path().'/img/projects/dubai/5.webp' }}" alt="">                                
                            </div>
                            <div class="info">
                                <h5>Dubai</h5>
                                <span>TERHAB HOTEL & RESIDENCE , JVT</span>
                            </div>
                        </div>
                        <div class="item wow fadeInUp" data-wow-delay=".3s">
                            <div class="img wow imago">
                                <img src="{{ public_path().'/img/projects/dubai/6.webp' }}" alt="">                                
                            </div>
                            <div class="info">
                                <h5>Dubai</h5>
                                <span>TERHAB HOTEL & RESIDENCE , JVT</span>
                            </div>
                        </div>
                        <div class="item wow fadeInUp" data-wow-delay=".3s">
                            <div class="img wow imago">
                                <img src="{{ public_path().'/img/projects/dubai/7.webp' }}" alt="">                                
                            </div>
                            <div class="info">
                                <h5>Dubai</h5>
                                <span>TERHAB HOTEL & RESIDENCE , JVT</span>
                            </div>
                        </div>
                        <div class="item wow fadeInUp" data-wow-delay=".3s">
                            <div class="img wow imago">
                                <img src="{{ public_path().'/img/projects/sharjah/1.webp' }}" alt="">                                
                            </div>
                            <div class="info">
                                <h5>Sharjah</h5>
                                <span>TERHAB HOTEL & RESIDENCE</span>
                            </div>
                        </div>
                        <div class="item wow fadeInUp" data-wow-delay=".3s">
                            <div class="img wow imago">
                                <img src="{{ public_path().'/img/projects/sharjah/2.webp' }}" alt="">                                
                            </div>
                            <div class="info">
                                <h5>Sharjah</h5>
                                <span>TERHAB HOTEL & RESIDENCE</span>
                            </div>
                        </div>
                        <div class="item wow fadeInUp" data-wow-delay=".3s">
                            <div class="img wow imago">
                                <img src="{{ public_path().'/img/projects/sharjah/3.webp' }}" alt="">                                
                            </div>
                            <div class="info">
                                <h5>Sharjah</h5>
                                <span>TERHAB HOTEL & RESIDENCE</span>
                            </div>
                        </div>
                        <div class="item wow fadeInUp" data-wow-delay=".3s">
                            <div class="img wow imago">
                                <img src="{{ public_path().'/img/projects/sharjah/4.webp' }}" alt="">                                
                            </div>
                            <div class="info">
                                <h5>Sharjah</h5>
                                <span>TERHAB HOTEL & RESIDENCE</span>
                            </div>
                        </div>
                        <div class="item wow fadeInUp" data-wow-delay=".3s">
                            <div class="img wow imago">
                                <img src="{{ public_path().'/img/projects/marjan/1.webp' }}" alt="">                                
                            </div>
                            <div class="info">
                                <h5>Ras-Al-Khaima</h5>
                                <span>MARJAN ISLAND RESORT & SPA</span>
                            </div>
                        </div>
                        <div class="item wow fadeInUp" data-wow-delay=".3s">
                            <div class="img wow imago">
                                <img src="{{ public_path().'/img/projects/marjan/2.webp' }}" alt="">                                
                            </div>
                            <div class="info">
                                <h5>Ras-Al-Khaima</h5>
                                <span>MARJAN ISLAND RESORT & SPA</span>
                            </div>
                        </div>
                        <div class="item wow fadeInUp" data-wow-delay=".3s">
                            <div class="img wow imago">
                                <img src="{{ public_path().'/img/projects/marjan/3.webp' }}" alt="">                                
                            </div>
                            <div class="info">
                                <h5>Ras-Al-Khaima</h5>
                                <span>MARJAN ISLAND RESORT & SPA</span>
                            </div>
                        </div>
                        <div class="item wow fadeInUp" data-wow-delay=".3s">
                            <div class="img wow imago">
                                <img src="{{ public_path().'/img/projects/marjan/4.webp' }}" alt="">                                
                            </div>
                            <div class="info">
                                <h5>Ras-Al-Khaima</h5>
                                <span>MARJAN ISLAND RESORT & SPA</span>
                            </div>
                        </div>
                        <div class="item wow fadeInUp" data-wow-delay=".3s">
                            <div class="img wow imago">
                                <img src="{{ public_path().'/img/projects/oriana/1.webp' }}" alt="">                                
                            </div>
                            <div class="info">
                                <h5>UAE</h5>
                                <span>ORIANA HOSPITAL</span>
                            </div>
                        </div>
                        <div class="item wow fadeInUp" data-wow-delay=".3s">
                            <div class="img wow imago">
                                <img src="{{ public_path().'/img/projects/oriana/2.webp' }}" alt="">                                
                            </div>
                            <div class="info">
                                <h5>UAE</h5>
                                <span>ORIANA HOSPITAL</span>
                            </div>
                        </div>
                        <div class="item wow fadeInUp" data-wow-delay=".3s">
                            <div class="img wow imago">
                                <img src="{{ public_path().'/img/projects/villa/1.webp' }}" alt="">                                
                            </div>
                            <div class="info">
                                <h5>UAE</h5>
                                <span>PRIVATE VILLAS</span>
                            </div>
                        </div>
                        <div class="item wow fadeInUp" data-wow-delay=".3s">
                            <div class="img wow imago">
                                <img src="{{ public_path().'/img/projects/villa/2.webp' }}" alt="">                                
                            </div>
                            <div class="info">
                                <h5>UAE</h5>
                                <span>PRIVATE VILLAS</span>
                            </div>
                        </div>
                        <div class="item wow fadeInUp" data-wow-delay=".3s">
                            <div class="img wow imago">
                                <img src="{{ public_path().'/img/projects/villa/3.webp' }}" alt="">                                
                            </div>
                            <div class="info">
                                <h5>UAE</h5>
                                <span>PRIVATE VILLAS</span>
                            </div>
                        </div>
                        <div class="item wow fadeInUp" data-wow-delay=".3s">
                            <div class="img wow imago">
                                <img src="{{ public_path().'/img/projects/fb/1.webp' }}" alt="">                                
                            </div>
                            <div class="info">
                                <h5>UAE</h5>
                                <span>FOOD & BEVERAGES</span>
                            </div>
                        </div>
                        <div class="item wow fadeInUp" data-wow-delay=".3s">
                            <div class="img wow imago">
                                <img src="{{ public_path().'/img/projects/fb/2.webp' }}" alt="">                                
                            </div>
                            <div class="info">
                                <h5>UAE</h5>
                                <span>FOOD & BEVERAGES</span>
                            </div>
                        </div>
                        <div class="item wow fadeInUp" data-wow-delay=".3s">
                            <div class="img wow imago">
                                <img src="{{ public_path().'/img/projects/fb/3.webp' }}" alt="">                                
                            </div>
                            <div class="info">
                                <h5>UAE</h5>
                                <span>FOOD & BEVERAGES</span>
                            </div>
                        </div>
                        <div class="item wow fadeInUp" data-wow-delay=".3s">
                            <div class="img wow imago">
                                <img src="{{ public_path().'/img/projects/fb/4.webp' }}" alt="">                                
                            </div>
                            <div class="info">
                                <h5>UAE</h5>
                                <span>FOOD & BEVERAGES</span>
                            </div>
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
                        <h4 class="wow flipInX" data-wow-delay=".5s">Best Skills</h4>
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

    <section id="contact" class="contact cont-map mt-50">
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
