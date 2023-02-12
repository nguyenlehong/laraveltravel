<!DOCTYPE html>
<html lang="en">
@include('frontend.head')

<body>
    <div class="login-background">
        <div class="login">
            <form action="{{URL::to('/register-save')}}" method="POST" autocomplete="off">
                {{ csrf_field() }}
                <h3 class="text-center fw-bold">Đăng ký</h3>

                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Địa chỉ email</label>
                    <input type="email" name="user_email" class="form-control" id="exampleInputEmail1"
                        aria-describedby="emailHelp">
                    <div id="emailHelp" class="form-text">
                        Chúng tôi sẽ không bao giờ chia sẻ email của bạn với bất kỳ ai khác.
                    </div>
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Mật khẩu</label>
                    <input type="password" name="user_password" class="form-control" id="exampleInputPassword1">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Nhập lại mật khẩu</label>
                    <input type="repassword" class="form-control" id="exampleInputPassword1">
                </div>

                <div class="d-grid gap-2">
                    <button type="submit" class="login-submit ">Đăng ký</button>
                </div>
            </form>

        </div>
    </div>
</body>

</html>