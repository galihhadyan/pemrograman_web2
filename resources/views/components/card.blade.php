<div class="card {{ $type ?? 'card-primary' }} {{ $collapsible ?? false ? 'card-outline' : '' }}">
    @if(trim($header ?? ''))
    <div class="card-header">
        <h3 class="card-title">{{ $header }}</h3>
        <div class="card-tools">
            @if($collapsible ?? false)
            <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
            @endif
            @if($removable ?? false)
            <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i></button>
            @endif
        </div>
    </div>
    @endif
    <div class="card-body">
        {{ $slot }}
    </div>
    @if(trim($footer ?? ''))
    <div class="card-footer">
        {{ $footer }}
    </div>
    @endif
</div>
