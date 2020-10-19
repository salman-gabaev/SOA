<?php

namespace App\Widgets;

use App\Services\Client\JsonRpcClient;
use Arrilot\Widgets\AbstractWidget;
use Illuminate\Contracts\View\View;

class FormExample extends AbstractWidget
{
    /**
     * Treat this method as a controller action.
     * Return view() or other content to display.
     */
    public function run(): View
    {
        $this->setFieldsValues();

        return view('widgets.form_example', [
            'config' => $this->config,
        ]);
    }

    /**
     * Set default values
     */
    public function setFieldsValues()
    {
        $fields = ( new JsonRpcClient)->send('show', ['page_uid' => $this->config['page_uid']]);

        if (array_key_exists('result', $fields)) {
            $this->addConfigDefaults($fields['result']);
        }
    }
}
