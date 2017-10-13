<?php
    echo $this->Html->charset();
    echo $this->Html->meta('icon');
    echo $this->Html->css(array(
        //'bootstrap.min.css'
        'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css'
        ,'/font-awesome/css/font-awesome.min.css'
        ,'common/googleFont.css'
        ,'common/googleFontOpenSans.css'
        ,'styles.css'
        ,'base.css'
        ,'cake.css'
    ));
?>
<title><?= $this->fetch('titles') ?></title>

