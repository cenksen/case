<?php

namespace App\Filament\Resources\QuotationFormResource\Pages;

use App\Filament\Resources\QuotationFormResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditQuotationForm extends EditRecord
{
    protected static string $resource = QuotationFormResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
