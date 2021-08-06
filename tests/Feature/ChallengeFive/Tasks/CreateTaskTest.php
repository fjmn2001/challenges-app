<?php

declare(strict_types=1);

namespace Tests\Feature\ChallengeFive\Tasks;

use App\Models\User;
use Faker\Factory;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Symfony\Component\HttpFoundation\Response;
use Tests\TestCase;

final class CreateTaskTest extends TestCase
{
    use DatabaseTransactions;

    public function test_tasks_can_be_created()
    {
        $faker = Factory::create();
        $this->actingAs(User::factory()->create());

        $response = $this->post('tasks', [
            'description' => $faker->text(25),
            'dueDate' => $faker->date()
        ]);

        $response->dump();
        $response->assertStatus(201);
    }
}
