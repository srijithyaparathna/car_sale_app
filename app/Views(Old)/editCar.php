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



                            <!-- <h6 class="title"><a href="#"><?= htmlspecialchars($car['id']) ?: 'No ID' ?></a></h6> -->

                        <form id="form1" action="/admin/edit-car/<?= $car['id'] ?>" method="put" id="submit-add-cart" class="form-add-cart needs-validation" novalidate>

                            <fieldset id="information" class="mb-60">
                                <div class="inner-title mb-30">
                                    <span class="sub-title">Edit Your Car Today</span>
                                    <h3 class="title">Edit Your car</h3>
                                </div>
                                <div class="tfad-listing-title mb-30">
                                    <div class="form-group">
                                        <label>Listing Title (*)</label>
                                        <input type="text" id="title" class="form-control" name="title" placeholder="Enter title here" value="<?= $car['title'] ?>" required maxlength="100">
                                    </div>

                                </div>
                                <div class="listing-fields-grid mb-30">
                                    <div class="form-group">
                                        <label>Make</label>
                                        <div class="group-select">
                                            <select name="main-category" id="main-category" class="form-control nice-select">
                                                <option value="" disabled selected>Select a Listing Title</option>
                                                <?php foreach ($categories as $category): ?>
                            <option value="<?= $category['id'] ?>" <?= $car['main_category_id'] == $category['id'] ? 'selected' : '' ?>>
                                <?= $category['category_name'] ?>
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
                                                <?php foreach ($subCategories as $subCategory): ?>
                            <option value="<?= $subCategory['id'] ?>" <?= $car['sub_category_id'] == $subCategory['id'] ? 'selected' : '' ?>>
                                <?= $subCategory['model_name'] ?>
                            </option>
                        <?php endforeach; ?>
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
                                            // Data from PHP (could also be done via an API endpoint)
                                           
                                            </script>

                                            <div class="form-group">
                                                <label>Type (*)</label>
                                                <div class="group-select">
                                                <select name="type" id="type" class="form-control nice-select">
            <option value="Sedan" <?= $car['type'] == 'Sedan' ? 'selected' : '' ?>>Sedan</option>
            <option value="Crossover" <?= $car['type'] == 'Crossover' ? 'selected' : '' ?>>Crossover</option>
            <option value="Cabriolet" <?= $car['type'] == 'Cabriolet' ? 'selected' : '' ?>>Cabriolet</option>
            <option value="Compact" <?= $car['type'] == 'Compact' ? 'selected' : '' ?>>Compact</option>
            <option value="Pickup" <?= $car['type'] == 'Pickup' ? 'selected' : '' ?>>Pickup</option>
            <option value="Supercar" <?= $car['type'] == 'Supercar' ? 'selected' : '' ?>>Supercar</option>
            <option value="Convertible" <?= $car['type'] == 'Convertible' ? 'selected' : '' ?>>Convertible</option>
            <option value="Hatchback" <?= $car['type'] == 'Hatchback' ? 'selected' : '' ?>>Hatchback</option>
            <option value="SUV" <?= $car['type'] == 'SUV' ? 'selected' : '' ?>>SUV</option>
        </select>

                                                </div>
                                            </div>

                                    <div class="form-group">
                                        <label>Years (*)</label>
                                        <div class="group-select">
                                        <input type="text" id="year" class="form-control" name="year" value="<?= $car['year'] ?>">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label>Condition</label>
                                        <div class="group-select">
                                        <select name="condition" id="condition" class="form-control nice-select">
            <option value="Used" <?= $car['condition'] == 'Used' ? 'selected' : '' ?>>Used</option>
            <option value="New" <?= $car['condition'] == 'New' ? 'selected' : '' ?>>New</option>
        </select>

                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label>Stock Number</label>
                                        <div class="group-select">
        <input type="tel" id="stock_number" name="stock_number" placeholder="Enter Number" value="<?= $car['stock_number'] ?>" required>
    </div>
                                    </div>
                                    <div class="form-group">
                                        <label>VIN Number</label>
                                        <div class="group-select">
        <input type="tel" id="vin_number" name="vin_number" placeholder="Enter VIN" value="<?= $car['vin_number'] ?>" required>
    </div>
                                    </div>
                                    <div class="form-group">
                                        <label>Mileage</label>
                                        <div class="group-select">
        <input type="number" id="mileage" name="mileage" placeholder="Enter Mileage" value="<?= $car['mileage'] ?>" required>
    </div>
                                    </div>
                                    <div class="form-group">
                                        <label>Transmission</label>
                                        <div class="group-select">

                                        <select name="transmission" id="transmission" class="form-control nice-select">
            <option value="Manual" <?= $car['transmission'] == 'Manual' ? 'selected' : '' ?>>Manual</option>
            <option value="Auto" <?= $car['transmission'] == 'Auto' ? 'selected' : '' ?>>Auto</option>
            <option value="CVT" <?= $car['transmission'] == 'CVT' ? 'selected' : '' ?>>CVT</option>
            <option value="DCT" <?= $car['transmission'] == 'DCT' ? 'selected' : '' ?>>DCT</option>
        </select>

                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="driver_type">Driver Type</label>
                                        <div class="group-select">
        <select name="driver_type" id="driver_type" class="form-control nice-select">
            <option value="FWD" <?= $car['driver_type'] == 'FWD' ? 'selected' : '' ?>>FWD</option>
            <option value="2WD" <?= $car['driver_type'] == '2WD' ? 'selected' : '' ?>>2WD</option>
            <option value="4WD" <?= $car['driver_type'] == '4WD' ? 'selected' : '' ?>>4WD</option>
            <option value="AWD" <?= $car['driver_type'] == 'AWD' ? 'selected' : '' ?>>AWD</option>
        </select>
    </div>
                                    </div>

                                    <div class="form-group">
                                        <label>Engine Size</label>
                                        <div class="group-select">
        <input type="text" id="engine_size" name="engine_size" placeholder="Enter Engine" value="<?= $car['engine_size'] ?>" required>
    </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="cylinders">Cylinders</label>
                                        <div class="group-select">
                                        <select name="cylinders" id="cylinders" class="form-control nice-select">
            <option value="1" <?= $car['cylinders'] == '1' ? 'selected' : '' ?>>1</option>
            <option value="2" <?= $car['cylinders'] == '2' ? 'selected' : '' ?>>2</option>
            <option value="3" <?= $car['cylinders'] == '3' ? 'selected' : '' ?>>3</option>
            <option value="4" <?= $car['cylinders'] == '4' ? 'selected' : '' ?>>4</option>
            <option value="5" <?= $car['cylinders'] == '5' ? 'selected' : '' ?>>5</option>
            <option value="6" <?= $car['cylinders'] == '6' ? 'selected' : '' ?>>6</option>
        </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="fuel_type">Fuel Type</label>
                                        <div class="group-select">
                                        <select name="fuel_type" id="fuel_type" class="form-control nice-select">
            <option value="Diesel" <?= $car['fuel_type'] == 'Diesel' ? 'selected' : '' ?>>Diesel</option>
            <option value="Electric" <?= $car['fuel_type'] == 'Electric' ? 'selected' : '' ?>>Electric</option>
            <option value="Gasoline" <?= $car['fuel_type'] == 'Gasoline' ? 'selected' : '' ?>>Gasoline</option>
            <option value="Hybrid" <?= $car['fuel_type'] == 'Hybrid' ? 'selected' : '' ?>>Hybrid</option>
        </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="doors">Doors</label>
                                        <div class="group-select">
                                        <select name="doors" id="doors" class="form-control nice-select">
            <option value="4" <?= $car['doors'] == '4' ? 'selected' : '' ?>>4</option>
            <option value="2" <?= $car['doors'] == '2' ? 'selected' : '' ?>>2</option>
        </select>
                                        </div>
                                    </div>



                                    <div class="form-group">
                                        <label for="color">Color</label>
                                         <div class="group-select">
        <select name="color" id="color" class="form-control nice-select">
            <option value="Black" <?= $car['color'] == 'Black' ? 'selected' : '' ?>>Black</option>
            <option value="Red" <?= $car['color'] == 'Red' ? 'selected' : '' ?>>Red</option>
            <option value="White" <?= $car['color'] == 'White' ? 'selected' : '' ?>>White</option>
            <option value="Green" <?= $car['color'] == 'Green' ? 'selected' : '' ?>>Green</option>
            <option value="Yellow" <?= $car['color'] == 'Yellow' ? 'selected' : '' ?>>Yellow</option>
        </select>
    </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="seats">Seats</label>
                                        <div class="group-select">
        <select name="seats" id="seats" class="form-control nice-select">
            <option value="1" <?= $car['seats'] == '1' ? 'selected' : '' ?>>1</option>
            <option value="2" <?= $car['seats'] == '2' ? 'selected' : '' ?>>2</option>
            <option value="3" <?= $car['seats'] == '3' ? 'selected' : '' ?>>3</option>
            <option value="4" <?= $car['seats'] == '4' ? 'selected' : '' ?>>4</option>
            <option value="5" <?= $car['seats'] == '5' ? 'selected' : '' ?>>5</option>
        </select>
    </div>
                                    </div>
                                    <div class="form-group">
                                        <label>City MPG</label>
                                        <div class="group-select">
                                        <input type="number" id="city_mpg" name="city_mpg" value="<?= $car['city_mpg'] ?>" required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label>Highway MPG</label>
                                        <div class="group-select">
                                        <input type="number" id="highway_mpg" name="highway_mpg" value="<?= $car['highway_mpg'] ?>" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="description-fields mb-30">
                                    <div class="form-group">
                                    <label>Description</label>
        <div class="group-select">
            <textarea id="description" name="description" class="form-control" required><?= htmlspecialchars($car['description']) ?></textarea>
        </div>
                                        </div>
                                        <div class="listing-fields-grid mb-30">
                                            <div class="form-group">
                                                <label>Request Price Label</label>
                                                <div class="group-select">

                                                <select name="price_type" id="price_type" class="form-control nice-select">
                <option value="Negotiable" <?= $car['price_type'] == 'Negotiable' ? 'selected' : '' ?>>Negotiable</option>
                <option value="fixed" <?= $car['price_type'] == 'fixed' ? 'selected' : '' ?>>fixed</option>
            </select>

                                        </div>
                                    </div>
                                    <div class="form-group">
                                    <label>Regular Price *</label>
        <div class="group-select">
            <input type="number" id="regular_price" name="regular_price" placeholder="Enter Sale Price" value="<?= $car['regular_price'] ?>" required>
        </div>
                                    </div>
                                    <div class="form-group">
                                    <label>Sale Price</label>
        <div class="group-select">
            <input type="number" id="sale_price" name="sale_price" placeholder="Enter Sale Price" value="<?= $car['sale_price'] ?>">
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
                                                <input id="front" type="checkbox" name="features[A/C: Front]" value="true" <?= isset($car['features']['A/C: Front']) && $car['features']['A/C: Front'] == 'true' ? 'checked' : '' ?>>
                                                <label for="front">A/C: Front</label>
                                                </div>
                                                <div class="radio">
                                                <input id="rear" type="checkbox" name="features[A/C: Rear]" value="true" <?= isset($car['features']['A/C: Rear']) && $car['features']['A/C: Rear'] == 'true' ? 'checked' : '' ?>>
                                                <label for="rear">A/C: Rear</label>
                                                </div>
                                                <div class="radio">
                                                <input id="camera" type="checkbox" name="features[Backup Camera]" value="true" <?= isset($car['features']['Backup Camera']) && $car['features']['Backup Camera'] == 'true' ? 'checked' : '' ?>>
                                                <label for="camera">Backup Camera</label>
                                                </div>
                                                <div class="radio">
                                                <input id="navigation" type="checkbox" name="features[Navigation]" value="true" <?= isset($car['features']['Navigation']) && $car['features']['Navigation'] == 'true' ? 'checked' : '' ?>>
                                                <label for="navigation">Navigation</label>
                                                </div>
                                                <div class="radio">
                                                <input id="control" type="checkbox" name="features[Cruise Control]" value="true" <?= isset($car['features']['Cruise Control']) && $car['features']['Cruise Control'] == 'true' ? 'checked' : '' ?>>
                                                <label for="control">Cruise Control</label>
                                                </div>
                                                <div class="radio">
                                                <input id="locks" type="checkbox" name="features[Power Locks]" value="true" <?= isset($car['features']['Power Locks']) && $car['features']['Power Locks'] == 'true' ? 'checked' : '' ?>>
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
                <input id="stereo" type="checkbox" name="features[AM/FM Stereo]" value="true" <?= isset($car['features']['AM/FM Stereo']) && $car['features']['AM/FM Stereo'] == 'true' ? 'checked' : '' ?>>
                <label for="stereo">AM/FM Stereo</label>
            </div>
            <div class="radio">
                <input id="cd" type="checkbox" name="features[CD Player]" value="true" <?= isset($car['features']['CD Player']) && $car['features']['CD Player'] == 'true' ? 'checked' : '' ?>>
                <label for="cd">CD Player</label>
            </div>
            <div class="radio">
                <input id="dvd" type="checkbox" name="features[DVD System]" value="true" <?= isset($car['features']['DVD System']) && $car['features']['DVD System'] == 'true' ? 'checked' : '' ?>>
                <label for="dvd">DVD System</label>
            </div>
            <div class="radio">
                <input id="mp3" type="checkbox" name="features[MP3 Player]" value="true" <?= isset($car['features']['MP3 Player']) && $car['features']['MP3 Player'] == 'true' ? 'checked' : '' ?>>
                <label for="mp3">MP3 Player</label>
            </div>
            <div class="radio">
                <input id="portable" type="checkbox" name="features[Portable Audio]" value="true" <?= isset($car['features']['Portable Audio']) && $car['features']['Portable Audio'] == 'true' ? 'checked' : '' ?>>
                <label for="portable">Portable Audio</label>
            </div>
            <div class="radio">
                <input id="premium" type="checkbox" name="features[Premium Audio]" value="true" <?= isset($car['features']['Premium Audio']) && $car['features']['Premium Audio'] == 'true' ? 'checked' : '' ?>>
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
                <input id="driver" type="checkbox" name="features[Airbag: Driver]" value="true" <?= isset($car['features']['Airbag: Driver']) && $car['features']['Airbag: Driver'] == 'true' ? 'checked' : '' ?>>
                <label for="driver">Airbag: Driver</label>
            </div>
            <div class="radio">
                <input id="passenger" type="checkbox" name="features[Airbag: Passenger]" value="true" <?= isset($car['features']['Airbag: Passenger']) && $car['features']['Airbag: Passenger'] == 'true' ? 'checked' : '' ?>>
                <label for="passenger">Airbag: Passenger</label>
            </div>
            <div class="radio">
                <input id="brakes" type="checkbox" name="features[Antilock Brakes]" value="true" <?= isset($car['features']['Antilock Brakes']) && $car['features']['Antilock Brakes'] == 'true' ? 'checked' : '' ?>>
                <label for="brakes">Antilock Brakes</label>
            </div>
            <div class="radio">
                <input id="bluetooth" type="checkbox" name="features[Bluetooth]" value="true" <?= isset($car['features']['Bluetooth']) && $car['features']['Bluetooth'] == 'true' ? 'checked' : '' ?>>
                <label for="bluetooth">Bluetooth</label>
            </div>
            <div class="radio">
                <input id="hands-free" type="checkbox" name="features[Hands-Free]" value="true" <?= isset($car['features']['Hands-Free']) && $car['features']['Hands-Free'] == 'true' ? 'checked' : '' ?>>
                <label for="hands-free">Hands-Free</label>
            </div>
            <div class="radio">
                <input id="fog-lights" type="checkbox" name="features[Fog Lights]" value="true" <?= isset($car['features']['Fog Lights']) && $car['features']['Fog Lights'] == 'true' ? 'checked' : '' ?>>
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
                <input id="power" type="checkbox" name="features[Power Windows]" value="true" <?= isset($car['features']['Power Windows']) && $car['features']['Power Windows'] == 'true' ? 'checked' : '' ?>>
                <label for="power">Power Windows</label>
            </div>
            <div class="radio">
                <input id="defroster" type="checkbox" name="features[Windows Defroster]" value="true" <?= isset($car['features']['Windows Defroster']) && $car['features']['Windows Defroster'] == 'true' ? 'checked' : '' ?>>
                <label for="defroster">Windows Defroster</label>
            </div>
            <div class="radio">
                <input id="rear-window" type="checkbox" name="features[Rear Window]" value="true" <?= isset($car['features']['Rear Window']) && $car['features']['Rear Window'] == 'true' ? 'checked' : '' ?>>
                <label for="rear-window">Rear Window</label>
            </div>
            <div class="radio">
                <input id="wiper-tinted-glass" type="checkbox" name="features[Wiper Tinted Glass]" value="true" <?= isset($car['features']['Wiper Tinted Glass']) && $car['features']['Wiper Tinted Glass'] == 'true' ? 'checked' : '' ?>>
                <label for="wiper-tinted-glass">Wiper Tinted Glass</label>
            </div>
            <div class="radio">
                <input id="sunroof" type="checkbox" name="features[Sunroof]" value="true" <?= isset($car['features']['Sunroof']) && $car['features']['Sunroof'] == 'true' ? 'checked' : '' ?>>
                <label for="sunroof">Sunroof</label>
            </div>
            <div class="radio">
                <input id="tow-package" type="checkbox" name="features[Tow Package]" value="true" <?= isset($car['features']['Tow Package']) && $car['features']['Tow Package'] == 'true' ? 'checked' : '' ?>>
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
                <input id="bucket-seats" type="checkbox" name="features[Bucket Seats]" value="true" <?= isset($car['features']['Bucket Seats']) && $car['features']['Bucket Seats'] == 'true' ? 'checked' : '' ?>>
                <label for="bucket-seats">Bucket Seats</label>
            </div>
            <div class="radio">
                <input id="heated-seats" type="checkbox" name="features[Heated Seats]" value="true" <?= isset($car['features']['Heated Seats']) && $car['features']['Heated Seats'] == 'true' ? 'checked' : '' ?>>
                <label for="heated-seats">Heated Seats</label>
            </div>
            <div class="radio">
                <input id="leather-interior" type="checkbox" name="features[Leather Interior]" value="true" <?= isset($car['features']['Leather Interior']) && $car['features']['Leather Interior'] == 'true' ? 'checked' : '' ?>>
                <label for="leather-interior">Leather Interior</label>
            </div>
            <div class="radio">
                <input id="memory-seats" type="checkbox" name="features[Memory Seats]" value="true" <?= isset($car['features']['Memory Seats']) && $car['features']['Memory Seats'] == 'true' ? 'checked' : '' ?>>
                <label for="memory-seats">Memory Seats</label>
            </div>
            <div class="radio">
                <input id="power-seats" type="checkbox" name="features[Power Seats]" value="true" <?= isset($car['features']['Power Seats']) && $car['features']['Power Seats'] == 'true' ? 'checked' : '' ?>>
                <label for="power-seats">Power Seats</label>
            </div>
            <div class="radio">
                <input id="third-row-seats" type="checkbox" name="features[Third Row Seats]" value="true" <?= isset($car['features']['Third Row Seats']) && $car['features']['Third Row Seats'] == 'true' ? 'checked' : '' ?>>
                <label for="third-row-seats">Third Row Seats</label>
            </div>
        </div>
    </div>
