@if (Session::has('alert'))
    <div class="alert alert-primary d-flex align-items-center" role="alert">
        <svg class="flex-shrink-0 me-2 svg-primary" xmlns="http://www.w3.org/2000/svg" height="1.5rem" viewBox="0 0 24 24"
            width="1.5rem" fill="#000000">
            <path d="M0 0h24v24H0V0z" fill="none" />
            <path
                d="M11 7h2v2h-2zm0 4h2v6h-2zm1-9C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 18c-4.41 0-8-3.59-8-8s3.59-8 8-8 8 3.59 8 8-3.59 8-8 8z" />
        </svg>
        <div>
            @foreach (Session::get('alert') as $s)
                - {{ $s }} <br />
            @endforeach
        </div>
    </div>
    @php
        Session::forget('alert');
    @endphp
@endif

@if (Session::has('success'))
    <div class="alert alert-success d-flex align-items-center" role="alert">
        <svg class="flex-shrink-0 me-2 svg-success" xmlns="http://www.w3.org/2000/svg" height="1.5rem"
            viewBox="0 0 24 24" width="1.5rem" fill="#000000">
            <path d="M0 0h24v24H0V0zm0 0h24v24H0V0z" fill="none" />
            <path
                d="M16.59 7.58L10 14.17l-3.59-3.58L5 12l5 5 8-8zM12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 18c-4.42 0-8-3.58-8-8s3.58-8 8-8 8 3.58 8 8-3.58 8-8 8z" />
        </svg>
        <div>
            @foreach (Session::get('success') as $s)
                - {{ $s }} <br />
            @endforeach
        </div>
    </div>
    @php
        Session::forget('success');
    @endphp
@endif

@if (Session::has('warning'))
    <div class="alert alert-warning d-flex align-items-center" role="alert">
        <svg class="flex-shrink-0 me-2 svg-warning" xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24"
            height="1.5rem" viewBox="0 0 24 24" width="1.5rem" fill="#000000">
            <g>
                <rect fill="none" height="24" width="24" />
            </g>
            <g>
                <g>
                    <g>
                        <path d="M12,5.99L19.53,19H4.47L12,5.99 M12,2L1,21h22L12,2L12,2z" />
                        <polygon points="13,16 11,16 11,18 13,18" />
                        <polygon points="13,10 11,10 11,15 13,15" />
                    </g>
                </g>
            </g>
        </svg>
        <div>
            @foreach (Session::get('warning') as $s)
                - {{ $s }} <br />
            @endforeach
        </div>
    </div>
    @php
        Session::forget('warning');
    @endphp
@endif

@if ($errors->any())
    <div class="alert alert-danger d-flex align-items-center" role="alert">
        <svg class="flex-shrink-0 me-2 svg-danger" xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24"
            height="1.5rem" viewBox="0 0 24 24" width="1.5rem" fill="#000000">
            <g>
                <rect fill="none" height="24" width="24" />
            </g>
            <g>
                <g>
                    <g>
                        <path
                            d="M15.73,3H8.27L3,8.27v7.46L8.27,21h7.46L21,15.73V8.27L15.73,3z M19,14.9L14.9,19H9.1L5,14.9V9.1L9.1,5h5.8L19,9.1V14.9z" />
                        <rect height="6" width="2" x="11" y="7" />
                        <rect height="2" width="2" x="11" y="15" />
                    </g>
                </g>
            </g>
        </svg>
        <div>
            @foreach ($errors->all() as $e)
                - {{ $e }} <br />
            @endforeach
        </div>
    </div>
@endif

@if (Session::has('error'))
    <div class="alert alert-danger d-flex align-items-center" role="alert">
        <svg class="flex-shrink-0 me-2 svg-danger" xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24"
            height="1.5rem" viewBox="0 0 24 24" width="1.5rem" fill="#000000">
            <g>
                <rect fill="none" height="24" width="24" />
            </g>
            <g>
                <g>
                    <g>
                        <path
                            d="M15.73,3H8.27L3,8.27v7.46L8.27,21h7.46L21,15.73V8.27L15.73,3z M19,14.9L14.9,19H9.1L5,14.9V9.1L9.1,5h5.8L19,9.1V14.9z" />
                        <rect height="6" width="2" x="11" y="7" />
                        <rect height="2" width="2" x="11" y="15" />
                    </g>
                </g>
            </g>
        </svg>
        <div>
            @if (Session::get('error') == 'Something when Wrong. Please try again.' ||
                    Session::get('error') == 'Something when Wrong. Cannot Delete This Account')
                {{ Session::get('error') }}
            @else
                <ul>
                    @foreach (Session::get('error') as $e)
                        <li>{{ $e }}</li>
                    @endforeach
                </ul>
            @endif
        </div>
    </div>
    @php
        Session::forget('error');
    @endphp
@endif
