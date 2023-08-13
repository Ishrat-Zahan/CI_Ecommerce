<?= $this->extend('layouts/user') ?>
<?= $this->section('content') ?>

<div style="margin-top: 90px; margin-bottom:100px;" class="container">
    <div class="product-quick-view">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <img src="<?= base_url('storage/productimg/' . $info['image_name']) ?>" alt="">
            </div>
            <div class="col-lg-6">
                <div class="quick-view-content">
                    <div class="top">
                        <h3 class="head"><?= $info['name']; ?></h3>
                        <div class="price d-flex align-items-center"><span class="lnr lnr-tag"></span> <span class="ml-10"><?= $info['price']; ?></span></div>
                        <div class="category">Category: <span>Household</span></div>
                        <div class="available">Availibility: <span>In Stock</span></div>
                    </div>
                    <div class="middle">
                        <p class="content"><?= $info['description']; ?></p>
                    </div>
                    <div>
                        <div class="quantity-container d-flex align-items-center mt-15">
                            Quantity:
                            <input type="text" class="quantity-amount ml-15" value="1" />
                            <div class="arrow-btn d-inline-flex flex-column">
                                <button class="increase arrow" type="button" title="Increase Quantity"><span class="lnr lnr-chevron-up"></span></button>
                                <button class="decrease arrow" type="button" title="Decrease Quantity"><span class="lnr lnr-chevron-down"></span></button>
                            </div>
                        </div>
                        <div class="d-flex mt-20">
                            <a href="#" class="view-btn color-2"><span>Add to Cart</span></a>
                            <a href="#" class="like-btn"><span class="lnr lnr-layers"></span></a>
                            <a href="#" class="like-btn"><span class="lnr lnr-heart"></span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection('content') ?>