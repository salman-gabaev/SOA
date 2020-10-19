<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\DataResource;
use App\Models\Data;
use Illuminate\Http\Resources\Json\JsonResource;

class DataController extends Controller
{
    /**
     * Store a newly created resource in storage.
     *
     * @param array $params
     * @return JsonResource
     */
    public function store(array $params): JsonResource
    {
        $data = Data::create([
            'page_uid' => $params['page_uid'],
            'fields' => $params['fields'],
        ]);

        return new DataResource($data);
    }

    /**
     * Display the specified resource.
     *
     * @param array $params
     * @return JsonResource
     */
    public function show(array $params): JsonResource
    {
        $data = Data::where('page_uid', $params['page_uid'])->firstOrFail();

        return new DataResource($data);
    }
}
