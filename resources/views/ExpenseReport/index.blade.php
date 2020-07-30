<table>
@foreach($expenseReports as $expenseReport)
<tr>
    <td>
        {{$expenseReport->title}}
    </td>
</tr>

@endforeach
</table>