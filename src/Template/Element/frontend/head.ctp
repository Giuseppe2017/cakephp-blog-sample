<?php
    echo $this->Html->charset();
    echo $this->Html->meta('icon');
    echo $this->Html->css(array(
        'bootstrap.min.css'
        ,'/font-awesome/css/font-awesome.min.css'
        ,'common/googleFont.css'
        ,'common/googleFontOpenSans.css'
        ,'frontend/clean-blog.min.css'
    ));
?>
<title><?= $this->fetch('titles') ?></title>

