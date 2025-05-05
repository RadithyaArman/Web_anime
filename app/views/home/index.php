<div class="container">

        <div class="list">
            <h2>Anime List</h2>
            <ul>
                <?php foreach( $data['anime'] as $anime ) : ?>
                    <li><img src="<?= $anime['gambar'] ?>" alt=""><span><?= $anime['judul'] ?></span></li>
                <?php endforeach; ?>
            </ul>
        </div>

        <div class="latest">
            <h2>Latest Release</h2>
            <ul>
                <?php foreach( $data['eps'] as $eps ) : ?>
                    <li><span><?= $eps['judul'] ?></span></li>
                <?php endforeach; ?>
            </ul>
        </div>
        
</div>