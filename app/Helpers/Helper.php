<?php

//Message

use App\Models\SiteSetting;
use Illuminate\Support\Facades\Route;

const AUTHENTICATE_ERROR = "Tài khoản hoặc mật khẩu không đúng";

//Site setting
const SITE_NOT_FOUND = "Site của bạn chưa khởi tạo";

//success, error
const UPDATE_SUCCESS = "Cập nhật dữ liệu thành công";
const SAVE_SUCCESS = "Lưu dữ liệu thành công";
const NOT_FOUND = "Không tìm thấy dữ liệu";
const DELETE_ERROR = "Xóa dữ liệu không thành công";
const DELETE_SUCCESS = "Xóa dữ liệu thành công";

//title, description default
const TITLE = "Trang quản lý trường học";
const DESCRIPTION = "Dịch vụ thiết kế website chuyên nghiệp - contact: hovietlong234@gmail.com";



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

if (!function_exists('isCheckAtiveRoute')) {
    function isCheckActiveRoute($route)
    {
        $currentRoute = Route::currentRouteName();
        return $route == $currentRoute ? 'active' : '';
    }
}