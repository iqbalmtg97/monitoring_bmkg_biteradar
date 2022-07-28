@extends('layouts.master')

@section('br_ddcbite','active')

@section('content')
<div class="main">
    <div class="main-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <!-- BASIC TABLE -->
                    <div class="panel">
                        <div class="panel-body">
                            <center><h1>Stasiun Meteorologi Cengkareng - Soekarno Hatta</h1></center>
                            <div style="align-content: right"><a href="/ddcbite/export" class="btn btn-success btn-md">Download Excel</a></div>
                            <center><h3>Bite Radar (Ddcbite)</h3></center>
                            <div class="row">
                            <table class="table" >
                                <tr>
                                    <td><div class="col-md-6" style="width:100px; border:1px solid; padding:10px; text-align:center;">{{$ddcbite->tx_warmup}}</div> <div class="col-md-6" style="margin-top: 10px">Tx_Warmup</div> </td>
                                    <td><div class="col-md-6" style="width:100px; border:1px solid; padding:10px; text-align:center;">{{$ddcbite->vswr}}</div> <div class="col-md-6" style="margin-top: 10px">VSWR</div> </td>
                                    <td><div class="col-md-6" style="width:100px; border:1px solid; padding:10px; text-align:center;">{{$ddcbite->ped_status_age}}</div> <div class="col-md-6" style="margin-top: 10px">Ped Status Age</div> </td>
                                    <td><div class="col-md-6" style="width:100px; border:1px solid; padding:10px; text-align:center;">{{$ddcbite->cab_temp}}</div> <div class="col-md-6" style="margin-top: 10px">Cab Temp</div> </td>
                                    <td><div class="col-md-6" style="width:100px; border:1px solid; padding:10px; text-align:center;">{{$ddcbite->measured_prf}}</div> <div class="col-md-6" style="margin-top: 10px">Measured Prf</div> </td>
                                    <td><div class="col-md-6" style="width:100px; border:1px solid; padding:10px; text-align:center;">{{$ddcbite->az_offset}}</div> <div class="col-md-6" style="margin-top: 10px">Az Offset</div> </td>
                                </tr>
                                <tr>
                                    <td><div class="col-md-6" style="width:100px; border:1px solid; padding:10px; text-align:center;">{{$ddcbite->hot_box_temp}}</div> <div class="col-md-6" style="margin-top: 10px">Hot Box Temp</div> </td>
                                    <td><div class="col-md-6" style="width:100px; border:1px solid; padding:10px; text-align:center;">{{$ddcbite->tx_status_age}}</div> <div class="col-md-6" style="margin-top: 10px">Tx Status Age</div> </td>
                                    <td><div class="col-md-6" style="width:100px; border:1px solid; padding:10px; text-align:center;">{{$ddcbite->el_offset}}</div> <div class="col-md-6" style="margin-top: 10px">El Offset</div> </td>
                                    <td><div class="col-md-6" style="width:100px; border:1px solid; padding:10px; text-align:center;">{{$ddcbite->hvps_v}}}</div> <div class="col-md-6" style="margin-top: 10px">HVPS V</div> </td>
                                    <td><div class="col-md-6" style="width:100px; border:1px solid; padding:10px; text-align:center;">{{$ddcbite->hvps_i}}</div> <div class="col-md-6" style="margin-top: 10px">HVPS I</div> </td>
                                    <td><div class="col-md-6" style="width:100px; border:1px solid; padding:10px; text-align:center;">{{$ddcbite->rx_status_age}}</div> <div class="col-md-6" style="margin-top: 10px">Rx Status Age</div> </td>
                                </tr>
                                <tr>
                                    <td><div class="col-md-6" style="width:100px; border:1px solid; padding:10px; text-align:center;">{{$ddcbite->az}}</div> <div class="col-md-6" style="margin-top: 10px">Azimuth</div> </td>
                                    <td><div class="col-md-6" style="width:100px; border:1px solid; padding:10px; text-align:center;">{{$ddcbite->afc_v}}</div> <div class="col-md-6" style="margin-top: 10px">AFC</div> </td>
                                    <td><div class="col-md-6" style="width:100px; border:1px solid; padding:10px; text-align:center;">{{$ddcbite->el}}</div> <div class="col-md-6" style="margin-top: 10px">Elevation</div> </td>
                                    <td><div class="col-md-6" style="width:100px; border:1px solid; padding:10px; text-align:center;">{{$ddcbite->mag_i}}</div> <div class="col-md-6" style="margin-top: 10px">Mag I</div> </td>
                                    <td><div class="col-md-6" style="width:100px; border:1px solid; padding:10px; text-align:center;">{{$ddcbite->rx_p15v}}</div> <div class="col-md-6" style="margin-top: 10px">Rx 15V</div> </td>
                                    <td><div class="col-md-6" style="width:100px; border:1px solid; padding:10px; text-align:center;">{{$ddcbite->rx_n15v}}</div> <div class="col-md-6" style="margin-top: 10px">Rx -15V</div> </td>
                                </tr>
                                <tr>
                                    <td><div class="col-md-6" style="width:100px; border:1px solid; padding:10px; text-align:center;">{{$ddcbite->rx_p24v}}</div> <div class="col-md-6" style="margin-top: 10px">Rx 24V</div> </td>
                                    <td><div class="col-md-6" style="width:100px; border:1px solid; padding:10px; text-align:center;">{{$ddcbite->forward_pwr}}</div> <div class="col-md-6" style="margin-top: 10px">Forward Pwr</div> </td>
                                    <td><div class="col-md-6" style="margin-left:-17px ;width:100px; border:1px solid; padding:10px; text-align:center;">{{$ddcbite->reverse_pwr}}</div> <div class="col-md-6" style="margin-top: 10px">Reverse Pwr</div> </td>
                                </tr>
                                <tr><td>Status</td></tr>
                                <tr>
                                    <td><div class="col-md-6" style="width:100px; height:43px; border:1px solid; padding:10px; text-align:center; @if($ddcbite->mod_pwr==1) background-color:green;@else background-color:red; @endif"></div> <div class="col-md-6" style="margin-top: 10px">Mod Power</div> </td>
                                    <td><div class="col-md-6" style="width:100px; height:43px; border:1px solid; padding:10px; text-align:center; @if($ddcbite->mag_air==1) background-color:green;@else background-color:red; @endif"></div> <div class="col-md-6" style="margin-top: 10px">Mag Air</div> </td>
                                    <td><div class="col-md-6" style="width:100px; height:43px; border:1px solid; padding:10px; text-align:center; @if($ddcbite->hot_box_door==1) background-color:green;@else background-color:red; @endif"></div> <div class="col-md-6" style="margin-top: 10px">Hot Box Door</div> </td>
                                    <td><div class="col-md-6" style="width:100px; height:43px; border:1px solid; padding:10px; text-align:center; @if($ddcbite->el_safe==1) background-color:green;@else background-color:red; @endif"></div> <div class="col-md-6" style="margin-top: 10px">El Safe</div> </td>
                                    <td><div class="col-md-6" style="width:100px; height:43px; border:1px solid; padding:10px; text-align:center; @if($ddcbite->tx_warmup_done==1) background-color:green;@else background-color:red; @endif"></div> <div class="col-md-6" style="margin-top: 10px">Tx Warmup Cons</div> </td>
                                    <td><div class="col-md-6" style="width:100px; height:43px; border:1px solid; padding:10px; text-align:center; @if($ddcbite->trig_over_duty==1) background-color:green;@else background-color:red; @endif"></div> <div class="col-md-6" style="margin-top: 10px">Trig Over Duty</div> </td>
                                </tr>
                                <tr>
                                    <td><div class="col-md-6" style="width:100px; height:43px; border:1px solid; padding:10px; text-align:center; @if($ddcbite->az_motor_online==1) background-color:green;@else background-color:red; @endif"></div> <div class="col-md-6" style="margin-top: 10px">Az Motor Online</div> </td>
                                    <td><div class="col-md-6" style="width:100px; height:43px; border:1px solid; padding:10px; text-align:center; @if($ddcbite->interlock==1) background-color:green;@else background-color:red; @endif"></div> <div class="col-md-6" style="margin-top: 10px">interlock</div> </td>
                                    <td><div class="col-md-6" style="width:100px; height:43px; border:1px solid; padding:10px; text-align:center; @if($ddcbite->tx_safe==1) background-color:green;@else background-color:red; @endif"></div> <div class="col-md-6" style="margin-top: 10px">Tx Safe</div> </td>
                                    <td><div class="col-md-6" style="width:100px; height:43px; border:1px solid; padding:10px; text-align:center; @if($ddcbite->filament_timeout==1) background-color:green;@else background-color:red; @endif"></div> <div class="col-md-6" style="margin-top: 10px">Filament Timeout</div> </td>
                                    <td><div class="col-md-6" style="width:100px; height:43px; border:1px solid; padding:10px; text-align:center; @if($ddcbite->az_safe==1) background-color:green;@else background-color:red; @endif"></div> <div class="col-md-6" style="margin-top: 10px">Az Safe</div> </td>
                                    <td><div class="col-md-6" style="width:100px; height:43px; border:1px solid; padding:10px; text-align:center; @if($ddcbite->el_motor_online==1) background-color:green;@else background-color:red; @endif"></div> <div class="col-md-6" style="margin-top: 10px">El Motor Online</div> </td>
                                </tr>
                                <tr>
                                    <td><div class="col-md-6" style="width:100px; height:43px; border:1px solid; padding:10px; text-align:center; @if($ddcbite->filament_fault==1) background-color:green;@else background-color:red; @endif"></div> <div class="col-md-6" style="margin-top: 10px">Filament Fault</div> </td>
                                    <td><div class="col-md-6" style="width:100px; height:43px; border:1px solid; padding:10px; text-align:center; @if($ddcbite->az_motor_error==1) background-color:green;@else background-color:red; @endif"></div> <div class="col-md-6" style="margin-top: 10px">Az Motor Error</div> </td>
                                    <td><div class="col-md-6" style="width:100px; height:43px; border:1px solid; padding:10px; text-align:center; @if($ddcbite->el_motor_error==1) background-color:green;@else background-color:red; @endif"></div> <div class="col-md-6" style="margin-top: 10px">El Motor Error</div> </td>
                                    <td><div class="col-md-6" style="width:100px; height:43px; border:1px solid; padding:10px; text-align:center; @if($ddcbite->az_motor_fatal==1) background-color:green;@else background-color:red; @endif"></div> <div class="col-md-6" style="margin-top: 10px">Az Motor Fatal</div> </td>
                                    <td><div class="col-md-6" style="width:100px; height:43px; border:1px solid; padding:10px; text-align:center; @if($ddcbite->el_motor_fatal==1) background-color:green;@else background-color:red; @endif"></div> <div class="col-md-6" style="margin-top: 10px">El Motor Fatal</div> </td>
                                    <td><div class="col-md-6" style="width:100px; height:43px; border:1px solid; padding:10px; text-align:center; @if($ddcbite->standby==1) background-color:green;@else background-color:red; @endif"></div> <div class="col-md-6" style="margin-top: 10px">Standby</div> </td>
                                </tr>
                                <tr>
                                    <td><div class="col-md-6" style="width:100px; height:43px; border:1px solid; padding:10px; text-align:center; @if($ddcbite->vswr_fault==1) background-color:green;@else background-color:red; @endif"></div> <div class="col-md-6" style="margin-top: 10px">VSWR Fault</div> </td>
                                    <td><div class="col-md-6" style="width:100px; height:43px; border:1px solid; padding:10px; text-align:center; @if($ddcbite->tx_control_timeout==1) background-color:green;@else background-color:red; @endif"></div> <div class="col-md-6" style="margin-top: 10px">Tx Control Timeout</div> </td>
                                    <td><div class="col-md-6" style="width:100px; height:43px; border:1px solid; padding:10px; text-align:center; @if($ddcbite->radiate==1) background-color:green;@else background-color:red; @endif"></div> <div class="col-md-6" style="margin-top: 10px">Radiate</div> </td>
                                    <td><div class="col-md-6" style="width:100px; height:43px; border:1px solid; padding:10px; text-align:center; @if($ddcbite->VSWR_under_range==1) background-color:green;@else background-color:red; @endif"></div> <div class="col-md-6" style="margin-top: 10px">Vswr Under Range</div> </td>
                                    <td><div class="col-md-6" style="width:100px; height:43px; border:1px solid; padding:10px; text-align:center; @if($ddcbite->local==1) background-color:green;@else background-color:red; @endif"></div> <div class="col-md-6" style="margin-top: 10px">Remote/Local</div> </td>
                                    <td><div class="col-md-6" style="width:100px; height:43px; border:1px solid; padding:10px; text-align:center; @if($ddcbite->wg_press==1) background-color:green;@else background-color:red; @endif"></div> <div class="col-md-6" style="margin-top: 10px">WG Press</div> </td>
                                </tr>
                                <tr>
                                    <td><div class="col-md-6" style="width:100px; height:43px; border:1px solid; padding:10px; text-align:center; @if($ddcbite->servo_pwr==1) background-color:green;@else background-color:red; @endif"></div> <div class="col-md-6" style="margin-top: 10px">Servo Pwr</div> </td>
                                    <td><div class="col-md-6" style="margin-left:-17px; width:100px; height:43px; border:1px solid; padding:10px; text-align:center; @if($ddcbite->radar_pwr==1) background-color:green;@else background-color:red; @endif"></div> <div class="col-md-6" style="margin-top: 10px">Radar Power</div> </td>
                                </tr>
                            </table>
                            </div>
                            <div class="row" id="chartbmkg1">

                            </div>
                            <div class="row" id="chartbmkg2">

                            </div>
                            <div class="row" id="chartbmkg3">

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@section('footer')
<script src="https://code.highcharts.com/highcharts.js"></script>

