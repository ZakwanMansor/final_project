<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Loan;
use App\Models\Member;
use Carbon\Carbon;
use Illuminate\Http\Request;

class LoanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('loan.index', [
            'loans' => Loan::whereNull('returnDate')->paginate(25), // dia akan check return date yang Null
            'records' => Loan::whereNotNull('returnDate')->orderBy('id', 'DESC')->paginate(25)
        ]);
    }

    public function search(Request $request)
    {
        $result = Loan::whereNull('returnDate')->whereAny(['book_id', 'member_icNum'], '=', "$request->searchkey")->paginate(25);
        $loans = Loan::whereNull('returnDate')->paginate(25);
        $records = Loan::whereNotNull('returnDate')->orderBy('id', 'DESC')->paginate(25); //orderBy = untuk susun the latest one 

        return view('loan.index', [
            'loans' => $result,
            'records' => $records
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('loan.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //bila add loan , kita akan bagi book id and member id (member id kat form tu adalah request member id)
        //bila dah bagi member id dan kita dah create variable ni kita dah boleh assest semua data of that particular member (sebab tu kita dapat ic number dia)
        $member = Member::find($request->member_id);
        $book = Book::find($request->book_id);

        if ($book->available == "Yes") {
            //create new loan
            Loan::create([
                'book_id' => $request->book_id,
                'member_id' => $member->id,
                'member_icNum' => $member->icNum,
                'borrowingDate' => Carbon::parse($request->borrowingDate)->format('d/m/Y')
            ]);

            // update book availability
            $book->available = "No";
            $book->save();
        } else {
            //throw error
            return back()->withIput($request->input());
        }



        return redirect(route('loan.index'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Loan $loan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Loan $loan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Loan $loan)
    {
        // update loan return date
        $loan->returnDate = Carbon::parse($request->returnDate)->format('d/m/Y');
        $loan->save();

        // update book availability
        $book = $loan->book;
        $book->available = "Yes";
        $book->save();

        return back();
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Loan $loan)
    {
        //
    }
}
