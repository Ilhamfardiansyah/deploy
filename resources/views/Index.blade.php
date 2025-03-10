@extends('layouts.main')

@section('content')
    <div class="section">
        <div class="row">
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-body">
                        <p> <img src="{{ asset('assets/png/SPOPS.PNG') }}" alt="" width="350"> </p>

                        <!-- Vertically centered Modal -->
                        <form action="{{ route('printOps') }}" method="GET">
                            <button type="submit" class="btn btn-primary">
                                Open
                            </button>
                        </form>
                    </div>
                </div>

                <div class="card">
                    <div class="card-body">
                        <p> <img src="{{ asset('assets/png/SPAHLI.PNG') }}" alt="" width="350"> </p>

                        <!-- Vertically centered Modal -->
                        <form action="{{ route('printTug') }}" method="GET">
                            <button type="submit" class="btn btn-primary">
                                Open
                            </button>
                        </form>
                    </div>
                </div>
            </div>

            {{-- batas --}}

            <div class="col-lg-6">
                <div class="card">
                    <div class="card-body">
                        <p><img src="{{ asset('assets/png/SPTUG.png') }}" alt="" width="330">
                        </p>

                        <!-- Vertically centered Modal -->
                        <form action="{{ route('printTug') }}" method="GET">
                            <button type="submit" class="btn btn-primary">
                                Open
                            </button>
                        </form>
                    </div>
                </div>

                <div class="card">
                    <div class="card-body">
                        <p><img src="{{ asset('assets/png/NODIS.png') }}" alt="" width="250">
                        </p>

                        <!-- Vertically centered Modal -->
                        <form action="{{ route('printNodis') }}" method="GET">
                            <button type="submit" class="btn btn-primary">
                                Open
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
