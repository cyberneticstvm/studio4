@extends("base")

@section("content")
<!--<header class="pages-header bg-img valign parallaxie" data-background="{{ public_path().'/img/portfolio/landscape/GAL5.webp' }}" data-overlay-dark="5">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="cont text-center">
                    <h1>Landscape Design</h1>
                    <div class="path">
                        <a href="#0">Home</a><span>/</span><a href="#0">Our Projects</a><span>/</span><a href="#0" class="active">Landscape Design</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>-->
<section class="projdtal section-padding">
    <div class="justified-gallery">
        @for($i=2; $i<=6; $i++)
            <a href="{{ public_path().'/img/portfolio/landscape/GAL'.$i.'.webp' }}">
                <img alt="" src="{{ public_path().'/img/portfolio/landscape/GAL'.$i.'.webp' }}" />
            </a>
        @endfor
    </div>
</section>
@endsection("content")
