<?php
		if (isset($_POST["task"])) {
			$task=$_POST["task"];
			switch ($task) {
				case 1:
						echo '<h3>Відповідь на завдання '.$task.'</h3>';
						echo task1($_POST['number']);
					break;

				case 2:
						echo '<h3>Відповідь на завдання '.$task.'</h3>';
						task2(preg_split('/[\s,.;]+/', $_POST['words']));
					break;				

				case 3:
						echo '<h3>Відповідь на завдання '.$task.'</h3>';
						task3(explode(' ', $_POST['numbers']));
					break;				

				case 4:
						echo '<h3>Відповідь на завдання '.$task.'</h3>';
//						print_r($_POST);
						task4 ($_POST);
					break;				

				case 5:
						echo '<h3>Відповідь на завдання '.$task.'</h3>';
						print_r($_POST);
					break;				

				case 6:
						echo '<h3>Відповідь на завдання '.$task.'</h3>';
						$prot=explode(PHP_EOL, $_POST['words']);

						for ($i=0; $i < count($prot); $i++) { 
							$prot[$i] = explode(' ', $prot[$i]);
						}
						print_r($prot);
					break;				

				default:
						echo 'Запит не розпізнано';
					break;
			}
		}


function task1 ($number) {
	$res='';
	for ($i=1; $i<=(int) $number ; $i++) { 
		$div_sum=0;
		for ($j=1; $j < $i ; $j++) { 
			if (($i%$j)==0) {
				$div_sum=$div_sum+$j;
			}
		}
		if ($i==$div_sum) {
			$res=$res.' '.$i;
		}
	}
	return $res;
}

function task2 ($words) {
//	echo '<p>Найбільші слова: </p>';
	for ($i = 0; $i < count($words); $i++) {
		for ($j = 0; $j < count($words); $j++) {
			if (strlen($words[$i]) > strlen($words[$j])) {
				$buf = $words[$i];
				$words[$i] = $words[$j];
				$words[$j] = $buf;
			}
		}
	}

	$i=0;
	do {echo $words[$i].'</br>';
	} while (strlen($words[$i]) == strlen($words[++$i]));

	return $words;

}

function task3 ($numbers) {
	echo 'Прості числа: ';
	$num_count=0;
	for ($i=0; $i < count($numbers); $i++) { 
		$chek=0;
		for ($j=2; $j < $numbers[$i]; $j++) { 
			if ($numbers[$i]%$j==0) {
				$chek=1;
			}
		}
		if (($chek==0) and ($numbers[$i]>1)) {
			echo $numbers[$i].', ';
			$num_count++;
		}
	}
	echo '</br>Всього, простих чисел: '.$num_count;
	return $num_count;
}

function task4 ($data) {
	if (isset($data['party'])) {
		$days=(int) $data['days'];
		for ($i=1; $i <= $days; $i++) { $days_arr[$i]=0;	}
		$parties=(int) $data['parties'];
		$schedule=array_values($data['party']);
		for ($i=0; $i < count($schedule); $i++) { 
			$schedule[$i]=explode(' ', $schedule[$i]);
		} 
		
		for ($i=1; $i <= count($days_arr); $i++) { 
			for ($j=0; $j < count($schedule); $j++) { 
				for ($k=0; $k < count($schedule[$j]); $k++) { 
					if (($i==(int) $schedule[$j][''.$k]) && ($i % 7 <> 0) &&  (($i + 1) % 7)) {
						++$days_arr[$i];
					}
				}
			}
		}

		echo '<p>Загальнонаціональні страйки пройдуть в такі дні:</p>';
		$sum=0;
		for ($i=1; $i <= count($days_arr); $i++) { 
			if ($days_arr[$i] > 1) {
				echo '<h3 style="display:inline-block;">';
				echo ' '.$i;
				echo '</h3>';
			}
			$sum = $sum + $days_arr[$i];
		}
		echo '<p>Всього страйків на протязі року: <h3 style="display:inline-block;">'.$sum.'</h3></p>';
	}
	return $data;
}

?>