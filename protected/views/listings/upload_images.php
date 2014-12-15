<?php
/**
 * Created by PhpStorm.
 * User: Sari
 * Date: 12/9/14
 * Time: 9:27 AM
 */


    $url = $_SERVER['REQUEST_URI'];
    if( strpos( $url, 'listings/' ) !== false ) {
        $exploded_url = explode('/',$url);
        $last_part_of_url = end($exploded_url);
        $model = Listings::model()->findByPk($last_part_of_url);


        $_SESSION['listing_ID']=$last_part_of_url;
        $listing_ID = $_SESSION['listing_ID'];
}

$this->breadcrumbs=array(
    'Listings'=>array('admin'),
    $model->ID=>array('listings/update/'.$model->ID),
);
?>

<h1>
    Uploading Images for <?php echo $listing_ID; ?>
</h1>

<script>
    $(document).ready(function()
    {

        var settings = {
            url: "/index.php/upload", //Would like to pass the ID here if possible
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

<?php foreach ($model->images as $image){ ?>
    <div style="float: left; width:205px; text-align: center; border:solid 1px #999999; margin-left: 10px;">
        <div style="height: 220px;">
            <a href="/images/uploads/<?php echo $image['image']; ?>"><img src ="/images/uploads/<?php echo $image['image']; ?>" width="200"></a>
            <br/>
        </div>
        <a style="cursor: pointer;" onclick="delete_image(<?php echo $image->ID; ?>)">Delete</a>
    </div>
<?php } ?>

<script>
    function delete_image(id){
        var url = '<?php echo Yii::app()->createUrl('images/delete'); ?>/'+id;
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