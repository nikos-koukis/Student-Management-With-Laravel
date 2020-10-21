<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <title>Student Management System</title>
  </head>
  <body>
    @include('navbar')

    <div class="row header-container justify-content-center">
        <div class="header">
            <h1>Student Management System</h1>
        </div>
    </div>

    @if($layout == 'index')
        <div class="container-fluid mt-4">
            <div class="container-fluid mt-4">
                <div class="row justify-content-center">
                    <section class="col-md-8">
                        @include("studentslist")
                    </section>
                </div>
            </div>
        </div>
    @elseif($layout == 'create')
        <div class='container-fluid mt-4'>
            <div class='row'>
                <section class='col-md-7'>
                    @include('studentslist')
                </section>
                <section class='col-md-5'>

                    <div class="card mb-3">
                        <img src="https://www.aristotelio.edu.gr/web/wp-content/uploads/2019/10/education.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                          <h5 class="card-title">Enter the information of the new student</h5>
                          <form action="{{ url('/store') }}" method="post">
                            @csrf
                            <div class="form-group">
                                <label>CNE</label>
                                <input name="cne" type="text" class="form-control"  placeholder="Enter cne">
                            </div>
                            <div class="form-group">
                                <label>First Name</label>
                                <input name="firstName" type="text" class="form-control"  placeholder="Enter the first name">
                            </div>                       
                            <div class="form-group">
                                <label>second Name</label>
                                <input name="secondName" type="text" class="form-control"  placeholder="Enter second name">
                            </div>
                            
                            <div class="form-group">
                                <label>Age</label>
                                <input name="age" type="text" class="form-control"  placeholder="Enter the Age">
                            </div>
                            <div class="form-group">
                                <label>Speciality</label>
                                <input name="speciality" type="text" class="form-control"  placeholder="Enter Sepeciality">
                            </div>
                            <input type="submit" class="btn btn-info" value="Save">
                            <input type="reset" class="btn btn-warning" value="Reset">
                        </form>
                        </div>
                      </div>                   
                </section>
            </div>
        </div>
    @elseif($layout == 'show')
        <div class='container-fluid mt-4'>
            <div class='row'>
                <section class='col'>
                    @include('studentslist')
                </section>
                <section class='col'>
                </section>
            </div>
        </div>
    @elseif($layout == 'edit')
        <div class='container-fluid mt-4'>
            <div class='row'>
                <section class='col-md-7'>
                    @include('studentslist')
                </section>
                <section class='col-md-5'>

                    <div class="card mb-3">
                        <img src="https://www.aristotelio.edu.gr/web/wp-content/uploads/2019/10/education.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                          <h5 class="card-title">Update information of students</h5>
                          <form action="{{ url('/update/'.$student->id) }}" method="post">
                            @csrf
                            <div class="form-group">
                                <label>CNE</label>
                                <input value="{{ $student->cne }}" name="cne" type="text" class="form-control"  placeholder="Enter cne">
                            </div>
                            <div class="form-group">
                                <label>First Name</label>
                                <input value="{{ $student->firstName }}" name="firstName" type="text" class="form-control"  placeholder="Enter the first name">
                            </div>
                            <div class="form-group">
                                <label>second Name</label>
                                <input value="{{ $student->secondName }}" name="secondName" type="text" class="form-control"  placeholder="Enter second name">
                            </div>
                            <div class="form-group">
                                <label>Age</label>
                                <input value="{{ $student->age }}" name="age" type="text" class="form-control"  placeholder="Enter the Age">
                            </div>
                            <div class="form-group">
                                <label>Speciality</label>
                                <input value="{{ $student->speciality }}" name="speciality" type="text" class="form-control"  placeholder="Enter Sepeciality">
                            </div>
                            <input type="submit" class="btn btn-info" value="Update">
                            <input type="reset" class="btn btn-warning" value="Reset">
                        </form>
                        </div>
                      </div>

                    
                </section>
            </div>
        </div>
    @endif
    
    <footer></footer>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>