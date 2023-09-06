<x-layout>
    <x-slot:vite>
        @vite('resources/css/style.css')
    </x-slot:vite>
    <div class="page-title">
        Guests
    </div>
    <div class="filter-options">
        <div class="status">
            <span class="active">
                Check in
            </span>
            <span>
                Check out
            </span>
        </div>
        <div>
            <div class="filter" id="show">
                <div class="icon">
                    <i class="fa-solid fa-filter"></i>
                </div>
                <span>Filter</span>
            </div>
            <div class="search">
                <input type="text" placeholder="Search by room number">
                <i class="fa-solid fa-magnifying-glass"></i>
            </div>
        </div>
    </div>
    <table>
        <thead>
            <tr>
                <th>
                    Reservation ID
                </th>
                <th>
                    Name
                </th>
                <th>
                    Room Number
                </th>
                <th>
                    Total amount
                </th>
                <th>
                    Amount paid
                </th>
                <th>
                    Status
                </th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td class="id">
                    #5644
                </td>
                <td>
                    Alexander
                </td>
                <td>
                    A647
                </td>
                <td>
                    $ 467
                </td>
                <td>
                    $ 200
                </td>
                <td>
                    <span class="status-primary status-type">
                        Clean
                    </span>
                </td>
                <td>
                    <i class="fa-solid fa-ellipsis-vertical"></i>
                </td>
            </tr>
            <tr>
                <td class="id">
                    #5644
                </td>
                <td>
                    Alexander
                </td>
                <td>
                    A647
                </td>
                <td>
                    $ 467
                </td>
                <td>
                    $ 200
                </td>
                <td>
                    <span class="status-success status-type">
                        Inspected
                    </span>
                </td>
                <td>
                    <i class="fa-solid fa-ellipsis-vertical"></i>
                </td>
            </tr>
        </tbody>
    </table>
</x-layout>

<section class="add" id="add">
    <div class="overlay" id="overlay"></div>
    <div class="add-deal width-2 active" id="add-deal">
    <div class="row">
        <img src="{{asset('assets/images/team-2.jpg')}}" alt="customer_image">
    </div>
        <div class="row">
            <div class="form-control">
                <label for="guest_name">Guest name</label>
                <input type="text" id="guest_name" placeholder="Enter deal name" disabled>
            </div>
        </div>
        <div class="row">
            <div class="form-control">
                <label for="registration_number">Registration number</label>
                <input type="text" id="registration_number" placeholder="Select tags">
            </div>
        </div>
        <div class="row">
            <div class="form-control">
                <label for="check_in_date">Check in date</label>
                <input type="text" id="check_in_date" placeholder="Select tags">
            </div>
        </div>
        <div class="row">
            <div class="form-control">
                <label for="room_type">Room type</label>
                <input type="text" id="room_type" placeholder="Select tags">
            </div>
        </div>
        <div class="row">
            <div class="form-control">
                <label for="stay">Stay</label>
                <input type="text" id="stay" placeholder="Select tags">
            </div>
        </div>
        <div class="row">
            <div class="form-control">
                <label for="discount">Discount</label>
                <input type="text" id="discount" placeholder="Select tags">
            </div>
        </div>
    </div>
</section>
