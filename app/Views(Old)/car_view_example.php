<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cars</title>
    <style>
        .car-card {
            border: 1px solid #ddd;
            border-radius: 5px;
            padding: 20px;
            margin: 10px;
            max-width: 400px;
        }
        .car-card h2 {
            margin: 0;
        }
        .car-card p {
            margin: 5px 0;
        }
    </style>
</head>

<body>
    <div class="div">
        <h4>Test</h4>
        echo "<?= base_url('../writable/uploads/63/1721365261_d431a83cda008b70fe96.jpg') ?>";
        <img src="<?= base_url('1721283739_7fd46ef01c173091cf55.png') ?>" alt="" srcset="">
    </div>

    <?php foreach ($cars as $car): ?>
        <div class="car-card">
            <h2><?= $car['title'] ?: 'No Title' ?></h2>
            <p>Type: <?= $car['type'] ?></p>
            <p>Year: <?= $car['year'] ?></p>
            <p>Condition: <?= $car['condition'] ?></p>
            <p>Transmission: <?= $car['transmission'] ?></p>
            <p>Driver Type: <?= $car['driver_type'] ?></p>
            <p>Fuel Type: <?= $car['fuel_type'] ?></p>
            <p>Color: <?= $car['color'] ?></p>
            <p>Seats: <?= $car['seats'] ?></p>
            <p>Price Type: <?= $car['price_type'] ?></p>
            <p>Ad Status: <?= $car['ad_status'] ?></p>
            <p>Created Date: <?= $car['created_date'] ?></p>
            <p><?= $car['images'] ?></p>
            <?php
            $images = json_decode($car['images'], true);

            foreach ($images as $image) {
                echo base_url('/' . $image['img_url']);
                echo '<img src="' . base_url('/' . $image['img_url']) . '" alt="Car Image" />';
            }
            ?>
                                     
            <h3>Features:</h3>
            <ul>
                <?php foreach ($car['features'] as $feature => $enabled): ?>
                    <li><?= $feature ?>: <?= $enabled === "true" ? 'Yes' : 'No' ?></li>
                <?php endforeach; ?>
            </ul>
        </div>
    <?php endforeach; ?>
    
</body>
</html>
