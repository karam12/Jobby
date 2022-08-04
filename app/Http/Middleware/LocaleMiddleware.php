<?php

namespace App\Http\Middleware;

use Illuminate\Http\Request;
use App\Models\Language;
use Arr;
use Cache;
use Closure;
use Redirect;

class LocaleMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        if ($request->method() === 'GET') {
            $segment = $request->segment(1);
            $locales = Cache::get('locales', Language::all()->pluck('code')->toArray());

            // Si le premier segment de la requete n'est pas dans la liste des langues gérées
            // Alors il faut prefixer la route avec la langue de la session ou sinon par la
            // première langue de la table languages (anlgais/en).
            if (!in_array($segment, $locales)) {
                return Redirect::to(
                    join(
                        '/',
                        Arr::prepend(
                            $request->segments(),
                            in_array(session('locale'), $locales) ? session('locale') : $locales[0]
                        )
                    )
                );
            }

            session(['locale' => $segment]);
            app()->setLocale($segment);
        }

        return $next($request);
    }
}
