<form action method="get">

    <input type="text" name="text"><br>
    <input type="submit" name="send" value="Send">

</form>

<?php

$m = [
    'friends' => [
        'name' => 'Joe',
        'last name' => 'Gleb',
        'age' => 15,
        'name1' => 'Joel',
        'last name2' => 'Gle',
        'age3' => 19,

    ],
    'countries' => [
            'japan', 'South Korea', 'USA', 'Australia',
        ],

       ];


$animals = [
    'rakoon', 'cat', 'dog',
];

var_dump($m['countries'][0]);

foreach ($m['countries'] as $item)
{
    if ($item != 'japan')
    {
        echo $item . PHP_EOL;
    }
};







