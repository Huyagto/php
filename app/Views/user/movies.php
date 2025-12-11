<h2 style="color:white;">Phim phổ biến</h2>

<div style="display:flex; gap:20px; flex-wrap:wrap;">
    <?php foreach ($movies as $m): ?>
        <a href="<?= BASE_URL ?>/movie/<?= $m['id'] ?>" 
           style="color:white; text-decoration:none;">
           
            <div style="width:180px;">
                <img src="https://image.tmdb.org/t/p/w500<?= $m['poster_path'] ?>" 
                     style="width:100%; border-radius:10px;">
                <p><?= $m['title'] ?></p>
            </div>

        </a>
    <?php endforeach; ?>
</div>
