<?php
//include "../model/User.php";
//include "links_icon.php";
//
//?>
<!--<!doctype html>-->
<!--<html lang="en">-->
<!--<head>-->
<!--    <meta charset="UTF-8">-->
<!--    <meta name="viewport"-->
<!--          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">-->
<!--    <meta http-equiv="X-UA-Compatible" content="ie=edge">-->
<!--       <title>Login</title>-->
<!--    <style>-->
<!--        body {-->
<!--            background-image: url('pics/background.PNG');-->
<!--            background-size: cover;-->
<!--            background-attachment: fixed;-->
<!--            margin: 0;-->
<!--        }-->
<!--        .headline {-->
<!--            font-size: 70px;-->
<!--            color: white;-->
<!--            text-align: center;-->
<!--            margin-top: 20px;-->
<!--        }-->
<!--        .textcolor {-->
<!--            color: white;-->
<!--        }-->
<!--        .form-container {-->
<!--            padding: 20px;-->
<!--            border-radius: 10px;-->
<!--            position: absolute;-->
<!--            top: 350px;-->
<!--            left: 700px;-->
<!--            width: 400px;-->
<!--        }-->
<!--        .form-container .input-group {-->
<!--            margin-bottom: 20px;-->
<!--        }-->
<!--        .form-container input[type="text"] {-->
<!--            width: 100%;-->
<!--            font-size: 1rem;-->
<!--        }-->
<!--        .form-container input[type="password"] {-->
<!--            width: 100%;-->
<!--            font-size: 1rem;-->
<!--        }-->
<!--        .form-container .btn {-->
<!--            width: 100%;-->
<!--        }-->
<!--        .form-container p {-->
<!--            text-align: center;-->
<!--        }-->
<!--    </style>-->
<!--</head>-->
<!--<body>-->
<!--<h1 class="headline">ORDERS</h1>-->
<!--<form action="showorder.php" method="post">-->
<!--    <div class="form-container">-->
<!---->
<!--    </div>-->
<!--</form>-->
<!--</body>-->
<!--</html>-->

<?php
//include_once '../model/Bestellung.php';
//
//$u_id = 1;
//$bestellungen = Bestellung::findOrderNum($u_id);
//?>
<!---->
<!--<!DOCTYPE html>-->
<!--<html lang="de">-->
<!--<head>-->
<!--    <meta charset="UTF-8">-->
<!--    <title>Bestellungen</title>-->
<!--</head>-->
<!--<body>-->
<!--<h1>Bestellungen von User --><?php //echo $u_id?><!--</h1>-->
<!--    <table border="1">-->
<!--        <thead>-->
<!--        <tr>-->
<!--            <th>OrderNum</th>-->
<!--            <th>Date</th>-->
<!--            <th>Amount</th>-->
<!--            <th>Products</th>-->
<!--        </tr>-->
<!--        </thead>-->
<!--        <tbody>-->
<!--        --><?php //foreach ($bestellungen as $bestellung): ?>
<!--            <tr>-->
<!--                <td><a href="orderdetails.php?--><?php //echo $bestellung->getOrdernum() ?><!--">--><?php //echo $bestellung->getOrdernum(); ?><!--</a></td>-->
<!--                <td>--><?php //echo $bestellung->getDatum(); ?><!--</td>-->
<!--                <td>--><?php //echo $bestellung->getAmount(); ?><!--</td>-->
<!--                <td>--><?php //echo implode(', ', $bestellung->getProdukte()); ?><!--</td>-->
<!--            </tr>-->
<!--        --><?php //endforeach; ?>
<!--        </tbody>-->
<!--    </table>-->
<!--</body>-->
<!--</html>-->

<?php
require_once '../model/Bestellung.php';

$u_id = 1; // Beispiel-User-ID
$bestellungen = Bestellung::findOrderNum($u_id);
?>

<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <title>Bestellungen</title>
</head>
<body>
<h1>Bestellungen von User <?php echo $u_id; ?></h1>
<?php if (empty($bestellungen)): ?>
    <p>Keine Bestellungen gefunden.</p>
<?php else: ?>
    <table border="1">
        <thead>
        <tr>
            <th>OrderNum</th>
            <th>Date</th>
            <th>Details</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($bestellungen as $bestellung): ?>
            <tr>
                <td><?php echo $bestellung->getOrdernum(); ?></td>
                <td><?php echo $bestellung->getDatum(); ?></td>
                <td>
                    <a href="orderdetails.php?ordernum=<?php echo $bestellung->getOrdernum(); ?>">Details anzeigen</a>
                </td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
<?php endif; ?>
</body>
</html>
