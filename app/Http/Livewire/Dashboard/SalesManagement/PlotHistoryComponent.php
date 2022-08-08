<?php

namespace App\Http\Livewire\Dashboard\SalesManagement;

use App\Models\PlotExpense;
use Carbon\Carbon;
use Livewire\Component;

class PlotHistoryComponent extends Component
{
    protected $listeners = ['setPlotHistory'];

    public $history = [];

    public function setPlotHistory($plotId)
    {
        $this->history = PlotExpense::wherePlotId($plotId)->with('expense.expenseType')->get()
            ->groupBy(function ($date) {
                return Carbon::parse($date->created_at)->format('Y-m-d');
            })->toArray();
    }

    public function render()
    {
        return view('livewire.dashboard.sales-management.plot-history-component');
    }
}
