<!--
<h1><?= h($topic->title) ?></h1>
<p><?= "Content : ".h($topic->content) ?></p>
<p>Tags :<?= h($topic->tags) ?></p>
By <h3><?= h($topic->author) ?></h3>
<p><small>Created: <?php echo date('F d, Y',strtotime($topic->created)); /*$topic->created->format(DATE_RFC850)*/ ?></small></p>
-->

<?php
if(isset($topics) && !$topics->isEmpty()){ 
    foreach ($topics as $topic){
    	//print_r($topic);
		echo "<h1>".h($topic->title)."</h1>";
		echo "<p>Content : ".h($topic->content)."</p>";
		echo "<p>Tags : ".h($topic->tags)."</p>";
		echo "By <h3>".h($topic->author)."</h3>";
		echo "<p><small>Created: ".date('F d, Y',strtotime($topic->created));".</small></p>";
    }
}else{
	echo "No blogs found !!";
}