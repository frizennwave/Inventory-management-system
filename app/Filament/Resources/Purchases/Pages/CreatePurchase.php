<?php

namespace App\Filament\Resources\Purchases\Pages;

use App\Filament\Resources\Purchases\PurchaseResource;
use Filament\Resources\Pages\CreateRecord;
use Override;

class CreatePurchase extends CreateRecord
{
    protected static string $resource = PurchaseResource::class;

    #[Override]
    protected function getRedirectUrl(): string
    {
        parent::getRedirectUrl();

        return $this->getResource()::getUrl('index');
    }

    #[Override]
    protected function getCreatedNotificationTitle(): ?string
    {
        parent::getCreatedNotificationTitle();

        return 'Purchase created successfully';
    }
}
