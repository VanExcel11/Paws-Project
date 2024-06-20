<?php

namespace App\Http\Controllers;

use App\Http\Requests\AppointmentRequest;
use App\Models\Appointment;
use Illuminate\Http\Request;

class AppointmentController extends Controller
{
    public function create(AppointmentRequest $request)
    {
        try {
            $appointment = Appointment::create($request->all());
            return response()->json(['appointment' => $appointment], 201);
        } catch (\Exception $e) {
            return response()->json(['error' => 'Failed to create appointment'], 500);
        }
    }
}
