@extends("base")

@section("content")

    <section class="portfolio section-padding">
        <div class="container-fluid">
            <div class="container">
                <div class="section-head text-center">
                    <div class="row justify-content-center">
                        <div class="col-lg-6 col-md-8 col-sm-10">
                            <h6 class="custom-font wow fadeInDown" data-wow-delay=".3s">Best Works</h6>
                            <h4 class="playfont wow flipInX" data-wow-delay=".5s">Interior Designing Projects</h4>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <!-- gallery -->
                <div class="gallery twsty full-width">
                    <!-- gallery item -->
                    <div class="items interior mt-50 wow fadeInUp" data-wow-delay=".3s">
                        <div class="item-img bg-img wow imago" data-background="{{ public_path().'/img/portfolio/interior/gal1.webp' }}">
                            <a href="/projects/interior/cafe/">
                                <div class="item-img-overlay"></div>
                            </a>
                        </div>
                        <div class="info mt-10">
                            <h5>CAFE</h5>
                            <span>Interior Design</span>
                        </div>
                    </div>

                    <!-- gallery item -->
                    <div class="items mt-50 wow fadeInUp" data-wow-delay=".3s">
                        <div class="item-img bg-img wow imago" data-background="{{ public_path().'/img/portfolio/interior/gal2.webp' }}">
                            <a href="/projects/interior/hospital/">
                                <div class="item-img-overlay valign"></div>
                            </a>
                        </div>
                        <div class="info mt-10">
                            <h5>HOSPITAL</h5>
                            <span>Interior Design</span>
                        </div>
                    </div>

                    <!-- gallery item -->
                    <div class="items mt-50 wow fadeInUp" data-wow-delay=".3s">
                        <div class="item-img bg-img wow imago" data-background="{{ public_path().'/img/portfolio/interior/gal3.webp' }}">
                            <a href="/projects/interior/resort-and-spa/">
                                <div class="item-img-overlay valign"></div>
                            </a>
                        </div>
                        <div class="info mt-10">
                            <h5>MARJAN ISLAND RESORT & SPA RASAL KHAIMA</h5>
                            <span>Interior Design</span>
                        </div>
                    </div>

                    <!-- gallery item -->
                    <div class="items mt-50 wow fadeInUp" data-wow-delay=".3s">
                        <div class="item-img bg-img wow imago" data-background="{{ public_path().'/img/portfolio/interior/gal4.webp' }}">
                            <a href="/projects/interior/hotel-and-residence-dubai/">
                                <div class="item-img-overlay valign"></div>
                            </a>
                        </div>
                        <div class="info mt-10">
                            <h5>TERHAB HOTEL & RESIDENCE, DUBAI JVT</h5>
                            <span>Interior Design</span>
                        </div>
                    </div>

                    <!-- gallery item -->
                    <div class="items mt-50 wow fadeInUp" data-wow-delay=".3s">
                        <div class="item-img bg-img wow imago" data-background="{{ public_path().'/img/portfolio/interior/gal5.webp' }}">
                            <a href="/projects/interior/hotel-and-residence-sharjah/">
                                <div class="item-img-overlay valign"></div>
                            </a>
                        </div>
                        <div class="info mt-10">
                            <h5>TERHAB HOTEL AND RESIDENCE, SHARJAH, AL TAAWUN</h5>
                            <span>Interior Design</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection("content")
