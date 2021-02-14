<x-app-layout>
    <x-slot name="header">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>Tag</h3>
                <p class="text-subtitle text-muted">Edit master tag untuk product</p>
            </div>
            <div class="col-12 col-md-6 order-md-2 order-first">
                <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item active" aria-current="page">
                            <a href = "/tag">Tag </a> / Edit
                        </li>
                    </ol>
                </nav>
            </div>
        </div>
    </x-slot>


    <div class = "row">
    <div class = "col-6">
                <div class="card">
                    <div class="card-header pb-0">
                        <h4 class="card-title">Edit Form</h4>
                    </div>
                    <div class="card-content">
                        <div class="card-body">
                            <form class="form form-vertical" method="POST" action="{{ route('tag.update', $tag) }}">

                                @csrf
                                @method('put')

                                <div class="form-body">
                                    <div class="row">
                                        <div class="col-12 form-group">
                                            <label class = "mb-2">Tag</label>
                                            <input type="text" id="tag" class="form-control" autofocus
                                            name="tag" value = "{{ $tag->tag }}">

                                    @if($errors->has('tag'))
                                <div class="text-danger mt-2">
                                    {{ $errors->first('tag')}}
                                </div>
                                    @endif

                                        </div>

                                        {{-- Auth --}}
                                         <input type="hidden" id="userid" class="form-control" readonly
                                                name="userid" value = "{{ Auth::user()->name }}"> 
                                        
                                        <div class="col-sm-12 d-flex justify-content-end mt-3">
                                            <button type="submit"
                                                class="btn btn-primary me-1 mb-1">Submit</button>
                                            <button type="reset"
                                                class="btn btn-light-secondary me-1 mb-1">Reset</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
        </div>
</div>

    
    
</x-app-layout>
