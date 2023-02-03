@extends('backend.index')
@section('content')
<section class="main shadow p-3 mb-5 bg-body-tertiary rounded">
    <h1 class="bg-primary-subtle rounded-3 ps-3 pt-2 pb-2">Danh sách xe</h1>
    <div class="rounded car-edit">


        <div class="car-edit">
            <h3>Cập nhật</h3>
            <form action="{{url('lotrinh/' .$lt->lotrinh_id)}}" method="POST">
                {{ csrf_field() }}
                @method("PATCH")
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Nơi khởi hành </label>
                    <input type="text" name="noi_bat_dau" value="{{$lt->noi_bat_dau}}" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Nơi kết thúc </label>
                    <input type="text" name="noi_ket_thuc" value="{{$lt->noi_ket_thuc}}" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label"> Thời gian di chuyển </label>
                    <input type="number" name="thoi_gian" value="{{$lt->thoi_gian}}" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Giá </label>
                    <input type="number" name="gia" value="{{$lt->gia}}" class="form-control">
                </div>
                <button type="submit" class="btn btn-primary">Thêm</button>
            </form>
        </div>
    </div>


</section>
@endsection