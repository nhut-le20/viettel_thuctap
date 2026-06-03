<?php
// Trang chi tiết dịch vụ Ví bảo hiểm xã hội điện tử
?>

<video autoplay muted loop playsinline class="video-bg">
    <source src="video/videovBGXHDT.WEBM" type="video/webm">
</video>

<div class="video-overlay"></div>

<style>
.video-bg{
    position:fixed;
    top:0;
    left:0;
    width:100%;
    height:100%;
    object-fit:cover;
    z-index:-2;
}

.video-overlay{
    position:fixed;
    inset:0;
    background:rgba(0,0,0,0.5);
    z-index:-1;
}
, .page-hero p  .eyebrow{
    text-shadow:
    0 2px 4px rgba(0, 0, 0, 0.8 ),
    0 4px 10px rgba(0,0,0,0.7);
}
</style>

<section class="section page-hero">
    <div class="container narrow">

        <p class="eyebrow" style="color:white;">
            Ví bảo hiểm xã hội điện tử
        </p>

        <h1 style="color:white;">
            Quản lý hồ sơ BHXH trực tuyến — đúng quy định, gọn quy trình
        </h1>

        <p style="color:white;">
            Trang chi tiết cho dịch vụ <strong>Ví bảo hiểm xã hội điện tử</strong>.
            Tối ưu việc kê khai, nộp và theo dõi hồ sơ trực tuyến, giảm thao tác thủ công
            và hạn chế sai sót.
        </p>

    </div>
</section>

<section class="section">
    <div class="container section-heading">

        <p style="color:white;" class="eyebrow">
            Tổng quan
        </p>

        <p style="
            color:white;
            max-height:400px;
            overflow-y:auto;
            padding-right:10px;
        ">
            vBHXH là dịch vụ giải pháp kê khai bảo hiểm điện tử được Viettel cung cấp giúp
            các tổ chức doanh nghiệp, đơn vị hành chính sự nghiệp hoặc người sử dụng lao động
            thực hiện quản lý hồ sơ bảo hiểm xã hội điện tử.

            Hệ thống hỗ trợ lập hồ sơ, ký số, gửi hồ sơ trực tuyến tới cơ quan BHXH,
            đồng thời theo dõi trạng thái xử lý và nhận kết quả nhanh chóng. Toàn bộ
            quy trình được số hóa giúp giảm thời gian thực hiện thủ tục hành chính,
            hạn chế sai sót khi kê khai và tiết kiệm chi phí vận hành cho doanh nghiệp.

            Dịch vụ đáp ứng đầy đủ các chuẩn định dạng dữ liệu theo quy định của cơ quan
            Bảo hiểm xã hội Việt Nam, hỗ trợ quản lý tập trung hồ sơ lao động, quá trình
            tham gia BHXH, BHYT, BHTN và các nghiệp vụ phát sinh khác.
        </p>

        <p style="
            color:white;
            max-height:300px;
            overflow-y:auto;
            padding-right:10px;
        ">
            Ví bảo hiểm xã hội điện tử giúp doanh nghiệp thực hiện các thủ tục BHXH mọi lúc,
            mọi nơi thông qua môi trường Internet, nâng cao hiệu quả quản lý và thúc đẩy
            quá trình chuyển đổi số trong hoạt động nhân sự.
        </p>

    </div>
</section>


<?php
require __DIR__ . '/../components/process.php';
require __DIR__ . '/../components/contact-section.php';
require __DIR__ . '/../components/faq.php';
?>