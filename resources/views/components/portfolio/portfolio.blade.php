<div id="portfolio">
    <div class="container" id="Grid">
        <div class="row">
            <div class="col-md-12 text-center title">
                <h2>MY PORTFOLIO</h2>
                <span>WHAT I HAVE DONE</span>
            </div>
        </div>
        <div class="row">
            @foreach ($data as $d)
                <div class="col-md-3 col-sm-6 mix responsive">
                    <div class="work-item">
                        <div class="image-holder">
                            <img src="img/{{ $d->thumbnail }}" width="300" height="300" style="object-fit: none" class="img-fluid" alt="">
                            <div class="overlay">
                                <a href="img/{{ $d->thumbnail }}" data-rel="lightbox">
                                    <i class="fa fa-search"></i>
                                </a>
                            </div>
                        </div>
                        <h4>{{ $d->title }}</h4>
                        <span>{{ $d->type }}</span>  
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
