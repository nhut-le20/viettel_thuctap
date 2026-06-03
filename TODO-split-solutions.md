ok# TODO - Tách /#solutions và /services

## Mục tiêu
- Tách riêng phần "Giải pháp" đang nằm trên trang `/#solutions` (hiện do `components/services.php` render trong `pages/home.php`) thành một route độc lập.
- Giữ route `http://127.0.0.1/webviettel/services` chỉ hiển thị trang Dịch vụ (giữ `pages/services.php`).

## Thống nhất behavior mong muốn
- `/#solutions` => hiển thị layout/section mới cho "Giải pháp" (code soạn riêng).
- `/services` => hiển thị trang danh mục/dịch vụ hiện tại (giữ như đã có).

## Bước thực hiện
1. Tạo file trang mới cho "Giải pháp" (ví dụ `pages/solutions.php`) render code riêng. ✅ sẽ làm
2. Cập nhật router trong `index.php` để map route `solutions` -> `pages/solutions.php`. ✅ sẽ làm
3. Tách component: tạo component mới (ví dụ `components/solutions.php`) chứa section cards đang ở `components/services.php`. ✅ sẽ làm
4. Cập nhật `pages/home.php` để KHÔNG còn render phần cards giải pháp ở `/#solutions` (chuyển sang component/dữ liệu phù hợp). ✅ sẽ làm
5. Cập nhật `components/navbar.php`: link "Giải pháp" đổi từ `appUrl('#solutions')` sang `appUrl('solutions')` (hoặc tương đương). ✅ sẽ làm
6. Kiểm tra link "Xem chi tiết" từ card giải pháp: nó đang trỏ `?page={slug}`; đảm bảo slug vẫn map đúng sang `pages/services.php` hiện tại hoặc tạo route chi tiết riêng nếu cần. ✅ sẽ làm
7. (Tuỳ chọn) Nếu vẫn muốn giữ anchor `/#solutions` trên home, có thể để anchor tồn tại nhưng chỉ hiển thị CTA/summary; còn phần chi tiết điều hướng sang `/solutions`.
8. Chạy thử trên trình duyệt:
   - `/` và `/solutions`
   - `/services`
   - click "Xem chi tiết" từ card



