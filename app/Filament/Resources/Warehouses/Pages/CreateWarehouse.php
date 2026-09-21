<?php

namespace App\Filament\Resources\Warehouses\Pages;

use App\Filament\Resources\Warehouses\WarehouseResource;
use Filament\Resources\Pages\CreateRecord;
use Override;

class CreateWarehouse extends CreateRecord
{
    protected static string $resource = WarehouseResource::class;

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

        return 'Warehouse created successfully';
    }
}
