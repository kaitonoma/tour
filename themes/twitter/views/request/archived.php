<?php
$this->breadcrumbs=array(
	Yii::t('app', 'Заявки')=>array('admin'),
	Yii::t('app', 'Управление архивными заявками'),
);
?>

<h3><?php echo Yii::t('app', 'Управление архивными заявками'); ?></h3>

<?php $this->renderPartial('admingrid', array('model'=>$model)); ?>
<?php $this->renderPartial('menu', array('model'=>$model)); ?>
