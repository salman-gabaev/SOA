<?php

namespace App\Http\Controllers;

use App\Http\Requests\FormDataRequest;
use App\Services\Client\JsonRpcClient;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Redirect;

class FormController extends Controller
{
    /**
     * @var JsonRpcClient
     */
    protected JsonRpcClient $client;

    /**
     * FormController constructor.
     *
     * @param JsonRpcClient $client
     */
    public function __construct(JsonRpcClient $client)
    {
        $this->client = $client;
    }

    /**
     * Handle the incoming request.
     *
     * @param FormDataRequest $request
     * @return View|RedirectResponse
     */
    public function __invoke(FormDataRequest $request)
    {
        $data = $this->client->send('store', $request->all());

        if (isset($data['error'])) {
            return Redirect::back()->withErrors($data['error']);
        }

        return Redirect::back()->with('success', 'Form sent successfully');
    }
}
