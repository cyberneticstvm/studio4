@extends("base")

@section("content")
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
@endsection("content")
