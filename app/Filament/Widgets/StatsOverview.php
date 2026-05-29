<?php

namespace App\Filament\Widgets;

use App\Models\Category;
use App\Models\Post;
use Filament\Widgets\StatsOverviewWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class StatsOverview extends StatsOverviewWidget
{
    protected function getStats(): array
    {
        return [
            Stat::make('Tổng bài viết', Post::count())
                ->description('Tất cả bài viết')
                ->color('primary'),

            Stat::make('Đã xuất bản', Post::where('is_published', true)->count())
                ->description('Bài viết công khai')
                ->color('success'),

            Stat::make('Bản nháp', Post::where('is_published', false)->count())
                ->description('Chưa xuất bản')
                ->color('warning'),

            Stat::make('Danh mục', Category::count())
                ->description('Tổng số danh mục')
                ->color('info'),
        ];
    }
}
