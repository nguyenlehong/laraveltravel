@extends('backend.index')
@section('content')
<section class="main shadow p-3 mb-5 bg-body-tertiary rounded">
    <h3 class="bg-primary-subtle rounded-3 ps-3 pt-2 pb-2">Danh sách lịch chạy</h3>
    <div class=" border rounded lichChay">
        <div class="lichChay-container">
            <div class="lichChay-list">
                <?php
                $message= Session::get('message_lichchay');
                if ($message) {  
                    echo '
                    <div class="alert alert-success" role="alert">
                    Thêm xe thành công!
                     </div>
                    ';
                 }         
                ?>
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
                                @endphp
                            </th>
                            <td>{{$chuyenxe->ngay}}</td>
                            {{-- <td>{{$chuyenxe->gio}}</td> --}}
                            <td>{{$gio}}</td>
                            <td style="max-width:200px">{{$chuyenxe->noi_bat_dau}} <br>
                                <ion-icon name="arrow-forward-outline"></ion-icon>
                                {{$chuyenxe->noi_ket_thuc}}
                            </td>
                            <td>{{number_format($chuyenxe->gia)}}đ/vé</td>
                            <td>{{$chuyenxe->so_xe}} <br>
                                {{$chuyenxe->bien_so}}
                            </td>
                            <td style="max-width:200px">
                                <div class="display-left">
                                    <a href="{{url('/chuyenxe/' . $chuyenxe->chuyexe_id . '/edit')}}">
                                        <button type="button" class="btn btn-warning me-1">Sửa</button> </a>
                                    <form action="{{url('/chuyenxe' . '/' . $chuyenxe->chuyexe_id)}}" method="post">
                                        {{method_field( 'DELETE')}}
                                        {{ csrf_field() }}
                                        <button type="submit" class="btn btn-danger me-1"
                                            onclick="return confirm('chac chua?')">
                                            xóa </button>
                                    </form> <a href="{{url('/khach/' .$chuyenxe->chuyexe_id)}}"> <button type="button"
                                            class="btn btn-info">Khách</button></a>
                                </div>
                            </td>
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
                        <input type="date" name="ngay" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label"> Giờ chạy </label>
                        <input type="time" name="gio" class="form-control" required>
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