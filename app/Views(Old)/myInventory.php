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
            <?php include 'components/dashboard-sidebar.php' ?>
            <div class="overlay-dashboard">
            </div>
            <div class="has-dashboard">
                <!-- Main Header -->
                <header id="header2" class="main-header">
                    <!-- Header Lower -->
                    <div class="header-lower">
                        <div class="themesflat-container full">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="flex justify-space align-center">
                                        <!-- Logo Box -->
                                        <div class="logo-box flex">
                                            <div class="logo">
                                                <a href="index.html"><img src="<?= base_url('assets/images/logo/logo2.png') ?>" alt="Logo">
                                                </a>
                                            </div>
                                        </div>
                                        <div class="nav-outer flex align-center">
                                            <!-- Main Menu -->

                                            <!-- Main Menu End-->
                                        </div>
                                        <div class="header-account flex align-center">

                                        </div>
                                        <div class="mobile-nav-toggler mobile-button">
                                            <span></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Header Lower -->

                    <!-- Mobile Menu  -->
                    <div class="close-btn"><span class="icon flaticon-cancel-1"></span></div>

                    <!-- End Mobile Menu -->

                </header>
                <!-- End Main Header -->

                <main id="main-content" class="site-main-dashboard">
                    <div class="page-dashboard-wrap">


                        <div class="dashboard">

                            <div class="row">
                                <div class="col-md-4">
                                    <h4 class="title-dashboard">My Inventory</h4>
                                </div>

                                <div class="col-md-4">
                                    <form id="filter-list-car-side-bar" method="get" action="<?= site_url('admin/car_listing') ?>">
                                        <div class="input-group">
                                        <div class="w-auto">
                                        <input type="text" name="title" class="form-control" placeholder="Search Title" value="<?= esc($request['title'] ?? '') ?>">
                                         
                                        </div>    
                                           
                                           
                                                <button type="submit" class="btn-search" >
                                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" fill="#000000" version="1.1" id="Capa_1" viewBox="0 0 488.4 488.4" xml:space="preserve">
<g>
	<g>
		<path d="M0,203.25c0,112.1,91.2,203.2,203.2,203.2c51.6,0,98.8-19.4,134.7-51.2l129.5,129.5c2.4,2.4,5.5,3.6,8.7,3.6    s6.3-1.2,8.7-3.6c4.8-4.8,4.8-12.5,0-17.3l-129.6-129.5c31.8-35.9,51.2-83,51.2-134.7c0-112.1-91.2-203.2-203.2-203.2    S0,91.15,0,203.25z M381.9,203.25c0,98.5-80.2,178.7-178.7,178.7s-178.7-80.2-178.7-178.7s80.2-178.7,178.7-178.7    S381.9,104.65,381.9,203.25z"/>
	</g>
