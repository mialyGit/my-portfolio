@session('message')
    <div class="alert alert-success alert-dismissible fade show">
        <button type="button" class="close h-100" data-dismiss="alert" aria-label="Close"><span><i class="mdi mdi-close"></i></span>
        </button> {{ session()->get('message') }} 
    </div>
@endsession