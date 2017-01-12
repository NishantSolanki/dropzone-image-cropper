<?php
error_reporting(E_ALL | E_STRICT);
require_once 'class.inc.php';
$obj = new image_uploader();
if (isset($_GET['action']))
{
    $action    = $_GET['action'];
    $file_type = $_GET['file_type'];
    if ($action == 'upload')
    {
        $rename      = true;
        $path        = '../uploads/';
        $file_upload = $obj->Upload($_FILES['file'], $path, $rename);

        echo $file_upload['image_name'];
        exit;
    }
    elseif ($action == 'delete')
    {
        $ds = DIRECTORY_SEPARATOR;
        $storeFolder = '../uploads/';
        $fileList    = $_POST['fileList_images'];
        $targetPath  = dirname(__FILE__) . $ds . $storeFolder . $ds;
        if (isset($fileList))
        {
            unlink($targetPath . $fileList);
        }
    }
}
