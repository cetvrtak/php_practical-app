<?php
    $fh = fopen("testfile.txt", "w") or die("Failed to create file");
    $text = <<<_END
    Line 1
    Line 2
    Line 3
    _END;

    fwrite($fh, $text) or die("Could not write to file");
    fclose($fh);
    echo "File 'testfile.txt' written successfully";
?>

<?php
    $fh = fopen('testfile.txt', 'r') or die('File does not exist');
    $line = fgets($fh);
    fclose($fh);
    echo $line;
?>

<?php
    copy('testfile.txt', 'testfile2.txt') or die('Just die');
    echo 'File successfully copied to "testfile2.txt"';
?>

<?php
    $fh = fopen("testfile.txt", "r+") or die("failed to open file");
    $text = fgets($fh);
    fseek($fh, 0, SEEK_END);
    fwrite($fh, "$text") or die("Could not write to file");
    fclose($fh);

    echo "File 'testfile.txt' succefully updated";
?>