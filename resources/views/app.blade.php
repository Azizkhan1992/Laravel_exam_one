<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> @yield('title')</title> <?php //yield har qaysi sahifa uchun dinamic title yaratishda fioydalaniladi ?>
</head>
<body>
    <h1>My App</h1>

    @yield('content') <?php // Shu sahifadan extends qilib olingan sahifa ichidagi kontentni kerakli joyga joylashtirish va ko'rsatish uchun xizmat qiladi ?>
</body>
</html>