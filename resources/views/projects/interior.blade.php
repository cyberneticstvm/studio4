@extends("base")
@section("content")
<header class="pages-header work-header bg-img bg-dark valign" data-background="{{ public_path().'/img/portfolio/interior/gal1/GAL1.webp' }}" data-overlay-light="7">
    <div class="container">
        <div class="section-head text-center mb-0">
            <div class="row justify-content-center">
                <div class="col-lg-7 col-md-9 col-sm-11">
                    <h6 class="custom-font">Our Projects</h6>
                    <h4 class="playfont">Interior Design</h4>
                </div>
            </div>
        </div>
    </div>
</header>
<section class="portfolio section-padding">
    <div class="container">
        <div class="row">

            <!-- filter links -->
            <div class="filtering text-center col-12">
                <div class="filter box">
                    <span data-filter='*' class="active">All</span>
                    <span data-filter='.hot'>Hotel & Residences</span>
                    <span data-filter='.hos'>Hospitals</span>
                    <span data-filter='.cafe'>Cafe</span>
                </div>
            </div>

            <!-- gallery -->
            <div class="gallery twsty inf-lit full-width">

                <!-- gallery item -->
                <div class="items hot three-column mt-50">
                    <div class="item-img bg-img" data-background="{{ public_path().'/img/portfolio/interior/gal1/GAL1.webp' }}">
                        <a href="/projects/interior/hotel-and-residence-dubai/">
                            <div class="item-img-overlay valign"></div>
                        </a>
                    </div>
                    <div class="info mt-10">
                        <h5 class="text-dark">Terhab Hotel & Residence, Dubai JVT</h5>
                        <span>Interior Design</span>
                    </div>
                </div>

                <!-- gallery item -->
                <div class="items hot three-column mt-50">
                    <div class="item-img bg-img" data-background="{{ public_path().'/img/portfolio/interior/gal2/GAL1.webp' }}">
                        <a href="/projects/interior/hotel-and-residence-sharjah/">
                            <div class="item-img-overlay"></div>
                        </a>
                    </div>
                    <div class="info mt-10">
                        <h5 class="text-dark">Terhab Hotel & Residence, Sharjah, AL Taawun</h5>
                        <span>Interior Design</span>
                    </div>
                </div>

                <!-- gallery item -->
                <div class="items interior hot three-column mt-50">
                    <div class="item-img bg-img" data-background="{{ public_path().'/img/portfolio/interior/marjan-island-rak.webp' }}">
                        <a href="/projects/interior/resort-and-spa/">
                            <div class="item-img-overlay valign"></div>
                        </a>
                    </div>
                    <div class="info mt-10">
                        <h5 class="text-dark">Marjan Island Resort & Spa, Ras Al Khaima</h5>
                        <span>Interior Design</span>
                    </div>
                </div>

                <!-- gallery item -->
                <div class="items hos three-column mt-50">
                    <div class="item-img bg-img" data-background="{{ public_path().'/img/portfolio/interior/gal4/GAL1.webp' }}">
                        <a href="/projects/interior/hospital/">
                            <div class="item-img-overlay"></div>
                        </a>
                    </div>
                    <div class="info mt-10">
                        <h5 class="text-dark">Hospital</h5>
                        <span>Interior Design</span>
                    </div>
                </div>

                <!-- gallery item -->
                <div class="items cafe three-column mt-50">
                    <div class="item-img bg-img" data-background="{{ public_path().'/img/portfolio/interior/gal5/GAL2.webp' }}">
                        <a href="/projects/interior/cafe/">
                            <div class="item-img-overlay valign"></div>
                        </a>
                    </div>
                    <div class="info mt-10">
                        <h5 class="text-dark">Cafe</h5>
                        <span>Interior Design</span>
                    </div>
                </div>

                <!-- gallery item -->
                <div class="items cafe three-column mt-50">
                    <div class="item-img bg-img" data-background="{{ public_path().'/img/portfolio/interior/gal6/GAL1.webp' }}">
                        <a href="/projects/interior/villa/">
                            <div class="item-img-overlay valign"></div>
                        </a>
                    </div>
                    <div class="info mt-10">
                        <h5 class="text-dark">Villa</h5>
                        <span>Interior Design</span>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
@endsection("content")
