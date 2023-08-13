<!DOCTYPE html>
<html lang="zxx" class="no-js">

<!-- Mirrored from preview.colorlib.com/theme/shop/ by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 29 Apr 2023 15:51:06 GMT -->

<head>

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="shortcut icon" href="<?= base_url() ?>assets/img/fav.png">

    <meta name="author" content="CodePixar">

    <meta name="description" content="">

    <meta name="keywords" content="">

    <meta charset="UTF-8">
    <?= csrf_meta() ?>

    <title>IZ Shop</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet">

    <link rel="stylesheet" href="<?= base_url() ?>assets/css/linearicons.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/nice-select.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/ion.rangeSlider.css" />
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/ion.rangeSlider.skinFlat.css" />
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/bootstrap.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/main.css">

    <script nonce="b0363aba-2953-4bdd-952c-8bec1a9d2edf">
        (function(w, d) {
            ! function(dk, dl, dm, dn) {
                dk[dm] = dk[dm] || {};
                dk[dm].executed = [];
                dk.zaraz = {
                    deferred: [],
                    listeners: []
                };
                dk.zaraz.q = [];
                dk.zaraz._f = function(dp) {
                    return function() {
                        var dq = Array.prototype.slice.call(arguments);
                        dk.zaraz.q.push({
                            m: dp,
                            a: dq
                        })
                    }
                };
                for (const dr of ["track", "set", "debug"]) dk.zaraz[dr] = dk.zaraz._f(dr);
                dk.zaraz.init = () => {
                    var ds = dl.getElementsByTagName(dn)[0],
                        dt = dl.createElement(dn),
                        du = dl.getElementsByTagName("title")[0];
                    du && (dk[dm].t = dl.getElementsByTagName("title")[0].text);
                    dk[dm].x = Math.random();
                    dk[dm].w = dk.screen.width;
                    dk[dm].h = dk.screen.height;
                    dk[dm].j = dk.innerHeight;
                    dk[dm].e = dk.innerWidth;
                    dk[dm].l = dk.location.href;
                    dk[dm].r = dl.referrer;
                    dk[dm].k = dk.screen.colorDepth;
                    dk[dm].n = dl.characterSet;
                    dk[dm].o = (new Date).getTimezoneOffset();
                    if (dk.dataLayer)
                        for (const dy of Object.entries(Object.entries(dataLayer).reduce(((dz, dA) => ({
                                ...dz[1],
                                ...dA[1]
                            }))))) zaraz.set(dy[0], dy[1], {
                            scope: "page"
                        });
                    dk[dm].q = [];
                    for (; dk.zaraz.q.length;) {
                        const dB = dk.zaraz.q.shift();
                        dk[dm].q.push(dB)
                    }
                    dt.defer = !0;
                    for (const dC of [localStorage, sessionStorage]) Object.keys(dC || {}).filter((dE => dE.startsWith("_zaraz_"))).forEach((dD => {
                        try {
                            dk[dm]["z_" + dD.slice(7)] = JSON.parse(dC.getItem(dD))
                        } catch {
                            dk[dm]["z_" + dD.slice(7)] = dC.getItem(dD)
                        }
                    }));
                    dt.referrerPolicy = "origin";
                    dt.src = "../../cdn-cgi/zaraz/sd0d9.js?z=" + btoa(encodeURIComponent(JSON.stringify(dk[dm])));
                    ds.parentNode.insertBefore(dt, ds)
                };
                ["complete", "interactive"].includes(dl.readyState) ? zaraz.init() : dk.addEventListener("DOMContentLoaded", zaraz.init)
            }(w, d, "zarazData", "script");
        })(window, document);
    </script>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>

<style>
    .cart-badge {
        position: relative;
        display: inline-block;
    }


    .cart-icon {
        display: inline-block;
        width: 45px;
        height: 20px;

    }


    .cart-count {
        position: absolute;
        top: -5px;
        right: -15px;
        display: inline-block;
        width: 20px;
        height: 20px;
        line-height: 20px;
        text-align: center;
        font-size: 12px;
        font-weight: bold;
        background-color: #f41068;
        /* Replace with your desired color */
        color: white;
        /* Replace with your desired color */
        border-radius: 50%;
    }
</style>

