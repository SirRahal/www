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
        $listing_copied = end($exploded_url);
        $model = Listings::model()->findByPk($listing_copied);
}
?>

<h1>
    Uploading Images for <?php echo $model['ID']; ?>
</h1>

<script>
    $(document).ready(function()
    {

        var settings = {
            url: "/upload.php",
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
