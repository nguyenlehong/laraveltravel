@extends('backend.index')
@section('content')
<section class="main shadow p-3 mb-5 bg-body-tertiary rounded">
    <h1 class="bg-primary-subtle rounded-3 ps-3 pt-2 pb-2">Danh sách lịch chạy</h1>
    <div class=" border rounded lichChay">
        <div class="lichChay-container">
            <div class="lichChay-list">
                <h3>Danh sách </h3>
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Ngày</th>
                            <th scope="col">Giờ</th>
                            <th scope="col">Tuyến xe</th>
                            <th scope="col"> Giá xe</th>
                            <th scope="col"> Số xe</th>
                            <th scope="col">Thao thác</th>

                        </tr>
                    </thead>
                    <tbody>
                        @php
                        $i = 1;
                        @endphp
                        @foreach ($chuyenxe as $chuyenxe)
                        @php
                        $gio = $chuyenxe->gio;
                        @endphp
                        <tr>
                            <th scope="row">@php
                                echo $i++;
                                @endphp</th>
                            <td>{{$chuyenxe->ngay}}</td>
                            {{-- <td>{{$chuyenxe->gio}}</td> --}}
                            <td>{{$gio}}</td>
                            <td>{{$chuyenxe->noi_bat_dau}} => <br>
                                {{$chuyenxe->noi_ket_thuc}}
                            </td>
                            <td>{{number_format($chuyenxe->gia)}}đ/vé</td>
                            <td>{{$chuyenxe->so_xe}} <br>
                                {{$chuyenxe->bien_so}}
                            </td>
                            <td> Sửa | xóa | khách </td>
                        </tr>
                        @endforeach


                    </tbody>
                </table>
            </div>
            <div class="car-add">
                <h3>Thêm mới</h3>
                <form action="{{url('chuyenxe')}}" method="POST">
                    {{ csrf_field() }}
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Số xe</label>
                        <select class="form-select" name="xe_id" aria-label="Default select example">
                            @foreach ($xe as $xe)
                            <option value="{{$xe->xe_id}}">{{$xe->so_xe}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Ngày chạy</label>
                        <input type="date" name="ngay" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label"> Giờ chạy </label>
                        <input type="time" name="gio" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Lộ trình </label>
                        <select class="form-select" name="lotrinh_id" aria-label="Default select example">
                            @foreach ($lotrinh as $lt)
                            <option value="{{$lt->lotrinh_id}}">{{$lt->noi_bat_dau}}-{{$lt->noi_ket_thuc}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Trạng Thái</label>
                        <select class="form-select" name="trang_thai" aria-label="Default select example">
                            <option value="hien">Hiện</option>
                            <option value="an">Ẩn</option>

                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary">Thêm</button>
                </form>
            </div>
        </div>
    </div>

</section>
@endsection