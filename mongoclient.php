
<?php

$manager = new MongoDB\Driver\Manager("mongodb://localhost:27017");

$cmd = new MongoDB\Driver\Command(array("replSetGetStatus"=>1));

$cursor = $manager->executeCommand('admin', $cmd);

echo "<pre>"; print_r($cursor->toArray()); echo "</pre>";
?>

