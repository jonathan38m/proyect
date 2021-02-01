<?php

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

Route::get('/', 'ArticleController@viewArticle')->name('home');
Route::post('/', 'BookingController@bookingConfirmed')->name('booking.confirm');

/*---------- COURSES -----------------*/

Route::get('/learn-spanish-immersion-courses.html', 'ArticleController@viewArticle')->name('item-2');

Route::get('/online-spanish-classes', 'ArticleController@viewArticle')->name('item-2-111');

Route::get('/learn-spanish/methodology-spanish-language', 'ArticleController@viewArticle')->name('item-2-1');

Route::get('/learn-spanish/academic-level-placement-spanish-classes', 'ArticleController@viewArticle')->name('item-2-2');

Route::get('/learn-spanish/free-spanish-level-test-online', 'QuestionController@create')->name('item-2-3');

Route::get('/learn-spanish-immersion-courses-groups.html', 'ArticleController@viewArticle')->name('item-2-4');

Route::get('/learn-spanish-immersion-courses-private.html', 'ArticleController@viewArticle')->name('item-2-5');

Route::get('/learn-spanish/group-personalized-spanish-classes', 'ArticleController@viewArticle')->name('item-2-6');

Route::get('/learn-spanish-immersion-courses-combi.html', 'ArticleController@viewArticle')->name('item-2-7');

Route::get('/learn-spanish-immersion-dele-exam.html', 'ArticleController@viewArticle')->name('item-2-8');

Route::get('/learn-spanish-immersion-courses-university-groups.html', 'ArticleController@viewArticle')->name('item-2-9');

Route::get('/learn-spanish-immersion-courses-travelling.html', 'ArticleController@viewArticle')->name('item-2-10');

Route::get('/learn-spanish-immersion-courses-for-professionals.html', 'ArticleController@viewArticle')->name('item-2-11');

/*  ------------------------ DESTINATIONS---------------- */

Route::get('/destinations.html', 'ArticleController@viewArticle')->name('destinations');

Route::get('/learn-spanish-quito.html', 'ArticleController@viewArticle')->name('learn-quito');

Route::get('/learn-spanish-otavalo.html', 'ArticleController@viewArticle')->name('learn-otavalo');

Route::get('/learn-spanish-amazon-jungle.html', 'ArticleController@viewArticle')->name('learn-amazon');

Route::get('/learn-spanish-galapagos-islands.html', 'ArticleController@viewArticle')->name('learn-galapagos');

Route::get('/learn-spanish-indigenous-community.html', 'ArticleController@viewArticle')->name('learn-shuar-community');

Route::get('/spanish-program/learn-spanish-travel-south-america', 'ArticleController@viewArticle')->name('learn-south-america');

/* ---------- TRAVELLING CLASSROOM --------------------------  */

Route::get('/learn-spanish-travelling.html', 'ArticleController@viewArticle')->name('traveling-classroom');

Route::get('/learn-spanish-travelling-amazon-andes.html', 'ArticleController@viewArticle')->name('andes-amazon-7');

Route::get('/learn-spanish-travelling-amazon-jungle.html', 'ArticleController@viewArticle')->name('andes-amazon-12');

Route::get('/learn-spanish-travelling-andes.html', 'ArticleController@viewArticle')->name('walking-andes-12');

Route::get('/learn-spanish-travelling-ecuador.html', 'ArticleController@viewArticle')->name('experience-ecuador-16');

Route::get('/learn-spanish-travelling-and-exploring-ecuador.html', 'ArticleController@viewArticle')->name('travelling-explore');

Route::get('/learn-spanish-travelling-galapagos.html', 'ArticleController@viewArticle')->name('secret-evolution');

/* --------------------------- VOLUNTEERING ------------------------*/

Route::get('/learn-spanish-volunteering.html', 'ArticleController@viewArticle')->name('volunteering');

Route::get('/learn-spanish-volunteering-process.html', 'ArticleController@viewArticle')->name('aplication-volunteer');

Route::post('/volunteer', 'ArticleController@volunteer');

/* -------------------------- ABOUT US ----------------------------  */

Route::get('/learn-spanish-our-school.html', 'ArticleController@viewArticle')->name('about-us');

Route::get('/learn-spanish-south-america/ise-instituto-superior-espanol', 'ArticleController@viewArticle')->name('welcome-ise');

Route::get('/our-team-ise.html', 'ArticleController@viewArticle')->name('ourteam');

Route::get('/learn-spanish-south-america/spanish-classes-locations-ecuador-latin-america', 'ArticleController@viewArticle')->name('ourfacilities');

Route::get('/learn-spanish-jobs.html', 'ArticleController@viewArticle')->name('work-ise');

//Route::get('/learn-spanish-what-students-say.html', 'ArticleController@getPageComments')->name('students-reviews');
Route::get('/learn-spanish-what-students-say.html', function () {
    return redirect()->route('commentaries.index');
})->name('students-reviews');

Route::get('/learn-spanish-faq.html', 'ArticleController@viewArticle')->name('faqs');

/* ----------------------------------PRICES---------------------------*/

Route::get('/learn-spanish-prices.html', 'ArticleController@viewArticle')->name('prices');

Route::get('/spanish-immersion-prices/prices-learn-spanish-quito-otavalo', 'ArticleController@viewArticle')->name('price-quito-otavalo');

Route::get('/learn-spanish-amazon-prices.html', 'ArticleController@viewArticle')->name('price-amazon');

Route::get('/learn-spanish-galapagos-santa-cruz-prices.html', 'ArticleController@viewArticle')->name('price-galapagos');

Route::get('/spanish-immersion-prices/prices-learn-spanish-indigenous-community', 'ArticleController@viewArticle')->name('price-communities');