<script>
    Highcharts.chart('chartbmkg1', {
chart: {
    type: 'line',
    scrollablePlotArea: {
        minWidth: 700,
        scrollPositionX: 1
    }
},

title: {
    text: 'BITE RADAR (DDCBITE)'
},

// subtitle: {
//     text: 'Stasiun Meteorologi Supadio Pontianak'
// },

yAxis: {
    title: {
        // text: 'Suhu (\xB0C)'
    },
    plotLines:[{
        value:0,
        width:1,
    }]
},

xAxis: {
    categories: {!!json_encode($categories)!!}

},

legend: {
    layout: 'vertical',
    align: 'right',
    verticalAlign: 'middle'
},

// plotOptions: {
//     series: {
//         label: {
//             connectorAllowed: false
//         },
//         pointStart: 2010
//     }
// },

series: [{
    name: 'Cab Temp',
    data: {!!json_encode($data_ddcbite1)!!}
}, {
    name: 'Hot Box Temp',
    data: {!!json_encode($data_ddcbite2)!!}
}],

responsive: {
    rules: [{
        condition: {
            maxWidth: 500
        },
        chartOptions: {
            legend: {
                layout: 'horizontal',
                align: 'center',
                verticalAlign: 'bottom'
            }
        }
    }]
}

});
</script>

