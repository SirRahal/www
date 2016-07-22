<?php
/* @var $this BtmlistingsController */
/* @var $model Btmlistings */

$this->breadcrumbs=array(
	$model->auction->name =>array('btmauctions/'.$model->auction_ID),
	$model->ID,
);


?>

<h1>View #<?php echo $model->ID; ?></h1>

<style>
    thead{
        background: #181818;
    }
    table{
        width:100%;
        padding:15px;
    }
    td{
        text-align: center;
        padding:6px;
    }
</style>
<br/><br/>
<a class="link" href="/index.php/btmlistings/update/<?php echo $model->ID; ?>">Edit</a>
| <a class="link" style="cursor: pointer;" onclick="delete_btmlisting(<?php echo $model->ID; ?>)">Delete</a>
<br/><br/>
<table>
    <thead>
    <tr>
        <td>ID</td>
        <td>Lot</td>
        <td>Description</td>
        <td>Manufacturer</td>
        <td>Model</td>
        <td>More Info</td>
        <td>Condition</td>
    </tr>
    </thead>
    <tr style="background: #f7f7f7; color: black;">
        <td><?php echo $model->ID; ?></td>
        <td><?php echo $model->lot; ?></td>
        <td><?php echo $model->description; ?></td>
        <td><?php echo $model->manufacturer; ?></td>
        <td><?php echo $model->model; ?></td>
        <td><?php echo $model->more_info; ?></td>
        <td><?php echo $model->condition; ?></td>
    </tr>
</table>
<br/>
<?php foreach ($model->btmImages as $image){ ?>
    <div style="float: left; width:205px; text-align: center; border:solid 1px #999999; margin-left: 10px;">
        <div style="height: 220px;">
            <a href="/images/btm_uploads/<?php echo $model['auction_ID'].'/'.$image['name']; ?>"><img src ="/images/btm_uploads/<?php echo $model['auction_ID'].'/'.$image['name']; ?>" width="200"></a>
            <br/>
        </div>
        <a style="cursor: pointer;" onclick="delete_image(<?php echo $image->ID; ?>)">Delete</a>
    </div>
<?php } ?>

<script>
    function delete_image(id){
        var url = '<?php echo Yii::app()->createUrl('btmImages/delete'); ?>/'+id;
        $.ajax({
            type: "POST",
            url: url,
            success: function(){
                delete window.alert; // true
                alert('Deleted!');
            }
        });
    };
    function delete_btmlisting(id){
        var result = confirm("Are you sure you want to delete this listing?");
        if (result==true) {
            var url = '<?php echo Yii::app()->createUrl('btmlistings/delete'); ?>/'+id;
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