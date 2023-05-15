<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    # обычные мыссивы
    $state = ["Sweden","Switzerland","Norway","Finland","Germany"];
    $animals = ["cats","dolphin"];
    $fre= ["Alexey","Anton","Vika"];
    # многомерный массив
    $frends = [
        "Anton" => ["strict",
                    "smart",
    ],
        "Vika" => ["sweed",
                   "beautiful",
    ],
    ];
    # ассоциативный массив
    $states = [
        'Anton' => 'sweden',
        'viki' => 'finland',
        'Alexey' => 'norway',
    ];
    #echo $state [2];
    #echo $frends['Anton'][0];
    #echo $frends['Vika'][1];
    #echo $states ['Alexey'];

    #циклы foreach, while, for, do-while

    //foreach($state as $stat)
    #{
    #    echo $stat;
    #}

    //for ($i=1; $i <=10; $i++)
    #{
    #    echo $i;
    #}
    //$anwanser = '';
      #  while($anwanser !='yes')
       # {
       #     echo 'Do you want to continue?';
       #     $anwanser = readline();
       # }
    #$anwanser = '';
    #do {
      #  echo 'Do you want to continue?';
      #  $anwanser = readline();
  #  }   while ($anwanser !='yes');
    ?>
</body>

</html>