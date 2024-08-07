<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\Media\FotoController;
use App\Http\Controllers\Layanan\SopController;
use App\Http\Controllers\Media\VideoController;
use App\Http\Controllers\Tentang\HakController;
use App\Http\Controllers\Artikel\PostController;
use App\Http\Controllers\Layanan\EtikController;
use App\Http\Controllers\Media\BannerController;
use App\Http\Controllers\Tentang\TeamController;
use App\Http\Controllers\Tentang\VisiController;
use App\Http\Controllers\Informasi\DipController;
use App\Http\Controllers\Landing\MediaController;
use App\Http\Controllers\Layanan\HukumController;
use App\Http\Controllers\Media\GraphicController;
use App\Http\Controllers\Media\PartnerController;
use App\Http\Controllers\Tentang\DasarController;
use App\Http\Controllers\Tentang\WaktuController;
use App\Http\Controllers\Layanan\AgendaController;
use App\Http\Controllers\Layanan\SaranaController;
use App\Http\Controllers\Tentang\FungsiController;
use App\Http\Controllers\Tentang\ProfilController;
use App\Http\Controllers\Landing\ArtikelController;
use App\Http\Controllers\Landing\BerandaController;
use App\Http\Controllers\Landing\LayananController;
use App\Http\Controllers\Landing\TentangController;
use App\Http\Controllers\Layanan\FileSopController;
use App\Http\Controllers\Tentang\StandarController;
use App\Http\Controllers\Artikel\KategoriController;
use App\Http\Controllers\Informasi\KatDipController;
use App\Http\Controllers\Tentang\DefinisiController;
use App\Http\Controllers\Tentang\MaklumatController;
use App\Http\Controllers\Tentang\StrukturController;
use App\Http\Controllers\Informasi\LaporanController;
use App\Http\Controllers\Informasi\NotulenController;
use App\Http\Controllers\Landing\InformasiController;
use App\Http\Controllers\Media\PenghargaanController;
use App\Http\Controllers\Tentang\KeputusanController;
use App\Http\Controllers\Informasi\AnggaranController;
use App\Http\Controllers\Informasi\SengketaController;
use App\Http\Controllers\Informasi\PengadaanController;
use App\Http\Controllers\Informasi\PengajuanController;
use App\Http\Controllers\Informasi\PermohonanController;
use App\Http\Controllers\Informasi\FileLaporanController;
use App\Http\Controllers\Informasi\TataSengketaController;
use App\Http\Controllers\Informasi\FormPengajuanController;
use App\Http\Controllers\Informasi\TataKeberatanController;
use App\Http\Controllers\Informasi\FormPermohonanController;
use App\Http\Controllers\Informasi\TataPermohonanController;


Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

