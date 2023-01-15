@extends('backend.index')
@section('content')
<section class="main shadow p-3 mb-5 bg-body-tertiary rounded">
    <h1 class="bg-primary-subtle rounded-3 ps-3 pt-2 pb-2">Danh sách khách hàng</h1>
    <div class=" border rounded">
        <table class="table table-hover">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Tên</th>
                    <th scope="col">SĐT</th>
                    <th scope="col">Gmail</th>
                    <th scope="col">Thao thác</th>

                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row" class="width10">1 fasdf asdf adsfas asdfasd sdf dfasqwerq rqwe</th>
                    <td class="width150">Nguyên sdaf sd sdfa dfasdf fasd em thanh pho buon nho khong em Nguyên sdaf sd
                        sdfa dfasdf fasd em thanh pho buon nho khong em</td>
                    <td class="width10">0987654321</td>
                    <td class="width300">Nguyen@gmail.com Nguyên sdaf sd sdfa dfasdf fasd em thanh pho buon nho khong
                        Nguyên sdaf sd sdfa dfasdf fasd em thanh pho buon nho khong Nguyên sdaf sd sdfa dfasdf fasd em
                        thanh pho buon nho khong </td>
                    <td>xóa | sửa</td>
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