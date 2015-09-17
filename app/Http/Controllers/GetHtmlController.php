<?php
/**
 * Created by PhpStorm.
 * User: developer
 * Date: 17/09/2015
 * Time: 14:17
 */

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GetHtmlController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function getHtml(Request $request)
    {
        $url  = $request->get('url');

        // Return error message if any happens
        try {
            $html = file_get_contents($url);
        }
        catch (\Exception $ex) {
            return [
                'message' => $ex->getMessage(),
            ];
        }

        // Return html code got from the requested URL
        return [
            'data' => $html,
        ];
    }
}
