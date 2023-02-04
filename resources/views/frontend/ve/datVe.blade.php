@extends('frontend.index')
@section('content')
<section class="main shadow p-3 mb-5 bg-body-tertiary rounded">
    <h1 class="bg-primary-subtle rounded-3 ps-3 pt-2 pb-2">Danh sách xe</h1>
    <div class=" border rounded car">
        <div class="car-container">
            <div class="car-list">
                <h3>Chuyến xe </h3>
                <table class="table">

                    <tbody>
                        <tr>

                            <th>Chuyến xe: </th>
                            <td>Tiền giang -> cà mau</td>


                        </tr>
                        <tr>
                            <th>Biển số </th>
                            <td> 53E2- 32363</td>
                        </tr>
                        <tr>
                            <th>Ngày khởi hành</th>
                            <td>2020-2-12 </td>
                        </tr>
                        <tr>
                            <th>Giờ khởi hành</th>
                            <td>12h</td>
                        </tr>
                        <tr>
                            <th>Giá vé</th>
                            <td>200.000đ/vé</td>
                        </tr>

                    </tbody>
                </table>
                <p>Lưu ý: </p>
                <p> -Giữ vệ sinh chung</p>
                <p> -Bảo quản đồ đạt cá nhaan</p>
            </div>
            <div class="car-add">
                <h3>Thông tin khách hàng</h3>
                <form action="{{url('')}}" method="POST">
                    {!! csrf_field() !!}
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Tên khách hàng </label>
                        <input type="text" name="bien_so" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Số điện thoại</label>
                        <input type="number" name="so_xe" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Số lượng vé </label>
                        <input type="number" name="so_luong_ve" min="1" max="5" class="form-control" required>
                    </div>
                    <div class="form-floating mb-3">
                        <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea"
                            name="ghi_chu"></textarea>
                        <label for="floatingTextarea">Ghi chú</label>
                    </div>
                    <button type="submit" class="btn btn-primary">Xác nhận</button>
                </form>
            </div>
        </div>
    </div>

</section>
@endsection