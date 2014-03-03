<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name;
?>

<h1>Welcome to <i><?php echo CHtml::encode(Yii::app()->name); ?></i></h1>

<p>The Lofty goal of tracking prices of common products at local stores, managed by you.</p>

<p>A price is the main data point</p>
<ul>
	<li>Belongs to: Store, Product</li>
	<li>Has one: Brand</li>
	<li>Has many: Units, Discounts, Product Properties</li>
</ul>
<br><br>
<p>This site is a work in progress.  For my reference here's the <a href="http://www.yiiframework.com/doc/">documentation</a>.
Feel free to ask in the <a href="http://www.yiiframework.com/forum/">forum</a>,
should you have any questions.</p>
