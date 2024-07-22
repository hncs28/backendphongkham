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
form input[type="date"],
form input[type="number"] {
    width: calc(100% - 22px);
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 3px;
    box-sizing: border-box;
    font-size: 16px;
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
    text-decoration: none;
}

form button[type="submit"]:hover {
    background: #0056b3;
}

form button[type="submit"] a {
    color: #fff;
    text-decoration: none;
}
</style>
<form method="POST" action="/CMS/employee/store">
    
    @csrf
    <h1 align="center">Form thêm nhân viên mới</h1>
    <p>
        <label for="employeeName">Name</label><br>
        <input type="text" name="employeeName" value="">
    </p>

    <p>
        <label for="employeeRole">Role</label><br>
        <input type="text" name="employeeRole" value="">
    </p>
    <p>
        <label for="employeePhone">Phone</label><br>
        <input type="text" name="employeePhone" value="">
    </p>
    <p>
        <label for="employeeEmail">Email</label><br>
        <input type="text" name="employeeEmail" value="">
    </p>

    <p>
        <label for="employeeExper">Experience</label><br>
        <textarea cols="20" rows="10" name="employeeExper"></textarea>
    </p>
    <p>
        <label for="img">Image</label><br>
        <input type="file" name="emplyeeImg">
    </p>

    <p>
        <button type="submit">Submit</button>
    </p>
    <p>
        <button type="button"><a href="/CMS/employee/">Ve trang chu</a></button>
    </p>
    
</form>
