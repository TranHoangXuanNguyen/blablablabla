<style>
.app{
  width: 100%;
}
.col-6 {
  width: 45%;
  padding-left: 5px;
  padding-right: 5px;
}
.grid__row {
  width: 100%;
  display: flex;
  flex-wrap: wrap;
  justify-content: space-between;
  margin-top: 50px;
}

.grid {
  width: 1200px;
  max-width: 100%;
  margin: 0 auto;
}

.grid__full-width {
  width: 100%;
}
.grid__column-2 {
  padding-left: 5px;
  padding-right: 5px;
  width: 16.6667%;
}
.grid__column-2-4 {
  padding-left: 5px;
  padding-right: 5px;
  width: 20%;
}
.grid__column-10 {
  padding-left: 5px;
  padding-right: 5px;
  width: 83.3333%;
}
* {
  margin: 0;
  padding: 0;
  box-sizing: inherit;
}
html {
  font-family: "Open Sans", sans-serif;
  box-sizing: border-box;
}
.container {
  background-color: #f0f0f0;
  background-image: url("../img/sigInBackGr.png");
  background-size: cover;
  background-repeat: no-repeat;
  width: 100%;
  height: 140vh;
}

.header {
  width: 100%;
  display: flex;
  align-items: center;
}
.logo img {
  width: 99px;
  height: 103px;
}
.logo {
  padding: 0 30px 0 30px;
  margin: 0 15px 0 30px;
}
.header-menu ul {
  display: flex;
  align-items: center;
  background-color: var(--secondColor);
  border-radius: 61.5px;
  padding: 15px;
}
.header-menu ul li a {
  color: var(--whiteColor);
  font-family: var(--monteratText);
  padding: 0 50px;
}

.header-acc {
  display: flex;
  align-items: center;
  justify-content: center;
  margin-left: 280px;
  gap: 50px;
}

.header-acc div {
  background-color: var(--secondColor);
  color: var(--whiteColor);
  border-radius: 50px;
  padding: 10px 25px;
}

.acc img {
  width: 30px;
  height: 30px;
  cursor: pointer;
}
.acc1 img {
  width: 20px;
  height: 30px;
  cursor: pointer;
}


.title__welcome {
  height: 90vh;
  display: flex;
  justify-content: center;
  align-items: center;
  transform: translateX(15%);
}
.titleWelcome {
  font-family: var(--fredokaText);
  font-weight: 700px;
  color: #ffffff;
  font-size: 70px;
  line-height: 100px;
  width: 670px;
}
.create-form,
.signIn-form {
  padding-top: 40px;
  width: 80%;
  max-width: 100%;
  background-color: #ffffff;
  border-radius: 20px;
  max-height: 100%;
}
.content-12 {
  width: 90%;
  max-width: 100%;
  margin: auto;
}
.option {
  display: flex;
  justify-content: space-between;
}
.btn--big {
  height: 50px;
  padding-left: 20px;
  padding-right: 20px;
  color: #004b00;
  border-radius: 19px;
  background-color: white;
  border: 1px solid #004b00;
  margin-bottom: 12px;
  font-weight: 600;
}
.btn--name {
  /* margin: 15px 19px 14px 20px; */
  font-size: 16px;
  font-weight: bold;
  font-family: var(--monteratText);
}
.input--title-userName,
.input--title-email,
.input--title-phoneNum,
.input--title-password,
.input--title-password {
  display: block;
  font-weight: 400px;
  font-size: 16px;
  line-height: 16px;
  width: 100%;
  font-family: var(--monteratText);
}
.userName,
.email,
.password,
.phoneNum,
.OTP,
.confirmPassword {
  width: 100%;
  padding: 10px;
  border-radius: 20px;
  border: 1px solid #469100;
  margin-bottom: 12px;
  box-shadow: 0px 4px 4px 0px #00000040;
  color: #469100;
  background-color: #ffffff;
  font-family: var(--monteratText);
}
.log--in--section {
  display: none;
}
.checkBox {
  display: flex;
}
.verify--checkBox {
  width: 20px;
  height: 20px;
  background: #004b00;
}
.checkBox--des {
  font-weight: 400;
  font-size: 16px;
  line-height: 20px;
  margin-left: 12px;
  font-family: var(--monteratText);
}
.button_box button{
  font-family: var(--monteratText);
}
.mon{
  font-family: var(--monteratText);
}
.btn--small {
  height: 36px;
  border-radius: 20px;
  text-align: center;
  background-color: white;
  color: #004b00;
  border: 1px solid #004b00;
  padding: 5px;
  font-weight: 700;
  line-height: 24px;
  font-size: 15px;
  margin-bottom: 7px;
  cursor: pointer;
}
.button_box {
  display: flex;
  justify-content: center;
  margin: 5px 0px 5px 0px;
}
.des--top--sendOTP,
.des--mid--sendOTP,
.des--bot--sendOTP {
  text-align: center;
  font-size: 14px;
  font-family: var(--monteratText);
}
.OTP {
  margin-top: 17px;
}
.reset--pass {
  height: 20px;
}
.create--acc--btn {
  font-weight: 500;
  line-height: 30px;
  text-align: center;
  background-color: #004b00;
  color: white;
  padding-left: 20px;
  padding-right: 20px;
  border: none;
}

.forgot--pass {
  display: block;
  line-height: 20px;
  color: #004b00;
  font-size: 16px;
}
.btn--big:hover {
  cursor: pointer;
  background-color: #469100;
  color: white;
}
.error-message {
  color: red;
  font-size: 20px;
  margin-top: 5px;
}
.error {
  border: 2px solid red;
}
.wrong--pass {
  display: none;
}
.verify--checkBox,
.checkBox--des,
.forgot--pass {
  margin-top: 8px;
}
.check {
  display: flex;
  justify-content: space-between;
}

@media (max-width: 1200px) {
  .grid {
    width: 100%; /* Adjust grid to take the full width */
  }

  .create-form,
  .signIn-form {
    max-width: 90%;
    left: 5%; /* Adjust position */
    top: 10%; /* Add top margin for better display on smaller screens */
  }

  .titleWelcome {
    font-size: 80px; /* Reduce the title font size */
    line-height: 100px;
  }

  .header--menu--list {
    font-size: 18px; /* Smaller menu font size */
  }

  .btn--name {
    font-size: 24px; /* Adjust button font size */
  }

  .user--icon,
  .cart--icon {
    width: 50px; /* Scale down icons */
    height: 50px;
  }
}

@media (max-width: 768px) {
  .content {
    flex-direction: column; /* Stack columns vertically */
    margin-left: 0; /* Adjust margin */
    margin-top: 50px;
  }

  .col-6 {
    width: 100%; /* Make columns take full width on small screens */
  }

  .create-form,
  .signIn-form {
    width: 90%;
    left: 5%;
    top: 5%; /* Adjust form positioning */
  }

  .header--menu {
    width: 100%; /* Make header menu full width */
    height: auto; /* Adjust height to content */
    margin-left: 0; /* Adjust margin */
  }

  .header--menu--list {
    font-size: 16px; /* Smaller menu font */
    justify-content: space-between;
  }

  .titleWelcome {
    font-size: 60px; /* Reduce the title font size */
    line-height: 80px;
  }

  .btn--name {
    font-size: 20px; /* Smaller button text */
  }
}

</style>