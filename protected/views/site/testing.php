<?php
/**
 * Created by PhpStorm.
 * User: Sari
 * Date: 12/9/14
 * Time: 9:27 AM
 */ ?>

<h1>
    This is for Testing!
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
                alert("all images uploaded!!");
            },
            onError: function(files,status,errMsg)
            {
                $("#status").html("<font color='red'>Upload is Failed</font>");
            }
        }
        $("#mulitplefileuploader").uploadFile(settings);

    });
    function checkvalue(){
        var files = document.getElementsByClassName('upload-filename');

        alert(files.toSource());

    }


</script>



<script src="/js/jquery.js"></script>
<script src="/js/fileuploadmulti.min.js"></script>
<div id="mulitplefileuploader">Upload</div>
<div id="status"></div>

<button onclick="checkvalue()">Check Value</button>