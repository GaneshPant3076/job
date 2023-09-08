<?php

namespace Database\Seeders;
use App\Models\Blog;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BlogsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $blogs = [
            [
               'title'=>' Life in the Himalayas',
               'type'=>'Travel, Lifestyle',
               'c_count'=>'4567',
               'article_content'=>'Considered the home ground of Mt. Everest, Lukla, situated in Solukhumbu, is one of the most visited places enroute to the worlds highest peak. It is impossible to reach the Everest Base Camp without travelling through the small town of Lukla. Another popular tourist spot in the area is Namche Bazar which lies just a little ahead of Lukla',
               'l_count'=>343,
               'c_author'=>'Anesh pant',
               'c_content'=> 'Lukla is one of the most beautiful places on Earth but what saddens me is that its inhabitants are still unable to get enough supplies of their basic necessities including food, clothes, and medical facilities',
               'author_name'=>'Manoj Poudel',
               'd_author'=>'Second divided from form fish beast made. Every of seas all gathered use saying you'
            ],
            [
                'title'=>' AI models',
                'type'=>'Science,technology',
                'c_count'=>04,
                'article_content'=>'Generative AI and Large Language Models (LLM) are here in a big way, and there are organizations keen to jump into the water, often without checking the depth first. However, many vendors have not done security reviews of their AI products at all, often basing their work on open source models.

                When it comes to evaluating these AI products, cybersecurity professionals are stuck with the decision to approve or disapprove of them. Theoretically, it’s easy, but practically, it’s not so cut and dry. In this article, we’ll discuss these issues, as well as provide some advice on how to make the call on what to allow.',
                'l_count'=>4,
                'c_author'=>'sunil',
                'c_content'=> 'Nice artical',
                'author_name'=>'Ganesh pant',
                'd_author'=>'Ganesh pant is a Principal Author'
            ],
            [
                'title'=>'Security ',
                'type'=>'technology',
                'c_count'=>04,
                'article_content'=>'Generative AI and Large Language Models (LLM) are here in a big way, and there are organizations keen to jump into the water, often without checking the depth first. However, many vendors have not done security reviews of their AI products at all, often basing their work on open source models security.

                When it comes to evaluating these AI products, cybersecurity professionals are stuck with the decision to approve or disapprove of them. Theoretically, it’s easy, but practically, it’s not so cut and dry. In this article, we’ll discuss these issues, as well as provide some advice on how to make the call on what to allow.',
                'l_count'=>4,
                'c_author'=>'sunil',
                'c_content'=> 'Nice artical',
                'author_name'=>'Ganesh pant',
                'd_author'=>'Ganesh pant is a Principal Author'
            ],
            [
                'title'=>' greenlight',
                'type'=>'Science',
                'c_count'=>6,
                'article_content'=>'Generative AI and Large Language Models (LLM) are here in a big way, and there are organizations keen to jump into the water, often without checking the depth first. However, many vendors have not done security reviews of their AI products at all, often basing their work on open source models.

                When it comes to evaluating these AI products, cyber security professionals are stuck with the decision to approve or disapprove of them. Theoretically, it’s easy, but practically, it’s not so cut and dry. In this article, we’ll discuss these issues, as well as provide some advice on how to make the call on what to allow.',
                'l_count'=>4,
                'c_author'=>'sunil',
                'c_content'=> 'Nice artical',
                'author_name'=>'Ganesh pant',
                'd_author'=>'pant is a Principal Author'
            ],
            [
                'title'=>'Security reviews and AI models',
                'type'=>'technology',
                'c_count'=>04,
                'article_content'=>'Generative AI and Large Language Models (LLM) are here in a big way, and there are organizations keen to jump into the water, often without checking the depth first. However, many vendors have not done security reviews of their AI products at all, often basing their work on open source models.

                When it comes to evaluating these AI products, cybersecurity professionals are stuck with the decision to approve or disapprove of them. Theoretically, it’s easy, but practically, it’s not so cut and dry. In this article, we’ll discuss these issues, as well as provide some advice on how to make the call on what to allow.',
                'l_count'=>4,
                'c_author'=>'sunil',
                'c_content'=> 'Nice artical',
                'author_name'=>' shambhu',
                'd_author'=>'Ganesh  is a Principal Author'
            ]

        ];
            Blog::truncate();
            foreach($blogs as $blog){
                Blog::create($blog);
            }
    }
}
