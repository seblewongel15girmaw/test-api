<?php

namespace App\Http\Controllers;

use App\Models\Prescription;
use Illuminate\Http\Request;

class PrescriptionController extends Controller
{
    public function index()
    {
        // Fetch all prescriptions that have prescription status is false
        $prescriptions = Prescription::with('patient')->where('prescription_status', false)->get();

        // Return as JSON response
        return response()->json($prescriptions);
    }


    // update the status of prescription status 
    public function updateStatus($id)
    {
        // Find the prescription by ID
        $prescription = Prescription::find($id);

        // Check if prescription exists
        if (!$prescription) {
            return response()->json(['message' => 'Prescription not found'], 404);
        }

        // Update the prescription status to true
        $prescription->prescription_status = true;
        $prescription->save();

        // Return a success response
        return response()->json(['message' => 'Prescription status updated successfully', 'prescription' => $prescription]);
    }
}
