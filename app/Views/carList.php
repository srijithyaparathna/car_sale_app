<!DOCTYPE html>
<!--[if IE 8 ]><html class="ie" xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US">
<!--<![endif]-->



<head>
    
    <!-- Basic Page Needs -->
    <meta charset="utf-8">
    <!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
    <title>R&R Auto World | All Cars</title>

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
                        <h1 class="title text-white"><span class="text-red">R&R</span> Auto World</h1>
                    </div>
                </div>
            </div>

            <!-- car-listing-list -->
            <div class="widget-car-listing-list">
                <div class="themesflat-container">
                    <div class="row car-listing-list">
                        <div>
                            <div class="search-filter-listing-car">
<!--                                <p style="color: #000000; font-weight: bold;font-size: large">Select Vehicle Type</p>-->
<!--                                <div class="sellec-list-db my-3">-->
<!--                                    <div class="group-select">-->
<!--                                        <div class="nice-select" tabindex="0">-->
<!--                                            <span class="current">All</span>-->
<!--                                            <ul class="list">-->
<!--                                                <li class="option" onclick="filterByVehicleType('All')">All</li>-->
<!--                                                <li class="option" onclick="filterByVehicleType('Passenger')">Passenger Vehicles</li>-->
<!--                                                <li class="option" onclick="filterByVehicleType('Commercial')">Commercial Vehicles</li>-->
<!--                                                <li class="option" onclick="filterByVehicleType('Public Transport')">Public Transport</li>-->
<!--                                                <li class="option" onclick="filterByVehicleType('Machinery')">Machinery</li>-->
<!--                                                <li class="option" onclick="filterByVehicleType('Special Purposes')">Special Purposes Vehicles</li>-->
<!--                                                <li class="option" onclick="filterByVehicleType('Motorcycle')">Motorcycles</li>-->
<!--                                            </ul>-->
<!--                                        </div>-->
<!--                                    </div>-->
<!--                                </div>-->


                                <script>
                                    function filterByVehicleType(mainVehicleType) {
                                        const baseURL = '<?= base_url('/cars'); ?>';  // Base URL for the car listing page
                                        const url = new URL(window.location.href);

                                        // If 'All' is selected, remove the vehicle_type param, otherwise set it
                                        if (mainVehicleType === 'All') {
                                            url.searchParams.delete('main_vehicle_type');
                                        } else {
                                            url.searchParams.set('main_vehicle_type', mainVehicleType);
                                        }

                                        // Update the URL without reloading the page using history.pushState
                                        window.history.pushState({}, '', url.href);

                                        // Call the filter logic immediately to apply the filter after URL update
                                        applyVehicleTypeFilter();
                                    }

                                    // Function to apply the filtering logic
                                    function applyVehicleTypeFilter() {
                                        const params = new URLSearchParams(window.location.search);
                                        const vehicleType = params.get('main_vehicle_type')?.trim().toLowerCase();

                                        console.log(vehicleType);

                                        // Get all the rows in the vehicle list
                                        const items = document.querySelectorAll('.listing-grid-item');

                                        if (vehicleType) {
                                            // Loop through each row and check the data-type attribute
                                            items.forEach(item => {
                                                const itemVehicleType = item.getAttribute('data-vehicle-type')?.trim().toLowerCase();

                                                // If the vehicle type matches, show the row; otherwise, hide it
                                                if (itemVehicleType === vehicleType) {
                                                    item.style.display = '';
                                                } else {
                                                    item.style.display = 'none';
                                                }
                                            });
                                        } else {
                                            // If no vehicle type is specified, show all rows
                                            items.forEach(item => {
                                                item.style.display = '';
                                            });
                                        }
                                    }

                                    // Call the filter logic on page load to handle the initial filtering
                                    window.onload = applyVehicleTypeFilter;
                                </script>

<!--                                <hr />-->
                                <div class="filter-header-list">
                                    <h6 class="title-filter">Search by Filter</h6>
                                    <div class="btn-filter">
                                        <i class="icon-Grid-view"></i>
                                    </div>
                                </div>
                                <form id="filter-list-car-side-bar" class="list-filter" action="<?= base_url('/cars') ?>" method="get">
