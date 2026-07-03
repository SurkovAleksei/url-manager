<?php

namespace App\Filament\Resources\Links\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Tables\Table;
use Filament\Tables\Columns\TextColumn;

class LinksTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('original_url')
                    ->label('Оригинальный URL')
                    ->limit(50)
                    ->searchable(),
                TextColumn::make('short_url')
                    ->label('Короткая ссылка')
                    ->url(fn ($record) => url('/') . '/' . $record->short_url)
                    ->openUrlInNewTab(),
                TextColumn::make('clicks_count')
                    ->label('Количество кликов')
                    ->sortable(),
                TextColumn::make('created_at')
                    ->label('Дата создания')
                    ->dateTime('d.m.Y H:i:s')
                    ->sortable(),
            ])
            ->filters([])
            ->recordActions([])
            ->toolbarActions([]);
    }
}
