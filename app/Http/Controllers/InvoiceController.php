

namespace App\Http\Controllers;//

use App\Models\Invoice;
use Illuminate\Http\Request;

class InvoiceController extends Controller
{
    public function cancel(Request $request, Invoice $invoice)
    {
        $this->authorize('cancel', $invoice);  

        $invoice->update(['status' => 'cancelled']);  
        return redirect()->back()->with('success', 'Invoice cancelled successfully.');  // إعادة التوجيه مع رسالة نجاح
    }

    public function index(Request $request)
    {
        $status = $request->query('status', 'all');  
        
        $invoices = Invoice::when($status !== 'all', function ($query) use ($status) {
            return $query->where('status', $status);
        })->get();

        return view('invoices.index', compact('invoices', 'status'));  
    }

    public function report()
    {
        $totalInvoices = Invoice::count();  
        $paidInvoices = Invoice::where('status', 'paid')->count(); 
        $unpaidInvoices = Invoice::where('status', 'unpaid')->count();  
        $totalRevenue = Invoice::where('status', 'paid')->sum('amount'); 
        $outstandingAmount = Invoice::where('status', 'unpaid')->sum('amount');  

        return view('invoices.report', compact(
            'totalInvoices', 'paidInvoices', 'unpaidInvoices', 'totalRevenue', 'outstandingAmount'
        ));
    }
}//
