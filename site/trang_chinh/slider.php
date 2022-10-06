<!-- <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <ul class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
    </ul>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="<?= $CONTENT_URL ?>/images/products/3.PNG" style="width: 100%; height:200px; margin:auto">
            <div class="carousel-caption">
                <h3>Los Angeles</h3>
                <p>We had such a great time in LA!</p>
            </div>
        </div>
        <div class="carousel-item">
            <img src="<?= $CONTENT_URL ?>/images/products/3.PNG" style="width: 100%; height:200px; margin:auto">
            <div class="carousel-caption">
                <h3>Chicago</h3>
                <p>Thank you, Chicago!</p>
            </div>
        </div>
        <div class="carousel-item">
            <img src="<?= $CONTENT_URL ?>/images/products/3.PNG" style="width: 100%; height:200px; margin:auto">
            <div class="carousel-caption">
                <h3>New York</h3>
                <p>We love the Big Apple!</p>
            </div>
        </div>
    </div>
    <a class="carousel-control-prev" href="#myCarousel" data-slide="prev">
        <span class="carousel-control-prev-icon bg-dark"></span>
    </a>
    <a class="carousel-control-next" href="#myCarousel" data-slide="next">
        <span class="carousel-control-next-icon bg-dark"></span>
    </a>
</div> -->


<div class="slide-show mt-3">
    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="<?= $CONTENT_URL ?>/images/products/3.PNG" class="d-block w-100" alt="..." style="height: 500px" />
            </div>
            <div class="carousel-item">
                <img src="<?= $CONTENT_URL ?>/images/products/3.PNG" class="d-block w-100" alt="..." style="height: 500px" />
            </div>
            <div class="carousel-item">
                <img src="<?= $CONTENT_URL ?>/images/products/3.PNG" class="d-block w-100" alt="..." style="height: 500px" />
            </div>
            <div class="carousel-item">
                <img src="<?= $CONTENT_URL ?>" class="d-block w-100" alt="..." style="height: 500px" />
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</div>