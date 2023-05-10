<?php 
    include('function.php');
    if(isset ($_POST["submit"])){
       addproduct($_POST);
        echo "
                <script>
                    alert('new product data has been added');
                    document.location.href = 'index1.php';
                </script>
            ";
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert Product Data</title>
</head>

<body>
    <h2>Insert New Product Data</h2>

    <form action="" method="post">
        <table>
            <tr>
                <td><label for="productCode">Product Code :</label></td>
                <td><input type="text" name="productCode" id="productCode"></td>
            </tr>
            <tr>
                <td><label for="productName">Product Name :</label></td>
                <td><input type="text" name="productName" id="productName"></td>
            </tr>
            <tr>
                <td><label for="productLine">Product Line :</label></td>
                <td><select type="text" name="productLine" id="productLine">
                        <option>Choose One</option>
                        <?php 
                        $queryProductLine = "SELECT productLine FROM productlines";
                        $result = $conn->query($queryProductLine);

                        while($data = $result->fetch(PDO::FETCH_BOTH)) : ?>
                            <option value="<?= $data["productLine"] ?>"><?= $data["productLine"]  ?></option>
                            <?php endwhile; ?>
                    </select>
                </td>
            </tr>
            <tr>
                <td><label for="productScale">Product Scale :</label></td>
                <td><input type="text" name="productScale" id="productScale"></td>
            </tr>
            <tr>
                <td><label for="productVendor">Product Vendor :</label></td>
                <td><input type="text" name="productVendor" id="productVendor"></td>
            </tr>
            <tr>
                <td><label for="productDescription">Product Description :</label></td>
                <td><input type="text" name="productDescription" id="productDescription"></td>
            </tr>
            <tr>
                <td><label for="quantityInStock">Quantity :</label></td>
                <td><input type="text" name="quantityInStock" id="quantityInStock"></td>
            </tr>
            <tr>
                <td><label for="buyPrice">Price :</label></td>
                <td><input type="text" name="buyPrice" id="buyPrice"></td>
            </tr>
            <tr>
                <td><label for="MSRP">MSRP :</label></td>
                <td><input type="text" name="MSRP" id="MSRP"></td>
            </tr>
        </table>
        <br><br>
        <button type="submit" name="submit">Send</button>
    </form>
    <br><br>
    <a href="index1.php">Back to Database</a>
</body>

</html>     