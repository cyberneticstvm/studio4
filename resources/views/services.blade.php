@extends("base")

@section("content")

    <!-- ==================== Start Services ==================== -->

    <!--<header class="pages-header bg-img valign parallaxie" data-background="{{ public_path().'/img/portfolio/interior/gal1/GAL1.webp' }}" data-overlay-dark="5">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="cont text-center">
                        <h1>Our Services</h1>
                    </div>
                </div>
            </div>
        </div>
    </header>-->
    <section class="services section-padding bg-dark">
        <div class="container">
            <div class="section-head text-center">
                <div class="row justify-content-center">
                    <div class="col-lg-6 col-md-8 col-sm-10">
                    <h2 class="wow fadeInDown">Services</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <p class="text-justify">We offer services and solutions for interior design, background from design concept to architectural and interior design execution experience ranging from luxury, retail, food and beverage and hospitality.</p>
                    <p class="text-justify">Our capability to recognize challenges and offering solutions is second to none and we prioritize our people, clients and end users as the essentials in every decision.</p><br>
                    <p class="text-justify">We understand the value of meaningful aesthetics and building relationships with a variety of client’s collaborative experience and supervision within the interior projects team to visualize and translate ideas based on a balanced mix of creativity and adherence to design standards.</p>
                    <p class="text-justify">From luxury resorts to business hotels to the more relaxed private villas. We have a wealth of talents in designing hotel rooms, lobbies, Façade, common areas and F&B destinations.</p><br>
                    <p class="text-justify">With our design team, we’re focused on delivering innovate hotel design projects. In so far as the lead interior architects on our projects, we always ask our clients to be open minded to really push the boundaries of modern hotel interiors. The greatest innovation now lies in the adaption of modern technology. With this in mind, our designs have to have a huge amount of technological integration with elegance.</p><br>                    
                </div>
                <div class="col-md-12"><p>We Provide:</p></div>
                <div class="col-md-6 mt-5">
                    <h6 class="wow flipInX">Interior Design</h6><br>
                    <h6 class="wow flipInX">Architectural Design</h6><br>
                    <h6 class="wow flipInX">Landscape Design</h6><br>
                    <h6 class="wow flipInX">Turnkey Contract</h6>
                    <h6 class="wow flipInX">Food & Beverage Design</h6>
                </div>
                <div class="col-md-6 mt-5">                    
                    <h6 class="wow flipInX">Spa & Wellness</h6><br>
                    <h6 class="wow flipInX">Art Consulting</h6><br>
                    <h6 class="wow flipInX">FF & E</h6><br>
                    <h6 class="wow flipInX">Fit-out Services</h6>
                </div>
            </div>
        </div>
    </section>
    <section class="mt-3 pt-5">
        <div class="container-fluid">
            <div class="swiper mySwiper swiper-container-free-mode">
                <div class="swiper-wrapper">
                    @for($i=1; $i<=12; $i++)
                    <div class="swiper-slide">
                        <img alt="" src="{{ public_path().'/img/portfolio/masonry/gal1/GAL'.$i.'.webp' }}" />
                    </div>
                    @endfor
                </div>
            </div>    
        </div>
    </section>

    <!-- ==================== End Services ==================== -->


@endsection("content")
