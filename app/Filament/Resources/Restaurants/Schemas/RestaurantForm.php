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
                    ->label('Restaurant Name')
                    ->required(),

                FileUpload::make('image')
                    ->label('Image / Logo')
                    ->required()
                    ->disk('s3')
                    ->directory('logo')
                    ->previewable(true)
                    ->image()
                    ->visibility('public')
                    ->getUploadedFileNameForStorageUsing(fn ($file) =>
                        time() . '-' . $file->getClientOriginalName()
                    ),

                TextInput::make('city')
                    ->required(),

                Select::make('type')
                    ->label('Restaurant Type')
                    ->options([
                        'Halal' => 'Halal',
                        'Vegan' => 'Vegan',
                    ])
                    ->default('Halal')
                    ->required(),

                TextInput::make('location')
                    ->required(),

                TextInput::make('phone_number')
                    ->label('Phone Number')
                    ->tel()
                    ->required(),

                TextInput::make('address'),

                TextInput::make('email')
                    ->label('Email Address')
                    ->email(),

                TextInput::make('website'),

                TextInput::make('sort_id')
                    ->label('Sort ID')
                    ->required()
                    ->numeric()
                    ->default(0),

                Toggle::make('is_active')
                    ->label('Is Active')
                    ->required(),
            ]);
    }
}
