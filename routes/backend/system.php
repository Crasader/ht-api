<?php

Route::namespace('System')
//    ->middleware('jwt.auth')
    ->prefix('system')
    ->group(function () {

    //通知
        Route::resource('notification', 'NotificationsController',[
            'except' => ['show', 'edit', 'update'],
        ]);
});
