<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PageResource\Pages;
use App\Models\Page;
use Filament\Forms\Components\Card;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\SpatieMediaLibraryFileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Form;
use Filament\Forms\Set;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Support\Str;

class PageResource extends Resource
{
    protected static ?string $model = Page::class;

    protected static ?string $navigationGroup = 'Sayfa Yönetimi';

    protected static ?string $modelLabel = 'Sayfa';

    protected static ?int $navigationSort = 1;

    protected static ?string $navigationIcon = 'heroicon-o-book-open';

    protected static ?string $activeNavigationIcon = 'heroicon-s-book-open';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Card::make()->schema([
                    TextInput::make('title')
                        ->live(onBlur: true)
                        ->afterStateUpdated(fn (Set $set, ?string $state) => $set('slug', Str::slug($state)))
                        ->label('Başlık'),
                    TextInput::make('slug')
                        ->hint('Otomatik Doldurulmaktadır!')
                        ->label('URL'),
                ])->columns(2),
                Card::make()->schema([
                    TextInput::make('description')
                        ->label('Açıklama')
                        ->maxLength(140)
                        ->hint('Maximum 140 Karaterle Sınırlıdır!')
                        ->required(),
                ]),
                Card::make()->schema([
                    RichEditor::make('body')
                        ->label('İçerik')
                        ->required(),
                ]),

                Card::make()->schema([
                    SpatieMediaLibraryFileUpload::make('thumbnail')
                        ->collection('page')
                        ->imageEditor()
                        ->imageEditorAspectRatios([null, '16:9', '4:3', '1:1'])
                        ->label('Resim')
                        ->columnSpanFull(),
                ])->columns(1),

                Card::make()->schema([
                    Toggle::make('is_active')
                        ->label('Sayfa Yayınlansın mı ?')
                        ->required(),
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
                Tables\Columns\TextColumn::make('slug')
                    ->label('URL')
                    ->searchable(),
                Tables\Columns\TextColumn::make('description')
                    ->label('Açıklama')
                    ->searchable(),
                Tables\Columns\IconColumn::make('is_active')
                    ->label('Yayınlanma Durumu ?')
                    ->boolean(),

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
            'index' => Pages\ListPages::route('/'),
            'create' => Pages\CreatePage::route('/create'),
            'edit' => Pages\EditPage::route('/{record}/edit'),
        ];
    }
}
