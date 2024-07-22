<form method="POST" action="/CMS/services/store">
    
    @csrf
    <p>
        <label for="serviceName">Name</label><br>
        <input type="text" name="serviceName" value="">
    </p>

    <p>
        <label for="price">Price</label><br>
        <input type="number" name="price" value="">
    </p>
    <p>
        <label for="detail">Detail</label><br>
        <textarea cols="20" rows="10" name="detail"></textarea>
    </p>
    <p>
        <label for="Time">Thoi gian thuc hien</label><br>
        <input type="text" name="Time" value="">
    </p>

    
    
    <p>
        <label for="img">Image</label><br>
        <input type="file" name="serviceIMG">
    </p>

    <p>
        <button type="submit">Submit</button>
    </p>
    <p>
        <button type="submit"><a href="/CMS/services/">Ve trang chu</a></button>
    </p>
</form>
