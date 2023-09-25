<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
  $data = [
    'headerLinks' => [
      'HOME',
      'BLOG',
      'PORTFOLIO',
      'ABOUT',
      'CONTACTS',
      'NEWPAGE'
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
      'CONTACTS',
      'NEWPAGE'
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
      'CONTACTS',
      'NEWPAGE'
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
      'CONTACTS',
      'NEWPAGE'
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
      'CONTACTS',
      'NEWPAGE'
    ]
    ];

  return view('contacts', $data);
});

Route::get('newpage', function () {

  $data = [
    'headerLinks' => [
      'HOME',
      'BLOG',
      'PORTFOLIO',
      'ABOUT',
      'CONTACTS',
      'NEWPAGE'
    ]
    ];

  return view('newpage', $data);
});

?>
