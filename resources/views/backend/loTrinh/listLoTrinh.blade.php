@extends('backend.index')
@section('content')
<section class="main shadow p-3 mb-5 bg-body-tertiary rounded">
    <h1 class="bg-primary-subtle rounded-3 ps-3 pt-2 pb-2">Danh sách lộ trình</h1>
    <div class=" border rounded car">
        <div class="car-container">
            <div class="car-list">
                <h3>Danh sách </h3>
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Khởi hành</th>
                            <th scope="col">Kết thúc</th>
                            <th scope="col">Thời gian</th>
                            <th scope="col "> Giá</th>
                            <th scope="col">Thao thác</th>

                        </tr>
                    </thead>
                    <tbody>
                        @php
                        $i = 1;
                        @endphp
                        @foreach ($lotrinh as $lt)

                        <tr>
                            <th scope="row">@php
                                echo $i++
                                @endphp</th>
                            <td>{{$lt->noi_bat_dau}}</td>
                            <td>{{$lt->noi_ket_thuc}}</td>
                            <td>{{$lt->thoi_gian}} giờ </td>
                            <td>{{$lt->gia}}đ</td>
                            <td> <a href="{{url('/lotrinh/' . $lt->lotrinh_id . '/edit')}}">sửa</a> |
                                <form action="{{url('/lotrinh' . '/' . $lt->lotrinh_id)}}" method="post">
                                    {{method_field( 'DELETE')}}
                                    {{ csrf_field() }}
                                    <button type="submit" onclick="return confirm('chac chua?')"> xóa </button>
                                </form>

                            </td>
                        </tr>
                        @endforeach


                    </tbody>
                </table>
            </div>
            <div class="car-add">
                <h3>Thêm mới</h3>
                <form action="{{url('lotrinh')}}" method="POST">
                    {{ csrf_field() }}
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Nơi khởi hành </label>
                        <input type="text" name="noi_bat_dau" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Nơi kết thúc </label>
                        <input type="text" name="noi_ket_thuc" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label"> Thời gian di chuyển </label>
                        <input type="number" name="thoi_gian" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Giá </label>
                        <input type="number" name="gia" class="form-control">
                    </div>
                    <button type="submit" class="btn btn-primary">Thêm</button>
                </form>
            </div>
        </div>
    </div>

</section>
@endsection