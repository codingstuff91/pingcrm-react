<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use App\Models\Report;
use Illuminate\Http\Request;
use App\Http\Resources\ReportCollection;

class ReportsController extends Controller
{
    public function __invoke()
    {
        return Inertia::render('Reports/Index', [
            'reports' => new ReportCollection(
                Report::paginate()
            )
        ]);
    }
}
