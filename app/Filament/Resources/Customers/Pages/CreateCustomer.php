<?php

namespace App\Filament\Resources\Customers\Pages;

use App\Filament\Resources\Customers\CustomerResource;
use Filament\Resources\Pages\CreateRecord;
use Override;

class CreateCustomer extends CreateRecord
{
    protected static string $resource = CustomerResource::class;

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

        return 'Customer created successfully';
    }
}
