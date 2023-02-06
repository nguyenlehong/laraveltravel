<!DOCTYPE html>
<html lang="en">

@include('frontend.head')

<body>
  @include('frontend.nav')

  {{-- <section class="home">
    <div class="home-container">
      @foreach ($chuyenxe as $chuyenxe)

      <div class="home-box">
        <div class="card mb-3 home-card rounded-start">
          <div class="row g-0">
            <div class="col-md-4 home-date rounded-start ">
              <h3>{{$chuyenxe->ngay}} <br>
                <p class="home-gio">{{$chuyenxe->gio}}</p>
              </h3> <br>
            </div>
            <div class="col-md-8 home-text">
              <a href="{{url('/dat-ve')}}">
                <div class="card-body ps-5">
                  <h5 class="card-title">{{$chuyenxe->noi_bat_dau}} => {{$chuyenxe->noi_ket_thuc}}</h5>
                  <p class="card-text"> 100km - {{$chuyenxe->thoi_gian}} - {{number_format($chuyenxe->gia)}}đ</p>
                </div>
              </a>
            </div>
          </div>
        </div>
      </div>

      @endforeach

    </div>
  </section> --}}
  @yield('content')


  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
  </script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"
    integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous">
  </script>
  {{-- icon --}}
  {{-- https://ionic.io/ionicons/usage --}}
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</body>

</html>