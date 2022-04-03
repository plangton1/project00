    <!-- Employee Details -->
    <div id="dataModal" class="modal fade">
        <div class="modal-dialog" style="max-width: 80%;">
            <div class="modal-content">
                <div class="modal-header bg-success text-white">
                    <h4 class="modal-title">รายละเอียดของสินค้า</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body" id="product_id">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">ปิดหน้าต่างนี้</button>
                </div>
            </div>
        </div>
    </div>
    <!-- /Employee Details -->
    <!-- PHP Ajax Update MySQL Data Through Bootstrap Modal -->
    <div id="add_data_Modal" class="modal fade">
        <div class="modal-dialog" style="max-width: 80%;">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">เพิ่มสินค้า</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>

                <div class="row">
                    <div class="col-md-8">
                        <div class="card mt-2  ms-2 me-2">
                            <div class="card-body">
                                <div class="modal-body">
                                    <form id="insert_form" enctype="multipart/form-data">

                                        <div class="input-group mb-2">
                                            <span class="input-group-text">รหัสสินค้า<a class="text-warning">(บาร์โค้ด)</a></span>
                                            <input type="text" class="form-control">
                                        </div>
                                        <div class="input-group mb-2">
                                            <span class="input-group-text">ชื่อสินค้า</span>
                                            <input type="text" class="form-control" name="product_name">
                                        </div>
                                        <div class="input-group mb-2">
                                            <span class="input-group-text">รายละเอียดสินค้า</span>
                                            <input type="text" class="form-control" name="product_detail">
                                        </div>

                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="input-group mb-2">
                                                    <span class="input-group-text">หมวดหมู่สินค้า</span>

                                                    <select class="form-control" name="product_type" id="product_type">
                                                        <option value="" selected disabled>ประเภทสินค้า</option>
                                                        <?php foreach ($result1 as $data) : ?>
                                                            <option value="<?= $data['type_id'] ?>"><?= $data['type_name'] ?></option>
                                                        <?php endforeach; ?>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="input-group mb-2">
                                                    <span class="input-group-text">หน่วยนับ</span>

                                                    <select class="form-control" name="product_unit" id="product_unit">
                                                        <option value="" selected disabled>หน่วยนับ</option>
                                                        <?php
                                                        $unit = "SELECT * FROM unit";
                                                        $result2 = mysqli_query($connect, $unit);
                                                        foreach ($result2 as $data1) : ?>
                                                            <option value="<?= $data1['unit_id'] ?>"><?= $data1['unit_name'] ?></option>
                                                        <?php endforeach; ?>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="input-group mb-2">
                                                    <span class="input-group-text">ราคาทุน</span>
                                                    <input type="text" class="form-control" name="product_price"><span class="input-group-text">บาท</span>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="input-group mb-2">
                                                    <span class="input-group-text">ราคาขาย</span>
                                                    <input type="text" class="form-control" name="product_sale"><span class="input-group-text">บาท</span>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="input-group mb-2">
                                                    <span class="input-group-text">จำนวนคงเหลือ</span>
                                                    <input type="text" class="form-control" name="product_net">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="input-group mb-2">
                                                    <span class="input-group-text">ชื่อซัพพลายเออร์</span>
                                                    <input type="text" class="form-control" name="product_sup">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="input-group mb-2">
                                            <span class="input-group-text">วันเดือนปี (หมดอายุ)</span>
                                            <input type="date" class="form-control" name="product_end">
                                        </div>

                                </div>

                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="card mt-2  ms-2 me-2">
                            <div class="card-body">
                                <div class="input-group mb-2">
                                    <div class="col-sm-12 mb-3">
                                        <label for="fname" class="col-sm-3 text-end control-label col-form-label">รูปภาพ</label>
                                        <div class="col-sm-12 mb-3">
                                            <img id="preview" width="150" height="150">
                                            <hr>
                                            <input type="file" class="form-control" id="product_img" name="product_img" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button onclick="$('#form_insert').submit();" class="btn btn-primary">บันทึก</button>
                    </div>
                    </form>
                </div>
            </div>



        </div>
    </div>
    </div>
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
        $("#product_img").change(function() {
            ReadURL(this);
        });
    </script>