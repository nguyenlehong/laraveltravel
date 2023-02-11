@extends('backend.index')
@section('content')
<section class="main shadow p-3 mb-5 bg-body-tertiary rounded">
    <h3 class="bg-primary-subtle rounded-3 ps-3 pt-2 pb-2">Danh sách lộ trình</h3>
    <div class=" border rounded car">
        <div class="car-container">
            <div class="car-list">

                <?php
                $message= Session::get('message_lichtrinh');
                if ($message) {  
                    echo '
                        <div class="alert" id="alert">
                            <span class="closebtn" onclick="message_themxe()">&times;</span>
                            <strong>Thêm thành công!</strong>
                        </div>';
                  }         
                ?>
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
                            <td style="max-width: 100px">{{$lt->noi_bat_dau}}</td>
                            <td style="max-width: 100px">{{$lt->noi_ket_thuc}}</td>
                            <td>{{$lt->thoi_gian}} giờ </td>
                            <td>{{number_format($lt->gia)}}đ</td>
                            <td style="width: 150px">
                                <div class="display-left">
                                    <a href="{{url('/lotrinh/' . $lt->lotrinh_id . '/edit')}}">
                                        <button type="button" class="btn btn-warning me-1">Sửa</button></a>

                                    <form action="{{url('/lotrinh' . '/' . $lt->lotrinh_id)}}" method="post">
                                        {{method_field( 'DELETE')}}
                                        {{ csrf_field() }}
                                        <button type="submit" class="btn btn-danger"
                                            onclick="return confirm('Chắc chưa?')">
                                            xóa </button>
                                    </form>
                                </div>
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
                        <input type="text" name="noi_bat_dau" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Nơi kết thúc </label>
                        <input type="text" name="noi_ket_thuc" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label"> Thời gian di chuyển </label>
                        <input type="number" name="thoi_gian" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Giá </label>
                        <input type="number" name="gia" class="form-control" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Thêm</button>
                </form>
            </div>
        </div>
    </div>

</section>
@endsection