<?php

$table = require __DIR__ . '/functions.php';

?>

<div class="test-report">
    <h4>Following is the output that you will see on PHP <?php echo PHP_VERSION ?></h4>
    <?php echo $table; ?>
</div>