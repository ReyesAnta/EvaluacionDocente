@foreach($data as $key => $item)
<tr>
	<td>{{ $key+1 }}</td>
	<td>{{ $item->question }}</td>
	<td>{{ round($item->puntaje) }}</td>
</tr>
@endforeach