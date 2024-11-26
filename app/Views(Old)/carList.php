<!DOCTYPE html>
<!--[if IE 8 ]><html class="ie" xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US">
<!--<![endif]-->



<head>
    
    <!-- Basic Page Needs -->
    <meta charset="utf-8">
    <!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
    <title>RNR Auto World | All Cars</title>

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

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
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

            <!-- Main Header -->
            <?php include 'components/header.php'; ?>
            <!-- End Main Header -->

            <!-- car-listing-list -->
            <div class="widget-banner-car-listing banner-car-listing-list">
                <div class="themesflat-container full">
                    <div class="banner-car-listing">
                        <h1 class="title text-white"><span class="text-red">RNR</span> Auto World</h1>
                    </div>
                </div>
            </div>

            <!-- car-listing-list -->
            <div class="widget-car-listing-list">
                <div class="themesflat-container">
                    <div class="row car-listing-list">
                        <div class="col-md-12 col-lg-3">
                            <div class="search-filter-listing-car">
                                <div class="filter-header-list">
                                    <h6 class="title-filter">Search by Filter</h6>
                                    <div class="btn-filter">
                                        <i class="icon-Grid-view"></i>
                                    </div>
                                </div>
                                <form id="filter-list-car-side-bar" class="list-filter" action="<?= base_url('/cars') ?>" method="get">
                                    <div class="form-group">
                                        <label for="min-value">Search title :</label>
                                        <input type="text" id="title" name="title" placeholder="Search here..." value="<?= isset($_GET['title']) ? htmlspecialchars($_GET['title']) : '' ?>" > <!-- serach by title -->
                                    </div>

                                    <!-- Minimum Price -->
                                    <div class="form-group">
                                        <label for="min-value">Min Price:</label>
                                        <input type="number" id="min-value" name="min-value" placeholder="Min Price" min="0" step="1" value="<?= isset($_GET['min-value']) ? htmlspecialchars($_GET['min-value']) : '' ?>" >
                                    </div>

                                    <!-- Maximum Price -->
                                    <div class="form-group">
                                        <label for="max-value">Max Price:</label>
                                        <input type="number" id="max-value" name="max-value" placeholder="Max Price" min="0" step="1" value="<?= isset($_GET['max-value']) ? htmlspecialchars($_GET['max-value']) : '' ?>"   >
                                    </div>

                                    <!-- Condition -->
                                    <div class="form-group">
                                        <label for="condition">Condition:</label>
                                        <select id="condition" name="condition">
                                            <option value="">Any</option>
                                            <option value="New" <?= (isset($_GET['condition']) && $_GET['condition'] === 'New') ? 'selected' : '' ?> >New</option>
                                            <option value="Used" <?= (isset($_GET['condition']) && $_GET['condition'] === 'Used') ? 'selected' : '' ?>  >Used</option>
                                        </select>
                                    </div>


                                    <div class="form-group">
                                        <label>Make</label>
                                        <div class="group-select">
                                            <select name="main-category" id="main-category" class="form-control nice-select">
                                                <option value="">Any</option>
                                                <!-- Main categories will be populated here by JavaScript -->
                                            </select>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label>Model</label>
                                        <div class="group-select">
                                            <select name="sub-category" id="sub-category" class="form-control nice-select">
                                                <option value="" disabled selected>Select a Model</option>
                                                <!-- Subcategories will be populated here by JavaScript -->
                                            </select>
                                        </div>
                                    </div>

                                    <script>
    $(document).ready(function() {
        // Fetch categories and subcategories
        $.ajax({
            url: '<?= base_url('cars_category_for_filter') ?>',
            method: 'GET',
            success: function(response) {
                const categories = response.categories;

                // Populate main categories
                categories.forEach(function(category) {
                    $('#main-category').append(
                        `<option value="${category.id}" ${category.id == "<?= isset($_GET['main-category']) ? $_GET['main-category'] : '' ?>" ? 'selected' : ''}>${category.category_name}</option>`
                    );
                });

                // Function to populate subcategories
                function populateSubcategories(selectedCategoryId) {
                    const selectedCategory = categories.find(category => category.id == selectedCategoryId);
                    $('#sub-category').empty().append(
                        '<option value="" disabled selected>Select a Model</option>'
                    );

                    if (selectedCategory && selectedCategory.sub_categories) {
                        selectedCategory.sub_categories.forEach(function(subCategory) {
                            $('#sub-category').append(
                                `<option value="${subCategory.id}" ${subCategory.id == "<?= isset($_GET['sub-category']) ? $_GET['sub-category'] : '' ?>" ? 'selected' : ''}>${subCategory.model_name}</option>`
                            );
                        });
                    }
                }

                // Set the selected main category based on URL parameters
                const selectedMainCategoryId = "<?= isset($_GET['main-category']) ? $_GET['main-category'] : '' ?>";
                if (selectedMainCategoryId) {
                    $('#main-category').val(selectedMainCategoryId);
                    populateSubcategories(selectedMainCategoryId); // Populate subcategories for selected main category
                }

                // Handle change event for main category
                $('#main-category').on('change', function() {
                    const mainCategoryId = $(this).val();
                    populateSubcategories(mainCategoryId); // Populate subcategories based on new selection
                });
            },
            error: function(error) {
                console.log('Error fetching categories and subcategories:', error);
            }
        });
    });
