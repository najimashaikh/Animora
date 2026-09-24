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

    /**
     * About Animora - College Project & Mentors.
     */
    public function about()
    {
        return view('about');
    }

    /**
     * Student Work Showcase - Gallery, Reels & Projects.
     */
    public function studentWork()
    {
        $studentWorks = [
            [
                'id' => 1,
                'student' => 'Mr. Shubham Deshmukh',
                'category' => 'graphic-design',
                'category_label' => 'Graphic Design',
                'title' => 'Brand Identity & Visual Advertising',
                'image' => asset('images/student-work/shubham-deshmukh-01.webp'),
                'fallback_image' => 'https://cgbugs.school/wp-content/uploads/2024/05/Mr.-Shubham-Deshmukh-01.webp',
                'description' => 'Creative poster layout, typography hierarchy, and visual branding crafted in Photoshop and Illustrator.',
            ],
            [
                'id' => 2,
                'student' => 'Ms. Nikita Satpute',
                'category' => 'graphic-design',
                'category_label' => 'Graphic Design',
                'title' => 'Editorial Graphic Composition',
                'image' => asset('images/student-work/nikita-satpute-01.webp'),
                'fallback_image' => 'https://cgbugs.school/wp-content/uploads/2024/05/Ms.-Nikita-Satpute-01.webp',
                'description' => 'Dynamic color grading, layout symmetry, and promotional media design.',
            ],
            [
                'id' => 3,
                'student' => 'Ms. Shweta Kute',
                'category' => 'graphic-design',
                'category_label' => 'Graphic Design',
                'title' => 'Creative Concept & Vector Graphics',
                'image' => asset('images/student-work/shweta-kute-01.webp'),
                'fallback_image' => 'https://cgbugs.school/wp-content/uploads/2024/05/Ms.-Shweta-kute-01.webp',
                'description' => 'Vector illustration and high-impact digital art for media production.',
            ],
            [
                'id' => 4,
                'student' => 'Ms. Shweta Kute',
                'category' => 'graphic-design',
                'category_label' => 'Graphic Design',
                'title' => 'Package Design & Advertising Arts',
                'image' => asset('images/student-work/shweta-kute-02.webp'),
                'fallback_image' => 'https://cgbugs.school/wp-content/uploads/2024/05/Ms.-Shweta-kute-02.webp',
                'description' => 'Product rendering and packaging graphic design showcase.',
            ],
            [
                'id' => 5,
                'student' => 'Mr. Shubham Deshmukh',
                'category' => 'graphic-design',
                'category_label' => 'Graphic Design',
                'title' => 'Cinematic Poster Art & Compositing',
                'image' => asset('images/student-work/shubham-deshmukh-02.webp'),
                'fallback_image' => 'https://cgbugs.school/wp-content/uploads/2024/05/Mr.-Shubham-Deshmukh-02-1.webp',
                'description' => 'Digital matte painting and movie poster layout techniques.',
            ],
            [
                'id' => 6,
                'student' => 'Mr. Shubham Deshmukh',
                'category' => 'graphic-design',
                'category_label' => 'Graphic Design',
                'title' => 'Motion Graphic Assets & UI Design',
                'image' => asset('images/student-work/shubham-deshmukh-03.webp'),
                'fallback_image' => 'https://cgbugs.school/wp-content/uploads/2024/05/Mr.-Shubham-Deshmukh-03-1.webp',
                'description' => 'Digital UI elements, iconography and interactive asset presentation.',
            ],
            [
                'id' => 7,
                'student' => 'Ms. Nikita Satpute',
                'category' => 'character-design',
                'category_label' => 'Character Design',
                'title' => 'Stylized Character Turnaround',
                'image' => asset('images/student-work/nikita-satpute-01.webp'),
                'fallback_image' => 'https://cgbugs.school/wp-content/uploads/2024/05/Ms.-Nikita-Satpute-01-1.webp',
                'description' => 'Full turnaround character sheets with silhouette balance and expressive facial expressions.',
            ],
            [
                'id' => 8,
                'student' => 'Ms. Nikita Satpute',
                'category' => 'character-design',
                'category_label' => 'Character Design',
                'title' => 'Fantasy Warrior Anatomy & Gear',
                'image' => asset('images/student-work/nikita-satpute-02.webp'),
                'fallback_image' => 'https://cgbugs.school/wp-content/uploads/2024/05/Ms.-Nikita-Satpute-02.webp',
                'description' => 'Detailed armor exploration, weapon props, and fantasy worldbuilding.',
            ],
            [
                'id' => 9,
                'student' => 'Ms. Shweta Kute',
                'category' => 'character-design',
                'category_label' => 'Character Design',
                'title' => 'Creature Concept & Mascot Design',
                'image' => asset('images/student-work/shweta-kute-03.webp'),
                'fallback_image' => 'https://cgbugs.school/wp-content/uploads/2024/05/Ms.-Shweta-kute-03-2.webp',
                'description' => 'Creature anatomy, gesture sketches, and vibrant color palettes for animation.',
            ],
            [
                'id' => 10,
                'student' => 'Ms. Shweta Kute',
                'category' => 'character-design',
                'category_label' => 'Character Design',
                'title' => 'Character Lineup & Model Sheets',
                'image' => asset('images/student-work/shweta-kute-04.webp'),
                'fallback_image' => 'https://cgbugs.school/wp-content/uploads/2024/05/Ms.-Shweta-Kute-04.webp',
                'description' => 'Costume variants and character proportion guides for 3D modeling pipelines.',
            ],
            [
                'id' => 11,
                'student' => 'Ms. Sneha Sonwane',
                'category' => 'character-design',
                'category_label' => 'Character Design',
                'title' => 'Dynamic Action & Hero Poses',
                'image' => asset('images/student-work/sneha-sonwane-01.webp'),
                'fallback_image' => 'https://cgbugs.school/wp-content/uploads/2024/05/Ms.-Sneha-Sonwane-01.webp',
                'description' => 'Action line of action studies, keyframe posing, and dramatic perspective.',
            ],
            [
                'id' => 12,
                'student' => 'Ms. Sneha Sonwane',
                'category' => 'character-design',
                'category_label' => 'Character Design',
                'title' => 'Facial Rig Expressions & Visemes',
                'image' => asset('images/student-work/sneha-sonwane-02.webp'),
                'fallback_image' => 'https://cgbugs.school/wp-content/uploads/2024/05/Ms.-Sneha-Sonwane-02.webp',
                'description' => 'Phoneme lip-sync guides and expressive cartoon facial sheets.',
            ],
        ];

        $reels = [
            [
                'id' => 1,
                'title' => 'Modern Living Room Interior & Lighting Walkthrough',
                'category' => '3D Animation',
                'category_slug' => '3d-animation',
                'thumbnail' => asset('images/student-work/modern-living-room.jpg'),
                'fallback_thumbnail' => 'https://cgbugs.school/wp-content/uploads/2024/05/modern-living-room-interior-with-furniture.jpg',
                'video_url' => 'https://www.youtube.com/embed/P-ebibSvFz4',
                'youtube_link' => 'https://youtu.be/P-ebibSvFz4',
                'duration' => '01:45',
                'author' => 'CG Bugs Student Production Team',
                'description' => 'Photorealistic 3D interior architecture modeling, V-Ray texture rendering, and camera animation in Autodesk Maya.',
            ],
        ];

        return view('student-work', compact('studentWorks', 'reels'));
    }
}
