<div class="card">
    <div class="card-header">
        <h4 class="card-title breadcrumb-card-head transform-me">{{ ucwords(collect(request()->segments())->last()) }}
        </h4>
    </div>
    <div class="card-body">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <?php $segments = ''; ?>
                @foreach (request()->segments() as $key => $segment)
                    @if ($key == 0 && !Route::is('dashboard'))
                        <li class="breadcrumb-item">
                            <a class="transform-me" href="{{ route('dashboard') }}">
                                Dashboard
                            </a>
                        </li>
                    @endif
                    @php $segments .= '/' . $segment; @endphp
                    <li class="breadcrumb-item">
                        <a class="transform-me" href="{{ $segments }}">
                            {{ ucwords($segment) }}
                        </a>
                    </li>
                @endforeach
            </ol>
        </nav>
    </div>
</div>
