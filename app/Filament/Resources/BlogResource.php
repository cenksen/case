<?php

namespace App\Filament\Resources;

use App\Enums\HeadLineTypeEnum;
use App\Filament\Resources\BlogResource\Pages;
use App\Filament\Resources\BlogResource\RelationManagers;
use App\Models\Blog;
use Filament\Forms;
use Filament\Forms\Components\Card;
use Filament\Forms\Components\DateTimePicker;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\SpatieMediaLibraryFileUpload;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Forms\Set;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\SpatieMediaLibraryImageColumn;
use Filament\Tables\Table;

use Illuminate\Support\Str;

class BlogResource extends Resource
{
    protected static ?string $model = Blog::class;

    protected static ?string $navigationGroup = 'Bilgi Bankası';

    protected static ?string $modelLabel = 'Blog';

    protected static ?int $navigationSort = 4;

    protected static ?string $navigationIcon = 'heroicon-o-pencil';

    protected static ?string $activeNavigationIcon = 'heroicon-s-pencil';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Card::make()
                    ->schema([
                        TextInput::make('title')
                            ->live(onBlur: true)
                            ->afterStateUpdated(fn(Set $set, ?string $state) => $set('slug', Str::slug($state)))
                            ->label('Başlık'),

                        Textarea::make('description')
                            ->hint('Max 140 Karakter')
                            ->label('Açıklama'),

                        RichEditor::make('body')
                            ->label('İçerik'),

                    ])->columnSpan(2),


                Card::make()
                    ->schema([

                        TextInput::make('slug')
                            ->hint('Otomatik Doldurulmaktadır!')
                            ->label('URL'),

                        Select::make('category_id')
                            ->label('Kategori')
                            ->relationship('category', 'title')
                            ->createOptionForm(
                                [Card::make()->schema([

                                    TextInput::make('title')
                                        ->label('Başlık')
                                        ->live(onBlur: true)
                                        ->afterStateUpdated(fn (Set $set, ?string $state) => $set('slug', Str::slug($state)))
                                        ->label('Başlık'),

                                    TextInput::make('slug')
                                        ->hint('Otomatik Doldurulmaktadır!')
                                        ->label('URL'),

                                ])->columns(2),]
                            ),


                        SpatieMediaLibraryFileUpload::make('blog')
                            ->label('Görsel')
                            ->responsiveImages()
                            ->imageEditor()
                            ->imageEditorAspectRatios([null, '16:9', '4:3', '1:1',]),


                    ])
                    ->columnSpan(1)
            ])->columns(3);

    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('category.title')
                    ->label('Kategori')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('title')
                    ->label('Başlık')
                    ->searchable(),
                Tables\Columns\TextColumn::make('slug')
                    ->label('URL')
                    ->searchable(),
                Tables\Columns\TextColumn::make('description')
                    ->label('Açıklama')
                    ->searchable(),
                SpatieMediaLibraryImageColumn::make('blog')
                    ->label('Görsel')
                    ->sortable()
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
            'index' => Pages\ListBlogs::route('/'),
            'create' => Pages\CreateBlog::route('/create'),
            'edit' => Pages\EditBlog::route('/{record}/edit'),
        ];
    }
}
