<link rel="stylesheet" href="<?= BASE_URL ?>/assets/css/category.css">

<div class="category-form-wrapper">
    <h2><i class="fa-solid fa-pen"></i> Sửa thể loại</h2>

    <form method="POST">
        <label>Tên thể loại:</label>
        <input type="text" name="name" 
               value="<?= htmlspecialchars($category['name']) ?>" required>

        <button type="submit">Cập nhật</button>
    </form>
</div>
