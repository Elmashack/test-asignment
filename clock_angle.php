<?php
	function angle($hour, $minute)
	{
		$hourSpeedDegree = 0.5;				// скорость движения часовой стрелки в минуту 360 / 720
		$minSpeedDegree = 360 / 60;			//  скорость движения минутной стрелки
		$hourInMin = $hour * 60 + $minute;				// часы переводим в минуты
		$hourDegree = $hourInMin * $hourSpeedDegree;		// положение часовой стрелки
		$minDegree = $minute * $minSpeedDegree;				// положение минутной стрелки

		$angle = abs($hourDegree - $minDegree);

		return ($angle);
	}
