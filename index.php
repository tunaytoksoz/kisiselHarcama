<?php
include_once 'layout/include/head.php';
include_once 'layout/include/header.php';
?>
<section class="mb-2 p-1">


<h3 id="spending" class="text-center mb-2">Harcama Ekle</h3>
    <form action="spending.php" enctype="multipart/form-data" method="post" class="m-5">
        <div class="form-group row">
            <label for="description" class="col-sm-2 col-form-label">Açıklama</label>
            <div class="col-sm-8 mb-2">
                <input type="text" class="form-control" id="description" name="description" placeholder="Ekmek, El Feneri, Doğalgaz Faturası...">
            </div>
        </div>
        <div class="form-group row">
            <label for="price" class="col-sm-2 col-form-label">Fiyat</label>
            <div class="col-sm-8 mb-2">
                <input type="text" class="form-control" id="price" name="price" placeholder="TL">
            </div>
        </div>
        <div class="form-group row">
            <label for="quantity" class="col-sm-2 col-form-label">Miktar</label>
            <div class="col-sm-8 mb-2">
                <input type="text" class="form-control" id="quantity" name="quantity" placeholder="adet, kg...">
            </div>
        </div>
        <div class="form-group row">
            <label for="date" class="col-sm-2 col-form-label">Harcama Tarihi</label>
            <div class="col-sm-8 mb-2">
                <input type="text" class="form-control" id="date" name="date" placeholder="2022-01-01">
            </div>
        </div>
        <div class="form-group row">
            <span class="col-sm-9"></span>
            <button type="submit" class="btn btn-primary col-sm-1">Ekle</button>
        </div>
      </form>

    <?php
    $sql = "SELECT * FROM spending ORDER BY id DESC LIMIT 4";
    $result = mysqli_query($conn, $sql);
    $i=1;
    ?>
    <h3 class="text-center">Harcama Tablom</h3>
    <table class="table table-borderless m-5">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Açıklama</th>
            <th scope="col">Fiyat</th>
            <th scope="col">Miktar</th>
            <th scope="col">Harcama Tarihi</th>
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
         </tr>
      <?php $i++; } ?>
        </tbody>
    </table>


    <h3 id="income" class="text-center mb-2">Gelir Ekle</h3>
    <form class="m-5" action="income.php" enctype="multipart/form-data" method="post">
        <div class="form-group row">
            <label for="description" class="col-sm-2 col-form-label">Açıklama</label>
            <div class="col-sm-8 mb-2">
                <input type="text" class="form-control" id="description" name="description" placeholder="Kira, Coin Satışı, Maaş...">
            </div>
        </div>
        <div class="form-group row">
            <label for="price" class="col-sm-2 col-form-label">Fiyat</label>
            <div class="col-sm-8 mb-2">
                <input type="text" class="form-control" id="price" name="price" placeholder="TL">
            </div>
        </div>
        <div class="form-group row">
            <label for="quantity" class="col-sm-2 col-form-label">Miktar</label>
            <div class="col-sm-8 mb-2">
                <input type="text" class="form-control" id="quantity" name="quantity" placeholder="adet,kg...">
            </div>
        </div>
        <div class="form-group row">
            <label for="date" class="col-sm-2 col-form-label">Harcama Tarihi</label>
            <div class="col-sm-8 mb-2">
                <input type="text" class="form-control" id="date" name="date" placeholder="2022-01-01">
            </div>
        </div>
        <div class="form-group row">
            <span class="col-sm-9"></span>
            <button type="submit" class="btn btn-primary col-sm-1">Ekle</button>
        </div>
    </form>

    <?php
    $sql = "SELECT * FROM income ORDER BY id DESC LIMIT 2";
    $result = mysqli_query($conn, $sql);
    $i = 1;
    ?>

    <h3 class="text-center">Gelir Tablom</h3>
    <table class="table table-borderless m-5">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Açıklama</th>
            <th scope="col">Fiyat</th>
            <th scope="col">Miktar</th>
            <th scope="col">Gelir Tarihi</th>
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
        </tr>
        <?php $i++; } ?>
        </tbody>
    </table>




</section>
<?php
include_once 'layout/include/footer.php';
?>