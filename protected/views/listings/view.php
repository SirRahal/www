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

<!--include gallery js and css-->
<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/gallery/jquery.magnific-popup.min.js"></script>
<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/js/gallery/magnific-popup.css" />

<h1>View Listings #<?php echo $model->ID ; ?></h1>
<h6>Listed by <?php echo $model->listBy['first_name'].' '.$model->listBy['last_name']; ?> On <?php echo date('m-d-Y',strtotime($model->date)); ?></h6>
<?php
if($model['ebay_listed'] == 1){ ?>
    <h6 class="green_text">Ebay listed on <?php echo date('m-d-Y',strtotime($model['ebay_date'])); ?> by <?php echo $model->ebayLister['first_name'].' '.$model->ebayLister['last_name'];?></h6>
<?php  } ?>
<?php
    if($model['sold'] == 1){ ?>
        <h6 class="red_text">Sold on <?php echo date('m-d-Y',strtotime($model['sold_date'])); ?></h6>
<?php  } ?>

<style>
    tbody{
        color:black;
    }
    td{
        padding-right:20px;
    }
    img:hover{
        opacity: 0.7;
    }

</style>

<?php if ($model->images){ ?>
    <div>
        <div>
            <?php foreach ($model->images as $image){ ?>
                <a class="image-popup-vertical-fit" href="/images/uploads/<?php echo $image['image'];?>">
                    <img src ="/images/uploads/<?php echo $image['image']; ?>" width="200" >
                </a>
            <?php } ?>
        </div>
    </div>
<?php } ?>
<br/>
<?php
if($model['url'] != ''){ ?>
    <h6><a href="<?php echo $model['url']; ?>">eBay Listing</a></h6>
<?php  } ?><a href="/index.php/listings/update/<?php echo $model->ID; ?>" style="float:right; margin-top: -30px;">Edit This Item</a>

<div class="ebay_div">
    Our listing ID : <b><?php echo $model->ID; ?></b><br/>
    Our internal inventory number on this product is : <b><?php echo $model->inventory; ?></b>
    <?php if($model->internal_number){ ?>
       <br/>
        Internal number is : <b><?php echo $model->internal_number; ?></b>
    <?php } ?>
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
        <?php if($model->type != ''){ ?>
            <tr>
                <td>
                    <b>Type:</b>
                </td>
                <td>
                    <?php echo $model->type;?>
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
        <?php if($model->board_1 != ''){ ?>
            <tr>
                <td>
                    <b>Board 1</b>
                </td>
                <td>
                    <?php echo $model->board_1;?>
                </td>
            </tr>
        <?php } ?>
        <?php if($model->board_2 != ''){ ?>
            <tr>
                <td>
                    <b>Board 2:</b>
                </td>
                <td>
                    <?php echo $model->board_2;?>
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

        <?php if($model->dims_2 != '' AND $model->dims_2 != '0.00'){ ?>
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

            <tr>
                <td>
                    <b>Why This Condition:</b>
                </td>
                <td>
                    <?php echo $model->condition_info;?>
                </td>
            </tr>

        <?php if($model->from != 'As Is'){ ?>
            <tr>
                <td>

                </td>
                <td>
                    <b>Note:</b>  This is solely a cosmetic description of the item.<br/>
                    This item was removed from a <b><?php if($model->from == 'Working Machine'){echo 'Working Machine';}else { echo 'Fortune 500 Crib'; } ?></b>, and is being<br/>
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
        <?php }else{ ?>
            <tr>
                <td></td>
                <td><b>Note : </b>This Item is sold as is with a No Return Policy.</td>
            </tr>
        <?php  } ?>
    </table>

<br/>
    <table style="background: none;">
        <thead>
            <tr style="background: #050505; text-align: center; font-size: 20px; font-weight: bold;">
                <td>Shipping 1</td>
                <td>Shipping 2</td>
            </tr>
        </thead>
        <tr style="border-bottom:solid 1px #050505;">
            <td style="border-right: solid 1px #050505;  width:50%;">
                <div class="text_center mid_font" style="padding:20px;">
                    <div class="green_text"><b>***NOTE***</b></div>
                    <div class="red_text">
                        <b>FREE SHIPPING & HANDLING</b><br/>
                        Shipping to lower 48 States via UPS Ground Service.<br/><br/>
                        <b>All Other Domestic Shipments</b> pay $14.00 Boxing / Handling PLUS shipping costs from MI, 49534. <br/><br/>
                        <b>International Shipments</b> pay $19.00 Boxing / Handling / Processing PLUS shipping costs from MI, 49534.
                    </div><br/>
                </div>
            </td>
            <td style=" width:50%;">
                <div class="text_center mid_font" style="padding:20px;">
                    <div class="green_text"><b>***NOTE***</b></div>
                    <div class="red_text">
                        <b>SHIPPING & HANDLING</b><br/>Buyer to pay $45.00 skidding and handling fee + actual freight cost from Grand Rapids MI, 49534.
                    </div>
                </div>
            </td>
        </tr>
    </table>
    <div class="text_center mid_font" style="padding:20px;">
        <div class="blue_text">
            ALL INTERNATIONAL ORDERS ARE SUBJECT TO ACTUAL SHIPPING COSTS - SOMETIMES THE SHIPPING CALCULATOR IS NOT CORRECT WITH PACKAGES!!!   WE ALSO MAY SUBSTITUTE SHIPPING COMPANY TO GET YOU A BETTER PRICE!!!
        </div><br/>
        <b>Domestic Shipping Policies:</b><br/>
        All shipments are sent standard ground unless requested differently.<br/>
        We can ship UPS next day air (red) per your request.  Unless requested, all next day air shipments will be for the 10:30 a.m. delivery.<br/>
        We can ship this early A.M., but you must include that in your Paypal payment notes.<br/>
        <br/>
        <b>International Shipping Policies:</b><br/>
        Our primary methods of shipment are UPS International, FedEx International and USPS Express International.  If requested, we can ship via USPS Priority, but this shipping method lacks reliable tracking information.  Please understand if we ship an item on your account, we are unable to see what you are being charged for shipping (per FedEx and UPS rules).  We will not be held responsible if you ask us to ship on your account and then the shipment cost is high.
        <br/><br/>
        <?php if($model->from != 'As Is'){ ?>
        <b>Returns:</b><br/>
        We have a 30-day return policy (excluding all manuals, and AS-IS items, see listing description).  A replacement unit will be sent out as soon as we receive the original unit.  If we do not have one in stock, then we will refund your purchase price amount only!  There will be a 10% restocking fee for all transactions that are returned.  Alternations or removal of any components of a part voids the 30-day return privilege.  Once we get the return, we will inspect the item to make sure it is in the same condition as we shipped it.  This process can take up to three business days.
        <br/><br/>
        <?php }else{ ?>
        <div class="blue_text">
            <b>This item is being sold "As Is" and there are no returns.</b>
        </div>
        <br/>
        <?php } ?>
    </div>
</div>
</div>

<script>
    $(document).ready(function() {

        $('.image-popup-vertical-fit').magnificPopup({
            type: 'image',
            closeOnContentClick: true,
            MainClass: 'mfp-img-mobile',
            image: {
                verticalFit:true
            }
        });
    });
</script>