<?php

// 3.1	Напишите функцию, которая вычисляет доход по вкладу. 
// В качестве аргумента принимается сумма вклада, срок в месяцах, годовой процент. 
// Возвращается сумма вклада по окончанию срока. 

function income_acounting($deposite, $duration, $rate)
{
	$income = ($deposite * $rate *$duration / 12) / 100;
	$total_amount = $income + $deposite;
	return ($total_amount);
}

while(1)
{
	echo "Enter the amount of deposite: ";
	$amount = fgets(STDIN);
	echo "Enter the time of deposite: ";
	$time = fgets(STDIN);
	echo "Enter the yearly rate: ";
	$y_rate = fgets(STDIN);
	if ($amount < 0 || $time < 0 || $y_rate < 0)
		printf("Please eneter valid number\n");
	else
	{
		printf("Your income is: ". income_acounting((int)$amount, (int)$time, (float)$y_rate)."\n");
		exit;
	}
}


