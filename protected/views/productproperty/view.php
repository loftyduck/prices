<?php
/* @var $this ProductpropertiesController */
/* @var $model ProductProperties */

$this->breadcrumbs=array(
	'Product Properties'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List ProductProperties', 'url'=>array('index')),
	array('label'=>'Create ProductProperties', 'url'=>array('create')),
	array('label'=>'Update ProductProperties', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete ProductProperties', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage ProductProperties', 'url'=>array('admin')),
);
?>

<h1>View ProductProperties #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'description',
		'type',
	),
)); ?>
