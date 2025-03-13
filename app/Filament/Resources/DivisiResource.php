<?php

namespace App\Filament\Resources;

use App\Filament\Resources\DivisiResource\Pages;
use App\Models\Divisi;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\FileUpload;

class DivisiResource extends Resource
{
    protected static ?string $model = Divisi::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-group';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('nama_divisi')
                    ->required(),
                TextInput::make('koordinator')
                    ->required(),
                TextInput::make('periode')
                    ->required(),
                FileUpload::make('logo_divisi')
                    ->image()
                    ->directory('divisi-logos')
                    ->visibility('public'),
                Repeater::make('tugasFungsi')
                    ->relationship()
                    ->schema([
                        Forms\Components\Textarea::make('tugas_fungsi')
                            ->required()
                            ->columnSpanFull(),
                    ])
                    ->columns(1)
                    ->addActionLabel('Tambah Tugas & Fungsi')
                    ->defaultItems(0),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('nama_divisi')
                    ->searchable(),
                Tables\Columns\TextColumn::make('koordinator')
                    ->searchable(),
                Tables\Columns\TextColumn::make('periode')
                    ->searchable(),
                Tables\Columns\ImageColumn::make('logo_divisi'),
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
            'index' => Pages\ListDivisis::route('/'),
            'create' => Pages\CreateDivisi::route('/create'),
            'edit' => Pages\EditDivisi::route('/{record}/edit'),
        ];
    }

    public static function getModelLabel(): string
    {
        return 'Divisi';
    }

    public static function getPluralModelLabel(): string
    {
        return 'Divisi';
    }
}
