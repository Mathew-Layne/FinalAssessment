<?php

namespace App\Http\Livewire\Admin;

use App\Models\RentedAddon;
use App\Models\Reservation as ModelsReservation;
use App\Models\Vehicle;
use Livewire\Component;
use Livewire\WithPagination;

class Reservation extends Component
{
    use WithPagination;
    public $bookingDetails = false;
    public $reserveId, $vehicleId;

    public function viewDetails($id)
    {

        $this->bookingDetails = true;
        $this->reserveId = $id;
        $reserve = ModelsReservation::where('id', $id)->with('booking')->first();
        $this->vehicleId = $reserve->vehicle_id;
    }

    public function approveBooking()
    {
        Vehicle::where('id', $this->vehicleId)->update([
            'status' => 'Unavailable'
        ]);

        ModelsReservation::where('id', $this->reserveId)->update([
            'reserve_status' => 'Approved'
        ]);

        $this->bookingDetails = false;
    }

    public function denyBooking()
    {
        ModelsReservation::where('id', $this->reserveId)->update([
            'reserve_status' => 'Denied'
        ]);

        $this->bookingDetails = false;
    }

    public function returnVehicle($id)
    {
        Vehicle::where('id', $id)->update([
            'status' => 'Available'
        ]);
    }


    public function render()
    {
        return view('livewire.admin.reservation', [
            'bookings' => ModelsReservation::where('cart_status', 'Booked')->orderBy('id', 'desc')->paginate(8),
            'reserveInfo' => ModelsReservation::where('id', $this->reserveId)->first(),
            'addons' => RentedAddon::where('reservation_id', $this->reserveId)->get(),
        ]);
    }
}
