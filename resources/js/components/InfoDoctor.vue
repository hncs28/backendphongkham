<template>
    <div>
        <div class="menu" style="margin-top: 30px">
         <HeaderMenu/> 
    </div>
    <div class="image2" v-if="true">
        <img src="@/assets/image.jpg">
        <div class="text">{{ employee.employeeName }}</div>
    </div>
    
    <div class="info-container" >
        <div class="info-image">
            <img :src=employee.employeeImage>
        </div>
        <div class="info-content" v-if="true" >
            <h2>{{ employee.employeeName }}</h2>
            <p style="font-weight: bold;">{{ employee.employeeRole }}</p>
            <p style="color:gray; padding-bottom: 30px;">________________________________________</p>
            <h3>PHONE:  <p style="color: #54595f; font-weight: normal;font-size: 15px; margin-left: 10px;">{{ employee.employeePhone }}</p></h3>
            <h3>EMAIL:  <p style="color: #54595f; font-weight: normal;font-size: 15px; margin-left: 10px;">{{ employee.employeeEmail }}</p></h3>
            <h4 style="font-style: italic; color: #54595f; font-weight: normal;">Kinh nghiệm làm việc: {{ employee.employeeExper }}</h4>
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
    </div>
   
</template>
<script>
import HeaderMenu from './HeaderMenu.vue';
import axios from 'axios';
export default {
    components: {
        HeaderMenu,
    },
    props: {
        employeeId: {
            type: [String, Number],
            required: true
        },
    },
  data() {
    return {
      employee: null,
    }
  },
  created() {
    this.getEmployeeData();

  },
  mounted() {
    // Fetch employee details using the employeeId
    console.log('Employee ID:', this.employeeId);
  },
  methods: {
    async getEmployeeData() {
      const response = await axios.get(`/api/employees/${this.employeeId}`);
      console.log(response)

      this.employee = response.data[0];
    }
  }
}
</script>

<style>
.image2 {
    position: relative;
    display: inline-block;
    padding-top: 30px;
}

.image2 img {
    display: block;
    width: 100%;
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

.info-container{
    display: flex;
    margin-top: 70px;
    font-family: Arial, Helvetica, sans-serif;
    justify-content: center;
}
.info-image img{
    border-radius: 10px;
    width: 300px;
    height: 320px;
    transition: 0.3s;
}
.info-image img:hover{
    transform: translateY(-10px);
}

.info-content{
    padding-left: 30px;
    width: 500px;
}
.info-content h2{
    font-size: 35px;
    color: #54595f;
    padding-bottom: 30px;
}
.info-content p{
    font-size: 20px;
    color: #85cb6c;
}
.info-content h3{
    display: flex;
    color: #54595f;
    padding-bottom: 10px;
    font-size: 15px;
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