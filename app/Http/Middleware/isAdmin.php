<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Auth\Access\Gate;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Support\Facades\Log;
use Symfony\Component\HttpKernel\Exception\HttpException;

class isAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next, $username)
    {
        // Validasi parameter $username
        if (!is_string($username) || empty(trim($username))) {
            throw new \InvalidArgumentException('Parameter $username tidak valid');
        }

        // Cek apakah user telah login dan username-nya sesuai dengan yang ditentukan
<<<<<<< HEAD
        if (!auth()->check() || (!auth()->user()->role === 'admin' && !auth()->user()->role === 'creator')) {
=======
        if (!auth()->check() || auth()->user()->roles !== 'admin') {
>>>>>>> origin/otorisasi
            // Tangani kondisi di mana akses ditolak dengan menggunakan HTTP Exception
            abort(403, 'Akses ditolak');
        }


<<<<<<< HEAD

=======
>>>>>>> origin/otorisasi
        // Catat log akses yang ditolak
        Log::warning('Akses ditolak untuk user: ' . auth()->user()->username);

        return $next($request);
    }
}