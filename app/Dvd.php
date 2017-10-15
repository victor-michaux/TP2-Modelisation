<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dvd extends Model
{
    /**
     * Get all of the dvd's loans.
     */
    public function loans()
    {
        return $this->morphMany(Loan::class, 'loanable');
    }
}
