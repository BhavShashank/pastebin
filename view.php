<?php
if(isset($_GET['id'])){
    $file_id = $_GET['id'];
    $file_path = 'files/'.$file_id;
    if(file_exists($file_path)){
        $file_data = file_get_contents($file_path);
        $file_data = htmlspecialchars($file_data);
    } else {
        http_response_code(404);
        $file_data = "Error 404 \nFile not found.";
    }
} else {
    header('Location: /');
}
?>
<html>
    <head>
        <title>View mode - file #<?php echo $file_id; ?></title>
    </head>
    <body>
        <center>
            <h1>Showing file #<?php echo $file_id; ?></h1>
            <textarea cols="70" rows="30"><?php echo $file_data; ?></textarea>
        </center>
    </body>
</html>