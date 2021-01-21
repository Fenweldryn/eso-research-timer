<?php

namespace App\Http\Livewire\Research;

use Livewire\Component;
use App\Models\Research;
use App\Models\Character;
use Illuminate\Http\Request;

class Create extends Component
{
    public $characterName;
    public $profession;
    public $researchEndsAt;

    public function mount(Request $request)
    {
        $this->getCharacterName();
        $this->getProfession();
        $this->getResearchEndTimestamp();

        $character = Character::firstOrCreate([
            "name" => $this->characterName,
            "user_id" => auth()->user()->id,
        ]);

        Research::firstOrCreate([
            "profession" => $this->profession,
            "completes_at" => $this->researchEndsAt,
            "character_id" => $character->id
        ]);
    }

    public function render()
    {
        return view('livewire.research.create');
    }

    public function getCharacterName()
    {
        $this->characterName = str_replace('~',' ', request()->character);
    }

    public function getProfession()
    {
        $this->profession = request()->profession;
    }

    public function getResearchEndTimestamp()
    {
        $this->researchEndsAt = \Carbon\Carbon::createFromTimestamp(request()->researchEndTimestamp)->ToDateTimeString();
    }
}
