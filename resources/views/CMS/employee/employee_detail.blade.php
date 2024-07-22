<h1>ID NHÂN VIÊN {{$employee->employeeID}}</h1>
<img src="data:image/jpeg;base64,{{ base64_encode($employee->emplyeeImg) }}" alt="Movie Poster" height="640px" width="400px" >
<h2>Tên:{{ $employee->employeeName }}</h2>
<p>Chức vụ:{{ $employee->employeeRole }}</p>
<p>Số điện thoại:{{ $employee->employeePhone}}</p>
<p>Email:{{ $employee->employeeEmail }}</p>
<p>Kinh nghiệm:{{ $employee->employeeExper }}</p>
