<?php

$oldname = 'readme.txt';
$newname = 'readme_v2.txt';

if (rename($oldname, $newname)) {
	$message = sprintf(
		'The file %s was renamed to %s successfully!',
		$oldname,
		$newname
	);
} else {
	$message = sprintf(
		'There was an error renaming file %s',
		$oldname
	);
}

echo $message;
?>