<?php

declare(strict_types=1);

namespace Tests\Feature\ChallengeFive\Tasks;

use App\Models\Task;
use App\Models\User;
use Faker\Factory;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;

final class SomeTaskTest extends TestCase
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

        $response->assertStatus(302);
    }

    public function test_tasks_can_be_created_and_received_logs()
    {
        $faker = Factory::create();
        $this->actingAs(User::factory()->create());

        $taskResponse = $this->post('tasks', [
            'description' => $faker->text(25),
            'dueDate' => $faker->date()
        ]);

        $taskResponse->assertStatus(302);

        $lastTaskCreated = Task::orderBy('id', 'desc')->take(1)->get()->first();

        $logResponse = $this->post("tasks/{$lastTaskCreated->id}/logs", [
            'comment' => $faker->text(25)
        ]);

        $logResponse->assertStatus(302);
    }
}
