<?php
include "config.php";

if (isset($_GET['id']) && is_numeric($_GET['id'])) {
    
    $file_id = intval($_GET['id']);

    $stmt = mysqli_prepare($conn, "SELECT filename, filetype, filedata FROM files WHERE id = ?");
    mysqli_stmt_bind_param($stmt, "i", $file_id);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_store_result($stmt);

    if (mysqli_stmt_num_rows($stmt) === 1) {
        mysqli_stmt_bind_result($stmt, $filename, $filetype, $filedata);
        mysqli_stmt_fetch($stmt);

        // Force download............

        //Tells the browser what kind of file is being sent.
        //$filetype = "application/pdf";
        header("Content-Type: " . $filetype); 
        
        //forces the file to be downloaded, not displayed in browser. 
        //basename($filename) removes any path from the filename for safety.
        header("Content-Disposition: attachment; filename=\"" . basename($filename) . "\"");
      
        //Tells the browser how many bytes the file contains.   
        //Makes downloads faster and more predictable.
        //$filedata is usually a string containing the file's content.   
        header("Content-Length: " . strlen($filedata));

        /*
            -three header() statements are not enough by themselves to download a file
            -do not actually send the file content to the browser.
            -must still output the file content
        */
        echo $filedata;
        exit;
    } else {
        echo "File not found.";
    }

    mysqli_stmt_close($stmt);
} else {
    echo "Invalid file ID.";
}
?>
