<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [HomeController::class, 'home']);

// About Us
Route::get('/company-overview.html', function () { return view('company-overview'); });
Route::get('/group-companies.html', function () { return view('group-companies'); });
Route::get('/our-values.html', function () { return view('our-values'); });
Route::get('/history.html', function () { return view('history'); });
Route::get('/board-of-director.html', function () { return view('board-of-director'); });
Route::get('/management.html', [HomeController::class, 'management']);

Route::get('/our-clients.html', function () { return view('our-clients'); });
Route::get('/tech-inovation.html', function () { return view('tech-inovation'); });
Route::get('/csr.html', function () { return view('csr'); });
Route::get('/Achievements.html', [HomeController::class, 'achievements']);


Route::get('/commodity.html', function () { return view('commodity'); });
Route::get('/agri-finance.html', function () { return view('agri-finance'); });
Route::get('/collateral-management.html', function () { return view('collateral-management'); });
Route::get('/procurement.html', function () { return view('procurement'); });
Route::get('/risk-management.html', function () { return view('risk-management'); });
Route::get('/analytical-services.html', function () { return view('analytical-services'); });
Route::get('/analytical-central-laboratory.html', function () { return view('analytical-central-laboratory'); });
Route::get('/market-research.html', function () { return view('market-research'); });
Route::get('/other-allied-services.html', function () { return view('other-allied-services'); });

Route::get('/locate.html', function () { return view('locate'); });
// Route::get('/slcm-media.html', function () { return view('slcm-media'); });
Route::get('/media.html', [HomeController::class, 'media']);

Route::get('/life.html', [HomeController::class, 'life']);
Route::any('/vacancies.html', [HomeController::class, 'vacancies']);
Route::get('/wdra.html', [HomeController::class, 'wdra']);
Route::get('/icex.html', [HomeController::class, 'icex']);

Route::get('/digitised-enterprise.html', function () { return view('digitised-enterprise'); });
Route::get('/investors.html', function () { return view('investors'); });

Route::get('/slcm-myan.html', function () { return view('slcm-myan'); });
Route::get('/slcm-commodity.html', function () { return view('slcm-commodity'); });
Route::get('/slcm-collateral.html', function () { return view('slcm-collateral'); });
Route::get('/slcm-contact.html', function () { return view('slcm-contact'); });

Route::get('/myan-slcm-myan.html', function () { return view('myan-slcm-myan'); });
Route::get('/myan-slcm-commodity.html', function () { return view('myan-slcm-commodity'); });
Route::get('/myan-slcm-collateral.html', function () { return view('myan-slcm-collateral'); });
Route::get('/myan-slcm-contact.html', function () { return view('myan-slcm-contact'); });

Route::get('/contact.html', function () { return view('contact'); });
Route::post('/contact.html', [HomeController::class, 'contact']);

Route::get('/mediacontact.html', function () { return view('mediacontact'); });
Route::get('/lab-services.html', function () { return view('lab-services'); });
Route::get('/customer-support.html', function () { return view('customer-support'); });

Route::get('/downloads.html', [HomeController::class, 'downloads']);
Route::post('/newsletter', [HomeController::class, 'newsletter']);



Route::get('/ai-ml-based-quality-check-app.html', function () { return view('ai-ml-based-quality-check-app'); });
Route::get('/digitally-unified-agri-value-chain-app.html', function () { return view('digitally-unified-agri-value-chain-app'); });
Route::get('/mobility-app-and-midware.html', function () { return view('mobility-app-and-midware'); });
Route::get('/agri-suraksha.html', function () { return view('agri-suraksha'); });
Route::get('/customized-solutions-for-agri-industry.html', function () { return view('customized-solutions-for-agri-industry'); });
Route::get('/call-center.html', function () { return view('call-center'); });
Route::get('/privacy-policy.html', function () { return view('privacy'); });
Route::get('/disclaimer.html', function () { return view('disclaimer'); });
Route::get('/sitemap.html', function () { return view('sitemap'); });


