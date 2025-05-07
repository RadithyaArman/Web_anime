<div class="container">

        <div class="list">
            <h2>Anime List</h2>
            <ul>
                <?php foreach( $data['anime'] as $anime ) : ?>
                    <li><a href=" <?= BASEURL; ?>detail/<?= $anime['id'] ?> "><img src="<?= $anime['gambar'] ?>" alt=""><span><?= $anime['judul'] ?></span></a></li>
                <?php endforeach; ?>
            </ul>
        </div>

        <div class="latest">
            <h2>Latest Release</h2>
            <ul>
                <?php foreach( $data['eps'] as $eps ) : ?>
                    <?php
                        foreach( $data['anime'] as $anime ) {
                            if( $anime['id'] == $eps['id_anime'] ) {
                                $animeData = $anime;
                                break;
                            }
                        } 
                    ?>
                    <li><a href=" <?= BASEURL; ?>eps/<?= $eps['id'] ?> "><img src="<?= $eps['gambar'] ?>" alt="">
                        <div class="info">
                            <span><?= $eps['judul'] ?></span>
                            <p><?= $animeData['sinopsis'] ?></p>
                            <p><?= $animeData['studio'] ?></p>
                            <p><?= $animeData['rating'] ?></p>
                            <p><?= $animeData['genre'] ?></p>
                        </div>
                    </a></li>
                <?php endforeach; ?>    
            </ul>
        </div>
        
</div>