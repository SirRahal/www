<?php
$output_dir = "uploads/";

if(isset($_FILES["myfile"]))
{

    $url = $_SERVER['REQUEST_URI'];
    $exploded_url = explode('/',$url);
    $listing_ID = end($exploded_url);

    $ret = array();

    $error =$_FILES["myfile"]["error"];
    {

        if(!is_array($_FILES["myfile"]['name'])) //single file
        {
            $RandomNum   = time();

            $ImageName      = str_replace(' ','-',strtolower($_FILES['myfile']['name']));
            $ImageType      = $_FILES['myfile']['type']; //"image/png", image/jpeg etc.

            $ImageExt = substr($ImageName, strrpos($ImageName, '.'));
            $ImageExt       = str_replace('.','',$ImageExt);
            $ImageName      = preg_replace("/\.[^.\s]{3,4}$/", "", $ImageName);
            $NewImageName = $ImageName.'-'.$RandomNum.'.'.$ImageExt;

            move_uploaded_file($_FILES["myfile"]["tmp_name"],$output_dir. $NewImageName);
            //echo "<br> Error: ".$_FILES["myfile"]["error"];

            $ret[$fileName]= $output_dir.$NewImageName;

            $image_entry = new Images;
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
                $RandomNum   = time();

                $ImageName      = str_replace(' ','-',strtolower($_FILES['myfile']['name'][$i]));
                $ImageType      = $_FILES['myfile']['type'][$i]; //"image/png", image/jpeg etc.

                $ImageExt = substr($ImageName, strrpos($ImageName, '.'));
                $ImageExt       = str_replace('.','',$ImageExt);
                $ImageName      = preg_replace("/\.[^.\s]{3,4}$/", "", $ImageName);
                $NewImageName = $ImageName.'-'.$RandomNum.'.'.$ImageExt;

                $ret[$NewImageName]= $output_dir.$NewImageName;
                move_uploaded_file($_FILES["myfile"]["tmp_name"][$i],$output_dir.$NewImageName );

                $image_entry = new Images;
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