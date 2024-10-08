<?php

namespace App\Http\Controllers;

use App\Models\Prescription;
use Illuminate\Http\Request;

class PrescriptionController extends Controller
{
    public function index()
    {
        // Fetch all prescriptions
        $prescriptions = Prescription::all();

        // Return as JSON response
        return response()->json($prescriptions);
    }
}
