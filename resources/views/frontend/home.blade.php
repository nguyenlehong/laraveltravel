@extends('frontend.index')
@section('content')
@php
$user_id= Session::get('user_id');
@endphp
<section class="home">
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

                        @if ($user_id > 0)
                        <a href="{{url('/dat_ve/'.$chuyenxe->chuyexe_id)}}">

                            @endif
                            <div class="card-body ps-5">
                                <h5 class="card-title">{{$chuyenxe->noi_bat_dau}} => {{$chuyenxe->noi_ket_thuc}}</h5>
                                <p class="card-text"> 100km - {{$chuyenxe->thoi_gian}} -
                                    {{number_format($chuyenxe->gia)}}đ</p>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        @endforeach

    </div>
</section>
@endsection