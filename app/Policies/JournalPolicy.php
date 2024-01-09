<?php

namespace App\Policies;

use App\Models\User;
use App\Models\Journal;
use Illuminate\Auth\Access\HandlesAuthorization;

class JournalPolicy
{

    use HandlesAuthorization;

    public function view(User $user, Journal $journal)
    {
        return $user->id === $journal->user_id;
    }

    /**
     * Create a new policy instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }
}
