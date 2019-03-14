
<?php 
echo "ASd";
// Remember that header() must be called before any actual output is sent
header('Content-Description: File Transfer');
header('Content-Type: application/pdf');
header('Expires: 0');
header('Cache-Control: must-revalidate');
header('Pragma: public');
header('Content-Length: ' . strlen($result));
 
// Make the file a downloadable attachment - comment this out to show it directly inside the 
// web browser.  Note that you can give the file any name you want, e.g. alias-name.pdf below:
header('Content-Disposition: attachment; filename=' . 'alias-name.pdf' );

?>