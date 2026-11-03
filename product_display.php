<?php
$product1 = "Redragon K617GG FIZZ RGB Mechanical Keyboard";
$category1 = "Keyboard";
$price1 = 2499;
$quantity1 = 2;
$total1 = $price1 * $quantity1;

$product2 = "Redragon M812 RGB Wired Gaming Mouse";
$category2 = "Mouse";
$price2 = 1299;
$quantity2 = 1;
$total2 = $price2 * $quantity2;

$product3 = "NUBWO Gaming Headset";
$category3 = "Headset";
$price3 = 1599;
$quantity3 = 3;
$total3 = $price3 * $quantity3;

$product4 = "Keytech Cyborg ROG Micro ATX PC Case";
$category4 = "PC Case";
$price4 = 3700;
$quantity4 = 1;
$total4 = $price4 * $quantity4;

$product5 = "Keychron K2 V2 Bluetooth Mechanical Keyboard";
$category5 = "Keyboard";
$price5 = 4700;
$quantity5 = 2;
$total5 = $price5 * $quantity5;

$grandTotal = $total1 + $total2 + $total3 + $total4 + $total5;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dynamic Product Display</title>
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

        .number {
            text-align: right;
            white-space: nowrap;
        }

        .grand-total {
            margin-top: 16px;
            padding: 18px;
            border: 1px solid #28505a;
            border-radius: 10px;
            background: #0c2028;
            text-align: right;
            font-size: 20px;
        }

        .grand-total strong {
            color: #39e4e6;
        }
    </style>
</head>
<body>
    <main>
        <p>COMP BUILDERS · PRODUCT LIST</p>
        <h1>Dynamic Product Display</h1>

        <div class="table-box">
            <table>
                <tr>
                    <th>Product Name</th>
                    <th>Category</th>
                    <th class="number">Price</th>
                    <th class="number">Quantity</th>
                    <th class="number">Computed Total</th>
                </tr>
                <tr>
                    <td><?php echo $product1; ?></td>
                    <td><?php echo $category1; ?></td>
                    <td class="number">₱<?php echo $price1; ?></td>
                    <td class="number"><?php echo $quantity1; ?></td>
                    <td class="number">₱<?php echo number_format($total1, 2); ?></td>
                </tr>
                <tr>
                    <td><?php echo $product2; ?></td>
                    <td><?php echo $category2; ?></td>
                    <td class="number">₱<?php echo $price2; ?></td>
                    <td class="number"><?php echo $quantity2; ?></td>
                    <td class="number">₱<?php echo number_format($total2, 2); ?></td>
                </tr>
                <tr>
                    <td><?php echo $product3; ?></td>
                    <td><?php echo $category3; ?></td>
                    <td class="number">₱<?php echo $price3; ?></td>
                    <td class="number"><?php echo $quantity3; ?></td>
                    <td class="number">₱<?php echo number_format($total3, 2); ?></td>
                </tr>
                <tr>
                    <td><?php echo $product4; ?></td>
                    <td><?php echo $category4; ?></td>
                    <td class="number">₱<?php echo $price4; ?></td>
                    <td class="number"><?php echo $quantity4; ?></td>
                    <td class="number">₱<?php echo number_format($total4, 2); ?></td>
                </tr>
                <tr>
                    <td><?php echo $product5; ?></td>
                    <td><?php echo $category5; ?></td>
                    <td class="number">₱<?php echo $price5; ?></td>
                    <td class="number"><?php echo $quantity5; ?></td>
                    <td class="number">₱<?php echo number_format($total5, 2); ?></td>
                </tr>
            </table>
        </div>

        <div class="grand-total">
            Grand Total: <strong>₱<?php echo number_format($grandTotal, 2); ?></strong>
        </div>
    </main>
</body>
</html>
