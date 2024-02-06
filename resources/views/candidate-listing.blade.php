
@extends('layout.master')
@section('content')
    <h2>Henry's outdoor Candidate</h2>
    <div class="table-responsive">
      <table class="table table-striped table-sm">
        <tr>
          <th scope="col">#</th>
          <th scope="col">First Name</th>
          <th scope="col">Last Name</th>
          <th scope="col">Email Address</th>
          <th scope="col">Phone Number</th>
          <th scope="col">Response Date</th>
          <th scope="col">Actions</th>
        </tr>
      </thead>
      <tbody>
        
        @foreach ($candidates as $candidate)
          <tr>
              <th scope="row">{{ $candidate['num']}}</th>
              <td>{{ $candidate['first_name'] }}</td>
              <td>{{ $candidate['last_name'] }}</td>
              <td>{{ $candidate['email'] }}</td>
              <td>{{ $candidate['phone'] }}</td>
              <td>{{ $candidate['response_date'] }}</td>
              <td><a href="/candidate/{{ $candidate['num'] }}" class="btn btn-info">View</a></td>
          </tr>
        @endforeach
          
      </tbody>
    </table>
    {{ $paginator->links() }}
@endsection


