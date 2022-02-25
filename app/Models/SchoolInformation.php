<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SchoolInformation extends Model
{
    use HasFactory;

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
            $arr = [
                'name' => 'required|string|max:100',
                'title' => 'required|string|max:255',
                'vission' => 'required|string|max:255',
                'mission' => 'required|string',
                'instagram' => 'required|string|max:255|url',
                'twitter' => 'required|string|max:255|url',
                'facebook' => 'required|string|max:255|url',
                'fax' => 'required|string|max:20',
                'address' => 'required|string|max:255',
            ];
            if ($method == 'create') {
                $arr = array_merge($arr, [
                    'logo' => 'required|image|mimes:jpg,jpeg,png|max:2048'
                ]);
            } else {
                $arr = array_merge($arr, [
                    'logo' => 'nullable|image|mimes:jpg,jpeg,png|max:2048'
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
        'title',
        'vission',
        'mission',
        'logo',
        'instagram',
        'twitter',
        'facebook',
        'fax',
        'address',
        'created_at',
        'updated_at'
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
        return SchoolInformation::orderByDesc('created_at')->paginate(20);
    }

    /**
     * @param string $request the value will be search
     * @param string $col the col you looking for
     * 
     * @return \Illuminate\Database\Eloquent\Collection
     */
    public function search($request, $col)
    {
        return SchoolInformation::where($col, 'like', '%' . $request . '%')->orderByDesc('created_at')->paginate(20);
    }
}
