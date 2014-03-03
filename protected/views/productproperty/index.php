<?php
/* @var $this ProductpropertiesController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Product Properties',
);

$this->menu=array(
	array('label'=>'Create ProductProperties', 'url'=>array('create')),
	array('label'=>'Manage ProductProperties', 'url'=>array('admin')),
);
?>

<h1>Product Properties</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
