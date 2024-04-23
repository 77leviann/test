<link href="{{ asset('css/pages/home/testimonials.css') }}" rel="stylesheet">

<section id="testimonials" class="py-5">
    <div class="container">
        <h2 class="text-center mt-5">Testimonials</h2>
        <p class="text-center mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam cursus.</p>
        <div id="carouselTestimonials" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="row">
                        <div class="col-md-6 mx-auto">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">Testimonial 1</h5>
                                    <p class="card-text">"Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                        Vivamus quis porta mi, vel euismod libero. Ut eget mi sit amet diam feugiat
                                        vestibulum vitae sit amet neque."</p>
                                    <p class="card-text"><small class="text-muted">- John Doe</small></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="row">
                        <div class="col-md-6 mx-auto">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">Testimonial 2</h5>
                                    <p class="card-text">"Sed ut perspiciatis unde omnis iste natus error sit voluptatem
                                        accusantium doloremque laudantium, totam rem aperiam."</p>
                                    <p class="card-text"><small class="text-muted">- Jane Doe</small></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselTestimonials"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselTestimonials"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
</section>
