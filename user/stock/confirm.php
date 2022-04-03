<?php
include("connect.php");
?>

<form id="frmcart" name="frmcart" method="post" action="?page=savestock">
  <div class="col-md-5">
  <table class="table table-bordered table-hover">
    <tr>
      <td colspan="4">
        <strong>รายการสินค้าที่ต้องการลงคลัง</strong>
      </td>
    </tr>
    <tr>
      <td>สินค้า</td>
      <td>ราคา</td>
      <td>จำนวน</td>
      <td>รวม/รายการ</td>
    </tr>
    <?php
    $stock_total = 0;
    foreach ($_SESSION['cart'] as $product_id => $stock_qty) {
      $sql  = "select * from product where product_id= '$product_id'";
      $query  = mysqli_query($conn, $sql);
      $row  = mysqli_fetch_array($query);
      $sum  = $row['product_price'] * $stock_qty;
      $stock_total  += $sum;
      echo "<tr>";
      echo "<td>" . $row["product_name"] . "</td>";
      echo "<td>" . number_format($row['product_price'], 2) . "</td>";
      echo "<td>$stock_qty</td>";
      echo "<td>" . number_format($sum, 2) . "</td>";
      echo "</tr>";
    }
    echo "<tr>";
    echo "<td  colspan='3'><b>รวม</b></td>";
    echo "<td>" . "<b>" . number_format($stock_total, 2) . "</b>" . "</td>";
    echo "</tr>";
    ?>
  </table>
  </div>

  <!-- <div class="row">
    <div class="col-md-6">
      <table class="table table-bordered">
        <tr>
          <td>ชื่อ</td>
          <td><input name="sup_name" type="text" id="sup_name"  /></td>
        </tr>
        <tr>
          <td>บริษัท</td>
          <td><input name="sup_last" type="text" id="sup_company"  /></td>
        </tr> -->
        <tr>
          <td colspan="2">
            <input type="submit" name="Submit2" class="btn btn-primary" value="เพิ่มลงคลังสินค้า" />
          </td>
        </tr>
      <!--</table>
    </div>
  </div> -->
</form>
<!-- / PHP Ajax Update MySQL Data Through Bootstrap Modal -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<!-- datatable -->
<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>

<script type="text/javascript">
  function ReadURL(input) {
    if (input.files && input.files[0]) {
      var reader = new FileReader();
      reader.onload = function(e) {
        $('#preview').attr('src', e.target.result);
      }
      reader.readAsDataURL(input.files[0]);
    }
  }
  $("#sup_img").change(function() {
    ReadURL(this);
  });
</script>