<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006~2018 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: liu21st <liu21st@gmail.com>
// +----------------------------------------------------------------------

Route::get('think', function () {
    return 'hello,ThinkPHP5!';
});

//Route::get('/', function () {
//    $data = [
//        'code'    => '0000',
//        'message' => '无效的访问'
//    ];
//    return $data;
//});

Route::get('hello/:name', 'index/hello');

//首页
Route::any('index', 'index/Index/index');  //首页
Route::any('cattwo', 'index/Index/getTwoCateList');  //二级分类
Route::any('catlevel', 'index/Index/getParentImage');  //一级头像
Route::any('goodsinfo', 'index/Index/getGoodsInfo');  //产品详情
Route::any('goodslist', 'index/Index/getGoodsList');  //产品列表
Route::any('visitgoods', 'index/Index/getVisitGoodsList');  //最近浏览产品列表
Route::any('shortcut', 'index/Index/shortCut');  //shortcut

//分类
Route::any('class', 'index/Category/getCategoryList');  //分类列表

//购物车
Route::any('shopcar', 'index/Shopcar/getShopcarList');  //购物车列表

//订单
Route::any('sure', 'index/Order/sureOrder');  //确定下单-确认资料
Route::post('del','index/Order/del');
Route::any('address','index/Order/sureAddress');
Route::any('money','index/Order/sureMoney');
Route::any('over', 'index/Order/overOrder');  //下单完成

//我的
Route::any('myself','index/Myself/index');
Route::any('service','index/Myself/service');
Route::any('privacy','index/Myself/privacy');
Route::any('question','index/Myself/question');


//pc
Route::any('pc_index','pc/Index/index');
Route::any('pc_goodsinfo','pc/Index/pcGetGoodsInfo');
Route::any('pc_categorylist','pc/Index/pcGetCategoryList');
return [

];
