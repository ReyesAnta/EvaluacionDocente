<a class="nav-icon dropdown-toggle" href="#" id="alertsDropdown" data-bs-toggle="dropdown">
    <div class="position-relative">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-bell align-middle"><path d="M18 8A6 6 0 0 0 6 8c0 7-3 9-3 9h18s-3-2-3-9"></path><path d="M13.73 21a2 2 0 0 1-3.46 0"></path></svg>
        @if($notifications_read > 0)
        <span class="indicator">{{ $notifications_read }}</span>
        @endif
    </div>
</a>
<div class="dropdown-menu dropdown-menu-lg dropdown-menu-end py-0" aria-labelledby="alertsDropdown">
    @if($notifications_read > 0)
    <div class="dropdown-menu-header">
        {{ $notifications_read }} Nuevas Notificaciones
    </div>
    @endif
    <div class="list-group" style="overflow-y: scroll;height: 520px;">
        @foreach($notifications as $item)
        <a href="{{ route('ver_notification',[$item->type,$item->id]) }}" class="list-group-item {{ ($item->leido == 0) ? 'opacity' : '' }}">
            <div class="row g-0 align-items-center">
                <div class="col-10">
                    <div class="text-dark">{{ $item->title }}</div>
                    <div class="text-muted small mt-1">{{ $item->message }}</div>
                    <div class="text-muted small mt-1">{{ date('d/m/Y h:i a',strtotime($item->created_at)) }}</div>
                </div>
            </div>
        </a>
        @endforeach
    </div>
    <div class="dropdown-menu-footer">
        <a href="#" class="text-muted">Mostrar todas las notificaciones</a>
    </div>
</div>