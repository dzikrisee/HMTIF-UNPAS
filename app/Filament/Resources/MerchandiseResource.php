<?php

namespace App\Filament\Resources;

use App\Filament\Resources\MerchandiseResource\Pages;
use App\Models\Merchandise;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Select;

class MerchandiseResource extends Resource
{
    protected static ?string $model = Merchandise::class;

    protected static ?string $navigationIcon = 'heroicon-o-shopping-bag';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('nama_produk')
                    ->required(),
                TextInput::make('harga')
                    ->numeric()
                    ->required()
                    ->prefix('Rp'),
                Select::make('size')
                    ->options([
                        'S' => 'S',
                        'M' => 'M',
                        'L' => 'L',
                        'XL' => 'XL',
                        'XXL' => 'XXL',
                        'All Size' => 'All Size',
                    ]),
                TextInput::make('stok')
                    ->numeric()
                    ->required(),
                Textarea::make('deskripsi_produk')
                    ->required()
                    ->columnSpanFull(),
                FileUpload::make('gambar_produk')
                    ->image()
                    ->directory('merchandise-images')
                    ->visibility('public'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('nama_produk')
                    ->searchable(),
                Tables\Columns\TextColumn::make('harga')
                    ->money('IDR')
                    ->sortable(),
                Tables\Columns\TextColumn::make('size')
                    ->searchable(),
                Tables\Columns\TextColumn::make('stok')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\ImageColumn::make('gambar_produk'),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListMerchandises::route('/'),
            'create' => Pages\CreateMerchandise::route('/create'),
            'edit' => Pages\EditMerchandise::route('/{record}/edit'),
        ];
    }

    public static function getModelLabel(): string
    {
        return 'Merchandise';
    }

    public static function getPluralModelLabel(): string
    {
        return 'Merchandise';
    }
}
