$fp = fopen('file.txt', 'a');
fwrite($fp, $_POST['info'] . PHP_EOL);
fclose($fp);