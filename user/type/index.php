<?php
$query = "SELECT * FROM type ORDER BY type_id DESC";
$result = mysqli_query($connection, $query);
?>
<?php
$query1 = "SELECT * FROM unit ORDER BY unit_id DESC";
$result1 = mysqli_query($connection, $query1);
?>
<?php include './type/modalunit.php'; ?>



<div class="row">
   
    <div class="col-md-6">
              <?php include './type/button.php'; ?>
        <div class="card">

            <div class="card-body">
           
                <h5 class="card-title">ตารางประเภทสินค้า</h5>
                <div class="table-responsive">
                    <br />
                    <div id="employee_table">
                        <table class="table table-bordered" id="tableall">
                            <thead>
                                <tr>
                                    <th>ชื่อประเภทสินค้า</th>
                                    <th class="text-center">แก้ไขข้อมูล</th>
                                    <th class="text-center">ลบ</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                while ($row = mysqli_fetch_array($result)) {
                                ?>
                                    <tr>
                                        <td width="10%"><?php echo $row["type_name"] ?></td>
                                        <td width="10%"><a href="?page=<?= $_GET['page'] ?>&function=update&type_id=<?= $row['type_id'] ?>" class="btn btn-sm btn-info">แก้ไขข้อมูล</a></td>
                                        <td width="10%"><a href="?page=<?= $_GET['page'] ?>&function=delete&type_id=<?= $row['type_id'] ?>" onclick="return confirm('คุณต้องการลบชื่อ : <?= $row['type_name'] ?> หรือไม่ ??')" class="btn btn-sm btn-danger">ลบ</a></td>
                                    </tr>
                                <?php
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
 
    <div class="col-md-6">       
        <?php include './type/button1.php'; ?>
        <div class="card">
            <div class="card-body">
            
                <h5 class="card-title">ตารางหน่วยนับ</h5>
                <div class="table-responsive">
                    <br />
                    <div id="employee_table">
                        <table class="table table-bordered" id="tableall">
                            <thead>
                                <tr>
                                    <th>ชื่อหน่วยนับ</th>
                                    <th class="text-center">แก้ไขข้อมูล</th>
                                    <th class="text-center">ลบ</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                while ($row1 = mysqli_fetch_array($result1)) {
                                ?>
                                    <tr>
                                        <td width="10%"><?php echo $row1["unit_name"] ?></td>
                                        <td width="10%"><a href="?page=<?= $_GET['page'] ?>&function=updateunit&unit_id=<?= $row1['unit_id'] ?>" class="btn btn-sm btn-info">แก้ไขข้อมูล</a></td>
                                        <td width="10%"><a href="?page=<?= $_GET['page'] ?>&function=deleteunit&unit_id=<?= $row1['unit_id'] ?>" onclick="return confirm('คุณต้องการลบชื่อซัพพลายเออร์ : <?= $row['sup_name'] ?> หรือไม่ ??')" class="btn btn-sm btn-danger">ลบ</a></td>
                                    </tr>
                                <?php
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>


</div>
<?php include './type/modal.php'; ?>
<?php include './type/script.php'; ?>