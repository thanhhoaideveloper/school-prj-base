<?php

//Message

use App\Models\SiteSetting;
use Illuminate\Support\Facades\Route;

const AUTHENTICATE_ERROR = "Tài khoản hoặc mật khẩu không đúng";

//Site setting
const SITE_NOT_FOUND = "Site của bạn chưa khởi tạo";

//success, error
const UPDATE_SUCCESS = "Cập nhật thành công";
const SAVE_SUCCESS = "Lưu thành công";

//title, description default
const TITLE = "Thiết kế website chuyên nghiệp";
const DESCRIPTION = "Cung cấp dịch vụ thiết kế website hướng đế xu thế chung và tạo thương hiệu cho doanh nghiệp";

function storeImage($file, $dir = 'temps')
{
    $time = time();
    $fileName = str_replace(' ', '', $file->getClientOriginalName()) . $time . "." . $file->extension();
    $image = $file->storeAs($dir, $fileName);
    return "storage/" . $image;
}

if (!function_exists('getConfig')) {
    function getConfig()
    {
        $setting = SiteSetting::first();
        if ($setting) {
            return $setting->toArray();
        }
        return [];
    }
}

if(!function_exists('isCheckAtiveRoute')){
    function isCheckActiveRoute($route){
        $currentRoute = Route::currentRouteName();
        return $route == $currentRoute ? 'active' : '';
    }
}