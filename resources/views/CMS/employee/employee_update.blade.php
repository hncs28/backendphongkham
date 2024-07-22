<style>
    form {
    max-width: 600px;
    margin: 0 auto;
    padding: 20px;
    background: #f7f7f7;
    border: 1px solid #ddd;
    border-radius: 5px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

form p {
    margin-bottom: 20px;
}

form label {
    font-weight: bold;
    display: block;
    margin-bottom: 5px;
    color: #333;
}

form input[type="text"],
form textarea {
    width: calc(100% - 22px);
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 3px;
    box-sizing: border-box;
    font-size: 16px;
}
button.trangchu {
          background: rgb(3, 235, 99);
          color: white;
          height: 1.5cm;
          width: 3cm;
          border-radius: 5px;
      }

form button[type="submit"] {
    display: inline-block;
    background: #007bff;
    color: #fff;
    border: none;
    padding: 10px 20px;
    text-align: center;
    font-size: 16px;
    border-radius: 3px;
    cursor: pointer;
    transition: background 0.3s ease;
}

form button[type="submit"]:hover {
    background: #0056b3;
}
</style>

<form method="post" action="/CMS/employee/update/{{ $employee->employeeID }}">
    @method('PATCH')
    @csrf
    <h1 align="center">
        Chỉnh sửa thông tin
    </h1>
    <input type="hidden" name="employeeID" value="{{$employee->employeeID}}">
    <p>
        <label for="employeeName">Name</label><br>
        <input type="text" name="employeeName" value="{{ $employee->employeeName }}">
    </p>
    <p>
        <label for="employeeRole">Role</label><br>
        <input type="text" name="employeeRole" value="{{ $employee->employeeRole }}">
    </p>
    <p>
        <label for="employeePhone">Phone</label><br>
        <input type="text" name="employeePhone" value="{{ $employee->employeePhone }}">
    </p>
    <p>
        <label for="employeeEmail">Email</label><br>
        <input type="text" name="employeeEmail" value="{{ $employee->employeeEmail }}">
    </p>
    <p>
        <label for="emplyeeImg">Image</label><br>
        <input type="file" name="employeeExper" value="{{ $employee->emplyeeImg }}" >
    </p>

    <p>
        <label for="employeeExper">Experience</label><br>
        <textarea cols="50" rows="5" name="employeeExper">{{ $employee->employeeExper }}</textarea>
    </p>

    <p>
        <button type="submit">Submit</button>
    </p>
    <p>
        <button type="button" class ="trangchu"><a href="/CMS/employee/">Back to homepage</a></button>
    </p>
</form>