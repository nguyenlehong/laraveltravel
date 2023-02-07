@extends('backend.index')
@section('content')
<section class="main shadow p-3 mb-5 bg-body-tertiary rounded">
    <div class="rounded car-edit">
        <div class="car-edit">
            <h3>Cập nhật</h3>
            @foreach ($chuyenxe as $chuyenxe)
            <form action="{{url('chuyenxe/' .$chuyenxe->chuyexe_id)}}" method="POST">
                {{ csrf_field() }}
                @method("PATCH")
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Số xe</label>
                    <select class="form-select" name="xe_id" aria-label="Default select example">
                        @foreach ($xe as $xe)
                        @if ($xe->xe_id == $chuyenxe->xe_id)
                        <option selected value="{{$chuyenxe->xe_id}}">{{$xe->so_xe}}</option>
                        @else
                        <option value="{{$xe->xe_id}}">{{$xe->so_xe}}</option>
                        @endif
                        @endforeach
                    </select>
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Ngày chạy</label>
                    <input type="date" name="ngay" value="{{$chuyenxe->ngay}}" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label"> Giờ chạy </label>
                    <input type="time" name="gio" value="{{$chuyenxe->gio}}" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Lộ trình </label>
                    <select class="form-select" name="lotrinh_id" aria-label="Default select example">
                        @foreach ($lotrinh as $lt)
                        @if ($lt->lotrinh_id == $chuyenxe->lotrinh_id)
                        <option selected value="{{$chuyenxe->lotrinh_id}}">{{$lt->noi_bat_dau}}<ion-icon
                                name="arrow-forward-outline">
                            </ion-icon> ->{{$lt->noi_ket_thuc}}</option>
                        @else
                        <option value="{{$lt->lotrinh_id}}">{{$lt->noi_bat_dau}} ->
                            <ion-icon name="arrow-forward-outline">
                            </ion-icon>{{$lt->noi_ket_thuc}}
                        </option>
                        @endif
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
                <button type="submit" class="btn btn-primary">Cập nhật</button>
            </form>
            @endforeach
        </div>
    </div>


</section>
@endsection