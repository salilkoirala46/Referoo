
@extends('layout.master')
@section('content')

    <div class="card" style="width: 18rem;">
      <div class="card-body">
        <h5 class="card-title">Candidate detail</h5>
        <p>First Name : {{ $candidate['first_name'] }} </p>
        <p>Last Name: {{ $candidate['last_name'] }}</p>
       <p>Email: {{ $candidate['email'] }}</p>
      </div>
    </div>

    <div class="table-responsive" style="margin-top:15px">
      <table class="table table-striped table-sm">
        <tr>
          <th scope="col">#</th>
          <th scope="col">Refree Name</th>
          <th scope="col">Refree Email address</th>
          <th scope="col">Phone Number</th>
          <th scope="col">Status</th>
          <th scope="col">Completion Date</th>
        </tr>
      </thead>
      <tbody>
        
        @foreach ($refreeDetails as $refree)
        <tr>
            <th scope="row">{{ $refree['num']}}</th>
            <td>{{ $refree['name'] }}</td>
            <td>{{ $refree['email'] }}</td>
            <td>{{ $refree['phone'] }}</td>
            <td>{{ $refree['reference_completed']==1?'completed':'incomplete' }}</td>
            <td>{{ $refree['response_date']?'': $refree['response_date']}}</td>
        </tr>
      @endforeach
          
      </tbody>
    </table>
@endsection


