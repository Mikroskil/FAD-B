<?php
/* @var $this Subkategori2Controller */
/* @var $model Subkategori2 */

$this->breadcrumbs=array(
	'Subkategoris'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Subkategori', 'url'=>array('index')),
	array('label'=>'Create Subkategori', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#subkategori2-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Subkategoris</h1>

<p>
Gunakan operator ini(<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
atau <b>=</b>) di awal setiap Pencarian Untuk melakukan Perbandingan.
</p>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'subkategori2-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'idsub',
		'kategori',
		'subkategori',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
