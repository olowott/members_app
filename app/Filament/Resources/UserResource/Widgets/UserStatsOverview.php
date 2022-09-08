<?php

namespace App\Filament\Resources\UserResource\Widgets;

use App\Models\User;
use App\Models\Country;
use Filament\Widgets\StatsOverviewWidget\Card;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;

class UserStatsOverview extends BaseWidget
{
    protected function getCards(): array
    {
        $nigeria = Country::where('code', 'NG')->withCount('users')->first();
        $uk = Country::where('code', 'GB')->withCount('users')->first();
        return [
            //
            Card::make('Total Members', User::all()->count())
                ->description('32k increase')
                ->descriptionIcon('heroicon-s-user-group'),
            Card::make('Nigeria Members', $nigeria ? $nigeria->users_count : 0),
            Card::make('UK Members', $uk ?  $uk->users_count : 0),



        ];
    }
}
