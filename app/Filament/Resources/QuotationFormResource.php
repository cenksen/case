<?php

namespace App\Filament\Resources;

use App\Filament\Resources\QuotationFormResource\Pages;
use App\Models\QuotationForm;
use Filament\Forms\Components\Card;
use Filament\Forms\Components\DateTimePicker;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class QuotationFormResource extends Resource
{
    protected static ?string $model = QuotationForm::class;

    protected static ?string $navigationGroup = 'Hizmet Yönetimi';

    protected static ?string $modelLabel = 'Teklif Form';

    protected static ?int $navigationSort = 2;

    protected static ?string $navigationIcon = 'heroicon-o-banknotes';

    protected static ?string $activeNavigationIcon = 'heroicon-s-banknotes';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([

                Card::make()->schema([
                    DateTimePicker::make('start_date')
                        ->label('Başlangıç Tarihi')
                        ->required(),
                    DateTimePicker::make('end_date')
                        ->label('Bitiş Tarihi')
                        ->required(),
                ])->columns(2),

                Card::make()->schema([
                    TextInput::make('customer_name')
                        ->label('Müşteri Adı')
                        ->required()
                        ->maxLength(255),
                    TextInput::make('customer_company')
                        ->label('Müşteri Firma')
                        ->required()
                        ->maxLength(255),
                    TextInput::make('customer_address')
                        ->label('Müşteri Adresi')
                        ->required()
                        ->maxLength(255),
                    TextInput::make('customer_mail')
                        ->label('Müşteri Mail Adresi')
                        ->required()
                        ->maxLength(255),
                    TextInput::make('customer_phone')
                        ->label('Müşteri Telefon Numarası')
                        ->tel()
                        ->required()
                        ->maxLength(255),
                ])->columns(5),

                Card::make()->schema([
                    Repeater::make('product')
                        ->label('Ürün')
                        ->schema([
                            TextInput::make('name')
                                ->label('Ürün Adı')
                                ->required(),
                            TextInput::make('quantity')
                                ->label('Ürün Adedi')
                                ->numeric()
                                ->required(),
                            TextInput::make('price')
                                ->label('Ürün Fiyatı')
                                ->required(),

                        ]),
                ]),

                Card::make()->schema([
                    TextInput::make('tax')
                        ->label('Vergi Oranı')
                        ->default('20')
                        ->required(),
                ])->columns(1),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([

                Tables\Columns\TextColumn::make('start_date')
                    ->label('Başlangıç Tarihi')
                    ->dateTime()
                    ->sortable(),
                Tables\Columns\TextColumn::make('end_date')
                    ->label('Bitiş Tarihi')
                    ->dateTime()
                    ->sortable(),
                Tables\Columns\TextColumn::make('customer_name')
                    ->label('Müşteri Adı')
                    ->searchable(),
                Tables\Columns\TextColumn::make('customer_company')
                    ->label('Müşteri Firma')
                    ->searchable(),

                Tables\Columns\TextColumn::make('customer_phone')
                    ->label('Müşteri Telefon Numarası')
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
                Tables\Actions\Action::make('pdf')
                    ->label('PDF')
                    ->color('success')
                    ->icon('heroicon-o-printer')
                    ->url(fn (QuotationForm $quotationForm) => route('pdf', $quotationForm))
                    ->openUrlInNewTab(),
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
            'index' => Pages\ListQuotationForms::route('/'),
            'create' => Pages\CreateQuotationForm::route('/create'),
            'edit' => Pages\EditQuotationForm::route('/{record}/edit'),
        ];
    }
}
