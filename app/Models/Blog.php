<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;


class Blog extends Model
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
                'title' => 'required|string|max:255',
                'content' => 'required|string',
                'blog_category_id' => 'required|exists,blog_categories,id',
            ];
            if ($method == 'create') {
                $arr = array_merge($arr, [
                    'image' => 'required|image|mimes:jpg,jpeg,png|max:2048'
                ]);
            } else {
                $arr = array_merge($arr, [
                    'image' => 'nullable|image|mimes:jpg,jpeg,png|max:2048'
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
        'title',
        'content',
        'blog_category_id',
        'image',
        'slug',
        'created_at',
        'updated_at'
    ];

    /**
     * @var array $dataTables for data to display in index
     */
    public array $dataTables = [
        'title',
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
        $this->setAttribute('slug', Str::slug($request['title']));
    }

    /**
     * get all data for display order by created at desc
     * @return  \Illuminate\Database\Eloquent\Collection
     */
    public function getData()
    {
        return Blog::orderByDesc('created_at')->paginate(20);
    }

    /**
     * @param string $request the value will be search
     * @param string $col the col you looking for
     * 
     * @return \Illuminate\Database\Eloquent\Collection
     */
    public function search($request, $col)
    {
        return Blog::where($col, 'like', '%' . $request . '%')->orderByDesc('created_at')->paginate(20);
    }

    public function blog_category()
    {
        return $this->belongsTo(BlogCategory::class);
    }
}
