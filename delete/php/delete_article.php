<?php

require('config.php');

$article_id = $_GET['id'];
$delete_query = mysqli_query($db, 'DELETE FROM `articles` WHERE `id` ='.$article_id.';');



