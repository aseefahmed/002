<table class="table table-striped table-lilac datatable-ajax">
    <thead>
    <tr>
        <th>Designation</th>
        <th>Description</th>
        <th>Action</th>
    </tr>
    </thead>
    <!--tbody section is required-->
    <tbody>
    @foreach($designations as $designation)
        <tr>
            <td class="text-right"><a href="#" class="editable_designation_name" style="color:#fff" data-type="text" data-pk="{{ $designation->id }}" data-url="{{ url('/hrm/update-designation/'.$designation->id) }}" data-title="Change Designation Name"><?php echo $designation->designation_name;?></a></td>

            <td>
                <?php
                if($designation->description == "")
                    echo "N/A";
                else
                    echo $designation->description;?>
            </td>
            <td class="text-center">
                <div class="btn-group">
                    <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
                        Action <span class="caret"></span>
                    </button>
                    <ul class="dropdown-menu">
                        <li><a style="cursor: pointer;" href="{{ url('/production/view-supplier/'.$designation->id) }}"><i class="fa fa-eye"></i> View</a></li>
                        <li class="divider"></li>
                        <li><a style="cursor: pointer;" onclick="delete_designation({{ $designation->id }})"><i class="fa fa-trash"></i> Delete</a></li>
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
        <th>Designation</th>
        <th>Description</th>
        <th>Action</th>
    </tr>
    </tfoot>
</table>