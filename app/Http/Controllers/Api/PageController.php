<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Page;
use App\Models\Settings;

class PageController extends Controller
{

    public function pages($slug)
    {
        $query = Page::query();

        $data['page'] = $query->where('slug', $slug)->select('pages.id', 'pages.page_title')->get();

        if($slug != 'contact-us'){
            $data['sections'] = $query->join('sections', 'pages.id', '=', 'sections.page_id')
            ->select('sections.id', 'sections.title', 'sections.subtitle', 'sections.content', 'sections.img')->get();
        }
        else
        {
            $data['contact_info'] = Settings::select(['about', 'location', 'email', 'phone', 'fb', 'youtube', 'linkedin'])->first();
        }
        

        return response()->json([
            'data' => $data
        ]);
    }
}
