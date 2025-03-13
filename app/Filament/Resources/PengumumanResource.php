<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use App\Models\Divisi;
use Filament\Forms\Form;
use App\Models\Pengumuman;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\FileUpload;
use Illuminate\Database\Eloquent\Builder;
use App\Filament\Resources\PengumumanResource\Pages;
use App\Filament\Resources\PengumumanResource\Pages\ListPengumuman;

class PengumumanResource extends Resource
{
    protected static ?string $model = Pengumuman::class;

    protected static ?string $navigationIcon = 'heroicon-o-megaphone';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('judul')
                    ->required(),
                Textarea::make('isi_pengumuman')
                    ->required()
                    ->columnSpanFull(),
                FileUpload::make('file')
                    ->directory('pengumuman-files')
                    ->visibility('public'),
                DatePicker::make('tanggal_pengumuman')
                    ->required(),
                TextInput::make('diposting_oleh')
                    ->required(),
                Select::make('kategori')
                    ->options([
                        'Akademik' => 'Akademik',
                        'Lomba' => 'Lomba',
                        'Kegiatan' => 'Kegiatan',
                        'Beasiswa' => 'Beasiswa',
                        'Magang' => 'Magang',
                    ])
                    ->required(),
                Select::make('divisi_id')
                    ->label('Divisi')
                    ->options(Divisi::all()->pluck('nama_divisi', 'id'))
                    ->required()
                    ->searchable(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('judul')
                    ->searchable(),
                Tables\Columns\TextColumn::make('tanggal_pengumuman')
                    ->date()
                    ->sortable(),
                Tables\Columns\TextColumn::make('kategori')
                    ->searchable(),
                Tables\Columns\TextColumn::make('divisi.nama_divisi')
                    ->searchable(),
                Tables\Columns\TextColumn::make('diposting_oleh')
                    ->searchable(),
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
            'index' => ListPengumuman::route('/'),
            'create' => Pages\CreatePengumuman::route('/create'),
            'edit' => Pages\EditPengumuman::route('/{record}/edit'),
        ];
    }

    public static function getModelLabel(): string
    {
        return 'Pengumuman';
    }

    public static function getPluralModelLabel(): string
    {
        return 'Pengumuman';
    }
}
