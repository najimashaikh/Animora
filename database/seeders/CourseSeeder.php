<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Course;

class CourseSeeder extends Seeder
{
    public function run()
    {
        $courses = [
            [
                'name' => 'Professional Program',
                'image_url' => 'images/course-professional-program.jpg',
                'short_description' => '3-YEAR, FULL‑TIME PROGRAM – 2D, 3D, VFX. Master production pipelines in our 3‑year program.',
                'long_description' => 'A comprehensive 3-year full-time professional program covering advanced 2D & 3D animation, visual effects, and industry production workflows.',
                'is_featured_home' => true,
                'sort_order' => 1,
            ],
            [
                'name' => '2-Year Full-Time Program - 3D Animation',
                'image_url' => 'images/course-3d-animation.jpg',
                'short_description' => '2‑YEAR, FULL‑TIME PROGRAM – 3D Animation. Full‑time 3D animation program covering diverse aspects of the 3D generalist skill set.',
                'long_description' => 'Full-time 3D animation program covering character modeling, rigging, lighting, texturing, and performance animation.',
                'is_featured_home' => true,
                'sort_order' => 2,
            ],
            [
                'name' => '2-Year Full-Time Program - Game Art Design',
                'image_url' => 'images/course-game-art-design.jpg',
                'short_description' => '2‑YEAR, FULL‑TIME PROGRAM – Game Art Design. From stunning visuals to seamless gameplay, we bring your creative vision to life.',
                'long_description' => 'Master AAA game asset creation, environment modeling, Unreal Engine workflows, and interactive game mechanics.',
                'is_featured_home' => true,
                'sort_order' => 3,
            ],
            [
                'name' => '2-Year Full-Time Program - VFX',
                'image_url' => 'images/course-vfx.jpg',
                'short_description' => '2‑YEAR, FULL‑TIME PROGRAM – VFX. Transform narratives into unforgettable cinematic experiences with VFX.',
                'long_description' => 'Cinema-grade visual effects, composting, green screen keying, particle simulations, and dynamic live-action integrations.',
                'is_featured_home' => true,
                'sort_order' => 4,
            ],
            [
                'name' => '1-Year Full-Time Program - Individual Courses',
                'image_url' => 'images/course-individual-courses.jpg',
                'short_description' => '1‑YEAR, FULL‑TIME PROGRAM – Individual Courses. Unlock your creative potential with comprehensive media production skills.',
                'long_description' => 'Fast-paced intensive program tailored for individuals specializing in specific creative media disciplines.',
                'is_featured_home' => true,
                'sort_order' => 5,
            ],
            [
                'name' => '10-Week On-Campus Program - Short Term Courses',
                'image_url' => 'images/course-short-term-courses.jpg',
                'short_description' => '10‑WEEK, ON‑CAMPUS PROGRAM – Short Term Courses. Standalone courses in film, game, and visual effects production.',
                'long_description' => 'Rapid upskilling bootcamps for working artists and students looking for hands-on production studio experience.',
                'is_featured_home' => true,
                'sort_order' => 6,
            ],
        ];

        foreach ($courses as $courseData) {
            Course::updateOrCreate(
                ['name' => $courseData['name']],
                $courseData
            );
        }
    }
}
