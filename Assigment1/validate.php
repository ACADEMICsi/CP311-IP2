
<?php

// Enable XML error reporting
libxml_use_internal_errors(true);

// Load the XML document
$xml = new DOMDocument();

if (!$xml->load("students.xml")) {
    echo "XML is not well-formed!\n";

    foreach (libxml_get_errors() as $error) {
        echo trim($error->message) . "\n";
    }

    exit;
}

// Validate XML against its internal DTD
if ($xml->validate()) {
    echo "SUCCESS: XML is well-formed and valid against its DTD!";
} else {
    echo "FAILED: XML does not follow its DTD!\n";

    foreach (libxml_get_errors() as $error) {
        echo trim($error->message) . "\n";
    }
}

?>
