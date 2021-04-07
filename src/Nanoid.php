<?php

declare(strict_types=1);

namespace Deable\Nanoid;


final class Nanoid
{
	private const ALPHABET = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
	private const ALPHABET_SIZE = 62;
	private const MASK = 63;

	public static function generate(int $size): string
	{
		$step = (int) ceil(1.6 * self::MASK * $size / self::ALPHABET_SIZE);
		$result = '';
		while(true) {
			$bytes = self::generator($step);
			for ($i = 1; $i <= $step; $i++) {
				$byte = $bytes[$i] & self::MASK;
				if (isset(self::ALPHABET[$byte])) {
					$result .= self::ALPHABET[$byte];
					if (strlen($result) === $size) {
						return $result;
					}
				}
			}
		}
	}
	
	private static function generator($size)
	{
		return unpack('C*', random_bytes($size));
	}
}
