<?php require_once 'template/header.php';

?>



<div class="container">
  <div class="row">
      <div class="img-thumbnail-">
        <div class="coverper">
        <img src="product/k12.jpg"></a>
        </div>
    </div>

    <div class="box_product">
    <h1 class="judul">Liberty Death</h1>

    <h1 class="hargaper">150 <span>K</span></h1>
      <hr class="garis">
      <label class="label" for="size">Size</label>
      <form class="buy" action="" method="post">
        <select class="size" name="size">
          <option  value="1">S</option>
          <option value="2">M</option>
          <option value="3">L</option>
          <option value="4">XL</option>
          <option value="4">2XL</option>
          <option value="5">3XL</option>
        </select>
<br>
        <label class="label" for="quantity">Quantity</label>
        <input type="text" class="quantity" name="quantity" value="1">
        <br>
        <button type="submit" class="btn btn-primary add" name="add">Add to cart</button>
      </form>
      <br>
<hr class="garis">




    </div>

  </div>
</div>




<?php require_once 'template/footer.php'; ?>
