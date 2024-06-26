<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\KegiatanController;
use App\Http\Controllers\PromoController;
use App\Http\Controllers\RecentpostController;
use App\Http\Controllers\TentangController;
use App\Http\Controllers\VisimisiController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\Admin\StaffController as AdminStaffController;
use App\Http\Controllers\StaffController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\TeamController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminTeamMemberController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


//HALAMAN USER
Route::get('/', [UserController::class, 'userview'])->name('user.index');
Route::get('/about', [UserController::class, 'aboutview'])->name('user.about');
Route::get('/faq', [UserController::class, 'faqview'])->name('user.faq');
Route::get('/team', [UserController::class, 'teamview'])->name('user.team');
Route::get('/berita', [BeritaController::class, 'Berita'])->name('user.berita');
Route::get('/detailberita/{id}', [BeritaController::class, 'BeritaShow'])->name('user.detailberita');
Route::get('/detailkegiatan/{id}', [KegiatanController::class, 'KegiatanShow'])->name('user.detailkegiatan');

Route::get('/', [UserController::class, 'userview'])->name('user.index');
Route::get('/about', [UserController::class, 'aboutview'])->name('user.about');
Route::get('/contact', [UserController::class, 'contactview'])->name('user.contact');
Route::get('/faq', [UserController::class, 'faqview'])->name('user.faq');
Route::get('/team', [UserController::class, 'teamview'])->name('user.team');
Route::get('/contact', [UserController::class, 'contactview'])->name('user.contact');
Route::post('/contact', [UserController::class, 'contactstore'])->name('contact.store');

Route::get('/berita', [BeritaController::class, 'Berita'])->name('user.berita');
Route::get('/detailberita/{id}', [BeritaController::class, 'BeritaShow'])->name('user.detailberita');
Route::get('/detailkegiatan/{id}', [KegiatanController::class, 'KegiatanShow'])->name('user.detailkegiatan');

Route::post('/subscribe', [UserController::class, 'subscribe'])->name('subscribe');
Route::post('/komentar', [UserController::class, 'store'])->name('komentar.store');
Route::get('/berita', [BeritaController::class, 'Berita'])->name('user.berita');
Route::get('/detailberita/{id}', [BeritaController::class, 'BeritaShow'])->name('user.detailberita');
Route::get('/detailkegiatan/{id}', [KegiatanController::class, 'KegiatanShow'])->name('user.detailkegiatan');
// Route::post('/subscribe', [UserController::class, 'subscribe'])->name('subscribe');
// Route::post('/komentar', [UserController::class, 'store'])->name('komentar.store');
Route::post('/contact', [UserController::class, 'contactview'])->name('user.contact');
Route::post('/contact', [UserController::class, 'contactstore'])->name('contact.store');






