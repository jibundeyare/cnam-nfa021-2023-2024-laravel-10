<?php

namespace App\Http\Controllers;

use App\Models\Reservation;
use Illuminate\Http\Request;

class AdminReservationController extends Controller
{
    private $heures = [
        // créneaux du midi
        '12:00',
        '12:30',
        '13:00',
        '13:30',

        // créneaux du soir
        '20:00',
        '20:30',
        '21:00',
        '21:30',
    ];

    public function index()
    {
        // récup la liste des résa
        // affiche un template
    }

    public function show()
    {
        // récup la résa
        // affiche un template
    }

    public function edit($id)
    {
        $reservation = Reservation::find($id);

        return view('admin.reservation.edit', [
            'reservation' => $reservation,
            'heures' => $this->heures,
        ]);
    }
}
