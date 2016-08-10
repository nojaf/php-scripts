<?php

class Math {
	public static function add(...$nums){
		return array_sum($nums); //array_sum(func_get_args());
	}
}

echo Math::add(1,2,3)."\n";

class Bank {
	const TAX = 0.09;
}

echo Bank::TAX."\n";