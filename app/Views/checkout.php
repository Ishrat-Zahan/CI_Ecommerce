<?= $this->extend('layouts/user') ?>
<?= $this->section('content') ?>



<section class="banner-area organic-breadcrumb">
    <div class="container">
        <div class="breadcrumb-banner d-flex flex-wrap align-items-center">
            <div class="col-first">
                <!-- <h1>Shopping Cart</h1> -->
            </div>
        </div>
    </div>
</section>
<?php
$ss_id = session()->get('ss_id');
?>
<!-- <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-6">
                <h3 class="billing-title mt-20 mb-10">Billing Details</h3>
                <div class="row">
                    <div>
                        <input value="<?= $ss_id; ?>" id="ss_id" name="ss_id" type="hidden">
                    </div>
                    <div class="col-lg-6">
                        <input name="f_name" type="text" placeholder="First name*" onfocus="this.placeholder=''" onblur="this.placeholder = 'First name*'"  class="common-input">
                    </div>
                    <div class="col-lg-6">
                        <input name="l_name" type="text" placeholder="Last name*" onfocus="this.placeholder=''" onblur="this.placeholder = 'Last name*'"  class="common-input">
                    </div>

                    <div class="col-lg-6">
                        <input name="phone" type="text" placeholder="Phone number*" onfocus="this.placeholder=''" onblur="this.placeholder = 'Phone number*'"  class="common-input">
                    </div>
                    <div class="col-lg-6">
                        <input name="email" type="email" placeholder="Email Address*" onfocus="this.placeholder=''" onblur="this.placeholder = 'Email Address*'"  class="common-input">
                    </div>
                    <div class="col-lg-12">
                        <div class="sorting">
                            <select name="city">
                                <option value="1">City*</option>
                                <option value="2">Dhaka</option>
                                <option value="3">Chitagong</option>
                                <option value="4">Sylhet</option>
                                <option value="5">Rangpur</option>
                                <option value="6">Rajsashi</option>
                                <option value="7">Bogura</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <input name="b_address" id="bAddress" type=" text" placeholder="Billing Address*" onfocus="this.placeholder=''" onblur="this.placeholder = 'Billing Address*'"  class="common-input">
                    </div>
                    <div class="col-lg-12">
                        <input name="s_address" id="sAddress" type="text" placeholder="Shipping Address*" onfocus="this.placeholder=''" onblur="this.placeholder = 'Shipping Address*'"  class="common-input">
                    </div>
                    <div class="col-lg-12">
                        <input name="state" type="text" placeholder="State*" onfocus="this.placeholder=''" onblur="this.placeholder = 'State*'"  class="common-input">
                    </div>

                    <div class="col-lg-12">
                        <input name="p_code" type="text" placeholder="Postcode/ZIP" onfocus="this.placeholder=''" onblur="this.placeholder = 'Postcode/ZIP'" class="common-input">
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="order-wrapper mt-50">
                    <h3 class="billing-title mb-10">Your Order</h3>
                    <div class="order-list">


                        <div class="list-row d-flex justify-content-between">
                            <h6>Total</h6>
                            <div class="grandtotal" id="total"></div>
                        </div>

                        <div class="row mx-0 mb-2">
                            <div class="col-sm-4 p-0 d-inline">
                                <h6 class="me-2">Comment</h6>
                            </div>
                            <div class="col-sm-8 p-0">
                                <textarea name="comment" id="comment" class="form-control"></textarea>
                            </div>
                        </div>

                        <button id="orderBtn"  class="myorder view-btn color-2 w-100 mt-20"><span>Proceed to Checkout</span></button>
                        
                    </div>
                </div>
            </div>
        </div>
</div> -->
<?= $this->endSection('content') ?>
<?= $this->section('myscript') ?>

<script type="text/javascript">




</script>

<?= $this->endSection('myscript') ?>