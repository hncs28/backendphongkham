
<form method="post" action="/CMS/customers/update/{{ $customers->customerID }}">
    @method('PATCH')
    @csrf
    <input type="hidden" name="customerID" value="{{$customers->customerID}}">
    <p>
        <label for="customerName">Name</label><br>
        <input type="text" name="customerName" value="{{ $customers->customerName }}">
    </p>
    <p>
        <label for="dob">DOB</label><br>
        <input type="date" name="dob" value="{{ $customers->dob }}">
    </p>
    <p>
        <label for="customerUsername">Username</label><br>
        <input type="text" name="customerUsername" value="{{ $customers->customerUsername }}">
    </p>
    <p>
        <label for="customerPassword">Password</label><br>
        <input type="text" name="customerPassword" value="{{ $customers->customerPassword }}">
    </p>

    <p>
        <label for="customerEmail">Email</label><br>
        <input type="text" name="customerEmail" value="{{ $customers->customerEmail }}">
    </p>
    <p>
        <label for="customerAddress">Address</label><br>
        <input type="text" name="customerAddress" value="{{ $customers->customerAddress }}">
    </p>
    <p>
        <label for="customerPhone">Phone</label><br>
        <input type="text" name="customerPhone" value="{{ $customers->customerPhone }}">
    </p>

    <p>
        <button type="submit">Submit</button>
    </p>
</form>