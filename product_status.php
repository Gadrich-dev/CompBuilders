<?php
$product1 = "Redragon K617GG FIZZ RGB Mechanical Keyboard";
$price1 = 2499;
$availability1 = "In Stock";
$discount1 = "Discount Available";

$product2 = "Redragon M812 RGB Wired Gaming Mouse";
$price2 = 1299;
$availability2 = "In Stock";
$discount2 = "No Discount";

$product3 = "NUBWO Gaming Headset";
$price3 = 1599;
$availability3 = "Low Stock";
$discount3 = "Discount Available";

$product4 = "Keytech Cyborg ROG Micro ATX PC Case";
$price4 = 3700;
$availability4 = "Out of Stock";
$discount4 = "No Discount";

$product5 = "Keychron K2 V2 Bluetooth Mechanical Keyboard";
$price5 = 4700;
$availability5 = "In Stock";
$discount5 = "Discount Available";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Product Availability and Discounts</title>
    <style>
        body {
            margin: 0;
            padding: 40px 20px;
            background: #07151b;
            color: #e9f2f3;
            font-family: Arial, sans-serif;
        }

        main {
            max-width: 1000px;
            margin: auto;
        }

        h1 {
            margin-bottom: 8px;
        }

        p {
            color: #a8b8bd;
        }

        .table-box {
            overflow-x: auto;
            border: 1px solid #28505a;
            border-radius: 10px;
            background: #0c2028;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            text-align: left;
        }

        th,
        td {
            padding: 14px;
            border-bottom: 1px solid #28505a;
        }

        th {
            color: #39e4e6;
        }

        .price {
            white-space: nowrap;
        }
    </style>
</head>
<body>
    <main>
        <p>COMP BUILDERS · PRODUCT LIST</p>
        <h1>Product Availability and Discounts</h1>

        <div class="table-box">
            <table>
                <tr>
                    <th>Product Name</th>
                    <th>Product Price</th>
                    <th>Availability</th>
                    <th>Discount Status</th>
                </tr>
                <tr>
                    <td><?php echo $product1; ?></td>
                    <td class="price">₱<?php echo number_format($price1, 2); ?></td>
                    <td><?php echo $availability1; ?></td>
                    <td><?php echo $discount1; ?></td>
                </tr>
                <tr>
                    <td><?php echo $product2; ?></td>
                    <td class="price">₱<?php echo number_format($price2, 2); ?></td>
                    <td><?php echo $availability2; ?></td>
                    <td><?php echo $discount2; ?></td>
                </tr>
                <tr>
                    <td><?php echo $product3; ?></td>
                    <td class="price">₱<?php echo number_format($price3, 2); ?></td>
                    <td><?php echo $availability3; ?></td>
                    <td><?php echo $discount3; ?></td>
                </tr>
                <tr>
                    <td><?php echo $product4; ?></td>
                    <td class="price">₱<?php echo number_format($price4, 2); ?></td>
                    <td><?php echo $availability4; ?></td>
                    <td><?php echo $discount4; ?></td>
                </tr>
                <tr>
                    <td><?php echo $product5; ?></td>
                    <td class="price">₱<?php echo number_format($price5, 2); ?></td>
                    <td><?php echo $availability5; ?></td>
                    <td><?php echo $discount5; ?></td>
                </tr>
            </table>
        </div>
    </main>
</body>
</html>
