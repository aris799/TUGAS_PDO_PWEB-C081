<?php 
    include('function.php');

    $id = $_GET["productCode"];
    $product = showData("SELECT * FROM products WHERE productCode='$id'")[0];

    if(isset($_POST["submit"])){
        updateproduct($_POST);
        echo "<script>
                alert('The selected product data has been successfully changed');
                document.location.href = 'index1.php';
            </script>";
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Product Data</title>
</head>

<body>
    <h1>Update Product Data</h1>

    <form action="" method="post">
        <table>
            <tr>
                <td><input type="hidden" name="productCode" id="productCode" value="<?= $product["productCode"]; ?>"></td>
            </tr>

            <tr>
                <td><label for="productName">Product Name :</label></td>
                <td><input type="text" name="productName" id="productName" value="<?= $product["productName"]; ?>"></td>
            </tr>

            <tr>
                <td><label for="productLine">Product Line :</label></td>
                <td><select type="text" name="productLine" id="productLine">
                        <option value="<?= $product["productLine"]; ?>"><?= $product["productLine"]; ?></option>
                        <?php 
                        $queryProductLine = "SELECT productLine FROM productlines";
                        $result = $conn->query($queryProductLine);

                        while($data = $result->fetch(PDO::FETCH_BOTH)) : ?>
                        <option value="<?= $data["productLine"] ?>"><?= $data["productLine"]  ?></option>
                        <?php endwhile; ?>
                    </select></td>
            </tr>

            <tr>
                <td><label for="productScale">Product Scale :</label></td>
                <td><input type="text" name="productScale" id="productScale" value="<?= $product["productScale"]; ?>"></td>
            </tr>

            <tr>
                <td><label for="productVendor">Product Vendor :</label></td>
                <td><input type="text" name="productVendor" id="productVendor" value="<?= $product["productVendor"]; ?>"></td>
            </tr>

            <tr>
                <td><label for="productDescription">Product Description :</label></td>
                <td><input type="text" name="productDescription" id="productDescription" value="<?= $product["productDescription"]; ?>"></td>
            </tr>

            <tr>
                <td><label for="quantityInStock">Quantity :</label></td>
                <td><input type="text" name="quantityInStock" id="quantityInStock" value="<?= $product["quantityInStock"]; ?>"></td>
            </tr>

            <tr>
                <td><label for="buyPrice">Price :</label></td>
                <td><input type="text" name="buyPrice" id="buyPrice" value="<?= $product["buyPrice"]; ?>"></td>
            </tr>

            <tr>
                <td><label for="MSRP">MSRP :</label></td>
                <td><input type="text" name="MSRP" id="MSRP" value="<?= $product["MSRP"]; ?>"></td>
            </tr>
            
        </table>
        <br><br>
        <button type="submit" name="submit">Submit</button>
    </form>
</body>

</html>