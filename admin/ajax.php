<?php error_reporting(0);
//echo "<pre>";print_r($_REQUEST); die;
include '../db.php';
include '../function.php';

$tags = "new 2022";
$cid = 1;
if ($_POST['tags'])
{
    $tags = $_POST['tags'];
}

if ($_POST['cid'])
{
    $cid = $_POST['cid'];
}







$total = count($_FILES['file']['name']);

for ($i = 0;$i < $total;$i++)
{

    if ($_POST['title'])
    {
        $title = $_POST['title'];
    }
    else
    {

        $newFile = "tempUpload/" . $_FILES['file']['name'][$i];
        $title = cleanwords(pathinfo($newFile, PATHINFO_FILENAME));

    }

    $tmpFilesize = $_FILES['file']['size'][$i];
    $tmpFilePath = $_FILES['file']['tmp_name'][$i];

    $ext = pathinfo($_FILES['file']['name'][$i], PATHINFO_EXTENSION);

    $duration = "";

    if ($tmpFilePath != "")
    {

        $s_id = "abcdefghijklmnopqrstuvwxyz0123456789";
        $s_id = substr(str_shuffle($s_id) , 0, 5);
        $newFilePath = "../store/$s_id.$ext";


        if (move_uploaded_file($tmpFilePath, $newFilePath))
        {

            echo addfile($newFilePath, $tags, $cid, $s_id, $title, $tmpFilesize, $ext,1);

        }
    }
}

?> <style>.loading{display:none}</style>
