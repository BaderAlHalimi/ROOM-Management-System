<x-layout>
    <x-slot:vite>
        <link href="{{ asset('assets/css/mobiscroll.javascript.min.css') }}" rel="stylesheet" />
        @vite('resources/css/style.css')
    </x-slot:vite>
    <div class="filter-options" style="margin: 15px 0 25px;">
        <div class="status">
            <span class="active" data-filter='year'>
                Year
            </span>
            <span data-filter='month'>
                Month
            </span>
            <span data-filter='week'>
                Week
            </span>
            <span data-filter='day'>
                Day
            </span>
        </div>
        <select name="" id="" class="search">
            <option value="" selected>bla ba</option>
            <option value="">bla ba</option>
            <option value="">bla ba</option>
            <option value="">bla ba</option>
        </select>
    </div>
    <div id="demo-month-view" style="    border: 1px solid var(--gray-color-100);border-radius: 5px;"></div>
    <x-slot:script>
        <script>
            const data = [{
                start: '2023-09-22T00:00',
                end: '2023-09-22T02:00',
                title: 'Event 1',
                resource: 5
            }, {
                start: '2023-09-10T09:00',
                end: '2023-09-15T15:00',
                title: 'Event 2',
                resource: 3
            }, {
                start: '2023-09-12T00:00',
                end: '2023-09-14T00:00',
                title: 'Event 3',
                resource: 4
            }, {
                start: '2023-09-15T07:00',
                end: '2023-09-20T12:00',
                title: 'Event 4',
                resource: 5
            }, {
                start: '2023-09-03T00:00',
                end: '2023-09-10T00:00',
                title: 'Event 5',
                resource: 6
            }, {
                start: '2023-09-10T08:00',
                end: '2023-09-11T20:00',
                title: 'Event 6',
                resource: 7
            }, {
                start: '2023-09-22T00:00',
                end: '2023-09-28T00:00',
                title: 'Event 7',
                resource: 7
            }, {
                start: '2023-09-08T00:00',
                end: '2023-09-13T00:00',
                title: 'Event 8',
                resource: 15
            }, {
                start: '2023-09-25T00:00',
                end: '2023-09-27T00:00',
                title: 'Event 9',
                resource: 10
            }, {
                start: '2023-09-20T00:00',
                end: '2023-09-23T00:00',
                title: 'Event 10',
                resource: 12
            }];
            const resources = [{
                id: 1,
                name: 'Resource A',
                color: '#e20000'
            }, {
                id: 2,
                name: 'Resource B',
                color: '#76e083'
            }, {
                id: 3,
                name: 'Resource C',
                color: '#4981d6'
            }, {
                id: 4,
                name: 'Resource D',
                color: '#e25dd2'
            }, {
                id: 5,
                name: 'Resource E',
                color: '#1dab2f'
            }, {
                id: 6,
                name: 'Resource F',
                color: '#d6d145'
            }, {
                id: 7,
                name: 'Resource G',
                color: '#34c8e0'
            }, {
                id: 8,
                name: 'Resource H',
                color: '#9dde46'
            }, {
                id: 9,
                name: 'Resource I',
                color: '#166f6f'
            }, {
                id: 10,
                name: 'Resource J',
                color: '#f7961e'
            }, {
                id: 11,
                name: 'Resource K',
                color: '#34c8e0'
            }, {
                id: 12,
                name: 'Resource L',
                color: '#af0000'
            }, {
                id: 13,
                name: 'Resource M',
                color: '#446f1c'
            }, {
                id: 14,
                name: 'Resource N',
                color: '#073138'
            }, {
                id: 15,
                name: 'Resource O',
                color: '#4caf00'
            }];
            document.querySelectorAll('.status > span').forEach((ele, i) => {
                ele.onclick = function() {
                    document.querySelectorAll('.status > span').forEach((element, i) => {
                        element.classList.remove('active');
                    })
                    ele.classList.add('active');
                    const view = {
                        timeline: {
                            type: ele.dataset.filter,
                        },
                        startTime: '08:00',
                        endTime: '17:00',
                        timeCellStep: 60,
                        timeLabelStep: 60,
                    };
                    mobiscroll.eventcalendar('#demo-month-view', {
                        view: view,
                        data: data,
                        resources: resources,
                        clickToCreate: false,
                        dragToCreate: false,
                        dragToMove: false,
                        dragToResize: false,
                        dragTimeStep: 15,
                        eventDelete: false
                    });
                    console.log(ele.dataset.filter, view);
                }
            })
        </script>
        <script src="{{ asset('assets/js/mobiscroll.javascript.min.js') }}"></script>
        <script>
            mobiscroll.setOptions({
                theme: 'ios',
                themeVariant: 'light'
            });
            // day , week ,
            mobiscroll.eventcalendar('#demo-month-view', {
                view: {
                    timeline: {
                        type: 'menth',
                    },
                },
                data: data,
                resources: resources,
                clickToCreate: false,
                dragToCreate: false,
                dragToMove: false,
                dragToResize: false,
                dragTimeStep: 15,
                eventDelete: false
            });
        </script>
    </x-slot:script>
</x-layout>
{{--
     // startDay: 1,
                        // endDay: 5,
                        // startTime: '09:00',
                        // endTime: '18:00',
                        // timeCellStep: 60,
                        // timeLabelStep: 60,
                        // weekNumbers: true,
                        // size: 4,
                        // resolutionHorizontal: 'day',
                        // eventList: true,
                        // currentTimeIndicator: true,

                    },
                    //     schedule: {
                    //     type: ''
                    // }
                    // schedule
                    // timeline: {
                    // type: 'month',
                    // resolutionHorizontal: 'hour',
                    // resolutionVertical: 'day'
     --}}
