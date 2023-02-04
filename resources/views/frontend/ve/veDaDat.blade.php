@extends('frontend.index')
@section('content')
<section class="main shadow p-3 mb-5 bg-body-tertiary rounded">
    <h1 class="bg-primary-subtle rounded-3 ps-3 pt-2 pb-2">vé đã đặt</h1>
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
                    <th scope="col">Giá vé</th>
                    <th scope="col">Tổng tiền</th>
                    <th scope="col">Trạng thái</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row" class="width10">1</th>
                    <td>Tiền giang -> cà mau</td>
                    <td>12-3-2023</td>
                    <td>xe 10 36A2 32233</td>
                    <td>2 vé</td>
                    <td>150.000đ/vé</td>
                    <td>300.000đ</td>
                    <td>có thể hủy</td>
                </tr>

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