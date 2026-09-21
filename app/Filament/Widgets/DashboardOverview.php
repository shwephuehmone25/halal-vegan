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
        $restaurantCounts = Restaurant::query()
            ->selectRaw('COUNT(*) as total')
            ->selectRaw('SUM(CASE WHEN is_active = 1 THEN 1 ELSE 0 END) as active')
            ->first();

        $menuCounts = Menu::query()
            ->selectRaw('COUNT(*) as total')
            ->selectRaw('SUM(CASE WHEN is_available = 1 THEN 1 ELSE 0 END) as available')
            ->first();

        $totalRestaurants = (int) ($restaurantCounts?->total ?? 0);
        $activeRestaurants = (int) ($restaurantCounts?->active ?? 0);
        $totalMenus = (int) ($menuCounts?->total ?? 0);
        $availableMenus = (int) ($menuCounts?->available ?? 0);

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
