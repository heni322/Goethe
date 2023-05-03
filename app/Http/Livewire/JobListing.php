<?php

namespace App\Http\Livewire;

use App\Models\Jobs;

use Illuminate\Database\Eloquent\Collection;
use Livewire\Component;

class JobListing extends Component
{
    public $jobs;
    public $perPage = 2;
    public $page = 1;

    public function mount()
    {
        // Load the initial set of jobs when the component is mounted
        $this->jobs = Jobs::orderBy('created_at', 'desc')
            ->take($this->perPage)
            ->get();
    }

    public function loadJobs()
    {
        // Load the next set of jobs when the "Load More" button is clicked
        $this->page++;

        $newJobs = Jobs::orderBy('created_at', 'desc')
            ->skip(($this->page - 1) * $this->perPage)
            ->take($this->perPage)
            ->get();

        $this->jobs = $this->jobs->concat($newJobs);
    }
    public function render()
    {
        return view('website.jobs');
    }
}
