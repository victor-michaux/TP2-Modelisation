@if(Auth::check())
    <td>
        <form method="POST" action="{{ route('loan.store') }}">
            {{ csrf_field() }}
            <input type="hidden" name="loanable_id" value="{{ $loanable->id }}">
            <input type="hidden" name="loanable_type" value="{{ get_class($loanable) }}">
            <button type="submit" class="btn btn-primary" {{ Auth::user()->loans->count() >= \App\Loan::NB_LOAN_PER_USER ? 'disabled="disabled"' : '' }}>
                Emprunter
            </button>
        </form>
    </td>
@endif