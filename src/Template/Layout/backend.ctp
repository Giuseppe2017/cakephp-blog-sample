<!DOCTYPE html>
<html lang="en">
<head>
    <?= $this->element('backend/head') ?>
</head>
<body>
    <?= $this->element('backend/header') ?>
    
    <div class="wrapper">
        <div class="col-md-3">
            <?= $this->element('backend/sidebar') ?>
        </div>
    </div>

    <!-- Page Content -->
    <div class="container">
        <?= $this->Flash->render() ?>
        <div class="row">
            <div class="col-md-9">
            <?= $this->fetch('content') ?>
            </div>
        </div>
    </div>
    <?= $this->element('backend/footer') ?>
</body>
</html>
