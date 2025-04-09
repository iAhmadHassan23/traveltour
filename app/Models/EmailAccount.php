<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmailAccount extends Model
{
    use HasFactory;
    use HasFactory;
    protected $guarded = [];

    public function scopeActive($query){
        return $query->where('status', 1);
    }

    /**
     * The users that belong to the email accounts.
     */

    //This method is pending because table is not created
    public function users()
    {
        return $this->belongsToMany(User::class, 'email_accounts_user','email_account_id','user_id');
    }
}
