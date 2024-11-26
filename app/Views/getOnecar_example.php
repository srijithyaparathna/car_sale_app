<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Car Details</title>
    <link rel="stylesheet" href="<?= base_url('css/style.css'); ?>"> <!-- Add your CSS file here -->
</head>
<body>
    <div class="container">
        <h1>Car Details</h1>
        <div class="car-details">
            <h2><?= esc($car['title']); ?></h2>
            <p><strong>Type:</strong> <?= esc($car['type']); ?></p>
            <p><strong>Year:</strong> <?= esc($car['year']); ?></p>
            <p><strong>Condition:</strong> <?= esc($car['condition']); ?></p>
            <p><strong>Transmission:</strong> <?= esc($car['transmission']); ?></p>
            <p><strong>Driver Type:</strong> <?= esc($car['driver_type']); ?></p>
            <p><strong>Fuel Type:</strong> <?= esc($car['fuel_type']); ?></p>
            <p><strong>Doors:</strong> <?= esc($car['doors']); ?></p>
            <p><strong>Color:</strong> <?= esc($car['color']); ?></p>
            <p><strong>Seats:</strong> <?= esc($car['seats']); ?></p>
            <p><strong>Description:</strong> <?= esc($car['description']); ?></p>
            <p><strong>Price Type:</strong> <?= esc($car['price_type']); ?></p>
            <p><strong>Regular Price:</strong> <?= esc($car['regular_price']); ?></p>
            <p><strong>Sale Price:</strong> <?= esc($car['sale_price']); ?></p>
            
            <h3>Features:</h3>
<div id="tf-features">

    <div class="form-group">
        <label>Request Price Label</label>
        <div class="group-select">
            <?php foreach (['A/C: Front', 'A/C: Rear', 'Backup Camera', 'Cruise Control', 'Navigation', 'Power Locks'] as $feature): ?>
                <?php if (isset($car['features'][$feature]) && $car['features'][$feature] === "true"): ?>
                    <div class="listing-feature-wrap"><i class="icon-Vector-32"></i><?= esc($feature); ?></div>
                <?php endif; ?>
            <?php endforeach; ?>
        </div>
    </div>

    <div class="form-group">
        <label>Entertainment</label>
        <div class="group-select">
            <?php foreach (['AM/FM Stereo', 'CD Player', 'DVD System', 'MP3 Player', 'Portable Audio', 'Premium Audio'] as $feature): ?>
                <?php if (isset($car['features'][$feature]) && $car['features'][$feature] === "true"): ?>
                    <div class="listing-feature-wrap"><i class="icon-Vector-32"></i><?= esc($feature); ?></div>
                <?php endif; ?>
            <?php endforeach; ?>
        </div>
    </div>

    <div class="form-group">
        <label>Safety</label>
        <div class="group-select">
            <?php foreach (['Airbag: Driver', 'Airbag: Passenger', 'Antilock Brakes', 'Bluetooth', 'Hands-Free', 'Fog Lights'] as $feature): ?>
                <?php if (isset($car['features'][$feature]) && $car['features'][$feature] === "true"): ?>
                    <div class="listing-feature-wrap"><i class="icon-Vector-32"></i><?= esc($feature); ?></div>
                <?php endif; ?>
            <?php endforeach; ?>
        </div>
    </div>

    <div class="form-group">
        <label>Windows</label>
        <div class="group-select">
            <?php foreach (['Power Windows', 'Windows Defroster', 'Rear Window', 'Wiper Tinted Glass', 'Sunroof', 'Tow Package'] as $feature): ?>
                <?php if (isset($car['features'][$feature]) && $car['features'][$feature] === "true"): ?>
                    <div class="listing-feature-wrap"><i class="icon-Vector-32"></i><?= esc($feature); ?></div>
                <?php endif; ?>
            <?php endforeach; ?>
        </div>
    </div>

    <div class="form-group">
        <label>Seats</label>
        <div class="group-select">
            <?php foreach (['Bucket Seats', 'Heated Seats', 'Leather Interior', 'Memory Seats', 'Power Seats', 'Third Row Seats'] as $feature): ?>
                <?php if (isset($car['features'][$feature]) && $car['features'][$feature] === "true"): ?>
                    <div class="listing-feature-wrap"><i class="icon-Vector-32"></i><?= esc($feature); ?></div>
                <?php endif; ?>
            <?php endforeach; ?>
        </div>
    </div>

</div>

            <p><strong>Ad Status:</strong> <?= esc($car['ad_status']); ?></p>
            <p><strong>Created Date:</strong> <?= esc($car['created_date']); ?></p>
        </div>
    </div>
</body>
</html>
