<?php

Route::get('/', function () {
    return view('welcome');
});

// Route::get('trangchu',[
//     'as'=>'trang-chu',
//     'uses'=>'myctl@gTrangchu'
// ]);
// Route::get('trangchu', function(){
//     return view('page.layout.index');
// });
Route::get('trangad',function(){
    return view('admin.layout.index');
});
Route::group(['prefix'=>'page'],function(){
    Route::get('trangchu','pagecontroller@getTrangchu');
    Route::get('chitiet/{id}','pagecontroller@getChitiet');
    Route::post('chitiet/{id}','pagecontroller@postChitiet');

});

Route::group(['prefix'=>'cart'],function(){
    Route::get('them/{id}','cCart@getAdd');
    Route::get('danhsach','cCart@getList');
});
Route::group(['prefix'=>'admin'],function(){
    Route::group(['prefix'=>'loaisp'],function(){
        Route::get('danhsach','cLoaisp@getList');
        
        Route::get('them','cLoaisp@getAdd');
        Route::post('them','cLoaisp@postAdd');

        Route::get('sua/{id}','cLoaisp@getEdit');
        Route::post('sua/{id}','cLoaisp@postEdit');
    });
    
    Route::group(['prefix'=>'sanpham'],function(){
        Route::get('danhsach','cSanpham@getList');
        
        Route::get('them','cSanpham@getAdd');
        Route::post('them','cSanpham@postAdd');

        Route::get('sua/{id}','cSanpham@getEdit');
        Route::post('sua/{id}','cSanpham@postEdit');
    });
    Route::group(['prefix'=>'slide'],function(){
        Route::get('danhsach','cSlide@getList');
        
        Route::get('them','cSlide@getAdd');
        Route::post('them','cSlide@postAdd');

        Route::get('sua/{id}','cSlide@getEdit');
        Route::post('sua/{id}','cSlide@postEdit');
    });
    Route::group(['prefix'=>'baiviet'],function(){
        Route::get('danhsach','cBaiviet@getList');
        
        Route::get('them','cBaiviet@getAdd');
        Route::post('them','cBaiviet@postAdd');

        Route::get('sua/{id}','cBaiviet@getEdit');
        Route::post('sua/{id}','cBaiviet@postEdit');
    });
});
?>