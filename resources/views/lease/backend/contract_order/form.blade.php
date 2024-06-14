@extends('backend.layouts.main')
@section('options')
    @if(($show??false))
    <div class="row mb-2">
        <div class="col-12">
            <button class="btn @if($detail->status?->id == 1) btn-warning @elseif($detail->status?->id == 2) btn-primary @else btn-danger @endif" type="button" id="close" data-id="{{$detail->id}}">{{$detail->status->name}}</button>
            <a href="{{route('backend.lease.contract_order.print', ['id' => $detail->id])}}" target="_blank" class="btn btn-info">列印</a>
            @if($detail->status?->id == 1 && (!$detail->return_factory_order || !$detail->overhaul_order))
                <a href="{{route('backend.lease.return_factory_order.create', ['sourceable_type' => \App\Models\LeaseContractOrder::class, 'sourceable_id' => $detail->id])}}" class="btn btn-primary">轉回廠單</a>
                <a href="{{route('backend.lease.overhaul_order.create', ['sourceable_type' => \App\Models\LeaseContractOrder::class, 'sourceable_id' => $detail->id])}}" class="btn btn-success">轉檢修保養單</a>
            @else
                @if($detail->return_factory_order)
                <a href="{{route('backend.lease.return_factory_order.show', ['return_factory_order' => $detail->return_factory_order->id])}}" class="btn btn-info" target="_blank">回廠單</a>
                @elseif($detail->overhaul_order)
                <a href="{{route('backend.lease.overhaul_order.show', ['overhaul_order' => $detail->overhaul_order->id])}}" class="btn btn-info" target="_blank">檢修保養單</a>
                @endif
            @endif
        </div>
    </div>
    @endif
@endsection
@section('content')
<main id="main-container">
<!-- Page Content -->
    <div class="content">
        <div class="block block-rounded">
            <div class="block-header block-header-default">
                <h3 class="block-title">{{$form['title']}}</h3>
            </div>
            <div class="block-content pb-4">
                <ul class="nav nav-tabs nav-tabs-block" data-toggle="tabs" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button type="button" class="nav-link active" id="btabs-static-home-tab" data-bs-toggle="tab" data-bs-target="#btabs-static-home" role="tab" aria-controls="btabs-static-home" aria-selected="false" tabindex="-1">
                            {{ __('basic_data') }}
                        </button>
                    </li>
                    @if($show??false)
                    <li class="nav-item audit-tab" role="presentation">
                        <button type="button" class="nav-link" id="btabs-static-profile-tab" data-bs-toggle="tab" data-bs-target="#btabs-static-profile" role="tab" aria-controls="btabs-static-profile" aria-selected="false" tabindex="-1">
                            {{ __('audit') }}
                        </button>
                    </li>
                    {{-- <li class="nav-item audit-tab" role="presentation">
                        <button type="button" class="nav-link" id="transfer-record-tab" data-bs-toggle="tab" data-bs-target="#transfer-record" role="tab" aria-controls="transfer-record" aria-selected="false" tabindex="-1">
                            轉單紀錄
                        </button>
                    </li> --}}
                    @endif
                </ul>
                <div class="block-content tab-content">
                    <div class="tab-pane active" id="btabs-static-home" role="tabpanel" aria-labelledby="btabs-alt-static-home-tab">
                        <x-backend::form :form="$form" :fields="$fields" />
                    </div>
                    @if($show??false)
                    <div class="tab-pane " id="btabs-static-profile" role="tabpanel" aria-labelledby="btabs-alt-static-home-tab">
                        @include('backend.layouts.audits', [ 'table' => $table, 'table_id' => $detail->id ])
                    </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
<!-- END Page Content -->
</main>
<x-backend.product.product-number />
@endsection
@push('style')
<link rel="stylesheet" href="/css/order.css">
<style>
    #btabs-static-home th,#btabs-static-home td {
        white-space:nowrap;
    }
    .accordion {
        --bs-accordion-bg: #ffffff;
    }
