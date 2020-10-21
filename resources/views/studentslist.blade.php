

<div class="card mb-3">
  <img src="https://lh3.googleusercontent.com/proxy/k8krTigNKlz_ir2i9sW_DcwOUcF_I0aoZG8UpR8nN0Pl-orYpiDmfvDSuDc0JZvNh_oZfKkTmS57E5tA_cmVbpLGKZGrPQkdUjzVkEKKQGwv5DPpOTEdkAQ3BQ6Cd-vli_p3KgCrKRfer1D-E1xDCg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">List of students</h5>
    <p class="card-text">You can find here all the information about students in the system</p>
    <table class="table">
      <thead>
        <tr>
          <th scope="col">CNE</th>
          <th scope="col">First Name</th>
          <th scope="col">Second Name</th>
          <th scope="col">Age</th>
          <th scope="col">Speciality</th>
          <th scope="col">Operations</th>
        </tr>
      </thead>
      <tbody>
          @foreach($students as $student)
        <tr>
          <td>{{ $student->cne }}</td>
          <td>{{ $student->firstName }}</td>
          <td>{{ $student->secondName }}</td>
          <td>{{ $student->age }}</td>
          <td>{{ $student->speciality }}</td>
          <td>
              {{-- <a href='#' class='btn btn-sm btn-info'>Show</a> --}}
              <a href='{{ url('/edit/' .$student->id) }}' class='btn btn-sm btn-warning'>Edit</a>
              <a href='delete/{{ ($student->id) }}' class='btn btn-sm btn-danger'>Delete</a>
          </td>
        </tr>
           @endforeach
      </tbody>
    </table>

  </div>
</div>






    
