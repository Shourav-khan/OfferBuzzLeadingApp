<!doctype html>
<html lang="en">
<head>



        <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
        <script type="text/javascript">
            google.charts.load('current', {'packages':['bar']});
            google.charts.setOnLoadCallback(drawChart);

            function drawChart() {
                var data = google.visualization.arrayToDataTable([
                    [ '','Application','Progress'],
                    ['Sun', 50, 100,],
                    ['Mon',  60, 200],
                    ['Tue',  70, 11],
                    ['Wed',  80, 40],
                    ['Thu',  90, 540],
                    ['Fri',  100, 40],
                    ['Sat',  110, 540],

                ]);

                var options = {
                    chart: {

                    },
                    bars: 'vertical' // Required for Material Bar Charts.
                };

                var chart = new google.charts.Bar(document.getElementById('barchart_material'));

                chart.draw(data, {isStacked: true,

                    series: [{color: '#CB0E00', visibleInLegend: true}, {color: '#F6B301', visibleInLegend: false}]
                });
            }



        </script>


    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
        google.charts.load('current', {'packages':['bar']});
        google.charts.setOnLoadCallback(drawChart);

        function drawChart() {
            var data = google.visualization.arrayToDataTable([
                [ '',''],
                ['Jan',  100],
                ['Feb',  200],
                ['Mar',   11],
                ['Apr',   40],
                ['May',   540],
                ['Jun',  100],
                ['Jul',  110],
                ['Aug',  110],
                ['Sep',  110],
                ['Oct',  110],
                ['Nov',  110],
                ['Dec',  110],



            ]);

            var options = {
                chart: {

                },
                bars: 'vertical' // Required for Material Bar Charts.
            };

            var chart = new google.charts.Bar(document.getElementById('barchart_material1'));

            chart.draw(data, {isStacked: true,

                series: [{color: '#CB0E00', visibleInLegend: true}]
            });
        }



    </script>



{{--working graph--}}

    <script type="text/javascript">
        google.charts.load('current', {'packages':['corechart']});
        google.charts.setOnLoadCallback(drawChart);

        function drawChart() {
            var data = google.visualization.arrayToDataTable([
                ['Month', 'Parcent'],
                ['Jan',54.8],
                ['Feb',54.8],
                ['Mar',48.6],
                ['Apr',44.4],
                ['May',23.9],
                ['Jun',14.5]
            ]);

            var options = {
                title:''
            };

            var chart = new google.visualization.PieChart(document.getElementById('working_graph'));
            chart.draw(data, options);
        }
    </script>
{{--working graph end--}}


{{--    Success Rate--}}

    <script type="text/javascript">
        google.charts.load('current', {'packages':['corechart']});
        google.charts.setOnLoadCallback(drawChart);

        function drawChart() {
            var data = google.visualization.arrayToDataTable([
                ['Contry', 'Mhl'],
                ['Italy',55],
                ['France',49],
                ['Spain',44],
                ['USA',24],
                ['Argentina',15]
            ]);

            var options = {
                title:''
            };

            var chart = new google.visualization.BarChart(document.getElementById('success_rate'));
            chart.draw(data, options);
        }
    </script>

