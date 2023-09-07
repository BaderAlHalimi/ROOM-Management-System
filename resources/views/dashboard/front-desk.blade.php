<x-layout>
    <x-slot:vite>
        @vite('resources/css/style.css')
    </x-slot:vite>
    <div class="page-title">
        Front desk
    </div>
    <div class="container-filter-options">
        <div class="filter-options">
            <div class="status">
                <span class="active">
                    All room(5)
                </span>
                <span>
                    Single
                </span>
                <span>
                    Double
                </span>
                <span>
                    Triple
                </span>
                <span>
                    VIP
                </span>
            </div>
                <div class="date">
                    <div class="check-in">
                        <label for="check_in">Check in</label>
                        <input type="date" name="check_in" id="check_in">
                    </div>
                    <div class="check-out">
                        <label for="check_out">Check out</label>
                        <input type="date" name="check_out" id="check_out">
                    </div>
                </div>
                <div class="people">
                    <div class="adult">
                        <div>
                            <span class="title">
                                Adult
                            </span>
                            <p>
                                Older than 12 years
                            </p>
                        </div>
                        <div class="number">
                            <div class="sup">
                                <i class="fa-solid fa-minus"></i>
                            </div>
                            <span class="num">1</span>
                            <div class="add">
                                <i class="fa-solid fa-plus"></i>
                            </div>
                        </div>
                    </div>
                    <div class="children">
                        <div>
                            <span class="title">
                                Children
                            </span>
                            <p>
                                0 - 12 years
                            </p>
                        </div>
                        <div class="number">
                            <div class="sup">
                                <i class="fa-solid fa-minus"></i>
                            </div>
                            <span class="num">1</span>
                            <div class="add">
                                <i class="fa-solid fa-plus"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <a href="#" class="button">Check availability</a>
    </div>
    <div class="table">
    <table>
        <thead>
            <tr>
                <th>
                    Room number
                </th>
                <th>
                    Bed type
                </th>
                <th>
                    Room floor
                </th>
                <th class="colspan-2">
                    Room facility
                </th>
                <th>
                    Status
                </th>
                {{-- <th>
                    Status
                </th> --}}
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
                <td class="colspan-2">
                    $ 467
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
                <td class="colspan-2">
                    $ 467
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
</div>
    
</x-layout>

<section class="add" id="add" hidden>
    <div class="overlay" id="overlay"></div>
    <div class="add-deal active" id="add-deal">
        <div class="row">
            <div class="form-control">
                <label for="">Deal name</label>
                <input type="text" placeholder="Enter deal name">
            </div>
            <div class="form-control">
                <label for="">Reference number</label>
                <input type="text" placeholder="Enter deal name">
            </div>
        </div>
        <div class="row">
            <div class="form-control">
                <label for="">tags</label>
                <input type="text" placeholder="Select tags">
            </div>
            <div class="form-control">
                <label for="">price</label>
                <input type="number" placeholder="Enter the price of deal">
            </div>
        </div>
        <div class="row">
            <div class="form-control">
                <label for="">Room facility</label>
                <textarea placeholder="Enter a description...."></textarea>
            </div>
        </div>
        <div class="row">
            <div class="form-control">
                <label for="">tags</label>
                <input type="text" placeholder="Select tags">
            </div>
            <div class="form-control">
                <label for="">price</label>
                <input type="number" placeholder="Enter the price of deal">
            </div>
        </div>
        <div class="row">
            <div class="form-control">
                <label for="">tags</label>
                <input type="text" placeholder="Select tags">
            </div>
            <div class="form-control">
                <label for="">price</label>
                <input type="number" placeholder="Enter the price of deal">
            </div>
        </div>
        <div class="buttons">
            <button type="button" class="cancel">cancel</button>
            <button type="submit">save</button>
        </div>
    </div>
</section>
