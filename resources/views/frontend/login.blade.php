<!DOCTYPE html>
<html lang="en">
@include('frontend.head')

<body>

    <div class="login-background">
        <div class="login">
            <form>
                <h3 class="text-center fw-bold">Đăng nhập</h3>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Địa chỉ email</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">

                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Mật khẩu</label>
                        <input type="password" class="form-control" id="exampleInputPassword1">
                    </div>
                    <div class="mb-3 form-check">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                        <label class="form-check-label" for="exampleCheck1">Check me out</label>
                    </div>
                          
                    <div class="d-grid gap-2">
                        <button type="submit" class="login-submit ">Đăng nhập</button>
                    </div>
                    <p class=" text-center pt-3">Chưa có tài khoản? <a href="{{url('/register')}}"> Đăng ký</a></p>
            </form>

        </div>




    </div>
</body>

</html>