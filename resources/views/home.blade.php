@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><h2>{{ __('𝗕𝗜𝗘𝗡𝗩𝗘𝗡𝗜𝗗𝗢 :3') }}</div>
                                                                       </h2>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <h4>{{ __('𝗛𝗮𝘀 𝗶𝗻𝗶𝗰𝗶𝗮𝗱𝗼 𝘀𝗲𝘀𝗶𝗼𝗻!!') }}</h4>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
