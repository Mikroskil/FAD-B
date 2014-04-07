<?php
/* @var $this AgendaController */
/* @var $model Agenda */

$this->breadcrumbs=array(
	'Agenda'=>array('admin'),
	'Manage',
);

$this->menu=array(
array('icon' => 'icon-home','label'=>'Manage Agenda', 'url'=>array('admin')),
array('icon' => 'icon-plus-sign','label'=>'Create Agenda', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#agenda-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
$pageSize=Yii::app()->user->getState('pageSize',Yii::app()->params['defaultPageSize']);
?>

<h1>Manage Agenda</h1>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button btn btn-sm btn-primary')); ?>&nbsp;
 <?php echo CHtml::link('Create New Agenda',array('create'),array('class'=>'btn btn-sm btn-info')); ?>&nbsp; 

<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'agenda-grid',
	'itemsCssClass'=>'table table-hover table-bordered',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'tanggal',
		'judul',
		'ket',
		array(
			'class'=>'CButtonColumn',
			'htmlOptions'=>array('width'=>'80px'),
			'header'=>CHtml::dropDownList('pageSize',$pageSize,array(5=>5,15=>15,25=>25),array(
                		'onchange'=>"$.fn.yiiGridView.update('agenda-grid',{ data:{pageSize: $(this).val() }})",
    		)),
		),
	),
)); ?>