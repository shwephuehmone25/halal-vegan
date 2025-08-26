<?php

namespace App\Filament\Resources\Restaurants\Pages;

use App\Filament\Resources\Restaurants\RestaurantResource;
use App\Models\Restaurant;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;
use Filament\Schemas\Components\Tabs\Tab;
use Illuminate\Database\Eloquent\Builder;

class ListRestaurants extends ListRecords
{
    protected static string $resource = RestaurantResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }

    public function getTabs(): array
    {
        return [
            'all' => Tab::make('All')
                ->badge(Restaurant::count()),

            'active' => Tab::make('Active')
                ->modifyQueryUsing(fn (Builder $query) => $query->where('is_active', true))
                ->badge(Restaurant::where('is_active', true)->count()),

            'inactive' => Tab::make('Inactive')
                ->modifyQueryUsing(fn (Builder $query) => $query->where('is_active', false))
                ->badge(Restaurant::where('is_active', false)->count()),
        ];
    }
}
