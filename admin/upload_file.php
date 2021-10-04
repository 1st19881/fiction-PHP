<div class="col-md-12">
    <form name="uploadimg" action="upload_filedb.php" method="POST" enctype="multipart/form-data"
        class="form-horizontal">
        <div class="form-group">
            <div class="col-sm-2"> </div>
            <div class="col-sm-12" align="left">
                <h4 class="text-center"> เพิ่มไฟล์</h4>
            </div>
        </div>

        <div class="form-group">
            <div class="col-sm-2" align="">รหัสไฟล์:</div>
            <div class="col-sm-12" align="left">
                <input name="id_file" type="text" required class="form-control" />
            </div>
        </div>


        <div class="form-group">
            <div class="col-sm-2" align="">รหัสนิยาย:</div>
            <div class="col-sm-12" align="left">
                <input name="fiction_id" type="text" required class="form-control" />
            </div>
        </div>

        <div class="form-group">
            <div class="col-sm-2" align="">pdf :</div>
            <div class="col-sm-12" align="left">
                <input name="file_pdf" type="file" required class="form-control" />
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