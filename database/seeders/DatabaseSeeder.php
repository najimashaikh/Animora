<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $categories = [
            [
                'name' => 'CHARACTER RIGS',
                'slug' => 'character-rigs',
                'subtitle' => 'Ready-to-use Rigs & Rigs Systems',
                'description' => 'Fully articulated bipedal and quadrupedal production-ready animation rigs with advanced IK/FK switching and face controllers.',
                'icon_type' => 'rigs',
                'item_count_label' => '345 Assets',
                'sort_order' => 1,
                'is_featured' => true,
                'assets' => [
                    [
                        'title' => 'Apex Biped Mech Rig',
                        'slug' => 'apex-biped-mech-rig',
                        'description' => 'Hard-surface mechanical biped character rig with dynamic piston constraints and custom UI picker.',
                        'software' => 'Maya / Blender',
                        'file_format' => '.ma / .blend',
                        'filesize' => '84 MB',
                        'download_count' => 1240,
                        'rating' => 4.9,
                        'is_featured' => true,
                        'tags' => ['Sci-Fi', 'Biped', 'IK/FK', 'Mechanical'],
                    ],
                    [
                        'title' => 'Cyber Ninja Hero Rig v2',
                        'slug' => 'cyber-ninja-hero-rig-v2',
                        'description' => 'Production stylized martial artist character with 120+ facial blendshapes and ribbon spine.',
                        'software' => 'Blender 4.x',
                        'file_format' => '.blend',
                        'filesize' => '112 MB',
                        'download_count' => 3890,
                        'rating' => 5.0,
                        'is_featured' => true,
                        'tags' => ['Stylized', 'Humanoid', 'Facial Rig', 'Action'],
                    ],
                    [
                        'title' => 'Quadruped Cyberhound Rig',
                        'slug' => 'quadruped-cyberhound-rig',
                        'description' => 'High mobility quadruped beast rig with spline tail and spine dynamics.',
                        'software' => 'Maya 2024',
                        'file_format' => '.ma / .fbx',
                        'filesize' => '67 MB',
                        'download_count' => 840,
                        'rating' => 4.8,
                        'is_featured' => false,
                        'tags' => ['Creature', 'Quadruped', 'Robotic'],
                    ]
                ]
            ],
            [
                'name' => 'PRODUCTION ASSETS',
                'slug' => 'production-assets',
                'subtitle' => 'Props, Sets & Environments',
                'description' => 'Modular sci-fi interior environments, film-grade hard surface props, and cinematic lighting setups.',
                'icon_type' => 'assets',
                'item_count_label' => '1.2K Assets',
                'sort_order' => 2,
                'is_featured' => true,
                'assets' => [
                    [
                        'title' => 'CGI Lab Workstation Environment',
                        'slug' => 'cgi-lab-workstation-environment',
                        'description' => 'Modular command center with blueprint hologram screens, dual monitor desks, and cable conduits.',
                        'software' => 'Unreal Engine / Blender',
                        'file_format' => '.uproject / .blend',
                        'filesize' => '420 MB',
                        'download_count' => 2150,
                        'rating' => 5.0,
                        'is_featured' => true,
                        'tags' => ['Laboratory', 'Modular', 'Hologram', 'PBR'],
                    ],
                    [
                        'title' => 'Cinematic Holo-Terminal Prop',
                        'slug' => 'cinematic-holo-terminal-prop',
                        'description' => 'Interactive UI terminal with shader graphs and emission nodes.',
                        'software' => 'Blender / Houdini',
                        'file_format' => '.blend / .hip',
                        'filesize' => '45 MB',
                        'download_count' => 960,
                        'rating' => 4.7,
                        'is_featured' => false,
                        'tags' => ['Prop', 'Sci-Fi', 'Shader'],
                    ]
                ]
            ],
            [
                'name' => 'ANIMATION CLIPS',
                'slug' => 'animation-clips',
                'subtitle' => 'Mocap, Clips & Cycle Library',
                'description' => 'Cleaned optical motion capture files, combat loops, acrobatic transitions, and expressive body language cycles.',
                'icon_type' => 'clips',
                'item_count_label' => '890 Clips',
                'sort_order' => 3,
                'is_featured' => true,
                'assets' => [
                    [
                        'title' => 'Sprint & Parkour Vault Cycle',
                        'slug' => 'sprint-parkour-vault-cycle',
                        'description' => '60 FPS seamless sprint loop transitioning into 180-degree rail vault with root motion.',
                        'software' => 'Universal FBX / BVH',
                        'file_format' => '.fbx',
                        'filesize' => '18 MB',
                        'download_count' => 4320,
                        'rating' => 4.9,
                        'is_featured' => true,
                        'tags' => ['Mocap', 'Locomotion', 'Parkour', '60fps'],
                    ],
                    [
                        'title' => 'Tactical Gun Kata Combo',
                        'slug' => 'tactical-gun-kata-combo',
                        'description' => 'Fluid cinematic close-quarters combat mocap loop with dual firearm handling.',
                        'software' => 'Universal FBX',
                        'file_format' => '.fbx',
                        'filesize' => '24 MB',
                        'download_count' => 3100,
                        'rating' => 4.8,
                        'is_featured' => false,
                        'tags' => ['Combat', 'Action', 'Cinematic'],
                    ]
                ]
            ],
            [
                'name' => 'PIPELINE TOOLS',
                'slug' => 'pipeline-tools',
                'subtitle' => 'Maya, Blender & Houdini Tools',
                'description' => 'Python scripts, geometry node setups, automation tools, and shelf plugins designed to accelerate studio workflows.',
                'icon_type' => 'tools',
                'item_count_label' => '156 Scripts',
                'sort_order' => 4,
                'is_featured' => true,
                'assets' => [
                    [
                        'title' => 'Auto-Weight Smoothing Plugin',
                        'slug' => 'auto-weight-smoothing-plugin',
                        'description' => 'High-performance C++ & Python tool for calculating seamless vertex weight blending on deformation joints.',
                        'software' => 'Maya 2023-2025',
                        'file_format' => '.py / .mll',
                        'filesize' => '8 MB',
                        'download_count' => 5120,
                        'rating' => 5.0,
                        'is_featured' => true,
                        'tags' => ['Rigging', 'Skinning', 'Automation', 'Python'],
                    ],
                    [
                        'title' => 'Blender Asset Browser Batch Importer',
                        'slug' => 'blender-asset-browser-batch-importer',
                        'description' => 'One-click metadata tagger and catalog organizer for large studio asset libraries.',
                        'software' => 'Blender 4.x',
                        'file_format' => '.py (Addon)',
                        'filesize' => '2.5 MB',
                        'download_count' => 2890,
                        'rating' => 4.8,
                        'is_featured' => false,
                        'tags' => ['Addon', 'Pipeline', 'Blender', 'Utility'],
                    ]
                ]
            ],
        ];

        foreach ($categories as $catData) {
            $assets = $catData['assets'] ?? [];
            unset($catData['assets']);

            $category = \App\Models\Category::updateOrCreate(
                ['slug' => $catData['slug']],
                $catData
            );

            foreach ($assets as $assetData) {
                $category->assets()->updateOrCreate(
                    ['slug' => $assetData['slug']],
                    $assetData
                );
            }
        }
    }
}
