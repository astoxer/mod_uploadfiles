<?php 
// No direct access
defined('_JEXEC') or die; ?>
<?php// echo $upload; ?>

<html>
    <head>
        <title>Basic File Upload</title>
    </head>
    <body>
        
        		
		<form method="post" action="<?php echo $_SERVER['REQUEST_URI'] ?>" enctype="multipart/form-data">
            <label for="userfile">Загрузить фото</label>
            <input type="file" id="inputfile" name="inputfile"></br>
            <input type="submit" value="Налить">
        </form>
    </body>
</html>