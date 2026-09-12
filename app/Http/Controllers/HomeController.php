<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Asset;
use App\Models\Course;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class HomeController extends Controller
{
    /**
     * Display the CG Bugs homepage.
     */
    public function index(Request $request)
    {
        $search = trim($request->input('q', ''));
        $categories = collect();
        $searchResults = null;
        $featuredAssets = collect();
        $courses = collect();

        // Fetch courses dynamically from database (cached to prevent cross-continent latency)
        try {
            $courses = Cache::remember('home_featured_courses', 3600, function () {
                return Course::where('is_featured_home', true)
                    ->orderBy('sort_order', 'asc')
                    ->get();
            });
        } catch (\Exception $e) {
            $courses = collect();
        }

        // Fallback default courses if DB is initializing or empty
        if ($courses->isEmpty()) {
            $courses = collect([
                (object)[
                    'name' => 'Professional Program',
                    'image_url' => 'images/course-professional-program.jpg',
                    'image' => asset('images/course-professional-program.jpg'),
                    'short_description' => '3-YEAR, FULL‑TIME PROGRAM – 2D, 3D, VFX. Master production pipelines in our 3‑year program.',
                ],
                (object)[
                    'name' => '2-Year Full-Time Program - 3D Animation',
                    'image_url' => 'images/course-3d-animation.jpg',
                    'image' => asset('images/course-3d-animation.jpg'),
                    'short_description' => '2‑YEAR, FULL‑TIME PROGRAM – 3D Animation. Full‑time 3D animation program covering diverse aspects of the 3D generalist skill set.',
                ],
                (object)[
                    'name' => '2-Year Full-Time Program - Game Art Design',
                    'image_url' => 'images/course-game-art-design.jpg',
                    'image' => asset('images/course-game-art-design.jpg'),
                    'short_description' => '2‑YEAR, FULL‑TIME PROGRAM – Game Art Design. From stunning visuals to seamless gameplay, we bring your creative vision to life.',
                ],
                (object)[
                    'name' => '2-Year Full-Time Program - VFX',
                    'image_url' => 'images/course-vfx.jpg',
                    'image' => asset('images/course-vfx.jpg'),
                    'short_description' => '2‑YEAR, FULL‑TIME PROGRAM – VFX. Transform narratives into unforgettable cinematic experiences with VFX.',
                ],
                (object)[
                    'name' => '1-Year Full-Time Program - Individual Courses',
                    'image_url' => 'images/course-individual-courses.jpg',
                    'image' => asset('images/course-individual-courses.jpg'),
                    'short_description' => '1‑YEAR, FULL‑TIME PROGRAM – Individual Courses. Unlock your creative potential with comprehensive media production skills.',
                ],
                (object)[
                    'name' => '10-Week On-Campus Program - Short Term Courses',
                    'image_url' => 'images/course-short-term-courses.jpg',
                    'image' => asset('images/course-short-term-courses.jpg'),
                    'short_description' => '10‑WEEK, ON‑CAMPUS PROGRAM – Short Term Courses. Standalone courses in film, game, and visual effects production.',
                ],
            ]);
        }

        // If user submitted a search query from header search
        if (!empty($search)) {
            try {
                $searchResults = Asset::with('category')
                    ->where('title', 'like', "%{$search}%")
                    ->orWhere('description', 'like', "%{$search}%")
                    ->orWhere('software', 'like', "%{$search}%")
                    ->orWhere('tags', 'like', "%{$search}%")
                    ->take(12)
                    ->get();
            } catch (\Exception $e) {
                $searchResults = null;
            }
        }

        return view('home', compact('categories', 'searchResults', 'search', 'featuredAssets', 'courses'));
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
