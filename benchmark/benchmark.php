<?php

require __DIR__ . '/../src/Nanoid.php';

use Deable\Nanoid\Nanoid;

$size = 22;
$loop = 1e5;
$counter = [];

$timeStated = microtime(true);
for ($i = 0; $i < $loop; $i++) {
	$id = Nanoid::generate($size);
	if (!isset($counter[$id])) {
		$counter[$id] = 1;
	} else {
		$counter[$id]++;
	}
}
$timeFinished = microtime(true);
$deltaTime = $timeFinished - $timeStated;

ksort($counter);
printf("Total time used: %.3f ms\n", 1e3 * $deltaTime);
printf("AVG time used: %.3f ms\n", 1e3 * $deltaTime / $loop);

$collisions = array_filter(
	$counter,
	function (int $c) {
		return $c > 1;
	}
);
printf("Found %d colisions:\n", count($collisions));
print_r($collisions);
