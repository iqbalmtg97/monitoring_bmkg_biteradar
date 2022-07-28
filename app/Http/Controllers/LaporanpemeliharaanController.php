<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Laporanpemeliharaan;
use App\Exports\LapemExport;
use Maatwebsite\Excel\Facades\Excel;

class LaporanpemeliharaanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $lap_pem = Laporanpemeliharaan::all();
        return view('admin.lap_pemeliharaan', compact('lap_pem'));
    }

    public function index2()
    {
        $lap_pem = Laporanpemeliharaan::all();
        return view('exports.lapem', compact('lap_pem'));
    }
    


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->all();
        $lap_pem = Laporanpemeliharaan::create();
        return redirect('/laporan_pemeliharaan_alat')->with('sukses','Data Berhasil di Simpan !!!'); 

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    }
    
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $update = Laporanpemeliharaan::where('id', $request->id)->update([
            'hasil_operate_time' => $request->hasil_check,
            'note_operate_time' => $request->note,
        ]);

        // dd($update);
        return redirect()->back()->with('sukses','Data Berhasil di Edit !!!');    
    }

    public function update1(Request $request)
    {
        $update = Laporanpemeliharaan::where('id', $request->id)
        ->update([
            'hasil_radiate_time' => $request->hasil_radiate_time,
            'note_radiate_time' => $request->note_radiate_time,
        ]);

        // dd($update);
        return redirect()->back()->with('sukses','Data Berhasil di Edit !!!');    
    }

    public function update2(Request $request)
    {
        $update = Laporanpemeliharaan::where('id', $request->id)
        ->update([
            'hasil_mmi_fault' => $request->hasil_mmi_fault,
            'note_mmi_fault' => $request->note_mmi_fault,
        ]);

        // dd($update);
        return redirect()->back()->with('sukses','Data Berhasil di Edit !!!');    
    }

    public function update3(Request $request)
    {
        $update = Laporanpemeliharaan::where('id', $request->id)
        ->update([
            'hasil_hvps_v' => $request->hasil_hvps_v,
            'note_hvps_v' => $request->note_hvps_v,
        ]);

        // dd($update);
        return redirect()->back()->with('sukses','Data Berhasil di Edit !!!');    
    }

    public function update4(Request $request)
    {
        $update = Laporanpemeliharaan::where('id', $request->id)
        ->update([
            'hasil_hvps_i' => $request->hasil_hvps_i,
            'note_hvps_i' => $request->note_hvps_i,
        ]);

        // dd($update);
        return redirect()->back()->with('sukses','Data Berhasil di Edit !!!');    
    }

    public function update5(Request $request)
    {
        $update = Laporanpemeliharaan::where('id', $request->id)
        ->update([
            'hasil_mag_i' => $request->hasil_mag_i,
            'note_mag_i' => $request->note_mag_i,
        ]);

        // dd($update);
        return redirect()->back()->with('sukses','Data Berhasil di Edit !!!');    
    }

    public function update6(Request $request)
    {
        $update = Laporanpemeliharaan::where('id', $request->id)
        ->update([
            'hasil_az' => $request->hasil_az,
            'note_az' => $request->note_az,
        ]);

        // dd($update);
        return redirect()->back()->with('sukses','Data Berhasil di Edit !!!');    
    }

    public function update7(Request $request)
    {
        $update = Laporanpemeliharaan::where('id', $request->id)
        ->update([
            'hasil_el' => $request->hasil_el,
            'note_el' => $request->note_el,
        ]);

        // dd($update);
        return redirect()->back()->with('sukses','Data Berhasil di Edit !!!');    
    }

    public function update8(Request $request)
    {
        $update = Laporanpemeliharaan::where('id', $request->id)
        ->update([
            'hasil_tx_cab' => $request->hasil_tx_cab,
            'note_tx_cab' => $request->note_tx_cab,
        ]);

        // dd($update);
        return redirect()->back()->with('sukses','Data Berhasil di Edit !!!');    
    }

    public function update9(Request $request)
    {
        $update = Laporanpemeliharaan::where('id', $request->id)
        ->update([
            'hasil_hot_box' => $request->hasil_hot_box,
            'note_hot_box' => $request->note_hot_box,
        ]);

        // dd($update);
        return redirect()->back()->with('sukses','Data Berhasil di Edit !!!');    
    }

    public function update10(Request $request)
    {
        $update = Laporanpemeliharaan::where('id', $request->id)
        ->update([
            'hasil_fwd_power' => $request->hasil_fwd_power,
            'note_fwd_power' => $request->note_fwd_power,
        ]);

        // dd($update);
        return redirect()->back()->with('sukses','Data Berhasil di Edit !!!');    
    }

    public function update11(Request $request)
    {
        $update = Laporanpemeliharaan::where('id', $request->id)
        ->update([
            'hasil_rev_power' => $request->hasil_rev_power,
            'note_rev_power' => $request->note_rev_power,
        ]);

        // dd($update);
        return redirect()->back()->with('sukses','Data Berhasil di Edit !!!');    
    }

    public function update12(Request $request)
    {
        $update = Laporanpemeliharaan::where('id', $request->id)
        ->update([
            'hasil_vswr' => $request->hasil_vswr,
            'note_vswr' => $request->note_vswr,
        ]);

        // dd($update);
        return redirect()->back()->with('sukses','Data Berhasil di Edit !!!');    
    }

    public function update13(Request $request)
    {
        $update = Laporanpemeliharaan::where('id', $request->id)
        ->update([
            'hasil_prf' => $request->hasil_prf,
            'note_prf' => $request->note_prf,
        ]);

        // dd($update);
        return redirect()->back()->with('sukses','Data Berhasil di Edit !!!');    
    }

    public function update14(Request $request)
    {
        $update = Laporanpemeliharaan::where('id', $request->id)
        ->update([
            'hasil_rx_plus15v' => $request->hasil_rx_plus15v,
            'note_rx_plus15v' => $request->note_rx_plus15v,
        ]);

        // dd($update);
        return redirect()->back()->with('sukses','Data Berhasil di Edit !!!');    
    }

    public function update15(Request $request)
    {
        $update = Laporanpemeliharaan::where('id', $request->id)
        ->update([
            'hasil_rx_min15v' => $request->hasil_rx_min15v,
            'note_rx_min15v' => $request->note_rx_min15v,
        ]);

        // dd($update);
        return redirect()->back()->with('sukses','Data Berhasil di Edit !!!');    
    }

    public function update16(Request $request)
    {
        $update = Laporanpemeliharaan::where('id', $request->id)
        ->update([
            'hasil_rx_plus24v' => $request->hasil_rx_plus24v,
            'note_note_plus24v' => $request->note_note_plus24v,
        ]);

        // dd($update);
        return redirect()->back()->with('sukses','Data Berhasil di Edit !!!');    
    }

    public function update17(Request $request)
    {
        $update = Laporanpemeliharaan::where('id', $request->id)
        ->update([
            'hasil_io_temp' => $request->hasil_io_temp,
            'note_io_temp' => $request->note_io_temp,
        ]);

        // dd($update);
        return redirect()->back()->with('sukses','Data Berhasil di Edit !!!');    
    }

    public function update18(Request $request)
    {
        $update = Laporanpemeliharaan::where('id', $request->id)
        ->update([
            'hasil_comp_temp' => $request->hasil_comp_temp,
            'note_comp_temp' => $request->note_comp_temp,
        ]);

        // dd($update);
        return redirect()->back()->with('sukses','Data Berhasil di Edit !!!');    
    }

    public function update19(Request $request)
    {
        $update = Laporanpemeliharaan::where('id', $request->id)
        ->update([
            'hasil_afc' => $request->hasil_afc,
            'note_afc' => $request->note_afc,
        ]);

        // dd($update);
        return redirect()->back()->with('sukses','Data Berhasil di Edit !!!');    
    }

    public function update20(Request $request)
    {
        $update = Laporanpemeliharaan::where('id', $request->id)
        ->update([
            'hasil_edrp9_rx_plus15v' => $request->hasil_edrp9_rx_plus15v,
            'note_edrp9_rx_plus15v' => $request->note_edrp9_rx_plus15v,
        ]);

        // dd($update);
        return redirect()->back()->with('sukses','Data Berhasil di Edit !!!');    
    }

    public function update21(Request $request)
    {
        $update = Laporanpemeliharaan::where('id', $request->id)
        ->update([
            'hasil_edrp9_rx_min15v' => $request->hasil_edrp9_rx_min15v,
            'note_edrp9_rx_min15' => $request->note_edrp9_rx_min15v,
        ]);

        // dd($update);
        return redirect()->back()->with('sukses','Data Berhasil di Edit !!!');    
    }

    public function update22(Request $request)
    {
        $update = Laporanpemeliharaan::where('id', $request->id)
        ->update([
            'hasil_edrp9_rx_plus24v' => $request->hasil_edrp9_rx_plus24v,
            'note_edrp9_rx_plus24v' => $request->note_edrp9_rx_plus24v,
        ]);

        // dd($update);
        return redirect()->back()->with('sukses','Data Berhasil di Edit !!!');    
    }

    public function update23(Request $request)
    {
        $update = Laporanpemeliharaan::where('id', $request->id)
        ->update([
            'hasil_hvps_alarm' => $request->hasil_hvps_alarm,
            'note_hvps_alarm' => $request->note_hvps_alarm,
        ]);

        // dd($update);
        return redirect()->back()->with('sukses','Data Berhasil di Edit !!!');    
    }

    public function update24(Request $request)
    {
        $update = Laporanpemeliharaan::where('id', $request->id)
        ->update([
            'hasil_power_supply24v' => $request->hasil_power_supply24v,
            'note_power_supply24v' => $request->note_power_supply24v,
        ]);

        // dd($update);
        return redirect()->back()->with('sukses','Data Berhasil di Edit !!!');    
    }

    public function update25(Request $request)
    {
        $update = Laporanpemeliharaan::where('id', $request->id)
        ->update([
            'hasil_fan' => $request->hasil_fan,
            'note_fan' => $request->note_fan,
        ]);

        // dd($update);
        return redirect()->back()->with('sukses','Data Berhasil di Edit !!!');    
    }

    public function update26(Request $request)
    {
        $update = Laporanpemeliharaan::where('id', $request->id)
        ->update([
            'hasil_mag_blower' => $request->hasil_mag_blower,
            'note_mag_blower' => $request->note_mag_blower,
        ]);

        // dd($update);
        return redirect()->back()->with('sukses','Data Berhasil di Edit !!!');    
    }

    public function update27(Request $request)
    {
        $update = Laporanpemeliharaan::where('id', $request->id)
        ->update([
            'hasil_ac_rstatus' => $request->hasil_ac_rstatus,
            'note_ac_rstatus' => $request->note_ac_rstatus,
        ]);

        // dd($update);
        return redirect()->back()->with('sukses','Data Berhasil di Edit !!!');    
    }

    public function update28(Request $request)
    {
        $update = Laporanpemeliharaan::where('id', $request->id)
        ->update([
            'hasil_ac_rups' => $request->hasil_ac_rups,
            'note_ac_rups' => $request->note_ac_rups,
        ]);

        // dd($update);
        return redirect()->back()->with('sukses','Data Berhasil di Edit !!!');    
    }

    public function update29(Request $request)
    {
        $update = Laporanpemeliharaan::where('id', $request->id)
        ->update([
            'hasil_bite_display_warning' => $request->hasil_bite_display_warning,
            'note_bite_display_warning' => $request->note_bite_display_warning,
        ]);

        // dd($update);
        return redirect()->back()->with('sukses','Data Berhasil di Edit !!!');    
    }

    public function update30(Request $request)
    {
        $update = Laporanpemeliharaan::where('id', $request->id)
        ->update([
            'hasil_volume_browser' => $request->hasil_volume_browser,
            'note_volume_browser' => $request->note_volume_browser,
        ]);

        // dd($update);
        return redirect()->back()->with('sukses','Data Berhasil di Edit !!!');    
    }

    public function update31(Request $request)
    {
        $update = Laporanpemeliharaan::where('id', $request->id)
        ->update([
            'hasil_radio_link' => $request->hasil_radio_link,
            'note_radio_link' => $request->note_radio_link,
        ]);

        // dd($update);
        return redirect()->back()->with('sukses','Data Berhasil di Edit !!!');    
    }

    public function update32(Request $request)
    {
        $update = Laporanpemeliharaan::where('id', $request->id)
        ->update([
            'hasil_client_pingtest' => $request->hasil_client_pingtest,
            'note_client_pingtest' => $request->note_client_pingtest,
        ]);

        // dd($update);
        return redirect()->back()->with('sukses','Data Berhasil di Edit !!!');    
    }

    public function update33(Request $request)
    {
        $update = Laporanpemeliharaan::where('id', $request->id)
        ->update([
            'hasil_pc_integrasi_pingtest1' => $request->hasil_pc_integrasi_pingtest1,
            'note_pc_integrasi_pingtest1' => $request->note_pc_integrasi_pingtest1,
        ]);

        // dd($update);
        return redirect()->back()->with('sukses','Data Berhasil di Edit !!!');    
    }

    public function update34(Request $request)
    {
        $update = Laporanpemeliharaan::where('id', $request->id)
        ->update([
            'hasil_pc_integrasi_pingtest2' => $request->hasil_pc_integrasi_pingtest2,
            'note_pc_integrasi_pingtest2' => $request->note_pc_integrasi_pingtest2,
        ]);

        // dd($update);
        return redirect()->back()->with('sukses','Data Berhasil di Edit !!!');    
    }

    public function update35(Request $request)
    {
        $update = Laporanpemeliharaan::where('id', $request->id)
        ->update([
            'hasil_wg_check' => $request->hasil_wg_check,
            'note_wg_check' => $request->note_wg_check,
        ]);

        // dd($update);
        return redirect()->back()->with('sukses','Data Berhasil di Edit !!!');    
    }

    public function update36(Request $request)
    {
        $update = Laporanpemeliharaan::where('id', $request->id)
        ->update([
            'hasil_wg_press' => $request->hasil_wg_press,
            'note_wg_press' => $request->note_wg_press,
        ]);

        // dd($update);
        return redirect()->back()->with('sukses','Data Berhasil di Edit !!!');    
    }

    public function update37(Request $request)
    {
        $update = Laporanpemeliharaan::where('id', $request->id)
        ->update([
            'hasil_dehydrator_alarm' => $request->hasil_dehydrator_alarm,
            'note_dehydrator_alarm' => $request->note_dehydrator_alarm,
        ]);

        // dd($update);
        return redirect()->back()->with('sukses','Data Berhasil di Edit !!!');    
    }

    public function update38(Request $request)
    {
        $update = Laporanpemeliharaan::where('id', $request->id)
        ->update([
            'hasil_modem' => $request->hasil_modem,
            'note_modem' => $request->note_modem,
        ]);

        // dd($update);
        return redirect()->back()->with('sukses','Data Berhasil di Edit !!!');    
    }

    public function update39(Request $request)
    {
        $update = Laporanpemeliharaan::where('id', $request->id)
        ->update([
            'hasil_router' => $request->hasil_router,
            'note_router' => $request->note_router,
        ]);

        // dd($update);
        return redirect()->back()->with('sukses','Data Berhasil di Edit !!!');    
    }

    public function update40(Request $request)
    {
        $update = Laporanpemeliharaan::where('id', $request->id)
        ->update([
            'hasil_hdds_pingtest' => $request->hasil_hdds_pingtest,
            'note_hdds_pingtest' => $request->note_hdds_pingtest,
        ]);

        // dd($update);
        return redirect()->back()->with('sukses','Data Berhasil di Edit !!!');    
    }

    public function update41(Request $request)
    {
        $update = Laporanpemeliharaan::where('id', $request->id)
        ->update([
            'hasil_master_ems_server' => $request->hasil_master_ems_server,
            'note_master_ems_server' => $request->note_master_ems_server,
        ]);

        // dd($update);
        return redirect()->back()->with('sukses','Data Berhasil di Edit !!!');    
    }

    public function update42(Request $request)
    {
        $update = Laporanpemeliharaan::where('id', $request->id)
        ->update([
            'hasil_client_ems_radome' => $request->hasil_client_ems_radome,
            'note_client_ems_radome' => $request->note_client_ems_radome,
        ]);

        // dd($update);
        return redirect()->back()->with('sukses','Data Berhasil di Edit !!!');    
    }

    public function update43(Request $request)
    {
        $update = Laporanpemeliharaan::where('id', $request->id)
        ->update([
            'hasil_web_ems' => $request->hasil_web_ems,
            'note_web_ems' => $request->note_web_ems,
        ]);

        // dd($update);
        return redirect()->back()->with('sukses','Data Berhasil di Edit !!!');    
    }

    public function update44(Request $request)
    {
        $update = Laporanpemeliharaan::where('id', $request->id)
        ->update([
            'hasil_ups_status' => $request->hasil_ups_status,
            'note_ups_status' => $request->note_ups_status,
        ]);

        // dd($update);
        return redirect()->back()->with('sukses','Data Berhasil di Edit !!!');    
    }

    public function update45(Request $request)
    {
        $update = Laporanpemeliharaan::where('id', $request->id)
        ->update([
            'hasil_line_input' => $request->hasil_line_input,
            'note_line_input' => $request->note_line_input,
        ]);

        // dd($update);
        return redirect()->back()->with('sukses','Data Berhasil di Edit !!!');    
    }

    public function update46(Request $request)
    {
        $update = Laporanpemeliharaan::where('id', $request->id)
        ->update([
            'hasil_line_output' => $request->hasil_line_output,
            'note_line_output' => $request->note_line_output,
        ]);

        // dd($update);
        return redirect()->back()->with('sukses','Data Berhasil di Edit !!!');    
    }

    public function update47(Request $request)
    {
        $update = Laporanpemeliharaan::where('id', $request->id)
        ->update([
            'hasil_battery' => $request->hasil_battery,
            'note_battery' => $request->note_battery,
        ]);

        // dd($update);
        return redirect()->back()->with('sukses','Data Berhasil di Edit !!!');    
    }

    public function update48(Request $request)
    {
        $update = Laporanpemeliharaan::where('id', $request->id)
        ->update([
            'hasil_grounding' => $request->hasil_grounding,
            'note_grounding' => $request->note_grounding,
        ]);

        // dd($update);
        return redirect()->back()->with('sukses','Data Berhasil di Edit !!!');    
    }

    public function update49(Request $request)
    {
        $update = Laporanpemeliharaan::where('id', $request->id)
        ->update([
            'hasil_kebersihan' => $request->hasil_kebersihan,
            'note_kebersihan' => $request->note_kebersihan,
        ]);

        // dd($update);
        return redirect()->back()->with('sukses','Data Berhasil di Edit !!!');    
    }



    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // Pengguna::where('user_id', $id)->first()->delete();
        // User::destroy($id);
        // return redirect('/pengguna')->with('sukses','Data Berhasil di Hapus !!!');    
    }

    public function getdatalapem($id)
    {
        $lapem = Laporanpemeliharaan::where('id', $id)->first();
        return $lapem;
    }

    public function export() 
    {
        return Excel::download(new LapemExport, 'Laporan Pemeliharaan.xlsx');
    }
}
