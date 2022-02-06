    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio section-bg">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>Portfolio</h2>
            </div>

            <div class="row">
                <div class="col-lg-12 d-flex justify-content-center" data-aos="fade-up" data-aos-delay="100">
                    <ul id="portfolio-flters">
                        <li data-filter="*" class="filter-active">All</li>
                        <li data-filter=".filter-web">WEB</li>
                        <li data-filter=".filter-nft">NFT</li>
                        <li data-filter=".filter-3d">3D</li>
                    </ul>
                </div>
            </div>

            <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">
                @foreach ($dataWeb as $d)
                <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                    <div class="portfolio-wrap">
                        <img src="img/{{$d->thumbnail}}" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>{{$d->title}}</h4>
                            <p>{{$d->type}}</p>
                            <div class="portfolio-links">
                                <a href="img/{{$d->thumbnail}}" data-gallery="portfolioGallery"
                                    class="portfolio-lightbox" title="Web 3"><i class="bx bx-plus"></i></a>
                                <a href="/details/{{$d->id}}" class="portfolio-details-lightbox"
                                    data-glightbox="type: external" title="Portfolio Details"><i
                                        class="bx bx-link"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach

                @foreach ($dataNft as $d)
                <div class="col-lg-4 col-md-6 portfolio-item filter-nft">
                    <div class="portfolio-wrap">
                        <img src="img/{{$d->thumbnail}}" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>{{$d->title}}</h4>
                            <p>{{$d->type}}</p>
                            <div class="portfolio-links">
                                <a href="img/{{$d->thumbnail}}" data-gallery="portfolioGallery"
                                    class="portfolio-lightbox" title="Web 3"><i class="bx bx-plus"></i></a>
                                <a href="/details/{{$d->id}}" class="portfolio-details-lightbox"
                                    data-glightbox="type: external" title="Portfolio Details"><i
                                        class="bx bx-link"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach

                @foreach ($data3d as $d)
                <div class="col-lg-4 col-md-6 portfolio-item filter-3d">
                    <div class="portfolio-wrap">
                        <img src="img/{{$d->thumbnail}}" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>{{$d->title}}</h4>
                            <p>{{$d->type}}</p>
                            <div class="portfolio-links">
                                <a href="img/{{$d->thumbnail}}" data-gallery="portfolioGallery"
                                    class="portfolio-lightbox" title="Web 3"><i class="bx bx-plus"></i></a>
                                <a href="/details/{{$d->id}}" class="portfolio-details-lightbox"
                                    data-glightbox="type: external" title="Portfolio Details"><i
                                        class="bx bx-link"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach

            </div>

        </div>
    </section><!-- End Portfolio Section -->
