<x-layout>
    <x-slot:vite>
        @vite('resources/css/style.css')
    </x-slot:vite>
    <div class="page-title">
        Deals
    </div>
    <div class="filter-options">
        <div class="status">
            <span class="active">
                Ongoing
            </span>
            <span>
                Finished
            </span>
        </div>
        <div>
            <div>
                <a id="show" class="button">Add deal</a>
            </div>
            <div class="filter">
                <div class="icon">
                    <i class="fa-solid fa-filter"></i>
                </div>
                <span>Filter</span>
            </div>
        </div>
    </div>
    <div class="table">
    <table>
        <thead>
            <tr>
                <th>
                    Reference number
                </th>
                <th>
                    Deal name
                </th>
                <th>
                    Reservations left
                </th>
                <th>
                    End date
                </th>
                <th>
                    Room type
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
</div>
<x-slot:section>
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
</x-slot:section>
</x-layout>