//--FRONTEND--//
Route::get('/beranda', [BerandaController::class, 'beranda'])->name('beranda');
Route::get('/profil', [TentangController::class, 'profils'])->name('profil');
Route::get('/tugas-pokok-dan-fungsi', [TentangController::class, 'fungsis'])->name('fungsi');
Route::get('/visi-misi', [TentangController::class, 'visis'])->name('visi');
Route::get('/dasar-hukum', [TentangController::class, 'dasars'])->name('dasar');
Route::get('/maklumat-pelayanan', [LayananController::class, 'maklumats'])->name('maklumat');
Route::get('/standar-pelayanan', [LayananController::class, 'standars'])->name('standar');
Route::get('/hak-atas-informasi', [LayananController::class, 'haks'])->name('hak');
Route::get('/waktu-pelayanan', [LayananController::class, 'waktus'])->name('waktu');
Route::get('/struktur-organisasi', [TentangController::class, 'strukturs'])->name('struktur');
Route::get('/keputusan', [TentangController::class, 'keputusans'])->name('keputusan');
Route::get('/keputusan/{slug}', [TentangController::class, 'detailsKeputusan'])->name('detail.keputusan');
Route::get('/berita', [ArtikelController::class, 'semuaBerita'])->name('semua.berita');
Route::get('/berita/{slug}', [ArtikelController::class, 'detailBerita'])->name('detail.berita');
Route::get('/infografis', [MediaController::class, 'semuaGrafis'])->name('semua.grafis');
Route::get('/kode-etik', [LayananController ::class, 'etiks'])->name('etik');
Route::get('/banner', [MediaController::class, 'banners'])->name('front.banner');
Route::get('/sarana-prasarana', [LayananController::class, 'saranas'])->name('sarana');
Route::get('/tim-ppid', [TentangController::class, 'frontTeams'])->name('front.team');
Route::get('/tim-ppid', [TentangController::class, 'semuaTeams'])->name('semua.team');
Route::get('/tim-ppid/{slug}', [TentangController::class, 'detailTeams'])->name('detail.team');
Route::get('/waktu-layanan', [LayananController::class, 'waktus'])->name('waktu');
Route::get('/sop', [LayananController::class, 'sopIndex'])->name('front.sop.index');
Route::get('/sop/list/{slug}', [LayananController::class, 'sopList'])->name('list.sop.index');
Route::get('/sop/detail/{slug}', [LayananController::class, 'sopDetail'])->name('detail.sop.index');
Route::get('/anggaran-kegiatan', [InformasiController::class, 'anggarans'])->name('anggaran');
Route::get('/anggaran-kegiatan/{slug}', [InformasiController::class, 'detailAnggarans'])->name('detail.anggaran');
Route::get('/definisi-informasi', [InformasiController::class, 'definisis'])->name('definisi');
Route::get('/notulen', [InformasiController::class, 'notulens'])->name('notulen');
Route::get('tata-cara-permohonan-informasi', [InformasiController::class , 'tatapermohonans'])->name('tata.permohonan');
Route::get('tata-cara-pengajuan-keberatan', [InformasiController::class , 'tatalkeberatans'])->name('tata.keberatan');
Route::get('tata-cara-pengajuan-sengketa', [InformasiController::class , 'tatasengketas'])->name('tata.sengketa');
Route::get('/notulen/{slug}', [InformasiController::class, 'detailNotulens'])->name('detail.notulen');
Route::get('/informasi-serta-merta', [InformasiController::class, 'sertamerta'])->name('sertamerta.index');
Route::get('/informasi-serta-merta/{slug}', [InformasiController::class, 'sertamertaDetail'])->name('sertamerta.detail');
Route::get('/informasi-setiap-saat', [InformasiController::class, 'setiapsaat'])->name('setiapsaat.index');
Route::get('/informasi-setiap-saat/{slug}', [InformasiController::class, 'setiapsaatDetail'])->name('setiapsaat.detail');
Route::get('/informasi-berkala', [InformasiController::class, 'berkala'])->name('berkala.index');
Route::get('/informasi-berkala/{slug}', [InformasiController::class, 'berkalaDetail'])->name('berkala.detail');
Route::get('/informasi-dikecualikan', [InformasiController::class, 'kecualikan'])->name('kecualikan.index');
Route::get('/informasi-dikecualikan/{slug}', [InformasiController::class, 'kecualikanDetail'])->name('kecualikan.detail');
Route::get('/form-pengajuan-keberatan-informasi', [InformasiController::class, 'requestPengajuans'])->name('request.pengajuan');
Route::post('/form-pengajuan-keberatan-informasi', [InformasiController::class, 'formPengajuans'])->name('form.pengajuan');
Route::get('/form-permohonan-informasi-publik', [InformasiController::class, 'requestPermohonans'])->name('request.permohonan');
Route::get('/form-permohonan-informasi-publik', [InformasiController::class, 'formPermohonans'])->name('form.permohonan');
Route::get('/pengadaan', [InformasiController::class, 'pengadaans'])->name('pengadaan');
Route::get('/pengadaan/{slug}', [InformasiController::class, 'detailPengadaans'])->name('detail.pengadaan');
Route::get('/produk-hukum', [LayananController::class, 'hukums'])->name('hukum');
Route::get('/produk-hukum/{slug}', [LayananController::class, 'detailHukums'])->name('detail.hukum');


