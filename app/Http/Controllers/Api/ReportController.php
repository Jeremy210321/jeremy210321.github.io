<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\ReportResource;
use App\Models\Report;
use Illuminate\Http\Request;

class ReportController extends Controller
{
    public function list_reports()
    {
        $reports = Report::where('state', true)->get();
        return ReportResource::collection($reports);
    }
}