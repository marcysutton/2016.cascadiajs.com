<?php

$colors = [];

// raw
$colors = array_merge($colors, [
  // 'green' => '#04ff00',
  // 'blue' => '#005eff',
  // 'red' => '#ff002b',
  // 'purple' => '#8000ff',
  // 'orange' => '#ff7700'
]);

// primary
/*$colors = array_merge($colors, [
  'green' => '#022d01',
  'blue' => '#1c2d4a',
  'red' => '#99001a',
  'purple' => '#663399',
  'orange' => '#ed7e1d'
]);*/

// secondary
$colors = array_merge($colors, [
  'green' => '#137630',
  'blue' => '#014da6',
  // 'red' => '#ff2a1c',
  'purple' => '#9c2172',
  'orange' => '#f35221'
]);

// neutral
/*$colors = array_merge($colors, [
  'green' => '#31583c',
  'blue' => '#335175',
  'red' => '#bb6660',
  'purple' => '#774666',
  'orange' => '#b47460'
]);*/

//
$colors = array_merge($colors, [
  // 'mostly-white' => '#e2efe6',
//   'mostly-black' => '#171717'
]);


$points = [
  "900,0 640,150 900,300 1160,150",
  "640,150 900,300 640,450 380,300",
  "380,300 640,450 380,600 120,450",
  "380,600 640,750 380,900 120,750",
  "380,900 640,1050 380,1200 120,1050",
  "380,1200 640,1350 380,1500 120,1350",
  "380,1500 640,1650 900,1500 640,1350",
  "640,1650 900,1800 1160,1650 900,1500",
  "900,1500 1160,1650 1420,1500 1160,1350",
  "1160,1350 1420,1500 1680,1350 1420,1200",
  "1160,1050 1420,1200 1680,1050 1420,900",
  "1160,750 1420,900 1680,750 1420,600",
  "1160,450 1420,600 1680,450 1420,300",
  "900,300 1160,150 1420,300 1160,450",
  "900,300 640,450 900,600 1160,450",
  "900,600 640,750 900,900 1160,750",
  "900,900 640,1050 900,1200 1160,1050",
  "900,1200 640,1350 900,1500 1160,1350",
  "640,450 900,600 640,750 380,600",
  "640,750 900,900 640,1050 380,900",
  "640,1050 900,1200 640,1350 380,1200",
  "900,600 1160,450 1420,600 1160,750",
  "900,900 1160,750 1420,900 1160,1050",
  "900,1200 1160,1050 1420,1200 1160,1350",
  // group
  "120,450 380,300 380,600 120,750",
  "120,750 380,600 380,900 120,1050",
  "120,1050 380,900 380,1200 120,1350",
  "380,300 640,150 640,450 380,600",
  "380,600 640,450 640,750 380,900",
  "380,900 640,750 640,1050 380,1200",
  "380,1200 640,1050 640,1350 380,1500",
  "640,150 900,0 900,300 640,450",
  "640,450 900,300 900,600 640,750",
  "640,750 900,600 900,900 640,1050",
  "640,1050 900,900 900,1200 640,1350",
  "640,1350 900,1200 900,1500 640,1650",
  "900,300 1160,150 1160,450 900,600",
  "900,600 1160,450 1160,750 900,900",
  "900,900 1160,750 1160,1050 900,1200",
  "900,1200 1160,1050 1160,1350 900,1500",
  "900,1500 1160,1350 1160,1650 900,1800",
  "1160,450 1420,300 1420,600 1160,750",
  "1160,750 1420,600 1420,900 1160,1050",
  "1160,1050 1420,900 1420,1200 1160,1350",
  "1160,1350 1420,1200 1420,1500 1160,1650",
  "1420,600 1680,450 1680,750 1420,900",
  "1420,900 1680,750 1680,1050 1420,1200",
  "1420,1200 1680,1050 1680,1350 1420,1500",
  // group
  "1420,300 1680,450 1680,750 1420,600",
  "1420,600 1680,750 1680,1050 1420,900",
  "1420,900 1680,1050 1680,1350 1420,1200",
  "1160,150 1420,300 1420,600 1160,450",
  "1160,450 1420,600 1420,900 1160,750",
  "1160,750 1420,900 1420,1200 1160,1050",
  "1160,1050 1420,1200 1420,1500 1160,1350",
  "900,0 1160,150 1160,450 900,300",
  "900,300 1160,450 1160,750 900,600",
  "900,600 1160,750 1160,1050 900,900",
  "900,900 1160,1050 1160,1350 900,1200",
  "900,1200 1160,1350 1160,1650 900,1500",
  "640,150 900,300 900,600 640,450",
  "640,450 900,600 900,900 640,750",
  "640,750 900,900 900,1200 640,1050",
  "640,1050 900,1200 900,1500 640,1350",
  "640,1350 900,1500 900,1800 640,1650",
  "380,300 640,450 640,750 380,600",
  "380,600 640,750 640,1050 380,900",
  "380,900 640,1050 640,1350 380,1200",
  "380,1200 640,1350 640,1650 380,1500",
  "120,450 380,600 380,900 120,750",
  "120,750 380,900 380,1200 120,1050",
  "120,1050 380,1200 380,1500 120,1350"
];

$template = '        <polygon points="{points}" style="fill: {start};">
            <animate
                attributeName="fill"
                values="{colors};"
                repeatCount="indefinite"
                begin="{delay}s"
                dur="{duration}s" /></polygon>
        ';

foreach($points as $item) {
  $c = array_merge([], $colors);
  shuffle($c);
  $c[] = $c[0];
  $values = [
    'start' => $c[0],
    'colors' => implode('; ', $c),
    'middle' => rand(4,6),
    'delay' => rand(0,2),
    'duration' => rand(3,6)
  ];
  $values['points'] = $item;

  while($values['start'] == $values['end']) {
    $values['end'] = $colors[array_rand($colors)];
  }

  echo interpolate($template, $values);
}

/**
* Interpolates context values into the message placeholders.
*/
function interpolate($message, array $context = array())
{
    // build a replacement array with braces around the context keys
    $replace = array();
    foreach ($context as $key => $val) {
        $replace['{' . $key . '}'] = $val;
    }

    // interpolate replacement values into the message and return
    return strtr($message, $replace);
}