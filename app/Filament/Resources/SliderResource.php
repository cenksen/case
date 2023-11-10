<?php

namespace App\Filament\Resources;

use App\Filament\Resources\SliderResource\Pages;
use App\Models\Slider;
use Filament\Forms\Components\Card;
use Filament\Forms\Components\SpatieMediaLibraryFileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class SliderResource extends Resource
{
    protected static ?string $model = Slider::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Card::make()->schema([
                    TextInput::make('title')
                        ->label('Başlık')
                        ->required()
                        ->maxLength(255),
                ])->columns(1),

                Card::make()->schema([
                    TextInput::make('description')
                        ->label('Açıklama')
                        ->required()
                        ->maxLength(255),
                ])->columns(1),

                Card::make()->schema([
                    TextInput::make('primary_button_text')
                        ->label('Birincil Buton Metni')
                        ->required()
                        ->maxLength(255),

                    TextInput::make('primary_button_url')
                        ->label('Birincil Buton URL')
                        ->required()
                        ->maxLength(255),
                ])->columns(2),

                Card::make()->schema([
                    SpatieMediaLibraryFileUpload::make('thumbnail')
                        ->collection('slider')
                        ->imageEditor()
                        ->imageEditorAspectRatios([null, '16:9', '4:3', '1:1'])
                        ->label('Resim')
                        ->columnSpanFull(),
                ])->columns(1),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('title')
                    ->label('Başlık')
                    ->searchable(),
                Tables\Columns\TextColumn::make('description')
                    ->label('Açıklama')
                    ->searchable(),
                Tables\Columns\SpatieMediaLibraryImageColumn::make('thumbnail')
                    ->label('Resim')
                    ->collection('slider')
                    ->searchable(),
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
            'index' => Pages\ListSliders::route('/'),
            'create' => Pages\CreateSlider::route('/create'),
            'edit' => Pages\EditSlider::route('/{record}/edit'),
        ];
    }
}
