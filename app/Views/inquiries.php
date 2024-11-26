<!DOCTYPE html>
<!--[if IE 8 ]><html class="ie" xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US">
<!--<![endif]-->

<head>
    <!-- Basic Page Needs -->
    <meta charset="utf-8">
    <!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
    <title>RNR Auto World | Administration</title>

    <meta name="author" content="themesflat.com">

    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- Theme Style -->
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/css/style.css') ?>">

    <!-- Favicon and Touch Icons  -->
    <link rel="shortcut icon" href="<?= base_url('assets/images/logo/favicon.png') ?>">
    <link rel="apple-touch-icon-precomposed" href="<?= base_url('assets/images/logo/logo.png') ?>">

    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/css/map.min.css') ?>">
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/css/nice-select.css') ?>">
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/css/style.css.map') ?>">


</head>

<body class="body counter-scroll">

<!-- preload -->
<div class="preload preload-container">
    <div class="middle">
    </div>
</div>
<!-- /preload -->

<!-- /#page -->
<div id="wrapper">
    <div id="page" class="clearfix">

        <!-- Sidebar Menu - Import-->
        <?php include 'components/dashboard-sidebar.php' ?>

        <div class="overlay-dashboard">
        </div>
        <div class="has-dashboard">

            <main id="main-content" class="site-main-dashboard">
                <div class="page-dashboard-wrap">
                    <div class="dashboard">
                        <div class="row">
                            <div class="col-md-6">
                                <h4 class="title-dashboard">Car Inquiries</h4>
                            </div>
                            <div class="col-md-6 sellec-list-db">
                                <div class="group-select">
                                    <div class="nice-select" tabindex="0">
                                        <span class="current">Recently Added</span>
                                        <ul class="list">
                                            <li data-value class="option selected">Recently Added</li>
                                            <li data-value="Public" class="option">Public</li>
                                            <li data-value="Pending" class="option">Pending</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="show-dashboard">
                                <span class="btn-show-dashboard">
                                    <i class="icon-th-list"></i>
                                    Show Sidebar
                                </span>
                        </div>
                        <div class="table-listing-inventory">
                            <table class="listing-inventory">
                                <tbody>
                                <?php foreach ($inquiries as $inquiry):
                                    $isPending = htmlspecialchars($inquiry['status'] == 'PENDING')
                                    ?>
                                <tr>
                                    <td>
                                        <div class="tfcl-listing-listing">
                                            <div class="features-images">

                                                <a class="thumb" title="" href="#">
                                                    <img src="./assets/images/car-list/list1.jpg" alt=""
                                                         title="">
                                                </a>

                                            </div>
                                            <div class="listing-summary">
                                                <div class="mypt-brand">Name: <span><?= htmlspecialchars($inquiry['customer_name']) ?></span></div>
                                                <h6 class="listing-title">
                                                    <a title="" href="#">Chevrolet Suburban 2023</a>
                                                </h6>
                                                <p class="mypt-address">
                                                    <i class="icon-map-1-1"></i>
                                                    Boston, MA, United States north america
                                                </p>
                                                <div class="price">$27,000</div>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="list-wrapper">
                                            <p class="status-publish"> Approved </p>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="list-wrapper">
                                            <p>Petrol</p>
                                            <b>Fuel Type</b>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="list-wrapper">
                                            <p>2017</p>
                                            <b>Reg Year</b>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="list-wrapper">
                                            <p>5000mi</p>
                                            <b>Mileage</b>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="list-wrapper">
                                            <p>Manual</p>
                                            <b>Transmission</b>
                                        </div>
                                    </td>
                                </tr>

                                <?php endforeach; ?>


                                </tbody>
                            </table>
                            <div class="tf-pagination mt-60">
                                <a class="prev page-numbers" href="#">
                                    <i class="icon-3"></i>
                                </a>
                                <a class="page-numbers" href="#">1</a>
                                <a class="page-numbers active" href="#">2</a>
                                <a class="page-numbers" href="#">3</a>
                                <a class="page-numbers" href="#">...</a>
                                <a class="next page-numbers" href="#">
                                    <i class="icon--1"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </main>

        </div>
    </div>

</div>
<!-- /#page -->

<!-- Button Top -->
<a id="scroll-top" class="button-go"></a>
<!-- Button Top -->

