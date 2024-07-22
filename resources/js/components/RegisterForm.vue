<template>
    <div class="menu" style="margin-top: 30px">
        <HeaderMenu/>
    </div>
    <div class="image2">
        <img src="@/assets/image.jpg">
        <div class="text">ĐĂNG KÝ</div>
    </div>
    <div class="register">
        <div class="register-container">
            <h2 style="color: #54595f;">Trang Đăng Ký</h2>
            <form>
                <div class="form-register-group">
                    <label for="fullname">Họ tên</label>
                    <input type="text" id="fullname" placeholder="Họ tên" required>
                </div>
                <div class="form-register-group">
                    <label for="username">Tên đăng nhập</label>
                    <input type="text" id="username" placeholder="Tên đăng nhập" required>
                </div>
                <div class="form-register-group">
                    <label for="sdt/email">SĐT/Email</label>
                    <input type="text" id="sdt/email" placeholder="SĐT/Email" required>
                </div>
                <div class="form-register-group">
                    <label for="password">Mật khẩu</label>
                    <input type="password" id="password" placeholder="Mật khẩu" required>
                </div>
                <div class="form-register-group">
                    <label for="confirm-password">Nhập lại mật khẩu</label>
                    <input type="password" id="confirm-password" placeholder="Nhập lại mật khẩu" required>
                </div>
                <button type="submit">Đăng Ký</button>
                <p>Đã có tài khoản? <router-link to="/login" style="font-weight: bold; color: #61ce70;">Đăng
                        nhập</router-link></p>
            </form>
        </div>
    </div>

    <div class="footer-container">
        <div class="footer-left">
            <div class="footer-logo">
                <a href="http://localhost:8081/">
                    <img src="@/assets/logo.png" />
                </a>
            </div>
            <div class="footer-item">
                <a href="https://www.facebook.com/pkmatNgoiSao">
                    <img src="@/assets/facebook.png" />
                </a>
                <a href="https://www.youtube.com/@PhongkhamMatNgoiSao">
                    <img src="@/assets/youtube.png" />
                </a>
                <a href="https://zalo.me/1118479193975234403">
                    <img src="@/assets/zalo.png" />
                </a>
            </div>
        </div>
        <div class="footer-right">
            <p style="font-size: 22px; color: #54595f; font-weight: bold">
                Thông Tin Liên Hệ
            </p>
            <p style="font-weight: bold; color: #61ce70">_____</p>
            <br />
            <div class="diachi" style="display: flex">
                <img src="@/assets/dia_chi.png" style="margin-right: 20px" />
                <p>
                    Số nhà 22 liền kề 6A C17 bộ công an, làng Việt Kiều Châu Âu, Mộ Lao,
                    Hà Đông, Hà Nội
                </p>
            </div>
            <br />
            <div class="phone" style="display: flex">
                <img src="@/assets/phone.png" style="margin-right: 20px" />
                <p>098 7654 321</p>
            </div>
            <br />
            <div class="www" style="display: flex">
                <img src="@/assets/www.png" style="margin-right: 20px" />
                <p>http://localhost:8081/</p>
            </div>
            <br />
            <div class="time" style="display: flex">
                <img src="@/assets/time.png" style="margin-right: 20px" />
                <p>Time: 8.00 - 19.00h hàng ngày (Kể cả thứ 7 và Chủ nhật)</p>
            </div>
        </div>
    </div>
</template>
<script>
import HeaderMenu from './HeaderMenu.vue';

export default {
    components:{
        HeaderMenu,
    }
};
</script>
<style>
.image2 {
    position: relative;
    display: inline-block;
    padding-top: 30px;
}

.image2 img {
    display: block;
    width: 110%;
    height: auto;
}

.image2::before {
    content: "";
    position: absolute;
    top: 20px;
    left: 0;
    right: 0;
    bottom: 0;
    background: rgba(255, 255, 255, 0.5);
    pointer-events: none;
}

.image2 .text {
    position: absolute;
    top: 60%;
    left: 20%;
    transform: translate(-50%, -50%);
    color: black;
    padding: 10px 20px;
    border-radius: 5px;
    font-size: 30px;
    font-weight: bold;
}

/*------------------------register--------------------------*/
.register {
    font-family: Arial, Helvetica, sans-serif;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 600px;
    margin: 0;
}

.register-container {
    background-color: #fff;
    padding: 20px;
    border-radius: 10px;
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
    width: 600px;
    text-align: center;
}

.register-container h2 {
    margin-bottom: 20px;
}

.form-register-group {
    display: flex;
    align-items: center;
    margin: 10px 0;
}

.form-register-group label {
    margin-right: 0px;
    width: 130px;
    text-align: left;
    font-family: Arial, Helvetica, sans-serif;
    font-weight: bold;
    color: #54595f;
}

.form-register-group input {
    flex: 1;
    padding: 10px;
    border: 1px solid #ccc;
    outline: none;
    border-radius: 10px;
}


.register-container button {
    width: 30%;
    padding: 10px;
    margin-bottom: 10px;
    border: none;
    border-radius: 10px;
    background-color: #d46969;
    color: #fff;
    font-size: 16px;
    font-weight: bold;
    cursor: pointer;
}

.register-container button:hover {
    background-color: #d41818;
}

/*------------------------Footer--------------------------*/
.footer-container {
    display: flex;
    margin-top: 50px;
    height: 400px;
    background-color: #f6f7fa;
}

.footer-left {
    margin-left: 80px;
    margin-top: 100px;
    flex: 2;
}

.footer-right {
    padding-top: 15px;
    margin-top: 100px;
    margin-right: 80px;
    flex: 1;
}

.footer-logo img {
    margin-left: 35px;
    padding-bottom: 30px;
    flex: 0;
    width: 100px;
    height: auto;
}

.footer-item img {
    margin-left: 15px;
    width: 35px;
    height: 35px;
}

.footer-right p {
    justify-content: flex-start;
    text-align: left;
    font-family: "Montserrat", Arial, Helvetica, sans-serif;
    color: #54595f;
}

.footer-right img {
    width: 15px;
    height: 20px;
}
</style>