<nav class="navbar navbar-custom navbar-expand-lg text-light">
    <div class="container-fluid">
        <a class="navbar-brand text-light" href="#">Admin </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle active text-light" href="#" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        Khách hàng
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="{{URL::to('/list-user')}}">Danh sách</a></li>

                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle active text-light" href="#" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        Quốc gia
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Action</a></li>
                        <li><a class="dropdown-item" href="#">Another action</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle active text-light" href="#" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        Phim mới
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Action</a></li>
                        <li><a class="dropdown-item" href="#">Another action</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link active text-light" aria-current="page" href="#">Phim chiếu rạp</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active text-light" aria-current="page" href="#">Phim thuyết minh</a>
                </li>
            </ul>


            <li class="nav-item dropdown d-flex me-2">
                <a class="nav-link dropdown-toggle active text-light" href="#" role="button" data-bs-toggle="dropdown"
                    aria-expanded="false">
                    <?php
                 $admin = Session::get('admin_name');
                 if($admin != NULL){
                    echo $admin;
                 }else{
                    echo 'chua co ten';
                 }
                 ?>
                </a>
                <ul class="dropdown-menu">

                    <li><a class="dropdown-item" href="{{URL::to('/logout-admin')}}">Đăng xuất</a></li>

                </ul>
            </li>


            <form class=" d-flex" role="search">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn text-light" type="submit">Search</button>
            </form>
        </div>
    </div>
</nav>