<?php

namespace Database\Factories;

use App\Models\Book;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Book>
 */
class BookFactory extends Factory
{
    protected $model = Book::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'author_id' => 1,
            'category_id' => 1,
            'editorial_id' => 1,
            'language_id' => 1,
            'isbn' => $this->faker->isbn10(),
            'title' => $this->faker->words(4,true),
            'slug' => $this->faker->slug(),
            'description' => $this->faker->text(),
            'price' => $this->faker->randomNumber(5),
            'promotional_price' => $this->faker->randomNumber(5),
            'condition' => $this->faker->randomElement(['useded','new']),
            'year' => $this->faker->year(),
            'pages' => $this->faker->randomNumber(3),
            'stock' => $this->faker->randomNumber(2),
            'publication_date' => $this->faker->date(),
            'created_at' => $this->faker->dateTimeBetween('-2 weeks','now'),
        ];
    }
}