<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cd extends Model
{
    /**
     * Get all of the cd's loans.
     */
    public function loans()
    {
        return $this->morphMany(Loan::class, 'loanable');
    }
}
