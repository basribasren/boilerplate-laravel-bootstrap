<?php

namespace App\Transformers;

use App\Dosen;
use League\Fractal\TransformerAbstract;

class DosenTransformer extends TransformerAbstract
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function transform(Dosen $dosen)
    {
        return [
            'id' => $dosen->id,
            'name' => $dosen->name,
            'nidn' => $dosen->nidn,
            'photo' => $dosen->photo,
            'created_at' =>$dosen->created_at->diffForHumans(),
            'last_update' =>$dosen->updated_at->diffForHumans(),
        ];
    }
}
