<?php

namespace App\Services;

use App\Models\Research;

class GetResearchService {

    public function byCharacter()
    {
        return Research::select('characters.name', 'profession', 'completes_at')->join('characters', 'characters.id', '=', 'research.character_id')->where('user_id', auth()->user()->id)->get();
    }
}
