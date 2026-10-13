<?php
// declaring variables and its values
// products - multi-dimensional array
$products = [
    'Samsung Galaxy' => ['price'=>15000, 'stock'=>100, 'sold'=>50],
    'Huawei' => ['price'=>12000, 'stock'=>100, 'sold'=>80],
    'Realme' => ['price'=>10000, 'stock'=>100, 'sold'=>20],
    'Oppo' => ['price'=>11000, 'stock'=>100, 'sold'=>30],
    'Redmi' => ['price'=>9000, 'stock'=>100, 'sold'=>40],
];

// to display every product inside the database (example only)
$devices = array_keys($products);
echo "Products: " . implode(', ', $devices) . PHP_EOL;
echo PHP_EOL;

// checking every product for threshold, best selling, highest sold, and highest revenue
$bestSellingBrand = null;
$highestSold = -1;

$highestRevenueBrand = null;
$highestRevenue = -1;

$lowStockProducts = [];
$lowStockThreshold = 25;

// revenue calculation (must be outside of the loop to get the total of the entire revenue) 
$total_revenue = 0;

// analyze every product before the interactive display loop.
foreach ($products as $brand => $product) {
    $remaining_stock = $product['stock'] - $product['sold'];
    $revenue = $product['price'] * $product['sold'];

    $total_revenue += $revenue;

    if ($product['sold'] > $highestSold) {
        $highestSold = $product['sold'];
        $bestSellingBrand = $brand;
    }

    if ($revenue > $highestRevenue) {
        $highestRevenue = $revenue;
        $highestRevenueBrand = $brand;
    }

    if ($remaining_stock <= $lowStockThreshold) {
        $lowStockProducts[] = $brand;
    }
}

// displaying of product details
foreach ($products as $brand => $product) {
    // calculation of revenues
    $remaining_stock = $product['stock'] - $product['sold'];
    $revenue = $product['price'] * $product['sold'];

    echo "Product: " . $brand . PHP_EOL;
    echo "Product's Price: " . $product['price'] . PHP_EOL;
    echo "Remaining Stock: " . $remaining_stock . PHP_EOL;
    echo "Quantity Sold: " . $product['sold'] . PHP_EOL;
    echo "Revenue: " . $revenue . PHP_EOL . PHP_EOL;

    $continue = strtolower(readline('Would you like to continue to the next product? (yes/no): '));
    echo PHP_EOL;

    if ($continue !== 'yes') {
        break;
    } 
}

// shows summary of the data analysis of the entire product collection/data
echo "Product: " . $brand . PHP_EOL;
echo 'Product`s Price: ' . $product['price'] . PHP_EOL;
echo 'Remaining Stock: ' . $remaining_stock . PHP_EOL;
echo 'Quantity Sold: ' . $product['sold'] . PHP_EOL;
echo 'Revenue: ' . $revenue . PHP_EOL;
echo PHP_EOL;