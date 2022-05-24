<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admincontroller;
use App\Http\Controllers\EventController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\usercontroller;
use App\Http\Controllers\UserAccountController;
use App\Http\Controllers\PendaftarController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ConfirmController;

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


Auth::routes();


Route::get('/', function () {
    return view('autentication.FormLogin');
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/home/updatekehadiran/{id}', [App\Http\Controllers\HomeController::class, 'updatekehadiran'])->name('updatekehadiran');

Route::get('beranda', [DashboardController::class, 'index']);

//Hak akses Admin
Route::group(['middleware' => ['auth','admin']], function(){
    Route::get('/datadosenaktif', [admincontroller::class, 'showdosenaktif']);
    Route::get('/tambahdosenaktif', [admincontroller::class, 'tambahdosenaktif']);
    Route::post('/tambahdosenaktiftambah', [admincontroller::class, 'tambahdosenaktifs'])->name('dosenaktif.tambah');
    Route::get('/datadosenaktif/editdosenaktif/{id}', [admincontroller::class, 'editdosenaktif']);
    Route::post('/updatedosenaktif/{id}', [admincontroller::class, 'updatedosenaktif'])->name('datadosenaktif.updatedosenaktif');
    Route::get('datadosenaktif/deletedosenaktif/{id}', [admincontroller::class, 'deletedosenaktif'])->name('datadosenaktif.deletedosenaktif');

    Route::get('/datadosentugas', [admincontroller::class, 'showdosentugas']);
    Route::get('/tambahdosentugas', [admincontroller::class, 'tambahdosentugas']);
    Route::post('/tambahdosentugastambah', [admincontroller::class, 'tambahdosentugass'])->name('dosentugas.tambah');
    Route::get('/datadosentugas/editdosentugas/{id}', [admincontroller::class, 'editdosentugas']);
    Route::post('/updatedosentugas/{id}', [admincontroller::class, 'updatedosentugas'])->name('datadosentugas.updatedosentugas');
    Route::get('datadosentugas/deletedosentugas/{id}', [admincontroller::class, 'deletedosentugas'])->name('datadosentugas.deletedosentugas');

    Route::get('/datastaf', [admincontroller::class, 'showstaf']);
    Route::get('/tambahstaf', [admincontroller::class, 'tambahstaf']);
    Route::post('/tambahstaftambah', [admincontroller::class, 'tambahstafs'])->name('staf.tambah');
    Route::get('/datastaf/editstaf/{id}', [admincontroller::class, 'editstaf']);
    Route::post('/updatestaf/{id}', [admincontroller::class, 'updatestaf'])->name('datastaf.updatestaf');
    Route::get('datastaf/deletestaf/{id}', [admincontroller::class, 'deletestaf'])->name('datastaf.deletestaf');

    Route::get('/dataasistendosen', [admincontroller::class, 'showasistendosen']);
    Route::get('/tambahasistendosen', [admincontroller::class, 'tambahasistendosen']);
    Route::post('/tambahasistendosentambah', [admincontroller::class, 'tambahasistendosens'])->name('asistendosen.tambah');
    Route::get('/dataasistendosen/editasistendosen/{id}', [admincontroller::class, 'editasistendosen']);
    Route::post('/updateasistendosen/{id}', [admincontroller::class, 'updateasistendosen'])->name('dataasistendosen.updateasistendosen');
    Route::get('dataasistendosen/deleteasistendosen/{id}', [admincontroller::class, 'deleteasistendosen'])->name('dataasistendosen.deleteasistendosen');

    Route::get('/datakeasramaan', [admincontroller::class, 'showkeasramaan']);
    Route::get('/tambahkeasramaan', [admincontroller::class, 'tambahkeasramaan']);
    Route::post('/tambahkeasramaantambah', [admincontroller::class, 'tambahkeasramaans'])->name('keasramaan.tambah');
    Route::get('/datakeasramaan/editkeasramaan/{id}', [admincontroller::class, 'editkeasramaan']);
    Route::post('/updatekeasramaan/{id}', [admincontroller::class, 'updatekeasramaan'])->name('datakeasramaan.updatekeasramaan');
    Route::get('datakeasramaan/deletekeasramaan/{id}', [admincontroller::class, 'deletekeasramaan'])->name('datakeasramaan.deleteasistendosen');

    Route::get('/datapegawai', [admincontroller::class, 'showpegawai']);
    Route::get('/tambahpegawai', [admincontroller::class, 'tambahpegawai']);
    Route::post('/tambahpegawaitambah', [admincontroller::class, 'tambahpegawais'])->name('pegawai.tambah');
    Route::get('/datapegawai/editpegawai/{pegawaiID}', [admincontroller::class, 'editpegawai']);
    Route::post('/updatepegawai/{pegawaiID}', [admincontroller::class, 'updatepegawai'])->name('datapegawai.updatepegawai');
    Route::get('datapegawai/deletepegawai/{pegawaiID}', [admincontroller::class, 'deletepegawai'])->name('datapegawai.deletepegawai');

    Route::get('/datamahasiswaaktif', [admincontroller::class, 'showmahasiswaaktif']);
    Route::get('/tambahmahasiswaaktif', [admincontroller::class, 'tambahmahasiswaaktif']);
    Route::post('/tambahmahasiswaaktiftambah', [admincontroller::class, 'tambahmahasiswaaktifs'])->name('mahasiswaaktif.tambah');
    Route::get('/datamahasiswaaktif/editmahasiswaaktif/{id}', [admincontroller::class, 'editmahasiswaaktif']);
    Route::post('/updatemahasiswaaktif/{id}', [admincontroller::class, 'updatemahasiswaaktif'])->name('datamahasiswaaktif.updatemahasiswaaktif');
    Route::get('datamahasiswaaktif/deletemahasiswaaktif/{id}', [admincontroller::class, 'deletemahasiswaaktif'])->name('datamahasiswaaktif.deletemahasiswaaktif');

    Route::get('/datamahasiswaalumni', [admincontroller::class, 'showmahasiswaalumni']);
    Route::get('/tambahmahasiswaalumni', [admincontroller::class, 'tambahmahasiswaalumni']);
    Route::post('/tambahmahasiswaalumnitambah', [admincontroller::class, 'tambahmahasiswaalumnis'])->name('mahasiswaalumni.tambah');
    Route::get('/datamahasiswaalumni/editmahasiswaalumni/{id}', [admincontroller::class, 'editmahasiswaalumni']);
    Route::post('/updatemahasiswaalumni/{id}', [admincontroller::class, 'updatemahasiswaalumni'])->name('datamahasiswaalumni.updatemahasiswaalumni');
    Route::get('datamahasiswaalumni/deletemahasiswaalumni/{id}', [admincontroller::class, 'deletemahasiswaalumni'])->name('datamahasiswaalumni.deletemahasiswaalumni');

    Route::get('/datalistgedung', [admincontroller::class, 'showlistgedung']);
    Route::get('/tambahlistgedung', [admincontroller::class, 'tambahlistgedung']);
    Route::post('/tambahlistgedungtambah', [admincontroller::class, 'tambahlistgedungs'])->name('listgedung.tambah');
    Route::get('/datalistgedung/editlistgedung/{gedungid}', [admincontroller::class, 'editlistgedung']);
    Route::post('/updatelistgedung/{gedungid}', [admincontroller::class, 'updatelistgedung'])->name('datalistgedung.updatelistgedung');
    Route::get('datalistgedung/deletelistgedung/{gedungid}', [admincontroller::class, 'deletelistgedung'])->name('datalistgedung.deletelistgedung');

    Route::get('/datakapasitasruangankelas', [admincontroller::class, 'showkapasitasruangankelas']);
    Route::get('/tambahkapasitasruangankelas', [admincontroller::class, 'tambahkapasitasruangankelas']);
    Route::post('/tambahkapasitasruangankelastambah', [admincontroller::class, 'tambahkapasitasruangankelass'])->name('kapasitasruangankelas.tambah');
    Route::get('/datakapasitasruangankelas/editkapasitasruangankelas/{id}', [admincontroller::class, 'editkapasitasruangankelas']);
    Route::post('/updatekapasitasruangankelas/{id}', [admincontroller::class, 'updatekapasitasruangankelas'])->name('datakapasitasruangankelas.updatekapasitasruangankelas');
    Route::get('datakapasitasruangankelas/deletekapasitasruangankelas/{id}', [admincontroller::class, 'deletekapasitasruangankelas'])->name('datakapasitasruangankelas.deletekapasitasruangankelas');

    Route::get('/datakantin', [admincontroller::class, 'showkantin']);
    Route::get('/tambahkantin', [admincontroller::class, 'tambahkantin']);
    Route::post('/tambahkantintambah', [admincontroller::class, 'tambahkantins'])->name('kantin.tambah');
    Route::get('/datakantin/editkantin/{kantinID}', [admincontroller::class, 'editkantin']);
    Route::post('/updatekantin/{kantinID}', [admincontroller::class, 'updatekantin'])->name('datakantin.updatekantin');
    Route::get('datakantin/deletekantin/{kantinID}', [admincontroller::class, 'deletekantin'])->name('datakantin.deletekantin');

    Route::get('/dataperumahandalam', [admincontroller::class, 'showperumahandalam']);
    Route::get('/tambahperumahandalam', [admincontroller::class, 'tambahperumahandalam']);
    Route::post('/tambahperumahandalamtambah', [admincontroller::class, 'tambahperumahandalams'])->name('perumahandalam.tambah');
    Route::get('/dataperumahandalam/editperumahandalam/{id}', [admincontroller::class, 'editperumahandalam']);
    Route::post('/updateperumahandalam/{id}', [admincontroller::class, 'updateperumahandalam'])->name('dataperumahandalam.updateperumahandalam');
    Route::get('dataperumahandalam/deleteperumahandalam/{id}', [admincontroller::class, 'deleteperumahandalam'])->name('dataperumahandalam.deleteperumahandalam');

    Route::get('/dataperumahanluar', [admincontroller::class, 'showperumahanluar']);
    Route::get('/tambahperumahanluar', [admincontroller::class, 'tambahperumahanluar']);
    Route::post('/tambahperumahanluartambah', [admincontroller::class, 'tambahperumahanluars'])->name('perumahanluar.tambah');
    Route::get('/dataperumahanluar/editperumahanluar/{id}', [admincontroller::class, 'editperumahanluar']);
    Route::post('/updateperumahanluar/{id}', [admincontroller::class, 'updateperumahanluar'])->name('dataperumahanluar.updateperumahanluar');
    Route::get('dataperumahanluar/deleteperumahanluar/{id}', [admincontroller::class, 'deleteperumahanluar'])->name('dataperumahanluar.deleteperumahanluar');

    Route::get('/dataasrama', [admincontroller::class, 'showasrama']);
    Route::get('/tambahasrama', [admincontroller::class, 'tambahasrama']);
    Route::post('/tambahasramatambah', [admincontroller::class, 'tambahasramas'])->name('asrama.tambah');
    Route::get('/dataasrama/editasrama/{id}', [admincontroller::class, 'editasrama']);
    Route::post('/updateasrama/{id}', [admincontroller::class, 'updateasrama'])->name('dataasrama.updateasrama');
    Route::get('dataasrama/deleteasrama/{id}', [admincontroller::class, 'deleteasrama'])->name('dataasrama.deleteasrama');

    Route::get('/datarusun3', [admincontroller::class, 'showrusun3']);
    Route::get('/tambahrusun3', [admincontroller::class, 'tambahrusun3']);
    Route::post('/tambahrusun3tambah', [admincontroller::class, 'tambahrusun3s'])->name('rusun3.tambah');
    Route::get('/datarusun3/editrusun3/{id}', [admincontroller::class, 'editrusun3']);
    Route::post('/updaterusun3/{id}', [admincontroller::class, 'updaterusun3'])->name('datarusun3.updaterusun3');
    Route::get('datarusun3/deleterusun3/{id}', [admincontroller::class, 'deleterusun3'])->name('datarusun3.deleterusun3');

    Route::get('/datakomputer', [admincontroller::class, 'showkomputer']);
    Route::get('/tambahkomputer', [admincontroller::class, 'tambahkomputer']);
    Route::post('/tambahkomputertambah', [admincontroller::class, 'tambahkomputers'])->name('komputer.tambah');
    Route::get('/datakomputer/editkomputer/{id}', [admincontroller::class, 'editkomputer']);
    Route::post('/updatekomputer/{id}', [admincontroller::class, 'updatekomputer'])->name('datakomputer.updatekomputer');
    Route::get('datakomputer/deletekomputer/{id}', [admincontroller::class, 'deletekomputer'])->name('datakomputer.deletekomputer');

    Route::get('/datakendaraan', [admincontroller::class, 'showkendaraan']);
    Route::get('/tambahkendaraan', [admincontroller::class, 'tambahkendaraan']);
    Route::post('/tambahkendaraantambah', [admincontroller::class, 'tambahkendaraans'])->name('kendaraan.tambah');
    Route::get('/datakendaraan/editkendaraan/{id}', [admincontroller::class, 'editkendaraan']);
    Route::post('/updatekendaraan/{id}', [admincontroller::class, 'updatekendaraan'])->name('datakendaraan.updatekendaraan');
    Route::get('datakendaraan/deletekendaraan/{id}', [admincontroller::class, 'deletekendaraan'])->name('datakendaraan.deletekendaraan');

    Route::get('/datalmebeler', [admincontroller::class, 'showlmebeler']);
    Route::get('/tambahlmebeler', [admincontroller::class, 'tambahlmebeler']);
    Route::post('/tambahlmebelertambah', [admincontroller::class, 'tambahlmebelers'])->name('lmebeler.tambah');
    Route::get('/datalmebeler/editlmebeler/{id}', [admincontroller::class, 'editlmebeler']);
    Route::post('/updatelmebeler/{id}', [admincontroller::class, 'updatelmebeler'])->name('datalmebeler.updatelmebeler');
    Route::get('datalmebeler/deletelmebeler/{id}', [admincontroller::class, 'deletelmebeler'])->name('datalmebeler.deletelmebeler');

    Route::get('/datalalattulis', [admincontroller::class, 'showlalattulis']);
    Route::get('/tambahlalattulis', [admincontroller::class, 'tambahlalattulis']);
    Route::post('/tambahlalattulistambah', [admincontroller::class, 'tambahlalattuliss'])->name('lalattulis.tambah');
    Route::get('/datalalattulis/editlalattulis/{id}', [admincontroller::class, 'editlalattulis']);
    Route::post('/updatelalattulis/{id}', [admincontroller::class, 'updatelalattulis'])->name('datalalattulis.updatelalattulis');
    Route::get('datalalattulis/deletelalattulis/{id}', [admincontroller::class, 'deletelalattulis'])->name('datalalattulis.deletelalattulis');

    Route::get('/datalaudiovisual', [admincontroller::class, 'showlaudiovisual']);
    Route::get('/tambahlaudiovisual', [admincontroller::class, 'tambahlaudiovisual']);
    Route::post('/tambahlaudiovisualtambah', [admincontroller::class, 'tambahlaudiovisuals'])->name('laudiovisual.tambah');
    Route::get('/datalaudiovisual/editlaudiovisual/{id}', [admincontroller::class, 'editlaudiovisual']);
    Route::post('/updatelaudiovisual/{id}', [admincontroller::class, 'updatelaudiovisual'])->name('datalaudiovisual.updatelaudiovisual');
    Route::get('datalaudiovisual/deletelaudiovisual/{id}', [admincontroller::class, 'deletelaudiovisual'])->name('datalaudiovisual.deletelaudiovisual');

    Route::get('/datalperalatan', [admincontroller::class, 'showlperalatan']);
    Route::get('/tambahlperalatan', [admincontroller::class, 'tambahlperalatan']);
    Route::post('/tambahlperalatantambah', [admincontroller::class, 'tambahlperalatans'])->name('lperalatan.tambah');
    Route::get('/datalperalatan/editlperalatan/{id}', [admincontroller::class, 'editlperalatan']);
    Route::post('/updatelperalatan/{id}', [admincontroller::class, 'updatelperalatan'])->name('datalperalatan.updatelperalatan');
    Route::get('datalperalatan/deletelperalatan/{id}', [admincontroller::class, 'deletelperalatan'])->name('datalperalatan.deletelperalatan');

    Route::get('/datalpersediaan', [admincontroller::class, 'showlpersediaan']);
    Route::get('/tambahlpersediaan', [admincontroller::class, 'tambahlpersediaan']);
    Route::post('/tambahlpersediaantambah', [admincontroller::class, 'tambahlpersediaans'])->name('lpersediaan.tambah');
    Route::get('/datalpersediaan/editlpersediaan/{id}', [admincontroller::class, 'editlpersediaan']);
    Route::post('/updatelpersediaan/{id}', [admincontroller::class, 'updatelpersediaan'])->name('datalpersediaan.updatelpersediaan');
    Route::get('datalpersediaan/deletelpersediaan/{id}', [admincontroller::class, 'deletelpersediaan'])->name('datalpersediaan.deletelpersediaan');

    Route::get('/datallab', [admincontroller::class, 'showllab']);
    Route::get('/tambahllab', [admincontroller::class, 'tambahllab']);
    Route::post('/tambahllabtambah', [admincontroller::class, 'tambahllabs'])->name('llab.tambah');
    Route::get('/datallab/editllab/{id}', [admincontroller::class, 'editllab']);
    Route::post('/updatellab/{id}', [admincontroller::class, 'updatellab'])->name('datallab.updatellab');
    Route::get('datallab/deletellab/{id}', [admincontroller::class, 'deletellab'])->name('datallab.deletellab');

    Route::get('/dataljaringan', [admincontroller::class, 'showljaringan']);
    Route::get('/tambahljaringan', [admincontroller::class, 'tambahljaringan']);
    Route::post('/tambahljaringantambah', [admincontroller::class, 'tambahljaringans'])->name('ljaringan.tambah');
    Route::get('/dataljaringan/editljaringan/{id}', [admincontroller::class, 'editljaringan']);
    Route::post('/updateljaringan/{id}', [admincontroller::class, 'updateljaringan'])->name('dataljaringan.updateljaringan');
    Route::get('dataljaringan/deleteljaringan/{id}', [admincontroller::class, 'deleteljaringan'])->name('dataljaringan.deleteljaringan');

    Route::get('/datalmaintanance', [admincontroller::class, 'showlmaintanance']);
    Route::get('/tambahlmaintanance', [admincontroller::class, 'tambahlmaintanance']);
    Route::post('/tambahlmaintanancetambah', [admincontroller::class, 'tambahlmaintanances'])->name('lmaintanance.tambah');
    Route::get('/datalmaintanance/editlmaintanance/{id}', [admincontroller::class, 'editlmaintanance']);
    Route::post('/updatelmaintanance/{id}', [admincontroller::class, 'updatelmaintanance'])->name('datalmaintanance.updatelmaintanance');
    Route::get('datalmaintanance/deletelmaintanance/{id}', [admincontroller::class, 'deletelmaintanance'])->name('datalmaintanance.deletelmaintanance');

    Route::get('/dataltaman', [admincontroller::class, 'showltaman']);
    Route::get('/tambahltaman', [admincontroller::class, 'tambahltaman']);
    Route::post('/tambahltamantambah', [admincontroller::class, 'tambahltamans'])->name('ltaman.tambah');
    Route::get('/dataltaman/editltaman/{id}', [admincontroller::class, 'editltaman']);
    Route::post('/updateltaman/{id}', [admincontroller::class, 'updateltaman'])->name('dataltaman.updateltaman');
    Route::get('dataltaman/deleteltaman/{id}', [admincontroller::class, 'deleteltaman'])->name('dataltaman.deleteltaman');

    Route::get('/datadispmebeler', [admincontroller::class, 'showdispmebeler']);
    Route::get('/tambahdispmebeler', [admincontroller::class, 'tambahdispmebeler']);
    Route::post('/tambahdispmebelertambah', [admincontroller::class, 'tambahdispmebelers'])->name('dispmebeler.tambah');
    Route::get('/datadispmebeler/editdispmebeler/{id}', [admincontroller::class, 'editdispmebeler']);
    Route::post('/updatedispmebeler/{id}', [admincontroller::class, 'updatedispmebeler'])->name('datadispmebeler.updatedispmebeler');
    Route::get('datadispmebeler/deletedispmebeler/{id}', [admincontroller::class, 'deletedispmebeler'])->name('datadispmebeler.deletedispmebeler');

    Route::get('/datadispalattulis', [admincontroller::class, 'showdispalattulis']);
    Route::get('/tambahdispalattulis', [admincontroller::class, 'tambahdispalattulis']);
    Route::post('/tambahdispalattulistambah', [admincontroller::class, 'tambahdispalattuliss'])->name('dispalattulis.tambah');
    Route::get('/datadispalattulis/editdispalattulis/{id}', [admincontroller::class, 'editdispalattulis']);
    Route::post('/updatedispalattulis/{id}', [admincontroller::class, 'updatedispalattulis'])->name('datadispalattulis.updatedispalattulis');
    Route::get('datadispalattulis/deletedispalattulis/{id}', [admincontroller::class, 'deletedispalattulis'])->name('datadispalattulis.deletedispalattulis');

    Route::get('/datadispaudio', [admincontroller::class, 'showdispaudio']);
    Route::get('/tambahdispaudio', [admincontroller::class, 'tambahdispaudio']);
    Route::post('/tambahdispaudiotambah', [admincontroller::class, 'tambahdispaudios'])->name('dispaudio.tambah');
    Route::get('/datadispaudio/editdispaudio/{id}', [admincontroller::class, 'editdispaudio']);
    Route::post('/updatedispaudio/{id}', [admincontroller::class, 'updatedispaudio'])->name('datadispaudio.updatedispaudio');
    Route::get('datadispaudio/deletedispaudio/{id}', [admincontroller::class, 'deletedispaudio'])->name('datadispaudio.deletedispaudio');

    Route::get('/datadispperalatan', [admincontroller::class, 'showdispperalatan']);
    Route::get('/tambahdispperalatan', [admincontroller::class, 'tambahdispperalatan']);
    Route::post('/tambahdispperalatantambah', [admincontroller::class, 'tambahdispperalatans'])->name('dispperalatan.tambah');
    Route::get('/datadispperalatan/editdispperalatan/{id}', [admincontroller::class, 'editdispperalatan']);
    Route::post('/updatedispperalatan/{id}', [admincontroller::class, 'updatedispperalatan'])->name('datadispperalatan.updatedispperalatan');
    Route::get('datadispperalatan/deletedispperalatan/{id}', [admincontroller::class, 'deletedispperalatan'])->name('datadispperalatan.deletedispperalatan');

    Route::get('/datadisppersediaan', [admincontroller::class, 'showdisppersediaan']);
    Route::get('/tambahdisppersediaan', [admincontroller::class, 'tambahdisppersediaan']);
    Route::post('/tambahdisppersediaantambah', [admincontroller::class, 'tambahdisppersediaans'])->name('disppersediaan.tambah');
    Route::get('/datadisppersediaan/editdisppersediaan/{id}', [admincontroller::class, 'editdisppersediaan']);
    Route::post('/updatedisppersediaan/{id}', [admincontroller::class, 'updatedisppersediaan'])->name('datadisppersediaan.updatedisppersediaan');
    Route::get('datadisppersediaan/deletedisppersediaan/{id}', [admincontroller::class, 'deletedisppersediaan'])->name('datadisppersediaan.deletedisppersediaan');

    Route::get('/datadisplab', [admincontroller::class, 'showdisplab']);
    Route::get('/tambahdisplab', [admincontroller::class, 'tambahdisplab']);
    Route::post('/tambahdisplabtambah', [admincontroller::class, 'tambahdisplabs'])->name('displab.tambah');
    Route::get('/datadisplab/editdisplab/{id}', [admincontroller::class, 'editdisplab']);
    Route::post('/updatedisplab/{id}', [admincontroller::class, 'updatedisplab'])->name('datadisplab.updatedisplab');
    Route::get('datadisplab/deletedisplab/{id}', [admincontroller::class, 'deletedisplab'])->name('datadisplab.deletedisplab');

    Route::get('/datadispjaringan', [admincontroller::class, 'showdispjaringan']);
    Route::get('/tambahdispjaringan', [admincontroller::class, 'tambahdispjaringan']);
    Route::post('/tambahdispjaringantambah', [admincontroller::class, 'tambahdispjaringans'])->name('dispjaringan.tambah');
    Route::get('/datadispjaringan/editdispjaringan/{id}', [admincontroller::class, 'editdispjaringan']);
    Route::post('/updatedispjaringan/{id}', [admincontroller::class, 'updatedispjaringan'])->name('datadispjaringan.updatedispjaringan');
    Route::get('datadispjaringan/deletedispjaringan/{id}', [admincontroller::class, 'deletedispjaringan'])->name('datadispjaringan.deletedispjaringan');

    Route::get('/datadispmaintanance', [admincontroller::class, 'showdispmaintanance']);
    Route::get('/tambahdispmaintanance', [admincontroller::class, 'tambahdispmaintanance']);
    Route::post('/tambahdispmaintanancetambah', [admincontroller::class, 'tambahdispmaintanances'])->name('dispmaintanance.tambah');
    Route::get('/datadispmaintanance/editdispmaintanance/{id}', [admincontroller::class, 'editdispmaintanance']);
    Route::post('/updatedispmaintanance/{id}', [admincontroller::class, 'updatedispmaintanance'])->name('datadispmaintanance.updatedispmaintanance');
    Route::get('datadispmaintanance/deletedispmaintanance/{id}', [admincontroller::class, 'deletedispmaintanance'])->name('datadispmaintanance.deletedispmaintanance');

    Route::get('/datadisptaman', [admincontroller::class, 'showdisptaman']);
    Route::get('/tambahdisptaman', [admincontroller::class, 'tambahdisptaman']);
    Route::post('/tambahdisptamantambah', [admincontroller::class, 'tambahdisptamans'])->name('disptaman.tambah');
    Route::get('/datadisptaman/editdisptaman/{id}', [admincontroller::class, 'editdisptaman']);
    Route::post('/updatedisptaman/{id}', [admincontroller::class, 'updatedisptaman'])->name('datadisptaman.updatedisptaman');
    Route::get('datadisptaman/deletedisptaman/{id}', [admincontroller::class, 'deletedisptaman'])->name('datadisptaman.deletedisptaman');

    Route::get('/dataagendarektor', [EventController::class, 'showagendarektor']); //true
    Route::get('/tambahagendarektor', [EventController::class, 'tambahagendarektor']);//true
    Route::post('/tambahagendarektortambah', [EventController::class, 'tambahagendarektors'])->name('agendarektor.tambah'); //true
    Route::get('/dataagendarektor/editagendarektor/{id}', [EventController::class, 'editagendarektor']);
    Route::post('/updateagendarektor/{id}', [EventController::class, 'updateagendarektor'])->name('dataagendarektor.updateagendarektor');
    Route::get('dataagendarektor/deleteagendarektor/{id}', [EventController::class, 'deleteagendarektor'])->name('dataagendarektor.deleteagendarektor');

    Route::get('/datapendaftar', [PendaftarController::class, 'showpendaftar']);
    Route::get('/tambahpendaftar', [PendaftarController::class, 'tambahpendaftar']);
    Route::post('/tambahpendaftartambah', [PendaftarController::class, 'tambahpendaftars'])->name('pendaftar.tambah');
    Route::get('/datapendaftar/editpendaftar/{pendaftar_id}', [PendaftarController::class, 'editpendaftar']);
    Route::post('/updatependaftar/{id}', [PendaftarController::class, 'updatependaftar'])->name('datapendaftar.updatependaftar');
    Route::get('datapendaftar/deletependaftar/{pendaftar_id}', [PendaftarController::class, 'deletependaftar'])->name('datapendaftar.deletependaftar');

    Route::get('/dataakunpengguna', [UserAccountController::class, 'showUser']);
    Route::get('tambahakun', [LoginController::class, 'register'])->name('tambahakun');
    Route::post('tambahakun', [LoginController::class, 'register_action'])->name('tambahakun.action');
    Route::get('/dataakunpengguna/editakunpengguna/{user_id}', [UserAccountController::class, 'editakunpengguna']);
    Route::post('/updateakunpengguna/{user_id}', [UserAccountController::class, 'updateakunpengguna'])->name('dataakunpengguna.updateakunpengguna');
    Route::get('dataakunpengguna/deleteakunpengguna/{user_id}', [UserAccountController::class, 'deleteakunpengguna'])->name('dataakunpengguna.deleteakunpengguna');

});

Route::group(['middleware'=> ['auth','rektor']], function(){
    //Rektor
    Route::get('/AgendaRektor', [ConfirmController::class, 'index']);
    Route::get('/AgendaRektor/export_excel', [ConfirmController::class, 'export_excel']);
    Route::get('/AgendaRektor/editagendarektors/{id}', [ConfirmController::class, 'editagendarektors']);
    Route::post('/updateagendarektors/{id}', [ConfirmController::class, 'updateagendarektors'])->name('AgendaRektor.updateagendarektors');

    Route::get('/DosenAktif', [usercontroller::class, 'indexdosenaktif']);
    Route::get('/DosenAktif/export_excel', [usercontroller::class, 'export_excel']);

    Route::get('/DosenTugasBelajar', [usercontroller::class, 'indexdosentugas']);
    Route::get('/DosenTugasBelajar/export_excel', [usercontroller::class, 'export_excel1']);

    Route::get('/Staff', [usercontroller::class, 'indexstaf']);
    Route::get('/Staff/export_excel', [usercontroller::class, 'export_excel2']);

    Route::get('/AsistenDosen', [usercontroller::class, 'indexasistendosen']);
    Route::get('/AsistenDosen/export_excel', [usercontroller::class, 'export_excel3']);

    Route::get('/Keasramaan', [usercontroller::class, 'indexkeasramaan']);
    Route::get('/Keasramaan/export_excel', [usercontroller::class, 'export_excel4']);

    Route::get('/Pegawai', [usercontroller::class, 'indexpegawai']);
    Route::get('/Pegawai/export_excel', [usercontroller::class, 'export_excel5']);

    Route::get('/MahasiswaAktif', [usercontroller::class, 'indexmahasiswaaktif']);
    Route::get('/MahasiswaAktif/export_excel', [usercontroller::class, 'export_excel6']);

    Route::get('/MahasiswaAlumni', [usercontroller::class, 'indexmahasiswaalumni']);
    Route::get('/MahasiswaAlumni/export_excel', [usercontroller::class, 'export_excel7']);

    Route::get('/ListGedung', [usercontroller::class, 'indexlistgedung']);
    Route::get('/ListGedung/export_excel', [usercontroller::class, 'export_excel8']);

    Route::get('/KapasitasRuanganKelas', [usercontroller::class, 'indexkapasitasruangankelas']);
    Route::get('/KapasitasRuanganKelas/export_excel', [usercontroller::class, 'export_excel9']);

    Route::get('/Kantin', [usercontroller::class, 'indexkantin']);
    Route::get('/Kantin/export_excel', [usercontroller::class, 'export_excel10']);

    Route::get('/PerumahanDalam', [usercontroller::class, 'indexperumahandalam']);
    Route::get('/PerumahanDalam/export_excel', [usercontroller::class, 'export_excel11']);

    Route::get('/PerumahanLuar', [usercontroller::class, 'indexperumahanluar']);
    Route::get('/PerumahanLuar/export_excel', [usercontroller::class, 'export_excel12']);

    Route::get('/Asrama', [usercontroller::class, 'indexasrama']);
    Route::get('/Asrama/export_excel', [usercontroller::class, 'export_excel13']);

    Route::get('/Rusun3', [usercontroller::class, 'indexrusun3']);
    Route::get('/Rusun3/export_excel', [usercontroller::class, 'export_excel14']);

    Route::get('/Komputer', [usercontroller::class, 'indexkomputer']);
    Route::get('/Komputer/export_excel', [usercontroller::class, 'export_excel15']);

    Route::get('/KendaraanKampus', [usercontroller::class, 'indexkendaraan']);
    Route::get('/KendaraanKampus/export_excel', [usercontroller::class, 'export_excel16']);

    Route::get('/Mebeler', [usercontroller::class, 'indexmebeler']);
    Route::get('/Mebeler/export_excel', [usercontroller::class, 'export_excel17']);

    Route::get('/AlatTulis', [usercontroller::class, 'indexalattulis']);
    Route::get('/AlatTulis/export_excel', [usercontroller::class, 'export_excel18']);

    Route::get('/AudioVisual', [usercontroller::class, 'indexaudiovisual']);
    Route::get('/AudioVisual/export_excel', [usercontroller::class, 'export_excel19']);

    Route::get('/PeralatanRumahTangga', [usercontroller::class, 'indexperalatan']);
    Route::get('/PeralatanRumahTangga/export_excel', [usercontroller::class, 'export_excel20']);

    Route::get('/PersediaanKampus', [usercontroller::class, 'indexpersediaan']);
    Route::get('/PersediaanKampus/export_excel', [usercontroller::class, 'export_excel21']);

    Route::get('/AlatLaboratorium', [usercontroller::class, 'indexalatlab']);
    Route::get('/AlatLaboratorium/export_excel', [usercontroller::class, 'export_excel22']);

    Route::get('/Jaringan', [usercontroller::class, 'indexjaringan']);
    Route::get('/Jaringan/export_excel', [usercontroller::class, 'export_excel23']);

    Route::get('/PerlengkapanMaintanance', [usercontroller::class, 'indexmaintanance']);
    Route::get('/PerlengkapanMaintanance/export_excel', [usercontroller::class, 'export_excel24']);

    Route::get('/PerlengkapanTaman', [usercontroller::class, 'indextaman']);
    Route::get('/PerlengkapanTaman/export_excel', [usercontroller::class, 'export_excel25']);

    //DISPOSAL
    Route::get('/DisposalMebeler', [usercontroller::class, 'indexdispmebeler']);
    Route::get('/DisposalMebeler/export_excel', [usercontroller::class, 'export_excel26']);

    Route::get('/DisposalAlatTulis', [usercontroller::class, 'indexdispalattulis']);
    Route::get('/DisposalAlatTulis/export_excel', [usercontroller::class, 'export_excel27']);

    Route::get('/DisposalAudioVisual', [usercontroller::class, 'indexdispaudiovisual']);
    Route::get('/DisposalAudioVisual/export_excel', [usercontroller::class, 'export_excel28']);

    Route::get('/DisposalPeralatanRumahTangga', [usercontroller::class, 'indexdispperalatan']);
    Route::get('/DisposalPeralatanRumahTangga/export_excel', [usercontroller::class, 'export_excel29']);

    Route::get('/DisposalPersediaanKampus', [usercontroller::class, 'indexdisppersediaan']);
    Route::get('/DisposalPersediaanKampus/export_excel', [usercontroller::class, 'export_excel30']);

    Route::get('/DisposalAlatLaboratorium', [usercontroller::class, 'indexdispalatlab']);
    Route::get('/DisposalAlatLaboratorium/export_excel', [usercontroller::class, 'export_excel31']);

    Route::get('/DisposalJaringan', [usercontroller::class, 'indexdispjaringan']);
    Route::get('/DisposalJaringan/export_excel', [usercontroller::class, 'export_excel32']);

    Route::get('/DisposalPerlengkapanMaintanance', [usercontroller::class, 'indexdispmaintanance']);
    Route::get('/DisposalPerlengkapanMaintanance/export_excel', [usercontroller::class, 'export_excel33']);

    Route::get('/DisposalPerlengkapanTaman', [usercontroller::class, 'indexdisptaman']);
    Route::get('/DisposalPerlengkapanTaman/export_excel', [usercontroller::class, 'export_excel34']);



});
