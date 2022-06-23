@extends("base")

@section("content")
<header class="pages-header bg-img valign parallaxie" data-background="{{ public_path().'/img/portfolio/fitout/1.jpg' }}" data-overlay-dark="5">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="cont text-center">
                    <h1>Fitout Services</h1>
                    <div class="path">
                        <a href="#0">Home</a><span>/</span><a href="#0">Our Projects</a><span>/</span><a href="#0" class="active">Fitout Services</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<section class="projdtal">
    <div class="justified-gallery">
        <a href="{{ public_path().'/img/portfolio/fitout/1.jpg' }}">
            <img alt="" src="{{ public_path().'/img/portfolio/fitout/1.jpg' }}" />
        </a>
        <a href="{{ public_path().'/img/portfolio/fitout/2.jpg' }}">
            <img alt="" src="{{ public_path().'/img/portfolio/fitout/2.jpg' }}" />
        </a>
        <a href="{{ public_path().'/img/portfolio/fitout/3.jpg' }}">
            <img alt="" src="{{ public_path().'/img/portfolio/fitout/3.jpg' }}" />
        </a>
        <a href="{{ public_path().'/img/portfolio/fitout/4.jpeg' }}">
            <img alt="" src="{{ public_path().'/img/portfolio/fitout/4.jpeg' }}" />
        </a>
    </div>
</section>
@endsection("content")
