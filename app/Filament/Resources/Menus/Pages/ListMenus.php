<?php

namespace App\Filament\Resources\Menus\Pages;

use App\Filament\Resources\Menus\MenuResource;
use App\Models\Menu;
use App\Models\Restaurant;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;
use Filament\Schemas\Components\Tabs\Tab;
use Illuminate\Database\Eloquent\Builder;

class ListMenus extends ListRecords
{
    protected static string $resource = MenuResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }

    public function getTabs(): array
    {
        $tabs = [];

        $tabs['all'] = Tab::make('All')
            ->badge(Menu::count());

        $restaurants = Restaurant::all();
        foreach ($restaurants as $restaurant) {
            $tabs['restaurant_' . $restaurant->id] = Tab::make($restaurant->name)
                ->modifyQueryUsing(fn (Builder $query) => $query->where('restaurant_id', $restaurant->id))
                ->badge(Menu::where('restaurant_id', $restaurant->id)->count());
        }

        return $tabs;
    }
}
