<?php


if(isset($_FILES["myfile"]))
{
    $ret = array();

    $error =$_FILES["myfile"]["error"];
    {
        session_start();
        $btm_listing_ID = $_SESSION['BTMListing_ID'];
        $btm_listing = Btmlistings::model()->findByPk($btm_listing_ID);
        $output_dir = "images/btm_uploads/".$btm_listing->auction_ID . '/';

        if(!is_array($_FILES["myfile"]['name'])) //single file
        {
            $image_count = count($btm_listing->btmImages)+1;
            $ImageName      = str_replace(' ','-',strtolower($_FILES['myfile']['name']));
            $ImageType      = $_FILES['myfile']['type']; //"image/png", image/jpeg etc.

            $ImageExt = substr($ImageName, strrpos($ImageName, '.'));
            $ImageExt       = str_replace('.','',$ImageExt);
            $ImageName      = preg_replace("/\.[^.\s]{3,4}$/", "", $ImageName);
            $NewImageName = $btm_listing->lot.'_'.$image_count.'.'.$ImageExt;

            move_uploaded_file($_FILES["myfile"]["tmp_name"],$output_dir. $NewImageName);
            echo "<br> Error: ".$_FILES["myfile"]["error"];

            $ret['fileName']= $output_dir.$NewImageName;

            $image_entry = new Btmimages();
            $image_entry->name = $NewImageName;
            $image_entry->btm_listing_ID = $btm_listing_ID;
            if (!$image_entry->save()) {
                print_r($image_entry->getErrors());
            }
        }
        else
        {
            $fileCount = count($_FILES["myfile"]['name']);
            for($i=0; $i < $fileCount; $i++)
            {
                $image_count = count($btm_listing->btmImages)+1;
                $ImageName      = str_replace(' ','-',strtolower($_FILES['myfile']['name'][$i]));
                $ImageType      = $_FILES['myfile']['type'][$i]; //"image/png", image/jpeg etc.

                $ImageExt = substr($ImageName, strrpos($ImageName, '.'));
                $ImageExt       = str_replace('.','',$ImageExt);
                $ImageName      = preg_replace("/\.[^.\s]{3,4}$/", "", $ImageName);
                $NewImageName = $btm_listing->lot.'_'.$image_count.'.'.$ImageExt;

                $ret[$NewImageName]= $output_dir.$NewImageName;
                move_uploaded_file($_FILES["myfile"]["tmp_name"][$i],$output_dir.$NewImageName );

                $image_entry = new Btmimages();
                $image_entry->name = $NewImageName;
                $image_entry->btm_listing_ID = $btm_listing_ID;
                if (!$image_entry->save()) {
                    print_r($image_entry->getErrors());
                }

            }
        }
    }
    echo json_encode($ret);

}

?>