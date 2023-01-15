<nav class="navbar navbar-custom navbar-expand-lg text-light">
    <div class="container-fluid">
        <a class="navbar-brand text-light" href="#">Phim hay </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle active text-light" href="#" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        Thể loại
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




            <?php
                $email= Session::get('user_email');
                if ($email != NULL) {            
            ?>
            <li class="nav-item dropdown d-flex me-2">
                <a class="nav-link dropdown-toggle active text-light" href="#" role="button" data-bs-toggle="dropdown"
                    aria-expanded="false">
                    <?=$email?>
                </a>
                <ul class="dropdown-menu">

                    <li><a class="dropdown-item" href="#">Hồ sơ</a></li>
                    <li>
                        <hr class="dropdown-divider">
                    </li>
                    <li><a class="dropdown-item" href="{{URL::to('/logout')}}">Đăng xuất</a></li>
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
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn text-light" type="submit">Search</button>
            </form>
        </div>
    </div>
</nav>