@extends('frontend.index')
@section('content')
@php
$user_id= Session::get('user_id');
@endphp
<section class="main shadow p-3 mb-5 bg-body-tertiary rounded">
    <h1 class="bg-primary-subtle rounded-3 ps-3 pt-2 pb-2">Danh sách xe</h1>
    <div class=" border rounded car">
        <div class="car-container">
            <div class="car-list">
                <h3>Chuyến xe </h3>
                <table class="table">
                    <form action="{{url('/save_ve')}}" method="POST">
                        {!! csrf_field() !!}

                        <input type="hidden" name="user_id" value="{{$user_id}}">
                        @foreach ($chuyenxe as $chuyenxe)
                        <input type="hidden" name="chuyexe_id" value="{{$chuyenxe->chuyexe_id}}">
                        <input type="hidden" name="gia" value="{{$chuyenxe->gia}}">


                        <tbody>
                            <tr>
                                <th>Chuyến xe: </th>
                                <td>{{$chuyenxe->noi_bat_dau}} -> {{$chuyenxe->noi_ket_thuc}}</td>
                            </tr>
                            <tr>
                                <th>Biển số </th>
                                <td> {{$chuyenxe->bien_so}}</td>
                            </tr>
                            <tr>
                                <th>Ngày khởi hành</th>
                                <td>{{$chuyenxe->ngay}} </td>
                            </tr>
                            <tr>
                                <th>Giờ khởi hành</th>
                                <td>{{$chuyenxe->gio}}</td>
                            </tr>
                            <tr>
                                <th>Giá vé</th>
                                <td>{{number_format($chuyenxe->gia)}}đ/vé</td>
                            </tr>
                        </tbody>
                        @endforeach
                </table>
                <p>Lưu ý: </p>
                <p> -Giữ vệ sinh chung</p>
                <p> -Bảo quản đồ đạt cá nhaan</p>
            </div>
            <div class="car-add">
                <h3>Thông tin khách hàng</h3>


                <div class="mb-3">
                    <label for="exampleInput" class="form-label">Tên khách hàng </label>
                    <input type="text" name="ten_user" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Số điện thoại</label>
                    <input type="number" name="sdt" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Số lượng vé </label>
                    <input type="number" name="so_luong_ghe_dat" min="1" max="5" class="form-control" required>
                </div>
                <div class="form-floating mb-3">
                    <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea"
                        name="diem_dn"></textarea>
                    <label for="floatingTextarea">Điểm đón</label>
                </div>
                <button type="submit" class="btn btn-primary">Xác nhận</button>
                </form>
            </div>
        </div>
    </div>

</section>
@endsection