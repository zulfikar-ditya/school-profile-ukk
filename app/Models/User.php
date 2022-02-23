<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Hash;
use Laravel\Fortify\TwoFactorAuthenticatable;
use Laravel\Jetstream\HasProfilePhoto;
use Laravel\Sanctum\HasApiTokens;
use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable implements MustVerifyEmail
{
    use HasApiTokens;
    use HasFactory;
    use HasProfilePhoto;
    use Notifiable;
    use TwoFactorAuthenticatable;
    use HasRoles;
    use SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
        'two_factor_recovery_codes',
        'two_factor_secret',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * The accessors to append to the model's array form.
     *
     * @var array
     */
    protected $appends = [
        'profile_photo_url',
    ];

    /**
     * validattion rules for the table
     * 
     * @param string $method for method we use now
     * @param bool $hasUnique if the table has unique value or image or file validation
     * @param int $id for if $hasUnique true, this for the exception while updating data
     * 
     * @return array
     */
    public static function validateData(string $method = 'create', bool $hasUnique = false, int $id = null): array
    {
        if ($hasUnique) {
            $array = [
                'name' => 'required|string|max:255',
            ];
            if ($method == 'create') {
                $arr = array_merge($array, [
                    'email' => 'required|string|max:255|email|unique:users,email',
                    'password' => 'required|string|max:255|min:8',
                    'profile_photo_path' => 'nullable|images|mimes:jpg,jpeg,png|max:2048'
                ]);
            } else {
                $arr = array_merge($array, [
                    'email' => 'required|string|max:255|email|unique:users,email,' . $id,
                    'password' => 'nullable|string|max:255|min:8',
                    'old_password' => 'nullable|string|max:255',
                    'profile_photo_path' => 'nullable|images|mimes:jpg,jpeg,png|max:2048'
                ]);
            }
        } else {
            $arr = [];
        }
        return $arr;
    }

    /**
     * @var array $fields for list of fields the table
     */
    public array $fields = [
        'name',
        'email',
        // 'password',
        'profile_photo_path',
        'created_at',
        'updated_at'
    ];

    /**
     * @var array $dataTables for data to display in index
     */
    public array $dataTables = [
        'name',
        'email',
    ];

    /**
     * load data to table
     * @param $request for requested data
     */
    public function loadModel($request)
    {
        foreach ($this->fields as $key_field) {
            foreach ($request as $key_request => $value) {
                if ($key_field == $key_request) {
                    $this->setAttribute($key_field, $value);
                }
            }
        }
    }

    /**
     * get all data for display order by created at desc
     * @return  \Illuminate\Database\Eloquent\Collection
     */
    public function getData()
    {
        return User::orderByDesc('created_at')->paginate(20);
    }

    /**
     * @param string $request the value will be search
     * @param string $col the col you looking for
     * 
     * @return \Illuminate\Database\Eloquent\Collection
     */
    public function search($request, $col)
    {
        return User::where($col, 'like', '%' . $request . '%')->orderByDesc('created_at')->paginate(20);
    }

    /**
     * check password
     * 
     * @param string $password new password
     * @param string $old_password old password
     * 
     * @return bool
     */
    public function checkPassword(string $password, string $old_password): bool
    {
        return Hash::check($password, $old_password);
    }

    /**
     * load password
     * 
     * @param string $password 
     * 
     * @return string
     */
    public function loadPassword(string $password): string
    {
        return $this->setAttribute('password', Hash::make($password));
    }
}
