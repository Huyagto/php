<link rel="stylesheet" href="<?= BASE_URL ?>/assets/css/category.css">

<div class="category-title-flex">
    <div class="category-title">
        <i class="fa-solid fa-tags"></i>
        <span>Quản lý thể loại</span>
    </div>

    <a class="btn-add" href="<?= BASE_URL ?>/admin/categories/create">
        + Thêm thể loại
    </a>
</div>

<div class="category-card">
    <table class="category-table">
        <thead>
            <tr>
                <th width="60">ID</th>
                <th>Tên</th>
                <th width="140">Hành động</th>
            </tr>
        </thead>

        <tbody>
        <?php foreach ($categories as $c): ?>
            <tr>
                <td><?= $c['id'] ?></td>
                <td><?= htmlspecialchars($c['name']) ?></td>
                <td>
                    <div class="category-actions">
                        <a class="btn-small btn-edit"
                           href="<?= BASE_URL ?>/admin/categories/edit/<?= $c['id'] ?>">Sửa</a>

                        <a class="btn-small btn-delete"
                           onclick="return confirm('Xóa thể loại này?')"
                           href="<?= BASE_URL ?>/admin/categories/delete/<?= $c['id'] ?>">
                            Xóa
                        </a>
                    </div>
                </td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
</div>
