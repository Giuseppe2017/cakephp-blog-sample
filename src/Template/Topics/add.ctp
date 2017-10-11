<!-- File: src/Template/Topics/add.ctp -->
<div class="row">
	<div class="col-md-4"><h3>Add Topic</h3></div>
	<div class="pull-right">
		<?php
			$this->Html->addCrumb('Home', '/admin/');
			$this->Html->addCrumb('Blogs', '/topics/');
			//$this->Html->addCrumb('Add Blog', ['controller' => 'topics', 'action' => 'add']);
			$this->Html->addCrumb('Add Blog');
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

<?php
	echo $this->Form->create($topic);

	echo $this->Form->input('title',['class'=>'form-control']);
	echo "<div class='clearfix'>&nbsp</div>";

	echo $this->Form->input('content', ['rows' => '3','class'=>'form-control']);
	echo "<div class='clearfix'>&nbsp</div>";
	
	echo $this->Form->input('tags',['class'=>'form-control']); 
	echo "<div class='clearfix'>&nbsp</div>";
	
	echo $this->Form->input('author',['class'=>'form-control']);   
	echo "<div class='clearfix'>&nbsp</div>";

	echo $this->Form->button(__('Save Topic'),['class'=>'btn btn-primary']);
	echo "<div class='clearfix'>&nbsp</div>";

	echo $this->Form->end();
	echo "<div class='clearfix'>&nbsp</div>";
?>