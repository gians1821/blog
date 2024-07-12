<?php

namespace Database\Seeders;

use App\Models\Post;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;

class PostsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $posts = [
            [
                'user_id' => 1,
                'title' => 'Introduction to AI',
                'body' => 'Artificial Intelligence is revolutionizing the world.'
            ],
            [
                'user_id' => 2,
                'title' => 'The Rise of Quantum Computing',
                'body' => 'Quantum computing is set to change the landscape of technology.'
            ],
            [
                'user_id' => 3,
                'title' => 'Understanding Blockchain',
                'body' => 'Blockchain technology underpins cryptocurrencies like Bitcoin.'
            ],
            [
                'user_id' => 4,
                'title' => 'The Future of Cloud Computing',
                'body' => 'Cloud computing provides scalable computing resources over the internet.'
            ],
            [
                'user_id' => 5,
                'title' => 'Advancements in Machine Learning',
                'body' => 'Machine Learning is a subset of AI focused on building systems that learn from data.'
            ],
            [
                'user_id' => 1,
                'title' => '5G Technology Explained',
                'body' => '5G is the fifth generation of mobile networks,
            offering faster speeds and more reliable connections.'
            ],
            [
                'user_id' => 2,
                'title' => 'The Impact of IoT',
                'body' => 'The Internet of Things (IoT) connects devices over the internet,
            allowing them to communicate with each other.'
            ],
            [
                'user_id' => 3,
                'title' => 'Cybersecurity Best Practices',
                'body' => 'Protect your data and systems from cyber threats with these best practices.'
            ],
            [
                'user_id' => 4,
                'title' => 'The Role of Big Data in Business',
                'body' => 'Big data analytics helps businesses make informed decisions by analyzing large sets of data.'
            ],
            [
                'user_id' => 5,
                'title' => 'Introduction to Edge Computing',
                'body' => 'Edge computing brings computation and data storage closer to the location where it is needed.'
            ],
            [
                'user_id' => 1,
                'title' => 'Virtual Reality vs Augmented Reality',
                'body' => 'VR and AR are immersive technologies that alter our perception of reality.'
            ],
            [
                'user_id' => 2,
                'title' => 'The Growth of E-commerce',
                'body' => 'E-commerce continues to grow,
            changing the way we shop and do business.'
            ],
            [
                'user_id' => 3,
                'title' => 'Understanding DevOps',
                'body' => 'DevOps is a set of practices that combines software development and IT operations.'
            ],
            [
                'user_id' => 4,
                'title' => 'The Evolution of Programming Languages',
                'body' => 'Programming languages have evolved to meet the needs of modern software development.'
            ],
            [
                'user_id' => 5,
                'title' => 'The Importance of UX Design',
                'body' => 'User Experience (UX) design focuses on creating products that provide meaningful and relevant experiences to users.'
            ],
            [
                'user_id' => 1,
                'title' => 'The Power of APIs',
                'body' => 'APIs allow different software systems to communicate with each other.'
            ],
            [
                'user_id' => 2,
                'title' => 'Understanding Data Science',
                'body' => 'Data Science involves using scientific methods to extract knowledge and insights from data.'
            ],
            [
                'user_id' => 3,
                'title' => 'Advancements in Robotics',
                'body' => 'Robots are increasingly being used in various industries for automation.'
            ],
            [
                'user_id' => 4,
                'title' => 'The Future of Autonomous Vehicles',
                'body' => 'Autonomous vehicles are set to transform the transportation industry.'
            ],
            [
                'user_id' => 5,
                'title' => 'The Rise of Fintech',
                'body' => 'Fintech is revolutionizing the financial industry with technology-driven innovations.'
            ],
        ];

        foreach ($posts as $post) {
            Post::create([
                'user_id' => $post['user_id'],
                'title' => $post['title'],
                'slug' => Str::slug($post['title']),
                'body' => $post['body'],
            ]);
        }
    }
}
