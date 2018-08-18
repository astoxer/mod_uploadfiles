<?php 
// No direct access
defined('_JEXEC') or die; ?>
<?php// echo $upload; ?>

	<form method="post" action="<?php echo $_SERVER['REQUEST_URI'] ?>" enctype="multipart/form-data">
            <label for="userfile">Загрузить фото</label>
            <input type="hidden" name="MAX_FILE_SIZE" value="4194304"/>
			<input type="file" id="inputfile" name="inputfile">
			<br>
            <input type="submit" value="Налить">
        </form>
