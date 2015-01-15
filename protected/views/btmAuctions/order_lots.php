<?php
/**
 * Created by PhpStorm.
 * User: Sari
 * Date: 1/14/15
 * Time: 5:16 PM
 */

$listings = $model->get_lot_listings($model);
?>
<!-- Bootstrap Core JavaScript -->
<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery-sortable.js"></script>
<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery-ui/jquery-ui.js"></script>
<link rel="stylesheet" src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery-ui/jquery-ui.css" />

<style>
    table{
        width: 100%;
        color: black;
    }
    tr:nth-child(even) {
        background-color: #f3f3f3;
    }
    tr:nth-child(odd) {
        background-color: #f7f7f7;

    }
    tr{
        border-bottom: solid 1px black;
    }
    td{
      padding:7px;
    }
    table body{
        background: #acacac;
        color: #000000;
    }
</style>

<div>
    <table>
        <thead style="background: background: #181818;">
        <tr style="background: #181818; color: white;">
            <td style="col1">Lot</td>
            <td style="col1">description</td>
            <td style="col1">Manufacturer</td>
            <td style="col1">Model</td>
        </tr>
        </thead>
        <tbody id="sortMe">
        <?php foreach($listings as $listing){ ?>
            <tr id="item_<?php echo $listing->ID;?>">
                <td><?php echo $listing->lot; ?></td>
                <td><?php echo $listing->description; ?></td>
                <td><?php echo $listing->manufacturer; ?></td>
                <td><?php echo $listing->model; ?></td>
            </tr>
        <?php } ?>
        </tbody>
    </table>
</div>



<script>
    $(function() {
        $('#sortMe').sortable({
            update: function(event, ui) {
                var postData = $(this).sortable('serialize');
                console.log(postData);

                $.post('/index.php/btmauctions/save_order', {list: postData, auction_ID: '<?php echo($model->ID); ?>' }, function(o){
                    console.log(o);
                }, 'json');
            }
        });
    });
</script>