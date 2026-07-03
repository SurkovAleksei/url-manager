<?php

namespace App\Filament\Resources\Links\Schemas;

use Filament\Schemas\Schema;
use Filament\Forms\Components\TextInput;
use Illuminate\Support\Str;

class LinkForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([

                TextInput::make('original_url')
                    ->label('Оригинальный URL')
                    ->required()
                    ->url()
                    ->placeholder('https://example.com/page'),

                TextInput::make('short_url')
                    ->label('Короткий код')
                    ->required()
                    ->maxLength(6)
                    ->minLength(6)
                    ->unique('links', 'short_url')
                    ->default(Str::random(6))
                    ->helperText('6 символов (буквы и цифры)')
                    ->regex('/^[a-zA-Z0-9]+$/'),
            ]);
    }
}
