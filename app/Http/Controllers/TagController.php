<?php
namespace App\Http\Controllers;

use App\Models\Tag;
use Illuminate\Http\Request;

class TagController extends Controller
{
    public function __invoke(Tag $tag)
    {
        // Get jobs for this tag
        $jobs = $tag->jobs()->get();

        return view('results', [
            'jobs' => $jobs,
            'searchType' => 'tag',
            'query' => $tag->name,
        ]);
    }
}
