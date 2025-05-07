<div class="container">
    <div class="detail">
        <div class="detailkiri">
            <p><?= $data['anime']['judul'] ?></p>
            <img src="<?= $data['anime']['gambar'] ?>" alt="">
            <p><?= $data['anime']['rating'] ?></p>
        </div>
        <div class="detailkanan">
            <p>Sinopsis: <?= $data['anime']['sinopsis'] ?></p>
            <p>Studio: <?= $data['anime']['studio'] ?></p>
            <p>Genre: <?= $data['anime']['genre'] ?></p>
            <div class="video">
                <h3>Episode</h3>
                <ul>
                    <?php foreach( $data['eps'] as $eps ) : ?>
                        <li>
                            <p><a href="<?= BASEURL; ?>eps/<?= $eps['id'] ?>"><?= $eps['judul'] ?></a></p>
                        </li>
                    <?php endforeach; ?>
                </ul>
            </div>
        </div>
    </div>
</div>
    
    