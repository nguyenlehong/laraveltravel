 <h1>Project: web đặt vé xe</h1>
        <h2>Tóm tắt:</h2>
        Web đặt vé xe Laravel cung cấp cho người dùng một cách dễ dàng và nhanh
        chóng để tìm và đặt vé xe. Web cung cấp các tính năng chính bao gồm các
        tùy chọn của lựa chọn hành trình, trạm lên xuống, và thanh toán an toàn.
        Người dùng cũng có thể đặt vé trực tuyến và kiểm tra lịch trình trên
        mạng.
        <h2>Cách cài đặt</h2>
        <p>
            Để sử dụng hệ thống, máy tính cần cài đặt những phần mềm sau:<br />
            Trình duyệt web: hệ thống hiện đang hoạt động trên Google Chrome<br />
            Phần mềm web server: Xamp
            <br />
            <strong>Bước 1: </strong> Khởi động Apache và MySQL trong Xampp <br>
     <img src="https://user-images.githubusercontent.com/93443014/218299258-434f57a4-a3f3-4deb-bc57-6112e94dca40.png" 
          alt="" width="auto" height="400px" />
            <br>
            <br />
            <strong> Bước 2:</strong> thêm cơ sở dữ liệu Nhấn vào Admin trên
            MySQL, ứng dụng sẽ mở đến trình duyệt web có đường dẫn
            http://localhost/phpmyadmin/. Tạo mới 1 cơ sở dữ liệu có tên là
            “laraveltravel”<br />
             <img src="https://user-images.githubusercontent.com/93443014/218300113-07207ebb-bbf0-4a34-bea9-0c8fad0f856e.png"
             alt="" width="auto" height="400px" /> <br> <br>
            Sau đó chọn Import → Choose file, sau đó chọn laraveltravel.sql và nhấn Thực
            hiện để tiến hành nhập dữ liệu<br />
            <img src="https://user-images.githubusercontent.com/93443014/218300393-0b32be65-defd-491f-8a38-d425e872f698.png"
             alt="" width="auto" height="400px" /><br><br>
            <strong>Bước 3: </strong>ép toàn bộ source code của hệ thống vào thư
            mục htdocs trong thư mục xampp.<br />
            <strong>Bước 4: </strong> Khởi động trình duyệt web, nhập đường dẫn
           http://localhost/laraveltravel/ Hệ thống dẫn đến trang như sau:<br>
             <img src="https://user-images.githubusercontent.com/93443014/218300556-4cc0fda5-7957-4e6a-af73-4f2ea4aeb005.png"
             alt="" width="auto" height="400px" /> <br>
        </p>
        <h2>Chức năng chính</h2>
        <p><strong> - Đối với người dùng</strong></p>
        <p>
            Xem được thông tin các chuyến xe: thời gian, giá tiền, thời gian di
            chuyển, ...
        </p>
        <p>Đặt vé xe.</p>
        <p>Chọn số lượng chỗ ngồi và điểm đón xe.</p>
        <p>Xem lịch sử đặt vé.</p>
        <p><strong>- Đối với admin</strong></p>
        <p>Quản lý được xe, lịch trình, chuyến đi</p>
        <p>Quản lý được số lượng khách trong mỗi chuyến</p>
        <h2>Hướng dẫn sử dụng</h2>
        <p><strong> - Đối với người dùng</strong></p>
        <p>Cần tạo 1 tài khoản với gmail và mật khẩu:</p>
        <p>Chọn chuyến xe cần đặt vé</p>
        <p>Điền đầy đủ thông tin để đặt vé</p>
                <img
            src="https://user-images.githubusercontent.com/93443014/218301293-4856ddba-c5a3-42d2-8457-ddfa4cc0025f.png  "
            alt=""
            width="auto"
            height="400px"
        /><br>
        <p>Xem lại thông tin vé đã đặt</p>
        <p><strong>- Đối với admin</strong></p>
        <p>Quản lý xe, chyến đi, lịch trình</p>
         <img
            src="https://user-images.githubusercontent.com/93443014/218301254-3fc04094-c928-4e19-8a75-d969365fe805.png "
            alt=""
            width="auto"
            height="400px"
        /><br><br>
        <p>Quản lý số lượng trong mỗi chuyến đi</p>
