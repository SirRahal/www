<?php
/**
 * Created by PhpStorm.
 * User: Sari
 * Date: 6/10/14
 * Time: 11:14 AM
 * @var $this UserController
 * @var $model User
 **/

$this->breadcrumbs=array(
    'Users'=>array('index'),
    'Register',
);
?>
    <h1>Register</h1>
<?php $this->renderPartial('_form', array('model'=>$model)); ?>