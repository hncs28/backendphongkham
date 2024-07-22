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
<form method="POST" action="/CMS/customers/store">
    
    @csrf
    <p>
        <label for="customerName">Name</label><br>
        <input type="text" name="customerName" value="">
    </p>

    <p>
        <label for="dob">DOB</label><br>
        <input type="date" name="dob" value="">
    </p>
    <p>
        <label for="customerUsername">Username</label><br>
        <input type="text" name="customerUsername" value="">
    </p>
    <p>
        <label for="customerPassword">Password</label><br>
        <input type="text" name="customerPassword" value="">
    </p>

    <p>
        <label for="customerEmail">Email</label><br>
        <input type="text" name="customerEmail" value="">
    </p>
    <p>
        <label for="customerPhone">Phone</label><br>
        <input type="text" name="customerPhone" value="">
    </p>
    <p>
        <label for="customerAddress">Address</label><br>
        <input type="text" name="customerAddress" value="">
    </p>
    <p>
        <label for="role">Role</label><br>
        <input type="number" name="role" value="">
    </p>


    <p>
        <button type="submit">Submit</button>
    </p>
    
    <p>
        <button type="submit"><a href="/CMS/customers/">Ve trang chu</a></button>
    </p>
</form>
