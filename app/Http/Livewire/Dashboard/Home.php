<?php

namespace App\Http\Livewire\Dashboard;

use App\Models\Plot;
use App\Models\PlotSale;
use App\Models\Society;
use App\Models\User;
use Livewire\Component;

use function PHPSTORM_META\map;

class Home extends Component
{
    public function mount()
    {
        $totalPlots = Plot::count();
        $notSold = Plot::whereNull('customer_id')->count();
        
        $this->statistics = [
            'users' => User::count(),
            'societies' => Society::count(),
            'plots' => $totalPlots,
            'plotsSold' => $totalPlots - $notSold,
            'plotsNotSold' => $notSold,
            'yearlySale' => PlotSale::whereYear('created_at', now()->year)->sum('total'),
        ];
    }
    public function render()
    {
        return view('livewire.dashboard.home');
    }
}
