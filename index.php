<?php
include_once 'layout/include/head.php';
include_once 'layout/include/header.php';
?>
<section>


<h3 id="spending" class="text-center p-3">Harcama Ekle</h3>
    <form action="spending.php" enctype="multipart/form-data" method="post" class="">
        <div class="form-group row">
            <div class="col-sm-2"></div>
            <label for="description" class="col-sm-2 col-form-label">Açıklama</label>
            <div class="col-sm-4 mb-2">
                <input type="text" class="form-control" id="description" name="description" placeholder="Ekmek, Kira, Doğalgaz Faturası...">
            </div>
            <div class="col-sm-2"></div>
        </div>
        <div class="form-group row">
            <div class="col-sm-2"></div>
            <label for="price" class="col-sm-2 col-form-label">Fiyat</label>
            <div class="col-sm-4 mb-2">
                <input type="text" class="form-control" id="price" name="price" oninput="multiply()" placeholder="TL">
            </div>
            <div class="col-sm-2"></div>
        </div>
        <div class="form-group row">
            <div class="col-sm-2"></div>
            <label for="quantity" class="col-sm-2 col-form-label">Miktar</label>
            <div class="col-sm-4 mb-2">
                <input type="text" class="form-control" id="quantity" name="quantity" oninput="multiply()" placeholder="adet, kg...">
            </div>
            <div class="col-sm-2"></div>
        </div>
        <div class="form-group row">
            <div class="col-sm-2"></div>
            <label for="date" class="col-sm-2 col-form-label">Harcama Tarihi</label>
            <div class="col-sm-4 mb-2">
                <input type="text" class="form-control" id="date" name="date" placeholder="2022-01-01">
            </div>
            <div class="col-sm-2"></div>
        </div>
        <div class="form-group row">
            <div class="col-sm-2"></div>
            <label for="totalPrice" class="col-sm-2 col-form-label">Toplam Fiyat</label>
            <div class="col-sm-4 mb-2">
                <input type="text" class="form-control" id="totalPrice" name="totalPrice" value="0">
            </div>
            <div class="col-sm-2"></div>
        </div>
        <div class="form-group row">
            <span class="col-sm-7"></span>
            <button type="submit" class="btn btn-primary col-sm-1">Ekle</button>
        </div>
      </form>

    <script>
        function multiply(){
            const price = document.getElementById('price').value || 0;
            const quantity = document.getElementById('quantity').value || 0;
            const totalPrice = parseFloat(price) * parseFloat(quantity);
            document.getElementById('totalPrice').value = totalPrice.toFixed(2);
        }
    </script>

    <?php
    $sql = "SELECT * FROM spending ORDER BY id DESC LIMIT 5";
    $result = mysqli_query($conn, $sql);
    $i=1;
    ?>
    <h3 class="text-center">Son 5 Harcamam</h3>
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
         </tr>
      <?php $i++; } ?>
        </tbody>
    </table>


    <h3 id="income" class="text-center p-3">Gelir Ekle</h3>
    <form class="m-5" action="income.php" enctype="multipart/form-data" method="post">
        <div class="form-group row">
            <div class="col-sm-2"></div>
            <label for="description" class="col-sm-2 col-form-label">Açıklama</label>
            <div class="col-sm-4 mb-2">
                <input type="text" class="form-control" id="description" name="description" placeholder="Kira, Coin Satışı, Maaş...">
            </div>
            <div class="col-sm-2"></div>
        </div>
        <div class="form-group row">
            <div class="col-sm-2"></div>
            <label for="price" class="col-sm-2 col-form-label">Fiyat</label>
            <div class="col-sm-4 mb-2">
                <input type="text" class="form-control" id="iPrice" name="price" oninput="iMultiply()" placeholder="TL">
            </div>
            <div class="col-sm-2"></div>
        </div>
        <div class="form-group row">
            <div class="col-sm-2"></div>
            <label for="quantity" class="col-sm-2 col-form-label">Miktar</label>
            <div class="col-sm-4 mb-2">
                <input type="text" class="form-control" id="iQuantity" name="quantity" oninput="iMultiply()" placeholder="adet,kg...">
            </div>
            <div class="col-sm-2"></div>
        </div>
        <div class="form-group row">
            <div class="col-sm-2"></div>
            <label for="date" class="col-sm-2 col-form-label">Harcama Tarihi</label>
            <div class="col-sm-4 mb-2">
                <input type="text" class="form-control" id="date" name="date" placeholder="2022-01-01">
            </div>
            <div class="col-sm-2"></div>
        </div>
        <div class="form-group row">
            <div class="col-sm-2"></div>
            <label for="totalPrice" class="col-sm-2 col-form-label">Toplam Fiyat</label>
            <div class="col-sm-4 mb-2">
                <input type="text" class="form-control" id="iTotalPrice" name="totalPrice" value="0">
            </div>
            <div class="col-sm-2"></div>
        </div>
        <div class="form-group row">
            <span class="col-sm-7"></span>
            <button type="submit" class="btn btn-primary col-sm-1">Ekle</button>
        </div>
    </form>

    <script>
        function iMultiply(){
            const price = document.getElementById('iPrice').value || 0;
            const quantity = document.getElementById('iQuantity').value || 0;
            const totalPrice = parseFloat(price) * parseFloat(quantity);
            document.getElementById('iTotalPrice').value = totalPrice.toFixed(2);
        }
    </script>

    <?php
    $sql = "SELECT * FROM income ORDER BY id DESC LIMIT 3";
    $result = mysqli_query($conn, $sql);
    $i = 1;
    ?>

    <h3 class="text-center">Son 3 Gelirim</h3>
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
        </tr>
        <?php $i++; } ?>
        </tbody>
    </table>




</section>
<?php
include_once 'layout/include/footer.php';
?>