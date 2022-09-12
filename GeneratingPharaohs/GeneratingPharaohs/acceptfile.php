<?php
if(isset($_FILES) && $_FILES['image']['error'] == 0){ // Проверяем, загрузил ли пользователь файл
$destiation_dir = dirname(__FILE__). '/pharaons' .'/'.$_FILES['image']['name']; // Директория для размещения файла
move_uploaded_file($_FILES['image']['tmp_name'], $destiation_dir ); // Перемещаем файл в желаемую директорию
echo 'File Uploaded'; // Оповещаем пользователя об успешной загрузке файла


file_put_contents(__DIR__ . '/' . 'counter.txt', (file_get_contents(__DIR__ . '/' . 'counter.txt') + 1));


}
else{
echo 'No File Uploaded'; // Оповещаем пользователя о том, что файл не был загружен
}




?>