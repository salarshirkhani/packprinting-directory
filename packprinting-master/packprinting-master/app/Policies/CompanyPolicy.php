<?php

namespace App\Policies;

use App\Company;
use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class CompanyPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view the company.
     *
     * @param User $user
     * @param Company $company
     * @return mixed
     */
    public function view(User $user, Company $company)
    {
        return $company->creator->is($user);
    }

    /**
     * Determine whether the user can create companies.
     *
     * @param User $user
     * @return mixed
     */
    public function create(User $user)
    {
        return !$user->company()->exists();
    }

    /**
     * Determine whether the user can update the company.
     *
     * @param User $user
     * @param Company $company
     * @return mixed
     */
    public function update(User $user, Company $company)
    {
        return $company->creator->is($user);
    }
}
