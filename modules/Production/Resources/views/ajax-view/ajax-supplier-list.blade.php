<table class="table table-striped table-lilac datatable-ajax">
    <thead>
    <tr>
        <th>Supplier</th>
        <th>Country</th>
        <th>Contact Person</th>
        <th>Email</th>
        <th>Action</th>
    </tr>
    </thead>
    <!--tbody section is required-->
    <tbody>
    @foreach($suppliers as $supplier)
        <tr>
            <td><?php echo $supplier->supplier_name;?></td>
            <td><?php echo $supplier->country_name;?></td>
            <td><?php echo $supplier->contact_person;?></td>
            <td><?php echo $supplier->email;?></td>
            <td class="text-center">
                <div class="btn-group">
                <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
                    Action <span class="caret"></span>
                </button>
                <ul class="dropdown-menu">
                    <li><a style="cursor: pointer;" href="{{ url('/production/view-supplier') }}"><i class="fa fa-eye"></i> View</a></li>
                    <li class="divider"></li>
                    <li><a style="cursor: pointer;" onclick="delete_supplier({{ $supplier->id }})"><i class="fa fa-trash"></i> Delete</a></li>
                    <li class="divider"></li>
                </ul>
            </div>
            </td>
        </tr>
    @endforeach
    </tbody>
    <!--tfoot section is optional-->
    <tfoot>
    <tr>
        <th>Supplier</th>
        <th>Country</th>
        <th>Contact Person</th>
        <th>Email</th>
        <th>Action</th>
    </tr>
    </tfoot>
</table>