{{--    SuccessRate end--}}


    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
{{--    <link rel="stylesheet" href="{{asset('css/mdb.min.css')}}">--}}
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
    <!-- Font Awesome -->
    <link
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
        rel="stylesheet"
    />
    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap"
        rel="stylesheet"
    />
    <!-- MDB -->
{{--    <link--}}
{{--        href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/4.0.0/mdb.min.css"--}}
{{--        rel="stylesheet"--}}
{{--    />--}}

    <link rel="stylesheet" href="./css/addons/datatables.min.css">
    <link rel="stylesheet" href="css/style.css">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">




    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

{{--font--}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap" rel="stylesheet">



    <title>OfferBuzz</title>
</head>
<body>

@yield('content')


<script src="{{asset('js/bootstrap.min.js')}}"></script>

<script src="{{asset('js/chart.js')}}"></script>

{{--<script src="{{asset('js/mdb.min.js')}}"></script>--}}
{{--<script type="text/javascript" src="node_modules/mdbootstrap/js/jquery.min.js"></script>--}}
{{--<script type="text/javascript" src="node_modules/mdbootstrap/js/popper.min.js"></script>--}}
{{--<script type="text/javascript" src="node_modules/mdbootstrap/js/bootstrap.min.js"></script>--}}
{{--<script type="text/javascript" src="node_modules/mdbootstrap/js/mdb.min.js"></script>--}}
<script src="./js/addons/datatables.min.js"></script>
<!-- MDB -->
{{--<script--}}
{{--    type="text/javascript"--}}
{{--    src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/4.0.0/mdb.min.js"--}}
{{--></script>--}}


{{--<script src="{{$chart->cdn()}}"></script>--}}
{{--{{$chart->script()}}--}}

<!-- summernote css/js -->
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.js"></script>
<script type="text/javascript">
    $('#summernote').summernote({
        height: 400
    });
</script>

<script>
    const events = [
        {
            summary: 'JS Conference',
            start: {
                date: Calendar.dayjs().format('DD/MM/YYYY'),
            },
            end: {
                date: Calendar.dayjs().format('DD/MM/YYYY'),
            },
            color: {
                background: '#cfe0fc',
                foreground: '#0a47a9',
            },
        },
        {
            summary: 'Vue Meetup',
            start: {
                date: Calendar.dayjs().add(1, 'day').format('DD/MM/YYYY'),
            },
            end: {
                date: Calendar.dayjs().add(5, 'day').format('DD/MM/YYYY'),
            },
            color: {
                background: '#ebcdfe',
                foreground: '#6e02b1',
            },
        },
        {
            summary: 'Angular Meetup',
            description: 'Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur',
            start: {
                date: Calendar.dayjs().subtract(3, 'day').format('DD/MM/YYYY'),
                dateTime: Calendar.dayjs().subtract(3, 'day').format('DD/MM/YYYY') + ' 10:00',
            },
            end: {
                date: Calendar.dayjs().add(3, 'day').format('DD/MM/YYYY'),
                dateTime: Calendar.dayjs().add(3, 'day').format('DD/MM/YYYY') + ' 14:00',
            },
            color: {
                background: '#c7f5d9',
                foreground: '#0b4121',
            },
        },
        {
            summary: 'React Meetup',
            start: {
                date: Calendar.dayjs().add(5, 'day').format('DD/MM/YYYY'),
            },
            end: {
                date: Calendar.dayjs().add(8, 'day').format('DD/MM/YYYY'),
            },
            color: {
                background: '#fdd8de',
                foreground: '#790619',
            },
        },
        {
            summary: 'Meeting',
            start: {
                date: Calendar.dayjs().add(1, 'day').format('DD/MM/YYYY'),
                dateTime: Calendar.dayjs().add(1, 'day').format('DD/MM/YYYY') + ' 8:00',
            },
            end: {
                date: Calendar.dayjs().add(1, 'day').format('DD/MM/YYYY'),
                dateTime: Calendar.dayjs().add(1, 'day').format('DD/MM/YYYY') + ' 12:00',
            },
            color: {
                background: '#cfe0fc',
                foreground: '#0a47a9',
            },
        },
        {
            summary: 'Call',
            start: {
                date: Calendar.dayjs().add(2, 'day').format('DD/MM/YYYY'),
                dateTime: Calendar.dayjs().add(2, 'day').format('DD/MM/YYYY') + ' 11:00',
            },
            end: {
                date: Calendar.dayjs().add(2, 'day').format('DD/MM/YYYY'),
                dateTime: Calendar.dayjs().add(2, 'day').format('DD/MM/YYYY') + ' 14:00',
            },
            color: {
                background: '#292929',
                foreground: '#f5f5f5',
            },
        }
    ];

    const calendarElement = document.getElementById('calendar-6');
    const calendarInstance = Calendar.getInstance(calendarElement);
    calendarInstance.addEvents(events);
</script>

</body>
</html>
