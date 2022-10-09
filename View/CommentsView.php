<?php

require_once 'Controllers/DataController.php';

foreach ($data as $row) : ?>

<div>
    <p>author: <?php echo $row['author'] ?></p>
    <p>comment: <?php echo $row['description'] ?></p>
    <br>
</div>

<?php endforeach; ?>