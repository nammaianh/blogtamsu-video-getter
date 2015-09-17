<?php

$app->get('/', [
    'uses' => 'GetHtmlController@index',
    'as'   => 'index',
]);

$app->get('get-html', [
    'uses' => 'GetHtmlController@getHtml',
    'as'   => 'get_html',
]);
