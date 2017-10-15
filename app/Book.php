<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    /**
     * Get all of the book's loans.
     */
    public function loans()
    {
        return $this->morphMany(Loan::class, 'loanable');
    }
}
