@extends("base")

@section("content")

    <!-- ==================== Start Services ==================== -->

    <section class="services section-padding bg-dark">
        <div class="container">
            <div class="section-head text-center">
                <div class="row justify-content-center">
                    <div class="col-lg-6 col-md-8 col-sm-10">
                        <h6 class="custom-font wow fadeInDown" data-wow-delay=".3s">Best Features</h6>
                        <h4 class="playfont wow flipInX" data-wow-delay=".5s">Services</h4>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <p class="text-justify">We offer services and solutions for interior design, background from design concept to architectural and interior design execution experience ranging from luxury, retail, food and beverage and hospitality.</p>
                    <p class="text-justify">Our capability to recognize challenges and offering solutions is second to none and we prioritize our people, clients and end users as the essentials in every decision.</p>
                    <p class="text-justify">We understand the value of meaningful aesthetics and building relationships with a variety of client’s collaborative experience and supervision within the interior projects team to visualize and translate ideas based on a balanced mix of creativity and adherence to design standards.</p>
                </div>
                <div class="col-md-12 mt-3">
                    <h6 class="fade-in">Commercial Building Interiors</h6>
                    <h6 class="fade-in">Residential Interiors</h6>
                    <h6 class="fade-in">Food & Beverage Interiors</h6>
                    <h6 class="fade-in">SPA</h6>
                    <h6 class="fade-in">Hospital Interiors</h6>
                    <h6 class="fade-in">FF&E</h6>
                    <h6 class="fade-in">Private Villas</h6>
                    <h6 class="fade-in">Palaces</h6>
                </div>
            </div>
        </div>
    </section>
    <section class="projdtal">
        <div class="container-fluid">
            <div class="swiper mySwiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <img src="{{ public_path().'/img/portfolio/masonry/1.jpg' }}" />
                    </div>
                    <div class="swiper-slide"><img src="{{ public_path().'/img/portfolio/masonry/1.jpg' }}" /></div>
                    <div class="swiper-slide"><img src="{{ public_path().'/img/portfolio/masonry/2.jpg' }}" /></div>
                    <div class="swiper-slide"><img src="{{ public_path().'/img/portfolio/masonry/3.jpg' }}" /></div>
                    <div class="swiper-slide"><img src="{{ public_path().'/img/portfolio/masonry/4.jpg' }}" /></div>
                    <div class="swiper-slide"><img src="{{ public_path().'/img/portfolio/masonry/5.jpg' }}" /></div>
                    <div class="swiper-slide"><img src="{{ public_path().'/img/portfolio/masonry/6.jpg' }}" /></div>
                    <div class="swiper-slide"><img src="{{ public_path().'/img/portfolio/masonry/7.jpg' }}" /></div>
                    <div class="swiper-slide"><img src="{{ public_path().'/img/portfolio/masonry/8.jpg' }}" /></div>
                    <div class="swiper-slide"><img src="{{ public_path().'/img/portfolio/masonry/9.jpg' }}" /></div>
                </div>
            </div>    
        </div>
    </section>

    <!-- ==================== End Services ==================== -->


@endsection("content")
