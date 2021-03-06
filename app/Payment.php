<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\BorrowerLoan;
use App\Borrower;
use App\Transaction;
class Payment extends Model
{
    protected $fillable = ['borrower_id','borrower_loan_id','payment_schedule','payment_number','amount','status'];
    public function borrowerLoan()
    {
    	return $this->belongsTo(BorrowerLoan::class,'borrower_loan_id');
    }

    public function borrower()
    {
    	return $this->belongsTo(Borrower::class);
    }

    public function transaction()
    {
    	return $this->belongsTo(Transaction::class);
    }
}
