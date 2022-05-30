# Nhom3_BaoCaoCuoiKy_LTCSDLNC
Hướng Dẫn:
Cài đặt XXAMP để có thể chạy Website:

Link cài đặt XXAMP: https://www.apachefriends.org/download.html

Bước 1: Tải source code về và giải nén, tìm đến thư mục xxamp đã cài đặt bỏ file source code đã giải nén vào trong thư mục htdocs

Bước 2: Chạy XXAMP và start module apache và mysql -> Nhấn vào admin trong Actions của mysql để đến trang PhpAdmin

Bước 3: Trong PhpAdmin, Chọn new thanh bên trái -> Đến phần Create Database tạo Database name là "websach" và Chọn collation là utf8mb4_general_ci -> Chọn Create để tạo database

Bước 4: Nhấn vào database websach tại thanh bên trái, trên thanh công cụ chọn import và chọn Choose file tìm đến File "websach.sql" trong htdocs/websach nhấn open -> Nhấn Go để import dữ liệu vào

Bước 5: Tiến hành chạy Website 

* Link Url trang web:

url của Website: http://localhost/websach/index.php

url của Admin: http://localhost/websach/admin/index.php

Tài khoản đăng nhập trang Admin

Tài khoản: tanhoa

Mật khẩu: 12345678
