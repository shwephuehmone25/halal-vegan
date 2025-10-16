<?php

namespace App\Filament\Resources\Menus\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;

class MenuForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('restaurant_id')
                    ->required()
                    ->numeric(),
                TextInput::make('name')
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
                Textarea::make('description')
                    ->columnSpanFull(),
                TextInput::make('price')
                    ->required()
                    ->numeric()
                    ->prefix('$'),
                Toggle::make('is_available')
                    ->required(),
                TextInput::make('sort_id')
                    ->required()
                    ->numeric()
                    ->default(0),
            ]);
    }
}
