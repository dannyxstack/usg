<?php

namespace App\Filament\Pages;

use Filament\Pages\Dashboard as BaseDashboard;

class MyDashboard extends BaseDashboard
{
    // 修改页面标题
    protected static ?string $title = 'Unity Skills Group Dashboard';
    protected static ?string $navigationLabel = 'Dashboard'; // 侧边栏显示的菜单名
    protected ?string $heading = 'Unity Skills Group Dashboard'; // 页面顶部的大标题
    
    // 修改页面的URL路径
    protected static string $routePath = 'my-dashboard';

    // 修改小组件布局的栅格列数，默认是2
    public function getColumns(): int | array
    {
        return 3;
    }
}