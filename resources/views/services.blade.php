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
            <marquee direction="left" scrollamount="12">
                <div class="justified-gallery">
                    <a href="#">
                        <img alt="" src="{{ public_path().'/img/portfolio/masonry/gal1.jpg' }}"/>
                    </a>
                    <a href="#">
                        <img alt="" src="{{ public_path().'/img/portfolio/masonry/gal2.jpg' }}" />
                    </a>
                    <a href="#">
                        <img alt="" src="{{ public_path().'/img/portfolio/masonry/gal3.jpg' }}" />
                    </a>
                    <a href="#">
                        <img alt="" src="{{ public_path().'/img/portfolio/masonry/gal4.jpg' }}" />
                    </a>
                    <a href="#">
                        <img alt="" src="{{ public_path().'/img/portfolio/masonry/gal5.jpg' }}" />
                    </a>
                    <a href="#">
                        <img alt="" src="{{ public_path().'/img/portfolio/masonry/gal6.jpg' }}" />
                    </a>
                </div>
            </marquee>
        </div>
    </section>

    <!-- ==================== End Services ==================== -->


@endsection("content")
