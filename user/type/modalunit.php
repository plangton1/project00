
 <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" style="max-height:40%; max-width:40%;">
          <div class="modal-content">

              <div class="modal-header bg-success">
                  <h5 class="modal-title text-white" id="exampleModalLabel">เพิ่มหน่วยนับ</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>

              <form id="form_insert" action="?page=<?= $_GET['page'] ?>&function=insertunit" method="post" enctype="multipart/form-data">
                  <input type="hidden" name="mode" value="insert_data">
                  <div class="row">
                      <div class="col-md-12">
                          <div class="card mt-2  ms-2 me-2">
                              <div class="card-body">
                                  <div class="modal-body">

                                      <div class="input-group mb-2">
                                          <span class="input-group-text">ชื่อหน่วยนับ</span>
                                          <input type="text" class="form-control" name="unit_name">
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
