
<?php
require_once '../model/Bestellung.php';
require_once '../model/Products.php';

if (!isset($_GET['ordernum'])) {
    die('OrderNum nicht angegeben.');
}

$ordernum = (int)$_GET['ordernum'];
$con = Bestellung::dbconn();

$sql = 'SELECT * FROM Bestellung WHERE ordernum = :ordernum';
$stmt = $con->prepare($sql);
$stmt->bindParam(':ordernum', $ordernum, PDO::PARAM_INT);
$stmt->execute();
$bestellungen = $stmt->fetchAll(PDO::FETCH_ASSOC);

if (empty($bestellungen)) {
    die('Keine Bestellungen gefunden.');
}

$produkte = [];
foreach ($bestellungen as $bestellung) {
    $sql = 'SELECT * FROM products WHERE p_id = :p_id';
    $stmt = $con->prepare($sql);
    $stmt->bindParam(':p_id', $bestellung['p_id'], PDO::PARAM_INT);
    $stmt->execute();
    $produkt = $stmt->fetch(PDO::FETCH_ASSOC);
    $produkt['amount'] = $bestellung['amount']; // Füge die Amount-Information hinzu
    $produkte[] = $produkt;
}
?>

<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <title>Bestelldetails</title>
</head>
<body>
<h1>Bestelldetails für OrderNum <?php echo $ordernum; ?></h1>
<table border="1">
    <thead>
    <tr>
        <th>Product ID</th>
        <th>Product Name</th>
        <th>Price</th>
        <th>Amount</th>
        <th>Role</th>
        <th>Details</th>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($produkte as $produkt): ?>
        <tr>
            <td><?php echo $produkt['p_id']; ?></td>
            <td><?php echo $produkt['p_name']; ?></td>
            <td><?php echo $produkt['price']; ?></td>
            <td><?php echo $produkt['amount']; ?></td>
            <td><?php echo $produkt['role']; ?></td>
            <td><?php echo $produkt['details']; ?></td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>
</body>
</html>
