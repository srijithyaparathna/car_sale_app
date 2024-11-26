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

    <div class="preload-new preload-container-new" id="divLoader">
        <div class="middle-new" id="divLoaderMiddle">
        </div>

    </div>

    <!-- /preload -->

    <!-- /#page -->
    <div id="wrapper">
        <div id="page" class="clearfix">

            <!-- Main Header -->
            <?php include 'components/dashboard-sidebar.php' ?>
            <!-- End Main Header -->

            <div class="has-dashboard">
                <div class="page-dashboard-wrap">
                    <div class="tf-widget-add-cart">
                        <div class="themesflat-container">
                            <div class="tf-add-cart">





                                <form id="form1" action="/cars" method="post" id="submit-add-cart" class="form-add-cart needs-validation" novalidate>

                                    <fieldset id="information" class="mb-60">
                                        <div class="inner-title mb-30">
                                            <span class="sub-title">Add Your Car Today</span>
                                            <h3 class="title">Add Your car</h3>
                                        </div>
                                        <div class="tfad-listing-title mb-30">
                                            <div class="form-group">
                                                <label>Listing Title (*)</label>
                                                <input type="text" id="title" class="form-control" name="title" placeholder="Enter title here" value="" required maxlength="100">
                                            </div>

                                        </div>
                                        <div class="listing-fields-grid mb-30">
                                            <div class="form-group">
                                                <label>Make</label>
                                                <div class="group-select">
                                                    <select name="main-category" id="main-category" class="form-control nice-select">
                                                        <option value="" disabled selected>Select a Listing Title</option>
                                                        <?php foreach ($categories as $category) : ?>
                                                            <option value="<?= $category['id'] ?>"><?= $category['category_name'] ?>
                                                            </option>
                                                        <?php endforeach; ?>
                                                    </select>
                                                </div>

                                            </div>

                                            <div class="form-group">
                                                <label>Model</label>
                                                <div class="group-select">
                                                    <select name="sub-category" id="sub-category" class="form-control nice-select">
                                                        <option value="" disabled selected>Select a Model</option>

                                                    </select>
                                                </div>

                                            </div>

                                            <script>
                                                // Data from PHP (could also be done via an API endpoint)
                                                const categories = <?= json_encode($categories); ?>;

                                                document.getElementById('main-category').addEventListener('change', function() {
                                                    const mainCategoryId = this.value;
                                                    const subCategorySelect = document.getElementById('sub-category');

                                                    // Clear existing options
                                                    subCategorySelect.innerHTML = '<option value="" disabled selected>Select a Model</option>';

                                                    // Find selected main category
                                                    const selectedCategory = categories.find(category => category.id == mainCategoryId);

                                                    // Populate subcategory dropdown
                                                    if (selectedCategory && selectedCategory.sub_categories) {
                                                        selectedCategory.sub_categories.forEach(subCategory => {
                                                            const option = document.createElement('option');
                                                            option.value = subCategory.id;
                                                            option.textContent = subCategory.model_name;
                                                            subCategorySelect.appendChild(option);
                                                        });
                                                    }
                                                });
                                            </script>

                                            <div class="form-group">
                                                <label>Type (*)</label>
                                                <div class="group-select">
                                                    <select name="type" id="type" class="form-control nice-select">
                                                        <option value="Sedan">Sedan</option>
                                                        <option value="Crossover">Crossover</option>
                                                        <option value="Cabriolet">Cabriolet</option>
                                                        <option value="Compact">Compact</option>
                                                        <option value="Pickup">Pickup</option>
                                                        <option value="Supercar">Supercar</option>
                                                        <option value="Convertible">Convertible</option>
                                                        <option value="Hatchback">Hatchback</option>
                                                        <option value="SUV">SUV</option>
                                                    </select>

                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label>Years (*)</label>
                                                <div class="group-select">
                                                    <input type="number" id="year" name="year" placeholder="Enter Year" value="" required>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label>Condition</label>
                                                <div class="group-select">

                                                    <select name="condition" id="condition" class="form-control nice-select">
                                                        <option value="Used">Used</option>
                                                        <option value="New">New</option>
                                                    </select>

                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label>Stock Number</label>
                                                <div class="group-select">
                                                    <input type="tel" id="stock_number" name="stock_number" placeholder="Enter Number" required>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label>VIN Number</label>
                                                <div class="group-select">
                                                    <input type="tel" id="vin_number" name="vin_number" placeholder="Enter VIN" required>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label>Mileage</label>
                                                <div class="group-select">
                                                    <input type="number" id="mileage" name="mileage" placeholder="Enter Mileage" required>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label>Transmission</label>
                                                <div class="group-select">

                                                    <select name="transmission" id="transmission" class="form-control nice-select ">
                                                        <option value="Manual">Manual</option>
                                                        <option value="Auto">Auto</option>
                                                        <option value="CVT">CVT</option>
                                                        <option value="DCT">DCT</option>

                                                    </select>

                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="driver_type">Driver Type</label>
                                                <div class="group-select">
                                                    <select name="driver_type" id="driver_type" class="form-control nice-select ">
                                                        <option value="FWD">FWD</option>
                                                        <option value="2WD">2WD</option>
                                                        <option value="4WD">4WD</option>
                                                        <option value="AWD">AWD</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label>Engine Size</label>
                                                <div class="group-select">
                                                    <input type="text" id="engine_size" name="engine_size" placeholder="Enter Engine" required>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label for="cylinders">Cylinders</label>
                                                <div class="group-select">
                                                    <select name="cylinders" id="cylinders" class="form-control nice-select">
                                                        <option value="1">1</option>
                                                        <option value="2">2</option>
                                                        <option value="3">3</option>
                                                        <option value="4">4</option>
                                                        <option value="5">5</option>
                                                        <option value="6">6</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="fuel_type">Fuel Type</label>
                                                <div class="group-select">
                                                    <select name="fuel_type" id="fuel_type" class="form-control nice-select">

                                                        <option value="Diesel">Diesel</option>
                                                        <option value="Electric">Electric</option>
                                                        <option value="Gasoline">Gasoline</option>
                                                        <option value="Hybrid">Hybrid</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="doors">Doors</label>
                                                <div class="group-select">
                                                    <select name="doors" id="doors" class="form-control nice-select">
                                                        <option value="4">4</option>
                                                        <option value="2">2</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="color">Color</label>
                                                <div class="group-select">
                                                    <select name="color" id="color" class="form-control nice-select">
                                                        <option value="Black">Black</option>
                                                        <option value="Red">Red</option>
                                                        <option value="White">White</option>
                                                        <option value="Green">Green</option>
                                                        <option value="Yellow">Yellow</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="seats">Seats</label>
                                                <div class="group-select">
                                                    <select name="seats" id="seats" class="form-control nice-select">
                                                        <option value="1">1</option>
                                                        <option value="2">2</option>
                                                        <option value="3">3</option>
                                                        <option value="4">4</option>
                                                        <option value="5">5</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label>City MPG</label>
                                                <div class="group-select">
                                                    <input type="number" id="city_mpg" name="city_mpg" required placeholder="City MPG" >
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label>Highway MPG</label>
                                                <div class="group-select">
                                                    <input type="number" id="highway_mpg" name="highway_mpg" required placeholder="Highway MPG" >
                                                </div>
                                            </div>
                                        </div>
                                        <div class="description-fields mb-30">
                                            <div class="form-group">
                                                <label>Description</label>
                                                <div class="group-select">
                                                    <textarea id="description" name="description" class="form-control" placeholder="Description" ></textarea>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="listing-fields-grid mb-30">
                                            <div class="form-group">
                                                <label>Request Price Label</label>
                                                <div class="group-select">

                                                    <select name="price_type" id="price_type" class="form-control nice-select">
                                                        <option value="Negotiable">Negotiable</option>
                                                        <option value="fixed">fixed</option>
                                                    </select>

                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label> Regular Price *</label>
                                                <div class="group-select">
                                                    <input type="number" id="regular_price" name="regular_price" placeholder="Enter Sale Price" required>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label>Sale Price</label>
                                                <div class="group-select">
                                                    <input type="number" id="sale_price" name="sale_price" placeholder="Enter Sale Price" required>
                                                </div>
                                            </div>

                                    </fieldset>
                                    <fieldset id="features" class="mb-60">
                                        <div class="inner-title mb-30">
                                            <span class="sub-title">Add Your Car Today</span>
                                            <h3 class="title">Select Listing Features</h3>
                                        </div>
                                        <div class="tfad-listing-feature">
                                            <div class="listing-feature-item">
                                                <div class="form-group">
                                                    <label>Request Price Label</label>
                                                    <div class="group-select">
                                                        <div class="radio">
                                                            <input id="front" type="checkbox" name="features[A/C: Front]" value="true">
                                                            <label for="front">A/C: Front</label>
                                                        </div>
                                                        <div class="radio">
                                                            <input id="rear" type="checkbox" name="features[A/C: Rear]" value="true">
                                                            <label for="rear">A/C: Rear</label>
                                                        </div>
                                                        <div class="radio">
                                                            <input id="camera" type="checkbox" name="features[Backup Camera]" value="true">
                                                            <label for="camera">Backup Camera</label>
                                                        </div>
                                                        <div class="radio">
                                                            <input id="control" type="checkbox" name="features[Cruise Control]" value="true">
                                                            <label for="control">Cruise Control</label>
                                                        </div>
                                                        <div class="radio">
                                                            <input id="navigation" type="checkbox" name="features[Navigation]" value="true">
                                                            <label for="navigation">Navigation</label>
                                                        </div>
                                                        <div class="radio">
                                                            <input id="locks" type="checkbox" name="features[Power Locks]" value="true">
                                                            <label for="locks">Power Locks</label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="listing-feature-item">
                                                <div class="form-group">
                                                    <label>Entertainment</label>
                                                    <div class="group-select">
                                                        <div class="radio">
                                                            <input id="stereo" type="checkbox" name="features[AM/FM Stereo]" value="true">
                                                            <label for="stereo">AM/FM Stereo</label>
                                                        </div>
                                                        <div class="radio">
                                                            <input id="cd" type="checkbox" name="features[CD Player]" value="true">
                                                            <label for="cd">CD Player</label>
                                                        </div>
                                                        <div class="radio">
                                                            <input id="dvd" type="checkbox" name="features[DVD System]" value="true">
                                                            <label for="dvd">DVD System</label>
                                                        </div>
                                                        <div class="radio">
                                                            <input id="mp3" type="checkbox" name="features[MP3 Player]" value="true">
                                                            <label for="mp3">MP3 Player</label>
                                                        </div>
                                                        <div class="radio">
                                                            <input id="portable" type="checkbox" name="features[Portable Audio]" value="true">
                                                            <label for="portable">Portable Audio</label>
                                                        </div>
                                                        <div class="radio">
                                                            <input id="premium" type="checkbox" name="features[Premium Audio]" value="true">
                                                            <label for="premium">Premium Audio</label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="listing-feature-item">
                                                <div class="form-group">
                                                    <label>Safety</label>
                                                    <div class="group-select">
                                                        <div class="radio">
                                                            <input id="driver" type="checkbox" name="features[Airbag: Driver]" value="true">
                                                            <label for="driver">Airbag: Driver</label>
                                                        </div>
                                                        <div class="radio">
                                                            <input id="passenger" type="checkbox" name="features[Airbag: Passenger]" value="true">
                                                            <label for="passenger">Airbag: Passenger</label>
                                                        </div>
                                                        <div class="radio">
                                                            <input id="brakes" type="checkbox" name="features[Antilock Brakes]" value="true">
                                                            <label for="brakes">Antilock Brakes</label>
                                                        </div>
                                                        <div class="radio">
                                                            <input id="bluetooth" type="checkbox" name="features[Bluetooth]" value="true">
                                                            <label for="bluetooth">Bluetooth</label>
                                                        </div>
                                                        <div class="radio">
                                                            <input id="hands-free" type="checkbox" name="features[Hands-Free]" value="true">
                                                            <label for="hands-free">Hands-Free</label>
                                                        </div>
                                                        <div class="radio">
                                                            <input id="fog-lights" type="checkbox" name="features[Fog Lights]" value="true">
                                                            <label for="fog-lights">Fog Lights</label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="listing-feature-item">
                                                <div class="form-group">
                                                    <label>Windows</label>
                                                    <div class="group-select">
                                                        <div class="radio">
                                                            <input id="power" type="checkbox" name="features[Power Windows]" value="true">
                                                            <label for="power">Power Windows</label>
                                                        </div>
                                                        <div class="radio">
                                                            <input id="defroster" type="checkbox" name="features[Windows Defroster]" value="true">
                                                            <label for="defroster">Windows Defroster</label>
                                                        </div>
                                                        <div class="radio">
                                                            <input id="rear-window" type="checkbox" name="features[Rear Window]" value="true">
                                                            <label for="rear-window">Rear Window</label>
                                                        </div>
                                                        <div class="radio">
                                                            <input id="wiper-tinted-glass" type="checkbox" name="features[Wiper Tinted Glass]" value="true">
                                                            <label for="wiper-tinted-glass">Wiper Tinted Glass</label>
                                                        </div>
                                                        <div class="radio">
                                                            <input id="sunroof" type="checkbox" name="features[Sunroof]" value="true">
                                                            <label for="sunroof">Sunroof</label>
                                                        </div>
                                                        <div class="radio">
                                                            <input id="tow-package" type="checkbox" name="features[Tow Package]" value="true">
                                                            <label for="tow-package">Tow Package</label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="listing-feature-item">
                                                <div class="form-group">
                                                    <label>Seats</label>
                                                    <div class="group-select">
                                                        <div class="radio">
                                                            <input id="bucket-seats" type="checkbox" name="features[Bucket Seats]" value="true">
                                                            <label for="bucket-seats">Bucket Seats</label>
                                                        </div>
                                                        <div class="radio">
                                                            <input id="heated-seats" type="checkbox" name="features[Heated Seats]" value="true">
                                                            <label for="heated-seats">Heated Seats</label>
                                                        </div>
                                                        <div class="radio">
                                                            <input id="leather-interior" type="checkbox" name="features[Leather Interior]" value="true">
                                                            <label for="leather-interior">Leather Interior</label>
                                                        </div>
                                                        <div class="radio">
                                                            <input id="memory-seats" type="checkbox" name="features[Memory Seats]" value="true">
                                                            <label for="memory-seats">Memory Seats</label>
                                                        </div>
                                                        <div class="radio">
                                                            <input id="power-seats" type="checkbox" name="features[Power Seats]" value="true">
                                                            <label for="power-seats">Power Seats</label>
                                                        </div>
                                                        <div class="radio">
                                                            <input id="third-row-seats" type="checkbox" name="features[Third Row Seats]" value="true">
                                                            <label for="third-row-seats">Third Row Seats</label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </fieldset>


                                </form>

                                <form id="form2" action="<?= base_url('add_images') ?>" method="post" enctype="multipart/form-data">
                                    <fieldset id="upload-media" class="pd-bg">
                                        <div class="inner-title mb-30">
                                            <span class="sub-title">Media</span>
                                            <h3 class="title">Upload Your Photos</h3>
                                        </div>
                                        
                                        <div class="upload-image-add-car">
                                            <div class="upload-image">
                                                <label for="photoLoad1" class="uploadLabel">
                                                    <i class="icon-Group4"></i>
                                                    <img id="uploadedImage1" src="" alt="Uploaded Image" style="display:none;">
                                                    <span>Add a Photo</span>
                                                    <input type="file" id="photoLoad1" name="images[]" class="photoLoad" accept="image/*" multiple onchange="checkImageSize(this, 'uploadedImage1')">
                                                    <input type="hidden" name="type1" id="type1" value="image">
                                                </label>
                                            </div>

                                            <div class="upload-image">
                                                <label for="photoLoad2" class="uploadLabel">
                                                    <i class="icon-Group4"></i>
                                                    <img id="uploadedImage2" src="" alt="Uploaded Image" style="display:none;">
                                                    <span>Add a Photo</span>
                                                    <input type="file" id="photoLoad2" name="images[]" class="photoLoad" accept="image/*" multiple onchange="checkImageSize(this, 'uploadedImage2')">
                                                    <input type="hidden" name="type2" id="type2" value="image">
                                                </label>
                                            </div>

                                            <div class="upload-image">
                                                <label for="photoLoad3" class="uploadLabel">
                                                    <i class="icon-Group4"></i>
                                                    <img id="uploadedImage3" src="" alt="Uploaded Image" style="display:none;">
                                                    <span>Add a Photo</span>
                                                    <input type="file" id="photoLoad3" name="images[]" class="photoLoad" accept="image/*" multiple onchange="checkImageSize(this, 'uploadedImage3')">
                                                    <input type="hidden" name="type3" id="type3" value="image">
                                                </label>
                                            </div>

                                            <div class="upload-image">
                                                <label for="photoLoad4" class="uploadLabel">
                                                    <i class="icon-Group4"></i>
                                                    <img id="uploadedImage4" src="" alt="Uploaded Image" style="display:none;">
                                                    <span>Add a Photo</span>
                                                    <input type="file" id="photoLoad4" name="images[]" class="photoLoad" accept="image/*" multiple onchange="checkImageSize(this, 'uploadedImage4')">
                                                    <input type="hidden" name="type4" id="type4" value="image">
                                                </label>
                                            </div>

                                            <div class="upload-image">
                                                <label for="photoLoad5" class="uploadLabel">
                                                    <i class="icon-Group4"></i>
                                                    <img id="uploadedImage5" src="" alt="Uploaded Image" style="display:none;">
                                                    <span>Add a Photo</span>
                                                    <input type="file" id="photoLoad5" name="images[]" class="photoLoad" accept="image/*" multiple onchange="checkImageSize(this, 'uploadedImage5')">
                                                    <input type="hidden" name="type5" id="type5" value="image">
                                                </label>
                                            </div>

                                            <div class="upload-image">
                                                <label for="photoLoad6" class="uploadLabel">
                                                    <i class="icon-Group4"></i>
                                                    <img id="uploadedImage6" src="" alt="Uploaded Image" style="display:none;">
                                                    <span>Add a Photo</span>
                                                    <input type="file" id="photoLoad6" name="images[]" class="photoLoad" accept="image/*" multiple onchange="checkImageSize(this, 'uploadedImage6')">
                                                    <input type="hidden" name="type6" id="type6" value="image">
                                                </label>
                                            </div>

                                            <div class="upload-image">
                                                <label for="photoLoad7" class="uploadLabel">
                                                    <i class="icon-Group4"></i>
                                                    <img id="uploadedImage7" src="" alt="Uploaded Image" style="display:none;">
                                                    <span>Add a Photo</span>
                                                    <input type="file" id="photoLoad7" name="images[]" class="photoLoad" accept="image/*" multiple onchange="checkImageSize(this, 'uploadedImage7')">
                                                    <input type="hidden" name="type7" id="type7" value="image">
                                                </label>
                                            </div>

                                            <script>
                                                function checkImageSize(input, imgId) {
                                                    const maxSize = 5 * 1024 * 1024; // 5MB in bytes
                                                    const files = input.files;

                                                    for (let i = 0; i < files.length; i++) {
                                                        if (files[i].size > maxSize) {
                                                            alert("File size exceeds 5MB. Please upload a smaller image.");
                                                            input.value = ''; // Clear the input if the file is too large
                                                            return; // Stop the function
                                                        } else {
                                                            // You can display the image if it passes the size check
                                                            const reader = new FileReader();
                                                            reader.onload = function(e) {
                                                                const img = document.getElementById(imgId);
                                                                img.src = e.target.result;
                                                                img.style.display = 'block'; // Show the uploaded image
                                                            }
                                                            reader.readAsDataURL(files[i]); // Read the image file
                                                        }
                                                    }
                                                }
                                            </script>


                                        </div>
                                        <p class="one-photo text-red">*You must upload at least one photo</p>
                                    </fieldset>

                                    <fieldset id="video" class="pd-bg">
                                        <div class="inner-title mb-30">
                                            <h3 class="title">Add Video</h3>
                                        </div>
                                        <div class="form-group">
                                            <div class="group-video">
                                                <input type="text" id="img_url" name="img_url" placeholder="Enter YouTube URL" required>
                                                <input type="hidden" name="type9" id="type9" value="YouTube_URL">
                                            </div>
                                        </div>
                                    </fieldset>

                                    <fieldset id="file-attachment" class="pd-bg">
                                        <div class="inner-title mb-30">
                                            <h3 class="title">Attachment / VIN Report</h3>
                                        </div>
                                        <div class="upload-image">
                                            <label for="photoLoad5" class="uploadLabel">
                                                <i class="icon-Group4"> </i>
                                                <img id="uploadedImage5" src="" alt="Uploaded Image" style="display:none;">

                                                <span>Add a Photo</span>
                                                <input type="file" id="photoLoad5" name="images[]" class="photoLoad" accept="image/*" multiple>
                                                <input type="hidden" name="type8" id="type8" value="Document">
                                            </label>
                                        </div>
                                    </fieldset>

                                </form>
                            </div>
                            <fieldset>
                                <button type="button" class="button-save-listing" onclick="submitForms()">Add Car</button>
                            </fieldset>


                            <script>
                                document.addEventListener('DOMContentLoaded', function() {

                                    const loaderDiv = document.getElementById("divLoader");
                                    loaderDiv.style.zIndex = "-999";
                                    loaderDiv.style.opacity = "0";

                                    $(".preload-container");
                                    const fileInputs = document.querySelectorAll('.photoLoad');

                                    fileInputs.forEach(input => {
                                        input.addEventListener('change', function(event) {
                                            const file = this.files[0];
                                            const reader = new FileReader();
                                            const imgElement = this.parentNode.querySelector('img');
                                            const labelElement = this.parentNode;

                                            reader.onload = function(e) {
                                                imgElement.src = e.target.result;
                                                imgElement.style.display = 'block'; // show image 
                                                labelElement.querySelector('.icon-Group4').style.display = 'none'; // hide icon
                                                labelElement.querySelector('span').style.display = 'none'; // hide text
                                            }

                                            reader.readAsDataURL(file);
                                        });
                                    });
                                });

                                function validateImageUpload() {
                                    const fileInputs = document.querySelectorAll('.photoLoad');
                                    let imageCount = 0;

                                    fileInputs.forEach(input => {
                                        if (input.files.length > 0) {
                                            imageCount += input.files.length;
                                        }
                                    });

                                    if (imageCount < 2) {
                                        alert("You must upload at least two images.");
                                        return false;
                                    }



                                    return true;
                                }

                                var preloader = function() {
                                    console.log("loading...");
                                    setTimeout(function() {
                                        $(".preload-container").fadeOut("slow", function() {
                                            $(this).remove();
                                        });
                                    }, 10000);
                                };


                                function submitForms() {


                                    let form1 = document.getElementById('form1');
                                    let isValid = true;
                                    let errorMessage = '';

                                    // Check if all required fields in form1 are filled
                                    form1.querySelectorAll('input, select, textarea').forEach(function(field) {
                                        if (!field.checkValidity()) {
                                            isValid = false;
                                            errorMessage += `The field "${field.name}" is required.\n`;
                                        }
                                    });

                                    // Custom validation logic for title length
                                    let title = document.getElementById('title').value;
                                    if (title.length > 100) {
                                        isValid = false;
                                        errorMessage += 'Title is too long.\n';
                                    }

                                    if (!isValid) {
                                        alert("Please fill all the required fields."); // Show error messages
                                        document.querySelector('.button-save-listing').disabled = false; // Re-enable button if validation fails
                                        return;
                                    }

                                    // Image upload validation
                                    if (!validateImageUpload()) {
                                        return;
                                    }

                                    // Disable button and submit form1
                                    document.querySelector('.button-save-listing').disabled = true;
                                    form1.submit();

                                    const loaderDiv = document.getElementById("divLoader");
                                    loaderDiv.style.zIndex = "999";
                                    loaderDiv.style.opacity = "1";

                                    // Submit form2 after a delay if form1 is valid
                                    setTimeout(function() {
                                        document.getElementById("form2").submit();
                                        preloader();

                                        alert("Car is added successfully!");
                                    }, 100);
                                }
                            </script>


                        </div>
                    </div>
                </div>
            </div>





            <!-- Footer -->

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