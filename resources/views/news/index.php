<?php foreach ($newsList as $news):  ?>

<div>
    <a href="/news/<?=$news['id']?>"><?=$news['title']?></a>
    <br><br>
    <img src="<?=$news['image'] ?>" style="width: 200px" alt="image">
    <br>
    <p><strong>Автор: </strong> <?=$news['author'] ?></p>
    <p><?=$news['description'] ?></p>
    <p>Категория новостей: <?=$news['idCat'] ?></p>
     <hr>


</div>

<?php endforeach; ?>

