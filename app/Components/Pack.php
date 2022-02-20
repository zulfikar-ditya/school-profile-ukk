<?php

namespace App\Components;

trait Pack
{
    /**
     * @param string $subFolder for for second folder and for route firs name
     * @param string #folder for the first folder and route first name
     * 
     * @return array
     */
    public function init(string $subFolder, string $folder = 'admin'): array
    {
        return array_merge(
            $this->filesCRUD($subFolder, $folder),
            $this->routesCRUD($subFolder, $folder)
        );
    }

    /**
     * get and set file crud
     * 
     * @param string $subFolder for the sub folder
     * @param string $folder for the first folder name
     * 
     * @return array
     */
    public function filesCRUD(string $subFolder, string $folder = 'admin'): array
    {
        return [
            'files' => [
                'index' => $folder . '.' . $subFolder . '.index',
                'show' => $folder . '.' . $subFolder . '.show',
                'create' => $folder . '.' . $subFolder . '.create',
                'edit' => $folder . '.' . $subFolder . '.edit',
                'fields' => $folder . '.' . $subFolder . '.__fields'
            ],
        ];
    }

    /**
     * get or set route crud
     * 
     * @param string $route for route or model name [model-name]
     * @param string $name for route name
     * 
     * @return array
     */
    public function routesCRUD(string $route, string $name = 'admin'): array
    {
        return [
            'routes' => [
                'index' => $name . '.' . $route . '.index',
                'show' => $name . '.' . $route . '.show',
                'create' => $name . '.' . $route . '.create',
                'store' => $name . '.' . $route . '.store',
                'edit' => $name . '.' . $route . '.edit',
                'update' => $name . '.' . $route . '.update',
                'destroy' => $name . '.' . $route . '.destroy',
            ],
        ];
    }

    /**
     * get or set message redirect status crud
     * 
     * @param bool $success for status reponse
     * @param string $action for action type [create, update, delete, other]
     * @param string $message for message to display
     * @param string $exceptionMessage for exception Message
     * 
     * @return array 
     */
    public function messageRedirectCRUD(bool $success = true, string $action = 'create', string $exceptionMessage = null, string $message = null): array
    {
        if ($success) {
            if ($message == null) {
                if ($action == 'create') {
                    $message = 'Success insert new data.';
                } else if ($action == 'update') {
                    $message = 'Success edit data.';
                } else if ($action == 'delete') {
                    $message = 'Success delete data.';
                } else {
                    $message = 'Success ' . $message;
                }
            } else {
                $message = 'Success ' . $message;
            }
        } else {
            if ($message == null) {
                if ($action == 'create') {
                    $message = 'Failed insert new data.';
                } else if ($action == 'update') {
                    $message = 'Failed edit data.';
                } else if ($action == 'delete') {
                    $message = 'Failed delete data.';
                } else {
                    $message = 'Failed ' . $message;
                }
            } else {
                $message = 'Failed ' . $message;
            }
            if ($exceptionMessage != null) {
                $message = $message . ' ' . $exceptionMessage;
            }
        }
        return [
            'success' => $success,
            'message' => $message
        ];
    }
}
