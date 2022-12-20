<?php

namespace App\Providers;

use App\Models\Team;
use App\Models\Animal;
use App\Models\Annonce;
use App\Models\Proposal;
use App\Policies\TeamPolicy;
use App\Policies\AnimalPolicy;
use App\Policies\AnnoncePolicy;
use App\Policies\ProposalPolicy;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        Team::class => TeamPolicy::class,
        Annonce::class => AnnoncePolicy::class,
        Proposal::class => ProposalPolicy::class,
        Animal::class => AnimalPolicy::class,
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        //
    }
}
