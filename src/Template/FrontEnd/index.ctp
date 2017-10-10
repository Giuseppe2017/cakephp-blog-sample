
<h1 style="text-align: center;">Blog topics</h1>
<ul>
    <?php 
        //print_r(iterator_count($topics));
        if(isset($topics) && !$topics->isEmpty()){ 
            foreach ($topics as $topic){
    ?>
    <li>
        <h3><?= $this->Html->link($topic->title, ['action' => 'view', $topic->titleSlug]) ?></h3>
        <p>
            <?php
                $txtContent = strip_tags($topic->content);
                if(strlen($txtContent) > 140){
                    $txtContentCut = substr($txtContent, 0, 140);
                    $txtContent = substr($txtContentCut, 0, strrpos($txtContentCut, ' ')).'... <br>'.$this->Html->link("Read More", ['action' => 'view', $topic->titleSlug]);
                }
                echo $txtContent;
            ?>
        </p>
        <!--<p>Tags :<?= h($topic->tags) ?></p>-->
        <span class="label label-info"><?= h($topic->tags) ?></span>
        <p><?= "By <strong>".h($topic->author).'</strong> on <small>'.h(date('F d, Y',strtotime($topic->created)))."</small>" ?></p>
        <!--
        <?= $this->Html->link($topic->title, ['action' => 'view', $topic->id]) ?>
        <?= date("d-m-Y", strtotime($topic->created)); ?>
        <div class="clearfix">&nbsp;</div>
        -->
    </li>
    <?php } } else { echo "No blogs found."; }//end foreach; ?>
</ul>
