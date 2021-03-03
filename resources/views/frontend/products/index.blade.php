<h1>Danh sach san pham</h1>
<h3>{{ $name }}</h3>
<h3>{{ $email }}</h3>
<h3>{{ $phone }}</h3>
{{'hoc laravel'}}

<pre>
@php
    print_r($socials);
@endphp
</pre>

<p>
    @if($gender === 1)
    Ban la nam
    @else
    Ban la nu
    @endif
</p>

<p>
    @switch($today)
    @case(2)
    Hom nay la thu 2
    @break
    @case(3)
    Hom nay la thu 3
    @break
    @case(4)
    Hom nay la thu 4
    @break
    @default
    Hom nay la chu nhat
    @endswitch
</p>

<p>
    @for($i=0 ; $i<=10 ; $i++) {{ $i }} @endfor </p>

<table width="500" border="1" cellspacing="0" callpadding="0">
    @foreach($products as $key => $products)
    <tr>
        <td>ID</td>
        <td>Ten san pham</td>
     </tr>
    <tr>
        <td>{{ $products['id'] }}</td>
        <td>{{ $products['name'] }}</td>
    </tr>
     @endforeach
</table>