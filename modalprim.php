<input class="btn-check" id="insert" data-bs-toggle="modal" data-bs-target="#exampleModal">
<label class="btn btn-outline-primary" for="insert" style="width:100px;height:100px">
    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-bag-plus mt-3" viewBox="0 0 16 16">
        <path fill-rule="evenodd" d="M8 7.5a.5.5 0 0 1 .5.5v1.5H10a.5.5 0 0 1 0 1H8.5V12a.5.5 0 0 1-1 0v-1.5H6a.5.5 0 0 1 0-1h1.5V8a.5.5 0 0 1 .5-.5z" />
        <path d="M8 1a2.5 2.5 0 0 1 2.5 2.5V4h-5v-.5A2.5 2.5 0 0 1 8 1zm3.5 3v-.5a3.5 3.5 0 1 0-7 0V4H1v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V4h-3.5zM2 5h12v9a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V5z" />
    </svg>
    <p class="mt-3">เพิ่มหน่วยนับ</p>
</label>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" style="max-height:60%; max-width:60%;">
        <div class="modal-content">

            <div class="modal-header bg-primary">
                <h5 class="modal-title text-white" id="exampleModalLabel">เพิ่มหน่วยนับ</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <form id="form_insert" action="" method="post" enctype="multipart/form-data">
                <input type="hidden" name="mode" value="insert_data">
                <div class="row">
                    <div class="col-md-8">
                        <div class="card mt-2  ms-2 me-2">
                            <div class="card-body">
                                <div class="modal-body">



                                    <div class="input-group mb-2">
                                        <span class="input-group-text">ชื่อหน่วยนับ</span>
                                        <input type="text" class="form-control" name="product_name">
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
<!-- / PHP Ajax Update MySQL Data Through Bootstrap Modal -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>


<script type="text/javascript">
    function ReadURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function(e) {
                $('#preview1').attr('src', e.target.result);
            }
            reader.readAsDataURL(input.files[0]);
        }
    }
    $("#product_img").change(function() {
        ReadURL(this);
    });
</script>