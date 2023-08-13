<?= $this->extend('layouts/user') ?>
<?= $this->section('content') ?>

<section class="banner-area relative" id="home">
    <div class="container-fluid">
        <div class="row fullscreen align-items-center justify-content-center">
            <div class="col-lg-6 col-md-12 d-flex align-self-end img-right no-padding">
                <img class="img-fluid" src="<?= base_url() ?>assets/img/header-img.png" alt="">
            </div>
            <div class="banner-content col-lg-6 col-md-12">
                <h1 class="title-top"><span>Flat</span> 75%Off</h1>
                <h1 class="text-uppercase">
                    It’s Happening <br>
                    this Season!
                </h1>
                <button class="primary-btn text-uppercase"><a href="#">Purchase Now</a></button>
            </div>
        </div>
    </div>
</section>


<section class="category-area section-gap section-gap" id="catagory">
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="menu-content pb-40">
                <div class="title text-center">
                    <h1 class="mb-10">Shop for Different Categories</h1>
                    <p>Who are in extremely love with eco friendly system.</p>
                </div>
            </div>
        </div>
        <div class="row">

            <div class="col-lg-12 col-md-12 mb-10">
                <div class="row category-bottom">
                    <?php foreach ($cats as $row) {

                    ?>
                        <div class="col-lg-3 col-md-6 mb-30">
                            <div class="content">
                                <a href="subcategory/<?= $row['id'] ?>">
                                    <div class="content-overlay"></div>
                                    <img class="content-image img-fluid d-block mx-auto" src="<?= base_url('storage/productimg/' . $row['image']) ?>" alt="">
                                    <div class="content-details fadeIn-bottom">
                                        <h3 class="content-title"><?= $row['name'] ?></h3>
                                    </div>
                                </a>
                            </div>
                        </div>
                    <?php
                    }
                    ?>
                </div>
            </div>


        </div>
    </div>
</section>


<section class="men-product-area section-gap relative" id="men">
    <div class="overlay overlay-bg"></div>
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="menu-content pb-40">
                <div class="title text-center">
                    <h1 class="text-white mb-10">New realeased Products</h1>
                    <p class="text-white">Who are in extremely love with eco friendly system.</p>
                </div>
            </div>
        </div>
        <div class="row">
            <?php
            foreach ($latest as $row) {
            ?>
                <div class="col-lg-3 col-md-6 single-product">
                    <div class="content">
                        <div class="content-overlay"></div>
                        <img class="content-image img-fluid d-block mx-auto" src="<?= base_url('storage2/' . $row['imgname']) ?>" alt="">
                        <div class="content-details fadeIn-bottom">
                            <div class="bottom d-flex align-items-center justify-content-center">
                                <a href="#"><span class="lnr lnr-heart"></span></a>
                                <a href="#"><span class="lnr lnr-layers"></span></a>
                                <a href="javascript:void(0)" > <span data-product-id="<?= $row['id'] ?>" class="lnr lnr-cart"></span></a>
                                <a href="#" data-toggle="modal" data-target="#exampleModal"><span class="lnr lnr-frame-expand"></span></a>
                            </div>
                        </div>
                        <div class="price">
                            <h5 class="text-white"><?= $row['name']; ?></h5>
                            <h3 class="text-white"><?= $row['price']; ?></h3>
                        </div>
                    </div>
                </div>
            <?php
            } ?>

        </div>
    </div>
</section>


<section class="women-product-area section-gap" id="women">
    <div class="container">
        <div class="countdown-content pb-40">
            <div class="title text-center">
                <h1 class="mb-10">All Kinds of Products</h1>
                <p>Who are in extremely love with eco friendly system.</p>
            </div>
        </div>
        <div class="row">

            <?php
            foreach ($product as $row) {
            ?>
                <div class="col-lg-3 col-md-6 single-product">
                    <div class="content">
                        <div class="content-overlay"></div>
                        <img class="content-image img-fluid d-block mx-auto" src="<?= base_url('storage2/' . $row['imgname']) ?>" alt="Uploaded Image11">

                        <div class="content-details fadeIn-bottom">
                            <div class="bottom d-flex align-items-center justify-content-center">
                                <a href="#"><span class="lnr lnr-heart"></span></a>
                                <a href="#"><span class="lnr lnr-layers"></span></a>
                                <a href="javascript:void(0)" ><span data-product-id="<?= $row['id'] ?>" class="lnr lnr-cart"></span></a>
                               

                                <?= anchor("details/{$row['id']}", "<span></span>", ['class' => 'lnr lnr-frame-expand', 'data-toggle' => 'modal', 'data-target' => '#exampleModal']) ?>
                            </div>
                        </div>
                    </div>
                    <div class="price">
                        <h5><?= $row['name'] ?></h5>
                        <h3><?= $row['price'] ?></h3>
                    </div>
                </div>
            <?php
            }
            ?>
        </div>
    </div>
</section>

