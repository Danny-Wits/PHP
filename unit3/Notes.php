<?php
$dir_path = "notes";
$file_path = "";
if (!in_array($dir_path, scandir('.'))) {
    mkdir($dir_path);
}
chdir($dir_path);
RUN:
echo "Enter your name :";
$user_name = trim(readline());
if ($user_name == "x") {
    exit();
}


echo "Enter your password:";
$password = readline() . "\n";
if (in_array($user_name . '.txt', scandir('.'))) {
    $file = fopen($user_name . '.txt', 'a+');
    if ($password != fgets($file)) {
        fclose($file);
        goto RUN;
    }
} else {
    $file = fopen($user_name . '.txt', 'a+');
    echo "(set)";
    fwrite($file, $password . "\n");
}

echo "Enter your quote :";
$content = readline() . "\n";

fwrite($file, $content);
rewind($file);
$content = fread($file, filesize($user_name . '.txt'));
echo $content;
fclose($file);
goto RUN;
