<?php

namespace App\Filament\Resources\Links\Tables;

use Filament\Tables\Table;
use Filament\Tables\Columns\TextColumn;

class LinksTable
{
    public static function configure(Table $table): Table
{
    return $table
        ->paginated(false)
        ->columns([
            TextColumn::make('id')->label('ID')->sortable(),
            TextColumn::make('original_url')
                ->label('Оригинальный URL')
                ->limit(50)
                ->searchable(),
            TextColumn::make('short_url')
                ->label('Короткий код')
                ->limit(10)
                ->searchable(),
            TextColumn::make('clicks_count')
                ->label('Количество кликов')
                ->sortable(),
            TextColumn::make('created_at')
                ->label('Дата создания')
        ])
        ->filters([])
        ->recordActions([])
        ->toolbarActions([]);
}
}
