@extends('frontend.index')
@section('content')
@php
$user_id= Session::get('user_id');

@endphp



<section class="home">
    <h4>Tuyến phổ biến</h4>
    <div class="home-container">
        @foreach ($chuyenxe as $chuyenxe)
        <div class="home-box">
            <div class="card mb-3 home-card rounded-start">
                <div class="row g-0">
                    <div class="col-md-4 home-date rounded-start ">
                        <h3 class="home-ngay">{{$chuyenxe->ngay}} <br>
                            <p class="home-gio center-icon">
                                <ion-icon name="time-outline"></ion-icon> {{$chuyenxe->gio}}
                            </p>
                        </h3>
                        <br>
                    </div>
                    <div class="col-md-8 home-text">
                        @if ($user_id)
                        <a href="{{url('/dat_ve/'.$chuyenxe->chuyexe_id)}}">
                            @endif
                            <div class="card-body ps-5">
                                <h5 class="card-title center-icon home-chuyendi">{{$chuyenxe->noi_bat_dau}}&ensp;
                                    <ion-icon name="arrow-forward-outline"></ion-icon> &ensp;{{$chuyenxe->noi_ket_thuc}}
                                </h5>
                                <p class="card-text center-icon">
                                    <ion-icon name="location-outline"></ion-icon>100km - &nbsp; <ion-icon
                                        name="timer-outline">
                                    </ion-icon>{{$chuyenxe->thoi_gian}}h - &nbsp;

                                    {{number_format($chuyenxe->gia)}}đ
                                </p>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
        <?php
        $save_ve= Session::get('save_ve');
        if ($save_ve) {  
            echo '
            <div class="callout" id="callout">
                <span class="closebtn" id="closebtn" onclick="message_ve()">×</span>
                <div class="callout-container">
                    Đặt vé thành công!
                </div>
            </div>';
         }         
        ?>
        {{-- <script>
            function message_ve() {
              document.getElementById("callout").style.display = "none";
            }
        </script> --}}
</section>




@endsection


{{-- $save_ve= Session::get('save_ve');
if ($save_ve) {
echo '
<div class="callout">
    <span class="closebtn" onclick="this.parentElement.style.display='none';">×</span>
    <div class="callout-container">
        Đặt vé thành công!
    </div>
</div>
';
} --}}