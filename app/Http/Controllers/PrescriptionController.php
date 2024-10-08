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

    // Check if the prescription status is already true
    if ($prescription->prescription_status) {
        return response()->json(['message' => 'Prescription status is already updated.'], 400);
    }

    // Update the prescription status to true
    $prescription->prescription_status = true;

    // Attempt to save and catch any potential errors
    try {
        $prescription->save();
        return response()->json(['message' => 'Prescription status updated successfully', 'prescription' => $prescription]);
    } catch (\Exception $e) {
        // Return a specific error message if save fails
        return response()->json(['message' => 'Failed to update prescription status: ' . $e->getMessage()], 500);
    }
}
}
