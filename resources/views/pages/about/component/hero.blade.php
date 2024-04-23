<link href="{{ asset('css/pages/about/hero.css') }}" rel="stylesheet">


<div id="carouselHero" class="carousel slide" data-bs-ride="carousel" data-bs-interval="3000">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="{{ asset('images/pages/about/component/hero/hero-1.jpg') }}" class="d-block w-100" alt="Hero 1">
        </div>
        <div class="carousel-item">
            <img src="{{ asset('images/pages/about/component/hero/hero-2.jpg') }}" class="d-block w-100" alt="Hero 2">
        </div>
        <div class="carousel-item">
            <img src="{{ asset('images/pages/about/component/hero/hero-3.jpg') }}" class="d-block w-100" alt="Hero 3">
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselHero" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselHero" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>
