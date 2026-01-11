<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ContactFormRequest;
use App\Models\ContactMessage;
use App\Mail\ContactNotification;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller {

    public function index() {
        $title = 'Contact Us';
        return view('contact', compact(
            'title'
        ));
    }

    // 处理表单提交
    public function submit(ContactFormRequest $request)
    {
        try {
            // 保存到数据库
            $message = ContactMessage::create([
                'email' => $request->email,
                'message' => $request->message,
                'ip_address' => $request->ip(),
                // 'user_agent' => $request->header('User-Agent'),
                'firstname' => $request->firstname,
                'lastname' => $request->lastname,
                'mobile' => $request->mobile,
                'enquiry_type' => $request->enquiry_type,
                'nationality' => $request->nationality,
            ]);

            // 发送邮件通知管理员
            // Mail::to('uxff@hotmail.com')
            //     ->send(mailable: new ContactNotification($message));

            return redirect()->route('contact')
                ->with('success', '感谢您的咨询！我们已经收到您的消息，会尽快回复您。');

        } catch (\Exception $e) {
            \Log::error('联系表单提交失败: ' . $e->getMessage());
            
            return back()
                ->withInput()
                ->withErrors(['error' => '提交失败，请稍后重试或直接联系管理员。']);
        }
    }
}