<?php
/**
 * Created by PhpStorm.
 * User: Sari
 * Date: 1/5/15
 * Time: 11:18 AM
 */



?>

<!-- DataTables CSS -->
<link rel="stylesheet" type="text/css" href="/css/jquery.dataTables.css">
<!-- DataTables -->
<script type="text/javascript" charset="utf8" src="/js/jquery.dataTables.js"></script>
<style>
    tbody{
        color:black;
    }
</style>
<table id="myTable" class="hover stripe row-border">
    <thead>
    <tr style="text-align: center">
        <td>ID</td>
        <td>Inventory</td>
        <td>Manufacturer</td>
        <td>Serial #</td>
        <td>Model #</td>
        <!--<td>Date</td>-->
        <td style="width: 45px;">Img</td>
        <td style="width:152px;">Options</td>
    </tr>
    </thead>
    <tbody>
    <?php foreach($listings as $item){ ?>
        <tr>
            <td><?php echo $item->ID; ?></td>
            <td><?php echo $item->inventory; ?></td>
            <td><?php echo $item->manufacturer; ?></td>
            <td><?php echo $item->serial_number; ?></td>
            <td><?php echo $item->model_number; ?></td>
            <!--<td style="text-align: center;"><?php /*echo date("M d/y",strtotime($item->date)); */?></td>-->
            <td style="text-align: center;"><img src="/images/<?php if($item->images){ echo 'green';}else { echo 'red';} ?>thumb.jpg" /></td>
            <td style="text-align: center;"><a class="link" href="/index.php/listings/update/<?php echo $item->ID; ?>">Edit</a> | <a class="link" href="/index.php/listings/view/<?php echo $item->ID; ?>">View</a> | <a class="link" href="/index.php/listings/create/<?php echo $item->ID; ?>">Copy</a> | <a class="link" style="cursor: pointer;" onclick="delete_listing(<?php echo $item->ID; ?>)">Delete</a></td>
        </tr>
    <?php } ?>
    </tbody>
</table>
<script>
    $(document).ready(function(){
        $('#myTable').DataTable();
    });

    function delete_listing(id){
        var result = confirm("Are you sure you want to delete this listing?");
        if (result==true) {
            var url = '<?php echo Yii::app()->createUrl('listings/delete'); ?>/'+id;
            $.ajax({
                type: "POST",
                url: url,
                success: function(){
                    delete window.alert; // true
                    alert('Item has been deleted.  The item will still display till the page has refreshed.');
                }
            });
        }
    };
</script>