<!--                                    h-100 align-items-center justify-content-center-->

                                    <!-- Main Vehicle Category -->
                                    <div class="row">
                                        <div class="form-group col-md-3">
                                            <label for="main-vehicle-type">Main Vehicle Category:</label>
                                            <select id="main-vehicle-type" name="main-vehicle-type" onchange="updateSubVehicleTypeOptions()">
                                                <option value="">Any</option>
                                                <option value="Passenger" <?= (isset($_GET['main-vehicle-type']) && $_GET['main-vehicle-type'] === 'Passenger') ? 'selected' : '' ?> >Passenger</option>
                                                <option value="Commercial" <?= (isset($_GET['main-vehicle-type']) && $_GET['main-vehicle-type'] === 'Commercial') ? 'selected' : '' ?> >Commercial</option>
                                                <option value="Public Transport" <?= (isset($_GET['main-vehicle-type']) && $_GET['main-vehicle-type'] === 'Public Transport') ? 'selected' : '' ?> >Public Transport</option>
                                                <option value="Machinery" <?= (isset($_GET['main-vehicle-type']) && $_GET['main-vehicle-type'] === 'Machinery') ? 'selected' : '' ?> >Machinery</option>
                                                <option value="Special Purposes" <?= (isset($_GET['main-vehicle-type']) && $_GET['main-vehicle-type'] === 'Special Purposes') ? 'selected' : '' ?> >Special Purposes</option>
                                                <option value="Motorcycle" <?= (isset($_GET['main-vehicle-type']) && $_GET['main-vehicle-type'] === 'Motorcycle') ? 'selected' : '' ?> >Motorcycle</option>
                                            </select>
                                        </div>

                                        <!-- Sub Vehicle Category -->
                                        <div class="form-group col-md-3" id="sub-vehicle-type-group" style="display: none;">
                                            <label for="sub-vehicle-type">Sub Vehicle Category:</label>
                                            <select id="sub-vehicle-type" name="sub-vehicle-type" onchange="updateVehicleTypeOptions()">
                                                <option value="">Any</option>
                                                <!-- Load Dynamically -->
                                            </select>
                                        </div>

                                        <script>

                                            // Function to extract URL parameters
                                            function getUrlParameter(param) {
                                                const urlParams = new URLSearchParams(window.location.search);
                                                return urlParams.get(param);
                                            }

                                            function updateSubVehicleTypeOptions() {
                                                const mainVehicleType = document.getElementById('main-vehicle-type').value;
                                                const subVehicleType = document.getElementById('sub-vehicle-type').value;
                                                const subVehicleTypeGroup = document.getElementById('sub-vehicle-type-group');
                                                const subVehicleTypeSelect = document.getElementById('sub-vehicle-type');
                                                const typeSelect = document.getElementById("type");

                                                // Hide sub vehicle dropdown by default
                                                subVehicleTypeGroup.style.display = 'none';

                                                // Reset sub vehicle options
                                                subVehicleTypeSelect.innerHTML = '<option value="">Any</option>';

                                                // Reset type options
                                                typeSelect.innerHTML = '<option value="">Any</option>';

                                                // sub vehicle type value from the URL
                                                const selectedSubVehicleType = document.getElementById('sub_vehicle_type');

                                                // Show and populate sub-vehicle options based on the main category
                                                if (mainVehicleType === 'Commercial') {
                                                    subVehicleTypeGroup.style.display = 'block';
                                                    subVehicleTypeSelect.innerHTML += `
                                                    <option value="Light Commercial Vehicles" <?= (isset($_GET['sub-vehicle-type']) && $_GET['sub-vehicle-type'] === 'Light Commercial Vehicles') ? 'selected' : '' ?> >Light Commercial Vehicles</option>
                                                    <option value="Heavy Commercial Vehicles" <?= (isset($_GET['sub-vehicle-type']) && $_GET['sub-vehicle-type'] === 'Heavy Commercial Vehicles') ? 'selected' : '' ?> >Heavy Commercial Vehicles</option>
                                                `;
                                                } else if (mainVehicleType === 'Machinery') {
                                                    subVehicleTypeGroup.style.display = 'block';
                                                    subVehicleTypeSelect.innerHTML += `
                                                    <option value="Roadwork Machinery" <?= (isset($_GET['sub-vehicle-type']) && $_GET['sub-vehicle-type'] === 'Roadwork Machinery') ? 'selected' : '' ?> >Roadwork Machinery</option>
                                                    <option value="Agricultural Machinery" <?= (isset($_GET['sub-vehicle-type']) && $_GET['sub-vehicle-type'] === 'Agricultural Machinery') ? 'selected' : '' ?> >Agricultural Machinery</option>
                                                    <option value="Industrial Machinery" <?= (isset($_GET['sub-vehicle-type']) && $_GET['sub-vehicle-type'] === 'Industrial Machinery') ? 'selected' : '' ?> >Industrial Machinery</option>
                                                    <option value="Construction Machinery" <?= (isset($_GET['sub-vehicle-type']) && $_GET['sub-vehicle-type'] === 'Construction Machinery') ? 'selected' : '' ?> >Construction Machinery</option>
                                                `;
                                                }

                                                if (mainVehicleType === 'Passenger') {
                                                    typeSelect.innerHTML += `
                                                    <option value="Sedan" <?= (isset($_GET['type']) && $_GET['type'] === 'Sedan') ? 'selected' : '' ?> >Sedan</option>
                                                    <option value="Hatchback" <?= (isset($_GET['type']) && $_GET['type'] === 'Hatchback') ? 'selected' : '' ?> >Hatchback</option>
                                                    <option value="Coupe" <?= (isset($_GET['type']) && $_GET['type'] === 'Coupe') ? 'selected' : '' ?> >Coupe</option>
                                                    <option value="Convertible" <?= (isset($_GET['type']) && $_GET['type'] === 'Convertible') ? 'selected' : '' ?> >Convertible</option>
                                                    <option value="SUV" <?= (isset($_GET['type']) && $_GET['type'] === 'SUV') ? 'selected' : '' ?> >SUV</option>
                                                    <option value="Sedan" <?= (isset($_GET['type']) && $_GET['type'] === 'Sedan') ? 'selected' : '' ?> >Sedan</option>
                                                    <option value="Station Wagon" <?= (isset($_GET['type']) && $_GET['type'] === 'Station Wagon') ? 'selected' : '' ?> >Station Wagon</option>
                                                    <option value="Limousine" <?= (isset($_GET['type']) && $_GET['type'] === 'Limousine') ? 'selected' : '' ?> >Limousine</option>
                                                    <option value="Luxury Sedan" <?= (isset($_GET['type']) && $_GET['type'] === 'Luxury Sedan') ? 'selected' : '' ?> >Luxury Sedan</option>
                                                    <option value="Premium SUV" <?= (isset($_GET['type']) && $_GET['type'] === 'Premium SUV') ? 'selected' : '' ?> >Premium SUV</option>
                                                    <option value="Supercar" <?= (isset($_GET['type']) && $_GET['type'] === 'Supercar') ? 'selected' : '' ?> >Supercar</option>
                                                `;
                                                } else if (mainVehicleType === "Commercial") {
                                                    typeSelect.innerHTML += `
                                                    <option value="Van" <?= (isset($_GET['type']) && $_GET['type'] === 'Van') ? 'selected' : '' ?> >Van</option>
                                                    <option value="Pickup Truck" <?= (isset($_GET['type']) && $_GET['type'] === 'Pickup Truck') ? 'selected' : '' ?> >Pickup Truck</option>
                                                    <option value="Mini Bus" <?= (isset($_GET['type']) && $_GET['type'] === 'Mini Bus') ? 'selected' : '' ?> >Mini Bus</option>
                                                    <option value="Utility Vehicle" <?= (isset($_GET['type']) && $_GET['type'] === 'Utility Vehicle') ? 'selected' : '' ?> >Utility Vehicle</option>
                                                    <option value="Cargo Van" <?= (isset($_GET['type']) && $_GET['type'] === 'Cargo Van') ? 'selected' : '' ?> >Cargo Van</option>
                                                    <option value="Delivery Truck" <?= (isset($_GET['type']) && $_GET['type'] === 'Delivery Truck') ? 'selected' : '' ?> >Delivery Truck</option>
                                                    <option value="Rigid Truck" <?= (isset($_GET['type']) && $_GET['type'] === 'Rigid Truck') ? 'selected' : '' ?> >Rigid Truck</option>
                                                    <option value="Articulated Truck" <?= (isset($_GET['type']) && $_GET['type'] === 'Articulated Truck') ? 'selected' : '' ?> >Articulated Truck</option>
                                                    <option value="Semi-Trailer" <?= (isset($_GET['type']) && $_GET['type'] === 'Semi-Trailer') ? 'selected' : '' ?> >Semi-Trailer</option>
                                                    <option value="Lorry" <?= (isset($_GET['type']) && $_GET['type'] === 'Lorry') ? 'selected' : '' ?> >Lorry</option>
                                                    <option value="Dump Truck" <?= (isset($_GET['type']) && $_GET['type'] === 'Dump Truck') ? 'selected' : '' ?> >Dump Truck</option>
                                                    <option value="Tipper" <?= (isset($_GET['type']) && $_GET['type'] === 'Tipper') ? 'selected' : '' ?> >Tipper</option>
                                                    <option value="Crane Truck" <?= (isset($_GET['type']) && $_GET['type'] === 'Crane Truck') ? 'selected' : '' ?> >Crane Truck</option>
                                                    <option value="Freezer Truck" <?= (isset($_GET['type']) && $_GET['type'] === 'Freezer Truck') ? 'selected' : '' ?> >Freezer Truck</option>
                                                    <option value="Trailer" <?= (isset($_GET['type']) && $_GET['type'] === 'Trailer') ? 'selected' : '' ?> >Trailer</option>
                                                    <option value="Tanker Truck" <?= (isset($_GET['type']) && $_GET['type'] === 'Tanker Truck') ? 'selected' : '' ?> >Tanker Truck</option>
                                                `;

                                                } else if (mainVehicleType === 'Public Transport') {
                                                    typeSelect.innerHTML += `
                                                    <option value="Bus" <?= (isset($_GET['type']) && $_GET['type'] === 'Bus') ? 'selected' : '' ?> >Bus</option>
                                                    <option value="Coach" <?= (isset($_GET['type']) && $_GET['type'] === 'Coach') ? 'selected' : '' ?> >Coach</option>
                                                    <option value="Shuttle" <?= (isset($_GET['type']) && $_GET['type'] === 'Shuttle') ? 'selected' : '' ?> >Shuttle</option>
                                                    <option value="Tram" <?= (isset($_GET['type']) && $_GET['type'] === 'Tram') ? 'selected' : '' ?> >Tram</option>
                                                    <option value="Trolley" <?= (isset($_GET['type']) && $_GET['type'] === 'Trolley') ? 'selected' : '' ?> >Trolley</option>
                                                    <option value="Double-Decker Bus" <?= (isset($_GET['type']) && $_GET['type'] === 'Double-Decker Bus') ? 'selected' : '' ?> >Double-Decker Bus</option>
                                                    <option value="Airport Shuttle Bus" <?= (isset($_GET['type']) && $_GET['type'] === 'Airport Shuttle Bus') ? 'selected' : '' ?> >Airport Shuttle Bus</option>
                                                `;
                                                } else if (mainVehicleType === 'Machinery') {
                                                    typeSelect.innerHTML += `
                                                    <!-- R-Machinery -->
                                                    <option value="Paver" <?= (isset($_GET['type']) && $_GET['type'] === 'Paver') ? 'selected' : '' ?> >Paver</option>
                                                    <option value="Asphalt Roller" <?= (isset($_GET['type']) && $_GET['type'] === 'Asphalt Roller') ? 'selected' : '' ?> >Asphalt Roller</option>
                                                    <option value="Concrete Mixer" <?= (isset($_GET['type']) && $_GET['type'] === 'Concrete Mixer') ? 'selected' : '' ?> >Concrete Mixer</option>

                                                    <!-- I-Machinery -->
                                                    <option value="Forklift" <?= (isset($_GET['type']) && $_GET['type'] === 'Forklift') ? 'selected' : '' ?> >Forklift</option>
                                                    <option value="Warehousing Bus" <?= (isset($_GET['type']) && $_GET['type'] === 'Warehousing Bus') ? 'selected' : '' ?> >Warehousing Bus</option>
                                                    <option value="Heavy Lifter" <?= (isset($_GET['type']) && $_GET['type'] === 'Heavy Lifter') ? 'selected' : '' ?> >Heavy Lifter</option>
                                                    <option value="Compactor" <?= (isset($_GET['type']) && $_GET['type'] === 'Compactor') ? 'selected' : '' ?> >Compactor</option>

                                                    <!-- A-Machinery -->
                                                    <option value="Tractor" <?= (isset($_GET['type']) && $_GET['type'] === 'Tractor') ? 'selected' : '' ?> >Tractor</option>
                                                    <option value="Combine Harvester" <?= (isset($_GET['type']) && $_GET['type'] === 'Combine Harvester') ? 'selected' : '' ?> >Combine Harvester</option>
                                                    <option value="Plough" <?= (isset($_GET['type']) && $_GET['type'] === 'Plough') ? 'selected' : '' ?> >Plough</option>
                                                    <option value="Seed Drill" <?= (isset($_GET['type']) && $_GET['type'] === 'Seed Drill') ? 'selected' : '' ?> >Seed Drill</option>
                                                    <option value="Sprayer" <?= (isset($_GET['type']) && $_GET['type'] === 'Sprayer') ? 'selected' : '' ?> >Sprayer</option>

                                                    <!-- C-Machinery -->
                                                    <option value="Excavator" <?= (isset($_GET['type']) && $_GET['type'] === 'Excavator') ? 'selected' : '' ?> >Excavator</option>
                                                    <option value="Bulldozer" <?= (isset($_GET['type']) && $_GET['type'] === 'Bulldozer') ? 'selected' : '' ?> >Bulldozer</option>
                                                    <option value="Cranes" <?= (isset($_GET['type']) && $_GET['type'] === 'Cranes') ? 'selected' : '' ?> >Cranes</option>
                                                    <option value="Backhoe" <?= (isset($_GET['type']) && $_GET['type'] === 'Backhoe') ? 'selected' : '' ?> >Backhoe</option>
                                                    <option value="Loader" <?= (isset($_GET['type']) && $_GET['type'] === 'Loader') ? 'selected' : '' ?> >Loader</option>
                                                    <option value="Grader" <?= (isset($_GET['type']) && $_GET['type'] === 'Grader') ? 'selected' : '' ?> >Grader</option>
                                                    <option value="Skid Steer" <?= (isset($_GET['type']) && $_GET['type'] === 'Skid Steer') ? 'selected' : '' ?> >Skid Steer</option>
                                                `;
                                                } else if (mainVehicleType === 'Special Purposes') {
                                                    typeSelect.innerHTML += `
                                                    <option value="Ambulance" <?= (isset($_GET['type']) && $_GET['type'] === 'Ambulance') ? 'selected' : '' ?> >Ambulance</option>
                                                    <option value="Fire Truck" <?= (isset($_GET['type']) && $_GET['type'] === 'Fire Truck') ? 'selected' : '' ?> >Fire Truck</option>
                                                    <option value="Tow Truck" <?= (isset($_GET['type']) && $_GET['type'] === 'Tow Truck') ? 'selected' : '' ?> >Tow Truck</option>
                                                    <option value="Police Vehicle" <?= (isset($_GET['type']) && $_GET['type'] === 'Police Vehicle') ? 'selected' : '' ?> >Police Vehicle</option>
                                                    <option value="Garbage Truck" <?= (isset($_GET['type']) && $_GET['type'] === 'Garbage Truck') ? 'selected' : '' ?> >Garbage Truck</option>
                                                `
                                                } else if (mainVehicleType === 'Motorcycle') {
                                                    typeSelect.innerHTML += `
                                                    <option value="Standard Motorcycle" <?= (isset($_GET['type']) && $_GET['type'] === 'Standard Motorcycle') ? 'selected' : '' ?> >Standard Motorcycle</option>
                                                    <option value="Cruiser" <?= (isset($_GET['type']) && $_GET['type'] === 'Cruiser') ? 'selected' : '' ?> >Cruiser</option>
                                                    <option value="Sport Bike" <?= (isset($_GET['type']) && $_GET['type'] === 'Sport Bike') ? 'selected' : '' ?> >Sport Bike</option>
                                                    <option value="Touring Bike" <?= (isset($_GET['type']) && $_GET['type'] === 'Touring Bike') ? 'selected' : '' ?> >Touring Bike</option>
                                                    <option value="Dirt Bike" <?= (isset($_GET['type']) && $_GET['type'] === 'Dirt Bike') ? 'selected' : '' ?> >Dirt Bike</option>
                                                    <option value="Scooter" <?= (isset($_GET['type']) && $_GET['type'] === 'Scooter') ? 'selected' : '' ?> >Scooter</option>
                                                `
                                                } else if (mainVehicleType === '' || mainVehicleType === 'Any') {
                                                    typeSelect.innerHTML += `
                                                    <option value="Sedan" <?= (isset($_GET['type']) && $_GET['type'] === 'Sedan') ? 'selected' : '' ?> >Sedan</option>
                                                    <option value="Hatchback" <?= (isset($_GET['type']) && $_GET['type'] === 'Hatchback') ? 'selected' : '' ?> >Hatchback</option>
                                                    <option value="Coupe" <?= (isset($_GET['type']) && $_GET['type'] === 'Coupe') ? 'selected' : '' ?> >Coupe</option>
                                                    <option value="Convertible" <?= (isset($_GET['type']) && $_GET['type'] === 'Convertible') ? 'selected' : '' ?> >Convertible</option>
                                                    <option value="SUV" <?= (isset($_GET['type']) && $_GET['type'] === 'SUV') ? 'selected' : '' ?> >SUV</option>
                                                    <option value="Sedan" <?= (isset($_GET['type']) && $_GET['type'] === 'Sedan') ? 'selected' : '' ?> >Sedan</option>
                                                    <option value="Station Wagon" <?= (isset($_GET['type']) && $_GET['type'] === 'Station Wagon') ? 'selected' : '' ?> >Station Wagon</option>
                                                    <option value="Limousine" <?= (isset($_GET['type']) && $_GET['type'] === 'Limousine') ? 'selected' : '' ?> >Limousine</option>
                                                    <option value="Luxury Sedan" <?= (isset($_GET['type']) && $_GET['type'] === 'Luxury Sedan') ? 'selected' : '' ?> >Luxury Sedan</option>
                                                    <option value="Premium SUV" <?= (isset($_GET['type']) && $_GET['type'] === 'Premium SUV') ? 'selected' : '' ?> >Premium SUV</option>
                                                    <option value="Supercar" <?= (isset($_GET['type']) && $_GET['type'] === 'Supercar') ? 'selected' : '' ?> >Supercar</option>


                                                    <option value="Van" <?= (isset($_GET['type']) && $_GET['type'] === 'Van') ? 'selected' : '' ?> >Van</option>
                                                    <option value="Pickup Truck" <?= (isset($_GET['type']) && $_GET['type'] === 'Pickup Truck') ? 'selected' : '' ?> >Pickup Truck</option>
                                                    <option value="Mini Bus" <?= (isset($_GET['type']) && $_GET['type'] === 'Mini Bus') ? 'selected' : '' ?> >Mini Bus</option>
                                                    <option value="Utility Vehicle" <?= (isset($_GET['type']) && $_GET['type'] === 'Utility Vehicle') ? 'selected' : '' ?> >Utility Vehicle</option>
                                                    <option value="Cargo Van" <?= (isset($_GET['type']) && $_GET['type'] === 'Cargo Van') ? 'selected' : '' ?> >Cargo Van</option>
                                                    <option value="Delivery Truck" <?= (isset($_GET['type']) && $_GET['type'] === 'Delivery Truck') ? 'selected' : '' ?> >Delivery Truck</option>

                                                    <option value="Rigid Truck" <?= (isset($_GET['type']) && $_GET['type'] === 'Rigid Truck') ? 'selected' : '' ?> >Rigid Truck</option>
                                                    <option value="Articulated Truck" <?= (isset($_GET['type']) && $_GET['type'] === 'Articulated Truck') ? 'selected' : '' ?> >Articulated Truck</option>
                                                    <option value="Semi-Trailer" <?= (isset($_GET['type']) && $_GET['type'] === 'Semi-Trailer') ? 'selected' : '' ?> >Semi-Trailer</option>
                                                    <option value="Lorry" <?= (isset($_GET['type']) && $_GET['type'] === 'Lorry') ? 'selected' : '' ?> >Lorry</option>
                                                    <option value="Dump Truck" <?= (isset($_GET['type']) && $_GET['type'] === 'Dump Truck') ? 'selected' : '' ?> >Dump Truck</option>
                                                    <option value="Tipper" <?= (isset($_GET['type']) && $_GET['type'] === 'Tipper') ? 'selected' : '' ?> >Tipper</option>
                                                    <option value="Crane Truck" <?= (isset($_GET['type']) && $_GET['type'] === 'Crane Truck') ? 'selected' : '' ?> >Crane Truck</option>
                                                    <option value="Freezer Truck" <?= (isset($_GET['type']) && $_GET['type'] === 'Freezer Truck') ? 'selected' : '' ?> >Freezer Truck</option>
                                                    <option value="Trailer" <?= (isset($_GET['type']) && $_GET['type'] === 'Trailer') ? 'selected' : '' ?> >Trailer</option>
                                                    <option value="Tanker Truck" <?= (isset($_GET['type']) && $_GET['type'] === 'Tanker Truck') ? 'selected' : '' ?> >Tanker Truck</option>

                                                    <option value="Bus" <?= (isset($_GET['type']) && $_GET['type'] === 'Bus') ? 'selected' : '' ?> >Bus</option>
                                                    <option value="Coach" <?= (isset($_GET['type']) && $_GET['type'] === 'Coach') ? 'selected' : '' ?> >Coach</option>
                                                    <option value="Shuttle" <?= (isset($_GET['type']) && $_GET['type'] === 'Shuttle') ? 'selected' : '' ?> >Shuttle</option>
                                                    <option value="Tram" <?= (isset($_GET['type']) && $_GET['type'] === 'Tram') ? 'selected' : '' ?> >Tram</option>
                                                    <option value="Trolley" <?= (isset($_GET['type']) && $_GET['type'] === 'Trolley') ? 'selected' : '' ?> >Trolley</option>
                                                    <option value="Double-Decker Bus" <?= (isset($_GET['type']) && $_GET['type'] === 'Double-Decker Bus') ? 'selected' : '' ?> >Double-Decker Bus</option>
                                                    <option value="Airport Shuttle Bus" <?= (isset($_GET['type']) && $_GET['type'] === 'Airport Shuttle Bus') ? 'selected' : '' ?> >Airport Shuttle Bus</option>

                                                    <option value="Paver" <?= (isset($_GET['type']) && $_GET['type'] === 'Paver') ? 'selected' : '' ?> >Paver</option>
                                                    <option value="Asphalt Roller" <?= (isset($_GET['type']) && $_GET['type'] === 'Asphalt Roller') ? 'selected' : '' ?> >Asphalt Roller</option>
                                                    <option value="Concrete Mixer" <?= (isset($_GET['type']) && $_GET['type'] === 'Concrete Mixer') ? 'selected' : '' ?> >Concrete Mixer</option>

                                                    <option value="Forklift" <?= (isset($_GET['type']) && $_GET['type'] === 'Forklift') ? 'selected' : '' ?> >Forklift</option>
                                                    <option value="Warehousing Bus" <?= (isset($_GET['type']) && $_GET['type'] === 'Warehousing Bus') ? 'selected' : '' ?> >Warehousing Bus</option>
                                                    <option value="Heavy Lifter" <?= (isset($_GET['type']) && $_GET['type'] === 'Heavy Lifter') ? 'selected' : '' ?> >Heavy Lifter</option>
                                                    <option value="Compactor" <?= (isset($_GET['type']) && $_GET['type'] === 'Compactor') ? 'selected' : '' ?> >Compactor</option>

                                                    <option value="Tractor" <?= (isset($_GET['type']) && $_GET['type'] === 'Tractor') ? 'selected' : '' ?> >Tractor</option>
                                                    <option value="Combine Harvester" <?= (isset($_GET['type']) && $_GET['type'] === 'Combine Harvester') ? 'selected' : '' ?> >Combine Harvester</option>
                                                    <option value="Plough" <?= (isset($_GET['type']) && $_GET['type'] === 'Plough') ? 'selected' : '' ?> >Plough</option>
                                                    <option value="Seed Drill" <?= (isset($_GET['type']) && $_GET['type'] === 'Seed Drill') ? 'selected' : '' ?> >Seed Drill</option>
                                                    <option value="Sprayer" <?= (isset($_GET['type']) && $_GET['type'] === 'Sprayer') ? 'selected' : '' ?> >Sprayer</option>

                                                    <option value="Excavator" <?= (isset($_GET['type']) && $_GET['type'] === 'Excavator') ? 'selected' : '' ?> >Excavator</option>
                                                    <option value="Bulldozer" <?= (isset($_GET['type']) && $_GET['type'] === 'Bulldozer') ? 'selected' : '' ?> >Bulldozer</option>
                                                    <option value="Cranes" <?= (isset($_GET['type']) && $_GET['type'] === 'Cranes') ? 'selected' : '' ?> >Cranes</option>
                                                    <option value="Backhoe" <?= (isset($_GET['type']) && $_GET['type'] === 'Backhoe') ? 'selected' : '' ?> >Backhoe</option>
                                                    <option value="Loader" <?= (isset($_GET['type']) && $_GET['type'] === 'Loader') ? 'selected' : '' ?> >Loader</option>
                                                    <option value="Grader" <?= (isset($_GET['type']) && $_GET['type'] === 'Grader') ? 'selected' : '' ?> >Grader</option>
                                                    <option value="Skid Steer" <?= (isset($_GET['type']) && $_GET['type'] === 'Skid Steer') ? 'selected' : '' ?> >Skid Steer</option>

                                                    <option value="Ambulance" <?= (isset($_GET['type']) && $_GET['type'] === 'Ambulance') ? 'selected' : '' ?> >Ambulance</option>
                                                    <option value="Fire Truck" <?= (isset($_GET['type']) && $_GET['type'] === 'Fire Truck') ? 'selected' : '' ?> >Fire Truck</option>
                                                    <option value="Tow Truck" <?= (isset($_GET['type']) && $_GET['type'] === 'Tow Truck') ? 'selected' : '' ?> >Tow Truck</option>
                                                    <option value="Police Vehicle" <?= (isset($_GET['type']) && $_GET['type'] === 'Police Vehicle') ? 'selected' : '' ?> >Police Vehicle</option>
                                                    <option value="Garbage Truck" <?= (isset($_GET['type']) && $_GET['type'] === 'Garbage Truck') ? 'selected' : '' ?> >Garbage Truck</option>

                                                    <option value="Standard Motorcycle" <?= (isset($_GET['type']) && $_GET['type'] === 'Standard Motorcycle') ? 'selected' : '' ?> >Standard Motorcycle</option>
                                                    <option value="Cruiser" <?= (isset($_GET['type']) && $_GET['type'] === 'Cruiser') ? 'selected' : '' ?> >Cruiser</option>
                                                    <option value="Sport Bike" <?= (isset($_GET['type']) && $_GET['type'] === 'Sport Bike') ? 'selected' : '' ?> >Sport Bike</option>
                                                    <option value="Touring Bike" <?= (isset($_GET['type']) && $_GET['type'] === 'Touring Bike') ? 'selected' : '' ?> >Touring Bike</option>
                                                    <option value="Dirt Bike" <?= (isset($_GET['type']) && $_GET['type'] === 'Dirt Bike') ? 'selected' : '' ?> >Dirt Bike</option>
                                                    <option value="Scooter" <?= (isset($_GET['type']) && $_GET['type'] === 'Scooter') ? 'selected' : '' ?> >Scooter</option>
                                                `
                                                }

                                                if (selectedSubVehicleType) {
                                                    const options = subVehicleTypeSelect.options;
                                                    for (const i = 0; i < options.length; i++) {
                                                        if (options[i].value === selectedSubVehicleType) {
                                                            options[i].selected = true;
                                                            break;
                                                        }
                                                    }
                                                }
                                            }

                                            function updateVehicleTypeOptions() {
                                                const subVehicleType = document.getElementById("sub-vehicle-type").value;
                                                const typeSelect = document.getElementById('type')

                                                typeSelect.innerHTML = '<option value="">Any</option>';

                                                if (subVehicleType === 'Light Commercial Vehicles') {
                                                    typeSelect.innerHTML += `
                                                    <option value="Van" <?= (isset($_GET['type']) && $_GET['type'] === 'Van') ? 'selected' : '' ?> >Van</option>
                                                    <option value="Pickup Truck" <?= (isset($_GET['type']) && $_GET['type'] === 'Pickup Truck') ? 'selected' : '' ?> >Pickup Truck</option>
                                                    <option value="Mini Bus" <?= (isset($_GET['type']) && $_GET['type'] === 'Mini Bus') ? 'selected' : '' ?> >Mini Bus</option>
                                                    <option value="Utility Vehicle" <?= (isset($_GET['type']) && $_GET['type'] === 'Utility Vehicle') ? 'selected' : '' ?> >Utility Vehicle</option>
                                                    <option value="Cargo Van" <?= (isset($_GET['type']) && $_GET['type'] === 'Cargo Van') ? 'selected' : '' ?> >Cargo Van</option>
                                                    <option value="Delivery Truck" <?= (isset($_GET['type']) && $_GET['type'] === 'Delivery Truck') ? 'selected' : '' ?> >Delivery Truck</option>
                                                `;
                                                } else if (subVehicleType === 'Heavy Commercial Vehicles') {
                                                    typeSelect.innerHTML += `
                                                    <option value="Rigid Truck" <?= (isset($_GET['type']) && $_GET['type'] === 'Rigid Truck') ? 'selected' : '' ?> >Rigid Truck</option>
                                                    <option value="Articulated Truck" <?= (isset($_GET['type']) && $_GET['type'] === 'Articulated Truck') ? 'selected' : '' ?> >Articulated Truck</option>
                                                    <option value="Semi-Trailer" <?= (isset($_GET['type']) && $_GET['type'] === 'Semi-Trailer') ? 'selected' : '' ?> >Semi-Trailer</option>
                                                    <option value="Lorry" <?= (isset($_GET['type']) && $_GET['type'] === 'Lorry') ? 'selected' : '' ?> >Lorry</option>
                                                    <option value="Dump Truck" <?= (isset($_GET['type']) && $_GET['type'] === 'Dump Truck') ? 'selected' : '' ?> >Dump Truck</option>
                                                    <option value="Tipper" <?= (isset($_GET['type']) && $_GET['type'] === 'Tipper') ? 'selected' : '' ?> >Tipper</option>
                                                    <option value="Crane Truck" <?= (isset($_GET['type']) && $_GET['type'] === 'Crane Truck') ? 'selected' : '' ?> >Crane Truck</option>
                                                    <option value="Freezer Truck" <?= (isset($_GET['type']) && $_GET['type'] === 'Freezer Truck') ? 'selected' : '' ?> >Freezer Truck</option>
                                                    <option value="Trailer" <?= (isset($_GET['type']) && $_GET['type'] === 'Trailer') ? 'selected' : '' ?> >Trailer</option>
                                                    <option value="Tanker Truck" <?= (isset($_GET['type']) && $_GET['type'] === 'Tanker Truck') ? 'selected' : '' ?> >Tanker Truck</option>
                                                `;
                                                } else if (subVehicleType === 'Roadwork Machinery') {
                                                    typeSelect.innerHTML += `
                                                    <option value="Paver" <?= (isset($_GET['type']) && $_GET['type'] === 'Paver') ? 'selected' : '' ?> >Paver</option>
                                                    <option value="Asphalt Roller" <?= (isset($_GET['type']) && $_GET['type'] === 'Asphalt Roller') ? 'selected' : '' ?> >Asphalt Roller</option>
                                                    <option value="Concrete Mixer" <?= (isset($_GET['type']) && $_GET['type'] === 'Concrete Mixer') ? 'selected' : '' ?> >Concrete Mixer</option>
                                                `;
                                                } else if (subVehicleType === 'Industrial Machinery') {
                                                    typeSelect.innerHTML += `
                                                    <option value="Forklift" <?= (isset($_GET['type']) && $_GET['type'] === 'Forklift') ? 'selected' : '' ?> >Forklift</option>
                                                    <option value="Warehousing Bus" <?= (isset($_GET['type']) && $_GET['type'] === 'Warehousing Bus') ? 'selected' : '' ?> >Warehousing Bus</option>
                                                    <option value="Heavy Lifter" <?= (isset($_GET['type']) && $_GET['type'] === 'Heavy Lifter') ? 'selected' : '' ?> >Heavy Lifter</option>
                                                    <option value="Compactor" <?= (isset($_GET['type']) && $_GET['type'] === 'Compactor') ? 'selected' : '' ?> >Compactor</option>
                                                `;
                                                } else if (subVehicleType === 'Agricultural Machinery') {
                                                    typeSelect.innerHTML += `
                                                    <option value="Tractor" <?= (isset($_GET['type']) && $_GET['type'] === 'Tractor') ? 'selected' : '' ?> >Tractor</option>
                                                    <option value="Combine Harvester" <?= (isset($_GET['type']) && $_GET['type'] === 'Combine Harvester') ? 'selected' : '' ?> >Combine Harvester</option>
                                                    <option value="Plough" <?= (isset($_GET['type']) && $_GET['type'] === 'Plough') ? 'selected' : '' ?> >Plough</option>
                                                    <option value="Seed Drill" <?= (isset($_GET['type']) && $_GET['type'] === 'Seed Drill') ? 'selected' : '' ?> >Seed Drill</option>
                                                    <option value="Sprayer" <?= (isset($_GET['type']) && $_GET['type'] === 'Sprayer') ? 'selected' : '' ?> >Sprayer</option>
                                                `;
                                                } else if (subVehicleType === 'Construction Machinery') {
                                                    typeSelect.innerHTML += `
                                                    <option value="Excavator" <?= (isset($_GET['type']) && $_GET['type'] === 'Excavator') ? 'selected' : '' ?> >Excavator</option>
                                                    <option value="Bulldozer" <?= (isset($_GET['type']) && $_GET['type'] === 'Bulldozer') ? 'selected' : '' ?> >Bulldozer</option>
                                                    <option value="Cranes" <?= (isset($_GET['type']) && $_GET['type'] === 'Cranes') ? 'selected' : '' ?> >Cranes</option>
                                                    <option value="Backhoe" <?= (isset($_GET['type']) && $_GET['type'] === 'Backhoe') ? 'selected' : '' ?> >Backhoe</option>
                                                    <option value="Loader" <?= (isset($_GET['type']) && $_GET['type'] === 'Loader') ? 'selected' : '' ?> >Loader</option>
                                                    <option value="Grader" <?= (isset($_GET['type']) && $_GET['type'] === 'Grader') ? 'selected' : '' ?> >Grader</option>
                                                    <option value="Skid Steer" <?= (isset($_GET['type']) && $_GET['type'] === 'Skid Steer') ? 'selected' : '' ?> >Skid Steer</option>
                                                `;
                                                }
                                            }

                                            document.addEventListener("DOMContentLoaded", function () {
                                                updateSubVehicleTypeOptions();
                                            });

                                        </script>

                                        <!-- Type -->
                                        <div class="form-group col-md-2">
                                            <label for="type">Type:</label>
                                            <select id="type" name="type">
                                                <option value="">Any</option>
                                            </select>
                                        </div>

                                        <!--Search-->
                                        <div class="form-group col-md-4">
                                            <label for="min-value">Search Title :</label>
                                            <input type="text" id="title" name="title" placeholder="Search here..." value="<?= isset($_GET['title']) ? htmlspecialchars($_GET['title']) : '' ?>" > <!-- serach by title -->
                                        </div>



                                    </div>

                                    <hr />


                                    <div class="row pt-3">

                                        <div class="form-group col-md-3 ">
                                            <label>Make:</label>
                                            <div class="group-select">
                                                <select name="main-category" id="main-category" class="form-control nice-select">
                                                    <option value="">Any</option>
                                                    <!-- Main categories will be populated here by JavaScript -->
                                                </select>
                                            </div>
                                        </div>

                                        <div class="form-group col-md-3 ">
                                            <label>Model:</label>
                                            <div class="group-select">
                                                <select name="sub-category" id="sub-category" class="form-control nice-select">
                                                    <option value="" disabled selected>Select a Model</option>
                                                    <!-- Subcategories will be populated here by JavaScript -->
                                                </select>
                                            </div>
                                        </div>

                                        <!-- Minimum Price -->
                                        <div class="form-group col-md-2">
                                            <label for="min-value">Min Price:</label>
                                            <input type="number" id="min-value" name="min-value" placeholder="Min Price" min="0" step="1" value="<?= isset($_GET['min-value']) ? htmlspecialchars($_GET['min-value']) : '' ?>" >
                                        </div>

                                        <!-- Maximum Price -->
                                        <div class="form-group col-md-2">
                                            <label for="max-value">Max Price:</label>
                                            <input type="number" id="max-value" name="max-value" placeholder="Max Price" min="0" step="1" value="<?= isset($_GET['max-value']) ? htmlspecialchars($_GET['max-value']) : '' ?>"   >
                                        </div>
                                        <!-- Condition -->
                                        <div class="form-group col-md-2">
                                            <label for="condition">Condition:</label>
                                            <select id="condition" name="condition">
                                                <option value="">Any</option>
                                                <option value="New" <?= (isset($_GET['condition']) && $_GET['condition'] === 'New') ? 'selected' : '' ?> >New</option>
                                                <option value="Used" <?= (isset($_GET['condition']) && $_GET['condition'] === 'Used') ? 'selected' : '' ?>  >Used</option>
                                            </select>
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

                                    </div>

                                    <div class="row pt-3">

                                        <!-- Fuel Type -->
                                        <div class="form-group col-md-3">
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
                                        <div class="form-group col-md-2">
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
                                        <div class="form-group col-md-2">
                                            <label for="year">Year:</label>
                                            <input type="number" id="year" name="year" placeholder="Year" min="1900" max="<?= date('Y') ?>" value="<?= isset($_GET['year']) ? htmlspecialchars($_GET['year']) : '' ?>" >
                                        </div>

                                        <!-- Drivetrain -->
                                        <div class="form-group col-md-2">
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
                                        <div class="form-group col-md-3">
                                            <label for="mileage">Max Mileage:</label>
                                            <input type="number" id="mileage" name="mileage" placeholder="Max Mileage" min="0" value="<?= isset($_GET['mileage']) ? htmlspecialchars($_GET['mileage']) : '' ?>">
                                        </div>

                                    </div>

                                    <div class="row pt-3 align-items-center">


                                        <!-- Color -->
                                        <div class="form-group col-md-3">
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
                                        <div class="form-group col-md-3">
                                            <label for="engine-size">Engine Size:</label>
                                            <input type="text" id="engine-size" name="engine-size" placeholder="Engine Size">
                                        </div>

                                        <!-- Apply Filters Button -->
                                        <div class="form-group col-md-3 my-2">
                                            <button type="submit">Apply Filters</button>
                                        </div>
                                        <div class="form-group col-md-3">
                                            <button type="button" id="btn-clear" class="btn-clear" >Clear</button>
                                        </div>

                                        <script>
                                            document.getElementById('btn-clear').addEventListener('click', function (event) {
                                                event.preventDefault();
                                                document.getElementById('main-vehicle-type').value = '';
                                                document.getElementById('sub-vehicle-type').value = '';
                                                document.getElementById('type').value = '';
                                                document.getElementById('title').value = '';
                                                document.getElementById('main-category').value = '';
                                                document.getElementById('sub-category').value = '';
                                                document.getElementById('min-value').value = '';
                                                document.getElementById('max-value').value = '';
                                                document.getElementById('condition').value = '';
                                                document.getElementById('fuel-type').value = '';
                                                document.getElementById('transmission').value = '';
                                                document.getElementById('year').value = '';
                                                document.getElementById('driver_type').value = '';
                                                document.getElementById('mileage').value = '';
                                                document.getElementById('color').value = '';
                                                document.getElementById('engine-size').value = '';
                                            })
                                        </script>
                                    </div>
                                </form>
                            </div>
                        </div>

                        <?php if (!empty($cars)) : ?>
                        <div class="row mt-5">
                            <div class="col-md-12 col-lg-2 sidebar-shortcut-container">
                                <div class="search-filter-listing-car">
                                    <div class="filter-header-list">
                                        <h6 class="title-filter"><span id="selected-main-category"></span></h6>
                                    </div>

                                    <div id="main-category-section" class="filter-header-list"></div>
                                    <!-- Display subcategory list if a main category is selected -->
                                    <ul id="subcategory-list"></ul>

                                    <!-- Display main categories if no main category is selected -->
                                    <ul id="main-category-list"></ul>
                                    <script>
                                        $(document).ready(function() {
                                            // Get the main category ID from the URL
                                            const urlParams = new URLSearchParams(window.location.search);
                                            const mainCategoryId = urlParams.get('main-category');
                                            const subCategoryId = urlParams.get('sub-category');

                                            if (mainCategoryId) {
                                                // Fetch categories and subcategories
                                                $.ajax({
                                                    url: '<?= base_url('cars_category_for_filter') ?>', // Use the existing backend function
                                                    method: 'GET',
                                                    success: function(response) {
                                                        const categories = response.categories;

                                                        // Find the selected main category
                                                        const selectedCategory = categories.find(category => category.id == mainCategoryId);

                                                        if (selectedCategory) {
                                                            $('#selected-main-category').text(selectedCategory.category_name);

                                                            if (selectedCategory.sub_categories) {
                                                                // Populate the subcategory list
                                                                $('#subcategory-list').empty();
                                                                selectedCategory.sub_categories.forEach(function(subCategory) {
                                                                    const isSelected = subCategory.id == subCategoryId ? 'selected' : '';
                                                                    $('#subcategory-list').append(
                                                                        `<li>
                                                                            <a href="#" class="subcategory-link ${isSelected}" data-id="${subCategory.id}">${subCategory.model_name} <span class="">(${subCategory.sub_category_count})</span> </a>
                                                                                </li>`
                                                                    );
                                                                });

                                                                $('.subcategory-link.selected').css({
                                                                    color: '#c82333',
                                                                    fontWeight: 'bold'
                                                                });


                                                                $('.subcategory-link').on('click', function(e) {
                                                                    e.preventDefault();
                                                                    const subCategoryId = $(this).data('id');

                                                                    urlParams.set('sub-category', subCategoryId);
                                                                    window.location.search = urlParams.toString();
                                                                })
                                                            } else {
                                                                $('#subcategory-list').append('<li>No subcategories available</li>');
                                                            }
                                                        } else {
                                                            $('#selected-main-category').text('Unknown Category');
                                                            $('#subcategory-list').append('<li>Category not found</li>');
                                                        }
                                                    },
                                                    error: function(error) {
                                                        console.log('Error fetching subcategories:', error);
                                                    }
                                                });
                                            } else {
                                                // If no main category is selected, load the main categories
                                                $.ajax({
                                                    url: '<?= base_url('cars_category_for_filter') ?>', // Use the existing backend function
                                                    method: 'GET',
                                                    success: function(response) {
                                                        const categories = response.categories;

                                                        // Display "Brands" title
                                                        $('#main-category-section').html('<h6 class="title-filter">Make</h6>'); // Add the Brands title

                                                        // Populate the list of main categories
                                                        $('#main-category-list').empty(); // Clear any existing categories
                                                        categories.forEach(function(category) {
                                                            $('#main-category-list').append(
                                                                `<li>
                                                                    <a href="#" class="main-category-link" data-id="${category.id}">${category.category_name} (${category.main_category_count})</a>
                                                                  </li>`
                                                            );
                                                        });

                                                        // Handle click on main category
                                                        $('.main-category-link').on('click', function(e) {
                                                            e.preventDefault();
                                                            const selectedMainCategoryId = $(this).data('id');
                                                            urlParams.set('main-category', selectedMainCategoryId);
                                                            window.location.search = urlParams.toString();
                                                        });
                                                    },
                                                    error: function(error) {
                                                        console.log('Error fetching main categories:', error);
                                                    }
                                                });
                                            }
                                        });
                                    </script>

