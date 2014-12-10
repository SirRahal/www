<?php
/* @var $this SiteController */
/* @var $error array */

$this->pageTitle=Yii::app()->name . ' - Error';
$this->breadcrumbs=array(
    'Error',
);
?>
<?php if( $code == 404) { ?>
    <div style="text-align: center;">
        <img src="/images/mario-404.gif" style="width: 80%;"/>
        <h1>Click <a href="/index.php">HERE</a> to go home </h1>
    </div>
<?php
}elseif( $code == 403){ ?>
    <div style="text-align: center;">
        <img src="/images/wizard-403.gif" style="width: 80%;"/>
        <h6>Click <a href="/index.php">HERE</a> to go home</h6>
        <h6>If you need access to this page, ask the Admin to give you permissions to it.</h6>
    </div>

<?php }else { ?>

    <h2>Error <?php echo $code; ?></h2>

    <div class="error">
        <?php echo CHtml::encode($message); ?>
    </div>

<?php } ?>