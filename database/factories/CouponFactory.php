<?php

namespace Database\Factories;

use App\Models\Coupon;
use Illuminate\Database\Eloquent\Factories\Factory;

class CouponFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Coupon::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id' => $this->faker->randomDigitNotNull,
        'student_id' => $this->faker->word,
        'course_id' => $this->faker->randomDigitNotNull,
        'category_id' => $this->faker->randomDigitNotNull,
        'user_account_id' => $this->faker->randomDigitNotNull,
        'available_on_course_page' => $this->faker->word,
        'type' => $this->faker->word,
        'price' => $this->faker->randomDigitNotNull,
        'status' => $this->faker->word,
        'deadline' => $this->faker->date('Y-m-d H:i:s'),
        'countdown_timer' => $this->faker->randomDigitNotNull,
        'total_available' => $this->faker->randomDigitNotNull,
        'total_remaining' => $this->faker->randomDigitNotNull,
        'deleted_at' => $this->faker->date('Y-m-d H:i:s'),
        'created_at' => $this->faker->date('Y-m-d H:i:s'),
        'updated_at' => $this->faker->date('Y-m-d H:i:s')
        ];
    }
}
