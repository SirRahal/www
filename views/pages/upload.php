<?php
$output_dir = Yii::$app->basePath. "/images/uploads/";

$listing_ID = $_GET['id'];
if(isset($_FILES["myfile"]))
{
    $ret = array();
    $error =$_FILES["myfile"]["error"];
    {
        if(!is_array($_FILES["myfile"]['name'])) //single file
        {
            $ImageName      = str_replace(' ','-',strtolower($_FILES['myfile']['name']));
            $ImageType      = $_FILES['myfile']['type']; //"image/png", image/jpeg etc.
            $ImageExt       = substr($ImageName, strrpos($ImageName, '.'));
            $ImageExt       = str_replace('.','',$ImageExt);
            $ImageName      = substr(md5(uniqid(mt_rand(), true)), 0, 5);
            $NewImageName   = $listing_ID.'_'.$ImageName.'.'.$ImageExt;
            move_uploaded_file($_FILES["myfile"]["tmp_name"],$output_dir. $NewImageName);

            $ret['fileName']= $output_dir.$NewImageName;
            $model = new \app\models\Pages();
            $model->path = $NewImageName;
            $model->book_ID = $listing_ID;
            $model->position = '0';
            if (!$model->save()) {
                print_r($model->getErrors());
            }
        }
        else
        {
            $fileCount = count($_FILES["myfile"]['name']);
            for($i=0; $i < $fileCount; $i++)
            {
                $ImageName      = str_replace(' ','-',strtolower($_FILES['myfile']['name']));
                $ImageType      = $_FILES['myfile']['type']; //"image/png", image/jpeg etc.
                $ImageExt       = substr($ImageName, strrpos($ImageName, '.'));
                $ImageExt       = str_replace('.','',$ImageExt);
                $ImageName      = substr(md5(uniqid(mt_rand(), true)), 0, 5);
                $NewImageName   = $listing_ID.'_'.$ImageName.'.'.$ImageExt;
                move_uploaded_file($_FILES["myfile"]["tmp_name"],$output_dir. $NewImageName);

                $ret['fileName']= $output_dir.$NewImageName;
                $model = new \app\models\Pages();
                $model->path = $NewImageName;
                $model->book_ID = $listing_ID;
                $model->position = '0';
                if (!$model->save()) {
                    print_r($model->getErrors());
                }
            }
        }
    }
    echo json_encode($ret);
}
?>