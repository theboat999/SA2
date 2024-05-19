<?php
// List i2 ng array of fruits
$fruits = [
    [
        'image' => 'banana.jpg',
        'name' => 'Banana',
        'desc' => 'Color Yellow',
        'facts' => 'The worlds most popular fruit, full of potassium.'
    ],
    [
        'image' => 'apple.jpg',
        'name' => 'Apple',
        'desc' => 'Color Red or Green',
        'facts' => 'A good source of fiber, comes in many colors.'
    ],
    [
        'image' => 'mango.jpg',
        'name' => 'Mango',
        'desc' => 'Color Yellow, orange, red and purple',
        'facts' => 'The king of fruits, has a sweet, tropical flavor.'
    ],
    [
        'image' => 'grapes.jpg',
        'name' => 'Grapes',
        'desc' => 'Color Red, green, purple, black, and yellow',
        'facts' => 'Grow in clusters, can be red, green, or purple.'
    ],
    [
        'image' => 'blueberries.jpg',
        'name' => 'Blueberries',
        'desc' => 'Color Deep purple',
        'facts' => 'Tiny and packed with antioxidants'
    ],
    [
        'image' => 'strawberries.jpg',
        'name' => 'Strawberries',
        'desc' => 'Color White, pink, yellow, and golden',
        'facts' => 'Sweet and juicy, with a bright red color.'
    ],
    [
        'image' => 'cherries.jpg',
        'name' => 'Cherries',
        'desc' => 'Color yellow, orange, purple, or black',
        'facts' => 'Small and tart or sweet, with a pit in the center.'
    ],
    [
        'image' => 'grapefruit.jpg',
        'name' => 'Grapefruit',
        'desc' => 'Color White, Pink and Ruby Red',
        'facts' => 'A citrus fruit with a tangy taste, high in vitamin C.'
    ],
    [
        'image' => 'avocado.jpg',
        'name' => 'Avocado',
        'desc' => 'Color Brown',
        'facts' => ' A creamy green fruit, high in healthy fats.'
    ],
    [
        'image' => 'watermelon.jpg',
        'name' => 'Watermelon',
        'desc' => 'Color Green',
        'facts' => 'Large and refreshing, mostly water with a sweet taste.'
    ]
];

// Dito para ma sort yung names ng fruits alphabetically
usort($fruits, function($a, $b) {
    return strcmp($a['name'], $b['name']);
});
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Fruits</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <table>
        <thead>
            <tr>
                <th>Image</th>
                <th>Name</th>
                <th>Description</th>
                <th>Facts</th>
            </tr>
        </thead>
        <tbody>
            <!-- Loop function para mapakita yung fruits -->
            <?php foreach ($fruits as $fruit) : ?>
            <tr>
                <td><img src="<?php echo $fruit['image']; ?>" alt="<?php echo $fruit['name']; ?>" width="100"></td>
                <td><?php echo $fruit['name']; ?></td>
                <td><?php echo $fruit['desc']; ?></td>
                <td><?php echo $fruit['facts']; ?></td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>