</div>

                            </fieldset>


                                    </form>

    <form id="form2" action="<?= base_url('admin/edit-car-image/' . $car['id']) ?>" method="post" enctype="multipart/form-data">
                            <fieldset id="upload-media" class="pd-bg">
                                <div class="inner-title mb-30">
                                    <span class="sub-title">Media</span>
                                    <h3 class="title">Upload Your Photos</h3>
                                </div>
                                <div class="upload-image-add-car">
                                <?php
    // Initialize an array to keep track of displayed image URLs and their IDs
    $displayedImages = [];
    $maxSlots = 7; // Maximum number of slots to display

    // Loop through the images and store only those with the type 'image'
    foreach ($images as $image) {
        if ($image['type'] === 'image') {
            // Store the displayed image URL and ID
            $displayedImages[] = [
                'url' => base_url($image['img_url']),
                'id' => $image['id'], // Assuming 'id' is the field name in your database
            ];
        }
    }

    // Create the slots
    for ($i = 0; $i < $maxSlots; $i++): ?>
        <div class="upload-image">
            <label for="photoLoad<?= $i + 1 ?>" class="uploadLabel">
                <?php if (isset($displayedImages[$i])): ?>
                    <img id="uploadedImage<?= $i + 1 ?>" src="<?= $displayedImages[$i]['url'] ?>" alt="Uploaded Image" style="display: block;">
                    <!-- <span>Image ID: <?= $displayedImages[$i]['id'] ?></span> -->
                    <!-- Hidden input for the image ID -->
                    <input type="hidden" name="image_id[]" value="<?= $displayedImages[$i]['id'] ?>">
                <?php else: ?>
                    <i class="icon-Group4"></i>
                    <img id="uploadedImage<?= $i + 1 ?>" src="" alt="Uploaded Image" style="display: none;">
                    <span>Add a Photo</span>
                <?php endif; ?>

                <input type="file" id="photoLoad<?= $i + 1 ?>" name="images[]" class="photoLoad" accept="image/*" onchange="checkImageSize(this, 'uploadedImage<?= $i + 1 ?>')">
                <input type="hidden" name="type<?= $i + 1 ?>" id="type<?= $i + 1 ?>" value="image">

                <!-- Existing image input -->
                <input type="hidden" name="existing_image[]" value="<?= isset($displayedImages[$i]) ? $displayedImages[$i]['url'] : '' ?>">
                
                <!-- Selected image input -->
                <?php if (isset($displayedImages[$i])): ?>
                    <input type="hidden" name="select_image[]" value="<?= $displayedImages[$i]['url'] ?>">
                <?php endif; ?>
            </label>
        </div>
    <?php endfor; ?>

