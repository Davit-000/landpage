<div class="navbar-default navbar-fixed-top" id="navigation">
    <div class="container">
        @if(isset($menu))
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">
                    <img class="logo-1" src="images/logo.png" alt="LOGO">
                    <img class="logo-2" src="images/logo-2.png" alt="LOGO">
                </a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <nav class="collapse navbar-collapse" id="navbar">
                <ul class="nav navbar-nav navbar-right" id="top-nav">
                    @foreach($menu as $item)
                    <li>
                        <a href="#{{ $item['alias'] }}">
                            {{ $item['title'] }}
                        </a>
                    </li>
                    @endforeach
                </ul>
            </nav><!-- /.navbar-collapse -->
        @endif
    </div><!-- /.container-fluid -->
</div>
@if(session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
@endif

@if(count($errors) > 0)
    <div class="alert alert-danger">
        <ul>
            @foreach($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>
    </div>
@endif