</g>
</svg>
                                                </button>
                                                
                                            
                                        </div>
                                    </form>

                                    <div class="total-info">

                                        <!-- <p>Total Pages: <?= $totalPages ?></p>
                                        <p>current Pages: <?= $currentPage ?></p> -->

                                    </div>

                                </div>

                                <div class="col-md-4 sellec-list-db">
                                    <div class="group-select">
                                        <div class="nice-select" tabindex="0">
                                            <span class="current">sorts</span>
                                            <ul class="list">
                                                <li data-value="recently-added" class="option">Recently Added</li>
                                                <li data-value="early-added" class="option">Early Added</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>


                            </div>

                            <script>
                                document.addEventListener('DOMContentLoaded', function() {
                                    const selectElement = document.querySelector('.nice-select');
                                    const currentText = selectElement.querySelector('.current');

                                    // Listen for clicks on the dropdown options
                                    selectElement.addEventListener('click', function(event) {
                                        const clickedElement = event.target.closest('.option');

                                        if (clickedElement) {
                                            const sortOrder = clickedElement.getAttribute('data-value');
                                            const sortText = clickedElement.textContent;

                                            // Update the current sort text
                                            currentText.textContent = sortText;

                                            // Redirect to the same page with the sort_order parameter
                                            if (sortOrder) {
                                                window.location.href = `?sort_order=${sortOrder}`;
                                            }
                                        }
                                    });

                                    // Set the initial sort text based on the URL parameter
                                    const urlParams = new URLSearchParams(window.location.search);
                                    const sortOrder = urlParams.get('sort_order') || 'recently-added';
                                    const initialOption = selectElement.querySelector(`.option[data-value="${sortOrder}"]`);

                                    if (initialOption) {
                                        currentText.textContent = initialOption.textContent;
                                    }
                                });
                            </script>
                            <div class="show-dashboard">
                                <span class="btn-show-dashboard">
                                    <i class="icon-th-list"></i>
                                    Show Dashboard
                                </span>
                            </div>

                            <div class="table-listing-inventory">
                                <table class="listing-inventory">
                                    <tbody>
                                        <?php foreach ($cars as $car) :

                                            // Determine if the car is published
                                            $isPublished = htmlspecialchars($car['ad_status']) == 'published';
                                        ?>
                                            <tr>
                                                <td>
                                                    <div class="tfcl-listing-listing">
                                                        <div class="features-images">
                                                            <ul class="controller2">
                                                                <!-- <li>
                                                                                                                                                                                                                                                                                        <a href="#" class="btn-action">
                                                                                                                                                                                                                                                                                            <i class="icon-heart-1-1"></i>
                                                                                                                                                                                                                                                                                        </a>
                                                                                                                                                                                                                                                                                    </li>
                                                                                                                                                                                                                                                                                    <li>
                                                                                                                                                                                                                                                                                        <a href="#" class="btn-action">
                                                                                                                                                                                                                                                                                            <i class="icon-shuffle-2-11"></i>
                                                                                                                                                                                                                                                                                        </a>
                                                                                                                                                                                                                                                                                    </li> -->
                                                            </ul>
                                                            <?php
                                                            // Check if images are available
                                                            if (isset($car['images'])) {
                                                                // Decode the JSON images into an associative array
                                                                $images = json_decode($car['images'], true);

                                                                // Check if there are any images
                                                                if (!empty($images)) {
                                                                    // Access the first image in the array
                                                                    $firstImage = $images[0];

                                                                    // Check if the first image is of type 'image'
                                                                    if ($firstImage['image_type'] == 'image') {
                                                                        echo '<div class="listing-item active" title="Lexus LC Hybrid 2024">';
                                                                        echo '<div class="images">';
                                                                        echo '<img src="' . base_url('/' . $firstImage['img_url']) . '" class="swiper-image tfcl-light-gallery" alt="images" />';
                                                                        echo '</div></div>';
                                                                    }
                                                                } else {
                                                                    echo 'No images available.';
                                                                }
                                                            } else {
                                                                echo 'No images available.';
                                                            }
                                                            ?>

                                                            <!-- <ul class="actions-list">

                                                                <li>
                                                                    <a class="btn-action" title="Update Status"
                                                                        onclick="openPopupNew(<?= $car['id'] ?>, '<?= $car['ad_status'] ?>');">
                                                                        <svg width="12" height="12" viewBox="0 0 12 12"
                                                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                            <path
                                                                                d="M0 9.49971V11.9997H2.5L9.87333 4.62638L7.37333 2.12638L0 9.49971ZM11.8067 2.69305C12.0667 2.43305 12.0667 2.01305 11.8067 1.75305L10.2467 0.193047C9.98667 -0.0669531 9.56667 -0.0669531 9.30667 0.193047L8.08667 1.41305L10.5867 3.91305L11.8067 2.69305Z"
                                                                                fill="white" />
                                                                        </svg>
                                                                    </a>
                                                                </li>


                                                                <li>
                                                                    <a href="<?= base_url('cars/' . $car['id']); ?>"
                                                                        target="_blank" class="btn-action"
                                                                        data-bs-toggle="tooltip" data-bs-placement="top"
                                                                        title="View">
                                                                        <svg width="20" height="14" viewBox="0 0 20 14"
                                                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                            <path
                                                                                d="M9.9987 0.75C5.83203 0.75 2.2737 3.34167 0.832031 7C2.2737 10.6583 5.83203 13.25 9.9987 13.25C14.1654 13.25 17.7237 10.6583 19.1654 7C17.7237 3.34167 14.1654 0.75 9.9987 0.75ZM9.9987 11.1667C7.6987 11.1667 5.83203 9.3 5.83203 7C5.83203 4.7 7.6987 2.83333 9.9987 2.83333C12.2987 2.83333 14.1654 4.7 14.1654 7C14.1654 9.3 12.2987 11.1667 9.9987 11.1667ZM9.9987 4.5C8.61537 4.5 7.4987 5.61667 7.4987 7C7.4987 8.38333 8.61537 9.5 9.9987 9.5C11.382 9.5 12.4987 8.38333 12.4987 7C12.4987 5.61667 11.382 4.5 9.9987 4.5Z"
                                                                                fill="white" />
                                                                        </svg>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="#" class="btn-action" data-bs-toggle="tooltip"
                                                                        data-bs-placement="top" title="Tooltip on top">
                                                                        <svg width="18" height="14" viewBox="0 0 18 14"
                                                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                            <path
                                                                                d="M11.5013 10.334H14.8346V12.0007H11.5013V10.334ZM11.5013 3.66732H17.3346V5.33398H11.5013V3.66732ZM11.5013 7.00065H16.5013V8.66732H11.5013V7.00065ZM1.5013 12.0007C1.5013 12.9173 2.2513 13.6673 3.16797 13.6673H8.16797C9.08463 13.6673 9.83463 12.9173 9.83463 12.0007V3.66732H1.5013V12.0007ZM10.668 1.16732H8.16797L7.33464 0.333984H4.0013L3.16797 1.16732H0.667969V2.83398H10.668V1.16732Z"
                                                                                fill="white" />
                                                                        </svg>
                                                                    </a>
                                                                </li>
                                                            </ul> -->
                                                        </div>

                                                        <style>
                                                            .actions-list {
                                                                display: flex;
                                                                list-style-type: none;
                                                                padding: 0;
                                                                margin: 0;
                                                            }

                                                            .actions-list li {
                                                                margin-right: 20px;
                                                                /* Space between buttons */
                                                            }

                                                            .btn-action {
                                                                display: inline-flex;
                                                                align-items: center;
                                                                justify-content: center;
                                                                padding: 12px 16px;
                                                                /* Adjust padding for larger buttons */
                                                                background-color: #2d2e45;
                                                                color: white;
                                                                border: none;
                                                                border-radius: 8px;
                                                                /* Larger border-radius for a rounded look */
                                                                text-align: center;
                                                                text-decoration: none;
                                                                cursor: pointer;
                                                                transition: background-color 0.3s ease;
                                                                min-width: 10px;
                                                                /* Minimum width for the button */
                                                                min-height: 10px;
                                                                /* Minimum height for the button */
                                                            }

                                                            .btn-action svg {
                                                                vertical-align: middle;
                                                                width: 15px;
                                                                /* Increase size of SVG icon */
                                                                height: 15px;
                                                                /* Increase size of SVG icon */
                                                            }

                                                            .btn-action:hover {
                                                                background-color: #0056b3;
                                                                /* Darker shade on hover */
                                                            }

                                                            .btn-edit {
                                                                display: inline-flex;
                                                                align-items: center;
                                                                justify-content: center;
                                                                padding: 12px 16px;
                                                                /* Adjust padding for larger buttons */
                                                                background-color: #2d2e45;
                                                                color: white;
                                                                border: none;
                                                                border-radius: 8px;
                                                                /* Larger border-radius for a rounded look */
                                                                text-align: center;
                                                                text-decoration: none;
                                                                cursor: pointer;
                                                                transition: background-color 0.3s ease;
                                                                min-width: 10px;
                                                                /* Minimum width for the button */
                                                                min-height: 10px;
                                                                /* Minimum height for the button */
                                                            }

                                                            .btn-edit svg {
                                                                vertical-align: middle;
                                                                width: 15px;
                                                                /* Increase size of SVG icon */
                                                                height: 15px;
                                                                /* Increase size of SVG icon */
                                                            }

                                                            .btn-edit {
                                                                background-color: #2d2e45;
                                                                /* Yellow background for edit button */
                                                                color: black;
                                                                /* Change text color for contrast */
                                                            }

                                                            .btn-edit:hover {
                                                                background-color: #d4c011;
                                                                /* Darker yellow for hover effect */
                                                            }

                                                            .btn-dlt {
                                                                display: inline-flex;
                                                                align-items: center;
                                                                justify-content: center;
                                                                padding: 12px 16px;
                                                                /* Adjust padding for larger buttons */
                                                                background-color: #2d2e45;
                                                                /* Red color for delete button */
                                                                color: white;
                                                                border: none;
                                                                border-radius: 8px;
                                                                /* Larger border-radius for a rounded look */
                                                                text-align: center;
                                                                text-decoration: none;
                                                                cursor: pointer;
                                                                transition: background-color 0.3s ease;
                                                                min-width: 10px;
                                                                /* Minimum width for the button */
                                                                min-height: 10px;
                                                                /* Minimum height for the button */
                                                            }



                                                            .btn-dlt svg {
                                                                vertical-align: middle;
                                                                width: 15px;
                                                                /* Adjust size of SVG icon */
                                                                height: 15px;
                                                                /* Adjust size of SVG icon */
                                                            }

                                                            .btn-dlt:hover {
                                                                background-color: #c82333;
                                                                /* Darker red for hover effect */
                                                            }

                                                            .btn-search {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    padding: 10px 10px; /* Increase padding for a larger button */
    background-color: white !important;
    color: white;
    border: none;
    margin-top: auto;
    margin-bottom: auto;
    margin-left: 15px !important;
    text-align: center;
    text-decoration: none;
    cursor: pointer;
    transition: background-color 0.3s ease;
    width: 50px; /* Increase width */
    height: 50px;
    border-radius: 100% !important;
     /* Increase height */
}

