<?php
/* @var $this SlideController */
/* @var $model Slide */

$this->breadcrumbs=array(
	'Slides'=>array('admin'),
	'Manage',
);

$this->menu=array(
array('icon' => 'icon-home','label'=>'Manage Slide', 'url'=>array('admin')),
array('icon' => 'icon-plus-sign','label'=>'Create Slide', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#slide-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
$pageSize=Yii::app()->user->getState('pageSize',Yii::app()->params['defaultPageSize']);
?>

<h1>Manage Slides</h1>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button btn btn-sm btn-primary')); ?>&nbsp;
 <?php echo CHtml::link('Create New Slides',array('create'),array('class'=>'btn btn-sm btn-info')); ?>&nbsp; 

<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'slide-grid',
	'itemsCssClass'=>'table table-hover table-bordered',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'file',
		'judul',
		'ket',
		array(
			'class'=>'CButtonColumn',
			'htmlOptions'=>array('width'=>'80px'),
			'header'=>CHtml::dropDownList('pageSize',$pageSize,array(5=>5,15=>15,25=>25),array(
                		'onchange'=>"$.fn.yiiGridView.update('slide-grid',{ data:{pageSize: $(this).val() }})",
    		)),
		),
	),
)); ?>