<!doctype html>
<html lang="en">
<head>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.9.0/fullcalendar.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.9.0/fullcalendar.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" />

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

                    var chartwidth = $('#chartparent').width()

                    var options = {
                        title:'',
                        chartArea: {width:chartwidth,left:60,top:80,height:110},




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





    <meta name="csrf-token" content="{{ csrf_token() }}">








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




{{--    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>--}}

    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

    {{--font--}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap" rel="stylesheet">



    <title>OfferBuzz</title>
</head>

<body>






<script type="text/javascript">

    $(document).ready(function () {

        /*------------------------------------------
        --------------------------------------------
        Get Site URL
        --------------------------------------------
        --------------------------------------------*/
        var SITEURL = "{{ url('/') }}";

        /*------------------------------------------
        --------------------------------------------
        CSRF Token Setup
        --------------------------------------------
        --------------------------------------------*/
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        /*------------------------------------------
        --------------------------------------------
        FullCalender JS Code
        --------------------------------------------
        --------------------------------------------*/
        var calendar = $('#calendar').fullCalendar({
            editable: true,
            events: SITEURL + "/fullcalender",
            displayEventTime: false,
            editable: true,
            eventRender: function (event, element, view) {
                if (event.allDay === 'true') {
                    event.allDay = true;
                } else {
                    event.allDay = false;
                }
            },
            selectable: true,
            selectHelper: true,
            select: function (start, end, allDay) {
                var title = prompt('Event Title:');
                if (title) {
                    var start = $.fullCalendar.formatDate(start, "Y-MM-DD");
                    var end = $.fullCalendar.formatDate(end, "Y-MM-DD");
                    $.ajax({
                        url: SITEURL + "/fullcalenderAjax",
                        data: {
                            title: title,
                            start: start,
                            end: end,
                            type: 'add'
                        },
                        type: "POST",
                        success: function (data) {
                            displayMessage("Event Created Successfully");

                            calendar.fullCalendar('renderEvent',
                                {
                                    id: data.id,
                                    title: title,
                                    start: start,
                                    end: end,
                                    allDay: allDay
                                },true);

                            calendar.fullCalendar('unselect');
                        }
                    });
                }
            },
            eventDrop: function (event, delta) {
                var start = $.fullCalendar.formatDate(event.start, "Y-MM-DD");
                var end = $.fullCalendar.formatDate(event.end, "Y-MM-DD");

                $.ajax({
                    url: SITEURL + '/fullcalenderAjax',
                    data: {
                        title: event.title,
                        start: start,
                        end: end,
                        id: event.id,
                        type: 'update'
                    },
                    type: "POST",
                    success: function (response) {
                        displayMessage("Event Updated Successfully");
                    }
                });
            },
            eventClick: function (event) {
                var deleteMsg = confirm("Do you really want to delete?");
                if (deleteMsg) {
                    $.ajax({
                        type: "POST",
                        url: SITEURL + '/fullcalenderAjax',
                        data: {
                            id: event.id,
                            type: 'delete'
                        },
                        success: function (response) {
                            calendar.fullCalendar('removeEvents', event.id);
                            displayMessage("Event Deleted Successfully");
                        }
                    });
                }
            }

        });

    });

    /*------------------------------------------
    --------------------------------------------
    Toastr Success Code
    --------------------------------------------
    --------------------------------------------*/
    function displayMessage(message) {
        toastr.success(message, 'Event');
    }

</script>


















<div id="app" >
    @include('header')

    <main>
        @yield('content')
    </main>
</div>





<script src="{{asset('js/bootstrap.min.js')}}"></script>
    <script src="{{asset('js/chart.js')}}"></script>
    <script src="./js/addons/datatables.min.js"></script>


    @if( request()->routeIs('dashboard'))
        <script src="{{$chart->cdn()}}"></script>
        {{$chart->script()}}
    @endif



    <!-- summernote css/js -->
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.js"></script>
    <script type="text/javascript">
        $('#summernote').summernote({
            height: 400
        });
    </script>



    <script>
        var MyBtn = document.getElementsByClassName("myBtn");
        var index=0;

        function Button(n){

            CurrentButton(index=n);

        }
        function CurrentButton(n)
        {

            for(var i=0;i<MyBtn.length;i++){

                MyBtn[i].className = MyBtn[i].className.replace("Active","");
            }
            MyBtn[n].className +="Active";
        }

        function List()
        {

            var myItem1 = document.getElementById("listing")
            var myItem2 = document.getElementById("griding")

            myItem2.style.display="none";
            myItem1.style.display="block";


        }

        function Grid()
        {

            var myItem2 = document.getElementById("griding")
            var myItem1 = document.getElementById("listing")

            myItem2.style.display="block";
            myItem1.style.display="none";
            myItem2.style.display="flex";

        }

    </script>

<script type="text/javascript">

    $(document).ready(function () {

        /*------------------------------------------
        --------------------------------------------
        Get Site URL
        --------------------------------------------
        --------------------------------------------*/
        var SITEURL = "{{ url('/') }}";

        /*------------------------------------------
        --------------------------------------------
        CSRF Token Setup
        --------------------------------------------
        --------------------------------------------*/
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        /*------------------------------------------
        --------------------------------------------
        FullCalender JS Code
        --------------------------------------------
        --------------------------------------------*/
        var calendar = $('#calendar').fullCalendar({
            editable: true,
            events: SITEURL + "/fullcalender",
            displayEventTime: false,
            editable: true,
            eventRender: function (event, element, view) {
                if (event.allDay === 'true') {
                    event.allDay = true;
                } else {
                    event.allDay = false;
                }
            },
            selectable: true,
            selectHelper: true,
            select: function (start, end, allDay) {
                var title = prompt('Event Title:');
                if (title) {
                    var start = $.fullCalendar.formatDate(start, "Y-MM-DD");
                    var end = $.fullCalendar.formatDate(end, "Y-MM-DD");
                    $.ajax({
                        url: SITEURL + "/fullcalenderAjax",
                        data: {
                            title: title,
                            start: start,
                            end: end,
                            type: 'add'
                        },
                        type: "POST",
                        success: function (data) {
                            displayMessage("Event Created Successfully");

                            calendar.fullCalendar('renderEvent',
                                {
                                    id: data.id,
                                    title: title,
                                    start: start,
                                    end: end,
                                    allDay: allDay
                                },true);

                            calendar.fullCalendar('unselect');
                        }
                    });
                }
            },
            eventDrop: function (event, delta) {
                var start = $.fullCalendar.formatDate(event.start, "Y-MM-DD");
                var end = $.fullCalendar.formatDate(event.end, "Y-MM-DD");

                $.ajax({
                    url: SITEURL + '/fullcalenderAjax',
                    data: {
                        title: event.title,
                        start: start,
                        end: end,
                        id: event.id,
                        type: 'update'
                    },
                    type: "POST",
                    success: function (response) {
                        displayMessage("Event Updated Successfully");
                    }
                });
            },
            eventClick: function (event) {
                var deleteMsg = confirm("Do you really want to delete?");
                if (deleteMsg) {
                    $.ajax({
                        type: "POST",
                        url: SITEURL + '/fullcalenderAjax',
                        data: {
                            id: event.id,
                            type: 'delete'
                        },
                        success: function (response) {
                            calendar.fullCalendar('removeEvents', event.id);
                            displayMessage("Event Deleted Successfully");
                        }
                    });
                }
            }

        });

    });

    /*------------------------------------------
    --------------------------------------------
    Toastr Success Code
    --------------------------------------------
    --------------------------------------------*/
    function displayMessage(message) {
        toastr.success(message, 'Event');
    }

</script>


</body>
</html>
