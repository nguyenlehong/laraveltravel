@extends('backend.index')
@section('content')
<section class="main shadow p-3 mb-5 bg-body-tertiary rounded">
    <h3 class="bg-primary-subtle rounded-3 ps-3 pt-2 pb-2">Danh sách</h3>
    <div class=" border rounded">
        @foreach ($time as $time)

        <h5>Chuyến xe: {{$time->noi_bat_dau}} -> {{$time->noi_ket_thuc}}</h5>
        <h6>Khởi hành ngày: {{$time->ngay}} {{$time->gio}}</h6>
        @endforeach
        <table class="table table-hover">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Tên</th>
                    <th scope="col">SDT</th>
                    <th scope="col">Số vé</th>
                    <th scope="col">Tổng tiền</th>
                    <th scope="col">Nơi đón</th>
                </tr>
            </thead>
            <tbody>
                @php
                $i = 1;
                @endphp
                @foreach ($khach as $khach)

                <tr>
                    <th scope="row">{{$i++}}</th>
                    <td>{{$khach->ten_user}}</td>
                    <td>0{{$khach->sdt}}</td>
                    <td>{{$khach->so_luong_ghe_dat}}</td>
                    <td>{{number_format($khach->tong_tien)}}đ</td>
                    <td style="width: 200px">{{$khach->diem_dn}}</td>
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