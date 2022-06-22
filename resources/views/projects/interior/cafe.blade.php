@extends("base")

@section("content")

<header class="slider">
        <div class="swiper-container parallax-slider">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="bg-img valign" data-background="{{ public_path().'/img/portfolio/interior/gal1.webp' }}" data-overlay-dark="6">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-10 offset-lg-1">
                                    <div class="caption hmone">
                                        <h5 class="thin custom-font">Interior Design</h5>
                                        <h1 data-splitting><a href="#0">Cafe</a>
                                        </h1>
                                        <!--<p class="mt-10">Right design and right ideas matter a lot of in interior design
                                            business. <br> a style that makes a statement.</p>
                                        <a href="#0" class="btn-curve btn-bord btn-lit mt-30">
                                            <span>Read More</span>
                                        </a>-->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="bg-img valign" data-background="{{ public_path().'/img/portfolio/interior/gal1/img1.webp' }}" data-overlay-dark="5">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-10 offset-lg-1">
                                    <div class="caption hmone">
                                        <h5 class="thin custom-font">Interior Design</h5>
                                        <h1 data-splitting><a href="#0">Cafe</a>
                                        </h1>
                                        <!--<p class="mt-10">Right design and right ideas matter a lot of in interior design
                                            business. <br> a style that makes a statement.</p>
                                        <a href="#0" class="btn-curve btn-bord btn-lit mt-30">
                                            <span>Read More</span>
                                        </a>-->
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

@endsection("content")
