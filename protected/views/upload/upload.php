<?php
$output_dir = "images/uploads/";

if(isset($_FILES["myfile"]))
{
    $ret = array();

    $error =$_FILES["myfile"]["error"];
    {
        //this is hardcoded for now just to test.
            session_start();
            $listing_ID = $_SESSION['listing_ID'];

        if(!is_array($_FILES["myfile"]['name'])) //single file
        {
            $ImageName      = str_replace(' ','-',strtolower($_FILES['myfile']['name']));
            $ImageType      = $_FILES['myfile']['type']; //"image/png", image/jpeg etc.

            $ImageExt = substr($ImageName, strrpos($ImageName, '.'));
            $ImageExt       = str_replace('.','',$ImageExt);
            $ImageName      = substr(md5(uniqid(mt_rand(), true)), 0, 5);
            $NewImageName = $listing_ID.'_'.$ImageName.'.'.$ImageExt;

            move_uploaded_file($_FILES["myfile"]["tmp_name"],$output_dir. $NewImageName);
            echo "<br> Error: ".$_FILES["myfile"]["error"];

            $ret['fileName']= $output_dir.$NewImageName;

            $image_entry = new Images();
            $image_entry->image = $NewImageName;
            $image_entry->listing_ID = $listing_ID;
            if (!$image_entry->save()) {
                print_r($image_entry->getErrors());
            }
        }
        else
        {
            $fileCount = count($_FILES["myfile"]['name']);
            for($i=0; $i < $fileCount; $i++)
            {

                $ImageName      = str_replace(' ','-',strtolower($_FILES['myfile']['name'][$i]));
                $ImageType      = $_FILES['myfile']['type'][$i]; //"image/png", image/jpeg etc.

                $ImageExt = substr($ImageName, strrpos($ImageName, '.'));
                $ImageExt       = str_replace('.','',$ImageExt);
                $ImageName      = substr(md5(uniqid(mt_rand(), true)), 0, 5);
                $NewImageName = $listing_ID.'_'.$ImageName.'.'.$ImageExt;

                $ret[$NewImageName]= $output_dir.$NewImageName;
                move_uploaded_file($_FILES["myfile"]["tmp_name"][$i],$output_dir.$NewImageName );

                $image_entry = new Images();
                $image_entry->image = $NewImageName;
                $image_entry->listing_ID = $listing_ID;
                if (!$image_entry->save()) {
                    print_r($image_entry->getErrors());
                }

            }
        }
    }
    echo json_encode($ret);

}

?>