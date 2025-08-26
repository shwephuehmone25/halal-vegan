<?php

namespace App\Filament\Resources\Restaurants\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;

class RestaurantForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')
                    ->required(),
                FileUpload::make('image')
                    ->image(),
                TextInput::make('city')
                    ->required(),
                Select::make('type')
                    ->options(['Halal' => 'Halal', 'Vegan' => 'Vegan'])
                    ->default('Halal')
                    ->required(),
                TextInput::make('location')
                    ->required(),
                TextInput::make('phone_number')
                    ->tel()
                    ->required(),
                TextInput::make('address'),
                TextInput::make('email')
                    ->label('Email address')
                    ->email(),
                TextInput::make('website'),
                TextInput::make('sort_id')
                    ->required()
                    ->numeric()
                    ->default(0),
                Toggle::make('is_active')
                    ->required(),
            ]);
    }
}
