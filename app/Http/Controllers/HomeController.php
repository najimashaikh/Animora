<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Asset;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Display the CG Bugs homepage.
     */
    public function index(Request $request)
    {
        $search = trim($request->input('q', ''));
        
        $categories = Category::withCount('assets')
            ->orderBy('sort_order', 'asc')
            ->get();

        $searchResults = null;
        if (!empty($search)) {
            $searchResults = Asset::with('category')
                ->where('title', 'like', "%{$search}%")
                ->orWhere('description', 'like', "%{$search}%")
                ->orWhere('software', 'like', "%{$search}%")
                ->orWhere('tags', 'like', "%{$search}%")
                ->take(12)
                ->get();
        }

        $featuredAssets = Asset::with('category')
            ->where('is_featured', true)
            ->take(6)
            ->get();

        return view('home', compact('categories', 'searchResults', 'search', 'featuredAssets'));
    }

    /**
     * Browse all assets or category-specific assets.
     */
    public function browse(Request $request, $categorySlug = null)
    {
        $search = trim($request->input('q', ''));
        $software = $request->input('software');
        
        $categories = Category::orderBy('sort_order')->get();
        $activeCategory = null;

        $query = Asset::with('category');

        if ($categorySlug) {
            $activeCategory = Category::where('slug', $categorySlug)->firstOrFail();
            $query->where('category_id', $activeCategory->id);
        }

        if (!empty($search)) {
            $query->where(function($q) use ($search) {
                $q->where('title', 'like', "%{$search}%")
                  ->orWhere('description', 'like', "%{$search}%")
                  ->orWhere('software', 'like', "%{$search}%");
            });
        }

        if (!empty($software)) {
            $query->where('software', 'like', "%{$software}%");
        }

        $assets = $query->latest()->paginate(12);

        return view('browse', compact('categories', 'activeCategory', 'assets', 'search', 'software'));
    }

    /**
     * Show single asset details.
     */
    public function showAsset($slug)
    {
        $asset = Asset::with('category')->where('slug', $slug)->firstOrFail();
        $relatedAssets = Asset::where('category_id', $asset->category_id)
            ->where('id', '!=', $asset->id)
            ->take(3)
            ->get();

        return view('asset-detail', compact('asset', 'relatedAssets'));
    }

    /**
     * Pipeline tools overview.
     */
    public function pipeline()
    {
        $pipelineCategory = Category::where('slug', 'pipeline-tools')->first();
        $tools = $pipelineCategory ? $pipelineCategory->assets : collect();

        return view('pipeline', compact('tools'));
    }
}
