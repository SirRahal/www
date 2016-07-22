<?php
/**
 * Created by PhpStorm.
 * User: Sari
 * Date: 2/24/15
 * Time: 9:44 PM
 */
?>

<h1>Update Manual Listings <?php echo $model->ID; ?></h1>

<?php $this->renderPartial('_manual_form', array('model'=>$model)); ?>