<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Ld;
use Illuminate\Support\Str;
use Mediconesystems\LivewireDatatables\Column;
use Mediconesystems\LivewireDatatables\NumberColumn;
use Mediconesystems\LivewireDatatables\DateColumn;
use Mediconesystems\LivewireDatatables\Http\Livewire\LivewireDatatable;

class LivewireDatatables extends LivewireDatatable
{
    public $model = Ld::class;

    function columns()
    {
    	return [
    		NumberColumn::name('id')->label('ID')->sortBy('id'),
    		Column::name('name')->label('Name'),
    		Column::name('email')->label('Email Address'),
    		Column::name('gender')->label('Gender'),
    		DateColumn::name('created_at')->label('Creation Date')
    	];
    }
}