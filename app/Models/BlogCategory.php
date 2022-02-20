<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BlogCategory extends Model
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
            $arr = [];
            if ($method == 'create') {
                $arr = array_merge($arr, []);
            } else {
                $arr = array_merge($arr, []);
            }
        } else {
            $arr = [
                'name' => 'required|string|max:50',
            ];
        }
        return $arr;
    }

    /**
     * @var array $fields for list of fields the table
     */
    public array $fields = [
        'name',
        // 'image'
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
    public static function getData()
    {
        return BlogCategory::orderByDesc('created_at')->all();
    }
}
