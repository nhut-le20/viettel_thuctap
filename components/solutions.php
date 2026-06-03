<style>
.hero-slider{
    width:100%;
    height:75vh;
    overflow:hidden;
    position:relative;
    border-radius:12px;
}

.slides{
    display:flex;
    width:100%;
    height:100%;
    transition:transform 1s ease-in-out;
}

.slides img{
    width:100%;
    height:100%;
    flex-shrink:0;

    object-fit: contain;
    object-position: center top;

    filter:contrast(1.05) brightness(0.98);
    transition:all .5s ease;
}
</style>


<section class="hero-slider">
    <div class="slides" id="slides">


    <img src="assets/images/banner1.jpg" alt="Banner 1">

    <img src="assets/images/banner2.jpg" alt="Banner 2">

    <img src="assets/images/banner3.jpg" alt="Banner 3">

    <!-- Clone ảnh đầu để chạy vô hạn -->
    <img src="assets/images/banner1.jpg" alt="Banner 1">

</div>
</section>

<script>
document.addEventListener('DOMContentLoaded', function(){

    const slides = document.getElementById('slides');
    const totalSlides = slides.children.length;

    let index = 0;

    function nextSlide(){

        index++;

        slides.style.transition = "transform 1s ease-in-out";
        slides.style.transform = `translateX(-${index * 100}%)`;

        if(index === totalSlides - 1){

            setTimeout(() => {

                slides.style.transition = "none";
                index = 0;
                slides.style.transform = "translateX(0)";

            }, 1000);

        }
    }

    setInterval(nextSlide, 4000);

});
</script>

<section class="section" id="solutions">


<div class="container section-heading">

    <p class="eyebrow">Giải Pháp Nổi Bật</p>

    <h2>
        Bộ giải pháp số hóa cho mọi nghiệp vụ cốt lõi
    </h2>

    <p>
        Lựa chọn từng dịch vụ riêng lẻ hoặc kết hợp thành gói tổng thể
        cho tài chính, nhân sự, bán hàng và vận hành.
    </p>

</div>

<div class="container cards-grid">

    <?php foreach (getServices() as $service): ?>

        <article
            class="service-card reveal"
            data-service-slug="<?= htmlspecialchars((string)($service['slug'] ?? ''), ENT_QUOTES, 'UTF-8') ?>">

            <span class="icon-badge icon-<?php echo e($service['icon']); ?>"
                  aria-hidden="true"></span>

            <h3><?php echo e($service['title']); ?></h3>

            <p><?php echo e($service['description']); ?></p>

            <a class="text-link"
               href="<?= htmlspecialchars(appUrl('index.php'), ENT_QUOTES, 'UTF-8') ?>?page=<?php echo e((string)($service['slug'] ?? ''), ENT_QUOTES, 'UTF-8'); ?>">
                Xem chi tiết
            </a>

        </article>

    <?php endforeach; ?>

</div>


</section>
