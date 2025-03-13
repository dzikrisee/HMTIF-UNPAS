<?php

namespace App\Filament\Resources;

use App\Filament\Resources\AgendaResource\Pages;
use App\Models\Agenda;
use App\Models\Divisi;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Select;

class AgendaResource extends Resource
{
    protected static ?string $model = Agenda::class;

    protected static ?string $navigationIcon = 'heroicon-o-calendar';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Select::make('divisi_id')
                    ->label('Divisi')
                    ->options(Divisi::all()->pluck('nama_divisi', 'id'))
                    ->required()
                    ->searchable(),
                TextInput::make('judul_kegiatan')
                    ->required(),
                DatePicker::make('tanggal_kegiatan')
                    ->required(),
                Textarea::make('deskripsi_kegiatan')
                    ->required()
                    ->columnSpanFull(),
                FileUpload::make('gambar_kegiatan')
                    ->image()
                    ->disk('public') // Pastikan menggunakan disk public
                    ->directory('agenda-images')
                    ->visibility('public')
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('judul_kegiatan')
                    ->searchable(),
                Tables\Columns\TextColumn::make('divisi.nama_divisi')
                    ->searchable(),
                Tables\Columns\TextColumn::make('tanggal_kegiatan')
                    ->date()
                    ->sortable(),
                Tables\Columns\ImageColumn::make('gambar_kegiatan')
                    ->disk('public')
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
            'index' => Pages\ListAgendas::route('/'),
            'create' => Pages\CreateAgenda::route('/create'),
            'edit' => Pages\EditAgenda::route('/{record}/edit'),
        ];
    }

    public static function getModelLabel(): string
    {
        return 'Agenda';
    }

    public static function getPluralModelLabel(): string
    {
        return 'Agenda';
    }
}
