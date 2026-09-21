<?php

namespace App\Filament\Resources\Warehouses\Pages;

use App\Filament\Resources\Warehouses\WarehouseResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;
use Override;

class EditWarehouse extends EditRecord
{
    protected static string $resource = WarehouseResource::class;

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

        return 'Warehouse updated successfully';
    }
}
