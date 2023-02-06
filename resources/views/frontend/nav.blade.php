<nav class="navbar navbar-custom navbar-expand-lg text-light">
    <div class="container-fluid">
        <a class="navbar-brand text-light" href="{{url('/')}}">Vé xe online</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active text-light" aria-current="page" href="#">Lịch trình</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active text-light" aria-current="page" href="#">Giá vé</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active text-light" aria-current="page" href="#">Dịch vụ gửi hàng</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active text-light" aria-current="page" href="{{url('/huong_dan')}}">Hướng dẫn đặt
                        vé</a>
                </li>
            </ul>

            <?php
                $user_id= Session::get('user_id');
                $email= Session::get('user_email');
                if ($email != NULL) {            
            ?>

            <li class="nav-item dropdown d-flex me-2">
                <a class="nav-link dropdown-toggle active text-light" href="#" role="button" data-bs-toggle="dropdown"
                    aria-expanded="false">
                    <i class="fa-solid fa-user"></i>
                    <?=$email?>
                </a>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="{{url('/ve_da_dat/' .$user_id)}}">Vé đã đặt</a></li>
                    <li>
                        <hr class="dropdown-divider">
                    </li>
                    <li><a class="dropdown-item" href="{{URL::to('/logout')}}">
                            <i class="fa-solid fa-arrow-right-from-bracket"></i> Đăng xuất</a></li>
                </ul>
            </li>

            <?php
                }else{
            ?>

            <li class="d-flex me-2">
                <a class="nav-link active" aria-current="page" href="{{url('/login')}}">
                    Đăng nhập
                </a>
            </li>
            <?php
                    }
            ?>

            <form class=" d-flex" role="search">
                <input class="form-control me-2" type="search" placeholder="" aria-label="Search">
                <button class="btn text-light" type="submit">Tìm</button>
            </form>
        </div>
    </div>
</nav>