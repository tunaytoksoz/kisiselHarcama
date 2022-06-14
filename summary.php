<?php
include_once 'layout/include/head.php';
include_once 'layout/include/header.php';
?>

<?php
$sql = "SELECT * FROM spending";
$result = mysqli_query($conn, $sql);
$toplam = 0;
$i=1;
?>
<hr>
<hr>
<h3 class="text-center">Harcama Tablom</h3>
<table class="table table-hover m-5">
    <thead>
    <tr>
        <th scope="col">#</th>
        <th scope="col">Açıklama</th>
        <th scope="col">Fiyat</th>
        <th scope="col">Miktar</th>
        <th scope="col">Harcama Tarihi</th>
        <th scope="col">Toplam Fiyatı</th>
    </tr>
    </thead>
    <tbody>
    <tr>
        <?php foreach ($result as $item) { ?>
        <td><?php echo $i ?></td>
        <td><?php echo $item['description'] ?></td>
        <td><?php echo $item['price']." TL" ?></td>
        <td><?php echo $item['quantity'] ?></td>
        <td><?php echo $item['date'] ?></td>
        <td><?php echo $item['totalPrice'] ?></td>
        <?php $toplam += $item['totalPrice']; ?>
    </tr>
    <?php  $i++;} ?>
    </tbody>
    <tbody>
    <tr>
        <th scope="col"></th>
        <th scope="col"></th>
        <th scope="col"></th>
        <th scope="col"></th>
        <th scope="col">Toplam: </th>
        <th scope="col"><?php echo $toplam." TL"; ?></th>

    </tr>
    </tbody>
</table>

<hr>
<hr>

<?php
$sql = "SELECT * FROM income";
$result = mysqli_query($conn, $sql);
$toplam = 0;
$i=1;
?>

<h3 class="text-center">Gelir Tablom</h3>
<table class="table table-hover m-5">
    <thead>
    <tr>
        <th scope="col">#</th>
        <th scope="col">Açıklama</th>
        <th scope="col">Fiyat</th>
        <th scope="col">Miktar</th>
        <th scope="col">Gelir Tarihi</th>
        <th scope="col">Toplam Fiyatı</th>
    </tr>
    </thead>
    <tbody>
    <tr>
        <?php foreach ($result as $item) { ?>
        <td><?php echo $i ?></td>
        <td><?php echo $item['description'] ?></td>
        <td><?php echo $item['price']." TL" ?></td>
        <td><?php echo $item['quantity'] ?></td>
        <td><?php echo $item['date'] ?></td>
        <td><?php echo $item['totalPrice'] ?></td>
        <?php $toplam += $item['totalPrice']; ?>
    </tr>
    <?php $i++; } ?>
    </tbody>
    <tbody>
    <tr>
        <th scope="col"></th>
        <th scope="col"></th>
        <th scope="col"></th>
        <th scope="col"></th>
        <th scope="col">Toplam: </th>
        <th scope="col"><?php echo $toplam." TL"; ?></th>


    </tr>
    </tbody>
</table>




<?php
include_once 'layout/include/footer.php';
?>
