<?php
/* @var $this SchoolController */
/* @var $data School */
?>

<div class="view">
    <table>
        <tbody>
        <tr>
            <td style="width:20%;">School ID</td>
            <td style="width:30%;"><?php echo CHtml::link(CHtml::encode($data->ID), array('view', 'id'=>$data->ID)); ?></td>
            <td>Contact</td>
            <td><?php echo CHtml::encode($data->contact_name); ?></td>
            <td style="border-left:solid 1px black;"><b><a href="/index.php/school/results_view/<?php echo $data->ID; ?>">View Results</a></b></td>
        </tr>
        <tr>
            <td><?php echo CHtml::encode($data->getAttributeLabel('name')); ?>:</td>
            <td><?php echo CHtml::encode($data->name); ?></td>
            <td><?php echo CHtml::encode($data->getAttributeLabel('email')); ?>:</td>
            <td><?php echo CHtml::encode($data->email); ?></td>
            <td style="border-left:solid 1px black;"></td>
        </tr>
        <tr>
            <td><b><?php echo CHtml::encode($data->getAttributeLabel('state')); ?>:</b></td>
            <td><?php echo CHtml::encode($data->state); ?></td>
            <td><b><?php echo CHtml::encode($data->getAttributeLabel('phone')); ?>:</b></td>
            <td><?php echo CHtml::encode($data->phone); ?></td>
            <td style="border-left:solid 1px black;"><b><a href="/index.php/school/create_tickets/<?php echo $data->ID; ?>">Create Tickets</td>
        </tr>
        </tbody>
    </table>
</div>