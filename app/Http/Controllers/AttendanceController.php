<?php

namespace App\Http\Controllers;
use App\Models\Attendance;
use App\Models\User;
use Illuminate\Http\Request;

class AttendanceController extends Controller
{
    public function index()
    {
        return Attendance::all();
    }

    public function show($id)
    {
        return Attendance::find($id);
    }


    public function store(Request $request)
    {
        $user = User::find($request->user_id);

        return $user
            ? $user->attendances()->create($request->all())
            : response()->json(['message' => 'User not found'], 404);
    }

    public function update(Request $request, $id)
    {
        $attendance = Attendance::findOrFail($id);
        $attendance->update($request->all());
        return $attendance;
    }

    public function destroy($id)
    {
        $attendance = Attendance::findOrFail($id);
        $attendance->delete();
        return 204; // No content
    }
}