<!-- Modal -->
<div class="modal fade" id="exampleModalToggle" aria-hidden="true"
     tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="content-re-lo">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                <div class="title">Register</div>
                <div class="register-form">
                    <div class="respond-register-form">
                        <form method="post" class="comment-form form-submit" action="/" accept-charset="utf-8"
                              novalidate="novalidate">
                            <fieldset>
                                <label>User name</label>
                                <input type="text" class="tb-my-input" name="text" placeholder="User name">
                            </fieldset>
                            <fieldset>
                                <label>Email</label>
                                <input type="email" class="tb-my-input" name="email" placeholder="Email">
                            </fieldset>
                            <fieldset>
                                <label>Password</label>
                                <input type="password" class="input-form password-input"
                                       placeholder="Your password">
                            </fieldset>
                            <fieldset>
                                <label>Confirm password</label>
                                <input type="password" class="input-form password-input"
                                       placeholder="Confirm password">
                            </fieldset>
                            <button class="sc-button" name="submit" type="submit">
                                <span>Sign Up</span>
                            </button>
                        </form>
                    </div>
                </div>
                <div class="text-box text-center mt-30">Allready have an account? <a class="color-popup "
                                                                                     data-bs-target="#exampleModalToggle2" data-bs-toggle="modal"
                                                                                     data-bs-dismiss="modal">Login</a></div>
            </div>

        </div>
    </div>
</div>
<div class="modal fade" id="exampleModalToggle2" aria-hidden="true"
     tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">

            <div class="content-re-lo">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                <div class="title">Login</div>
                <div class="register-form">
                    <div class="respond-register-form">
                        <form method="post" class="comment-form form-submit" action="#" accept-charset="utf-8">
                            <fieldset>
                                <label>Account</label>
                                <input type="email" id="email" class="tb-my-input" name="email"
                                       placeholder="Email or user name">
                            </fieldset>
                            <fieldset>
                                <label>Password</label>
                                <input type="password" class="input-form password-input"
                                       placeholder="Your password">
                            </fieldset>
                            <div class="title-forgot t-al-right mb-20"><a class="t-al-right"
                                                                          data-bs-target="#exampleModalToggle3" data-bs-toggle="modal"
                                                                          data-bs-dismiss="modal">Forgot password</a>
                            </div>
                            <button class="sc-button" name="submit" type="submit">
                                <span>Login</span>
                            </button>
                        </form>
                    </div>
                </div>
                <div class="text-box text-center mt-30">Don’t you have an account? <a class="color-popup"
                                                                                      data-bs-target="#exampleModalToggle" data-bs-toggle="modal"
                                                                                      data-bs-dismiss="modal">Register</a></div>
            </div>

        </div>
    </div>
</div>
<div class="modal fade" id="exampleModalToggle3" aria-hidden="true"
     tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="content-re-lo">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                <div class="title">Forgot your password?</div>
                <div class="register-form">
                    <div class="respond-register-form">
                        <form method="post" class="comment-form form-submit" action="#" accept-charset="utf-8">

                            <fieldset>
                                <label>Password</label>
                                <input type="password" class="input-form password-input"
                                       placeholder="Your password">
                            </fieldset>
                            <button class="sc-button" name="submit" type="submit">
                                <span>Get new password</span>
                            </button>
                        </form>
                    </div>
                </div>
                <div class="text-box text-center mt-30"><a class="color-popup" data-bs-target="#exampleModalToggle2"
                                                           data-bs-toggle="modal" data-bs-dismiss="modal">Back to Login</a></div>
            </div>

        </div>
    </div>
</div><!-- Modal -->

<!-- Javascript -->
<script src="<?= base_url('assets/js/jquery.min.js') ?>"></script>
<script src="<?= base_url('assets/js/bootstrap.min.js') ?>"></script>
<script src="<?= base_url('assets/js/jquery.nice-select.min.js') ?>"></script>
<script src="<?= base_url('assets/js/swiper-bundle.min.js') ?>"></script>
<script src="<?= base_url('assets/js/swiper.js') ?>"></script>
<script src="<?= base_url('assets/js/jquery-countTo.js') ?>"></script>
<script src="<?= base_url('assets/js/nouislider.min.js') ?>"></script>
<script src="<?= base_url('assets/js/price-ranger.js') ?>"></script>
<script src="<?= base_url('assets/js/magnific-popup.min.js') ?>"></script>
<script src="<?= base_url('assets/js/apexcharts.js') ?>"></script>
<script src="<?= base_url('assets/js/line-chart.js') ?>"></script>
<script src="<?= base_url('assets/js/wow.min.js') ?>"></script>
<script src="<?= base_url('assets/js/map.min.js') ?>"></script>
<script src="<?= base_url('assets/js/map.js') ?>"></script>
<script src="<?= base_url('assets/js/main.js') ?>"></script>

</body>

</html>