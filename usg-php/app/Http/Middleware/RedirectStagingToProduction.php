<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class RedirectStagingToProduction
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // 定義測試域名（你可以從 .env 讀取，或硬編碼；這裡用你的例子）
        $stagingDomain = 'usg-u4amt.kinsta.app'; // 如果有多個測試域名，可用陣列檢查
        $productionDomain = 'unityskills.com.au'; // 正式域名

        // 檢查當前請求的主機名
        if ($request->getHost() === $stagingDomain) {
            // 建構正式域名的完整 URL（包含路徑 + 查詢參數）
            $redirectUrl = 'https://' . $productionDomain . $request->getRequestUri();

            // 執行 301 永久重定向
            return redirect($redirectUrl, 301);
        }

        // 如果不是測試域名，繼續正常請求
        return $next($request);
    }
}
