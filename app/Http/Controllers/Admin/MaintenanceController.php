<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Http\Middleware\PreventRequestsDuringMaintenance;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class MaintenanceController extends Controller
{
    /**
     * Put the application into maintenance mode.
     * Requires token in query string (?token=...) matching config app.maintenance.secret.
     */
    public function down(Request $request): Response
    {
        $token = config('app.maintenance.secret');
        if (! $token || $request->query('token') !== $token) {
            abort(403, 'Invalid or missing token.');
        }

        if (app()->maintenanceMode()->active()) {
            return response('Application is already in maintenance mode.', 200);
        }

        $except = [];
        try {
            $except = app()->make(PreventRequestsDuringMaintenance::class)->getExcludedPaths();
        } catch (\Throwable) {
            // use default
        }

        $secret = config('app.maintenance.secret');

        $payload = [
            'except' => $except,
            'redirect' => null,
            'retry' => null,
            'refresh' => null,
            'secret' => $secret,
            'status' => 503,
            'template' => null,
        ];

        app()->maintenanceMode()->activate($payload);

        app()->get('events')->dispatch(new \Illuminate\Foundation\Events\MaintenanceModeEnabled);

        $message = 'Application is now in maintenance mode.';
        if ($secret) {
            $message .= ' To bring the app back up, visit ' . route('admin.maintenance.up') . '?token=your_secret';
        }

        return response($message, 200);
    }

    /**
     * Bring the application out of maintenance mode.
     * Requires token in query string (?token=...) matching config app.maintenance.secret.
     * This route is excluded from maintenance mode so it remains reachable when down.
     */
    public function up(Request $request): RedirectResponse
    {
        $token = config('app.maintenance.secret');
        if (! $token || $request->query('token') !== $token) {
            abort(403, 'Invalid or missing token.');
        }

        if (! app()->maintenanceMode()->active()) {
            return redirect()->to('/')->with('info', 'Application is not in maintenance mode.');
        }

        app()->maintenanceMode()->deactivate();

        $maintenanceFile = storage_path('framework/maintenance.php');
        if (is_file($maintenanceFile)) {
            @unlink($maintenanceFile);
        }

        return redirect()->to('/')->with('success', 'Application is now live.');
    }
}
