<?php
/**
 * Created by PhpStorm.
 * User: Sari
 * Date: 1/14/15
 * Time: 2:08 PM
 */


$url = $_SERVER['REQUEST_URI'];
if( strpos( $url, 'listings/' ) !== false ) {
    $exploded_url = explode('/',$url);
    $last_part_of_url = end($exploded_url);
    $model = BtmListings::model()->findByPk($last_part_of_url);
    $_SESSION['BTMListing_ID']=$last_part_of_url;
    $btm_listing_ID = $_SESSION['BTMListing_ID'];

}

$this->breadcrumbs=array(
    'Listings'=>array('btmauctions/view/'.$model->auction_ID),
    $model->ID=>array('btmlistings/update/'.$model->ID),
);
?>

<h1>
    Uploading Images for <?php echo $btm_listing_ID; ?>
</h1>

<script>
    $(document).ready(function()
    {
        var settings = {
            url: "/index.php/btmupload",
            method: "POST",
            allowedTypes:"jpg,png,gif,doc,pdf,zip",
            fileName: "myfile",
            multiple: true,
            onSuccess:function(files,data,xhr)
            {
                $("#status").html("<font color='green'>Upload is success</font>");
            },
            afterUploadAll:function()
            {
                alert('All Files uploaded');
            },
            onError: function(files,status,errMsg)
            {
                $("#status").html("<font color='red'>Upload is Failed</font>");
            }
        }
        $("#mulitplefileuploader").uploadFile(settings);

    });

</script>

<script src="/js/jquery.js"></script>
<script src="/js/fileuploadmulti.min.js"></script>
<div class="boxed link">
    <div id="mulitplefileuploader">Upload</div>
    <div id="status"></div>
</div>
<style>
    img:hover{
        opacity: 0.7;
    }
</style>

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
</script>