<!--<div class="col-md-9">-->
<h1>Blogs</h1>
<div class="row">
    <div class="col-md-4"><h3><?= $this->Html->link('Add Topic', '/topics/add',['class'=>'btn btn-primary']) ?></h3></div>
    <div class="pull-right">
        <?php
            $this->Html->addCrumb('Home', '/admin/');
            $this->Html->addCrumb('Blogs');
            echo $this->Html->getCrumbList(
                [
                    'firstClass' => false,
                    'lastClass' => 'active',
                    'class' => 'breadcrumb'
                ]
            );
        ?>
    </div>
</div>

<table class="table table-bordered table-responsive" id="example">
    <tr>
        <th>Title</th>
        <th>Created</th>
        <th>Modified</th>
        <th>Actions</th>
    </tr>
    <?php foreach ($topics as $topic){ ?>
    <tr>
        <td>
            <?= $this->html->link($topic->title, ['action' => 'view', $topic->id]) ?>
        </td>
        <td>
            <?= date("d-m-Y", strtotime($topic->created)); ?>
        </td>
        <td>
            <?= date("d-m-Y", strtotime($topic->modified)); ?>
        </td>
        <td>
            <?= $this->Form->postLink(
                'Delete',
                ['action' => 'delete', $topic->id],
                ['confirm' => 'Are you sure?','class'=>'btn btn-danger'])
            ?>
            <?= $this->html->link('Edit', ['action' => 'edit', $topic->id],['class'=>'btn btn-success']) ?>
        </td>
    </tr>
    <?php } //end foreach; ?>
</table>
<!--</div>-->
