<?php

namespace App\Http\Livewire\Seller\Modals;

use App\Models\Cart;
use App\Models\Orders;
use App\Models\User;
use App\Notifications\OrderMailNotif;
use Illuminate\Support\Facades\Notification;
use Livewire\Component;

class ChangeOrderStatusModal extends Component
{
    public $ChangeOrderStatusModal;
    protected $listeners = ['ChangeOrderStatus'];

    public function ChangeOrderStatus(Orders $id)
    {
        $this->resetErrorBag();
        $this->order = $id;

        if ($this->order->orderStatus == 4) {
            $this->dispatchBrowserEvent('alert', [
                'type' => 'warning', 'message' => 'محصول تحویل داده شد !'
            ]);

        } else
            $this->ChangeOrderStatusModal = true;
    }

    public function ConvertOrderStatus()
    {
        if ($this->order->orderStatus < 5) {

            $status = Cart::find($this->order->cart_id);
            $OrderStatus = Orders::where([['cart_id', $status->id], ['id', $this->order->id]])->get()->last();

            $status->orderStatus += 1;
            $OrderStatus->OrderStatus += 1;

            $status->save();
            $OrderStatus->save();
            
            //$userEmail=$this->order->OrderStatus->User->email;
            //$userEmail=$OrderStatus->user->email;
            // $user = User::find($this->order->id);
            // $userEmail = $user->email;

            Notification::route('mail', [
                'ali@example.com' => 'Ali', 
            ])->notify(new OrderMailNotif($OrderStatus));


            $this->emitTo('livewire-toast', 'show', " وضعیت با موفقیت تغییر کرد !");
        }

        $this->emit('reloadOrderTable');
        $this->ChangeOrderStatusModal = false;
    }

    public function render()
    {
        return view('livewire.seller.modals.change-order-status-modal');
    }
}
