<?php
// The file test.xml contains an XML document with a root element
// and at least an element /[root]/title.
echo "<pre>";
if (file_exists('fichero.xml')) {
    $xml = simplexml_load_file('fichero.xml');
 
    print_r($xml);
} else {
    exit('Failed to open test.xml.');
}
?>