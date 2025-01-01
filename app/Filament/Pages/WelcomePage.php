<?php

namespace App\Filament\Pages;

use Filament\Pages\Page;

class WelcomePage extends Page
{
    // أيقونة التنقل
    protected static ?string $navigationIcon = 'heroicon-o-home';

    // مسار ملف العرض الخاص بالصفحة
    protected static string $view = 'filament.pages.welcome-page';

    // العنوان الخاص بالصفحة
    protected static ?string $title = 'Welcome Page';

    // اسم التنقل الذي يظهر في الشريط الجانبي
    protected static ?string $navigationLabel = 'Welcome';

    // تخصيص المجموعة التي تظهر بها الصفحة في الشريط الجانبي
    protected static ?string $navigationGroup = 'Dashboard';

    // شرط عرض الصفحة بناءً على الصلاحيات
    public static function canView(): bool
    {
        // على سبيل المثال: إظهار الصفحة فقط للمستخدمين الإداريين
        return auth()->user()?->hasRole('admin');
    }

    // يمكنك إضافة دوال أخرى للتخصيص
    public function getHeading(): string
    {
        return 'Welcome to the Admin Panel!';
    }
}
