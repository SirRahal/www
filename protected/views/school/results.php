<?php
/**
 * Created by PhpStorm.
 * User: Sari
 * Date: 10/13/14
 * Time: 2:42 PM
 */ ?>

This should have all the schools listed!

<h1>Schools</h1>

<?php $this->widget('zii.widgets.CListView', array(
    'dataProvider'=>$dataProvider,
    'itemView'=>'_view',
)); ?>