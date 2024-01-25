@if($country == 'Ecuador')
    Ecuador
@elseif($country == 'Colombia')
    Colombia
@else
    No esta en la lista de paises
@endif


@empty($country)
   Lista vacia 
@endempty

@switch($status)
    @case('pendiente')
        <H1>Status pendiente</H1>
        @break
    @case('denegado')
        <H1>Denegado</H1>
        @break
    @default
        <H1>No encontrado</H1>
@endswitch


@for ($i = 0; $i < 10; $i++)
    <p>{{ $i }}</p>
@endfor 

@php $students = ["Pedro", "Carlos", "Juan","Maria"]; @endphp

@foreach ($students as $item)
    @php echo $item; @endphp
@endforeach

@forelse ($students as $item)
    {{ $item }}
@empty
    Estudiante no encontrado
@endforelse

<br><br>

@foreach ($students as $item)

    @continue ($item == 'Pedro') {{ $item }}

    @break ($item == 'Maria') {{ $item }}

@endforeach

{{-- Comentario en blade --}}
@include('probandoinclude')