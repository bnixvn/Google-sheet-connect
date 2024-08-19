# Google-sheet-connect
Code mẫu hướng dẫn kết nối lấy dữ liệu google sheet bằng API
Các bước thực hiện:

<h2>Bước 1 - Thiết lập Service Account</h2>
-Truy cập Google Cloud Console.<br>
-Tạo hoặc chọn một dự án, sau đó kích hoạt Google Sheets API trong phần APIs & Services > Library.<br>
-Tạo Service Account credentials trong phần APIs & Services > Credentials.<br>
-Tải xuống tệp JSON credentials và lưu ở vị trí mà mã nguồn của bạn có thể truy cập.<br>

<h2>Bước 2: Chia sẻ Google Sheets với Service Account</h2>
-Mở Google Sheets mà bạn muốn truy cập.<br>
-Nhấp vào nút Share và chia sẻ với email của Service Account (thường có dạng <service-account-name>@<project-id>.iam.gserviceaccount.com).<br>
-Đảm bảo rằng quyền truy cập là "Viewer" (người xem).

<h2>Bước 3: Cài đặt thư viện Google API Client cho PHP:</h2>
Sử dụng Composer để cài đặt thư viện: composer require google/apiclient

<h2>Bước 4: Code php mẫu</h2>
Xem file mẫu tại: view.php
