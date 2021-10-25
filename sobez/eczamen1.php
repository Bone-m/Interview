<?php
$data = [
    'question' => ['почему', 'как', 'зачем', 'столько'],
    'animals' => [
        'birds' => [
            [
                'name' => 'грачи',
            ],
            [
                'name' => 'воробьи',
            ],
        ],
        'others' => [
            [
                ['name' => 'кошки'],
                ['name' => 'рыбы'],
                ['name' => 'собаки'],
            ],
        ],
    ],
    'parts' => [
        'hands' => 'рук',
        'feathers' => 'перьев',
        'eyes' => 'глаз',
    ],
];
// нахождение классов массива
echo $data['question'][0] . '<br>';
echo $data['animals']['birds']['0']['name'] . '<br>';
echo ' не ' . '<br>';
echo $data['animals']['others']['0']['0']['name'] . '<br>';
echo ' и ' . '<br>';
echo $data['question'][2] . '<br>';
echo ' им ' . '<br>';
echo $data['question'][3] . '<br>';
echo $data['parts']['feathers'] . '<br>';
// соединение 
echo $data['question'][0] . ' ' .  $data['animals']['birds']['0']['name'] .
    ' не ' . $data['animals']['others']['0']['0']['name'] .
    ' и ' . $data['question'][2] . ' им ' . $data['question'][3] . ' ' .
    $data['parts']['feathers'];

?>
<!-- почему грачи не кошки и зачем им столько перьев -->