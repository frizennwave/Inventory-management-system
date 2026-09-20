<?php

namespace App\Filament\Resources\Units\Pages;

use App\Filament\Resources\Units\UnitResource;
use Filament\Resources\Pages\CreateRecord;
use Override;

class CreateUnit extends CreateRecord
{
    protected static string $resource = UnitResource::class;

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

        return 'Unit created successfully';
    }
}
