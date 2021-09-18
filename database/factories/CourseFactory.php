<?php

namespace Database\Factories;

use App\Models\Course;
use Illuminate\Database\Eloquent\Factories\Factory;

class CourseFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Course::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id' => $this->faker->randomDigitNotNull,
        'category_id' => $this->faker->randomDigitNotNull,
        'title' => $this->faker->word,
        'sub_title' => $this->faker->word,
        'description' => $this->faker->text,
        'about_instructor' => $this->faker->text,
        'playlist_url' => $this->faker->word,
        'tags' => $this->faker->word,
        'photo' => $this->faker->word,
        'promo_video_url' => $this->faker->word,
        'creator_status' => $this->faker->randomDigitNotNull,
        'admin_status' => $this->faker->randomDigitNotNull,
        'what_will_students_learn' => $this->faker->text,
        'target_students' => $this->faker->text,
        'requirements' => $this->faker->text,
        'discount_price' => $this->faker->randomDigitNotNull,
        'actual_price' => $this->faker->randomDigitNotNull,
        'view_count' => $this->faker->randomDigitNotNull,
        'subscriber_count' => $this->faker->randomDigitNotNull,
        'deleted_at' => $this->faker->date('Y-m-d H:i:s'),
        'created_at' => $this->faker->date('Y-m-d H:i:s'),
        'updated_at' => $this->faker->date('Y-m-d H:i:s')
        ];
    }
}
