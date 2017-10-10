
<h1>Blog topics</h1>
<p>
    <?= $this->Html->link('Add Topic', ['action' => 'add']) ?>
    <?= $this->Html->link('Logout', array('controller'=>'admin', 'action'=>'logout')); ?>
</p>

<table class="table table-bordered">
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
                ['confirm' => 'Are you sure?'])
            ?>
            <?= $this->html->link('Edit', ['action' => 'edit', $topic->id]) ?>
        </td>
    </tr>
    <?php } //end foreach; ?>
</table>