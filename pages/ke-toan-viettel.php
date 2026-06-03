<?php
// Trang chi tiết dịch vụ Kế toán Viettel
?>
<video autoplay muted loop playsinline class="video-bg">
    <source src="video/KTVIETTEL.webm" type="video/mp4">
</video>
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
</style>
    <section class="section page-hero">
        <div class="container narrow">
            <p class="eyebrow">Kế toán Viettel</p>
            <h1>Quản trị tài chính — báo cáo nhanh, số liệu minh bạch</h1>
            <p>
                Trang chi tiết cho dịch vụ <strong>Kế toán Viettel</strong>. Hỗ trợ tổng hợp số liệu,
                theo dõi báo cáo và quản trị tài chính trực tuyến, giúp doanh nghiệp nắm bắt tình hình kịp thời.
            </p>
        </div>
    </section>
<section class="section">
    <div class="container section-heading">

        <p style="color:white;" class="eyebrow">
            Tổng quan
        </p>

        <h2 style="color:white;">
            Một luồng ký số rõ ràng, dễ vận hành
        </h2>

        <p style="
            color:white;
            max-height:300px;
            overflow-y:auto;
            padding-right:10px;
        ">
           Dịch vụ VESS là gì
vESS-PMKT là giải pháp phần mềm kế toán trong hệ sinh thái quản trị doanh nghiệp số của Viettel (vESS), đáp ứng đầy đủ nội dung việc lập, lưu trữ và ký chứng từ kế toán của hộ kinh doanh, cá nhân kinh doanh được vận dụng theo quy định tại Điều 16, Điều 18, Điều 19 Luật Kế toán và theo hướng dẫn cụ thể tại thông tư 88 của Bộ Tài Chính.
        </p>
    </div>
</section>

        <div class="container" style="margin-top:24px;">
            <a class="text-link" href="<?= htmlspecialchars(appUrl('index.php'), ENT_QUOTES, 'UTF-8') ?>?page=services">&larr; Quay lại danh sách dịch vụ</a>
        </div>
    </section>

    <?php
    require __DIR__ . '/../components/process.php';
    require __DIR__ . '/../components/contact-section.php';
    require __DIR__ . '/../components/faq.php';
    ?>

