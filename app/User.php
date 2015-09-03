<?php

namespace Gameday;

use Gameday\Role;
use Gameday\School;
use Gameday\Ticket;
use Gameday\Dispute;
use Gameday\Conference;
use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Foundation\Auth\Access\Authorizable;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\Access\Authorizable as AuthorizableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;

class User extends Model implements AuthenticatableContract,
                                    AuthorizableContract,
                                    CanResetPasswordContract
{
    use SoftDeletes, Authenticatable, Authorizable, CanResetPassword;

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'users';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['role_id', 'school_id', 'name', 'email', 'phone', 'paypal', 'password', 'validated'];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = ['password', 'remember_token'];

    public function verified()
    {
        return $this->verified;
    }

    public function is($role)
    {
        return ($this->role_id == Role::where('name', $role)->pluck('id')) ? 1 : 0;
    }

    public function role()
    {
        return Role::findOrFail($this->role_id);
    }

    public function school()
    {
        return $this->belongsTo('Gameday\School');
    }

    public function selling()
    {
        return $this->hasMany('Gameday\Ticket', 'seller_id')->where('sold', false);
    }

    public function sold()
    {
        return $this->hasMany('Gameday\Ticket', 'seller_id')->where('sold', true);
    }

    public function buying()
    {
        return $this->hasMany('Gameday\Ticket', 'buyer_id')->where('sold', false);
    }

    public function bought()
    {
        return $this->hasMany('Gameday\Ticket', 'buyer_id')->where('sold', true);
    }

    public function disputes()
    {
        return $this->hasMany('Gameday\Dispute');
    }

    public function conference()
    {
        return Conference::select('id', 'name')->findOrFail($this->school()->conference_id);
    }

}
