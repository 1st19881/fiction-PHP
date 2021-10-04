<div class="container">
    <div class="row ">
        <div class="offset-md-3 col-md-6 mt-5">
            <div class="card">
            <h5 class="card-header text-center">สมัครสมาชิก</h5>
                <div class="card-body">
                    <form class="form" id="formRegister" method="post" action="php/creatMember.php">
        
                            <div class="input-group mb-2 mr-sm-2">
                                <div class="input-group-prepend">
                                <div class="input-group-text"><i class="fas fa-user"></i></div>
                                </div>
                                <input type="text" class="form-control" id="name" name="name" placeholder="ชื่อ - นามสกุล">
                            </div>

                            <div class="input-group mb-2 mr-sm-2">
                                <div class="input-group-prepend">
                                <div class="input-group-text"><i class="fas fa-calendar-alt"></i></i></div>
                                </div>
                                <input type="date" class="form-control" id="date" name="date" placeholder="วันเดือนปีเกิด">
                            </div>

                            <div class="input-group mb-2 mr-sm-2">
                                <div class="input-group-prepend">
                                <div class="input-group-text"><i class="fas fa-envelope"></i></div>
                                </div>
                                <input type="email" class="form-control" id="email" name="email" placeholder="example@domain.com">
                            </div>

                            <div class="input-group mb-2 mr-sm-2">
                                <div class="input-group-prepend">
                                <div class="input-group-text"><i class="fas fa-user"></i></div>
                                </div>
                                <input type="text" class="form-control" id="username" name="username" placeholder="Username">
                            </div>

                            <div class="input-group mb-2 mr-sm-2">
                                <div class="input-group-prepend">
                                <div class="input-group-text"><i class="fas fa-key"></i></div>
                                </div>
                                <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                            </div>

                            <div class="input-group mb-2 mr-sm-2">
                                <div class="input-group-prepend">
                                <div class="input-group-text"><i class="fas fa-key"></i></div>
                                </div>
                                <input type="password" class="form-control" id="confirm_password" name="confirm_password" placeholder="Confirm Password">
                            </div> 

                            <div class="input-group mb-2 mr-sm-2">
                                <div class="g-recaptcha" data-callback="recaptcharCallback" data-sitekey="6LfnaB4cAAAAABnSqulLo1YYwCYzpUuP1h8jSX4X"></div>
                            </div>

                        <button type="submit" name="submit" id="submit" disabled class="btn btn-primary  btn-block mb-2">สมัครสมาชิก</button>
                        <span class="float-right">เข้าสู่ระบบ/<a href="login.php">คลิกที่นี้</a> </span>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>