<div class="col-lg-8 col-md-10 mx-auto">
<?php 
    //print_r(iterator_count($topics));
if(isset($topics) && !$topics->isEmpty()){ 
    foreach ($topics as $topic){
        echo "<div class='post-preview'>";
            echo $this->Html->link("
                <h2 class='post-title'>".$topic->title."</h2>",
                ['action' => 'view', $topic->titleSlug],
                ['escape' => false]
            );

            $txtContent = strip_tags($topic->content);
            if(strlen($txtContent) > 140){
                $txtContentCut = substr($txtContent, 0, 140);
                $txtContent = substr($txtContentCut, 0, strrpos($txtContentCut, ' ')).'... <br><br>'.$this->Html->link("Read More", ['action' => 'view', $topic->titleSlug],['class'=>'btn btn-primary btn-sm']);
            }
            echo "<h5 class='post-subtitle'>".$txtContent."</h5>";

            echo "<p class='post-meta'>Posted by ".h($topic->author)." on ".h(date('F d, Y',strtotime($topic->created)))."</p>";
            //echo "<span class='label label-info'>".h($topic->tags)."</span>";
            echo "<div class='clearfix'>&nbsp;</div>";
        echo "</div>";
    }
}else{
    echo "No blogs found.";
}
?>
    <hr>
    <!-- Pager -->
    <!--<div class="clearfix"><a class="btn btn-secondary float-right" href="#">Older Posts &rarr;</a></div>-->
</div>
<hr>