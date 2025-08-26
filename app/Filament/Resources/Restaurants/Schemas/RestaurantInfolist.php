<?php

namespace App\Filament\Resources\Restaurants\Schemas;

use Filament\Infolists\Components\IconEntry;
use Filament\Infolists\Components\ImageEntry;
use Filament\Infolists\Components\TextEntry;
use Filament\Schemas\Schema;

class RestaurantInfolist
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextEntry::make('name'),
                ImageEntry::make('image'),
                TextEntry::make('city'),
                TextEntry::make('type'),
                TextEntry::make('location'),
                TextEntry::make('phone_number'),
                TextEntry::make('address'),
                TextEntry::make('email')
                    ->label('Email address'),
                TextEntry::make('website'),
                TextEntry::make('sort_id')
                    ->numeric(),
                IconEntry::make('is_active')
                    ->boolean(),
                TextEntry::make('created_at')
                    ->dateTime(),
                TextEntry::make('updated_at')
                    ->dateTime(),
            ]);
    }
}
