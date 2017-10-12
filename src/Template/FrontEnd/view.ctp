<?php
if(isset($topics) && !$topics->isEmpty()){ 
    foreach ($topics as $topic){
    	//print_r($topic);
    	echo "<div>";
			echo "<h1>".h($topic->title)."</h1>";
			echo "<p>".h($topic->content)."</p>";
			echo "<p> Tags : ".h($topic->tags)."</p>";
			echo "<p>Posted by ".h($topic->author)." on ".h(date('F d, Y',strtotime($topic->created)))."</p>";	
		echo "</div>";	
    }
}else{
	echo "No blogs found !!";
}