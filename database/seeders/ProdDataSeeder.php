<?php

namespace Database\Seeders;

use App\Models\Blog\Category as BlogCategory;
use App\Models\Blog\Post as BlogPost;
use App\Models\Page;
use App\Models\Project\Category as ProjectCategory;
use App\Models\Project\Post as ProjectPost;
use App\Models\Service\Category as ServiceCategory;
use App\Models\Service\Post as ServicePost;
use App\Models\Team\Post as TeamPost;
use App\Models\User;
use Database\Factories\Concerns\CanCreateImages;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class ProdDataSeeder extends Seeder
{
    use CanCreateImages;

    // Constantes pour le nombre de catégories
    private const SERVICE_CATEGORY_COUNT = 3;

    private const BLOG_CATEGORY_COUNT = 4;

    private const PROJECT_CATEGORY_COUNT = 5;

    // Constantes pour le nombre de posts
    private const SERVICE_POST_COUNT = 5;

    private const BLOG_POST_COUNT = 40;

    private const PROJECT_POST_COUNT = 10;

    private const TEAM_POST_COUNT = 5;

    public function run(): void
    {
        $this->seedUsers();
//        $this->seedServices();
//        $this->seedBlogs();
//        $this->seedProjects();
//        $this->seedTeams();
        $this->seedPages();
    }

    private function seedUsers(): void
    {
        User::create([
            'name' => 'Admin',
            'email' => 'admin@lotusnoir.ca',
            'password' => bcrypt('password'),
        ]);
    }

    private function seedServices(): void
    {
        $categories = ServiceCategory::factory()->count(self::SERVICE_CATEGORY_COUNT)->create();
        ServicePost::factory()->count(self::SERVICE_POST_COUNT)
            ->hasAttached($categories->random(rand(1, self::SERVICE_CATEGORY_COUNT))->first())
            ->create();
    }

    public function seedBlogs(): void
    {
        $categories = BlogCategory::factory()->count(self::BLOG_CATEGORY_COUNT)->create();
        BlogPost::factory()->count(self::BLOG_POST_COUNT)
            ->hasAttached($categories->random(rand(1, self::BLOG_CATEGORY_COUNT))->first())
            ->create();
    }

    public function seedProjects(): void
    {
        $categories = ProjectCategory::factory()->count(self::PROJECT_CATEGORY_COUNT)->create();
        ProjectPost::factory()->count(self::PROJECT_POST_COUNT)
            ->hasAttached($categories->random(rand(1, self::PROJECT_CATEGORY_COUNT))->first())
            ->create();
    }

    public function seedTeams(): void
    {
        TeamPost::factory()->count(self::TEAM_POST_COUNT)
            ->create();
    }

    private function seedPages(): void
    {
        $pages = ['Home', 'Blog', 'Services', 'Projects', 'Career', 'Team', 'Contact', 'About Us'];

        foreach ($pages as $page) {
            Page::create([
                Page::TITLE => $page,
                Page::SLUG => Str::slug($page),
            ]);
        }
    }
}
