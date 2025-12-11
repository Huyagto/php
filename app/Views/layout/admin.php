<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title><?= $title ?? "MovieFlix Admin" ?></title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

    <style>
        /* GLOBAL */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        body {
            background: #0d0d0d;
            color: #fff;
            font-family: "Inter", sans-serif;
            overflow-x: hidden;
        }

        /* SIDEBAR */
        .sidebar {
            width: 260px;
            height: 100vh;
            background: #111;
            padding: 25px;
            position: fixed;
            left: 0;
            top: 0;
            border-right: 1px solid #222;
        }
        .sidebar h2 {
            color: #e50914;
            margin-bottom: 30px;
        }
        .sidebar a {
            display: flex;
            align-items: center;
            padding: 12px 14px;
            border-radius: 8px;
            text-decoration: none;
            font-size: 16px;
            margin-bottom: 8px;
            color: #bfbfbf;
            transition: 0.25s;
        }
        .sidebar a i {
            margin-right: 12px;
            width: 20px;
            text-align: center;
        }
        .sidebar a:hover {
            background: rgba(229,9,20,0.20);
            color: #fff;
            transform: translateX(6px);
        }
        .sidebar .active {
            background: rgba(229,9,20,0.35);
            color: #fff;
        }

        /* MAIN CONTENT */
        .main {
            margin-left: 260px;
            padding: 30px;
            width: calc(100% - 260px);
            overflow-x: hidden;
        }

        /* HEADER */
        .admin-header {
            width: 100%;
            display: flex;
            justify-content: flex-end;
            padding-bottom: 25px;
        }
        .admin-header .user-box {
            background: #222;
            padding: 10px 18px;
            border-radius: 8px;
            color: #fff;
            display: flex;
            align-items: center;
            gap: 8px;
        }
        .logout {
            background: #e50914;
            padding: 8px 15px;
            border-radius: 6px;
            text-decoration: none;
            color: #fff;
            margin-left: 10px;
        }

        .content-box {
            background: #121212;
            padding: 25px;
            border-radius: 12px;
            box-shadow: 0 0 15px rgba(0,0,0,0.4);
        }
    </style>
</head>
<body>

    <!-- SIDEBAR -->
    <div class="sidebar">
        <h2>MovieFlix</h2>

        <a href="<?= BASE_URL ?>/admin" class="<?= ($active ?? '')=='dashboard'?'active':'' ?>">
            <i class="fa-solid fa-chart-line"></i> Dashboard
        </a>

        <a href="<?= BASE_URL ?>/admin/movies" class="<?= ($active ?? '')=='movies'?'active':'' ?>">
            <i class="fa-solid fa-film"></i> Movies
        </a>

        <a href="<?= BASE_URL ?>/admin/categories" class="<?= ($active ?? '')=='categories'?'active':'' ?>">
            <i class="fa-solid fa-tags"></i> Categories
        </a>

        <a href="<?= BASE_URL ?>/admin/authors" class="<?= ($active ?? '')=='authors'?'active':'' ?>">
            <i class="fa-solid fa-pen-nib"></i> Authors
        </a>

        <a href="<?= BASE_URL ?>/admin/users" class="<?= ($active ?? '')=='users'?'active':'' ?>">
            <i class="fa-solid fa-users"></i> Users
        </a>

        <a href="<?= BASE_URL ?>/home">
            <i class="fa-solid fa-arrow-left"></i> Về trang chủ
        </a>
    </div>

    <!-- MAIN -->
    <div class="main">

        <div class="admin-header">
            <div class="user-box">
                <i class="fa-solid fa-user"></i>
                <?= $_SESSION['user']['username'] ?? 'Admin' ?>
            </div>
            <a class="logout" href="<?= BASE_URL ?>/logout">
                <i class="fa-solid fa-right-from-bracket"></i>
                Đăng xuất
            </a>
        </div>

        <div class="content-box">
            <?= $content ?>
        </div>

    </div>

</body>
</html>
