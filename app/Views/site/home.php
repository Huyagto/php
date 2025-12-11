<?php ob_start(); ?>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

<style>
    .hero {
        height: 80vh;
        background: url('https://wallpapercave.com/wp/wp8814978.jpg') center/cover no-repeat;
        position: relative;
    }
    .hero::after {
        content: "";
        position: absolute;
        inset: 0;
        background: linear-gradient(to bottom, rgba(0,0,0,0.3), #000);
    }

    .hero-content {
        position: absolute;
        bottom: 120px;
        left: 60px;
        max-width: 550px;
        z-index: 2;
    }

    .hero-title {
        font-size: 60px;
        font-weight: 800;
        margin-bottom: 15px;
    }
    .hero-desc {
        font-size: 20px;
        color: #ddd;
        margin-bottom: 20px;
    }

    .btn-row { display:flex; gap:10px; }
    .btn-play, .btn-info {
        padding: 12px 24px;
        border-radius: 6px;
        font-size: 18px;
        cursor: pointer;
        border: none;
        display: flex;
        align-items: center;
        font-weight: bold;
    }
    .btn-play { background: white; color: black; }
    .btn-info { background: rgba(255,255,255,0.2); color: white; }

    .fade-bottom {
        width: 100%;
        height: 200px;
        position: absolute;
        bottom: 0;
        background: linear-gradient(to bottom, transparent, #000);
    }
</style>

<div class="hero">
    <div class="hero-content">
        <h1 class="hero-title">Xem phim chất lượng cao</h1>
        <p class="hero-desc">Xem phim miễn phí – cập nhật liên tục – trải nghiệm như Netflix.</p>

        <div class="btn-row">
            <button class="btn-play"><i class="fa-solid fa-play"></i> Xem ngay</button>
            <button class="btn-info"><i class="fa-solid fa-circle-info"></i> Chi tiết</button>
        </div>
    </div>
    <div class="fade-bottom"></div>
</div>

<?php
$content = ob_get_clean();
require __DIR__ . '/../layout/site.php';
?>
