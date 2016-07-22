<?php
/**
 * Created by PhpStorm.
 * User: Sari
 * Date: 1/7/15
 * Time: 3:02 PM
 */
$this->breadcrumbs=array(
    'Listings',
);
?>



<h1>Sold Items</h1>

<div class="spacer"></div>

<a href="/index.php/listings/create">Create Listing</a> | <a href="/index.php/listings/manual_create">Create Manual Listing</a> | <a class="link" onclick="delete_old_images()" >Delete Old Images</a>

<script>
    function delete_old_images(){
        var result = confirm('Are you sure you would like to delete old images?');
        if(result){
            var url = '<?php echo Yii::app()->createUrl('listings/delete_old_images'); ?>';
            $.ajax({
                type: "POST",
                url: url,
                success: function(){
                    alert('Success!\nAll Old Images have been deleted');
                }
            });
        }
    };
</script>
<?php
$listings = Listings::model()->findAllByAttributes(array('sold'=>1));
echo $this->renderPartial('listing_table', array('listings' => $listings));
?>