//HALAMAN ADMIN
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {

    Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');
    //CRUD BERITA
    Route::get('/view', [BeritaController::class, 'index'])->name('berita.view');
    Route::get('/berita_add', [BeritaController::class, 'create'])->name('berita.add');
    Route::post('/berita_store', [BeritaController::class, 'store'])->name('berita.store');
    Route::get('/berita_edit/{id}', [BeritaController::class, 'edit'])->name('berita.edit');
    Route::post('/berita_update/{id}', [BeritaController::class, 'update'])->name('berita.update');
    Route::delete('/delete{id}', [BeritaController::class, 'destroy'])->name('berita.delete');

    //CRUD POSTINGAN TERBARU
    Route::get('/recentpost', [RecentpostController::class, 'index'])->name('recentpost.view');
    Route::get('/recentpost_add', [RecentpostController::class, 'create'])->name('recentpost.add');
    Route::post('/recentpost_store', [RecentpostController::class, 'store'])->name('recentpost.store');
    Route::get('/recentpost_edit/{id}', [RecentpostController::class, 'edit'])->name('recentpost.edit');
    Route::post('/recentpost_update/{id}', [RecentpostController::class, 'update'])->name('recentpost.update');
    Route::delete('/deleterecentpost/{id}', [RecentpostController::class, 'destroy'])->name('recentpost.delete');

    //CRUD PROMO
    Route::get('/promo', [PromoController::class, 'index'])->name('promo.view');
    Route::get('/promo_add', [PromoController::class, 'create'])->name('promo.add');
    Route::post('/promo_store', [PromoController::class, 'store'])->name('promo.store');
    Route::get('/promo_edit/{id}', [PromoController::class, 'edit'])->name('promo.edit');
    Route::post('/promo_update/{id}', [PromoController::class, 'update'])->name('promo.update');
    Route::delete('/deletepromo/{id}', [PromoController::class, 'destroy'])->name('promo.delete');

    //CRUD KEGIATAN
    Route::get('/kegiatan', [KegiatanController::class, 'index'])->name('kegiatan.view');
    Route::get('/kegiatan_add', [KegiatanController::class, 'create'])->name('kegiatan.add');
    Route::post('/kegiatan_store', [KegiatanController::class, 'store'])->name('kegiatan.store');
    Route::get('/kegiatan_edit/{id}', [KegiatanController::class, 'edit'])->name('kegiatan.edit');
    Route::post('/kegiatan_update/{id}', [KegiatanController::class, 'update'])->name('kegiatan.update');
    Route::delete('/deletekegiatan/{id}', [KegiatanController::class, 'destroy'])->name('kegiatan.delete');



    //CRUD DATA DIRI
    Route::get('/tentang', [TentangController::class, 'index'])->name('tentang.view');
    Route::get('/tentang_add', [TentangController::class, 'create'])->name('tentang.add');
    Route::post('/tentang_store', [TentangController::class, 'store'])->name('tentang.store');
    Route::get('/tentang_edit/{id}', [TentangController::class, 'edit'])->name('tentang.edit');
    Route::post('/tentang_update/{id}', [TentangController::class, 'update'])->name('tentang.update');
    Route::delete('/deletetentang/{id}', [TentangController::class, 'destroy'])->name('tentang.delete');

    //CRUD VISI-MISI
    Route::get('/visimisi', [VisimisiController::class, 'index'])->name('visimisi.view');
    Route::get('/visimisi_add', [VisimisiController::class, 'create'])->name('visimisi.add');
    Route::post('/visimisi_store', [VisimisiController::class, 'store'])->name('visimisi.store');
    Route::get('/visimisi_edit/{id}', [VisimisiController::class, 'edit'])->name('visimisi.edit');
    Route::post('/visimisi_update/{id}', [VisimisiController::class, 'update'])->name('visimisi.update');
    Route::delete('/deletevisimisi/{id}', [VisimisiController::class, 'destroy'])->name('visimisi.delete');

    //CRUD KARYAWAN
    // Route::get('/staff', [AdminStaffController::class, 'index'])->name('staff.view');
    // Route::get('/staff_add', [AdminStaffController::class, 'create'])->name('staff.add');
    // Route::post('/staff_store', [AdminStaffController::class, 'store'])->name('staff.store');
    // Route::get('/staff_edit/{id}', [AdminStaffController::class, 'edit'])->name('staff.edit');
    // Route::post('/staff_update/{id}', [AdminStaffController::class, 'update'])->name('staff.update');
    // Route::delete('/deletestaff/{id}', [AdminStaffController::class, 'destroy'])->name('staff.delete');

    Route::get('/aboutview', [AboutController::class, 'index'])->name('about.view');
    Route::get('/about_add', [AboutController::class, 'create'])->name('about.add');
    Route::post('/about_store', [AboutController::class, 'store'])->name('about.store');
    Route::get('/about_edit/{id}', [AboutController::class, 'edit'])->name('about.edit');
    Route::post('/about_update/{id}', [AboutController::class, 'update'])->name('about.update');
    Route::get('/aboutdelete/{id}', [AboutController::class, 'destroy'])->name('about.delete');


    Route::get('/teamview', [TeamController::class, 'index'])->name('team.view');
    Route::get('/team_add', [TeamController::class, 'create'])->name('team.add');
    Route::post('/team_store', [TeamController::class, 'store'])->name('team.store');
    Route::get('/team_edit/{id}', [TeamController::class, 'edit'])->name('team.edit');
    Route::post('/team_update/{id}', [TeamController::class, 'update'])->name('team.update');
    Route::get('/teamdelete/{id}', [TeamController::class, 'destroy'])->name('team.delete');


    Route::get('/admin/contact', [ContactController::class, 'index'])->name('contact.view');
    Route::get('/admin/contact/{contact}', [ContactController::class, 'show'])->name('contact.show');


    // Route::prefix('admin')->name('admin.')->group(function () {
    //     Route::resource('staff', App\Http\Controllers\Admin\StaffController::class);
    // });

    // Route::get('/staff', [App\Http\Controllers\User\StaffController::class, 'index'])->name('user.staff.index');

});




Route::get('/auth/logout', [AuthController::class, 'logout'])->name('admin.logout')->middleware('auth');
