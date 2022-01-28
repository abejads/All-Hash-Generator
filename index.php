<?php 

$algs = [
		'md2',
		'md4',
		'md5',
		'sha1',
		'sha224',
		'sha256',
		'sha384',
		'sha512',
		'ripemd128',
		'ripemd160',
		'ripemd256',
		'ripemd320',
		'whirlpool',
		'tiger128,3',
		'tiger160,3',
		'tiger192,3',
		'tiger128,4',
		'tiger160,4',
		'tiger192,4',
		'snefru',
		'snefru256',
		'gost',
		'adler32',
		'crc32',
		'crc32b',
		'fnv132',
		'fnv164',
		'joaat',
		'haval128,3',
		'haval160,3',
		'haval192,3',
		'haval224,3',
		'haval256,3',
		'haval128,4',
		'haval160,4',
		'haval192,4',
		'haval224,4',
		'haval256,4',
		'haval128,5',
		'haval160,5',
		'haval192,5',
		'haval224,5',
		'haval256,5'
		];

if(empty($argv[1])) {
	die("Usage: php " . $argv[0] . " string" . PHP_EOL);
}


foreach($algs as $alg) {
	if(strlen($alg) <= 7){
		echo $alg . "\t\t: " . hash($alg, $argv[1]) . PHP_EOL;	
	} else {
		echo $alg . "\t: " . hash($alg, $argv[1]) . PHP_EOL;
	}
}



 ?>