//--END FRONTEND--//

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//--BACKEND--//
Route::middleware(['auth', 'roles:admin'])->group(function () {

    Route::prefix('admin')->group(function () {

        //Dashboard
        Route::get('/dashboard', [HomeController::class, 'index'])->name('home.admin');

        //Tentang
        Route::resource('/profil', ProfilController::class);
        Route::resource('/visi', VisiController::class);
        Route::resource('/struktur', StrukturController::class);
        Route::resource('/dasar', DasarController::class);
        Route::resource('/maklumat', MaklumatController::class);
        Route::resource('/standar', StandarController::class);
        Route::resource('/waktu', WaktuController::class);
        Route::resource('/keputusan', KeputusanController::class);
        Route::resource('/hak', HakController::class);
        Route::resource('/definisi', DefinisiController::class);
        Route::resource('/team', TeamController::class);
        Route::resource('/fungsi', FungsiController::class);

        //Layanan
        Route::resource('/etik', EtikController::class);
        Route::resource('/sarana', SaranaController::class);
        Route::resource('/hukum', HukumController::class);
        Route::resource('/agenda', AgendaController::class);

        Route::resource('/sop', SopController::class);
        Route::get('/filesop/{sop}', [FileSopController::class, 'index'])->name('filesop.index');
        Route::get('/filesop/create/{sop}', [FileSopController::class, 'create'])->name('filesop.create');
        Route::post('/filesop/{sop}', [FileSopController::class, 'store'])->name('filesop.store');
        Route::get('/filesop/{sop}/edit/{filesop}', [FileSopController::class, 'edit'])->name('filesop.edit');
        Route::put('/filesop/{sop}/{filesop}', [FileSopController::class, 'update'])->name('filesop.update');
        Route::delete('/filesop/{sop}/{filesop}', [FileSopController::class, 'destroy'])->name('filesop.destroy');

        //Artikel
        Route::resource('/kategori', KategoriController::class);
        Route::resource('/post', PostController::class);

        //Informasi
        Route::resource('/permohonan', PermohonanController::class);
        Route::resource('/pengajuan', PengajuanController::class);
        Route::resource('/sengketa', SengketaController::class);
        Route::resource('/formpermohonan', FormPermohonanController::class);
        Route::resource('/formpengajuan', FormPengajuanController::class);
        Route::resource('/katdip', KatDipController::class);
        Route::resource('/dip', DipController::class);
        Route::resource('/anggaran', AnggaranController::class);
        Route::resource('/notulen', NotulenController::class);
        Route::resource('/pengadaan', PengadaanController::class);
        Route::resource('/penghargaan', PenghargaanController::class);
        Route::resource('/tatapermohonan', TataPermohonanController::class);
        Route::resource('/tatakeberatan', TataKeberatanController::class);
        Route::resource('/tatasengketa', TataSengketaController::class);

        Route::resource('/laporan', LaporanController::class);
        Route::get('/filelaporan/{laporan}', [FileLaporanController::class, 'index'])->name('filelaporan.index');
        Route::get('/filelaporan/create/{laporan}', [FileLaporanController::class, 'create'])->name('filelaporan.create');
        Route::post('/filelaporan/{laporan}', [FileLaporanController::class, 'store'])->name('filelaporan.store');
        Route::get('/filelaporan/{laporan}/edit/{filelaporan}', [FileLaporanController::class, 'edit'])->name('filelaporan.edit');
        Route::put('/filelaporan/{laporan}/{filelaporan}', [FileLaporanController::class, 'update'])->name('filelaporan.update');
        Route::delete('/filelaporan/{laporan}/{filelaporan}', [FileLaporanController::class, 'destroy'])->name('filelaporan.destroy');

        //Media
        Route::resource('/graphic', GraphicController::class);
        Route::resource('/banner', BannerController::class);
        Route::resource('/foto', FotoController::class);
        Route::resource('/video', VideoController::class);
        Route::resource('/partner', PartnerController::class);

        //Pengaturan
        Route::resource('/setting', SettingController::class);

        //LOGOUT
        Route::get('logout', function () {
            Auth::logout();
        });

    });

});
//--END BACKEND--//
