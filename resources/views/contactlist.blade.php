@extends("template.main")
@section('title', 'Contact List')
@section('body')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12 mt-5 mb-5">
            <div class="card">
                <div class="card-header bg-primary text-white text-center">
                    <h2>Contact List</h2>
                </div>

                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered table-hover">
                            <thead class="bg-dark text-white">
                                <tr>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Phone</th>
                                    <th>Message</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($contacts as $contact)
                                <tr>
                                    <td>{{ $contact['name'] }}</td>
                                    <td>{{ $contact['email'] }}</td>
                                    <td>{{ $contact['phone'] }}</td>
                                    <td>{{ $contact['message'] }}</td>
                                    <td class="text-center">
                                        <form action="{{ route('contact.delete', $contact['name']) }}" method="post">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