<script>
    Highcharts.chart('chartbmkg2', {
chart: {
    type: 'line',
    scrollablePlotArea: {
        minWidth: 700,
        scrollPositionX: 1
    }
},

title: {
    text: 'BITE RADAR (DDCBITE)'
},

// subtitle: {
//     text: 'Stasiun Meteorologi Supadio Pontianak'
// },

yAxis: {
    title: {
        // text: 'Suhu (\xB0C)'
    },
    plotLines:[{
        value:0,
        width:1,
    }]
},

xAxis: {
    categories: {!!json_encode($categories)!!}

},

legend: {
    layout: 'vertical',
    align: 'right',
    verticalAlign: 'middle'
},

// plotOptions: {
//     series: {
//         label: {
//             connectorAllowed: false
//         },
//         pointStart: 2010
//     }
// },

series: [{
    name: 'HVPS V',
    data: {!!json_encode($data_ddcbite3)!!}
}, {
    name: 'HVPS I',
    data: {!!json_encode($data_ddcbite4)!!}
}, {
    name: 'Mag I',
    data: {!!json_encode($data_ddcbite5)!!}
}, {
    name: 'VSWR',
    data: {!!json_encode($data_ddcbite6)!!}
}],

responsive: {
    rules: [{
        condition: {
            maxWidth: 500
        },
        chartOptions: {
            legend: {
                layout: 'horizontal',
                align: 'center',
                verticalAlign: 'bottom'
            }
        }
    }]
}

});
</script>

