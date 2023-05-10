<?php 
    include('function.php');

    $id = $_GET["customerNumber"];
    $customer = showData("SELECT * FROM customers WHERE customerNumber=$id")[0];

    if(isset($_POST["submit"])){
        updatecustomer($_POST);
        echo "<script>
                alert('The selected customer data has been successfully changed');
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
    <title>Update Customer Data</title>
</head>

<body>
    <h2>Update Customer Data</h2>

    <form action="" method="post">
        <table>
            <tr>
                <td><input type="hidden" name="customerNumber" id="customerNumber"
                    value="<?= $customer["customerNumber"]; ?>"></td>
            </tr>

            <tr>
                <td><label for="customerName">Customer Name :</label></td>
                <td><input type="text" name="customerName" id="customerName" value="<?= $customer["customerName"]; ?>"></td>
            </tr>

            <tr>
                <td><label for="contactLastName">Contact Last Name :</label></td>
                <td><input type="text" name="contactLastName" id="contactLastName" value="<?= $customer["contactLastName"]; ?>"></td>
            </tr>

            <tr>
                <td><label for="contactFirstName">Contact First Name :</label></td>
                <td><input type="text" name="contactFirstName" id="contactFirstName" value="<?= $customer["contactFirstName"]; ?>"></td>
            </tr>

            <tr>
                <td><label for="phone">Phone :</label></td>
                <td><input type="text" name="phone" id="phone" value="<?= $customer["phone"]; ?>"></td>
            </tr>

            <tr>
                <td><label for="addressline1">Address Line 1 :</label></td>
                <td><input type="text" name="addressLine1" id="addressLine1" value="<?= $customer["addressLine1"]; ?>"></td>
            </tr>

            <tr>
                <td><label for="addressLine2">Address Line 2 :</label></td>
                <td><input type="text" name="addressLine2" id="addressLine2" value="<?= $customer["addressLine2"]; ?>"></td>
            </tr>

            <tr>
                <td><label for="city">City :</label></td>
                <td><input type="text" name="city" id="city" value="<?= $customer["city"]; ?>"></td>
            </tr>

            <tr>
                <td><label for="state">State :</label></td>
                <td><input type="text" name="state" id="state" value="<?= $customer["state"]; ?>"></td>
            </tr>

            <tr>
                <td><label for="postalCode">Postal Code :</label></td>
                <td><input type="text" name="postalCode" id="postalCode" value="<?= $customer["postalCode"]; ?>"></td>
            </tr>

            <tr>
                <td><label for="country">Country :</label></td>
                <td><input type="text" name="country" id="country" value="<?= $customer["country"]; ?>"></td>
            </tr>

            <tr>
                <td><label for="salesRepEmployeeNumber">Sales Number :</label></td>
                <td><select type="text" name="salesRepEmployeeNumber" id="salesRepEmployeeNumber">
                        <option value="<?= $customer["salesRepEmployeeNumber"]; ?>">
                            <?= $customer["salesRepEmployeeNumber"]; ?>
                        </option>
                        <?php
                            $customerEmployeeNumber = "SELECT employeeNumber FROM employees";
                            $getEmployeeNumber = $conn->query($customerEmployeeNumber);

                            while($data = $getEmployeeNumber->fetch(PDO::FETCH_BOTH)): ?>
                        <option value="<?= $data["employeeNumber"] ?>">
                            <?= $data["employeeNumber"]  ?></option>
                        <?php endwhile; ?>
                    </select></td>
            </tr>

            <tr>
                <td><label for="creditLimit">Credit Limit :</label></td>
                <td><input type="text" name="creditLimit" id="creditLimit" value="<?= $customer["creditLimit"]; ?>"></td>
            </tr>
            
        </table>
        <br><br>
        <button type="submit" name="submit">Submit</button>
    </form>
</body>

</html>