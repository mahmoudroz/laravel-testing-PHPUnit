<?php

namespace App\Http\Middleware;

use App\Traits\HandleApiJsonResponseTrait;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class AssignGuard
{
    use HandleApiJsonResponseTrait;

    public function handle(Request $request, Closure $next, $guardType = 'api')
    {
        if ($guardType != null) {
            auth()->shouldUse($guardType);
        }
        $token = $request->header('token');
        $request->headers->set('token', (string) $token, true);
        $request->headers->set('Authorization', 'Bearer ' . $token, true);

        if (auth($guardType)->check() ) {

            if( auth($guardType)->user()->status == 1){

                return $next($request);

            }else if( auth($guardType)->user()->status == 0 ){
                return $this->error( __('api.not Active') );
            }else if( auth($guardType)->user()->status == -1 ){
                return $this->error( __('api.account blocked') );
            }else if( auth($guardType)->user()->status == -2 ){
                return $this->error( __('api.account deleted') );
            }
        } else {
            return $this->error( __('api.Unauthorized') , 401);
        }
    }
}
