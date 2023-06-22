@php
    $nav_modulex = 'App Settings';
    $nav_country = 'text-primary';
@endphp

<x-layout>

    @include('partials._appusertab')
    @include('partials.appsettings._appmenu')
    <div>
        <div class="row">
            <div class="col-12 col-sm-6 col-md-6">
                <h3 class="fw-semibold text-primary mb-4" style="padding-right: 0px;padding-left: 15px;">Country</h3>
            </div>
            <div class="col-12 col-sm-6 col-md-6 text-end" style="margin-bottom: 30px;"><a href="/appsettingscountry"
                    class="btn btn-primary" role="button" style="margin-right: 15px;padding-right: 15px"><i
                        class="fa fa-plus"></i>Add
                    Country</a></div>
        </div>
        <div class="card" id="TableSorterCard">
            <div class="card-header py-3">
                <div class="row table-topper align-items-center">
                    <div class="col-12 col-sm-5 col-md-6 text-start" style="margin: 0px;padding: 5px 15px;">
                        <p class="text-dark m-0 fw-bold">List of Countries</p>
                    </div>
                    <div class="col-12 col-sm-7 col-md-6 text-end" style="margin: 0px;padding: 5px 15px;">
                        <form style="padding: 10px;padding-left: 10px;padding-right: 10px;margin-right: 2px;"
                            action="#" method="post">
                            <div class="input-group mb-3"><input class="form-control form-control" type="text"
                                    placeholder="Search by country name" aria-label="Search"
                                    aria-describedby="button-addon2" name="globalsearch" autocomplete="on"><button
                                    class="btn btn-outline-secondary fw-semibold text-bg-warning" type="submit"
                                    id="button-addon2" style="border-style: none;">Search</button></div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="table-responsive">
                        <table class="table table-striped table-hover tablesorter" id="country-table">
                            <thead class="thead-dark">
                                <tr>
                                    <th class="text-center">S/N</th>
                                    <th class="text-start">COUNTRY NAME</th>
                                    <th class="text-start filter-false sorter-false">ACTIONS</th>
                                </tr>
                            </thead>
                            <tbody class="text-center">
                                @foreach ($Countries as $index => $Country)
                                    <tr>
                                        <td>{{ $index + $Countries->firstItem() }}</td>
                                        <td class="text-start">{{ $Country['name'] }}</td>
                                        <td class="text-start" style="max-height: 20px;height: 20px;">
                                            <a href="#"><i class="fas fa-pen"></i></a>
                                            <a href="{{ 'deletecountry/' . $Country['id'] }}"><i
                                                    class="fas fa-trash btnNoBorders" style="color: #DC3545;"></i></a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        {{ $Countries->links() }}
                    </div>
                </div>
            </div>

        </div>
    </div>


</x-layout>
