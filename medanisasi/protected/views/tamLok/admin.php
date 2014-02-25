<?php
/* @var $this TamLokController */
/* @var $model TamLok */

$this->breadcrumbs=array(
	'Tambah Lokasis'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Tambah Lokasi', 'url'=>array('index')),
	//array('label'=>'Create Tambah Lokasi', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#tam-lok-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Tambah Lokasi</h1>

<p>
Gunakan operator ini(<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
atau <b>=</b>) di awal setiap Pencarian Untuk melakukan Perbandingan.</p>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'tam-lok-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'idtambah',
		'nama',
		'email',
		'judul',
		//'artikel',
		'lokasi',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
