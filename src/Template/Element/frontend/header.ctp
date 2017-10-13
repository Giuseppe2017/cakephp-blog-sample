    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
        <div class="container">
            <?php echo $this->Html->link('Webonise Blog Portal','/',['class'=>'navbar-brand']); ?>
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">Menu<i class="fa fa-bars"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item"><?php echo $this->Html->link('Home','/',['class'=>'nav-link']); ?></li>
                    <li class="nav-item"><?php echo $this->Html->link('Contact','/contact',['class'=>'nav-link']); ?></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Page Header -->
    <header class="masthead" style="background-image: url(<?php echo $FrontEndImage; ?>)">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-10 mx-auto">
                    <div class="site-heading">
                        <h1>Blogs</h1>
                        <span class="subheading"></span>
                    </div>
                </div>
            </div>
        </div>
    </header>