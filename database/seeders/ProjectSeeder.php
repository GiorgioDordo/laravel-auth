<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Project;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $projects = [
            [
              "name" => "Boolzapp",
              "languages" => "Vue, Js, Html, Css.",
              "short_description" => "Ricreata l'applicazione whatsapp",
              "description" => "Ricreato il layout delll'applicazione whatsapp e resa responsive.",
              "image" => "#"
            ],
            [
                "name" => "Vite Yu-Gi-Oh",
                "short_description" => "Usata api",
                "languages" => "Vue, Js, Html, Css.",
                "description" => "Usata api per mostrare le carte yu-gi-oh",
                "image" => "#"
            ],
            [
                "name" => "Boolflix",
                "short_description" => "Usato api",
                "languages" => "Vue, Js, Html, Css.",
                "description" => "Usata api per mostrare i film con tutti i suoi dati.",
                "image" => "#"
            ],
            ];

            foreach ($projects as $project) {
                $newProject = new Project();
                $newProject->name = $project['name'];
                $newProject->languages = $project['languages'];
                $newProject->short_description = $project['short_description'];
                $newProject->description = $project['description'];
                $newProject->image = $project['image'];
                $newProject->save();
            }
    }
};
