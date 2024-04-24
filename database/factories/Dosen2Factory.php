<?php

namespace Database\Factories;
use App\Models\Dosen2;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class Dosen2Factory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nip_dsn' => $this->faker->numerify("##########"),
            'email_dsn' => $this->faker->unique->safeEmail(),
            'nama_dsn' => $this->faker->name(),
            'tanggal_lahir_dsn' => $this->faker->date(),
            'no_hp_dsn'=>$this->faker->phoneNumber(),
            'alamat_dsn'=>$this->faker->streetAddress(),
        ];
    }
}
