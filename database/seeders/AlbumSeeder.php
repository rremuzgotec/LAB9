<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Album;
use App\Models\User;

class AlbumSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $usuarios = User::all();
        $contador = 0;

        foreach ($usuarios as $usuario) {
            $cantidad = mt_rand(0,15);
            for ($i=0; $i < $cantidad; $i++) {
                $contador++;
                Album::create(
                    [
                        'album_nombre' => "Nombre Album $contador",
                        'album_descripcion' => "Descripcion álbum $contador",
                        'usuario_id' => $usuario->id,
                    ]
                );
            }
        }
    }
}