<script>
    Highcharts.chart('chartbmkg3', {
chart: {
    type: 'line',
    scrollablePlotArea: {
        minWidth: 700,
        scrollPositionX: 1
    }
},

title: {
    text: 'BITE RADAR (DDCBITE)'
},

// subtitle: {
//     text: 'Stasiun Meteorologi Supadio Pontianak'
// },

yAxis: {
    title: {
        // text: 'Suhu (\xB0C)'
    },
    plotLines:[{
        value:0,
        width:1,
    }]
},

xAxis: {
    categories: {!!json_encode($categories)!!}

},

legend: {
    layout: 'vertical',
    align: 'right',
    verticalAlign: 'middle'
},

// plotOptions: {
//     series: {
//         label: {
//             connectorAllowed: false
//         },
//         pointStart: 2010
//     }
// },

series: [{
    name: 'Rx -15V',
    data: {!!json_encode($data_ddcbite7)!!}
}, {
    name: 'Rx 15V',
    data: {!!json_encode($data_ddcbite8)!!}
}, {
    name: 'Rx 24V',
    data: {!!json_encode($data_ddcbite9)!!}
}],

responsive: {
    rules: [{
        condition: {
            maxWidth: 500
        },
        chartOptions: {
            legend: {
                layout: 'horizontal',
                align: 'center',
                verticalAlign: 'bottom'
            }
        }
    }]
}

});
</script>

@stop
@endsection