<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Home Service - Leads</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" >
</head>
<body>
    <div class="container mt-2">
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left">
                    <h2>Home Service lead - Leads</h2>
                </div>
                <!-- <div class="pull-right mb-2">
                    <a class="btn btn-success" href="#"> Create Lead</a>
                </div> -->
            </div>
        </div>
        @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <p>{{ $message }}</p>
            </div>
        @endif
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>S.No</th>
                    <th>lead Name</th>
                    <th>lead Mobile</th>
                    <th>lead Service</th>
                    <th>lead Message</th>
                    <th width="280px">Action</th>
                </tr>
            </thead>
            <tbody>
               
                @foreach ($leads as $lead)
                    <tr>
                        <td>{{ $lead->id }}</td>
                        <td>{{ $lead->name }}</td>
                        <td>{{ $lead->mobile }}</td>
                        <td>{{ $lead->service }}</td>
                        <td>{{ $lead->message }}</td>
                        <td>
                            <form action="{{ route('lead.destroy',$lead->id) }}" method="Post">
                                <a class="btn btn-primary" href="{{ route('lead.edit',$lead->id) }}">Edit</a>
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
            </tbody>
        </table>
        {!! $lead->links() !!}
    </div>
</body>
</html>