</script>

                                    <!-- Fuel Type -->
                                    <div class="form-group">
                                        <label for="fuel-type">Fuel Type:</label>
                                        <select id="fuel-type" name="fuel-type">
                                            <option value="">Any</option>                                        
                                            <option value="Diesel" <?= (isset($_GET['fuel-type']) && $_GET['fuel-type'] === 'Diesel') ? 'selected' : '' ?>  >Diesel</option>
                                            <option value="Electric" <?= (isset($_GET['fuel-type']) && $_GET['fuel-type'] === 'Electric') ? 'selected' : '' ?> >Electric</option>
                                            <option value="Gasoline"  <?= (isset($_GET['fuel-type']) && $_GET['fuel-type'] === 'Gasoline') ? 'selected' : '' ?> >Gasoline</option>
                                            <option value="Hybrid" <?= (isset($_GET['fuel-type']) && $_GET['fuel-type'] === 'Hybrid') ? 'selected' : '' ?> >Hybrid</option>
                                            <!-- Add more fuel types as needed -->
                                        </select>
                                    </div>

                                    <!-- Transmission -->
                                    <div class="form-group">
                                        <label for="transmission">Transmission:</label>
                                        <select id="transmission" name="transmission">
                                            <option value="">Any</option>
                                            <option value="Manual" <?= (isset($_GET['transmission']) && $_GET['transmission'] === 'Manual') ? 'selected' : '' ?> >Manual</option>
                                            <option value="Auto" <?= (isset($_GET['transmission']) && $_GET['transmission'] === 'Auto') ? 'selected' : '' ?> >Auto</option>
                                            <option value="CVT" <?= (isset($_GET['transmission']) && $_GET['transmission'] === 'CVT') ? 'selected' : '' ?> >CVT</option>
                                            <option value="DCT" <?= (isset($_GET['transmission']) && $_GET['transmission'] === 'DCT') ? 'selected' : '' ?> >DCT</option>
                                         

                                        </select>
                                    </div>

                                    <!-- Year -->
                                    <div class="form-group">
                                        <label for="year">Year:</label>
                                        <input type="number" id="year" name="year" placeholder="Year" min="1900" max="<?= date('Y') ?>" value="<?= isset($_GET['year']) ? htmlspecialchars($_GET['year']) : '' ?>" >
                                    </div>

                                    <!-- Drivetrain -->
                                    <div class="form-group">
                                        <label for="driver_type">Drivetrain:</label>
                                        <select id="driver_type" name="driver_type">
                                        <option value="">Any</option>
            <option value="FWD" <?= (isset($_GET['driver_type']) && $_GET['driver_type'] === 'FWD') ? 'selected' : '' ?>>FWD</option>
            <option value="2WD" <?= (isset($_GET['driver_type']) && $_GET['driver_type'] === '2WD') ? 'selected' : '' ?>>2WD</option>
            <option value="4WD" <?= (isset($_GET['driver_type']) && $_GET['driver_type'] === '4WD') ? 'selected' : '' ?>>4WD</option>
            <option value="AWD" <?= (isset($_GET['driver_type']) && $_GET['driver_type'] === 'AWD') ? 'selected' : '' ?>>AWD</option>
                                            <!-- Add more drivetrains as needed -->
                                        </select>
                                    </div>
                                    <!-- Mileage -->
                                    <div class="form-group">
                                    <label for="mileage">Max Mileage:</label>
                                    <input type="number" id="mileage" name="mileage" placeholder="Max Mileage" min="0" value="<?= isset($_GET['mileage']) ? htmlspecialchars($_GET['mileage']) : '' ?>">
                                    </div>

                                    <!-- Color -->
                                    <div class="form-group">
                                        <label for="color">Color:</label>
                                        <select id="color" name="color">
                                        <option value="">Any</option>
            <option value="Black" <?= (isset($_GET['color']) && $_GET['color'] === 'Black') ? 'selected' : '' ?>>Black</option>
            <option value="Red" <?= (isset($_GET['color']) && $_GET['color'] === 'Red') ? 'selected' : '' ?>>Red</option>
            <option value="White" <?= (isset($_GET['color']) && $_GET['color'] === 'White') ? 'selected' : '' ?>>White</option>
            <option value="Green" <?= (isset($_GET['color']) && $_GET['color'] === 'Green') ? 'selected' : '' ?>>Green</option>
            <option value="Yellow" <?= (isset($_GET['color']) && $_GET['color'] === 'Yellow') ? 'selected' : '' ?>>Yellow</option>
                                        </select>
                                    </div>

                                    <!-- Engine Size -->
                                    <div class="form-group">
                                        <label for="engine-size">Engine Size:</label>
                                        <input type="text" id="engine-size" name="engine-size" placeholder="Engine Size">
                                    </div>


                                    <!-- Apply Filters Button -->
                                    <div class="form-group">
                                        <button type="submit">Apply Filters</button>
                                    </div>
                                </form>



                            </div>
                        </div>
                        <div class="col-md-12 col-lg-9 listing-list-car-wrap">
                            <form action="/" class="tf-my-listing-search">
                                <div class="row">

                                    <div class="col-md-6 toolbar-search-list">
                                        <div class="group-select-recently">
                                            <!-- <div class="nice-select" tabindex="0">
                                                 <span class="current">Recently Added</span>
                                                <ul class="list">
                                                    <li data-value class="option selected">Recently Added</li>
                                                    <li data-value="new" class="option">New</li>
                                                    <li data-value="Recently Added" class="option">Recently Added</li>
                                                </ul>
                                            </div> -->
                                        </div>
                                    </div>
                                </div>
                                <!-- <?php

                                        ?> -->

                                <div class="tab-listing-all">

                                    <div class="col-md-6">
                                        <p class="showing">Showing <?= $start ?>–<?= $end ?> of <span class="text-red"><?= $totalCars ?></span> results</p>
                                    </div>
                                    <div class="toolbar-list">
                                        <div class="form-group">
                                            <a class="btn-display-listing-grid active">
                                                <i class="icon-th-list"></i>
                                            </a>
                                        </div>
                                        <div class="form-group">
                                            <a class="btn-display-listing-list">
                                                <i class="icon-line-height"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </form>
                            <!-- <div class="total-info">
                                <p>Total Cars: <?= $totalCars ?></p>
                                <p>Total Pages: <?= $totalPages ?></p>
                                <p>current Pages: <?= $currentPage ?></p>
                                <p> offset: <?= $offset ?></p>
                            </div> -->

                            <div class="tab-content" id="nav-listing-car">
                                <div class="tab-pane fade show active" id="all" role="tabpanel" aria-labelledby="all-tab" tabindex="0">



                                    <div class="listing-list-car-grid" id="car-listing">
                                        <?php foreach ($cars as $car) : ?>
                                            <div class="listing-grid-item" data-car-condition="<?= htmlspecialchars($car['condition']) ?>">
                                                <div class="listing-item-image" data-car-id="<?= htmlspecialchars($car['id']) ?>">
                                                    <div class="hover-listing-image">
                                                        <div class="wrap-hover-listing">
                                                            <?php
                                                            if (isset($car['images'])) {
                                                                $images = is_string($car['images']) ? json_decode($car['images'], true) : $car['images'];

                                                                if (is_array($images)) {
                                                                    foreach ($images as $image) {
                                                                        if (isset($image['image_type']) && $image['image_type'] == 'image') {
                                                                            echo '<div class="listing-item active" title="' . htmlspecialchars($car['title']) . '">';
                                                                            echo '<div class="images">';
                                                                            echo '<img src="' . base_url('/' . htmlspecialchars($image['img_url'])) . '" class="swiper-image tfcl-light-gallery" alt="Image" />';
                                                                            echo '</div></div>';
                                                                        }
                                                                    }
                                                                } else {
                                                                    echo 'No valid images available.';
                                                                }
                                                            } else {
                                                                echo 'No images available.';
                                                            }
                                                            ?>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="listing-item-content">
                                                    <div class="listing-top-content">
                                                    <h6 class="title"><a href="<?= base_url('cars/' . $car['id']); ?>"><?= htmlspecialchars(mb_strimwidth($car['title'], 0, 15, '...')) ?: 'No Title' ?></a></h6>
                                                        <div class="description">
                                                            <ul>
                                                                <li class="listing-information fuel">
                                                                    <i class="icon-gasoline-pump-1"></i>
                                                                    <div class="inner">
                                                                        <span>Fuel type</span>
                                                                        <p><?= htmlspecialchars($car['fuel_type']) ?></p>
                                                                    </div>
                                                                </li>
                                                                <li class="listing-information size-engine">
                                                                    <i class="icon-Group1"></i>
                                                                    <div class="inner">
                                                                        <span>Mileage</span>
                                                                        <p><?= esc($car['mileage']) ? esc($car['mileage']) . ' km' : 'N/A'; ?></p>
                                                                    </div>
                                                                </li>
                                                                <li class="listing-information transmission">
                                                                    <i class="icon-gearbox-1"></i>
                                                                    <div class="inner">
                                                                        <span>Transmission</span>
                                                                        <p><?= htmlspecialchars($car['transmission']) ?></p>
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="bottom-price-wrap">
                                                        <div class="price-wrap">
                                                            <p class="price">
                                                                <?= isset($car['regular_price']) && !empty($car['regular_price']) ? '£' . htmlspecialchars($car['regular_price']) : 'Contact for price' ?>
                                                            </p>
                                                            <p class="price-sale">
                                                                <?= isset($car['sale_price']) && !empty($car['sale_price']) ? '£' . htmlspecialchars($car['sale_price']) : 'Contact for price' ?>
                                                            </p>
                                                        </div>
                                                        <div class="btn-read-more">
                                                            <a class="more-link" href="<?= base_url('cars/' . $car['id']); ?>">
                                                                <span>View details</span>
                                                                <i class="icon-arrow-right2"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        <?php endforeach; ?>
                                    </div>

                                    <div class="tf-pagination">
                                        <a class="prev page-numbers" href="<?= $currentPage > 1 ? base_url("cars/page/" . ($currentPage - 1) . '?' . http_build_query($request->getGet())) : '#' ?>">
                                            <i class="icon-3"></i>
                                        </a>
                                        <?php for ($i = 1; $i <= $totalPages; $i++) : ?>
                                            <a class="page-numbers <?= $i == $currentPage ? 'active' : '' ?>" href="<?= base_url("cars/page/" . $i . '?' . http_build_query($request->getGet())) ?>"><?= $i ?></a>
                                        <?php endfor; ?>
                                        <a class="next page-numbers" href="<?= $currentPage < $totalPages ? base_url("cars/page/" . ($currentPage + 1) . '?' . http_build_query($request->getGet())) : '#' ?>">
                                            <i class="icon--1"></i>
                                        </a>
                                    </div>

                                    <script>
                                        function filterCars(type) {
                                            const carListing = document.getElementById('car-listing');
                                            const cars = carListing.getElementsByClassName('listing-grid-item');

                                            for (let i = 0; i < cars.length; i++) {
                                                const carCondition = cars[i].getAttribute('data-car-condition');

                                                // Check if the car condition matches the filter
                                                if (type === 'all' || carCondition === type) {
                                                    cars[i].style.display = 'block'; // Show the car
                                                } else {
                                                    cars[i].style.display = 'none'; // Hide the car
                                                }
                                            }
                                        }

                                        // document.addEventListener('DOMContentLoaded', function() {
                                        //     function attachPaginationEvents() {
                                        //         const paginationLinks = document.querySelectorAll('.tf-pagination a');

                                        //         paginationLinks.forEach(link => {
                                        //             link.addEventListener('click', function(e) {
                                        //                 e.preventDefault();
                                        //                 const url = this.href; // Get the URL of the clicked link

                                        //                 if (url !== '#') { // Check if the URL is not '#'
                                        //                     fetch(url)
                                        //                         .then(response => {
                                        //                             if (!response.ok) {
                                        //                                 throw new Error('Network response was not ok');
                                        //                             }
                                        //                             return response.text();
                                        //                         })
                                        //                         .then(data => {
                                        //                             const parser = new DOMParser();
                                        //                             const doc = parser.parseFromString(data, 'text/html');

                                        //                             // Replace the car listing
                                        //                             const newListing = doc.querySelector('#car-listing').innerHTML;
                                        //                             document.querySelector('#car-listing').innerHTML = newListing;

                                        //                             // Replace the pagination
                                        //                             const newPagination = doc.querySelector('.tf-pagination').innerHTML;
                                        //                             document.querySelector('.tf-pagination').innerHTML = newPagination;

                                        //                             // Re-attach event listeners to the new pagination links
                                        //                             attachPaginationEvents();
                                        //                         })
                                        //                         .catch(error => console.error('Error fetching data:', error));
                                        //                 }
                                        //             });
                                        //         });
                                        //     }

                                        //     attachPaginationEvents();
                                        // });

                                        document.addEventListener('DOMContentLoaded', function() {
                                            function attachPaginationEvents() {
                                                const paginationLinks = document.querySelectorAll('.tf-pagination a');

                                                paginationLinks.forEach(link => {
                                                    link.addEventListener('click', function(e) {
                                                        const url = this.href; // Get the URL of the clicked link

                                                        if (url !== '#') { // Check if the URL is not '#'
                                                            window.location.href = url; // Navigate to the URL, causing a full page reload
                                                        }
                                                    });
                                                });
                                            }

                                            attachPaginationEvents();
                                        });
                                    </script>





                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <!-- Footer -->
            <?php include 'components/footer.php' ?>
            <!-- /#footer -->

        </div>

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
                            <form method="post" class="comment-form form-submit" action="/" accept-charset="utf-8" novalidate="novalidate">
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
                                    <input type="password" class="input-form password-input" placeholder="Your password">
                                </fieldset>
                                <fieldset>
                                    <label>Confirm password</label>
                                    <input type="password" class="input-form password-input" placeholder="Confirm password">
                                </fieldset>
                                <button class="sc-button" name="submit" type="submit">
                                    <span>Sign Up</span>
                                </button>
                            </form>
                        </div>
                    </div>
                    <div class="text-box text-center mt-30">Allready have an account? <a class="color-popup " data-bs-target="#exampleModalToggle2" data-bs-toggle="modal" data-bs-dismiss="modal">Login</a></div>
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
                                    <input type="email" id="email" class="tb-my-input" name="email" placeholder="Email or user name">
                                </fieldset>
                                <fieldset>
                                    <label>Password</label>
                                    <input type="password" class="input-form password-input" placeholder="Your password">
                                </fieldset>
                                <div class="title-forgot t-al-right mb-20"><a class="t-al-right" data-bs-target="#exampleModalToggle3" data-bs-toggle="modal" data-bs-dismiss="modal">Forgot password</a>
                                </div>
                                <button class="sc-button" name="submit" type="submit">
                                    <span>Login</span>
                                </button>
                            </form>
                        </div>
                    </div>
                    <div class="text-box text-center mt-30">Don’t you have an account? <a class="color-popup" data-bs-target="#exampleModalToggle" data-bs-toggle="modal" data-bs-dismiss="modal">Register</a></div>
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
                                    <input type="password" class="input-form password-input" placeholder="Your password">
                                </fieldset>
                                <button class="sc-button" name="submit" type="submit">
                                    <span>Get new password</span>
                                </button>
                            </form>
                        </div>
                    </div>
                    <div class="text-box text-center mt-30"><a class="color-popup" data-bs-target="#exampleModalToggle2" data-bs-toggle="modal" data-bs-dismiss="modal">Back to Login</a></div>
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
    <script src="<?= base_url('assets/js/wow.min.js') ?>"></script>
    <script src="<?= base_url('assets/js/map.min.js') ?>"></script>
    <script src="<?= base_url('assets/js/map.js') ?>"></script>
    <script src="<?= base_url('assets/js/main.js') ?>"></script>

</body>

</html>