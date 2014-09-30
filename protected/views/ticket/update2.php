<?php
/**
 * Created by PhpStorm.
 * User: Sari
 * Date: 9/30/14
 * Time: 11:54 AM
 *
 * @var $this TicketController
 * @var $model Ticket
 */

$this->breadcrumbs=array(
    'Tickets'=>array('index'),
    $model->ID=>array('view','id'=>$model->ID),
    'Update',
);


?>

    <h1>Edit My Picks # <i><?php echo $model->code; ?></i></h1>

<?php $this->renderPartial('_form2', array('model'=>$model)); ?>