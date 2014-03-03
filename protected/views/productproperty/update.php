<?php
/* @var $this ProductpropertiesController */
/* @var $model ProductProperties */

$this->breadcrumbs=array(
	'Product Properties'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List ProductProperties', 'url'=>array('index')),
	array('label'=>'Create ProductProperties', 'url'=>array('create')),
	array('label'=>'View ProductProperties', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage ProductProperties', 'url'=>array('admin')),
);
?>

<h1>Update ProductProperties <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>