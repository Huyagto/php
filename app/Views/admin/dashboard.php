<?php
ob_start(); // layout chính

// Hàm tính vòng tròn
function circleOffset($value)
{
    $max = 40;
    if ($value > $max) $value = $max;
    $percent = $value / $max;
    return 188 - (188 * $percent);
}
?>

<style>
/* =======================
   DASHBOARD PREMIUM UI
========================*/
.dashboard-wrapper {
    padding: 40px;
    color: white;
}
body, html {
        height: auto !important;
        min-height: 100%;
        overflow-y: auto;
        background: #000;
    }

    .admin-content {
        padding-bottom: 60px; /* chống footer đè */
        min-height: calc(100vh - 70px); 
    }
.dashboard-title {
    font-size: 38px;
    font-weight: 700;
    display: flex;
    align-items: center;
    gap: 12px;
}

.dashboard-title i {
    font-size: 40px;
}

/* GRID */
.stats-grid {
    margin-top: 40px;
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    gap: 28px;
}

/* CARD PREMIUM */
.stat-card {
    background: rgba(255, 255, 255, 0.05);
    padding: 26px;
    border-radius: 18px;
    display: flex;
    justify-content: space-between;
    align-items: center;
    backdrop-filter: blur(16px);
    -webkit-backdrop-filter: blur(16px);
    border: 1px solid rgba(255, 255, 255, 0.12);
    box-shadow: 0 0 16px rgba(255, 0, 0, 0.25);
    transition: 0.3s ease;
}
.stat-card:hover {
    transform: translateY(-4px);
    box-shadow: 0 0 25px rgba(255, 0, 0, 0.5);
}

/* ICON */
.stat-icon {
    font-size: 42px;
    margin-bottom: 10px;
}

/* TEXT */
.stat-label {
    font-size: 20px;
    opacity: 0.9;
}
.stat-value {
    font-size: 34px;
    font-weight: 700;
    margin-top: 6px;
}

/* CIRCLE */
.circle-box {
    position: relative;
    width: 85px;
    height: 85px;
}
.circle-box svg {
    transform: rotate(-90deg);
}
.circle-bg {
    stroke: rgba(255, 255, 255, 0.15);
    stroke-width: 8;
}
.circle-progress {
    stroke: #ff2a2a;
    stroke-width: 8;
    stroke-linecap: round;
    transition: 0.4s;
}
.circle-number {
    position: absolute;
    inset: 0;
    display: flex;
    font-size: 22px;
    align-items: center;
    justify-content: center;
    font-weight: 700;
}

/* CHART SECTION */
.chart-box {
    margin-top: 60px;
    background: rgba(255, 255, 255, 0.05);
    padding: 26px;
    border-radius: 18px;
    backdrop-filter: blur(16px);
    border: 1px solid rgba(255, 255, 255, 0.12);
}
.chart-title {
    font-size: 26px;
    font-weight: 600;
    margin-bottom: 12px;
}
</style>

<div class="dashboard-wrapper">

    <h1 class="dashboard-title">
        <i class="fa-solid fa-chart-simple"></i> Thống kê hệ thống
    </h1>

    <!-- GRID -->
    <div class="stats-grid">

        <!-- USERS -->
        <div class="stat-card">
            <div>
                <div class="stat-icon">👤</div>
                <div class="stat-label">Người dùng</div>
                <div class="stat-value"><?= $totalUsers ?></div>
            </div>

            <div class="circle-box">
                <svg width="85" height="85">
                    <circle cx="42" cy="42" r="30" class="circle-bg"></circle>
                    <circle cx="42" cy="42" r="30"
                        class="circle-progress"
                        stroke-dasharray="188"
                        stroke-dashoffset="<?= circleOffset($totalUsers) ?>"></circle>
                </svg>
                <div class="circle-number"><?= $totalUsers ?></div>
            </div>
        </div>

        <!-- MOVIES -->
        <div class="stat-card">
            <div>
                <div class="stat-icon">🎬</div>
                <div class="stat-label">Phim</div>
                <div class="stat-value"><?= $totalMovies ?></div>
            </div>

            <div class="circle-box">
                <svg width="85" height="85">
                    <circle cx="42" cy="42" r="30" class="circle-bg"></circle>
                    <circle cx="42" cy="42" r="30"
                        class="circle-progress"
                        stroke-dasharray="188"
                        stroke-dashoffset="<?= circleOffset($totalMovies) ?>"></circle>
                </svg>
                <div class="circle-number"><?= $totalMovies ?></div>
            </div>
        </div>

        <!-- CATEGORIES -->
        <div class="stat-card">
            <div>
                <div class="stat-icon">🏷️</div>
                <div class="stat-label">Thể loại</div>
                <div class="stat-value"><?= $totalCats ?></div>
            </div>

            <div class="circle-box">
                <svg width="85" height="85">
                    <circle cx="42" cy="42" r="30" class="circle-bg"></circle>
                    <circle cx="42" cy="42" r="30"
                        class="circle-progress"
                        stroke-dasharray="188"
                        stroke-dashoffset="<?= circleOffset($totalCats) ?>"></circle>
                </svg>
                <div class="circle-number"><?= $totalCats ?></div>
            </div>
        </div>

        <!-- AUTHORS -->
        <div class="stat-card">
            <div>
                <div class="stat-icon">✍️</div>
                <div class="stat-label">Tác giả</div>
                <div class="stat-value"><?= $totalAuthors ?></div>
            </div>

            <div class="circle-box">
                <svg width="85" height="85">
                    <circle cx="42" cy="42" r="30" class="circle-bg"></circle>
                    <circle cx="42" cy="42" r="30"
                        class="circle-progress"
                        stroke-dasharray="188"
                        stroke-dashoffset="<?= circleOffset($totalAuthors) ?>"></circle>
                </svg>
                <div class="circle-number"><?= $totalAuthors ?></div>
            </div>
        </div>

    </div>

    <!-- BIỂU ĐỒ -->
    <div class="chart-box">
        <div class="chart-title">📊 Lượng phim theo năm</div>
        <canvas id="movieChart" height="120"></canvas>
    </div>

</div>

<!-- Chart.js -->
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<script>
const ctx = document.getElementById('movieChart');
new Chart(ctx, {
    type: 'bar',
    data: {
        labels: ["2019", "2020", "2021", "2022", "2023", "2024"],
        datasets: [{
            label: "Số lượng phim",
            data: [3, 5, 8, 12, 15, <?= $totalMovies ?>],
            backgroundColor: "rgba(255, 50, 50, 0.7)"
        }]
    },
    options: {
        scales: {
            y: { beginAtZero: true }
        }
    }
});
</script>
