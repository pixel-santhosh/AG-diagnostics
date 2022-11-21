<div class="row mb-3">
    <label class="col-2 text-end col-form-label">Country Name *</label>
    <div class="col-10">
        {!! Form::text('country', null, ['class' => 'form-control', 'autocomplete' => 'off', 'required','disabled']) !!}
    </div>
</div>
<div class="row mb-3">
    <label class="col-2 text-end col-form-label">ISO Code(3 digit)</label>
    <div class="col-10">
        {!! Form::number('iso_code_three', null, ['class' => 'form-control', 'autocomplete' => 'off']) !!}
    </div>
</div>
<div class="row mb-3">
    <label class="col-2 text-end col-form-label">ISO Code(2 digit)</label>
    <div class="col-10">
        {!! Form::number('iso_code_two', null, ['class' => 'form-control', 'autocomplete' => 'off']) !!}
    </div>
</div>
<div class="row mb-3">
    <label class="col-2 text-end col-form-label">Dial Code *</label>
    <div class="col-10">
        {!! Form::number('country_code', null, ['class' => 'form-control', 'autocomplete' => 'off','maxlength'=>4,'onKeyPress'=>"if(this.value.length==3) return false;",'required']) !!}
    </div>
</div>
<div class="row mb-3">
    <input type="hidden" name="status" value="0" checked="checked">
    <label class="col-2 text-end col-form-label">Status</label>
    <div class="col-10">
        {{-- {!! Form::checkbox('status',1,null, ['checked' => 'checked']) !!} --}}
        @if(isset($country))
            @if($country->status)
                <input type="checkbox" id="status" name="status" value="1" checked="checked">
            @else
                <input type="checkbox" id="status" name="status" value="0" >
            @endif
      @else
        <input type="checkbox" id="status" name="status" value="1" checked="checked">
      @endif
    </div>
</div>
@section('scripts')
    <script type="text/javascript">
       
       $(document).ready(function() {
            $('#status').click(function() {
                if (!$(this).is(':checked')) {
                    $(this).val(0);
                // return confirm("Are you sure?");
                }
                else if($(this).is(':checked')) {
                    $(this).val(1);
                // return confirm("Are you sure111?");
                }
            });
        });
        
       
     
    </script>  
@endsection
