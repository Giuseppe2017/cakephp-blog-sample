<h1>Blog topics</h1>
<p><?= $this->Html->link('Add Topic', ['action' => 'add']) ?></p>
<table>
    <tr>
        <th>Id</th>
        <th>Title</th>
        <th>Created</th>
        <th>Actions</th>
    </tr>
    <?php foreach ($topics as $topic){ ?>
    <tr>
        <?php
            /*
            echo "<pre>";
                print_r($topic);
            echo "</pre>";
            */
        ?>
        <td><?= $topic->id ?></td>
        <td>
            <?= $this->html->link($topic->title, ['action' => 'view', $topic->id]) ?>
        </td>
        <td>
            <?= date("d-m-Y", strtotime($topic->created)); ?>
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