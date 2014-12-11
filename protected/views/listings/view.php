<?php
/* @var $this ListingsController */
/* @var $model Listings */

$this->breadcrumbs=array(
	'Listings'=>array('admin'),
	$model->ID,
);

$this->menu=array(
	array('label'=>'Create Another Listings', 'url'=>array('create')),
	array('label'=>'Update Listings', 'url'=>array('update', 'id'=>$model->ID)),
	array('label'=>'Delete Listings', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->ID),'confirm'=>'Are you sure you want to delete this item?')),
);
?>

<h1>View Listings #<?php echo $model->ID ; ?></h1>
<h3>Listed by <?php echo $model->listBy['first_name']; ?> On <?php echo $model->date; ?></h3>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'inventory',
		'description',
		'internal_number',
		'price',
		'manufacturer',
		'serial_number',
		'model_number',
		'more_info',
		'condition',
		'condition_info',
		'weight',
		'length_1',
		'width_1',
		'height_1',
		'dims_2',
		'length_2',
		'width_2',
		'height_2',
		'listing_note',
		'ebay_listed',
		'ebay_lister',
		'ebay_date',
	),
)); ?>
<style>
    tbody{
        color:black;
    }
    td{
        padding-right:20px;
    }
</style>
<?php if ($model->images){ ?>
    <div>
        <h1>Images</h1>
        <div>
            <?php foreach ($model->images as $image){ ?>
                <img src ="/images/uploads/<?php echo $image['image']; ?>" width="200">
            <?php } ?>
        </div>
    </div>
<?php } ?>
<?php if(User::model()->findByPk(User::model()->get_user_ID())->permission > 1){ ?>
<h1>Ebay Listing</h1>
<h6>Copy And Past Info Below</h6>  <a href="/index.php/listings/update/<?php echo $model->ID; ?>" style="float:right; margin-top: -30px;"><b>Activate this as on Ebay</b></a>
<div class="ebay_div">
    Our internal inventory number on this product is : <b><?php echo $model->inventory; ?></b>
    <br/>
    <br/>
    <table style="background:#ffffff;">
        <?php if($model->manufacturer != '' or $model->manufacturer != 0){ ?>
            <tr>
                <td>
                    <b>Manufacturer:</b>
                </td>
                <td>
                    <?php echo $model->manufacturer;?>
                </td>
            </tr>
        <?php } ?>

        <?php if($model->serial_number != '' or $model->serial_number != 0){ ?>
            <tr>
                <td>
                    <b>Serial #:</b>
                </td>
                <td>
                    <?php echo $model->serial_number;?>
                </td>
            </tr>
        <?php } ?>

        <?php if($model->model_number != '' or $model->model_number != 0){ ?>
            <tr>
                <td>
                    <b>Model #:</b>
                </td>
                <td>
                    <?php echo $model->model_number;?>
                </td>
            </tr>
        <?php } ?>

        <?php if($model->description != '' or $model->description != 0){ ?>
            <tr>
                <td>
                    <b>Description:</b>
                </td>
                <td>
                    <?php echo $model->description;?>
                </td>
            </tr>
        <?php } ?>

        <?php if($model->more_info != '' or $model->more_info != 0){ ?>
            <tr>
                <td>
                    <b>More Info:</b>
                </td>
                <td>
                    <?php echo $model->more_info;?>
                </td>
            </tr>
        <?php } ?>

        <?php if($model->weight > 0){ ?>
            <tr>
                <td>
                    <b>Weight:</b>
                </td>
                <td>
                    <?php echo $model->weight;?> Lbs.
                </td>
            </tr>
        <?php } ?>

        <?php if($model->width_1 > 0){ ?>
            <tr>
                <td>
                    <b>Dimensions:</b>
                </td>
                <td>
                    <?php echo "Length : ".$model->length_1."'' Width : ".$model->width_1."'' Height : ".$model->height_1."''";?>
                </td>
            </tr>
        <?php } ?>

        <?php if($model->dims_2 > 0){ ?>
            <tr>
                <td>
                    <b>Secondary Dimensions:</b>
                </td>
                <td>
                    <?php echo $model->dims_2;?>
                </td>
            </tr>
        <?php } ?>

        <?php if($model->width_2 > 0){ ?>
            <tr>
                <td>
                    <b>Dimensions:</b>
                </td>
                <td>
                    <?php echo "Length : ".$model->length_2."'' Width : ".$model->width_2."'' Height : ".$model->height_2."''";?>
                </td>
            </tr>
        <?php } ?>
        <?php if($model->condition > 0){ ?>
            <tr>
                <td>
                    <b>Condition:</b>
                </td>
                <td>
                    <?php echo $model->condition;?> --
                    <?php if($model->condition == 1) { echo "Very Poor"; }
                    elseif($model->condition == 2) { echo "Poor"; }
                    elseif($model->condition == 3) { echo "Fair"; }
                    elseif($model->condition == 4) { echo "Good"; }
                    elseif($model->condition == 5) { echo "Like New Condition"; }
                    ?>
                </td>
            </tr>
        <?php } ?>

        <?php if($model->condition > 0){ ?>
            <tr>
                <td>
                    <b>Why This Condition:</b>
                </td>
                <td>
                    <?php echo $model->condition_info;?>
                </td>
            </tr>
        <?php } ?>

        <?php if($model->condition > 0){ ?>
            <tr>
                <td>

                </td>
                <td>
                    <b>Note:</b>  This is solely a cosmetic description of the item.<br/>
                    This item was removed from a working machine, and is being<br/>
                    sold in good condition unless otherwise stated!
                    <table style="background:white;">
                        <tr>
                            <td>1)</td>
                            <td>Very Poor</td>
                        </tr>
                        <tr>
                            <td>2)</td>
                            <td>Poor</td>
                        </tr>
                        <tr>
                            <td>3)</td>
                            <td>Fair</td>
                        </tr>
                        <tr>
                            <td>4)</td>
                            <td>Good</td>
                        </tr>
                        <tr>
                            <td>5)</td>
                            <td>Like New Condition</td>
                        </tr>
                    </table>
                </td>
            </tr>
        <?php } ?>
    </table>


    <div class="text_center mid_font" style="padding:20px;">
        <div class="green_text"><b>***NOTE***</b></div>
        <div class="red_text">
        <b>FREE SHIPPING & HANDLING</b> to lower 48 States via <b>UPS Ground Service</b>.<br/>
        All Other Domestic Shipments pay $15.00 Boxing / Handling PLUS shipping costs from Zip 49534!<br/>
        All International Shipments pay $20.00 Boxing / Handling / Processing PLUS shipping costs from Zip 49534!<br/>
        </div><br/>
        <div class="blue_text">
        <b>ALL INTERNATIONAL ORDERS ARE SUBJECT TO ACTUAL SHIPPING COSTS - SOMETIMES THE SHIPPING CALCULATOR IS NOT CORRECT WITH PACKAGES!!!   WE ALSO MAY SUBSTITUTE SHIPPING COMPANY TO GET YOU A BETTER PRICE!!!</b>
        </div><br/>
        <b>Domestic Shipping Policies:</b><br/>
        All shipments are sent standard ground unless requested differently.<br/>
        We can ship UPS next day air (red) per your request.  Unless requested, all next day air shipments will be for the 10:30 a.m. delivery.<br/>
        We can ship this early A.M., but you must include that in your Paypal payment notes.<br/>
        <br/>
        <b>International Shipping Policies:</b><br/>
        We ship FedEx International, UPS International, USPS Express International.  (Only when requested, we ship USPS Priority; this carrier type lacks reliable tracking info.  We cannot be held responsible for your shipment once it leaves US land).
        Please understand if we ship an item on your account, we are unable to see what you are being charged for shipping.  This is both FedEx and UPS rules.  They do not allow us to look at your rates that you are getting with them.  We will not be held responsible if you ask us to ship on your account and then the shipment cost is high.
        <br/><br/>
        <b>Returns:</b><br/>
        We have a 30-day return policy (excluding all manuals, and AS-IS items, see listing description).  A replacement unit will be sent out as soon as we receive the original unit.  If we do not have one in stock, then we will refund your purchase price amount only!  There will be a 10% restocking fee for all transactions that are returned.  Alternations or removal of any components of a part voids the 30-day return privilege.  Once we get the return, we will inspect the item to make sure it is in the same condition as we shipped it.  This process can take up to three business days.
        <br/><br/>
        <div class="red_text">All purchases must be paid within 10 days of the Auction!</div>
    </div>
</div>

<?php } ?>