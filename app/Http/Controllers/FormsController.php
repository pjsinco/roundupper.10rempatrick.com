<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class FormsController extends Controller
{
    
    public function show(Request $request)
    {
        if (! $request->ajax()) {
            return app()->abort(404);
        }

        $type = $request->input('type');

        switch ($type) {
            case 'top-story':
                return view()->make('forms.article', [
                    'action' => 'ItemsController@topStory',
                    'ruleForm' => false,
                ]);
                break;
            case 'feature':
                return view()->make('forms.article', [
                    'action' => 'ItemsController@feature',
                    'ruleForm' => true,
                ]);
                break;
            case 'brief':
                return view()->make('forms.article', [
                    'action' => 'ItemsController@brief',
                    'ruleForm' => true,
                ]);
                break;
            case 'quote':
                return view()->make('forms.quote', [
                    'action' => 'ItemsController@quote'
                ]);
                break;
            case 'date':
                return view()->make('forms.date', [
                    'action' => 'ItemsController@date'
                ]);
                break;
            case 'section-title':
                return view()->make('forms.section-title', [
                    'action' => 'ItemsController@sectionTitle'
                ]);
                break;
        }

    }

}
