<?php

namespace App\Filament\Resources\Links\RelationManagers;

use Filament\Resources\RelationManagers\RelationManager;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class ClicksRelationManager extends RelationManager
{
    protected static string $relationship = 'clicks';

    public function table(Table $table): Table
    {
        return $table
            ->recordTitleAttribute('ip')
            ->columns([
                TextColumn::make('id')
                    ->label('ID')
                    ->sortable(),

                TextColumn::make('ip')
                    ->label('IP-адрес')
                    ->searchable(),

                TextColumn::make('user_agent')
                    ->label('User-Agent')
                    ->limit(40)
                    ->tooltip(fn ($state) => $state),

                TextColumn::make('created_at')
                    ->label('Дата и время')
                    ->dateTime('d.m.Y H:i:s')
                    ->sortable(),
            ])
            ->filters([])
            ->headerActions([])
            ->recordActions([])
            ->toolbarActions([]);
    }
}
