<?php

require_once 'Controllers/PaginationController.php';

for ($page = 1; $page <= $totalPages; $page++): ?>
    <a href="/?page=<?= $page ?>"><?= $page ?></a>
<?php endfor; ?>