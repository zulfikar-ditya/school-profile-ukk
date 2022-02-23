<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Message extends Model
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
                'name' => 'required|string|max:255',
                'email' => 'required|string|max:255|email',
                'message' => 'required|string',
                'status' => 'required'
            ];
        }
        return $arr;
    }

    /**
     * @var array $fields for list of fields the table
     */
    public array $fields = [
        'name',
        'email',
        'message',
        'status',
        'created_at',
        'updated_at'
    ];

    /**
     * @var array $dataTables for data to display in index
     */
    public array $dataTables = [
        'name',
        'email',
        'status'
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
        return Message::orderByDesc('created_at')->paginate(20);
    }

    /**
     * @param string $request the value will be search
     * @param string $col the col you looking for
     * 
     * @return \Illuminate\Database\Eloquent\Collection
     */
    public function search($request, $col)
    {
        return Message::where($col, 'like', '%' . $request . '%')->orderByDesc('created_at')->paginate(20);
    }
}
