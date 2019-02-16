<?php

namespace App\Transformers;

use App\Materi;
use League\Fractal\TransformerAbstract;

class MateriTransformer extends TransformerAbstract
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function transform(Materi $materi)
    {
        return [
            'id' => $materi->id,
            'title' => $materi->title,
            'duration' => $materi->duration,
            'description' => $materi->description,
            'created_at' =>$materi->created_at,
            'last_update' =>$materi->updated_at,
            'date_created' =>$materi->created_at->diffForHumans(),
            'date_updated' =>$materi->updated_at->diffForHumans(),
        ];
    }
}
