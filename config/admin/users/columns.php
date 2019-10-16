<?php

return [
  'username' => [
    'table' => 'users',
    'user_id_table_name' => 'id',
    'type' => 'textWithAllowNumber',
    'require' => true,
    'noUmlaut' => true,
    'unique' => true,
    'maxLen' => 20,
    'minLen' => 5,
  ],
  'fname' => [
    'table' => 'users',
    'user_id_table_name' => 'id',
    'type' => 'text',
    'require' => true,
    'maxLen' => 20,
    'minLen' => 3,
  ],
  'lname' => [
    'table' => 'users',
    'user_id_table_name' => 'id',
    'type' => 'text',
    'require' => true,
    'maxLen' => 20,
    'minLen' => 3,
  ],
  'sex' => [
    'table' => 'users',
    'user_id_table_name' => 'id',
    'require' => true,
    'containJust' => ['male', 'female'],
  ],
  'birthday' => [
    'table' => 'users',
    'user_id_table_name' => 'id',
    'require' => true,
    'date' => [
      'insert' => 'Y-m-d',
      'show' => 'd M Y',
    ],
    'dateRange' => [
      'start' => '1920',
      'end' => '2004',
    ],
  ],
  'email' => [
    'table' => 'users',
    'user_id_table_name' => 'id',
    'type' => 'email',
    'require' => true,
    'unique' => true,
  ],
  'status' => [
    'table' => 'users',
    'user_id_table_name' => 'id',
    'require' => true,
    'containJust' => [0,1,2],
  ],
  'country' => [
    'table' => 'address',
    'user_id_table_name' => 'user_id',
    'type' => 'text',
    'maxLen' => 20,
    'minLen' => 3,
  ],
  'state' => [
    'table' => 'address',
    'user_id_table_name' => 'user_id',
    'type' => 'text',
    'maxLen' => 20,
    'minLen' => 3,
  ],
  'city' => [
    'table' => 'address',
    'user_id_table_name' => 'user_id',
    'type' => 'text',
    'maxLen' => 20,
    'minLen' => 3,
  ],
  'street' => [
    'table' => 'address',
    'user_id_table_name' => 'user_id',
    'type' => 'text',
    'maxLen' => 20,
    'minLen' => 3,
  ],
  'zip' => [
    'table' => 'address',
    'user_id_table_name' => 'user_id',
    'type' => 'number',
    'maxLen' => 5,
    'minLen' => 5,
  ],
  'additional' => [
    'table' => 'address',
    'user_id_table_name' => 'user_id',
    'type' => 'textWithAllowNumber',
    'maxLen' => 100,
    'minLen' => 5,
  ],
];