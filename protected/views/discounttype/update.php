<?php
/* @var $this DiscounttypeController */
/* @var $model DiscountType */

$this->breadcrumbs=array(
	'Discount Types'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List DiscountType', 'url'=>array('index')),
	array('label'=>'Create DiscountType', 'url'=>array('create')),
	array('label'=>'View DiscountType', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage DiscountType', 'url'=>array('admin')),
);
?>

<h1>Update DiscountType <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>