<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Loan extends Model
{
    const NB_LOAN_PER_USER = 3;
    /**
     * Get all of the owning loanable models.
     */
    public function loanable()
    {
        return $this->morphTo();
    }

    /**
     * Get the user that owns the loan.
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Scope a query to only include active users.
     *
     * @param \Illuminate\Database\Eloquent\Builder $query
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeCds($query)
    {
        return $query->where('loanable_type', Cd::class);
    }
}
