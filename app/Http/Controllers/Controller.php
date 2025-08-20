<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

use Illuminate\Http\Request;
use App\Models\EthniOrder; // import your order model
use Mpdf\Mpdf;
use Mpdf\Config\ConfigVariables;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function codOrder(Request $request)
    {
        // Get cart data
        $cartKey = auth()->check() ? 'cart_' . auth()->id() : 'cart_' . session()->getId();
        $cart = session()->get($cartKey, []);

        if (!$cart) {
            return redirect()->back()->with('error', 'Your cart is empty!');
        }

        $subtotal = 0;
        foreach($cart as $item) {
            $subtotal += $item['price'] * $item['quantity'];
        }
        $shipping = $subtotal > 1000 ? 0 : 60;
        $tax = $subtotal * 0.05;
        $total = $subtotal + $shipping + $tax;
        $user = auth()->user();

        // ✅ Save each item to DB (ethni_orders)
        foreach ($cart as $id => $item) {
            EthniOrder::create([
                'user_id' => $user ? $user->id : null,
                'seller_id' => $item['seller_id'],   // must be present in your session cart
                'product_id' => $id,
                'product_name' => $item['name'],
                'price' => $item['price'],
                'quantity' => $item['quantity'],
                'subtotal' => $item['price'] * $item['quantity'],
                'payment_method' => 'COD',
                'status' => 'pending',
            ]);
        }

        // ✅ Generate invoice PDF
        $config = new ConfigVariables();
        $defaultFontDirs = $config->getDefaults()['fontDir'];

        $mpdf = new Mpdf([
            'mode' => 'utf-8',
            'format' => 'A4',
            'default_font' => 'solaimanlipi',
            'fontDir' => array_merge([resource_path('fonts')], $defaultFontDirs),
            'fontdata' => [
                'solaimanlipi' => [
                    'R' => 'SolaimanLipi.ttf',
                    'useOTL' => 0xFF,
                    'useKashida' => 75
                ],
                'dejavusans' => [
                    'R' => 'DejaVuSans.ttf', // fallback
                ]
            ]
        ]);

        $html = view('cart.invoice', compact('cart','subtotal','shipping','tax','total','user'))->render();

        $mpdf->WriteHTML($html);
        $filename = 'invoice_'.date('Y-m-d_H-i-s').'.pdf';

        // ✅ Clear cart after saving order + generating invoice
        session()->forget($cartKey);

        return $mpdf->Output($filename, 'D'); // D = download
    }
}
