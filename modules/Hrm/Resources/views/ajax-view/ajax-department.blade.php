<table class="table table-striped table-lilac datatable-ajax">
    <thead>
    <tr>
        <th>Department</th>
        <th>Description</th>
        <th>Action</th>
    </tr>
    </thead>
    <!--tbody section is required-->
    <tbody>
    @foreach($departments as $department)
        <tr>
            <td><?php echo $department->department_name;?></td>
            <td>
                <?php
                if($department->description == "")
                    echo "N/A";
                else
                    echo $department->description;?>
            </td>
            <td class="text-center">
                <div class="btn-group">
                    <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
                        Action <span class="caret"></span>
                    </button>
                    <ul class="dropdown-menu">
                        <li><a style="cursor: pointer;" href="{{ url('/production/view-department/'.$department->id) }}"><i class="fa fa-eye"></i> View</a></li>
                        <li class="divider"></li>
                        <li><a style="cursor: pointer;" onclick="delete_department({{ $department->id }})"><i class="fa fa-trash"></i> Delete</a></li>
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
        <th>Department</th>
        <th>Description</th>
        <th>Action</th>
    </tr>
    </tfoot>
</table>