<?php
/* @var $this PostController */
/* @var $model Post */

$this->breadcrumbs=array(
	'Posts'=>array('admin'),
	'Manage',
);

$this->menu=array(
array('icon' => 'icon-home','label'=>'Manage Post', 'url'=>array('admin')),
array('icon' => 'icon-plus-sign','label'=>'Create Post', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#post-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
$pageSize=Yii::app()->user->getState('pageSize',Yii::app()->params['defaultPageSize']);
?>

<h1>Manage Posts</h1>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button btn btn-sm btn-primary')); ?>&nbsp;
 <?php echo CHtml::link('Create New Posts',array('create'),array('class'=>'btn btn-sm btn-info')); ?>&nbsp; 

<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'post-grid',
	'itemsCssClass'=>'table table-hover table-bordered',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		array(
			'name'=>'title',
			'type'=>'raw',
			'value'=>'CHtml::link(CHtml::encode($data->title), $data->url)'
		),
		array(
			'name'=>'status',
			'value'=>'Lookup::item("PostStatus",$data->status)',
			'filter'=>Lookup::items('PostStatus'),
		),
		array(
			'name'=>'create_time',
			'type'=>'datetime',
			'filter'=>false,
		),
		array(
			'class'=>'CButtonColumn',
			'htmlOptions'=>array('width'=>'80px'),
			'header'=>CHtml::dropDownList('pageSize',$pageSize,array(5=>5,15=>15,25=>25),array(
                		'onchange'=>"$.fn.yiiGridView.update('post-grid',{ data:{pageSize: $(this).val() }})",
    		)),
		),
	),
)); ?>