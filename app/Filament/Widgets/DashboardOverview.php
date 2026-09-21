<?php

namespace App\Filament\Widgets;

use App\Filament\Resources\Menus\MenuResource;
use App\Filament\Resources\Restaurants\RestaurantResource;
use App\Models\Menu;
use App\Models\Restaurant;
use Filament\Widgets\StatsOverviewWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class DashboardOverview extends StatsOverviewWidget
{
    protected ?string $heading = 'Overview';

    protected ?string $description = 'A quick summary of your restaurant directory.';

    protected static bool $isLazy = false;

    protected ?string $pollingInterval = null;

    protected function getStats(): array
    {
        $totalRestaurants = Restaurant::query()->count();
        $activeRestaurants = Restaurant::query()->where('is_active', true)->count();
        $totalMenus = Menu::query()->count();
        $availableMenus = Menu::query()->where('is_available', true)->count();

        return [
            Stat::make('Total Restaurants', number_format($totalRestaurants))
                ->description(number_format($activeRestaurants).' currently active')
                ->descriptionIcon('heroicon-m-building-storefront')
                ->color('primary')
                ->url(RestaurantResource::getUrl('index')),
            Stat::make('Total Menu Items', number_format($totalMenus))
                ->description(number_format($availableMenus).' currently available')
                ->descriptionIcon('heroicon-m-clipboard-document-list')
                ->color('info')
                ->url(MenuResource::getUrl('index')),
            Stat::make('Active Restaurants', number_format($activeRestaurants))
                ->description(number_format($totalRestaurants - $activeRestaurants).' inactive')
                ->descriptionIcon('heroicon-m-check-circle')
                ->color('success')
                ->url(RestaurantResource::getUrl('index')),
            Stat::make('Available Menu Items', number_format($availableMenus))
                ->description(number_format($totalMenus - $availableMenus).' unavailable')
                ->descriptionIcon('heroicon-m-check-badge')
                ->color('success')
                ->url(MenuResource::getUrl('index')),
        ];
    }
}
