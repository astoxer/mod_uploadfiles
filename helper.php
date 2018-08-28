<?php
// No direct access
defined('_JEXEC') or die;


class ModUploadFilesHelper
{
    /**
     * Retrieves the hello message
     *
     * @param   array  $params An object containing the module parameters
     *
     * @access public
     */    
    public static function getUpload($params)
    {
		
			if ($_SERVER['REQUEST_METHOD'] == "POST" ) {
				if ($_FILES['inputfile']['error'] == UPLOAD_ERR_OK && $_FILES['inputfile']['type'] == 'image/jpeg') { //Разрешенный тип файлов
					$destiation_dir = dirname(__FILE__) . $params->get('folder_default') . date('YmdHis') . '.jpg'; //Директория и имя файла
					if (move_uploaded_file($_FILES['inputfile']['tmp_name'], $destiation_dir)) { //Move the file to desired directory.
						
						?>
						
							<script type="text/javascript">
								alert("Спасибо, файл загружен!");
							</script>
						<?php
						
						
						//echo 'File Uploaded'; //Send message to user that file is uploaded`
					} else {?>
						
							<script type="text/javascript">
								alert("Файл не загружен!");
							</script>
						<?php
						//echo 'File not uploaded';
					}
				} else {
					switch ($_FILES['inputfile']['error']) {


						case UPLOAD_ERR_FORM_SIZE:
						case UPLOAD_ERR_INI_SIZE:
							
							?>
						
							<script type="text/javascript">
								alert("Превышен размер файла!");
							</script>
						<?php
							
							//echo 'File  Size exceed';
							brake;
						case UPLOAD_ERR_NO_FILE:
							
							?>
						
							<script type="text/javascript">
								alert("Файл не выбран!");
							</script>
						<?php
							
							
							//echo 'FIle Not selected';
							break;
						default:
							
							?>
						
							<script type="text/javascript">
								alert("Ай яй яй, можно загружать только фото!");
							</script>
						<?php
							
							//echo 'Something is wrong';
					}
				}
			}


        return 'Upload, Files!';
    }
}