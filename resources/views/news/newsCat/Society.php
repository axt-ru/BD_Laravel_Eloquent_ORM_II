<?php
foreach ($newsList as $news):  ?>
    <?php if ($news['idCat'] == 3) {?>
        <div>
            <a href="/news/<?=$news['id']?>"><?=$news['title']?></a>
            <br><br>
            <img src="<?=$news['image'] ?>" style="width: 200px" alt="image">
            <br>
            <p><strong>Автор: </strong> <?=$news['author'] ?></p>
            <p><?=$news['description'] ?></p>
            <p><?=$news['idCat'] ?></p>
            <hr>


        </div>  <?php }?>

<?php endforeach; ?>
