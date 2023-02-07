@extends('backend.index')
@section('content')
<section class="main shadow p-3 mb-5 bg-body-tertiary rounded">
    <div class="rounded car-edit">


        <div class="car-edit">
            <h3>Cập nhật</h3>
            <form action="{{url('xe/' .$xe->xe_id)}}" method="POST">
                {!! csrf_field() !!}
                @method("PATCH")
                <input type="hidden" name="xe_id" value="{{$xe->xe_id}}">
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Số </label>
                    <input type="number" name="so_xe" value="{{$xe->so_xe}}" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Biển số </label>
                    <input type="text" name="bien_so" value="{{$xe->bien_so}}" class=" form-control">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Số lượng ghế </label>
                    <input type="number" name="so_luong_ghe" value="{{$xe->so_luong_ghe}}" class=" form-control">
                </div>
                <div class="form-floating mb-3">
                    <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea"
                        name="ghi_chu"> {{$xe->ghi_chu}}</textarea>
                    <label for=" floatingTextarea">Ghi chú</label>
                </div>
                <button type="submit" class="btn btn-primary">Cập nhật</button>
            </form>
        </div>
    </div>


</section>
@endsection