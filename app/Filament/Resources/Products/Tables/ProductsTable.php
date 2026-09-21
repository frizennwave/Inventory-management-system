<?php

namespace App\Filament\Resources\Products\Tables;

use App\Models\Category;
use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteAction;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\ToggleColumn;
use Filament\Tables\Filters\SelectFilter;
use Filament\Tables\Table;

class ProductsTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                ImageColumn::make('image')
                    ->label('Image')
                    ->circular()
                    ->defaultImageUrl(url('/images/no-image.png')),
                TextColumn::make('name')
                    ->label('Product Name')
                    ->searchable()
                    ->sortable(),
                TextColumn::make('sku')
                    ->label('SKU')
                    ->badge()
                    ->color('gray')
                    ->searchable(),
                TextColumn::make('category.name')
                    ->label('Category')
                    ->searchable()
                    ->sortable(),
                TextColumn::make('unit.short_code')
                    ->label('Unit')
                    ->badge()
                    ->color('info'),
                TextColumn::make('cost_price')
                    ->label('Cost Price')
                    ->money('IDR')
                    ->sortable(),
                TextColumn::make('selling_price')
                    ->label('Selling Price')
                    ->money('IDR')
                    ->sortable(),
                ToggleColumn::make('status')
                    ->label('Status')
                    ->onColor('success')
                    ->offColor('danger'),
                TextColumn::make('created_at')
                    ->label('Created At')
                    ->dateTime('d M Y')
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                SelectFilter::make('category_id')
                    ->label('Category')
                    ->options(Category::pluck('name', 'id'))
                    ->placeholder('All Categories'),
                SelectFilter::make('status')
                    ->label('Status')
                    ->options([
                        '1' => 'Active',
                        '0' => 'Inactive',
                    ]),
            ])
            ->recordActions([
                EditAction::make()->color('info')->button(),
                DeleteAction::make()->color('danger')->button(),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ])
            ->defaultSort('created_at', 'desc');
    }
}
