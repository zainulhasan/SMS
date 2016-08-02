<h1>Test</h1>

@foreach($tmp as $t)
    {{$t->name  }}
    {{$t->book->name  }}

    @endforeach