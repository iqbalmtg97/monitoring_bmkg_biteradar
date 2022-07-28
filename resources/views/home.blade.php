@extends('layouts.master')

@section('dashboard','active')

@section('content')

<div class="main">
    <div class="main-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <!-- BASIC TABLE -->
                    <div class="panel">
                        <div class="panel-body">
                            <div>
                                <center><H1>Stasiun Meteorologi Cengkareng - Soekarno Hatta</H1></center>
                            </div>
                            <div class="col-md-6" id="chartbmkg">

                            </div>
                            <div class="col-md-6" id="chartbm">

                            </div>
                            <div class="col-md-12">

                            </div>
                        </div>
                    </div>
                    <!-- END BASIC TABLE -->
                </div>
            </div>
        </div>
    </div>
</div>

@section('footer')
<script src="https://code.highcharts.com/highcharts.js"></script>

<script>
    Highcharts.chart('chartbmkg', {
chart: {
    type: 'line',
    scrollablePlotArea: {
        minWidth: 700,
        scrollPositionX: 1
    }
},

title: {
    text: 'BITE RADAR (EDRP9COMP)'
},

subtitle: {
    text: 'Stasiun Meteorologi Supadio Pontianak'
},

yAxis: {
    title: {
        text: 'Suhu (\xB0C)'
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
    name: 'T0',
    data: {!!json_encode($data_edr0)!!}
}, {
    name: 'T1',
    data: {!!json_encode($data_edr1)!!}
}, {
    name: 'T2',
    data: {!!json_encode($data_edr2)!!}
}, {
    name: 'T3',
    data: {!!json_encode($data_edr3)!!}
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
    Highcharts.chart('chartbmkg1', {
chart: {
    type: 'line',
    scrollablePlotArea: {
        minWidth: 700,
        scrollPositionX: 1
    }
},

// title: {
//     text: 'BITE RADAR (EDRP9COMP)'
// },

// subtitle: {
//     text: 'Stasiun Meteorologi Supadio Pontianak'
// },

yAxis: {
    title: {
        text: 'Tegangan (V)'
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
    name: '5V',
    data: {!!json_encode($data_edr0)!!}
}, {
    name: '-5V',
    data: {!!json_encode($data_edr1)!!}
}, {
    name: '3,3V',
    data: {!!json_encode($data_edr2)!!}
}, {
    name: '2,5V',
    data: {!!json_encode($data_edr3)!!}
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
