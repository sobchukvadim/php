<?php
//	function map($items, $callback) {
//		$results = [];
//
//		foreach ($items as $item) {
//			$results[] = $callback($item);
//		}
//
//		return $results;
//	}
//
//	$users = [
//		0 => [
//			'name'  => 'John',
//			'email' => 'john@example.com',
//			'age'   => 23
//		],
//		1 => [
//			'name'  => 'Adam',
//			'email' => 'adam@example.com',
//			'age'   => 30
//		]
//	];
//
//	$usersEmails = map($users, function($user) {
//        return $user['email'];
//	});
//
//	print_r($usersEmails);


$lines = [
//    1 => [
//        'date' => '10-08-19',
//        'work_details' => '1'
//    ],
//    2 => [
//        'date' => '10-08-19',
//        'work_details' => '2'
//    ],
//    3 => [
//        'date' => '10-08-19',
//        'work_details' => '3'
//    ],
//    4 => [
//        'date' => '10-08-19',
//        'work_details' => '4'
//    ],
//    5 => [
//        'date' => '10-08-19',
//        'work_details' => '5'
//    ],
//    6 => [
//        'date' => '10-08-19',
//        'work_details' => '6'
//    ]
];

$linesCount = count($lines);
$additionalLines = 0;

if ($linesCount < 5) {
    $additionalLines = (5 - $linesCount);
}

for ($i = 1; $i <= $additionalLines; $i++) {
    //$lines[] = ['date' => '', 'work_details' => ''];
    array_push($lines, ['date' => '', 'work_details' => '']);
}



echo "<table border=\"1\"><tbody>";
foreach ($lines as $line) {
    echo "<tr><td>{$line['date']}</td><td>{$line['work_details']}</td></tr>";
}



echo "</tbody></table>";
