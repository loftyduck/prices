<?php
/* @var $this PriceController */
/* @var $model Price */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'price-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'store'); ?>
		<?php echo $form->dropDownList($model,'store',CHtml::listData(Store::model()->findAll(),'id','name')); ?>
		<?php echo $form->error($model,'store'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'product'); ?>
		<?php echo $form->dropDownList($model,'product',CHtml::listData(Product::model()->findAll(),'id','name')); ?>
		<?php echo $form->error($model,'product'); ?>
	</div>


	<div class="row">
		<?php echo $form->labelEx($model,'value'); ?>
		<?php echo $form->textField($model,'value'); ?>
		<?php echo $form->error($model,'value'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'date'); ?>
		<?php echo $form->textField($model,'date'); ?>
		<?php echo $form->error($model,'date'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'zipcode'); ?>
		<?php echo $form->textField($model,'zipcode'); ?>
		<?php echo $form->error($model,'zipcode'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->
