<?php
/**
 * Created by PhpStorm.
 * User: Sari
 * Date: 1/21/15
 * Time: 3:30 PM
 */

class Zipper {
    private $_files = array(),
        $zip;

    public function __construct(){
        $this->_zip = new ZipArchive();
    }
    public function add($input){
        if(is_array($input)){
            //multiple inputs
            $this->_files = array_merge($this->_files, $input);

        }else{
            //single input
            $this->_files[] = $input;
        }
    }

    public function store($location = null) {
        if(count($this->_files) && $location){
             foreach($this->_files as $index => $file){
                 if(!file_exists($file)){
                     //remove from array
                     unset($this->_files[$index]);
                 }
             }
            //open the zip
            if($this->_zip->open($location,file_exists($location) ? ZIPARCHIVE::OVERWRITE : ZIPARCHIVE::CREATE)){

                //loop through files and add to zip
                foreach($this->_files as $file){
                    $this->_zip->addFile($file,$file);
                }
                //close zip
                $this->_zip->close();
            }
        }
    }
} 