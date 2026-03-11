<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Anomaly;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class AnomalyController extends Controller
{
    /**
     * Paginated list of all flagged anomalies (unresolved first).
     */
    public function index(Request $request): View
    {
        $query = Anomaly::latest('detected_at');

        if ($request->filled('type')) {
            $query->where('type', $request->type);
        }

        if ($request->input('resolved') === '1') {
            $query->where('resolved', true);
        } elseif ($request->input('resolved') === '0') {
            $query->where('resolved', false);
        }

        $anomalies = $query->paginate(30)->withQueryString();
        $unresolvedCount = Anomaly::unresolved()->count();

        return view('admin.anomalies.index', compact('anomalies', 'unresolvedCount'));
    }

    /**
     * Mark an anomaly as resolved.
     */
    public function resolve(Anomaly $anomaly): RedirectResponse
    {
        $anomaly->update([
            'resolved' => true,
            'resolved_at' => now(),
        ]);

        return back()->with('success', 'Anomali #'.$anomaly->id.' ditandai selesai.');
    }

    /**
     * Mark all unresolved anomalies as resolved at once.
     */
    public function resolveAll(): RedirectResponse
    {
        $count = Anomaly::unresolved()->count();
        Anomaly::unresolved()->update([
            'resolved' => true,
            'resolved_at' => now(),
        ]);

        return back()->with('success', "{$count} anomali ditandai selesai.");
    }
}
