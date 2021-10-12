<br>
<br>
<br>
<br>
<style>
    body{
        background-image: url("assets/image/back5.jpg") ;
        opacity: 0.9;
    }
    /* .card{
        opacity: 0.5;
    } */
</style>

<div class="container">
    <div class="row ">
        <div class="offset-md-3 col-md-6 mt-5 ">
            <div class="card">
            <h5 class="card-header text-center">เข้าสู่ระบบ</h5>
                <div class="card-body">
                    <form class="form" method="post" action="check_login.php">
        
                            <div class="input-group mb-2 mr-sm-2">
                                <div class="input-group-prepend">
                                <div class="input-group-text"><i class="fas fa-user"></i></div>
                                </div>
                                <input type="text" class="form-control" id="username" name="username" placeholder="Username" required>
                            </div>

                            <div class="input-group mb-2 mr-sm-2">
                                <div class="input-group-prepend">
                                <div class="input-group-text"><i class="fas fa-key"></i></div>
                                </div>
                                <input type="password" class="form-control" id="password" name="password" placeholder="Password" required>
                            </div>

                        <button type="submit" name="submit" class="btn btn-primary  btn-block mb-2">เข้าสู่ระบบ</button>
                        <span class="float-right">สมัครสมาชิก <a href="register.php">คลิกที่นี้</a> </span>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
