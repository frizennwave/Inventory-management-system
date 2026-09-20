<?php

namespace App\Filament\Resources\Customers\Pages;

use App\Filament\Resources\Customers\CustomerResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;
use Override;

class EditCustomer extends EditRecord
{
    protected static string $resource = CustomerResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }

    #[Override]
    protected function getRedirectUrl(): ?string
    {
        parent::getRedirectUrl();

        return $this->getResource()::getUrl('index');
    }

    #[Override]
    protected function getSavedNotificationTitle(): ?string
    {
        parent::getSavedNotificationTitle();

        return 'Customer updated successfully';
    }
}
