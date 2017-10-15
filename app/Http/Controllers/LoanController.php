<?php

namespace App\Http\Controllers;

use App\Book;
use App\Cd;
use App\Dvd;
use App\Http\Requests\StoreLoanRequest;
use App\Loan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $loans = Loan::all();

        return view('loan.index', ['loans'  =>  $loans]);
    }

    public function userLoans()
    {
        $cds = Auth::user()->loans()->where('loanable_type', '=', Cd::class)->get();
        $dvds = Auth::user()->loans()->where('loanable_type', '=', Dvd::class)->get();
        $books = Auth::user()->loans()->where('loanable_type', '=', Book::class)->get();

        return view('loan.user_loans', ['cds' =>  $cds, 'dvds'  =>  $dvds, 'books'  =>  $books]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param StoreLoanRequest|Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreLoanRequest $request)
    {
        $user = Auth::user();
        $loanableId = $request->loanable_id;
        $loanableType = $request->loanable_type;

        $loan = new Loan();
        $loan->loanable_id = $loanableId;
        $loan->loanable_type = $loanableType;
        $loan->user()->associate($user);
        $loan->save();

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Loan  $loan
     * @return \Illuminate\Http\Response
     */
    public function show(Loan $loan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Loan  $loan
     * @return \Illuminate\Http\Response
     */
    public function edit(Loan $loan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Loan  $loan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Loan $loan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Loan  $loan
     * @return \Illuminate\Http\Response
     */
    public function destroy(Loan $loan)
    {
        //
    }
}
