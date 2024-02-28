@inject('layoutHelper', 'JeroenNoten\LaravelAdminLte\Helpers\LayoutHelper')

@php($dashboard_url = View::getSection('dashboard_url') ?? config('adminlte.dashboard_url', 'home'))

@if (config('adminlte.use_route_url', false))
    @php($dashboard_url = $dashboard_url ? route($dashboard_url) : '')
@else
    @php($dashboard_url = $dashboard_url ? url($dashboard_url) : '')
@endif

<a class="brand-link p-2 d-flex justify-content-center" href="{{ $dashboard_url }}"
    @if ($layoutHelper->isLayoutTopnavEnabled()) class="navbar-brand {{ config('adminlte.classes_brand') }}"
    @else
        class="brand-link {{ config('adminlte.classes_brand') }}" @endif>

    {{-- Small brand logo --}}
    <img src="http://agenda.brasildigital.net.br/imgs/side_menu_siga.png"
        alt="{{ config('adminlte.logo_img_alt', 'SIGA CLONE') }}" class="{{ config('adminlte.logo_img_class') }}"
        style="height: 40px;">

    {{-- Brand text --}}
    <span class="brand-text font-weight-light {{ config('adminlte.classes_brand_text') }}">
        {!! config('adminlte.logo', '<b>CLONE</b>') !!}
    </span>

</a>
