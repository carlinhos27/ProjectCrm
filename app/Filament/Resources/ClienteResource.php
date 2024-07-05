<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ClienteResource\Pages;
use App\Filament\Resources\ClienteResource\RelationManagers;
use App\Models\Cliente;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ClienteResource extends Resource
{
    protected static ?string $model = Cliente::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Select::make('zona_id')
                    ->relationship('zona', 'zona')
                    ->searchable()
                    ->preload()
                    ->required(),
                Forms\Components\Select::make('localidad_id')
                    ->relationship('localidad', 'localidad')
                    ->searchable()
                    ->preload()
                    ->required(),
                Forms\Components\TextInput::make('nombre')
                    ->maxLength(255),
                Forms\Components\TextInput::make('cuit')
                    ->maxLength(255),
                Forms\Components\TextInput::make('domicilio_fiscal')
                    ->maxLength(255),
                Forms\Components\TextInput::make('domicilio_real')
                    ->maxLength(255),
                Forms\Components\TextInput::make('codigo_postal')
                    ->maxLength(255),
                Forms\Components\TextInput::make('telefono')
                    ->tel()
                    ->maxLength(255),
                Forms\Components\TextInput::make('correo_electronico')
                    ->maxLength(255),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('zona.id')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('localidad.id')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('nombre')
                    ->searchable(),
                Tables\Columns\TextColumn::make('cuit')
                    ->searchable(),
                Tables\Columns\TextColumn::make('domicilio_fiscal')
                    ->searchable(),
                Tables\Columns\TextColumn::make('domicilio_real')
                    ->searchable(),
                Tables\Columns\TextColumn::make('codigo_postal')
                    ->searchable(),
                Tables\Columns\TextColumn::make('telefono')
                    ->searchable(),
                Tables\Columns\TextColumn::make('correo_electronico')
                    ->searchable(),
                Tables\Columns\TextColumn::make('deleted_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
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
            'index' => Pages\ListClientes::route('/'),
            'create' => Pages\CreateCliente::route('/create'),
            'edit' => Pages\EditCliente::route('/{record}/edit'),
        ];
    }
}
