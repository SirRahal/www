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



<div>
    <table>
        <thead>
        <tr>
            <td style="col1">Lot</td>
            <td style="col1">description</td>
            <!--<td style="col1">Manufacturer</td>
            <td style="col1">Model</td>-->
        </tr>
        </thead>
    </table>
</div>


<div id="sortMe">
    <?php foreach($listings as $listing){ ?>
        <div id="item_<?php echo $listing->ID;?>">
            <?php echo $listing->lot; ?>
            <?php echo $listing->description; ?>
            <?php /*echo $listing->manufacturer; */?><!--
            --><?php /*echo $listing->model; */?>
        </div>
    <?php } ?>
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