<!-- Add a submit button -->




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
    <?php
    $youtubeUrl = ''; // Initialize variable to hold the YouTube URL

    foreach ($images as $index => $image) {
        if ($image['type'] === 'YouTube_URL') {
            $youtubeUrl = $image['img_url']; // Assign the YouTube URL
            break; // Exit the loop after finding the first YouTube URL
        }
    }
    ?>

    <div class="inner-title mb-30">
        <h3 class="title">Add Video</h3>
    </div>
    <div class="form-group">
        <div class="group-video">
            <input type="text" id="img_url" name="img_url" placeholder="Enter YouTube URL" value="<?= htmlspecialchars($youtubeUrl) ?>" required>
            <input type="hidden" name="type9" id="type9" value="YouTube_URL">
        </div>
    </div>
</fieldset>

<fieldset id="file-attachment" class="pd-bg">
    <div class="inner-title mb-30">
        <h3 class="title">Attachment / VIN Report</h3>
        <div class="upload-image">
            <label for="photoLoad8" class="uploadLabel">
                <?php
                // Initialize variables to hold the document URL and ID
                $documentImageUrl = '';
                $documentImageId = ''; // Variable to hold the document image ID
                foreach ($images as $image) {
                    if ($image['type'] === 'Document') {
                        $documentImageUrl = base_url($image['img_url']);
                        $documentImageId = $image['id']; // Get the ID of the document image
                        break; // Stop the loop once the first document image is found
                    }
                }
                ?>

                <?php if ($documentImageUrl): // Check if the document image URL is set ?>
                    <img id="uploadedDocument" src="<?= $documentImageUrl ?>" alt="Uploaded Document" style="display: block;">
                    <input type="hidden" name="existing_document_id" value="<?= $documentImageId ?>"> <!-- Store existing document ID -->
                <?php else: ?>
                    <i class="icon-Group4"></i>
                    <img id="uploadedDocument" src="" alt="Uploaded Document" style="display: none;">
                    <span>Add a Document</span>
                <?php endif; ?>

                <input type="file" id="photoLoad8" name="images[]" class="photoLoad" accept="image/*" onchange="checkImageSize(this, 'uploadedDocument')">
                <input type="hidden" name="type8" id="type8" value="Document">
            </label>
        </div>
    </div>
</fieldset>



                        </form>
                    </div>
                    <fieldset>
                        <button type="button" class="button-save-listing" onclick="submitForms()">Edit Car</button>
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


                             // Function to display images from backend
                function displayImages() {
                    const uploadedImages = document.querySelectorAll("img[id^='uploadedImage']");
                    imageData.images.forEach((image, index) => {
                        if (image.type === "image" && uploadedImages[index]) {
                            const imgElement = uploadedImages[index];
                            imgElement.src = image.img_url;
                            imgElement.style.display = 'block'; // Show the uploaded image
                        }
                    });
                }

                function validateImageUpload() {
    const fileInputs = document.querySelectorAll('.photoLoad');
    let totalImageCount = 0;

    // Count already selected images (from hidden inputs)
    const selectedImages = document.querySelectorAll("input[name^='existing_image']");
    selectedImages.forEach(input => {
        if (input.value) {
            totalImageCount++; // Increment for each existing image
        }
    });

    // Count newly uploaded images
    fileInputs.forEach(input => {
        if (input.files.length > 0) {
            totalImageCount += input.files.length; // Increment for each newly uploaded image
        }
    });

    // Validate the total image count
    if (totalImageCount < 2) {
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

                                alert("Car is edited successfully!");
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