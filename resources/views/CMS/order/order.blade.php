<head>
  <style>
    body {
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        font-size: 15px;
        background-color: #f8f9fa;
        color: #333;
        margin: 0;
        padding: 0;
    }

    #menu {
          background: #007bff;
          padding: 0;
          margin: 0;
          box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
      }

      #menu ul {
          list-style-type: none;
          padding: 0;
          margin: 0;
          display: flex;
          justify-content: center;
      }

      #menu li {
          width: auto;
          padding: 0 20px;
      }

      #menu li a {
          text-decoration: none;
          color: #fff;
          font-weight: bold;
          display: block;
          padding: 15px 0;
          transition: background-color 0.3s, color 0.3s;
      }

      #menu li a:hover {
          background: #0056b3;
          color: #ffffff;
      }

      h1 {
          text-align: center;
          margin: 20px 0;
          color: #007bff;
      }

    table {
        width: 80%;
        margin: 20px auto;
        border-collapse: collapse;
    }

    table, th, td {
        border: 1px solid #ccc;
    }

    th, td {
        padding: 10px;
        text-align: center;
    }

    th {
        background-color: #007bff;
        color: #fff;
    }

    td a {
        color: #007bff;
        text-decoration: none;
    }

    td a:hover {
        text-decoration: underline;
    }

    button {
        padding: 5px 10px;
        border: none;
        cursor: pointer;
        border-radius: 5px;
        transition: background-color 0.3s;
    }

    button[type="submit"] {
        width: 80px;
    }

    button.edit {
        background-color: #0ffc07;
    }

    button.delete {
        background-color: red;
        color: #fff;
    }
    button:hover {
        opacity: 0.8;
    }

    form {
        display: inline;
    }
</style>
</head>
<body>
    <div id="menu">
      <ul>
        <li><a href="/CMS/employee/">Employee</a></li>
        <li><a href="/CMS/order/">Order</a></li>
        <li><a href="/CMS/customers/">Customers</a></li>
        <li><a href="/CMS/services/">Services</a></li>
      </div>
      <h1 align="center">Danh sách đơn đặt hàng</h1>
<table border="1" align="center">
    <thead>
        <tr>
            <th>ID</th>
            <th>Tên khách hàng</th>
            <th>Tên bác sĩ</th>
            <th>Dịch vụ</th>
            <th>Ngày đặt</th>
            <th>Giá</th>
            <th>Tools</th>
        </tr>
    </thead>
    <tbody>
        @foreach($order as $row)
        <tr>
            <td>{{$row->orderID}}</td>
            <td><a href="/CMS/customer/{{$row->customerID}}">{{$row->customerName}}</a></td>
            <td><a href="/CMS/employee/{{$row->employeeID}}">{{$row->employeeName}}</a></td>
            <td><a href="/CMS/services/{{$row->serviceID}}">{{$row->serviceName}}</td>
            <td>{{$row->bookingTime}}</td>
            <td>{{$row->price}}</td>
            <td>
                <form method="POST" action="/CMS/employee/destroy/{{$row->orderID}}" onsubmit="return ConfirmDelete( this )">
                    @method('DELETE')
                    @csrf
                    <button type="submit" class="delete">Delete</button>
                </form>
        </tr>
        @endforeach
    </tbody>
</table>
</body>