Route::get('/learn-spanish-travelling-classroom-prices.html', 'ArticleController@viewArticle')->name('price-travelling');

Route::get('/spanish-immersion-prices/prices-spanish-combined-destinations', 'ArticleController@viewArticle')->name('price-packages');

Route::get('/spanish-immersion-prices/prices-volunteer-ecuador-latin-america', 'ArticleController@viewArticle')->name('price-volunteer');

/*--------------------------   BOOKING ---------------------------*/

//Route::get('/learn-spanish-booking.html', 'ArticleController@viewArticle')->name('booking');

Route::get('/learn-spanish-booking.html', 'BookingController@create')->name('booking');

Route::get('/contact-us', 'ArticleController@viewArticle')->name('contact');

Route::get('/student-info', 'BookingController@getViewStudenInfo')->name('student-info');

Route::get('/booking/checkout', 'BookingController@checkout')->name('booking.checkout');

/***************************************************************************************************/
/***************************************LOCATION ***************************************************/
/***************************************************************************************************/

Route::get('countries', 'CountryController@index')->name('load.all.countries');

Route::get('/booking', 'BookingController@create')->name('booking.create');
Route::post('/booking', 'BookingController@store')->name('booking.store');

Route::post('/booking-confirmed', 'BookingController@bookingConfirmed')->name('booking.confirm');

Route::post('/booking-status', 'BookingController@bookingStatus')->name('booking.process');

Route::get('/validateLocationBooking', 'LocationController@validateBooking');
Route::post('/validateLocationBooking', 'LocationController@validateBooking');

Route::post('locationsIndex', 'LocationController@indexLocations')->name('load.all.locations');
Route::post('locationsValidate', 'LocationController@validateLocations')->name('validate.locations');

Route::post('coursesLocation', 'LocationController@courseLocation')->name('load.selected.courses');
Route::post('coursesValidate', 'CourseController@validateCourses')->name('validate.courses');

Route::post('coursesOptions', 'CourseController@coursesOptions')->name('load.selected.options');
Route::post('optionsValidate', 'OptionController@validateOptions')->name('validate.options');

Route::post('optionLocationCourse', 'OptionController@optionLocationCourse')->name('load.selected.options.course.location');

Route::post('validateAccommodation', 'BookingController@validateAccommodation')->name('validate.accommodation');

Route::post('validate-billing-information', 'BookingController@billingInformation')->name('validate.billing.information');
Route::post('validate-airport-information', 'BookingController@airportInformation')->name('validate.airport.information');

Route::post('cartSummary', 'OptionController@cartSummary')->name('load.option.summary');

Route::post('student-infos', 'StudentInfoController@store')->name('student-infos.store');
Route::post('student-infos/basic-information', 'StudentInfoController@basicInformation')->name('student-infos.basic-information');

Route::get('/thanks-information', function () {

    $article = App\Article::where('alias', '/')->first();

    $mensaje = session('message');
    if (empty($mensaje)) {
        return Redirect::to('/');
    }

    return view('emails.thanks', ['article' => $article, 'thanks' => 'We thank you very much for contacting the Instituto Superior de Español. We are glad to answer your e-mail and you will be receiving a response in the next 48 hours.']);
});

Route::get('/thanks-booking', function () {

    $article = App\Article::where('alias', '/')->first();

    $mensaje = session('message');
    if (empty($mensaje)) {
        return Redirect::to('/');
    }

    return view('emails.thanks', ['article' => $article, 'thanks' => 'Instituto Superior de Español thanks you for your Enrollment with us. We will organize everything and will send your complete confirmation in the next 48 hours.']);
});

Route::get('/thanks-volunteer', function () {

    $article = App\Article::where('alias', '/')->first();

    return view('emails.thanks', ['article' => $article, 'thanks' => 'Instituto Superior de Español thanks you for your interest in our volunteer / internship programs. We will send you our answers in the next 48 hours.']);
});

Route::get('/online-evaluation', function () {

    $article = App\Article::where('alias', '/')->first();

    return view('emails.thanks', ['article' => $article, 'thanks' => 'The Academic Department of the Instituto Superior de Español thanks you for filling our test online. We will check your answers and will send you a personal feedback about them and about your level of Spanish in the next 72 hours.']);
});
/*
Route::get('/thanks-feedback', function () {
$article = App\Article::where('alias','/')->first();
return view('emails.thanks',['article' => $article, 'thanks' =>http://localhost:8000/informationForm 'The team of the Instituto Superior de Español thanks you for your participation in our programs and for providing your opinion about your experience with us.  We wish all the best to you and expect you will recommend our Spanish Institute to your people who will know will come to Ecuador!']);
});
 */

/*------------------FEEDBACK FORM------------------*/

Route::resource('commentaries', 'CommentaryController');

//-------------------------------------------------------

Route::post('/bookingInformation', 'ArticleController@booking');

Route::post('/booking-pay', 'ArticleController@bookingPay')->name('booking-pay-send');

Route::post('/informationForm', 'ArticleController@information')->name('informationform');

Route::post('/testForm', 'QuestionController@store')->name('test-online-form');

//Route::view('/hrflag', 'developer.hrflag', ['articles' => App\Article::all() ]);

Route::post('/hrflag', 'ArticleController@hrflag')->name('hrflag-save');

Route::post('/hrflag', 'ArticleController@promotion')->name('promotion');

Route::post('/images-gallery', 'ArticleController@imagesGallery')->name('images-galery');

//Route::view('/sitemap', 'developer.sitemap', ['articles' => App\Article::all() ]);

Auth::routes(['register' => false]);

//Route::get('/home', 'HomeController@index')->name('home');
