@csrf
<div class="form-group">
    <input type="text" placeholder="Veuillez votre name" class="form-control @error('name') is-invalid @enderror"
     name="name" value="{{old('name') ?? $client->name}}">
    @error('name')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror
</div>
 <div class="form-controller">
    <input type="text" placeholder="Veuillez votre Email" class="form-control @error('email') is-invalid @enderror"
     name="email" value="{{old('email') ?? $client->email}}">
    @error('email')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror
</div>
 <div class="form-group">
    <select name="status" id="" class="form-control @error('status') is-invalid @enderror">
        <option value="1">Active</option>
        <option value="0">Inactive</option>
    </select>
    @error('status')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror
</div>
<div class="form-group">
    <select name="Eid" id="Eid" class="form-control @error('Eid') is-invalid @enderror">
        @foreach ($entreprise as $entreprise)
            <option value="{{$entreprise->id}}">{{$entreprise->name}}</option>
        @endforeach
    </select>
    @error('Eid')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror
</div>
<div class="form-group">
    <input type="text" placeholder="Veuillez votre Telephone"
    class="form-control @error('Telephone') is-invalid @enderror" name="Telephone" value="{{old('Telephone') ?? $client->Telephone}}">
    @error('Telephone')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror
</div>