<section class="related-product-area section-gap" id="latest">
    <div class="container">
        <div class="related-content">
            <div class="title text-center">
                <h1 class="mb-10">Related Searched Products</h1>
                <p>Who are in extremely love with eco friendly system.</p>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-3 col-md-4 col-sm-6 mb-20">
                <div class="single-related-product d-flex">
                    <a href="#"><img src="<?= base_url() ?>assets/img/r1.jpg" alt=""></a>
                    <div class="desc">
                        <a href="#" class="title">Black lace Heels</a>
                        <div class="price"><span class="lnr lnr-tag"></span> $189.00</div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 mb-20">
                <div class="single-related-product d-flex">
                    <a href="#"><img src="<?= base_url() ?>assets/img/r2.jpg" alt=""></a>
                    <div class="desc">
                        <a href="#" class="title">Black lace Heels</a>
                        <div class="price"><span class="lnr lnr-tag"></span> $189.00</div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 mb-20">
                <div class="single-related-product d-flex">
                    <a href="#"><img src="<?= base_url() ?>assets/img/r3.jpg" alt=""></a>
                    <div class="desc">
                        <a href="#" class="title">Black lace Heels</a>
                        <div class="price"><span class="lnr lnr-tag"></span> $189.00</div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 mb-20">
                <div class="single-related-product d-flex">
                    <a href="#"><img src="<?= base_url() ?>assets/img/r4.jpg" alt=""></a>
                    <div class="desc">
                        <a href="#" class="title">Black lace Heels</a>
                        <div class="price"><span class="lnr lnr-tag"></span> $189.00</div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 mb-20">
                <div class="single-related-product d-flex">
                    <a href="#"><img src="<?= base_url() ?>assets/img/r5.jpg" alt=""></a>
                    <div class="desc">
                        <a href="#" class="title">Black lace Heels</a>
                        <div class="price"><span class="lnr lnr-tag"></span> $189.00</div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 mb-20">
                <div class="single-related-product d-flex">
                    <a href="#"><img src="<?= base_url() ?>assets/img/r6.jpg" alt=""></a>
                    <div class="desc">
                        <a href="#" class="title">Black lace Heels</a>
                        <div class="price"><span class="lnr lnr-tag"></span> $189.00</div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 mb-20">
                <div class="single-related-product d-flex">
                    <a href="#"><img src="<?= base_url() ?>assets/img/r7.jpg" alt=""></a>
                    <div class="desc">
                        <a href="#" class="title">Black lace Heels</a>
                        <div class="price"><span class="lnr lnr-tag"></span> $189.00</div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 mb-20">
                <div class="single-related-product d-flex">
                    <a href="#"><img src="<?= base_url() ?>assets/img/r8.jpg" alt=""></a>
                    <div class="desc">
                        <a href="#" class="title">Black lace Heels</a>
                        <div class="price"><span class="lnr lnr-tag"></span> $189.00</div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="single-related-product d-flex">
                    <a href="#"><img src="<?= base_url() ?>assets/img/r9.jpg" alt=""></a>
                    <div class="desc">
                        <a href="#" class="title">Black lace Heels</a>
                        <div class="price"><span class="lnr lnr-tag"></span> $189.00</div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="single-related-product d-flex">
                    <a href="#"><img src="<?= base_url() ?>assets/img/r10.jpg" alt=""></a>
                    <div class="desc">
                        <a href="#" class="title">Black lace Heels</a>
                        <div class="price"><span class="lnr lnr-tag"></span> $189.00</div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="single-related-product d-flex">
                    <a href="#"><img src="<?= base_url() ?>assets/img/r11.jpg" alt=""></a>
                    <div class="desc">
                        <a href="#" class="title">Black lace Heels</a>
                        <div class="price"><span class="lnr lnr-tag"></span> $189.00</div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="single-related-product d-flex">
                    <a href="#"><img src="<?= base_url() ?>assets/img/r12.jpg" alt=""></a>
                    <div class="desc">
                        <a href="#" class="title">Black lace Heels</a>
                        <div class="price"><span class="lnr lnr-tag"></span> $189.00</div>
                    </div>
                </div>
            </div>
        </div>
</section>


<section class="brand-area pb-100">
    <div class="container">
        <div class="row logo-wrap">
            <a class="col single-img" href="#">
                <img class="d-block mx-auto" src="<?= base_url() ?>assets/img/br1.png" alt="">
            </a>
            <a class="col single-img" href="#">
                <img class="d-block mx-auto" src="<?= base_url() ?>assets/img/br2.png" alt="">
            </a>
            <a class="col single-img" href="#">
                <img class="d-block mx-auto" src="<?= base_url() ?>assets/img/br3.png" alt="">
            </a>
            <a class="col single-img" href="#">
                <img class="d-block mx-auto" src="<?= base_url() ?>assets/img/br4.png" alt="">
            </a>
            <a class="col single-img" href="#">
                <img class="d-block mx-auto" src="<?= base_url() ?>assets/img/br5.png" alt="">
            </a>
        </div>
    </div>
</section>

<?= $this->endSection('content') ?>
