<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ContactFormRequest;
use App\Models\ContactMessage;
use App\Mail\ContactNotification;
use Illuminate\Support\Facades\Mail;
use Resend;
use Illuminate\Support\Facades\Artisan;
use Mailtrap\Helper\ResponseHelper;
use Mailtrap\MailtrapClient;
use Mailtrap\Mime\MailtrapEmail;
use Symfony\Component\Mime\Address;

class ContactController extends Controller {

    public function index() {
        $title = 'Contact Us';
        $menu1 = 'contact';
        return view('contact', compact(
            'title', 'menu1',
        ));
    }

    /**
     * 获取真实IP
     * @return mixed
     */
    public static function getRealIp()
    {
        $ip = $_SERVER['REMOTE_ADDR'];
        if (isset($_SERVER['HTTP_X_FORWARDED_FOR']) && preg_match_all('#\d{1,3}\.\d{1,3}\.\d{1,3}\.\d{1,3}#s', $_SERVER['HTTP_X_FORWARDED_FOR'], $matches)) {
            foreach ($matches[0] AS $xip) {
                if (!preg_match('#^(10|172\.16|192\.168)\.#', $xip)) {
                    $ip = $xip;
                    break;
                }
            }
        } elseif (isset($_SERVER['HTTP_CLIENT_IP']) && preg_match('/^([0-9]{1,3}\.){3}[0-9]{1,3}$/', $_SERVER['HTTP_CLIENT_IP'])) {
            $ip = $_SERVER['HTTP_CLIENT_IP'];
        } elseif (isset($_SERVER['HTTP_CF_CONNECTING_IP']) && preg_match('/^([0-9]{1,3}\.){3}[0-9]{1,3}$/', $_SERVER['HTTP_CF_CONNECTING_IP'])) {
            $ip = $_SERVER['HTTP_CF_CONNECTING_IP'];
        } elseif (isset($_SERVER['HTTP_X_REAL_IP']) && preg_match('/^([0-9]{1,3}\.){3}[0-9]{1,3}$/', $_SERVER['HTTP_X_REAL_IP'])) {
            $ip = $_SERVER['HTTP_X_REAL_IP'];
        }
        return $ip;
    }

    // 处理表单提交
    public function submit(ContactFormRequest $request)
    {
        try {
            // 保存到数据库
            $message = ContactMessage::create([
                'email' => $request->email,
                'message' => $request->message,
                'ip_address' => $this->getRealIp(),
                // 'user_agent' => $request->header('User-Agent'),
                'firstname' => $request->firstname,
                'lastname' => $request->lastname,
                'mobile' => $request->mobile,
                'enquiry_type' => $request->enquiry_type,
                'nationality' => $request->nationality,
            ]);

            // 发送邮件通知管理员 ok
            Mail::to('danny.xu@uscohealth.edu.au')
                ->send(mailable: new ContactNotification($message));

            // $resend = Resend::client(env('RESEND_KEY') ?? 're_3JFBzipF_CMZe6ghnt1w3TMQXtQFgEoDE');

            // $resend->emails->send( [  'from' => 'Acme <onboarding@resend.dev>',
            //     'to' => ['uxff@hotmail.com'],
            //     'subject' => 'hello world, this is mail from resend',
            //     // 'html' => '<strong>it works!</strong>',
            //     'html' =>  (new ContactNotification($message))->render(),
            //   ]);

        // Artisan::command('send-mail', function () {
        //     $email = (new MailtrapEmail())
        //         ->from(new Address('hello@demomailtrap.co', 'Mailtrap Test'))
        //         ->to(new Address('dannyxuweb3@gmail.com'))
        //         ->subject('You are awesome!')
        //         ->category('Integration Test')
        //         ->text('Congrats for sending test email with Mailtrap!')
        //     ;
        
        //     $response = MailtrapClient::initSendingEmails(
        //         apiKey: '<YOUR_API_TOKEN>'
        //     )->send($email);
        
        //     var_dump(ResponseHelper::toArray($response));
        // })->purpose('Send Mail');

            return redirect()->route('contact.index')
                ->with('success', 'Thank you for contacting us! We will get back to you shortly.');

        } catch (\Exception $e) {
            \Log::error('联系表单提交失败: ' . $e->getMessage());
            
            return back()
                ->withInput()
                ->withErrors(['error' => 'Submission failed, please try again later or contact the administrator directly.']);
        }
    }
}