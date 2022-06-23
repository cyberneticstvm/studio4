@extends("base")
@section("content")
<header class="pages-header work-header bg-img bg-dark valign" data-background="{{ public_path().'/img/portfolio/fitout/1.jpg' }}" data-overlay-light="7">
    <div class="container">
        <div class="section-head text-center mb-0">
            <div class="row justify-content-center">
                <div class="col-lg-7 col-md-9 col-sm-11">
                    <h6 class="custom-font">Our Projects</h6>
                    <h4 class="playfont">Fitout Services</h4>
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
                </div>
            </div>

            <!-- gallery -->
            <div class="gallery twsty inf-lit full-width">
                <!-- gallery item -->
                <div class="items hot three-column mt-50">
                    <div class="item-img bg-img" data-background="{{ public_path().'/img/portfolio/fitout/1.jpg' }}">
                        <a href="/projects/fitout/gallery/">
                            <div class="item-img-overlay valign"></div>
                        </a>
                    </div>
                    <div class="info mt-10">
                        <h5 class="text-dark">Fitout Services</h5>
                        <span>Fitout Services</span>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
@endsection("content")
