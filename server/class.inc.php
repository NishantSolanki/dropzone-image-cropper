<?php

class image_uploader
{

    function Upload($file, $path, $rename = false)
    {
        $res = array();
        if ($file['name'])
        {
            if (!$file['error'])
            {
                $new_file_name = strtolower($file['tmp_name']);
                if ($file['size'] > (10240000))
                {
                    $res['emsg'] = 'Image file too large';
                }
                else
                {
                    if ($rename == true)
                    {
                        $type              = $file['type'];
                        $ext               = '.jpg';
                        $random            = rand(50000, 100000);
                        $target_path       = $path . $random . preg_replace('/[^A-Za-z0-9\.]/', "_", basename($file['name']));
                        $res['image_name'] = $random . preg_replace('/[^A-Za-z0-9\.]/', "_", $file['name']);
                    }
                    else
                    {
                        $target_path       = $path . preg_replace('/[^A-Za-z0-9\.]/', "_", basename($file['name']));
                        $res['image_name'] = preg_replace('/[^A-Za-z0-9\.]/', "_", $file['name']);
                    }
                    if (move_uploaded_file($file['tmp_name'], $target_path))
                    {
                        $source      = $path . $random . preg_replace('/[^A-Za-z0-9\.]/', "_", basename($file['name']));
                        $destination = $source . $ext;
                        $res['smsg'] = 'Successfully uploaded';
                    }
                    else
                    {
                        $res['emsg'] = 'Error uploading the image file, try again later';
                    }
                }
            }
            else
            {
                $res['emsg'] = 'Your upload triggered the following error:  ' . $file['error'];
            }
        }
        return $res;
    }

}
