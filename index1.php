<?php 
    include ('function.php');

    $customer = showData("SELECT*FROM customers");
    $product = showData("SELECT*FROM products");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Database</title>
</head>

<body>
    <center><h1>Customers Table</h1></center>
    <table border="1" cellpadding="10px" cellspacing="0">
        <tr>
            <th>Customer Number</th>
            <th>Customer Name</th>
            <th>Contact Name</th>
            <th>Phone</th>
            <th>Address</th>
            <th>City</th>
            <th>State</th>
            <th>Postal Code</th>
            <th>Country</th>
            <th>Sales Employee Number</th>
            <th>Credit Limit</th>
            <th>ACTION</th>
        </tr>
        <?php foreach($customer as $customerRow) : ?>
        <tr>
            <td><?= $customerRow["customerNumber"]?></td>
            <td><?= $customerRow["customerName"]?></td>
            <td><?= $customerRow["contactFirstName"]," ", $customerRow["contactLastName"]?></td>
            <td><?= $customerRow["phone"]?></td>
            <td><?= $customerRow["addressLine1"], " ", $customerRow["addressLine2"]?></td>
            <td><?= $customerRow["city"]?></td>
            <td><?= $customerRow["state"]?></td>
            <td><?= $customerRow["postalCode"]?></td>
            <td><?= $customerRow["country"]?></td>
            <td><?= $customerRow["salesRepEmployeeNumber"]?></td>
            <td><?= $customerRow["creditLimit"]?></td>
            <td><a href="UpdateCustomer.php?customerNumber=<?= $customerRow["customerNumber"]; ?>">Update</a> <a
                    href="DeleteCustomer.php?customerNumber=<?= $customerRow["customerNumber"]; ?>">Delete</a>
            </td>
        </tr>
        <?php endforeach; ?>
    </table>
    <br><br>
    <h2><a href="InsertCustomers.php">Insert New Customer Data</a></h2>
    <br><br>

    <center><h1>Product Table</h1></center>
    <table border="1" cellpadding="10px" cellspacing="0">
        <tr>
            <th>Product Code</th>
            <th>Product Name</th>
            <th>Product Line</th>
            <th>Product Scale</th>
            <th>Product Vendor</th>
            <th>Product Description</th>
            <th>Stock</th>
            <th>Price</th>
            <th>MSRP</th>
            <th>ACTION</th>
        </tr>
        <?php foreach($product as $productRow) : ?>
        <tr>
            <td><?= $productRow["productCode"]  ?></td>
            <td><?= $productRow["productName"]  ?></td>
            <td><?= $productRow["productLine"]  ?></td>
            <td><?= $productRow["productScale"]  ?></td>
            <td><?= $productRow["productVendor"]  ?></td>
            <td><?= $productRow["productDescription"]  ?></td>
            <td><?= $productRow["quantityInStock"]  ?></td>
            <td><?= $productRow["buyPrice"]  ?></td>
            <td><?= $productRow["MSRP"]  ?></td>
            <td><a href="UpdateProduct.php?productCode=<?= $productRow["productCode"]; ?>">Update</a> <a
                    href="DeleteProduct.php?productCode=<?= $productRow["productCode"]; ?>">Delete</a></td>
            </td>
        </tr>
        <?php endforeach; ?>
    </table>
    <br><br>
    <h2><a href="InsertProduct.php">Insert New Product Data</a></h2>
</body>

</html>