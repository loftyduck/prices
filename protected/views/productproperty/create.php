<?php
/* @var $this ProductpropertiesController */
/* @var $model ProductProperties */

$this->breadcrumbs=array(
	'Product Properties'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List ProductProperties', 'url'=>array('index')),
	array('label'=>'Manage ProductProperties', 'url'=>array('admin')),
);
?>

<h1>Create ProductProperties</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>