<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
  $data = [
    'headerLinks' => [
      'HOME',
      'BLOG',
      'PORTFOLIO',
      'ABOUT',
      'CONTACTS'
    ]
    ];

  return view('home', $data);
});

Route::get('blog', function () {

  $data = [
    'headerLinks' => [
      'HOME',
      'BLOG',
      'PORTFOLIO',
      'ABOUT',
      'CONTACTS'
    ]
    ];

  return view('blog', $data);
});

Route::get('portfolio', function () {

  $data = [
    'headerLinks' => [
      'HOME',
      'BLOG',
      'PORTFOLIO',
      'ABOUT',
      'CONTACTS'
    ]
    ];

  return view('portfolio', $data);
});

Route::get('about', function () {

  $data = [
    'headerLinks' => [
      'HOME',
      'BLOG',
      'PORTFOLIO',
      'ABOUT',
      'CONTACTS'
    ]
    ];

  return view('about', $data);
});

Route::get('contacts', function () {

  $data = [
    'headerLinks' => [
      'HOME',
      'BLOG',
      'PORTFOLIO',
      'ABOUT',
      'CONTACTS'
    ]
    ];

  return view('contacts', $data);
});

?>
