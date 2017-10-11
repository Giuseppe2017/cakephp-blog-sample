<!DOCTYPE html>
<html lang="en">
<head>
    <?= $this->element('frontend/head') ?>
</head>
<body>
    <?= $this->element('frontend/header') ?>
    
    <!-- Page Content -->
    <div class="container">
        <?= $this->Flash->render() ?>
        <div class="row">
            <?= $this->fetch('content') ?>
        </div>
    </div>
    <?= $this->element('frontend/footer') ?>
</body>
</html>
