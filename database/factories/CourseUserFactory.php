<?php

namespace Database\Factories;

use App\Models\CourseUser;
use Illuminate\Database\Eloquent\Factories\Factory;

class CourseUserFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = CourseUser::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id' => $this->faker->randomDigitNotNull,
        'course_id' => $this->faker->randomDigitNotNull,
        'user_account_id' => $this->faker->randomDigitNotNull,
        'paid_date' => $this->faker->date('Y-m-d H:i:s'),
        'expiry_date' => $this->faker->date('Y-m-d H:i:s'),
        'plan' => $this->faker->word,
        'paid_amount' => $this->faker->randomDigitNotNull,
        'status' => $this->faker->word,
        'deleted_at' => $this->faker->date('Y-m-d H:i:s'),
        'created_at' => $this->faker->date('Y-m-d H:i:s'),
        'updated_at' => $this->faker->date('Y-m-d H:i:s')
        ];
    }
}
