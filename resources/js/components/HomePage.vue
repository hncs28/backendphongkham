<template>
    <div class="menu" style="margin-top: 30px">
        <HeaderMenu/>
    </div>
    <div class="slider-box">
        <Splide :options="options">
            <SplideSlide>
                <img src="@/assets/banner1.jpg">
            </SplideSlide>
            <SplideSlide>
                <img src="@/assets/banner2.jpg">
            </SplideSlide>
            <SplideSlide>
                <img src="@/assets/banner3.jpg">
            </SplideSlide>
        </Splide>
    </div>


    <div class="introduce-container">
        <div class="image">
            <img src="@/assets/introduce.jpg">
        </div>
        <div class="introduce-content">
            <P style="font-size:30px ;padding-bottom: 20px;font-weight: bold;">ĐỘI NGŨ Y BÁC SĨ</P>
            <p style="font-weight: normal; padding-bottom: 15px;">Chúng tôi, những người làm nghề.</p>
            <p style="font-weight: normal;">Có lúc vui vẻ với bệnh nhân, có lúc không tránh khỏi cáu kỉnh với bệnh</p>
            <p style="font-weight: normal; padding-bottom: 15px;">nhân, nhưng chưa bao giờ ngừng yêu thương bệnh nhân.
            </p>
            <p style="font-weight: normal;">Đến với chúng tôi, những lo lắng và thắc mắc của bạn và gia đình</p>
            <p style="font-weight: normal; padding-bottom: 20px;">sẽ được lắng nghe và giải đáp tận tình và chi tiết.
            </p>
            <button style="width: 170px; height: 40px"><router-link to="/booking">
                    <p style="color: white; font-weight: bold; font-size: 16px;">ĐẶT LỊCH NGAY</p>
                </router-link></button>
        </div>
    </div>


    <div class="Cam_Nhan">
        <div class="Tieu_De">
            <p style="padding-bottom: 15px;font-weight: bold;">GÓC CẢM NHẬN</p>
        </div>
        <div class="input-CN">
            <input type="text" placeholder="Tên"><br><br>
            <input type="text" placeholder="Cảm nhận"><br><br>
            <button style="width: 170px; height: 40px"><a href="">
                    <p style="color: #61ce70; font-weight: bold; font-size: 16px;">GỬI CẢM NHẬN</p>
                </a></button>
        </div><br>
        <div class="output">
            <div class="out-left">
                <p>Long established fact that a reader will be distracted by the readable content of a page when looking
                    at it's layout. The point of using Lorem Ipsum</p><br>
                <p style="text-align: right; color: #61ce70; padding-right: 50px;">P.K.Hoài Nam</p>
            </div>
            <div class="out-right">
                <p>Long established fact that a reader will be distracted by the readable content of a page when looking
                    at it's layout. The point of using Lorem Ipsum</p><br>
                <p style="text-align: right; color: #61ce70; padding-right: 50px;">N.Trường Xuân</p>
            </div>
        </div>
    </div>


    <div class="footer-container">
        <div class="footer-left">
            <div class="footer-logo">
                <a href="http://localhost:8081/">
                    <img src="@/assets/logo.png">
                </a>
            </div>
            <div class="footer-item">
                <a href="https://www.facebook.com/pkmatNgoiSao">
                    <img src="@/assets/facebook.png">
                </a>
                <a href="https://www.youtube.com/@PhongkhamMatNgoiSao">
                    <img src="@/assets/youtube.png">
                </a>
                <a href="https://zalo.me/1118479193975234403">
                    <img src="@/assets/zalo.png">
                </a>
            </div>
        </div>
        <div class="footer-right">
            <p style="font-size:22px ;color: #54595f; font-weight: bold;">Thông Tin Liên Hệ</p>
            <p style="font-weight: bold; color: #61ce70;">_____</p> <br>
            <div class="diachi" style="display: flex;">
                <img src="@/assets/dia_chi.png" style="margin-right: 20px;">
                <p>Số nhà 22 liền kề 6A C17 bộ công an, làng Việt Kiều Châu Âu, Mộ Lao, Hà Đông, Hà Nội</p>
            </div><br>
            <div class="phone" style="display: flex;">
                <img src="@/assets/phone.png" style="margin-right: 20px;">
                <p>098 7654 321</p>
            </div><br>
            <div class="www" style="display: flex;">
                <img src="@/assets/www.png" style="margin-right: 20px;">
                <p>http://localhost:8081/</p>
            </div><br>
            <div class="time" style="display: flex;">
                <img src="@/assets/time.png" style="margin-right: 20px;">
                <p>Time: 8.00 - 19.00h hàng ngày (Kể cả thứ 7 và Chủ nhật)</p>
            </div>
        </div>
    </div>
</template>

<script>
import { Splide, SplideSlide } from '@splidejs/vue-splide';
import { defineComponent } from 'vue';
import HeaderMenu from './HeaderMenu.vue';

export default defineComponent({
    components: {
        HeaderMenu,
        Splide,
        SplideSlide,
    },

    setup() {
        const options = {
            rewind: true,
            gap: '1rem',
        };

        return { options };
    },
});
</script>

<style>
.splide__slide img {
    width: 110%;
    height: auto;
    display: block;
    margin-bottom: 20px;
    object-fit: cover;
    margin-left: -20px;
    margin-right: -20px;
}


/*------------------------Thông Tin Bác Sĩ--------------------------*/
.introduce-container {
    display: flex;
    align-items: center;
    justify-content: center;
    margin-top: 100px;
    height: 400px;
    background-color: #85cb6c;
}

.image img {
    padding-top: 0px;
    height: 300px;
    width: auto;
}

.introduce-content {
    padding-left: 40px;
}

.introduce-content p {
    color: white;
    font-family: "Montserrat", Arial, Helvetica, sans-serif;
}

.introduce-content button {
    border: none;
    border-radius: 10px;
    background-color: orange;
    transition: 0.3s;
}

.introduce-content button:hover {
    background-color: black;
}


/*------------------------Góc Cảm Nhận--------------------------*/
.Cam_Nhan {
    padding-top: 100px;
    justify-content: center;
    align-items: center;
    text-align: center;
}

.Tieu_De p {
    font-size: 25px;
    color: #54595f;
    font-family: "Montserrat", Arial, Helvetica, sans-serif;
}

.input-CN {
    justify-content: center;
}

.input-CN input {
    padding: 0.5rem 1rem;
    border: 1px solid #b4b4b4;
    width: 250px;
    border-radius: 50px;
    outline: none;
    transition: 0.3s;
}

.input-CN input:focus {
    width: 400px;
}

.input-CN button {
    border: none;
    border-radius: 10px;
    background-color: white;
    transition: 0.3s;
}

.input-CN button:hover {
    background-color: black;
}



/*------------------------Output-Góc Cảm Nhận--------------------------*/
.output {
    display: flex;
}

.out-left {
    flex: 1;
    justify-content: flex-start;
    text-align: left;
    padding-left: 80px;
    padding-right: 30px;
    color: #54595f;
    font-family: "Montserrat", Arial, Helvetica, sans-serif;
    font-style: italic;
}

.out-right {
    flex: 1;
    justify-content: flex-start;
    text-align: left;
    padding-left: 30px;
    padding-right: 80px;
    color: #54595f;
    font-family: "Montserrat", Arial, Helvetica, sans-serif;
    font-style: italic;
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
    height: 20px
}
</style>