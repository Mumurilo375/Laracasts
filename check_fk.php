<?php

$db = new PDO('sqlite:database/database.sqlite');
$result = $db->query("PRAGMA foreign_key_list(job_listings)");
$fks = $result->fetchAll(PDO::FETCH_ASSOC);

echo "Foreign Keys da tabela job_listings:\n";
print_r($fks);

if (empty($fks)) {
    echo "\nNENHUMA foreign key encontrada!\n";
} else {
    echo "\nForeign keys encontradas: " . count($fks) . "\n";
}
