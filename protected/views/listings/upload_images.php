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
}
?>

<h1>
    Uploading Images for <?php echo $_SESSION['listing_ID']; ?>
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
<div id="mulitplefileuploader">Upload</div>
<div id="status"></div>


<?php foreach ($model->images as $image){ ?>
    <img src ="/images/uploads/<?php echo $image['image']; ?>" width="200">
<?php } ?>