</style>
@endpush
@push('javascript')
<script src="{{asset(Universal::version('js/rate.js'))}}"></script>
<script src="{{asset(Universal::version('js/imageFile.js'))}}"></script>
<script src="{{asset(Universal::version('js/order.js'))}}"></script>
<script>
    var url = "{{route('backend.lease.contract_order.index')}}";
    var rate = new Rate({{$decimal_point}}, {{$tax_percentage}}, {{config('erp.calibration')}});

    $(`select[name="sourceable_id"]`).change(function(){
        let id = $(this).val();
        if(id) {
            sendApi(`${url}`,"GET",{
                action: "sourceable_id",
                type: $(`select[name="sourceable_type"]`).val(),
                id: id,
            },function(result) {
                $('#items_area').html('');
                if(result.data.file) {
                    let file = result.data.file;
                    let name = file.split('/');
                    getFileFromURL('{{asset('storage')}}/'+file, name.pop())
                        .then(file => {
                            const dataTransfer = new DataTransfer();
                            dataTransfer.items.add(file);
                            $(`input[name="file"]`)[0].files = dataTransfer.files;
                            $(`input[name="file"]`).trigger('change')
                            // 可以將其用於你的程式邏輯中
                        });
                }
                setTimeout(function() {
                    $(`select[name="currencies_id"]`).val(result.data.currencies_id).trigger('change');
                    $(`select[name="customers_id"]`).val(result.data.customers_id).attr('transfer', true).trigger('change');
                    $(`input[name="lease_methods_id"][value="${result.data.lease_methods_id}"]`).prop("checked", true).trigger("change");
                    $(`input[name="invoice_types_id"][value="${result.data.invoice_types_id}"]`).prop("checked", true).trigger("change");
                    $(`input[name="lease_start_date"]`).val(result.data.lease_start_date);
                    $(`input[name="lease_end_date"]`).val(result.data.lease_end_date);
                    $(`input[name="lease_address"]`).val(result.data.lease_address);
                    $(`select[name="staff_id"]`).val(result.data.staff_id).trigger('change');
                    $(`select[name="customers_id"]`).removeAttr('transfer');
                }, 500);
                $(`textarea[name="remark"]`).text(result.data.remark)
                result.data.items.map((item, key) => {
                    let i = key + 1;
                    $(`#items_template_add`).click();
                    setTimeout(() => {
                        $(`select[name="items[${i}][products_id]"]`).attr('transfer', true).val(item.products_id).trigger('change');
                        $(`input[name="items[${i}][name]"]`).val(item.name);
                        $(`input[name="items[${i}][standard]"]`).val(item.standard);
                        $(`input[name="items[${i}][size]"]`).val(item.size);
                        $(`input[name="items[${i}][unit]"]`).val(item.unit);
                        $(`select[name="items[${i}][depots_id]"]`).val(item.depots_id).trigger('change');
                        $(`input[data-name="items[${i}][unit_amount]"]`).val(item.unit_amount).trigger('keyup');
                        $(`input[data-name="items[${i}][count]"]`).val(item.count).trigger('keyup');
                        $(`input[name="items[${i}][remark]"]`).val(item.remark);
                        $(`input[name="items[${i}][file]"]`)
                        if(item.file) {
                            let name = item.file.split('/');
                            getFileFromURL('{{asset('storage')}}/'+item.file, name.pop())
                            .then(file => {
                                const dataTransfer = new DataTransfer();
                                dataTransfer.items.add(file);
                                $(`input[name="items[${i}][file]"]`)[0].files = dataTransfer.files;
                                $(`input[name="items[${i}][file]"]`).trigger('change')
                                // 可以將其用於你的程式邏輯中
                            });
                        }
                        $(`select[name="items[${i}][products_id]"]`).removeAttr('transfer')
                    }, 300);
                });
            });
        }
    });
    @if(!($show??false))
    main_calibration = Math.pow(10, {{config('erp.calibration')}});
    setMainCurrency(`input[id="number-main_amount"]`,`input[id="number-amount"]`);
    setMainCurrency(`input[id="number-main_tax"]`,`input[id="number-tax"]`);
    setMainCurrency(`input[id="number-main_total_amount"]`,`input[id="number-total_amount"]`);
    @else
        @if($detail->status?->id == 1)
        $('#close').click(function() {
            var id = $(this).data('id');
            Swal.fire({
                title:'確定要結案嗎?',
                icon:'warning',
                showCancelButton: true, 
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: '{{__('backend.common.confirm')}}',
                cancelButtonText: '{{__('backend.common.cancel')}}',
            }).then(function(result){
                if(result.isConfirmed) {
                    sendApi(`${url}/${id}`,"PUT",{
                        action: "close"
                    }).then(function(){
                        location.reload();
                    });
                }
            })
        });
        @endif
    @endif
    @if(request()->sourceable_id)
        $(`select[name="sourceable_id"]`).val('{{addslashes(request()->sourceable_id)}}').trigger('change');
    @endif
</script>
@endpush