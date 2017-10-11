<!-- Navigation -->
<nav class="navbar navbar-inverse" role="navigation">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <?= $this->Html->link('Admin Panel', '/admin/',['class'=>'navbar-brand']) ?>
        </div>
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <!--<li><?= $this->Html->link('Posts', '/') ?></li>-->
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#"><?= $this->request->session()->read('Auth.User.username'); ?> <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><?= $this->Html->link('Logout', array('controller'=>'admin', 'action'=>'logout')); ?></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>