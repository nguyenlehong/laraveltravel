@extends('backend.index')
@section('content')
<section class="main shadow p-3 mb-5 bg-body-tertiary rounded">
    <h3 class="bg-primary-subtle rounded-3 ps-3 pt-2 pb-2">Danh sách xe</h3>
    <div class=" border rounded car">
        <div class="car-container">
            <div class="car-list">
                <?php
                $message= Session::get('message_xe');
                if ($message) {  
                    echo '
                    <div class="alert" id="alert">
                    <span class="closebtn" onclick="message_themxe()">&times;</span>
                    <strong>Thêm thành công!</strong>
                </div>
                    ';
                 }         
                ?>
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Số</th>
                            <th scope="col">Biển số</th>
                            <th scope="col">SL ghế</th>
                            <th scope="col "> Ghi chú</th>
                            <th scope="col">Thao thác</th>

                        </tr>
                    </thead>
                    <tbody>
                        @php
                        $i = 1;
                        @endphp
                        @foreach ($xe as $xe)
                        <tr>
                            <th scope="row">
                                @php
                                echo $i++
                                @endphp
                            </th>
                            <td>{{$xe->so_xe}}</td>
                            <td>{{$xe->bien_so}}</td>
                            <td>{{$xe->so_luong_ghe}}</td>
                            <td style=" width: 150px">{{$xe->ghi_chu}}</td>
                            <td style="width: 150px">
                                <div class="display-left">
                                    <a href="{{url('/xe/' . $xe->xe_id . '/edit')}}">
                                        <button type="button" class="btn btn-warning me-1">Sửa</button>
                                    </a>
                                    <form action="{{url('/xe' . '/' . $xe->xe_id)}}" method="post">
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
                <form action="{{url('xe')}}" method="POST">
                    {!! csrf_field() !!}
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Số </label>
                        <input type="number" name="so_xe" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Biển số </label>
                        <input type="text" name="bien_so" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Số lượng ghế </label>
                        <input type="number" name="so_luong_ghe" class="form-control" required>
                    </div>
                    <div class="form-floating mb-3">
                        <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea"
                            name="ghi_chu"></textarea>
                        <label for="floatingTextarea">Ghi chú</label>
                    </div>
                    <button type="submit" class="btn btn-primary">Thêm</button>
                </form>
            </div>
        </div>
    </div>

</section>

@endsection