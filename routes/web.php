<?php

use Illuminate\Support\Facades\Route;
use \Telegram\Bot\Laravel\Facades\Telegram;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

$bot_api_token = config('telegram.bots.api_bestmaster_massage_bot.token');

Route::post("/$bot_api_token/webhook", function () {

    Telegram::commandsHandler(true);
    return 'ok';
});
