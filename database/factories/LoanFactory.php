<?php

namespace Database\Factories;

use App\Models\Member;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Loan>
 */
class LoanFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        //associate loan with one member from member table
        $member = Member::find(fake()->numberBetween(1,50)); 
        //1.fake number between generate random number
        //2. member;;find(xxx) fetch row with random number
        //3. member variable is a member with id xxx

        return [
            'book_id' => fake()->numberBetween(1, 300), //akan generate 300 book
            'member_id' => $member->id,
            'member_icNum' => $member->icNum,
            //borrow from january until february
            'borrowingDate' => fake()->dateTimeBetween('2024-01-01', '2024-02-01') ->format('d/n/Y'),
            // return from march until april
            'returnDate' => fake()->dateTimeBetween('2024-03-01', '2024-04-01') ->format('d/n/Y'),
        ];
    }
}
