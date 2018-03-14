<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class load extends Model
{
    protected $table = 'loads';
    public $primaryKey = 'id' ;
    public $loadNo = 'load#' ;
    public $pickup = 'pickup' ;
    public $delivery = 'delivery' ;
    public $driver = 'driver' ;
    public $truckNo = 'truckNo' ;
    public $from = 'from' ;
    public $to = 'to' ;
    public $bol = 'bol' ;
    public $comments = 'comments' ;
    public $weight = 'weight' ;
    public $quantity = 'quantity' ;
    public $unit = 'unit' ;
    public $consignee = 'consignee' ;
    public $fee = 'fee' ;
    public $feeType = 'feeType' ;
    public $fsc = 'fsc' ;
    public $fscType = 'fscType' ;
    public $additional = 'additional' ;
    public $detention = 'detention' ;
    public $lumper = 'lumper' ;
    public $topoff = 'topoff' ;
    public $tarp = 'tarp' ;
    public $invoiceAdvance = 'invoiceAdvance' ;
    public $created_at = 'created_at' ;
    public $updated_at = 'updated_at' ;
}