<body>

    <header class="default-header">
        <div class="menutop-wrap">
            <div class="menu-top container">
                <div class="d-flex justify-content-between align-items-center">
                    <ul class="list">
                        <li><a href="tel:+12312-3-1209">+12312-3-1209</a></li>
                        <li><a href="https://preview.colorlib.com/cdn-cgi/l/email-protection#fb888e8b8b94898fbb9894979489979299d5989496"><span class="__cf_email__" data-cfemail="96e5e3e6e6f9e4e2d6f5f9faf9e4fafff4b8f5f9fb">[email&#160;protected]</span></a></li>
                    </ul>
                    <ul class="list">


                    </ul>
                </div>
            </div>
        </div>
        <nav class="navbar navbar-expand-lg  navbar-light">
            <div class="container">
                <a class="navbar-brand" href="#">
                    <img src="<?= base_url() ?>assets/img/logo1.png" alt="">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-end align-items-center" id="navbarSupportedContent">
                    <ul class="navbar-nav">
                        <li>
                            <!-- <a href="#home">Home</a> -->
                            <?= anchor("/", "Home") ?>

                        </li>
                        <li><a href="#catagory">Category</a></li>
                        <!-- <li><a href="#men">Men</a></li> -->
                        <li><a href="#women">Women</a></li>
                        <!-- <li><a href="#latest">latest</a></li> -->
                        <li>

                            <?= anchor('cart', '<div class="cart-badge"><span class="cart-icon">Cart</span><span id="cartTotal" class="cart-count"></span></div>') ?>


                            <!-- <a href="">
                                <div class="cart-badge">
                                    <span class="cart-icon">Cart</span>
                                    <span id="cartTotal" class="cart-count"></span>
                                </div>
                            </a> -->
                        </li>


                        <li class="dropdown">
                            <a class="dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                                My Account
                            </a>
                            <div class="dropdown-menu">

                                <?php
                                if (session()->get("logged_in")) {
                                ?>
                                    <?= anchor("login", "Login", ['class' => "dropdown-item"]) ?>
                                    <?= anchor("registration", "Register", ['class' => "dropdown-item"]) ?>


                                <?php

                                } else {
                                ?>

                                    <?= anchor("profile", "Profile", ["class" => "dropdown-item"]) ?>
                                    <?= anchor("logout", "Logout", ["class" => "dropdown-item"]) ?>
                                <?php
                                }
                                ?>


                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <?= $this->renderSection('content') ?>

    <footer class="footer-area section-gap">
        <div class="container">
            <div class="row">
                <div class="col-lg-3  col-md-6 col-sm-6">
                    <div class="single-footer-widget">
                        <h6>About Us</h6>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore dolore magna aliqua.
                        </p>
                    </div>
                </div>
                <div class="col-lg-3  col-md-6 col-sm-6">
                    <div class="single-footer-widget">
                        <h6>Newsletter</h6>
                        <p>Stay update with our latest</p>
                        <div class="" id="mc_embed_signup">
                            <form target="_blank" novalidate="true" action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01" method="get" class="form-inline">
                                <div class="d-flex flex-row">
                                    <input class="form-control" name="EMAIL" placeholder="Enter Email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Email '" required="" type="email">
                                    <button class="click-btn btn btn-default"><i class="fa fa-long-arrow-right" aria-hidden="true"></i></button>
                                    <div style="position: absolute; left: -5000px;">
                                        <input name="b_36c4fd991d266f23781ded980_aefe40901a" tabindex="-1" value="" type="text">
                                    </div>

                                </div>
                                <div class="info"></div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3  col-md-6 col-sm-6">
                    <div class="single-footer-widget mail-chimp">
                        <h6 class="mb-20">Instragram Feed</h6>
                        <ul class="instafeed d-flex flex-wrap">
                            <li><img src="<?= base_url() ?>assets/img/i1.jpg" alt=""></li>
                            <li><img src="<?= base_url() ?>assets/img/i1.jpg" alt=""></li>
                            <li><img src="<?= base_url() ?>assets/img/i1.jpg" alt=""></li>


                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="single-footer-widget">
                        <h6>Follow Us</h6>
                        <p>Let us be social</p>
                        <div class="footer-social d-flex align-items-center">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-dribbble"></i></a>
                            <a href="#"><i class="fa fa-behance"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-bottom d-flex justify-content-center align-items-center flex-wrap">

                <p class="footer-text m-0">Copyright &copy;<script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
                    <script>
                        document.write(new Date().getFullYear());
                    </script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com/" target="_blank">Colorlib</a>
                </p>

            </div>
        </div>
    </footer>

    <script src="<?= base_url() ?>assets/js/vendor/jquery-2.2.4.min.js"></script>
    <script src="../../../cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <script src="<?= base_url() ?>assets/js/vendor/bootstrap.min.js"></script>
    <script src="<?= base_url() ?>assets/js/jquery.ajaxchimp.min.js"></script>
    <script src="<?= base_url() ?>assets/js/jquery.nice-select.min.js"></script>
    <script src="<?= base_url() ?>assets/js/jquery.sticky.js"></script>
    <script src="<?= base_url() ?>assets/js/ion.rangeSlider.js"></script>
    <script src="<?= base_url() ?>assets/js/jquery.magnific-popup.min.js"></script>
    <script src="<?= base_url() ?>assets/js/owl.carousel.min.js"></script>
    <script src="<?= base_url() ?>assets/js/main.js"></script>
    <script src="<?= base_url() ?>assets/js/cart.js"></script>


    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-23581568-13');
    </script>
    <script defer src="https://static.cloudflareinsights.com/beacon.min.js/v52afc6f149f6479b8c77fa569edb01181681764108816" integrity="sha512-jGCTpDpBAYDGNYR5ztKt4BQPGef1P0giN6ZGVUi835kFF88FOmmn8jBQWNgrNd8g/Yu421NdgWhwQoaOPFflDw==" data-cf-beacon='{"rayId":"7bf8b452ba54bc2d","version":"2023.4.0","b":1,"token":"cd0b4b3a733644fc843ef0b185f98241","si":100}' crossorigin="anonymous"></script>

    <script>
        // Show busy cursor when AJAX starts
        $(document).ajaxStart(function() {
            $('body').css('cursor', 'progress');
        });

        // Reset cursor when AJAX ends
        $(document).ajaxStop(function() {
            $('body').css('cursor', 'default');
        });

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': jQuery('meta[name="X-CSRF-TOKEN"]').attr('content')
            }
        });
    </script>



    <!-- Add to cart start -->

    <script>
        // $(document).ready(function() {

        //     let items = [];
        //     let product = '';

        //     $(".lnr-cart").click(function() {

        //         var productId = $(this).data("product-id");
        //         // alert(productId);
        //         // alert("hi")
        //         $.getJSON("cartapi/" + productId, function(data) {
        //             // console.log(data);
        //             product = {
        //                 'id': data.id,
        //                 'name': data.name,
        //                 'price': data.price,
        //                 'quantity': 1
        //             }
        //             items.push(product);
        //             // console.log(product);
        //             localStorage.setItem('cart', JSON.stringify(items));


        //             let cart = new Cart();
        //             id = data.id;
        //             name = data.name;
        //             price = data.price;
        //             quantity = 1;

        //             let getitems = cart.getItems();
        //             console.log(getitems);

        //             // getitems.forEach(e => {
        //             //     console.log(e.id);

        //             // });

        //             if (getitems.length > 0) {
        //                 getitems.forEach(e => {
        //                     if (e.id == id) {
        //                 alert("This Product Already Added")
        //                 return false;

        //             } else {
        //                 cart.addItem({
        //                     name: name,
        //                     price: price,
        //                     id: id,
        //                     quantity: 1
        //                 });
        //                 // console.log(cart.totalItems());
        //                 $("#cartTotal").html(cart.totalItems());
        //             }
        //                 })
        //             }

        //         });
        //     });




        // });



        $(document).ready(function() {
            let cart = new Cart();

            // Update cart total on page load
            $("#cartTotal").html(cart.totalItems());

            $(".lnr-cart").click(function() {
                Swal.fire({
                    position: 'top-end',
                    icon: 'success',
                    title: 'Product Added to the cart',
                    showConfirmButton: false,
                    timer: 1500
                })
                var productId = $(this).data("product-id");

                let id = null;
                let name = null;
                let price = null;
                let image = null;
                let quantity = 1;


                $.getJSON("<?= base_url(); ?>cartapi/" + productId, function(data) {
                    id = data.id;
                    name = data.name;
                    price = data.price;
                    image = data.image_name;

                    let product = {
                        'id': id,
                        'name': name,
                        'price': price,
                        'quantity': quantity,
                        'image': image
                    };

                    cart.addItem(product)

                    $("#cartTotal").html(cart.totalItems());
                });
            });
        });


        // ..........................cart..............

        function financial(x) {
            return Number.parseFloat(x).toFixed(2);
        }

        $(document).ready(function() {

            let showCart = new Cart();
            console.log(showCart.getItems());
            let cartInfo = showCart.getItems();
            let html = "";
            cartInfo.forEach(e => {
                html += `<tr>
      <td>${e.name}</td>
      <td style="width: 100px;">
        <div style="max-width: 100%; max-height: 100px; display: flex; align-items: center; justify-content: center;">
            <img style="max-width: 100%; max-height: 100%; object-fit: contain;" src="<?= base_url('storage2/') ?>${e.image}" class="img-fluid" alt="">
        </div>
      </td>
     <td class="price">${e.price}</td>
      <td><input class="qu" type="number" min="1" name="quantity" value="1"></td>
     <td class="itemtotal" >${e.price}</td>
     <td><a href="#" class="removeItem" data-item='${e.id}'><i style="color: #f41068; font-size: larger;" class="fa-solid fa-trash-can"></i></a></td>
     </tr>`;

                return html;

            });
            $('#dyn_tr').html(html);


            updateTotal();
            //update total
            $(document).on('blur change keyup', '.qu', function() {
                var $row = $(this).closest('tr');
                var qty = $row.find('.qu').val();
                var price = $row.find('.price').text();
                var itemtotal = qty * price;
                console.log(itemtotal);
                $row.find('.itemtotal').text(financial(itemtotal));
                updateTotal();
            });

            function updateTotal() {
                //console.log($('.itemtotal'));
                var grandtotal = 0;
                $('.itemtotal').each(function() {
                    grandtotal += parseFloat($(this).text());

                });

                $('.grandtotal').text(grandtotal);


            }

            $(".cart-single-item").html(html);
            $(".removeItem").click(function() {
                console.log($(this).data("item"));
                if (confirm("Are you sure you want to remove")) {
                    showCart.removeItem($(this).data("item"));
                    location.reload();
                }
            });


        });
        // ...........order............................

        $(document).on('click', '.myorder', function() {
            // alert("hi");

            let cart = new Cart();
            let items = cart.getItems();
            let order = [];

            items.forEach(e => {
                let pid = e.id;
                let name = e.name;
                let price = e.price;
                let quantity = e.quantity;


                order.push({
                    pid: pid,
                    name: name,
                    price: price,
                    quantity: quantity
                })
                // console.log(order);
            })

            let ss_id = <?= session()->get('ss_id') ?>;

            // let  bAddress = $('#bAddress').val();
            // alert(bAddress)
            // alert(ss_id);
            let status = "pending";
            let discount = 1



            $.ajax({
                url: "<?= base_url("checkout") ?>",
                type: 'POST',
                data: {
                    orders: order,
                    grandtotal: $('.grandtotal').text(),
                    comment: $('#comment').val(),
                    bAddress: $('#bAddress').val(),
                    sAddress: $('#sAddress').val(),
                    ss_id: $('#ss_id').val(),
                    status: status,
                    discount: discount,

                },
                success: function(response) {
                    console.log(response);
                    if (response.status == "success") {
                        Swal.fire(
                            'Good job!',
                            'Order Successfully Added',
                            'success'
                        )
                    }
                },
                error: function(xhr, status, error) {
                    console.log('AJAX Error:', error);
                }
            });
            // $.ajax({
            //     url: '<?= base_url('cart/checkout') ?>',
            //     type: 'post',
            //     data: {
            //         orders: order,
            //         grandtotal: $('#grandtotal').text(),
            //         comment: $('#comment').val(),
            //         bAddress: $('#bAddress').val(),
            //         sAddress: $('#sAddress').val(),
            //         ss_id: ss_id,
            //         status:status,
            //         discount:discount
            //     },
            //     success: function(response) {
            //         console.log(response);
            //     },
            //     error: function(xhr, status, error) {
            //         console.log('AJAX Error:', error);
            //     }
            // });



        })
    </script>



    <!-- Add to cart end -->
    <?= $this->renderSection('myscript') ?>
</body>

<!-- Mirrored from preview.colorlib.com/theme/shop/ by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 29 Apr 2023 15:51:36 GMT -->

</html>