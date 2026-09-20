<?php

namespace App\Filament\Resources\Suppliers\Pages;

use App\Filament\Resources\Suppliers\SupplierResource;
use Filament\Resources\Pages\CreateRecord;
use Override;

class CreateSupplier extends CreateRecord
{
    protected static string $resource = SupplierResource::class;

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

        return 'Supplier created successfully';
    }
}
