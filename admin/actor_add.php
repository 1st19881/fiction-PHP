<div class="col-md-12">
    <form name="register" action="fiction_add_db.php" method="POST" enctype="multipart/form-data"
        class="form-horizontal">
        <div class="form-group">
            <div class="col-sm-2"> </div>
            <div class="col-sm-12" align="left">
                <h4 class="text-center"> เพิ่มข้อมูลผู้แต่ง</h4>
            </div>
        </div>

        <div class="form-group">
            <div class="col-sm-2" align="">รหัสผู้แต่ง:</div>
            <div class="col-sm-12" align="left">
                <input name="author_id" type="text" required class="form-control" />
            </div>
        </div>

        <div class="form-group">
            <div class="col-sm-2" align="">รหัสนิยาย:</div>
            <div class="col-sm-12" align="left">
                <input name="fiction_id" type="text" required class="form-control" />
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-2" align="">ชื่อผู้แต่งภาษาไทย:</div>
            <div class="col-sm-12" align="left">
                <input name="thai_name" type="text" required class="form-control" />
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-2" align=""> ชื่อผู้แต่งภาษาอังกฤษ :</div>
            <div class="col-sm-12" align="left">
                <input name="english_name" type="text" required class="form-control" id="english_name" placeholder="" />
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