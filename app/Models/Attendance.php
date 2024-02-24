<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Sanctum\HasApiTokens;
class Attendance extends Model
{
	use HasFactory;
	use HasApiTokens;
	protected $fillable = ['employee_name', 'date', 'check_in', 'check_out'];
	public function user()
{
    return $this->belongsTo(User::class);
}

}
