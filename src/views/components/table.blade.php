@if($sql)
    <table class='table table-striped'>
        <thead>
        <tr>
            @foreach($sql[0] as $key=>$val)
                <th>{{$key}}</th>
            @endforeach
        </tr>
        </thead>
        <tbody>
        @foreach($sql as $row)
            <tr>
                @foreach($row as $key=>$val)
                    <td>{{$val}}</td>
                @endforeach
            </tr>
        @endforeach
        </tbody>
    </table>
    <script type="text/javascript">
        $('table.table').DataTable({
            dom: "<'row'<'col-sm-6'l><'col-sm-6'f>><'row'<'col-sm-12'tr>><'row'<'col-sm-5'i><'col-sm-7'p>>",
            lengthMenu: [[10, 25, 50, -1], [10, 25, 50, "All"]]
        });
    </script>
@endif
