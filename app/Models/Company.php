<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

// Yangi modelni migrationlari bilan yaratish uchun php artisan make:model modelName --migration komandasidan foydalaniladi

// Migrationlarsiz Modelni php artisan make:model modelName komandasi bilan yaratiladi
class Company extends Model
{
    use HasFactory,
    SoftDeletes; //SoftDelete bu foydalanuvchi o'chirishni bosganda brauzerdagi ma'lumot o'chirilishini, lekin Bazada ma'lumotlar saqlanib qolinishini ta'minlaydi

    // Ishlatiladigan jadval nomini ko'rsatish
    // protected $table = 'my_companies';

    // Custom yagona kalit berish
    // protected $primaryKey = 'company_id';

    //Auto Incrementing ni o'chirib qo'yish
    // public $incrementing = false;

    //Timestamps ni o'chirib qo'yish
    // public $timestamps = false;

    // Bazadagi jadval o'zgaruvchisiga default qiymat berish
    // protected $attributes = [
    //     'active' => true
    // ]


    protected $fillable = ['name', 'phone', 'address']; // create metodi bilan ma'lumotlar saqlanganda modelda aynan maydonlarga ma'lumot kiritilishi kerakligini $fillable bilan ko'rsatish kerak bo'ladi

    // protected $guarded = ['id']; //create metodi bilan ma'lumotlar saqlanganda qaysi maydonlarga yozishga ruxsat yo'qligini aniqlaydi
}
