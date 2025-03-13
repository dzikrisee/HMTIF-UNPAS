<?php

namespace App\Filament\Resources;

use App\Models\BPH;
use Filament\Forms;
use Filament\Tables;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\FileUpload;
use Illuminate\Database\Eloquent\Builder;
use App\Filament\Resources\BPHResource\Pages;

class BPHResource extends Resource
{
    protected static ?string $model = BPH::class;

    protected static ?string $navigationIcon = 'heroicon-o-user-group';

    protected static ?string $navigationLabel = 'Badan Pengurus Harian';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('nama')
                    ->required(),
                TextInput::make('npm')
                    ->required(),
                TextInput::make('jabatan')
                    ->required(),
                TextInput::make('periode')
                    ->required(),
                Textarea::make('alamat')
                    ->required(),
                FileUpload::make('foto_profil')
                    ->image()
                    ->directory('bph-photos')
                    ->visibility('public'),
                Repeater::make('tugasFungsi')
                    ->relationship()
                    ->schema([
                        Textarea::make('tugas_fungsi')
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
                Tables\Columns\TextColumn::make('nama')
                    ->searchable(),
                Tables\Columns\TextColumn::make('npm')
                    ->searchable(),
                Tables\Columns\TextColumn::make('jabatan')
                    ->searchable(),
                Tables\Columns\TextColumn::make('periode')
                    ->searchable(),
                Tables\Columns\ImageColumn::make('foto_profil'),
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
            'index' => Pages\ListBPHS::route('/'),
            'create' => Pages\CreateBPH::route('/create'),
            'edit' => Pages\EditBPH::route('/{record}/edit'),
        ];
    }

    public static function getModelLabel(): string
    {
        return 'Badan Pengurus Harian';
    }

    public static function getPluralModelLabel(): string
    {
        return 'Badan Pengurus Harian';
    }
}
