<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/jquery.fileapi.js"></script>
        <script src="js/dropzone.js" type="text/javascript" ></script>
        <script src="js/cropper.js" type="text/javascript" ></script>   
        <link href="css/dropzone.min.css" rel="stylesheet" type="text/css" />
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>        
        <link href="css/cropper.min.css" rel="stylesheet" type="text/css" />
        <script>
            var img_height = 500;
            var img_width = 400;
            var img_quality = 0.7; // should be 0.1 - 1.0
        </script>
    </head>
    <body>
        <div style="height: 300px;width:100%;border:2px dashed #3c8dbc; background-color:#e8e8e8;" id="dropzone" class="dropzone dropzone-previews">
        </div>
        <input autocomplete="off" type="hidden" name="image_file_list" id="image_file_list" value="" />
        <script src="js/dropzone-cropper.js" type="text/javascript" ></script>
    </body>
</html>
