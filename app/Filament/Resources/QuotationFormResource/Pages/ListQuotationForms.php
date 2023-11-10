<?php

namespace App\Filament\Resources\QuotationFormResource\Pages;

use App\Filament\Resources\QuotationFormResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListQuotationForms extends ListRecords
{
    protected static string $resource = QuotationFormResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
