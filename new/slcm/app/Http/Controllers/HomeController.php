<?php

namespace App\Http\Controllers;

use App\Achievements;
use App\Download;
use App\IcexStock;
use App\Life;
use App\Management;
use App\News;
use App\Vacancies;
use App\WdraStock;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class HomeController extends Controller
{

    public function __construct()
    {

    }

    public function home(Request $request)
    {
        $news = News::limit(10)->orderBy('date', 'desc')->select(['name', 'date', 'file', 'link'])->get();
        return view('home', compact('news'));
    }

    public function achievements(Request $request)
    {
        $result = Achievements::orderBy('date','desc')->get();
        return view('Achievements', compact('result'));
    }

    public function life(Request $request)
    {
        $result = Life::get()->groupBy('section');
        return view('life', compact('result'));
    }

    public function vacancies(Request $request)
    {
        $result = Vacancies::get();
        if ($request->isMethod('post')) {
            $data = "<h3>We have received the following form.</h3><table border=1 cellpadding=10 cellspacing=0>";
            foreach ($request->except(["_token", "file"]) as $key => $var) {
                $label = ucfirst($key);
                $value = nl2br($var);
                $data .= "<tr><td>$label</td><td>$value</td></tr>";
            }
            $data .= "</table>";
            Mail::html($data, function ($msg) use ($request) {
                $msg->to('hr@slc-india.com')->subject("Career Form")
                    ->attach($request->file->getRealPath(), [
                        'as' => $request->file->getClientOriginalName(),
                        'mime' => $request->file->getMimeType(),
                    ]);
            });
            return redirect()->back()->with('success', 'Thank you for contacting us we will get back to you shortly!');
        }

        return view('vacancies', compact('result'));
    }

    public function wdra(Request $request)
    {
        $result = WdraStock::get();
        return view('wdra', compact('result'));
    }

    public function icex(Request $request)
    {
        $result = IcexStock::get();
        return view('icex', compact('result'));
    }

    public function media(Request $request)
    {
        $requested_year = $request->year ?? date('Y');
        $result = News::select(['year','month'])->groupBy('year','month')->orderBy('year','desc')->orderByRaw("FIELD(month , 'January','February','March','April','May','June','July','August','September','October','November','December') ASC")->get()->groupBy(['year']);
        $news = News::where('year',$requested_year)->orderBy('date','desc')->orderByRaw("FIELD(month , 'January','February','March','April','May','June','July','August','September','October','November','December') ASC")->get()->groupBy('month');
        $recent = News::where('year',date('Y'))->inRandomOrder()->take(6)->get();

        return view('media', compact('result', 'news', 'requested_year', 'recent'));
    }

    public function downloads(Request $request)
    {
        $result = Download::get()->groupBy('type');
        return view('downloads', compact('result'));
    }

    public function management(Request $request)
    {
        $result = Management::get();
        return view('management', compact('result'));
    }

    public function contact(Request $request)
    {
        $data = "<h3>We have received the following form.</h3><table border=1 cellpadding=10 cellspacing=0>";
        foreach ($request->except("_token") as $key => $var) {
            $label = ucfirst($key);
            $value = nl2br($var);
            $data .= "<tr><td>$label</td><td>$value</td></tr>";
        }
        $data .= "</table>";
        Mail::html($data, function ($msg) use ($request) {
            $toEmail = env('MAIL_TO_ADDRESS');
            switch ($request->subject) {
                case 'Agri Warehousing Management':
                    $toEmail = 'collateral.m@slc-india.com';
                    break;
                case 'Collateral Management':
                    $toEmail = 'collateral.m@slc-india.com';
                    break;
                case 'Procurement':
                    $toEmail = 'procurement@slc-india.com';
                    break;
                case 'Agri Financing':
                    $toEmail = 'agri.f@slc-india.com';
                    break;
                case 'Media Queries':
                    $toEmail = 'media.queries@slc-india.com';
                    break;
                case 'Lab Services':
                    $toEmail = 'lab@slc-india.com';
                    break;
                case 'The Central Analytical Agri Laboratory':
                    $toEmail = 'lab@slc-india.com';
                    break;
                case 'Customer Support':
                    $toEmail = 'cs@slc-india.com';
                    break;
                case 'Risk Mitigation':
                    $toEmail = 'risk@slc-india.com';
                    break;
                case 'Human Resource':
                    $toEmail = 'hr@slc-india.com';
                    break;
                default:
                    $toEmail = env('MAIL_TO_ADDRESS');
                    break;
            }

            $msg->to($toEmail)->subject("Contact us - " . $request->subject);
        });
        return true;
    }

    public function newsletter(Request $request)
    {
        $data = "<h3>We have received the following newsletter email.</h3><table border=1 cellpadding=10 cellspacing=0>";
        foreach ($request->except("_token") as $key => $var) {
            $label = ucfirst($key);
            $value = nl2br($var);
            $data .= "<tr><td>$label</td><td>$value</td></tr>";
        }
        $data .= "</table>";
        Mail::html($data, function ($msg) use ($request) {
            $toEmail = env('MAIL_TO_ADDRESS');
            $msg->to($toEmail)->subject("Newsletter - SLCM");
        });
        return true;
    }

}
