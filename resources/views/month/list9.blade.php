@extends('layouts.app')
@section('content')


<div class="container">
<div class="row justify-content-center">
<div class="col-md-8">
<div class="card">

 <center>
  
 <h4> <div class="card-header">

<h4>
<div class="card-body">
<label for="firm_id"><b><u>Zgłoszenie korekty deklaracji</u></b></label>

</div>
<div class="card-body">
<label for="firm_id"><b>Klient:</b></label>
<div class="input-group">
{{$month->firm->name}} 
</div>
</div>
<div class="card-body">
<label for="firm_id"><b>Użytkownik zgłaszający:</b></label>
<div class="input-group">
{{$month->user->name}} {{$month->user->surname}}
</div>
</div>
<div class="card-body">
<label for="firm_id"><b>Data zgłoszenia:</b></label>
<div class="input-group">
{{$month->close_date}} {{$month->close_time}}
</div>
</div>
<div class="card-body">
<label for="firm_id"><b>Deklaracje:</b></label>
<div class="input-group">
{{$month->vat}} {{$month->pit5_cit}} {{$month->vat_ue}} {{$month->vat_uea}} {{$month->vat_ueb}} {{$month->vat_uec}} {{$month->vat_27}} {{$month->akc}} {{$month->cit_st}}
</div>
</div>

<div class="card-body">
<label for="firm_id"><b>Okres zgłoszenia:</b></label>
<div class="input-group">
{{ \Carbon\Carbon::parse($today)->subMonth()->translatedFormat('F') }} {{ \Carbon\Carbon::parse($today)->translatedFormat('Y')}} 
</div>
</div>
@if (!empty($month->uwagi))
<div class="card-body">
<label for="firm_id"><b>Uwagi:</b></label>
<div class="input-group">
{{$month->uwagi}}
</div>
</div>
@endif

<div class="card-body">
<label for="firm_id"><b>Status:</b></label>
<div class="input-group">
{{$month->status1}} 
</div>
</div>

@if (!empty($month->usertwo->surname))
<div class="card-body">
<label for="firm_id"><b>Osoba potwierdzająca:</b></label>
<div class="input-group">
{{$month->usertwo->name}} {{$month->usertwo->surname}}
</div>
</div> 
@endif

@if (!empty($month->close_date2))
<div class="card-body">
<label for="firm_id"><b>Data potwierdzenia:</b></label>
<div class="input-group">
{{$month->close_date2}} {{$month->close_time2}}
</div>
</div> 
@endif
@if (!empty($month->uwagidodeklaracji))
<div class="card-body">
<label for="firm_id"><b>Uwagi do deklaracji:</b></label>
<div class="input-group">
{{$month->uwagidodeklaracji}}
</div>
</div> 
@endif

@if (!empty($month->przelew))
<div class="card-body">
<label for="firm_id"><b>Przelew:</b></label>
<div class="input-group">
{{$month->przelew}}
</div>
</div> 
@endif


@if (!empty($month->korekta))
<div class="card-body">
<label for="firm_id"><b>Korekta:</b></label>
<div class="input-group">
{{$month->korekta}}
</div>
</div> 
@endif

@if (!empty($month->uwagidokorekty))
<div class="card-body">
<label for="firm_id"><b>Data i przyczyna zgłoszenia korekty:</b></label>
<div class="input-group">
{{$month->uwagidokorekty}}
</div>
</div> 
@endif
<br>
<form method="post" action = "{{action('MonthController@update', $id)}}">
{{csrf_field()}}
<input type="hidden" name="_method" value="PATCH" />
<div class="form-group">
<label for="uwagidokorekty"><b>Przyczyna korekty:</b></label>

<div class="input-group">
  <div class="input-group-prepend">
  </div>
  <textarea class="form-control" name="uwagidokorekty" aria-label="With textarea" required></textarea>
</div>
</div>


<div class="form-group">
<center>
<input type = "submit" class="btn btn-primary" value="Zgłoś korektę" />
<a href="{{url()->previous()}}" type="button" class="btn btn-danger">Anuluj</a>
</center>
</div>

</form>

<br>

<script>
function goBack() {
  window.history.back();
}
</script>



</form>

</div>
</div>
</div>
</div>
</div>
</div>
</div>

@endsection