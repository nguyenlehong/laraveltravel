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
                                <h5 class="card-title center-icon">{{$chuyenxe->noi_bat_dau}}&ensp;<ion-icon
                                        name="arrow-forward-outline"></ion-icon> &ensp;{{$chuyenxe->noi_ket_thuc}}</h5>
                                <p class="card-text center-icon">
                                    <ion-icon name="location-outline"></ion-icon>100km - &nbsp; <ion-icon
                                        name="timer-outline">
                                    </ion-icon>{{$chuyenxe->thoi_gian}}h - &nbsp;
                                    <ion-icon name="card-outline"></ion-icon>
                                    {{number_format($chuyenxe->gia)}}đ
                                </p>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
</section>
@endsection