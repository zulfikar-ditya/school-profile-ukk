<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LearningProcess extends Model
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
                'text' => 'required|string|max:50',
                'sub_text' => 'required|string|max:255',
            ];
            if ($method == 'create') {
                $arr = array_merge($arr, [
                    'order' => 'required|numeric|unique:learning_processes,id'
                ]);
            } else {
                $arr = array_merge($arr, [
                    'order' => 'required|numeric|unique:learning_processes,id,' . $id
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
        'order',
        'text',
        'sub_text'
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
        return LearningProcess::orderByDesc('order')->paginate(20);
    }

    /**
     * @param string $request the value will be search
     * @param string $col the col you looking for
     * 
     * @return \Illuminate\Database\Eloquent\Collection
     */
    public function search($request, $col)
    {
        return LearningProcess::where($col, 'like', '%' . $request . '%')->orderBy('created_at', 'order')->paginate(20);
    }
}
