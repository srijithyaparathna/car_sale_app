<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Car List</title>
</head>
<body>
    <h1>Car List</h1>
    
    <form method="get" action="<?= base_url('/cars_filter') ?>">
        <input type="text" name="condition" placeholder="Condition" value="<?= esc($filters['condition'] ?? '') ?>">
        <input type="text" name="type" placeholder="Type" value="<?= esc($filters['type'] ?? '') ?>">
        <input type="text" name="transmission" placeholder="Transmission" value="<?= esc($filters['transmission'] ?? '') ?>">
        <input type="text" name="driver_type" placeholder="Driver Type" value="<?= esc($filters['driver_type'] ?? '') ?>">
        <input type="text" name="fuel_type" placeholder="Fuel Type" value="<?= esc($filters['fuel_type'] ?? '') ?>">
        <input type="text" name="color" placeholder="Color" value="<?= esc($filters['color'] ?? '') ?>">
        <input type="text" name="engine_size" placeholder="Engine Size" value="<?= esc($filters['engine_size'] ?? '') ?>">
        <input type="text" name="regular_price" placeholder="Price Range (e.g., 5000-15000)" value="<?= esc($filters['regular_price'] ?? '') ?>">
        <input type="text" name="mileage" placeholder="Mileage (max)" value="<?= esc($filters['mileage'] ?? '') ?>">
        <input type="text" name="year" placeholder="Year (e.g., 2015-2020)" value="<?= esc($filters['year'] ?? '') ?>">
        <button type="submit">Filter</button>
    </form>

    <table border="1">
        <thead>
            <tr>
                <th>Title</th>
                <th>Year</th>
                <th>Price</th>
                <th>Mileage</th>
                <th>Description</th>
                <!-- Add more columns as needed -->
            </tr>
        </thead>
        <tbody>
            <?php if (!empty($cars)): ?>
                <?php foreach ($cars as $car): ?>
                    <tr>
                        <td><?= esc($car['title']) ?></td>
                        <td><?= esc($car['year']) ?></td>
                        <td><?= esc($car['regular_price']) ?></td>
                        <td><?= esc($car['mileage']) ?></td>
                        <td><?= esc($car['description']) ?></td>
                        <!-- Add more columns as needed -->
                    </tr>
                <?php endforeach; ?>
            <?php else: ?>
                <tr>
                    <td colspan="5">No cars found.</td>
                </tr>
            <?php endif; ?>
        </tbody>
    </table>
</body>
</html>
