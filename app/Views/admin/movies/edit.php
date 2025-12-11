<link rel="stylesheet" href="<?= BASE_URL ?>/assets/css/movie.css">

<div class="movie-form-card">

    <div class="movie-form-title">
        <i class="fa-solid fa-pen-to-square"></i>
        <span>Chỉnh sửa phim</span>
    </div>

    <form method="POST" enctype="multipart/form-data">

        <label>Tiêu đề</label>
        <input type="text" name="title" class="movie-input"
               value="<?= htmlspecialchars($movie['title']) ?>" required>

        <label>Mô tả</label>
        <textarea name="description" class="movie-textarea"><?= htmlspecialchars($movie['description']) ?></textarea>

        <label>Năm sản xuất</label>
        <input type="number" name="year" class="movie-input" value="<?= $movie['year'] ?>">

        <label>Tác giả</label>
        <select name="author_id" class="movie-select">
            <?php foreach ($authors as $a): ?>
                <option value="<?= $a['id'] ?>" <?= $a['id']==$movie['author_id']?'selected':'' ?>>
                    <?= $a['name'] ?>
                </option>
            <?php endforeach; ?>
        </select>

        <label>Thể loại</label>
        <div class="category-list">
            <?php $selectedIds = array_column($selected, 'category_id'); ?>
            <?php foreach ($categories as $c): ?>
                <label>
                    <input type="checkbox" name="categories[]" value="<?= $c['id'] ?>"
                        <?= in_array($c['id'], $selectedIds) ? "checked" : "" ?>>
                    <?= $c['name'] ?>
                </label>
            <?php endforeach; ?>
        </div>

        <label>Poster hiện tại</label>
        <?php if ($movie['poster']): ?>
            <img src="<?= BASE_URL ?>/uploads/<?= $movie['poster'] ?>" class="poster-preview">
        <?php endif; ?>

        <label>Thay poster mới</label>
        <input type="file" name="poster" class="movie-input">

        <button class="btn-submit" type="submit">Cập nhật phim</button>

    </form>

</div>