<!--                                    <hr/>-->

                                    <ul id="type-list" class="type-list display-none" >

                                        <?php if (isset($_GET['main-vehicle-type']) && $_GET['main-vehicle-type'] === 'Passenger') : ?>
                                            <div class="filter-header-list mt-3" id="filter-type-section">
                                                <h6 class="title-filter"><span id="selected-type">Types</span></h6>
                                            </div>

                                            <li value="Sedan" <?= (isset($_GET['type']) && $_GET['type'] === 'Sedan') ? 'selected' : '' ?>>Sedan</li>
                                            <li value="Hatchback" <?= (isset($_GET['type']) && $_GET['type'] === 'Hatchback') ? 'selected' : '' ?>>Hatchback</li>
                                            <li value="Coupe" <?= (isset($_GET['type']) && $_GET['type'] === 'Coupe') ? 'selected' : '' ?>>Coupe</li>
                                            <li value="Convertible" <?= (isset($_GET['type']) && $_GET['type'] === 'Convertible') ? 'selected' : '' ?>>Convertible</li>
                                            <li value="SUV" <?= (isset($_GET['type']) && $_GET['type'] === 'SUV') ? 'selected' : '' ?>>SUV</li>
                                            <li value="Station Wagon" <?= (isset($_GET['type']) && $_GET['type'] === 'Station Wagon') ? 'selected' : '' ?>>Station Wagon</li>
                                            <li value="Limousine" <?= (isset($_GET['type']) && $_GET['type'] === 'Limousine') ? 'selected' : '' ?>>Limousine</li>
                                            <li value="Luxury Sedan" <?= (isset($_GET['type']) && $_GET['type'] === 'Luxury Sedan') ? 'selected' : '' ?>>Luxury Sedan</li>
                                            <li value="Premium SUV" <?= (isset($_GET['type']) && $_GET['type'] === 'Premium SUV') ? 'selected' : '' ?>>Premium SUV</li>
                                            <li value="Supercar" <?= (isset($_GET['type']) && $_GET['type'] === 'Supercar') ? 'selected' : '' ?>>Supercar</li>

                                        <?php elseif (isset($_GET['main-vehicle-type']) && $_GET['main-vehicle-type'] === 'Commercial') : ?>

                                            <div class="filter-header-list mt-3" id="filter-type-section">
                                                <h6 class="title-filter"><span id="selected-type">Types</span></h6>
                                            </div>

                                            <li value="Van" <?= (isset($_GET['type']) && $_GET['type'] === 'Van') ? 'selected' : '' ?> >Van</li>
                                            <li value="Pickup Truck" <?= (isset($_GET['type']) && $_GET['type'] === 'Pickup Truck') ? 'selected' : '' ?> >Pickup Truck</li>
                                            <li value="Mini Bus" <?= (isset($_GET['type']) && $_GET['type'] === 'Mini Bus') ? 'selected' : '' ?> >Mini Bus</li>
                                            <li value="Utility Vehicle" <?= (isset($_GET['type']) && $_GET['type'] === 'Utility Vehicle') ? 'selected' : '' ?> >Utility Vehicle</li>
                                            <li value="Cargo Van" <?= (isset($_GET['type']) && $_GET['type'] === 'Cargo Van') ? 'selected' : '' ?> >Cargo Van</li>
                                            <li value="Delivery Truck" <?= (isset($_GET['type']) && $_GET['type'] === 'Delivery Truck') ? 'selected' : '' ?> >Delivery Truck</li>

                                            <li value="Rigid Truck" <?= (isset($_GET['type']) && $_GET['type'] === 'Rigid Truck') ? 'selected' : '' ?> >Rigid Truck</li>
                                            <li value="Articulated Truck" <?= (isset($_GET['type']) && $_GET['type'] === 'Articulated Truck') ? 'selected' : '' ?> >Articulated Truck</li>
                                            <li value="Semi-Trailer" <?= (isset($_GET['type']) && $_GET['type'] === 'Semi-Trailer') ? 'selected' : '' ?> >Semi-Trailer</li>
                                            <li value="Lorry" <?= (isset($_GET['type']) && $_GET['type'] === 'Lorry') ? 'selected' : '' ?> >Lorry</li>
                                            <li value="Dump Truck" <?= (isset($_GET['type']) && $_GET['type'] === 'Dump Truck') ? 'selected' : '' ?> >Dump Truck</li>
                                            <li value="Tipper" <?= (isset($_GET['type']) && $_GET['type'] === 'Tipper') ? 'selected' : '' ?> >Tipper</li>
                                            <li value="Crane Truck" <?= (isset($_GET['type']) && $_GET['type'] === 'Crane Truck') ? 'selected' : '' ?> >Crane Truck</li>
                                            <li value="Freezer Truck" <?= (isset($_GET['type']) && $_GET['type'] === 'Freezer Truck') ? 'selected' : '' ?> >Freezer Truck</li>
                                            <li value="Trailer" <?= (isset($_GET['type']) && $_GET['type'] === 'Trailer') ? 'selected' : '' ?> >Trailer</li>
                                            <li value="Tanker Truck" <?= (isset($_GET['type']) && $_GET['type'] === 'Tanker Truck') ? 'selected' : '' ?> >Tanker Truck</li>

                                        <?php elseif (isset($_GET['main-vehicle-type']) && $_GET['main-vehicle-type'] === 'Public Transport') : ?>

                                            <div class="filter-header-list mt-3" id="filter-type-section">
                                                <h6 class="title-filter"><span id="selected-type">Types</span></h6>
                                            </div>

                                            <li value="Bus" <?= (isset($_GET['type']) && $_GET['type'] === 'Bus') ? 'selected' : '' ?> >Bus</li>
                                            <li value="Coach" <?= (isset($_GET['type']) && $_GET['type'] === 'Coach') ? 'selected' : '' ?> >Coach</li>
                                            <li value="Shuttle" <?= (isset($_GET['type']) && $_GET['type'] === 'Shuttle') ? 'selected' : '' ?> >Shuttle</li>
                                            <li value="Tram" <?= (isset($_GET['type']) && $_GET['type'] === 'Tram') ? 'selected' : '' ?> >Tram</li>
                                            <li value="Trolley" <?= (isset($_GET['type']) && $_GET['type'] === 'Trolley') ? 'selected' : '' ?> >Trolley</li>
                                            <li value="Double-Decker Bus" <?= (isset($_GET['type']) && $_GET['type'] === 'Double-Decker Bus') ? 'selected' : '' ?> >Double-Decker Bus</li>
                                            <li value="Airport Shuttle Bus" <?= (isset($_GET['type']) && $_GET['type'] === 'Airport Shuttle Bus') ? 'selected' : '' ?> >Airport Shuttle Bus</li>

                                        <?php elseif (isset($_GET['main-vehicle-type']) && $_GET['main-vehicle-type'] === 'Machinery') : ?>

                                            <div class="filter-header-list mt-3" id="filter-type-section">
                                                <h6 class="title-filter"><span id="selected-type">Types</span></h6>
                                            </div>

                                            <li value="Paver" <?= (isset($_GET['type']) && $_GET['type'] === 'Paver') ? 'selected' : '' ?> >Paver</li>
                                            <li value="Asphalt Roller" <?= (isset($_GET['type']) && $_GET['type'] === 'Asphalt Roller') ? 'selected' : '' ?> >Asphalt Roller</li>
                                            <li value="Concrete Mixer" <?= (isset($_GET['type']) && $_GET['type'] === 'Concrete Mixer') ? 'selected' : '' ?> >Concrete Mixer</li>

                                            <li value="Forklift" <?= (isset($_GET['type']) && $_GET['type'] === 'Forklift') ? 'selected' : '' ?> >Forklift</li>
                                            <li value="Warehousing Bus" <?= (isset($_GET['type']) && $_GET['type'] === 'Warehousing Bus') ? 'selected' : '' ?> >Warehousing Bus</li>
                                            <li value="Heavy Lifter" <?= (isset($_GET['type']) && $_GET['type'] === 'Heavy Lifter') ? 'selected' : '' ?> >Heavy Lifter</li>
                                            <li value="Compactor" <?= (isset($_GET['type']) && $_GET['type'] === 'Compactor') ? 'selected' : '' ?> >Compactor</li>

                                            <li value="Tractor" <?= (isset($_GET['type']) && $_GET['type'] === 'Tractor') ? 'selected' : '' ?> >Tractor</li>
                                            <li value="Combine Harvester" <?= (isset($_GET['type']) && $_GET['type'] === 'Combine Harvester') ? 'selected' : '' ?> >Combine Harvester</li>
                                            <li value="Plough" <?= (isset($_GET['type']) && $_GET['type'] === 'Plough') ? 'selected' : '' ?> >Plough</li>
                                            <li value="Seed Drill" <?= (isset($_GET['type']) && $_GET['type'] === 'Seed Drill') ? 'selected' : '' ?> >Seed Drill</li>
                                            <li value="Sprayer" <?= (isset($_GET['type']) && $_GET['type'] === 'Sprayer') ? 'selected' : '' ?> >Sprayer</li>

                                            <li value="Excavator" <?= (isset($_GET['type']) && $_GET['type'] === 'Excavator') ? 'selected' : '' ?> >Excavator</li>
                                            <li value="Bulldozer" <?= (isset($_GET['type']) && $_GET['type'] === 'Bulldozer') ? 'selected' : '' ?> >Bulldozer</li>
                                            <li value="Cranes" <?= (isset($_GET['type']) && $_GET['type'] === 'Cranes') ? 'selected' : '' ?> >Cranes</li>
                                            <li value="Backhoe" <?= (isset($_GET['type']) && $_GET['type'] === 'Backhoe') ? 'selected' : '' ?> >Backhoe</li>
                                            <li value="Loader" <?= (isset($_GET['type']) && $_GET['type'] === 'Loader') ? 'selected' : '' ?> >Loader</li>
                                            <li value="Grader" <?= (isset($_GET['type']) && $_GET['type'] === 'Grader') ? 'selected' : '' ?> >Grader</li>
                                            <li value="Skid Steer" <?= (isset($_GET['type']) && $_GET['type'] === 'Skid Steer') ? 'selected' : '' ?> >Skid Steer</li>

                                        <?php elseif (isset($_GET['main-vehicle-type']) && $_GET['main-vehicle-type'] === 'Special Purposes') : ?>

                                            <div class="filter-header-list mt-3" id="filter-type-section">
                                                <h6 class="title-filter"><span id="selected-type">Types</span></h6>
                                            </div>

                                            <li value="Ambulance" <?= (isset($_GET['type']) && $_GET['type'] === 'Ambulance') ? 'selected' : '' ?> >Ambulance</li>
                                            <li value="Fire Truck" <?= (isset($_GET['type']) && $_GET['type'] === 'Fire Truck') ? 'selected' : '' ?> >Fire Truck</li>
                                            <li value="Tow Truck" <?= (isset($_GET['type']) && $_GET['type'] === 'Tow Truck') ? 'selected' : '' ?> >Tow Truck</li>
                                            <li value="Police Vehicle" <?= (isset($_GET['type']) && $_GET['type'] === 'Police Vehicle') ? 'selected' : '' ?> >Police Vehicle</li>
                                            <li value="Garbage Truck" <?= (isset($_GET['type']) && $_GET['type'] === 'Garbage Truck') ? 'selected' : '' ?> >Garbage Truck</li>

                                        <?php elseif (isset($_GET['main-vehicle-type']) && $_GET['main-vehicle-type'] === 'Motorcycle') : ?>

                                            <div class="filter-header-list mt-3" id="filter-type-section">
                                                <h6 class="title-filter"><span id="selected-type">Types</span></h6>
                                            </div>

                                            <li value="Standard Motorcycle" <?= (isset($_GET['type']) && $_GET['type'] === 'Standard Motorcycle') ? 'selected' : '' ?> >Standard Motorcycle</li>
                                            <li value="Cruiser" <?= (isset($_GET['type']) && $_GET['type'] === 'Cruiser') ? 'selected' : '' ?> >Cruiser</li>
                                            <li value="Sport Bike" <?= (isset($_GET['type']) && $_GET['type'] === 'Sport Bike') ? 'selected' : '' ?> >Sport Bike</li>
                                            <li value="Touring Bike" <?= (isset($_GET['type']) && $_GET['type'] === 'Touring Bike') ? 'selected' : '' ?> >Touring Bike</li>
                                            <li value="Dirt Bike" <?= (isset($_GET['type']) && $_GET['type'] === 'Dirt Bike') ? 'selected' : '' ?> >Dirt Bike</li>
                                            <li value="Scooter" <?= (isset($_GET['type']) && $_GET['type'] === 'Scooter') ? 'selected' : '' ?> >Scooter</li>

                                        <?php endif; ?>

                                        <script>
                                            // $(document).ready(function() {
                                            //     // Get URL parameters
                                            //     const urlParams = new URLSearchParams(window.location.search);
                                            //     const mainVehicleType = urlParams.get('main_vehicle_type');
                                            //     const mainCategory = urlParams.get('main-category');
                                            //
                                            //     // Check conditions to hide the filter type section
                                            //     if (mainCategory) {
                                            //         $('#type-list').hide(); // Hide the section
                                            //     }
                                            // });

                                        // jQuery to handle click on each li item
                                            $(document).ready(function () {
                                                $('#type-list li').each(function () {
                                                    const typeValue = $(this).attr('value');
                                                    const urlParams = new URLSearchParams(window.location.search);
                                                    const selectedType = urlParams.get('type');

                                                    // Highlight the type that matches the URL parameter
                                                    if (typeValue === selectedType) {
                                                        $(this).css({
                                                            color: '#c82333',
                                                            fontWeight: 'bold'
                                                        });
                                                    }
                                                });

                                                $('#type-list li').on('click', function (e) {
                                                    e.preventDefault();

                                                    // Get the value of the clicked list item
                                                    const typeValue = $(this).attr('value');

                                                    // Remove styling from all list items
                                                    $('#type-list li').css({
                                                        color: '',
                                                        fontWeight: ''
                                                    });

                                                    // Apply red color and bold font to the clicked list item
                                                    $(this).css({
                                                        color: '#c82333',
                                                        fontWeight: 'bold'
                                                    });

                                                    // Update the URL parameters
                                                    const urlParams = new URLSearchParams(window.location.search);
                                                    urlParams.set('type', typeValue);

                                                    // Retain 'main-vehicle-type' in the URL if it exists
                                                    let mainVehicleType = urlParams.get('main-vehicle-type');
                                                    if (!mainVehicleType) {
                                                        mainVehicleType = 'Passenger'; // Default value or fetch dynamically
                                                        urlParams.set('main-vehicle-type', mainVehicleType);
                                                    }

                                                    // Update the URL and reload the page with the new parameters
                                                    window.location.search = urlParams.toString();
                                                });
                                            });

                                        </script>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-12 col-lg-10 listing-list-car-wrap">
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
                                                <div class="listing-grid-item" id="" data-vehicle-type="<?= htmlspecialchars($car['vehicle_type']) ?>" data-car-condition="<?= htmlspecialchars($car['condition']) ?>">
                                                    <div class="listing-item-image" data-car-id="<?= htmlspecialchars($car['id']) ?>">
                                                        <?php if ($car['sale_status'] == "SOLD"): ?>
                                                            <img src="../assets/images/sold/sold.png" class="sold-tag" alt="sold tag">
                                                        <?php endif; ?>
                                                        <div class="hover-listing-image">
                                                            <div class="wrap-hover-listing">
                                                                <?php
                                                                if (isset($car['images'])) {
                                                                    $images = is_string($car['images']) ? json_decode($car['images'], true) : $car['images'];

                                                                    if (is_array($images)) {
                                                                        foreach ($images as $image) {
                                                                            if (isset($image['image_type']) && $image['image_type'] === 'image') {
                                                                                echo '<div class="listing-item active" title="' . $car['title'] . '">';
                                                                                echo '<div class="images">';
                                                                                echo '<img src="' . base_url('/' . $image['img_url']) . '" class="swiper-image tfcl-light-gallery" loading="lazy" alt="image" />';
                                                                                echo '</div></div>';
                                                                                break;
                                                                            }
                                                                        }
                                                                        /*foreach ($images as $image) {
                                                                            if (isset($image['image_type']) && $image['image_type'] == 'image') {
                                                                                echo '<div class="listing-item active" title="' . htmlspecialchars($car['title']) . '">';
                                                                                echo '<div class="images">';
                                                                                echo '<img src="' . base_url('/' . htmlspecialchars($image['img_url'])) . '" class="swiper-image tfcl-light-gallery" loading="lazy" alt="Image" />';
                                                                                echo '</div></div>';
                                                                            }
                                                                        }*/
                                                                    } else {
                                                                        echo 'Failed to decode JSON';
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
                                                            <!--<h6 class="title"><a href="<?= base_url('cars/' . $car['id']); ?>"><?= htmlspecialchars(mb_strimwidth($car['title'], 0, 15, '...')) ?: 'No Title' ?></a></h6>-->
                                                            <h6 class="title"><a href="<?= base_url('cars/' . $car['id']); ?>"><?= htmlspecialchars($car['title']) ?: 'No Title' ?></a></h6>
                                                            <div class="description">
                                                                <ul>
                                                                    <li class="listing-information fuel">
                                                                        <i class="icon-gasoline-pump-1"></i>
                                                                        <div class="inner">
                                                                            <span>Fuel type</span>
                                                                            <p><?= htmlspecialchars($car['fuel_type']) ?></p>
                                                                        </div>
                                                                    </li>
                                                                    <?php if ($car['condition'] == "Used"): ?>
                                                                        <li class="listing-information size-engine">
                                                                            <i class="icon-Group1"></i>
                                                                            <div class="inner">
                                                                                <span>Mileage</span>
                                                                                <p><?= esc($car['mileage']) ? esc($car['mileage']) . ' km' : 'N/A'; ?>
                                                                                </p>
                                                                            </div>
                                                                        </li>
                                                                    <?php else: ?>
                                                                        <li class="listing-information size-engine">
                                                                            <i class="icon-Format-color-fill"></i>
                                                                            <div class="inner">
                                                                                <span>Color</span>
                                                                                <p><?= esc($car['color']) ? esc($car['color']) : 'N/A'; ?>
                                                                                </p>
                                                                            </div>
                                                                        </li>
                                                                    <?php endif; ?>
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
                                                                <?php if ($car['regular_price']) { ?>
                                                                    <p class="price">
                                                                        <?= isset($car['regular_price']) && !empty($car['regular_price']) ? '£' . htmlspecialchars($car['regular_price']) : '' ?>
                                                                    </p>
                                                                <?php } ?>
                                                                <!--<p class="price-sale"><?= isset($car['sale_price']) && !empty($car['sale_price']) ? '£' . htmlspecialchars($car['sale_price']) : 'Contact for price' ?></p>-->
                                                                <?= isset($car['sale_price']) && !empty($car['sale_price']) ? '<p class="price-sale">£' . htmlspecialchars($car['sale_price']) . '</p>' : '<p class="price-sale" style="font-size:15px;">Contact for price</p>' ?>
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
    <!-- Previous Page Link -->
    <a class="prev page-numbers" href="<?= $currentPage > 1 ? base_url("cars/page/" . ($currentPage - 1) . '?' . http_build_query($request->getGet())) : '#' ?>">
        <i class="icon-3"></i>
    </a>

    <!-- Pagination Numbers -->
    <?php
    $range = 3; // Number of pages to show
    $start = max(1, $currentPage - floor($range / 2));
    $end = min($totalPages, $start + $range - 1);

    // Adjust start if end is at max
    $start = max(1, $end - $range + 1);

    if ($start > 1): ?>
        <a class="page-numbers" href="<?= base_url("cars/page/1?" . http_build_query($request->getGet())) ?>">1</a>
        <?php if ($start > 2): ?>
            <span class="dots">...</span>
        <?php endif; ?>
    <?php endif; ?>

    <?php for ($i = $start; $i <= $end; $i++): ?>
        <a class="page-numbers <?= $i == $currentPage ? 'active' : '' ?>" href="<?= base_url("cars/page/" . $i . '?' . http_build_query($request->getGet())) ?>"><?= $i ?></a>
    <?php endfor; ?>

    <?php if ($end < $totalPages): ?>
        <?php if ($end < $totalPages - 1): ?>
            <span class="dots">...</span>
        <?php endif; ?>
        <a class="page-numbers" href="<?= base_url("cars/page/" . $totalPages . '?' . http_build_query($request->getGet())) ?>"><?= $totalPages ?></a>
    <?php endif; ?>

    <!-- Next Page Link -->
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
                        <?php else: ?>
                            <div class="no-results">
                                <p>No Results Found!!!</p>
                            </div>
                        <?php endif; ?>
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