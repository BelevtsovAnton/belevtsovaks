<?php
  /* mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
    $connect = mysqli_connect('localhost', 'root', 'root', 'belevtsova');
   
   
   
function subjectDB(){
    
    mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
    $connect = mysqli_connect('localhost', 'root', 'root', 'belevtsova');
    $result = mysqli_query($connect, 'SELECT * FROM form_pro');
    $subject = [];
    if ($result->num_rows > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            $subject[] = $row;
        }
    }
    return $subject;
}
function imageDB(){
    mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
    $connect = mysqli_connect('localhost', 'root', 'root', 'belevtsova');

    $result = mysqli_query($connect, 'SELECT * FROM form_pro');
    $image_paths = [];
    if ($result->num_rows > 0) {
        while ($image = mysqli_fetch_assoc($result)) {
            $image_paths[] = $image;
        }
    }
    return $image_paths;
    
}

