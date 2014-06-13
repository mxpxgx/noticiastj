<?php foreach ($news as $news_item): ?>

    <h2><?php echo $news_item['title'] ?></h2>
    <div class="main">
        <?php echo $news_item['text'] ?>
    </div>
    <p><a href="<?php echo $news_item['slug'] ?>">View article</a></p>

<?php endforeach ?>

<p>
<?php
    date_default_timezone_set('America/Los_Angeles');
    $date = new DateTime('2012-05-18');
    $formattedDate = $date->format(DateTime::ISO8601); 
    print_r($formattedDate); // 2012-05-18T00:00:00+0000
?>
</p>