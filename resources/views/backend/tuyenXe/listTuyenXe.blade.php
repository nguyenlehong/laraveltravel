@extends('backend.index')
@section('content')
<section class="main shadow p-3 mb-5 bg-body-tertiary rounded">
    <h1 class="bg-primary-subtle rounded-3 ps-3 pt-2 pb-2">Danh sách tuyến xe</h1>
    <div class=" border rounded car">
        <div class="car-container">
            <div class="car-list">
                <h3>Danh sách </h3>
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
                        <tr>
                            <th scope="row">1</th>
                            <td>Tiền Giang</td>
                            <td>Cà Mau</td>
                            <td>3h </td>
                            <td>400.000đ</td>
                            <td> Sửa | xóa</td>
                        </tr>
                        <tr>
                            <th scope="row">2</th>
                            <td>Tiền Giang</td>
                            <td>Bạc Liêu</td>
                            <td>2h </td>
                            <td>300.000đ</td>
                            <td> Sửa | xóa</td>
                        </tr>

                    </tbody>
                </table>
            </div>
            <div class="car-add">
                <h3>Thêm mới</h3>
                <form>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Nơi khởi hành </label>
                        <input type="text" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Nơi kết thúc </label>
                        <input type="text" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label"> Thời gian di chuyển </label> 
                        <input type="number" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Giá </label> 
                        <input type="number" class="form-control">
                    </div>
                    <button type="submit" class="btn btn-primary">Thêm</button>
                </form>
            </div>
        </div>
    </div>

</section>
@endsection