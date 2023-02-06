@extends('frontend.index')
@section('content')
<section class="main shadow p-3 mb-5 bg-body-tertiary rounded">
    <h1 class="bg-primary-subtle rounded-3 ps-3 pt-2 pb-2">Lich su</h1>
    <div class=" border rounded">
        <table class="table table-hover">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Tuyến Xe</th>
                    </th>
                    <th scope="col">Ngày giờ</th>
                    <th scope="col">Biển số xe</th>
                    <th scope="col">Số lượng vé</th>
                    <th scope="col">Nơi đón</th>
                    <th scope="col">Tổng tiền</th>
                    {{-- <th scope="col">Trạng thái</th> --}}
                </tr>
            </thead>
            <tbody>
                @foreach ($ve as $ve)
                <tr>
                    <th scope="row" class="width10">{{$ve->ve_id}}</th>
                    <td>{{$ve->noi_bat_dau}}<br> -> {{$ve->noi_ket_thuc}}</td>
                    <td>{{$ve->ngay}}<br> {{$ve->gio}}</td>
                    <td>xe {{$ve->so_xe}} <br> {{$ve->bien_so}}</td>
                    <td>{{$ve->so_luong_ghe_dat}} vé</td>
                    <td>{{$ve->diem_dn}}đ/vé</td>
                    <td>{{number_format($ve->tong_tien)}}đ</td>
                    {{-- <td><a class="huy_ve" href="{{url('/huy_ve/' .$ve->ve_id   )}}"> Có thể hủy</a> --}}
                    </td>
                </tr>
                @endforeach

            </tbody>
        </table>


    </div>
    <nav aria-label="Page navigation example">
        <ul class="pagination">
            <li class="page-item">
                <a class="page-link" href="#" aria-label="Previous">
                    <span aria-hidden="true">&laquo;</span>
                </a>
            </li>
            <li class="page-item"><a class="page-link" href="#">1</a></li>
            <li class="page-item"><a class="page-link" href="#">2</a></li>
            <li class="page-item"><a class="page-link" href="#">3</a></li>
            <li class="page-item">
                <a class="page-link" href="#" aria-label="Next">
                    <span aria-hidden="true">&raquo;</span>
                </a>
            </li>
        </ul>
    </nav>
</section>
@endsection