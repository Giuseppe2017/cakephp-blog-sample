<h1><?= h($topic->title) ?></h1>
<p><?= "Content : ".h($topic->content) ?></p>
<p>Tags :<?= h($topic->tags) ?></p>
By <h3><?= h($topic->author) ?></h3>
<p><small>Created: <?php echo date('F d, Y',strtotime($topic->created)); /*$topic->created->format(DATE_RFC850)*/ ?></small></p>