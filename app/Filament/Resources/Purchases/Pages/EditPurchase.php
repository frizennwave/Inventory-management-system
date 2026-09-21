<?php

namespace App\Filament\Resources\Purchases\Pages;

use App\Filament\Resources\Purchases\PurchaseResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;
use Override;

class EditPurchase extends EditRecord
{
    protected static string $resource = PurchaseResource::class;

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

        return 'Purchase updated successfully';
    }
}
