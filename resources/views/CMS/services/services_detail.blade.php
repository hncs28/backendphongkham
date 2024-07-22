<h1>Dịch vụ số: {{$service->serviceID}}</h1>
<img src="data:image/jpeg;base64,{{ base64_encode($service->serviceIMG) }}" alt="Service Poster" height="640px" width="400px" >
<h2>Tên dịch vụ:{{ $service->serviceName }}</h2>
<p>Giá cả:{{ $service->price }} VND</p>
<p>Chi tiết dịch vụ:{{ $service->detail}}</p>