.btn-search:hover {
    background-color: blanchedalmond !important;
}

.btn-search svg {
    vertical-align: middle;
    width: 20px; /* Increase size of SVG icon */
    height: 20px; /* Increase size of SVG icon */
}

                                                        

                                                            .btn-inq {
                                                                display: inline-flex;
                                                                align-items: center;
                                                                justify-content: center;
                                                                padding: 12px 16px;
                                                                /* Adjust padding for larger buttons */
                                                                background-color: #2d2e45;
                                                                /* Red color for delete button */
                                                                color: white;
                                                                border: none;
                                                                border-radius: 8px;
                                                                /* Larger border-radius for a rounded look */
                                                                text-align: center;
                                                                text-decoration: none;
                                                                cursor: pointer;
                                                                transition: background-color 0.3s ease;
                                                                min-width: 10px;
                                                                /* Minimum width for the button */
                                                                min-height: 10px;
                                                                /* Minimum height for the button */
                                                            }

                                                            .btn-inq svg {
                                                                vertical-align: middle;
                                                                width: 15px;
                                                                /* Adjust size of SVG icon */
                                                                height: 15px;
                                                                /* Adjust size of SVG icon */
                                                            }

                                                            .btn-inq:hover {
                                                                background-color: #ff5a10;
                                                                /* Darker red for hover effect */
                                                            }

                                                            .btn-inq.disabled {
                                                                pointer-events: none;
                                                                opacity: 0.5;
                                                            }


                                                            /* .popup-modal {
                                                                                                                                                                                                                                                                                                                                                                                                                                                                display: none;
                                                                                                                                                                                                                                                                                                                                                                                                                                                                position: fixed;
                                                                                                                                                                                                                                                                                                                                                                                                                                                                z-index: 1000;
                                                                                                                                                                                                                                                                                                                                                                                                                                                                left: 0;
                                                                                                                                                                                                                                                                                                                                                                                                                                                                top: 0;
                                                                                                                                                                                                                                                                                                                                                                                                                                                                width: 100%;
                                                                                                                                                                                                                                                                                                                                                                                                                                                                height: 100%;
                                                                                                                                                                                                                                                                                                                                                                                                                                                                overflow: auto;
                                                                                                                                                                                                                                                                                                                                                                                                                                                                background-color: rgba(0, 0, 0, 0.5);
                                                                                                                                                                                                                                                                                                                                                                                                                                                            }

                                                                                                                                                                                                                                                                                                                                                                                                                                                            .popup-content {
                                                                                                                                                                                                                                                                                                                                                                                                                                                                background-color: #fff;
                                                                                                                                                                                                                                                                                                                                                                                                                                                                margin: 15% auto;
                                                                                                                                                                                                                                                                                                                                                                                                                                                                padding: 20px;
                                                                                                                                                                                                                                                                                                                                                                                                                                                                border: 1px solid #888;
                                                                                                                                                                                                                                                                                                                                                                                                                                                                width: 300px;
                                                                                                                                                                                                                                                                                                                                                                                                                                                                text-align: center;
                                                                                                                                                                                                                                                                                                                                                                                                                                                            }

                                                                                                                                                                                                                                                                                                                                                                                                                                                            .close-btn1 {
                                                                                                                                                                                                                                                                                                                                                                                                                                                                color: #76b5c5;
                                                                                                                                                                                                                                                                                                                                                                                                                                                                float: right;
                                                                                                                                                                                                                                                                                                                                                                                                                                                                font-size: 28px;
                                                                                                                                                                                                                                                                                                                                                                                                                                                                font-weight: bold;
                                                                                                                                                                                                                                                                                                                                                                                                                                                            }

                                                                                                                                                                                                                                                                                                                                                                                                                                                            .close-btn1:hover,
                                                                                                                                                                                                                                                                                                                                                                                                                                                            .close-btn1:focus {
                                                                                                                                                                                                                                                                                                                                                                                                                                                                color: black;
                                                                                                                                                                                                                                                                                                                                                                                                                                                                text-decoration: none;
                                                                                                                                                                                                                                                                                                                                                                                                                                                                cursor: pointer;
                                                                                                                                                                                                                                                                                                                                                                                                                                                            }

                                                                                                                                                                                                                                                                                                                                                                                                                                                            .popup-option {
                                                                                                                                                                                                                                                                                                                                                                                                                                                                margin: 10px;
                                                                                                                                                                                                                                                                                                                                                                                                                                                                padding: 10px 20px;
                                                                                                                                                                                                                                                                                                                                                                                                                                                                cursor: pointer;
                                                                                                                                                                                                                                                                                                                                                                                                                                                                border: 1px solid #ccc;
                                                                                                                                                                                                                                                                                                                                                                                                                                                                background-color: #fff;
                                                                                                                                                                                                                                                                                                                                                                                                                                                                /* White background for options */
                                                            /* color: #333;
                                                                                                                                                                                                                                                                                                                                                                                                                                                                /* Dark text color */
                                                            /* border-radius: 5px;
                                                                                                                                                                                                                                                                                                                                                                                                                                                            }

                                                                                                                                                                                                                                                                                                                                                                                                                                                            .popup-option:hover {
                                                                                                                                                                                                                                                                                                                                                                                                                                                                background-color: #f0f0f0;
                                                                                                                                                                                                                                                                                                                                                                                                                                                                /* Slightly lighter gray on hover */
                                                            /* } */

                                                            /* .popup-option.selected {
                                                                                                                                                                                                                                                                                                                                                                                                                                                                background-color: #007bff;
                                                                                                                                                                                                                                                                                                                                                                                                                                                                /* Blue background for selected option */
                                                            /* color: white; */
                                                            /* White text for selected option */
                                                            /* }

                                                                                                                                                                                                                                                                                                                                                                                                                                                            #save-btn {
                                                                                                                                                                                                                                                                                                                                                                                                                                                                background-color: #007bff;
                                                                                                                                                                                                                                                                                                                                                                                                                                                                /* Blue color for save button */
                                                            /* color: white;
                                                                                                                                                                                                                                                                                                                                                                                                                                                                border: none;
                                                                                                                                                                                                                                                                                                                                                                                                                                                                padding: 10px 20px;
                                                                                                                                                                                                                                                                                                                                                                                                                                                                cursor: pointer;
                                                                                                                                                                                                                                                                                                                                                                                                                                                                border-radius: 5px;
                                                                                                                                                                                                                                                                                                                                                                                                                                                            } */
                                                            /* 
                                                                                                                                                                                                                                                                                                                                                                                                                                                            #save-btn:hover {
                                                                                                                                                                                                                                                                                                                                                                                                                                                                background-color: #0056b3;
                                                                                                                                                                                                                                                                                                                                                                                                                                                                /* Darker blue on hover */
                                                            /* }  */
                                                            .switch {
                                                                position: relative;
                                                                display: inline-block;
                                                                width: 60px;
                                                                height: 34px;
                                                            }

                                                            .switch input {
                                                                opacity: 0;
                                                                width: 0;
                                                                height: 0;
                                                            }

                                                            .slider {
                                                                position: absolute;
                                                                cursor: pointer;
                                                                top: 0;
                                                                left: 0;
                                                                right: 0;
                                                                bottom: 0;
                                                                background-color: #ccc;
                                                                transition: .4s;
                                                                border-radius: 34px;
                                                            }

                                                            .slider:before {
                                                                position: absolute;
                                                                content: "";
                                                                height: 26px;
                                                                width: 26px;
                                                                left: 4px;
                                                                bottom: 4px;
                                                                background-color: white;
                                                                transition: .4s;
                                                                border-radius: 50%;
                                                            }

                                                            input:checked+.slider {
                                                                background-color: #007bff;
                                                            }

                                                            input:checked+.slider:before {
                                                                transform: translateX(26px);
                                                            }
                                                        </style>


                                                        <div class="listing-summary">
                                                            <!-- <h6 class="title">
                                                                <a href="#">
                                                                    <?= htmlspecialchars($car['id']) ?: 'No ID' ?>
                                                                </a>
                                                            </h6> -->
                                                            <h6 class="listing-title">
                                                                    <p><?= htmlspecialchars($car['title']) ?></p>
                                                            </h6>
                                                            <div class="price">
                                                                <p><?= htmlspecialchars($car['price_type']) ?></p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <!-- <div class="list-wrapper">
                                                        <p id="status-<?= htmlspecialchars($car['id']) ?>"
                                                            class="status-publish">
                                                            <?php
                                                            if (htmlspecialchars($car['ad_status']) == 'published') {
                                                                echo '<span> Published </span>';
                                                            } else {
                                                                echo '<span style="color: red !important;"> Unpublished </span>';
                                                            } ?>
                                                        </p>
                                                    </div> -->
                                                    <!-- Display the current status with color based on the initial state -->
                                                    <span id="status-text-<?= $car['id'] ?>" style="<?= $isPublished ? '' : 'color: red !important;' ?>">
                                                        <?= $isPublished ? 'Published' : 'Unpublished' ?>
                                                    </span>

                                                    <label class="switch">
                                                        <input type="checkbox" data-id="<?= $car['id'] ?>" id="status-toggle-<?= $car['id'] ?>" <?= $isPublished ? 'checked' : '' ?> onclick="toggleStatus(this)">
                                                        <span class="slider round"></span>
                                                    </label>


                                                    <!-- <label class="switch">
                                                                                                                                <input type="checkbox" id="status-toggle"
                                                                                                                                    <?= $isPublished ? 'checked' : '' ?>
                                                                                                                                    onclick="toggleStatus(<?= $car['id'] ?>)">
                                                                                                                                <span class="slider round"></span>
                                                                                                                            </label> -->


                                                </td>
                                                <td></td>
                                                <!-- <td>
                                                                                                                            <div class="list-bottom-price-wrap">
                                                                                                                                <p><?= htmlspecialchars($car['regular_price']) ?>
                                                                                                                                </p>
                                                                                                                                <b>Regular Price</b>
                                                                                                                            </div>
                                                                                                                        </td> -->

                                                <td>
                                                    <div class="list-price-wrap">
                                                        <p>£<?= htmlspecialchars($car['sale_price']) ?></p>
                                                        <b>Sale Price</b>
                                                    </div>
                                                </td>

                                                <td>
                                                    <div class="list-wrapper">
                                                        <p><?= htmlspecialchars($car['fuel_type']) ?></p>
                                                        <b>Fuel Type</b>
                                                    </div>
                                                </td>

                                                <!-- <td>
                                                    <div class="list-wrapper">
                                                        <p><?= htmlspecialchars($car['mileage']) ?: 'N/A' ?></p>
                                                        <b>Mileage</b>
                                                    </div>
                                                </td> -->
                                                <td></td>
                                                <td>
                                                    <div class="list-wrapper">
                                                        <p><?= htmlspecialchars($car['transmission']) ?></p>
                                                        <!-- <b>Transmission</b> -->
                                                    </div>
                                                </td>
                                                <td></td>
                                                <td></td>
                                                <td>
                                                    <ul class="actions-list">

                                                        <li>
                                                            <a href="<?= base_url('admin/edit-cars/' . $car['id']); ?>" class="btn-edit" title="Update Status" >
                                                                <?php $isPublished = htmlspecialchars($car['ad_status']) == 'published'; ?>


                                                                <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path d="M0 9.49971V11.9997H2.5L9.87333 4.62638L7.37333 2.12638L0 9.49971ZM11.8067 2.69305C12.0667 2.43305 12.0667 2.01305 11.8067 1.75305L10.2467 0.193047C9.98667 -0.0669531 9.56667 -0.0669531 9.30667 0.193047L8.08667 1.41305L10.5867 3.91305L11.8067 2.69305Z" fill="white" />
                                                                </svg>
                                                            </a>
                                                        </li>


                                                        <li>
                                                            <a href="<?= base_url('cars/' . $car['id']); ?>" target="_blank" class="btn-action" data-bs-toggle="tooltip" data-bs-placement="top" title="View">
                                                                <svg width="20" height="14" viewBox="0 0 20 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path d="M9.9987 0.75C5.83203 0.75 2.2737 3.34167 0.832031 7C2.2737 10.6583 5.83203 13.25 9.9987 13.25C14.1654 13.25 17.7237 10.6583 19.1654 7C17.7237 3.34167 14.1654 0.75 9.9987 0.75ZM9.9987 11.1667C7.6987 11.1667 5.83203 9.3 5.83203 7C5.83203 4.7 7.6987 2.83333 9.9987 2.83333C12.2987 2.83333 14.1654 4.7 14.1654 7C14.1654 9.3 12.2987 11.1667 9.9987 11.1667ZM9.9987 4.5C8.61537 4.5 7.4987 5.61667 7.4987 7C7.4987 8.38333 8.61537 9.5 9.9987 9.5C11.382 9.5 12.4987 8.38333 12.4987 7C12.4987 5.61667 11.382 4.5 9.9987 4.5Z" fill="white" />
                                                                </svg>
                                                            </a>
                                                        </li>
                                                        <!-- <li>
                                                                                                                                                                                                            <a href="#" class="btn-dlt" data-bs-toggle="tooltip"
                                                                                                                                                                                                                data-bs-placement="top" title="Delete">
                                                                                                                                                                                                                <svg width="18" height="14" viewBox="0 0 18 14" fill="none"
                                                                                                                                                                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                                                                                                                                                                    <path
                                                                                                                                                                                                                        d="M11.5013 10.334H14.8346V12.0007H11.5013V10.334ZM11.5013 3.66732H17.3346V5.33398H11.5013V3.66732ZM11.5013 7.00065H16.5013V8.66732H11.5013V7.00065ZM1.5013 12.0007C1.5013 12.9173 2.2513 13.6673 3.16797 13.6673H8.16797C9.08463 13.6673 9.83463 12.9173 9.83463 12.0007V3.66732H1.5013V12.0007ZM10.668 1.16732H8.16797L7.33464 0.333984H4.0013L3.16797 1.16732H0.667969V2.83398H10.668V1.16732Z"
                                                                                                                                                                                                                        fill="white" />
                                                                                                                                                                                                                </svg>
                                                                                                                                                                                                            </a>
                                                                                                                                                                                                        </li> -->
                                                        <li>
                                                            <a href="#" class="btn-dlt" data-id="<?php echo $car['id']; ?>" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete" onclick="deleteCar(<?php echo $car['id']; ?>); return false;">
                                                                <svg width="18" height="14" viewBox="0 0 18 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path d="M11.5013 10.334H14.8346V12.0007H11.5013V10.334ZM11.5013 3.66732H17.3346V5.33398H11.5013V3.66732ZM11.5013 7.00065H16.5013V8.66732H11.5013V7.00065ZM1.5013 12.0007C1.5013 12.9173 2.2513 13.6673 3.16797 13.6673H8.16797C9.08463 13.6673 9.83463 12.9173 9.83463 12.0007V3.66732H1.5013V12.0007ZM10.668 1.16732H8.16797L7.33464 0.333984H4.0013L3.16797 1.16732H0.667969V2.83398H10.668V1.16732Z" fill="white" />
                                                                </svg>
                                                            </a>
                                                        </li>

                                                        <li>
                                                            <a onclick="fetchInquiries(<?php echo $car['id']; ?>, '<?php echo addslashes($car['title']); ?>')" href="#" class="btn-inq position-relative <?php echo ($car['inquiry_count'] == 0) ? 'disabled' : ''; ?>" data-bs-toggle="modal" data-bs-target="#exampleModalToggle" title="Inquiries">

                                                                <svg xmlns="http://www.w3.org/2000/svg" id="Layer_1" data-name="Layer 1" viewBox="0 0 24 24" width="300" height="300" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev/svgjs">
                                                                    <g transform="matrix(1,0,0,1,0,0)">
                                                                        <path d="m18,11.996v-7C18,2.239,15.757-.004,13-.004H5C2.243-.004,0,2.239,0,4.996v12.854c0,.793.435,1.519,1.134,1.894.318.171.667.255,1.015.255.416,0,.831-.121,1.191-.36l3.963-2.643h5.697c2.757,0,5-2.243,5-5Zm-9,2.004c-.552,0-1-.448-1-1s.448-1,1-1,1,.448,1,1-.448,1-1,1Zm1.447-4.371c-.447.246-.447.318-.447.371,0,.553-.448,1-1,1s-1-.447-1-1c0-1.308,1.038-1.879,1.481-2.123.29-.159.595-.535.502-1.066-.069-.392-.402-.725-.793-.793-.306-.056-.602.022-.832.216-.228.19-.358.47-.358.767,0,.553-.448,1-1,1s-1-.447-1-1c0-.889.391-1.727,1.072-2.299.681-.572,1.577-.814,2.463-.653,1.209.211,2.204,1.205,2.417,2.417.223,1.272-.382,2.543-1.506,3.164Zm13.553-.633v12.854c0,.793-.435,1.519-1.134,1.894-.318.171-.667.255-1.015.256-.416,0-.831-.121-1.19-.36l-3.964-2.644h-5.697c-1.45,0-2.747-.631-3.661-1.62l.569-.38h5.092c3.859,0,7-3.141,7-7v-7c0-.308-.027-.608-.065-.906,2.311.44,4.065,2.469,4.065,4.906Z" fill="#ffffffff" data-original-color="#000000ff" stroke="none" />
                                                                    </g>
                                                                </svg>
                                                                <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                                                                    <?= htmlspecialchars($car['inquiry_count']) ?>
                                                                    <span class="visually-hidden">unread messages</span>
                                                                </span>

                                                            </a>
                                                        </li>


                                                        <!--                                                        <p>--><?php //= htmlspecialchars($car['inquiry_count']) 
                                                                                                                            ?><!--</p>-->


                                                    </ul>
                                                </td>
                                            </tr>
                                        <?php endforeach; ?>

                                        <!-- <div id="popup-modal" class="popup-modal">
                                                                                                                                        <div class="popup-content">
                                                                                                                                            <form action="<?= site_url('admin/update_status') ?>" method="post">
                                                                                                                                                <span class="close-btn1" onclick="closePopup();">&times;</span>
                                                                                                                                                <h3 id="modal-title">choose Status</h3> -->

                                        <!-- <button id="public-btn" class="selectedValue"
                                                                                                                                                                    data-value="public">Published</button>
                                                                                                                                                                <button id="private-btn" class="selectedValue"
                                                                                                                                                                    data-value="private">UnPublished</button> -->
                                        <!-- <select id="modalAdStatus" name="modalAdStatus">
                                                                                                                                                    <option value="published">Published</option>
                                                                                                                                                    <option value="unpublished">Unpublished</option>
                                                                                                                                                </select>
                                                                                                                                                <input type="hidden" id="modalCarId" name="modalCarId">
                                                                                                                                                <button id="save-btn" class="selectedValue" type="submit"
                                                                                                                                                    style="background-color: #007bff; color: white;">Save</button>
                                                                                                                                            </form>
                                                                                                                                        </div>
                                                                                                                                    </div> -->


                                        <script type="text/javascript">
                                            function openPopupNew(id, ad_status) {
                                                const popupModal = document.getElementById('popup-modal');
                                                const modalTitle = document.getElementById('modal-title');
                                                const modalCarID = document.getElementById('modalCarId');
                                                const modalAdStatus = document.getElementById('modalAdStatus');
                                                // modalTitle.textContent = ad_status;
                                                modalCarID.value = id;
                                                modalAdStatus.value = ad_status;
                                                console.log(id, 'id');
                                                console.log(ad_status, 'currentStatus');
                                                popupModal.style.display = 'block';
                                            }

                                            function closePopup() {
                                                const popupModal = document.getElementById('popup-modal');
                                                popupModal.style.display = 'none';
                                            }




                                            function toggleStatus(id) {
                                                console.log(id, 'id');
                                                const carId = id.dataset.id;
                                                const statusText = document.getElementById('status-text-' + carId);
                                                const isChecked = id.checked;
                                                const newStatus = isChecked ? 'published' : 'unpublished';

                                                if (id.checked) {
                                                    statusText.textContent = 'Published';
                                                    statusText.style.color = ''; // Reset color

                                                } else {
                                                    statusText.textContent = 'Unpublished';
                                                    statusText.style.color = 'red';


                                                }
                                                $.ajax({
                                                    type: "POST",
                                                    url: '<?php echo base_url("admin/update_status") ?>',
                                                    data: {
                                                        id: carId,
                                                        ad_status: newStatus
                                                    },
                                                    success: function(data) {
                                                        console.log('Status update successful:', data);
                                                        alert("Changed the Status Successfully!");
                                                    },
                                                    error: function(xhr, status, error) {
                                                        console.error('Status update failed:', {
                                                            status: status,
                                                            error: error,
                                                            xhr: xhr

                                                        });

                                                        alert('Error: ' + error + '\nStatus: ' + status + '\nResponse: ' + xhr.responseText);

                                                    }
                                                });
                                            }


                                            function deleteCar(carId) {
                                                if (confirm('Are you sure you want to delete this car?')) {
                                                    // Create a form element
                                                    var form = document.createElement('form');
                                                    form.method = 'POST';
                                                    form.action = '<?php echo base_url('admin/delete_'); ?>'; // Ensure the URL is correct

                                                    // Create a hidden input element for the car ID
                                                    var input = document.createElement('input');
                                                    input.type = 'hidden';
                                                    input.name = 'id'; // This should match the name in your controller
                                                    input.value = carId;

                                                    // Append the hidden input to the form
                                                    form.appendChild(input);

                                                    // Append the form to the body (required for submission)
                                                    document.body.appendChild(form);

                                                    // Submit the form
                                                    form.submit();
                                                }
                                            }


                                            //                                         function toggleStatus(id, isChecked) {
                                            // console.log(id, 'id');

                                            // // Determine the new status based on the checkbox state
                                            // let newStatus = isChecked ? 'published' : 'unpublished';

                                            // $.ajax({
                                            //     type: "POST",
                                            //     url: '<?php echo base_url("controller/method") ?>', // Update with your actual controller and method
                                            //     data: { id: id, status: newStatus },
                                            //     success: function(response) {
                                            //         // Assuming the backend returns the updated status or a success message
                                            //         $('#status-display-' + id).text(newStatus); // Update the status display in the UI

                                            //         // Display an alert based on the new status
                                            //         if (newStatus === 'published') {
                                            //             alert('The item has been published.');
                                            //         } else {
                                            //             alert('The item has been unpublished.');
                                            //         }
                                            //     },
                                            //     error: function(xhr, status, error) {
                                            //         console.error('Status update failed:', error);
                                            //         // Display the actual error message
                                            //         alert('Error: ' + error + '\nStatus: ' + status + '\nResponse: ' + xhr.responseText);
                                            //     }
                                            // });


                                            //                                         }



                                            // $(document).ready(function () {
                                            //     $(.toggleStatus).change(function(){
                                            //         const carId = $(this).data('id');
                                            //         const statusText = document.getElementById('status-text-' + carId);

                                            //         if($(this).is(':checked')){
                                            //             statusText.textContent = 'Published';
                                            //             statusText.style.color = ''; // Reset color
                                            //             // Optionally, you can add an AJAX call here to update the status on the server
                                            //         }else {
                                            //         statusText.textContent = 'Unpublished';
                                            //         statusText.style.color = 'red';
                                            //         // Optionally, you can add an AJAX call here to update the status on the server
                                            //     }
                                            //     })
                                            // })

                                            // document.addEventListener('DOMContentLoaded', function () {
                                            //     const popupModal = document.getElementById('popup-modal');
                                            //     const closeBtn = document.querySelector('.close-btn');
                                            //     const publicBtn = document.getElementById('public-btn');
                                            //     const privateBtn = document.getElementById('private-btn');
                                            //     const saveBtn = document.getElementById('save-btn');
                                            //     const carIdInput = document.getElementById('carId');
                                            //     const currentStatusElement = document.getElementById('current-status');

                                            //     let selectedValue = null;
                                            //     let currentCarId = null;

                                            //     function openPopup(carId, currentStatus) {
                                            //         console.log(currentStatus, 'currentStatus');
                                            //         popupModal.style.display = 'block';
                                            //         carIdInput.value = carId;
                                            //         currentCarId = carId;

                                            //         // Reset button styles
                                            //         statusButtons.forEach(button => {
                                            //             button.classList.remove('selected');
                                            //             button.style.backgroundColor = ''; // Reset background color
                                            //         });

                                            //         // Set the initial selected value and button colors based on currentStatus
                                            //         if (currentStatus === 'public') {
                                            //             selectOption(publicBtn);

                                            //         } else if (currentStatus === 'privatrre') {
                                            //             selectOption(privateBtn);
                                            //         }
                                            //     }





                                            //     function selectOption(button) {
                                            //         // Remove selected class from all options
                                            //         [publicBtn, privateBtn].forEach(btn => btn.classList.remove('selected'));

                                            //         // Add selected class to the clicked button
                                            //         button.classList.add('selected');
                                            //         selectedValue = button.getAttribute('data-value');

                                            //         // Update button styles based on the selected status
                                            //         [publicBtn, privateBtn].forEach(btn => {
                                            //             btn.style.backgroundColor = btn.classList.contains('selected') ? '#007bff' : '#fff'; // Blue for selected, white for others
                                            //             btn.style.color = btn.classList.contains('selected') ? 'white' : '#333'; // White text for selected, dark text for others
                                            //         });

                                            //         // Update current status display
                                            //         currentStatusElement.textContent = button.textContent;
                                            //     }
                                            //     function closePopup() {
                                            //         popupModal.style.display = 'none';
                                            //     }

                                            //     publicBtn.addEventListener('click', function () {
                                            //         selectOption(this);
                                            //     });

                                            //     privateBtn.addEventListener('click', function () {
                                            //         selectOption(this);
                                            //     });

                                            //     saveBtn.addEventListener('click', function updateCarStatus() {
                                            //         if (selectedValue && currentCarId) {
                                            //             console.log('Saving Status:', selectedValue, 'for Car ID:', currentCarId);

                                            //             fetch('admin/car_listing', {
                                            //                 method: 'POST',
                                            //                 headers: {
                                            //                     'Content-Type': 'application/json',
                                            //                 },
                                            //                 body: JSON.stringify({ id: currentCarId, status: selectedValue }),
                                            //             })
                                            //                 .then(response => response.json())
                                            //                 .then($data => {
                                            //                     console.log('Response Data:', $data);

                                            //                     if ($data.success) {
                                            //                         document.getElementById('ad_status' + currentCarId).textContent = selectedValue.charAt(0).toUpperCase() + selectedValue.slice(1);
                                            //                         console.log('Status updated successfully');
                                            //                         closePopup();
                                            //                     } else {
                                            //                         console.log('Failed to update status:', $data.message);
                                            //                         alert('Failed to update status.');
                                            //                     }
                                            //                 })
                                            //                 .catch(error => {
                                            //                     console.error('Error:', error);
                                            //                     alert('An error occurred.');
                                            //                 });
                                            //         } else {
                                            //             console.log('No status selected or no car ID available');
                                            //         }
                                            //     });

                                            //     closeBtn.addEventListener('click', closePopup);

                                            //     window.addEventListener('click', function (event) {
                                            //         if (event.target === popupModal) {
                                            //             closePopup();
                                            //         }
                                            //     });

                                            //     // Example of how you might call openPopup (this should be replaced with your actual logic)
                                            //     document.querySelectorAll('.open-popup').forEach(btn => {
                                            //         btn.addEventListener('click', function () {
                                            //             const carId = this.getAttribute('data-id');
                                            //             const currentStatus = this.getAttribute('data-status'); // Ensure you pass the current status as a data attribute
                                            //             openPopup(carId, currentStatus);
                                            //         });
                                            //     });
                                            // });
                                        </script>
                                    </tbody>
                                </table>
                                <div class="tf-pagination mt-60">
                                    <a class="prev page-numbers" href="<?= $currentPage > 1 ? base_url("admin/car_listing/page/" . ($currentPage - 1) . '?' . http_build_query($request)) : '#' ?>">
                                        <i class="icon-3"></i>
                                    </a>

                                    <?php for ($i = 1; $i <= $totalPages; $i++) : ?>
                                        <?php if ($i == $currentPage) : ?>
                                            <a class="page-numbers active" href="#"><?= $i ?></a>
                                        <?php elseif ($i <= 3 || $i > $totalPages - 3 || ($i >= $currentPage - 1 && $i <= $currentPage + 1)) : ?>
                                            <a class="page-numbers" href="<?= base_url("admin/car_listing/page/" . $i . '?' . http_build_query($request)) ?>"><?= $i ?></a>
                                        <?php elseif ($i == 4 && $currentPage > 5) : ?>
                                            <span class="page-numbers">...</span>
                                        <?php elseif ($i == $totalPages - 3 && $currentPage < $totalPages - 4) : ?>
                                            <span class="page-numbers">...</span>
                                        <?php endif; ?>
                                    <?php endfor; ?>

                                    <a class="next page-numbers" href="<?= $currentPage < $totalPages ? base_url("admin/car_listing/page/" . ($currentPage + 1) . '?' . http_build_query($request)) : '#' ?>">
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

    <script>
        function fetchInquiries(carId, carName) {
            $.ajax({
                type: "GET",
                url: `<?php echo base_url("admin/inquiries/car/") ?>${carId}`,
                success: function(response) {
                    console.log('Inquiries fetched successfully', response);
                    const inquiries = response.inquiries;
                    if (Array.isArray(inquiries)) {
                        populateModal(inquiries, carName);
                        console.log('Modal populated:', inquiries);
                        // $('#exampleModalToggle').modal.('show');
                    } else {
                        console.log('Unexpected data format. Not an array:', data);
                    }
                },
                error: function(error) {
                    console.log(error);
                }
            })
        }

        function populateModal(inquiries, carName) {
            const modalContent = $('#exampleModalToggle .modal-content');
            const title = modalContent.find('.title span')
            const inquiriesContainer = $('#inquiriesContainer');

            // clear previous data
            inquiriesContainer.empty();

            // set title
            title.text(`${carName}`);

            // populate inquiries
            inquiries.forEach((inquiry, index) => {
                const inquiryHtml = `
                    <article class="entry format-standard">
                        <div class="main-post">
                            <p class="inquiry-txt"><span>${index + 1}.</span> ${inquiry.customer_message}</p>
                            <div class="entry-meta fs-6 fw-bold">
                                <span class="author line"><i class="icon-user"></i>${inquiry.customer_name} <span class="fw-light"> (${inquiry.customer_email})</span></span>
                            </div>
                            <div class="entry-meta fs-6 fst-italic fw-lighter">
                                <span class="time line"><i class="icon-uniE971"></i>${inquiry.created_date}</span>
                            </div>
                            <hr>
                        </div>
                    </article>

                `;
                inquiriesContainer.append(inquiryHtml);
            })
        }
    </script>
    <!-- Modal -->
    <div class="modal fade" id="exampleModalToggle" aria-hidden="true" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered inq-modal">
            <div class="modal-content inq-modal-content">
                <div class="content-re-lo">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    <div class="title fs-5 mb-0">Inquiries for <br><span class="title mt-0"></span></div>
                    <hr>

                    <!--Dynamic data-->
                    <div id="inquiriesContainer" class="scrollable-container"></div>

                </div>
            </div>
        </div>

        <!-- Modal -->


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