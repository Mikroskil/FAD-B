<div class="panel panel-default">
<div class="panel-heading">
<small><i class="icon icon-user"></i> <?php echo $data->author->username . ' <i class="icon icon-calendar"></i> ' . date('F j, Y',$data->create_time); ?></small>
</div>
<div class="panel-body">
<?php echo CHtml::link(CHtml::encode($data->title), $data->url,array('class'=>'titlePost')); ?>
<?php
	$this->beginWidget('CMarkdown', array('purifyOutput'=>true));
	echo $data->content;
	$this->endWidget();
?>

</div>
</div>