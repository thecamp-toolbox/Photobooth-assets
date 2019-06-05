<?php
return [
    'debug' => true,
];


return [
  'routes' => [
    [
      'pattern' => 'alim',
      'action'  => function () {
        return page('profiles/transfarmers');
      }
    ],
    [
      'pattern' => 'eco',
      'action'  => function () {
        return page('profiles/ecocentrique');
      }
    ],
    [
      'pattern' => 'hop',
      'action'  => function () {
        return page('profiles/haltere-mondialiste');
      }
    ],
    [
      'pattern' => 'edu',
      'action'  => function () {
        return page('profiles/thesaurus-rex');
      }
    ],
    [
      'pattern' => 'tech',
      'action'  => function () {
        return page('profiles/hacker-vaillant');
      }
    ],
    [
      'pattern' => 'hab',
      'action'  => function () {
        return page('profiles/daredesvilles');
      }
    ],[
      'pattern' => 'just',
      'action'  => function () {
        return page('profiles/epris-de-justice');
      }
    ]
  ]
];
