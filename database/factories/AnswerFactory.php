<?php

namespace Database\Factories;

use App\Models\Question;
use App\Models\QuestionChoice;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Answer>
 */
class AnswerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $question = Question::inRandomOrder()->first();
        $choice = QuestionChoice::inRandomOrder()->first();
        $user = User::inRandomOrder()->first();
        return [
            'question_id' => $question->id,
            'question_choice_id' => $choice->id,
            'user_id' => $user->id,
            'score' => random_int(0, 100),
            'category' => $this->faker->name(),
        ];
    }
}
