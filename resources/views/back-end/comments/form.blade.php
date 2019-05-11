@php $input = "comment"; @endphp
<div class="col-md-12">
    <div class="form-group bmd-form-group">
        <label class="bmd-label-floating">Comment</label>
        <textarea name="{{ $input }}"  cols="30" rows="2" class="form-control @error($input) is-invalid @enderror">{{ isset($row) ? $row->{$input} : '' }}</textarea>
        @error($input)
        <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
             </span>
        @enderror
    </div>
</div>