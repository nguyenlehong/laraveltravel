@extends('backend.index')
@section('content')
<section class="main shadow p-3 mb-5 bg-body-tertiary rounded">
    <h1 class="bg-primary-subtle rounded-3 ps-3 pt-2 pb-2">Danh sách lịch chạy</h1>
    <div class=" border rounded lichChay">
        <div class="lichChay-container">
            <div class="lichChay-list">
                <h3>Danh sách </h3>
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
                        <tr>
                            <th scope="row">1</th>
                            <td>10/2/2023</td>
                            <td>14h</td>
                            <td>Tiền Giang => <br>
                            Bạc Liêu
                            </td>
                            <td>400.000đ</td>
                            <td>xe 01  <br> 
                            63A2- 12345
                            </td>
                            <td> Sửa | xóa | khách </td>
                        </tr>
                        <tr>
                            <th scope="row">2</th>
                            <td>10/2/2023</td>
                            <td>12h</td>
                            <td>Tiền Giang => <br>
                            Bến Tre
                            </td>
                            <td>200.000đ</td>
                            <td>xe 02  <br> 
                            63A2- 92737
                            </td>
                            <td> Sửa | xóa | khách </td>
                        </tr>

                    </tbody>
                </table>
            </div>
            <div class="car-add">
                <h3>Thêm mới</h3>
                <form>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Số xe</label>
                        <select class="form-select" aria-label="Default select example">
                            <option value="1">Xe 01</option>
                            <option value="2">Xe 02</option>
                            <option value="3">Xe 03</option>
                          </select>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Ngày chạy</label>
                        <input type="date" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label"> Giờ chạy </label> 
                        <input type="time" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Tuyến xe </label> 
                        <select class="form-select" aria-label="Default select example">
                            <option value="1">Tiền Giang - Cà Mau</option>
                            <option value="2">Tiền Giang - Bến Tre</option>
                            <option value="3">Tiền Giang - Mỹ Tho</option>
                          </select>
                    </div>
                    <button type="submit" class="btn btn-primary">Thêm</button>
                </form>
            </div>
        </div>
    </div>

</section>
@endsection