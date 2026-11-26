<?php
include 'include/head.php';
include 'include/nav.php';
include 'data.php'
?>

    <div class="container-fluid text-center ">
        <div class="row ">
            <div class="col-lg-12 bg-black text-warning p-5 fw-bold fs-1 ">Hello My Library </div>
        </div>
    </div>

    <div id="carouselExampleDark" class="carousel carousel-dark slide m-5 p-lg-5  ">
    <div class="carousel-inner">
        <?php foreach($slides as $index => $slide){?>
        <div class="carousel-item  <?= $index ==0 ? 'active' : '' ?> data-bs-interval='10000'">
            <img src="images\slider/<?= $slide ?>.jpg" class="d-block w-100" alt="<?= $slide ?>">
        </div>
        <?php }?>
    </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    <section class="featured mt-5 p-5"  id="cards">
        <h2 class="text-center mb-5  active">Outstanding Books</h2>
        <div class="row" >
            <div class="col-md-3">
                <div class="card" style="width:18rem;">
                    <img src="images/image_8fcf004d.jpg" alt="" class="card-img-top">
                    <div class="card-body  d-flex flex-column">
                        <h4 class="card-title text-center">The Harry Potter novel</h4>
                        <a href="details.php" class="btn btn-outline-info">learn more</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card" style="width:18rem;">
                    <img src="images/image_4bed2923.jpg" alt="" class="card-img-top">
                    <div class="card-body  d-flex flex-column">
                        <h4 class="card-title text-center">A Novel of Times Past</h4>
                        <a href="a-novel-of-times-past.html" class="btn btn-outline-info">learn more</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card" style="width:18rem;">
                    <img src="images/image_e4bf6071.jpg" alt="" class="card-img-top">
                    <div class="card-body  d-flex flex-column">
                        <h4 class="card-title text-center">The Case No. 14 Novel</h4>
                        <a href="the-case-no-14-novel.html" class="btn btn-outline-info">learn more</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card" style="width:18rem;">
                    <img src="images/image_f58fe8d5.jpg" alt="" class="card-img-top">
                    <div class="card-body  d-flex flex-column">
                        <h4 class="card-title text-center">Bashayer Al-Saad's</h4>
                        <a href="Bashayer Al-Saad's Novel.html" class="btn btn-outline-info">learn more</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php
    include 'include/footer.php';

?>