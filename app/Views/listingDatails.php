<!DOCTYPE html>
<!--[if IE 8 ]><html class="ie" xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US">
<!--<![endif]-->

<head>
    <!-- Basic Page Needs -->
    <meta charset="utf-8">
    <!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
    <title>RNR Auto World</title>

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
    <!-- <div class="preload preload-container">
        <div class="middle">
        </div>
    </div> -->

    <div class="preload preload-container-car" id="divLoader">
        <div class="middle-car">
        </div>
    </div>

    <!-- /preload -->

    <!-- /#page -->
    <div id="wrapper">
        <div id="page" class="clearfix">
            <!-- Main Header -->
            <?php include 'components/header.php'; ?>
            <!-- End Main Header -->

            <!-- Breakcrumb -->
            <div class="widget-breakcrumb">
                <div class="themesflat-container">
                    <div class="breakcrumb">
                        <div class="title-breakcrumb">
                            <a class="home" href="<?= base_url('/'); ?>">Home</a>
                            <a class="home" href="<?= base_url('/cars'); ?>">Car Listing</a>
                            <a class="home"
                                href="<?= base_url('/cars'); ?>?main-category=<?= urlencode($maincategory['id']) ?>"><?= isset($maincategory['category_name']) ? esc($maincategory['category_name']) : 'null'; ?></a>
                            <a
                                href="<?= base_url('/cars'); ?>?main-category=<?= urlencode($maincategory['id']) ?>&sub-category=<?= urlencode($subCategory['id']) ?>"><?= isset($subCategory['model_name']) ? esc($subCategory['model_name']) : 'null'; ?></a>
                            <!--<span>Car Listing</span>-->
                        </div>
                    </div>
                </div>
            </div>
            <!-- Breakcrumb -->

            <!-- property-detail -->
            <div class="widget-property-detail">
                <div class="themesflat-container">
                    <div class="row">
                        <div class="col-lg-12">

                            <!--Confirmation for send Inquiry-->
                            <!--Successful-->
                            <?php if (session()->getFlashdata('success')): ?>
                            <div class="alert alert-success">
                                <?= session()->getFlashdata('success') ?>
                            </div>
                            <?php endif; ?>

                            <!--Unsuccessful-->
                            <?php if (session()->getFlashdata('error')): ?>
                            <div class="alert alert-danger">
                                <?= session()->getFlashdata('error') ?>
                            </div>
                            <?php endif; ?>
                            <!--Confirmation for send Inquiry-->

                            <div class="wrap-property-car flex">
                                <div class="box-1">
                                    <div class="icon-box-info flex">

                                        <div class="info flex">
                                            <span>Make: </span>
                                            <span
                                                class="fw-4"><?= isset($maincategory['category_name']) ? esc($maincategory['category_name']) : 'null'; ?></span>
                                        </div>
                                        <div class="info flex">
                                            <span>Model: </span>
                                            <span
                                                class="fw-4"><?= isset($subCategory['model_name']) ? esc($subCategory['model_name']) : 'null'; ?></span>
                                        </div>

                                        <div class="info flex">
                                            <span>Type: </span>
                                            <span class="fw-4"><?= esc($car['type']); ?></span>
                                        </div>
                                    </div>
                                    <div class="title-heading"><?= esc($car['title']); ?>
                                    </div>



                                    <!-- <div class="text-adress">
                                        <i class="icon-map-1-1"></i>
                                        <p>Boston, MA, United States</p>
                                    </div> -->
                                </div>

                                <!-- <?php
                                        // $images = $car['images'];

                                        // foreach ($images as $image) {
                                        //   echo base_url('/' . $image['img_url']);
                                        //  }
                                        ?> -->
                                <div class="box-2 t-al-right">
                                    <!-- <div class="icon-boxs flex">
                                        <a href="#">
                                            <i class="icon-heart-1-1"></i>
                                            <span>Favorite</span>
                                        </a>
                                        <a href="#">
                                            <i class="icon-shuffle-2-11"></i>
                                            <span>Compare</span>
                                        </a>
                                    </div> -->
                                    <?php if ($car['sale_price']) {
                                        ?>
                                    <div class="price-wrap flex">
                                        <p class="price-sale">
                                            <?= esc($car['sale_price']) ? '£' . esc($car['sale_price']) : 'N/A'; ?>

                                        </p>
                                        <p class="price">
                                            <?= esc($car['regular_price']) ? '£' . esc($car['regular_price']) : 'N/A'; ?>
                                        </p>

                                    </div>
                                    <?php
                                    }
                                    ?>

                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12">
                            <?php if ($car['sale_status'] == "SOLD"): ?>
                                <img src="../assets/images/sold/sold.png" class="sold-tag-lg" alt="sold tag">
                            <?php endif; ?>
                            <div class="gallary-property-details">
                                <div class="swiper property-gallary2">
                                    <div class="swiper-wrapper">
                                        <?php foreach ($indexedImages as $index => $image) : ?>
                                        <?php if (!empty($image)) : ?>
                                        <div class="swiper-slide">
                                            <div>
                                                <img src="<?php echo esc(base_url($image)); ?>"
                                                    alt="Car Image <?php echo $index + 1; ?>">
                                            </div>
                                        </div>
                                        <?php endif; ?>
                                        <?php endforeach; ?>
                                    </div>
                                    <!-- Navigation buttons -->
                                    <div class="swiper-button-next"></div>
                                    <div class="swiper-button-prev"></div>
                                </div>
                                <div class="swiper property-gallary">
                                    <div class="swiper-wrapper">
                                        <?php foreach ($indexedImages as $index => $image) : ?>
                                        <?php if (!empty($image)) : ?>
                                        <div class="swiper-slide">
                                            <div>
                                                <img src="<?php echo esc(base_url($image)); ?>"
                                                    alt="Car Image <?php echo $index + 1; ?>">
                                            </div>
                                        </div>
                                        <?php endif; ?>
                                        <?php endforeach; ?>





                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="row">
                        <div class="col-lg-8 col-md-12">
                            <div class="post-property">
                                <div class="wrap-description wrap-style">
                                    <h4 class="title">Description</h4>
                                    <p><?= esc($car['description']); ?></p>
                                </div>
                                <div class="wrap-car-overview wrap-style">
                                    <h4 class="title">Car Overview</h4>
                                    <div class="listing-info">
                                        <div class="row">
                                            <div class="col-xl-6 col-md-6 item">
                                                <div class="inner listing-infor-box">
                                                    <div class="icon">
                                                        <i class=" icon-Vector-13"></i>
                                                    </div>
                                                    <div class="content-listing-info">
                                                        <span class="listing-info-title">Stock Number:</span>
                                                        <!--<p class="listing-info-value"><?= esc($car['stock_number']) ?: 'N/A'; ?></p>-->
                                                        <p class="listing-info-value">
                                                            RNR-<?= sprintf('%05d', esc($car['id'])); ?></p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-6 col-md-6 item">
                                                <div class="inner listing-infor-box">
                                                    <div class="icon">
                                                        <i class="icon-Vector5"></i>
                                                    </div>
                                                    <div class="content-listing-info">
                                                        <span class="listing-info-title">Condition:</span>
                                                        <p class="listing-info-value">
                                                            <?= esc($car['condition']) ?: 'N/A'; ?></p>
                                                    </div>
                                                </div>
                                            </div>
                                            <?php if ($car['cylinders']): ?>
                                            <div class="col-xl-6 col-md-6 item">
                                                <div class="inner listing-infor-box">
                                                    <div class="icon">
                                                        <i class="icon-Group-1000002834"></i>
                                                    </div>
                                                    <div class="content-listing-info">
                                                        <span class="listing-info-title">Cylinders: </span>
                                                        <p class="listing-info-value">
                                                            <?= esc($car['cylinders']) ?: 'N/A'; ?></p>
                                                    </div>
                                                </div>
                                            </div>
                                            <?php endif; ?>
                                            <div class="col-xl-6 col-md-6 item">
                                                <div class="inner listing-infor-box">
                                                    <div class="icon">
                                                        <i class="icon-Group5"></i>
                                                    </div>
                                                    <div class="content-listing-info">
                                                        <span class="listing-info-title">Fuel Type:</span>
                                                        <p class="listing-info-value">
                                                            <?= esc($car['fuel_type']) ?: 'N/A'; ?></p>
                                                    </div>
                                                </div>
                                            </div>
                                            <?php if ($car['vin_number']): ?>
                                            <div class="col-xl-6 col-md-6 item">
                                                <div class="inner listing-infor-box">
                                                    <div class="icon">
                                                        <i class="icon-Vector-13"></i>
                                                    </div>
                                                    <div class="content-listing-info">
                                                        <span class="listing-info-title">VIN Number:</span>
                                                        <p class="listing-info-value">
                                                            <?= esc($car['vin_number']) ?: 'N/A'; ?>
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <?php endif; ?>
                                            <div class="col-xl-6 col-md-6 item">
                                                <div class="inner listing-infor-box">
                                                    <div class="icon">
                                                        <i class="icon-Group-15"></i>
                                                    </div>
                                                    <div class="content-listing-info">
                                                        <span class="listing-info-title">Doors:</span>
                                                        <p class="listing-info-value">
                                                            <?= esc($car['doors']) ?: 'N/A'; ?></p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-6 col-md-6 item">
                                                <div class="inner listing-infor-box">
                                                    <div class="icon">
                                                        <i class="icon-Vector-13"></i>
                                                    </div>
                                                    <div class="content-listing-info">
                                                        <span class="listing-info-title">Year:</span>
                                                        <p class="listing-info-value"><?= esc($car['year']) ?: 'N/A'; ?>
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-6 col-md-6 item">
                                                <div class="inner listing-infor-box">
                                                    <div class="icon">
                                                        <i class="icon-Format-color-fill"></i>
                                                    </div>
                                                    <div class="content-listing-info">
                                                        <span class="listing-info-title">Color:</span>
                                                        <p class="listing-info-value">
                                                            <?= esc($car['color']) ?: 'N/A'; ?></p>
                                                    </div>
                                                </div>
                                            </div>
                                            <?php if ($car['mileage']): ?>
                                            <div class="col-xl-6 col-md-6 item">
                                                <div class="inner listing-infor-box">
                                                    <div class="icon">
                                                        <i class="icon-dashboard-2"></i>
                                                    </div>
                                                    <div class="content-listing-info">
                                                        <span class="listing-info-title">Mileage: </span>
                                                        <p class="listing-info-value">

                                                            <?= esc($car['mileage']) ? esc($car['mileage']) . ' km' : 'N/A'; ?>


                                                    </div>
                                                </div>
                                            </div>
                                            <?php endif; ?>
                                            <div class="col-xl-6 col-md-6 item">
                                                <div class="inner listing-infor-box">
                                                    <div class="icon">
                                                        <i class="icon-Group-22"></i>
                                                    </div>
                                                    <div class="content-listing-info">
                                                        <span class="listing-info-title">Seats:</span>
                                                        <p class="listing-info-value">
                                                            <?= esc($car['seats']) ?: 'N/A'; ?></p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-6 col-md-6 item">
                                                <div class="inner listing-infor-box">
                                                    <div class="icon">
                                                        <i class="icon-Vector-22"></i>
                                                    </div>
                                                    <div class="content-listing-info">
                                                        <span class="listing-info-title">Transmission :</span>
                                                        <p class="listing-info-value">
                                                            <?= esc($car['transmission']) ?: 'N/A'; ?></p>
                                                    </div>
                                                </div>
                                            </div>
                                            <?php if ($car['city_mpg']): ?>
                                            <div class="col-xl-6 col-md-6 item">
                                                <div class="inner listing-infor-box">
                                                    <div class="icon">
                                                        <i class="icon-Group-31"></i>
                                                    </div>
                                                    <div class="content-listing-info">
                                                        <span class="listing-info-title">City MPG:</span>
                                                        <p class="listing-info-value">
                                                            <?= esc($car['city_mpg']) ?: 'N/A'; ?></p>
                                                    </div>
                                                </div>
                                            </div>
                                            <?php endif; ?>
                                            <?php if ($car['engine_size']): ?>
                                            <div class="col-xl-6 col-md-6 item">
                                                <div class="inner listing-infor-box">
                                                    <div class="icon">
                                                        <i class="icon-engine-1"></i>
                                                    </div>
                                                    <div class="content-listing-info">
                                                        <span class="listing-info-title">Engine Size:</span>
                                                        <p class="listing-info-value">
                                                            <?= esc($car['engine_size']) ?: 'N/A'; ?></p>
                                                    </div>
                                                </div>
                                            </div>
                                            <?php endif; ?>
                                            <?php if ($car['highway_mpg']): ?>
                                            <div class="col-xl-6 col-md-6 item">
                                                <div class="inner listing-infor-box">
                                                    <div class="icon">
                                                        <i class="icon-Group-31"></i>
                                                    </div>
                                                    <div class="content-listing-info">
                                                        <span class="listing-info-title">Highway MPG:</span>
                                                        <p class="listing-info-value">
                                                            <?= esc($car['highway_mpg']) ?: 'N/A'; ?></p>
                                                    </div>
                                                </div>
                                            </div>
                                            <?php endif; ?>
                                            <?php if ($car['driver_type']): ?>
                                            <div class="col-xl-6 col-md-6 item">
                                                <div class="inner listing-infor-box">
                                                    <div class="icon">
                                                        <i class="icon-steering-wheel-1"></i>
                                                    </div>
                                                    <div class="content-listing-info">
                                                        <span class="listing-info-title">Driver type: </span>
                                                        <p class="listing-info-value">
                                                            <?= esc($car['driver_type']) ?: 'N/A'; ?></p>
                                                    </div>
                                                </div>
                                            </div>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="wrap-car-feature wrap-style">
                                    <h4 class="title">Features</h4>
                                    <div class="tf-listing-info">
                                        <div id="tf-features">
                                            <div class="features-item">
                                                <?php
                                                $comfortFeatures = ['A/C: Front', 'A/C: Rear', 'Backup Camera', 'Cruise Control', 'Navigation', 'Power Locks'];
                                                if (array_filter(array_map(function ($feature) use ($car) {
                                                    return isset($car['features'][$feature]) && $car['features'][$feature] === "true";
                                                }, $comfortFeatures))) : ?>
                                                <h5 class="features-type-title">Comfort</h5>
                                                <div class="group-select">
                                                    <?php foreach ($comfortFeatures as $feature) : ?>
                                                    <?php if (isset($car['features'][$feature]) && $car['features'][$feature] === "true") : ?>
                                                    <div class="listing-feature-wrap"><i
                                                            class="icon-Vector-32"></i><?= esc($feature); ?></div>
                                                    <?php endif; ?>
                                                    <?php endforeach; ?>
                                                </div>
                                                <?php endif; ?>
                                            </div>

                                            <div class="features-item">
                                                <?php
                                                $entertainmentFeatures = ['AM/FM Stereo', 'CD Player', 'DVD System', 'MP3 Player', 'Portable Audio', 'Premium Audio'];
                                                if (array_filter(array_map(function ($feature) use ($car) {
                                                    return isset($car['features'][$feature]) && $car['features'][$feature] === "true";
                                                }, $entertainmentFeatures))) : ?>
                                                <h5 class="features-type-title">Entertainment</h5>
                                                <div class="group-select">
                                                    <?php foreach ($entertainmentFeatures as $feature) : ?>
                                                    <?php if (isset($car['features'][$feature]) && $car['features'][$feature] === "true") : ?>
                                                    <div class="listing-feature-wrap"><i
                                                            class="icon-Vector-32"></i><?= esc($feature); ?></div>
                                                    <?php endif; ?>
                                                    <?php endforeach; ?>
                                                </div>
                                                <?php endif; ?>
                                            </div>

                                            <div class="features-item">
                                                <?php
                                                $safetyFeatures = ['Airbag: Driver', 'Airbag: Passenger', 'Antilock Brakes', 'Bluetooth', 'Hands-Free', 'Fog Lights'];
                                                if (array_filter(array_map(function ($feature) use ($car) {
                                                    return isset($car['features'][$feature]) && $car['features'][$feature] === "true";
                                                }, $safetyFeatures))) : ?>
                                                <h5 class="features-type-title">Safety</h5>
                                                <div class="group-select">
                                                    <?php foreach ($safetyFeatures as $feature) : ?>
                                                    <?php if (isset($car['features'][$feature]) && $car['features'][$feature] === "true") : ?>
                                                    <div class="listing-feature-wrap"><i
                                                            class="icon-Vector-32"></i><?= esc($feature); ?></div>
                                                    <?php endif; ?>
                                                    <?php endforeach; ?>
                                                </div>
                                                <?php endif; ?>
                                            </div>

                                            <div class="features-item">
                                                <?php
                                                $windowFeatures = ['Power Windows', 'Windows Defroster', 'Rear Window', 'Wiper Tinted Glass', 'Sunroof', 'Tow Package'];
                                                if (array_filter(array_map(function ($feature) use ($car) {
                                                    return isset($car['features'][$feature]) && $car['features'][$feature] === "true";
                                                }, $windowFeatures))) : ?>
                                                <h5 class="features-type-title">Windows</h5>
                                                <div class="group-select">
                                                    <?php foreach ($windowFeatures as $feature) : ?>
                                                    <?php if (isset($car['features'][$feature]) && $car['features'][$feature] === "true") : ?>
                                                    <div class="listing-feature-wrap"><i
                                                            class="icon-Vector-32"></i><?= esc($feature); ?></div>
                                                    <?php endif; ?>
                                                    <?php endforeach; ?>
                                                </div>
                                                <?php endif; ?>
                                            </div>

                                            <div class="features-item">
                                                <?php
                                                $seatFeatures = ['Bucket Seats', 'Heated Seats', 'Leather Interior', 'Memory Seats', 'Power Seats', 'Third Row Seats'];
                                                if (array_filter(array_map(function ($feature) use ($car) {
                                                    return isset($car['features'][$feature]) && $car['features'][$feature] === "true";
                                                }, $seatFeatures))) : ?>
                                                <h5 class="features-type-title">Seats</h5>
                                                <div class="group-select">
                                                    <?php foreach ($seatFeatures as $feature) : ?>
                                                    <?php if (isset($car['features'][$feature]) && $car['features'][$feature] === "true") : ?>
                                                    <div class="listing-feature-wrap"><i
                                                            class="icon-Vector-32"></i><?= esc($feature); ?></div>
                                                    <?php endif; ?>
                                                    <?php endforeach; ?>
                                                </div>
                                                <?php endif; ?>
                                            </div>
                                        </div>

                                    </div>
                                </div>

                            </div>
                                                                
                                                                <?php if (isset($youtubeUrl) && $youtubeUrl): ?>
                                        <div class="widget-tf-video">
                                            <div class="themesflat-container">
                                                <div class="tf-video video-wrap">
                                                    <?php
                                                    // Replace the watch URL with the embed URL
                                                    $youtubeEmbedUrl = str_replace('watch?v=', 'embed/', $youtubeUrl);
                                                    ?>
                                                    <iframe src="<?= $youtubeEmbedUrl ?>" frameborder="0" allowfullscreen></iframe>
                                                </div>
                                            </div>
                                        </div>
                                    <?php endif; ?>


                        </div>
                        <div class="col-lg-4 col-md-12">
                            <!--                            <div class="driver-price-wrap mb-40">-->
                            <!--                                <a class="test-driver mb-16" data-bs-toggle="modal" href="#test-driver" role="button">-->
                            <!--                                    Schedule Test Driver-->
                            <!--                                    <i class="icon-steering-wheel-1"></i>-->
                            <!--                                </a>-->
                            <!--                                <a class="offer-price" data-bs-toggle="modal" href="#offer-price" role="button">-->
                            <!--                                    Make An Offer Price-->
                            <!--                                    <i class="icon-Group-12"></i>-->
                            <!--                                </a>-->
                            <!---->
                            <!--                            </div>-->
                            <div class="author-contact-listing-wrap">
                                <div class="author-contact-wrap">
                                    <div class="author-contact-avatar">
                                        <img src="<?= base_url('./assets/images/avatar/avt-admin.png') ?>"
                                            title="image">
                                    </div>
                                    <div class="author-contact-info">
                                        <h4 class="name"> Ruwan J. Basnayake </h4>
                                        <p class="desc">Customer Service Manager</p>
                                        <span class="number-phone">
                                            <i class=" icon-Group-14"></i>
                                            +44 7877 354243
                                        </span>
                                    </div>
                                </div>
                                <form id="messageForm" action="/inquiry/create/<?= esc($car['id']) ?>" method="post"
                                    class="form-contact-admin" aria-label="Contact form" type="form-data">
                                    <div class="group-form">
                                        <input id="customer_name" class="admin-form" aria-required="true"
                                            aria-invalid="false" name="customer_name" placeholder="Your Name" value=""
                                            type="text" required>
                                        <i class="icon-user-1-1"></i>
                                    </div>
                                    <div class="group-form">
                                        <input id="customer_email" class="admin-form" aria-required="true"
                                            aria-invalid="false" name="customer_email" placeholder="Email" value=""
                                            type="email" required>
                                        <i class="icon-Group2"></i>
                                    </div>
                                    <div class="group-form">
                                        <input id="customer_mobile" class="admin-form" aria-invalid="false"
                                            name="customer_mobile" placeholder="Enter Phone" value="" type="text"
                                            required>
                                        <i class="icon-Group-14"></i>
                                    </div>
                                    <div class="group-form">
                                        <textarea id="customer_message" class="admin-form" aria-invalid="false"
                                            name="customer_message" placeholder="Your Message" required></textarea>
                                        <i class="icon-edit-1"></i>
                                    </div>

                                    <button id="submitButton" type="button" onclick="submitForms()" disabled>Send
                                        Message</button>
                                </form>

                                <style>
                                #submitButton:disabled {
                                    cursor: not-allowed;
                                    opacity: 0.6;
                                }
                                </style>

                                <script>
                                // Function to check if all required fields are filled
                                function checkFormFields() {
                                    const name = document.getElementById("customer_name").value.trim();
                                    const email = document.getElementById("customer_email").value.trim();
                                    const mobile = document.getElementById("customer_mobile").value.trim();
                                    const message = document.getElementById("customer_message").value.trim();

                                    // Enable submit button if all fields are filled, otherwise disable it
                                    document.getElementById("submitButton").disabled = !(name && email && mobile &&
                                        message);
                                }

                                // Attach event listeners to form fields to trigger check on input
                                document.getElementById("customer_name").addEventListener("input", checkFormFields);
                                document.getElementById("customer_email").addEventListener("input", checkFormFields);
                                document.getElementById("customer_mobile").addEventListener("input", checkFormFields);
                                document.getElementById("customer_message").addEventListener("input", checkFormFields);

                                // Wait for the entire page to load
                                window.addEventListener('load', function() {
                                    const loaderDiv = document.getElementById("divLoader");
                                    loaderDiv.style.zIndex = "-999";
                                    loaderDiv.style.opacity = "0";

                                    window.submitForms = function() {
                                        const submitButton = document.getElementById("submitButton");

                                        // Prevent submission if button is disabled
                                        if (submitButton.disabled) {
                                            return;
                                        }

                                        // Show the loader when the form is submitted
                                        loaderDiv.style.zIndex = "999";
                                        loaderDiv.style.opacity = "1";

                                        // Simulate form submission delay for demonstration
                                        setTimeout(function() {
                                            document.querySelector('.preload-container-car').style
                                                .display = 'none';
                                        }, 5000);

                                        // Submit the form
                                        document.getElementById('messageForm').submit();
                                    };
                                });
                                </script>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- property-detail -->

            <!-- related-single-listing -->
            <!--            <div class="widget-related-single-listing">-->
            <!--                <div class="themesflat-container">-->
            <!--                    <div class="related-single-listing swiper">-->
            <!--                        <div class="swiper-wrapper">-->
            <!--                            <div class="listing-grid-item swiper-slide">-->
            <!-- <div class="listing-item-image">
                                    <div class="hover-listing-image">
                                        <div class="wrap-hover-listing">
                                            <div class="listing-item active" title="Lexus LC Hybrid 2024">
                                                <div class="images">
                                                    <img src="./assets/images/car-list/car5.jpg" class="swiper-image tfcl-light-gallery" alt="images">
                                                </div>
                                            </div>
                                            <div class="listing-item" title="Lexus LC Hybrid 2024">
                                                <div class="images">
                                                    <img src="./assets/images/car-list/car11.jpg" class="swiper-image lazy tfcl-light-gallery" alt="images">
                                                </div>
                                            </div>
                                            <div class="listing-item view-gallery" title="Lexus LC Hybrid 2024">
                                                <div class="images">
                                                    <img src="./assets/images/car-list/car12.jpg" class="swiper-image tfcl-light-gallery" alt="images">
                                                    <div class="overlay-limit">
                                                        <img src="./assets/images/car-list/img.png" class="icon-img" alt="icon-map">
                                                        <p>2 more photos</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="bullet-hover-listing">
                                                <div class="bl-item active"></div>
                                                <div class="bl-item"></div>
                                                <div class="bl-item"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <a href="#" class="icon-favorite">
                                        <i class="icon-heart-1-1"></i>
                                    </a>
                                    <span class="feature">Featured</span>
                                </div>
                                <div class="listing-item-content">
                                    <div class="listing-top-content">
                                        <h6 class="title"><a href="listing-details.html"><a href="listing-details.html">Mercedez benz - c class</a></a></h6>
                                        <div class="review-wrap">
                                            <div class="rating">
                                                <i class="icon-Vector3"></i>
                                                <i class="icon-Vector3"></i>
                                                <i class="icon-Vector3"></i>
                                                <i class="icon-Vector3"></i>
                                                <i class="icon-Vector3"></i>
                                            </div>
                                            <span class="review">( 2 Reviews )</span>
                                        </div>
                                        <div class="description">
                                            <ul>
                                                <li class="listing-information fuel">
                                                    <i class="icon-gasoline-pump-1"></i>
                                                    <div class="inner">
                                                        <span>Fuel type</span>
                                                        <p>Petrol</p>
                                                    </div>
                                                </li>
                                                <li class="listing-information size-engine">
                                                    <i class="icon-Group1"></i>
                                                    <div class="inner">
                                                        <span>Mileage</span>
                                                        <p>90 k.m</p>
                                                    </div>
                                                </li>
                                                <li class="listing-information transmission">
                                                    <i class="icon-gearbox-1"></i>
                                                    <div class="inner">
                                                        <span>Transmission</span>
                                                        <p>Auto</p>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                        <ul class="list-controller">
                                            <li>
                                                <a href="#">
                                                    <i class="icon-heart-1-1"></i>
                                                    <span>Favorite</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <i class="icon-shuffle-2-11"></i>
                                                    <span>Compare</span>
                                                </a>

                                            </li>
                                        </ul>
                                    </div>
                                    <div class="bottom-price-wrap">
                                        <div class="price-wrap">
                                            <p class="price">$489</p>
                                            <p class="price-sale">$399</p>
                                        </div>
                                        <div class="btn-read-more">
                                            <a class="more-link" href="#">
                                                <span>View details</span>
                                                <i class="icon-arrow-right2"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            

 -->











            <!---->
            <!---->
            <!--                            </div>-->
            <!--                            <div class="swiper-pagination"></div>-->
            <!--                        </div>-->
            <!--                    </div>-->
            <!--                </div>-->
            <!-- related-single-listing -->




        </div>
        <!-- Footer -->
        <?php include 'components/footer.php' ?>
        <!-- /#footer -->
    </div>
    <!-- /#page -->

    <!-- Button Top -->
    <a id="scroll-top" class="button-go"></a>
    <!-- Button Top -->

    <!-- Modal -->
    <div class="modal fade" id="exampleModalToggle" aria-hidden="true" tabindex="-1">
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
    <div class="modal fade" id="exampleModalToggle2" aria-hidden="true" tabindex="-1">
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
    <div class="modal fade" id="exampleModalToggle3" aria-hidden="true" tabindex="-1">
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

    <!-- Modal-drive -->
    <div class="modal  fade" id="test-driver" aria-hidden="true" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                <h4 class="title-form">Schedule Test Driver</h4>
                <form action="/" method="post" class="test-driver-form" aria-label="Contact form"
                    novalidate="novalidate" data-status="init">
                    <div class="group-form">
                        <input class="datetimepicker" value="" type="date">
                    </div>
                    <div class="group-form">
                        <div class="group-select">
                            <div class="nice-select" tabindex="0">
                                <span class="current">10h00am - 11h00am</span>
                                <ul class="list">
                                    <li data-value class="option selected">10h00am - 11h00am</li>
                                    <li data-value="11h00am - 12h00am" class="option">11h00am - 12h00am</li>
                                    <li data-value="13h00am - 14h00am" class="option">13h00am - 14h00am</li>
                                    <li data-value="15h00am - 16h00am" class="option">15h00am - 16h00am</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="group-form">
                        <input class="test-driver-name" placeholder="Enter Your Name Here" value="" type="text">
                    </div>
                    <div class="group-form">
                        <input class="test-driver-form" placeholder="Your Phone" value="" type="tel">
                    </div>
                    <input class="test-driver-submit" type="submit" value="Send Request">
                </form>
            </div>
        </div>
    </div>
    <div class="modal fade" id="offer-price" aria-hidden="true" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                <h4 class="title-form">Make An Offer Price</h4>
                <form action="/" method="post" class="offer-price-form" aria-label="Contact form"
                    novalidate="novalidate" data-status="init">
                    <div class="group-form">
                        <input class="test-driver-name" placeholder="Enter Your Name Here" value="" type="text">
                    </div>
                    <div class="group-form">
                        <input class="test-driver-mail" placeholder="Email" value="" type="email">
                    </div>
                    <div class="group-form">
                        <input class="test-driver-form" placeholder="Your Phone" value="" type="tel">
                    </div>
                    <div class="group-form">
                        <input class="trade-price" placeholder="Trade Price" value="" type="text">
                    </div>
                    <input class="test-driver-submit" type="submit" value="Send Request">
                </form>
            </div>
        </div>
    </div>
    <!-- Modal-price -->




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
    <script src="<?= base_url('assets/js/wow.min.js') ?>"></script>
    <script src="<?= base_url('assets/js/map.min.js') ?>"></script>
    <script src="<?= base_url('assets/js/map.js') ?>"></script>
    <script src="<?= base_url('assets/js/main.js') ?>"></script>

</body>

</html>