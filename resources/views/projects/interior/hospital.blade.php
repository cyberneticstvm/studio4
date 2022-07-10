@extends("base")

@section("content")
<!--<header class="pages-header bg-img valign parallaxie" data-background="{{ public_path().'/img/portfolio/interior/gal4/GAL2.webp' }}" data-overlay-dark="5">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="cont text-center">
                    <h1>Hospital</h1>
                    <div class="path">
                        <a href="#0">Home</a><span>/</span><a href="#0">Our Projects</a><span>/</span><a href="#0" class="active">Interior Design</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>-->
<section class="projdtal">
    <div class="justified-gallery">
        @for($i=1; $i<=5; $i++)
            <a href="{{ public_path().'/img/portfolio/interior/gal4/GAL'.$i.'.webp' }}">
                <img alt="" src="{{ public_path().'/img/portfolio/interior/gal4/GAL'.$i.'.webp' }}" />
            </a>
        @endfor
    </div>
</section>
@endsection("content")
