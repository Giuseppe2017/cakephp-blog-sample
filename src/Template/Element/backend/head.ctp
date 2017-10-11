<?php
    echo $this->Html->charset();
    echo $this->Html->meta('icon');
    echo $this->Html->css('bootstrap.min.css');
    echo $this->Html->css('styles.css');
    echo $this->Html->css('base.css');
    echo $this->Html->css('cake.css');
    echo $this->Html->css('font-awesome.min.css');

    //echo $this->Html->css('https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css');
    //echo $this->Html->css('https://cdn.datatables.net/1.10.16/css/dataTables.bootstrap.min.css');

    echo $this->Html->script('jquery.min.js');

    //echo $this->Html->script('https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js');
    //echo $this->Html->script('https://cdn.datatables.net/1.10.15/js/jquery.dataTables.min.js');
    echo $this->Html->script('bootstrap.min.js');
    //echo $this->Html->script('https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js');
   
    //echo $this->Html->script('https://code.jquery.com/jquery-1.12.4.js');
    //echo $this->Html->script('https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js');
    //echo $this->Html->script('https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap.min.js');
?>
<title><?= $this->fetch('titles') ?></title>

