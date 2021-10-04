<div class="col-md-12">
    <form name="uploadimg" action="upload_imgdb.php" method="POST" enctype="multipart/form-data"
        class="form-horizontal">
        <div class="form-group">
            <div class="col-sm-2"> </div>
            <div class="col-sm-12" align="left">
                <h4 class="text-center"> เพิ่มภาพ</h4>
            </div>
        </div>

        <div class="form-group">
            <div class="col-sm-2" align="">รหัสภาพ:</div>
            <div class="col-sm-12" align="left">
                <input name="figure_id" type="text" required class="form-control" />
            </div>
        </div>

        <div class="form-group">
            <div class="col-sm-2" align="">ชื่อภาพ:</div>
            <div class="col-sm-12" align="left">
                <input name="name" type="text" required class="form-control" />
            </div>
        </div>


        <div class="form-group">
            <div class="col-sm-2" align="">รหัสนิยาย:</div>
            <div class="col-sm-12" align="left">
                <input name="fiction_id" type="text" required class="form-control" />
            </div>
        </div>

        <div class="form-group">
            <div class="col-sm-2" align="">ภาพ:</div>
            <div class="col-sm-12" align="left">
                <input name="fg_address" type="file" required class="form-control" />
            </div>
        </div>

        
        <div class="form-group">
            <div class="col-sm-2"> </div>
            <div class="col-sm-12" align="right">
                <button type="submit" class="btn btn-success btn-flat" id="btn"><span class="glyphicon glyphicon-saved"></span>
                    บันทึก
                </button> <a href="product.php" type="button" class="btn btn-danger btn-flat" id="btn"><span
                        class="glyphicon glyphicon-saved"></span> ยกเลิก </a>
            </div>

        </div>
    </form>
</div>