@extends("base")

@section("content")
<!--<header class="pages-header bg-img valign parallaxie" data-background="{{ public_path().'/img/portfolio/architecture/1.webp' }}" data-overlay-dark="5">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="cont text-center">
                    <h1>Architectural Design</h1>
                    <div class="path">
                        <a href="#0">Home</a><span>/</span><a href="#0">Our Projects</a><span>/</span><a href="#0" class="active">Architectural Design</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>-->
<section class="projdtal section-padding">
    <div class="justified-gallery">
        @for($i=1; $i<=8; $i++)
            <a href="{{ public_path().'/img/portfolio/architecture/GAL'.$i.'.webp' }}">
                <img alt="" src="{{ public_path().'/img/portfolio/architecture/GAL'.$i.'.webp' }}" />
            </a>
        @endfor
    </div>
</section>
@endsection("content")
