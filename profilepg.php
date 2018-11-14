<?php
include("header.php");
?>
<style>
@import url("https://fonts.googleapis.com/css?family=Quicksand:400,500,700&subset=latin-ext");

body {
  font-family: 'Quicksand', sans-serif;
  color: #324e63;
}

a, a:hover {
  text-decoration: none;
}

.icon {
  display: inline-block;
  width: 1em;
  height: 1em;
  stroke-width: 0;
  stroke: currentColor;
  fill: currentColor;
}

.wrapper {
  width: 100%;
  width: 100%;
  height: auto;
  min-height: 100vh;
  padding: 50px 20px;
  padding-top: 100px;
  display: flex;
  background-image: linear-gradient(-20deg, #fff 0%, #fff 100%);
  display: flex;
  background-image: linear-gradient(-20deg, #fff 0%, #fff 100%);
}
@media screen and (max-width: 768px) {
  .wrapper {
    height: auto;
    min-height: 100vh;
    padding-top: 100px;
  }
}

.profile-card {
  width: 100%;
  min-height: 460px;
  margin: auto;
  box-shadow: 0px 8px 60px -10px rgba(13, 28, 39, 0.6);
  background: #737373;
  border-radius: 12px;
  max-width: 700px;
  position: relative;
}
.profile-card.active .profile-card__cnt {
  filter: blur(6px);
}
.profile-card.active .profile-card-message,
.profile-card.active .profile-card__overlay {
  opacity: 1;
  pointer-events: auto;
  transition-delay: .1s;
}
.profile-card.active .profile-card-form {
  transform: none;
  transition-delay: .1s;
}
.profile-card__img {
  width: 150px;
  height: 150px;
  margin-left: auto;
  margin-right: auto;
  transform: translateY(-50%);
  border-radius: 50%;
  overflow: hidden;
  position: relative;
  z-index: 4;
  box-shadow: 0px 5px 50px 0px #3399ff, 0px 0px 0px 7px rgba(107, 74, 255, 0.5);
}
@media screen and (max-width: 576px) {
  .profile-card__img {
    width: 120px;
    height: 120px;
  }
}
.profile-card__img img {
  display: block;
  width: 100%;
  height: 100%;
  object-fit: cover;
  border-radius: 50%;
}
.profile-card__cnt {
  margin-top: -35px;
  text-align: center;
  padding: 0 20px;
  padding-bottom: 40px;
  transition: all .3s;
}
.profile-card__name {
  font-weight: 700;
  font-size: 24px;
  color: #3399ff;
  text-shadow: 2px 2px 4px black;
  margin-bottom: 15px;
}
.profile-card__txt {
  font-size: 18px;
  font-weight: 500;
  color: #fff;
  text-shadow: 2px 2px 4px black;
  margin-bottom: 15px;
}
.profile-card__txt strong {
  font-weight: 700;
}
.profile-card-loc {
  display: flex;
  justify-content: center;
  align-items: center;
  font-size: 18px;
  font-weight: 600;
  color: #fff;
  text-shadow: 2px 2px 4px black;
}
.profile-card-loc__icon {
  display: inline-flex;
  font-size: 27px;
  margin-right: 10px;
}
.profile-card-inf {
  display: flex;
  justify-content: center;
  flex-wrap: wrap;
  align-items: flex-start;
  margin-top: 35px;
}
.profile-card-inf__item {
  padding: 10px 35px;
  min-width: 150px;
}
@media screen and (max-width: 768px) {
  .profile-card-inf__item {
    padding: 10px 20px;
    min-width: 120px;
  }
}
.profile-card-inf__title {
  font-weight: 700;
  font-size: 27px;
  color: #fff;
  text-shadow: 2px 2px 4px black;
}
.profile-card-inf__txt {
  font-weight: 500;
  margin-top: 7px;
  color: #fff;
  text-shadow: 2px 2px 4px black;
}
.profile-card-social {
  margin-top: 25px;
  display: flex;
  justify-content: center;
  align-items: center;
  flex-wrap: wrap;
}
.profile-card-social__item {
  display: inline-flex;
  width: 55px;
  height: 55px;
  margin: 15px;
  border-radius: 50%;
  align-items: center;
  justify-content: center;
  color: #fff;
  background: #405de6;
  box-shadow: 0px 7px 30px rgba(43, 98, 169, 0.5);
  position: relative;
  font-size: 21px;
  flex-shrink: 0;
  transition: all .3s;
}
@media screen and (max-width: 768px) {
  .profile-card-social__item {
    width: 50px;
    height: 50px;
    margin: 10px;
  }
}
@media screen and (min-width: 768px) {
  .profile-card-social__item:hover {
    transform: scale(1.2);
  }
}
.profile-card-social__item.facebook {
  background: linear-gradient(45deg, #3b5998, #0078d7);
  box-shadow: 0px 4px 30px rgba(43, 98, 169, 0.5);
}
.profile-card-social__item.instagram {
  background: linear-gradient(45deg, #405de6, #5851db, #833ab4, #c13584, #e1306c, #fd1d1d);
  box-shadow: 0px 4px 30px rgba(120, 64, 190, 0.6);
}
.profile-card-social__item.linkedin {
  background: linear-gradient(45deg, #1769ff, #213fca);
  box-shadow: 0px 4px 30px rgba(27, 86, 231, 0.7);
}
.profile-card-social__item.link {
  background: linear-gradient(45deg, #d5135a, #f05924);
  box-shadow: 0px 4px 30px rgba(223, 45, 70, 0.6);
}
.profile-card-social .icon-font {
  display: inline-flex;
}
.profile-card-ctr {
  display: flex;
  justify-content: center;
  align-items: center;
  margin-top: 40px;
}
@media screen and (max-width: 576px) {
  .profile-card-ctr {
    flex-wrap: wrap;
  }
}
.profile-card__button {
  background: none;
  border: none;
  font-family: 'Quicksand', sans-serif;
  font-weight: 700;
  font-size: 19px;
  margin: 15px 35px;
  padding: 15px 40px;
  min-width: 201px;
  border-radius: 50px;
  min-height: 55px;
  color: #fff;
  cursor: pointer;
  backface-visibility: hidden;
  transition: all .3s;
}
@media screen and (max-width: 768px) {
  .profile-card__button {
    min-width: 170px;
    margin: 15px 25px;
  }
}
@media screen and (max-width: 576px) {
  .profile-card__button {
    min-width: inherit;
    margin: 0;
    margin-bottom: 16px;
    width: 100%;
    max-width: 300px;
  }
  .profile-card__button:last-child {
    margin-bottom: 0;
  }
}
.profile-card__button:focus {
  outline: none !important;
}
@media screen and (min-width: 768px) {
  .profile-card__button:hover {
    transform: translateY(-5px);
  }
}
.profile-card__button:first-child {
  margin-left: 0;
}
.profile-card__button:last-child {
  margin-right: 0;
}
.profile-card__button.button--blue {
  background: linear-gradient(45deg, #1da1f2, #0e71c8);
  box-shadow: 0px 4px 30px rgba(19, 127, 212, 0.4);
}
.profile-card__button.button--blue:hover {
  box-shadow: 0px 7px 30px rgba(19, 127, 212, 0.75);
}
.profile-card__button.button--orange {
  background: linear-gradient(45deg, #d5135a, #f05924);
  box-shadow: 0px 4px 30px rgba(223, 45, 70, 0.35);
}
.profile-card__button.button--orange:hover {
  box-shadow: 0px 7px 30px rgba(223, 45, 70, 0.75);
}
.profile-card__button.button--gray {
  box-shadow: none;
  background: #dcdcdc;
  color: #142029;
}
.profile-card-message {
  width: 100%;
  height: 100%;
  position: absolute;
  top: 0;
  left: 0;
  padding-top: 130px;
  padding-bottom: 100px;
  opacity: 0;
  pointer-events: none;
  transition: all .3s;
}
.profile-card-form {
  box-shadow: 0 4px 30px rgba(15, 22, 56, 0.35);
  max-width: 80%;
  margin-left: auto;
  margin-right: auto;
  height: 100%;
  background: #fff;
  border-radius: 10px;
  padding: 35px;
  transform: scale(0.8);
  position: relative;
  z-index: 3;
  transition: all .3s;
}
@media screen and (max-width: 768px) {
  .profile-card-form {
    max-width: 90%;
    height: auto;
  }
}
@media screen and (max-width: 576px) {
  .profile-card-form {
    padding: 20px;
  }
}
.profile-card-form__bottom {
  justify-content: space-between;
  display: flex;
}
@media screen and (max-width: 576px) {
  .profile-card-form__bottom {
    flex-wrap: wrap;
  }
}
.profile-card textarea {
  width: 100%;
  resize: none;
  height: 210px;
  margin-bottom: 20px;
  border: 2px solid #dcdcdc;
  border-radius: 10px;
  padding: 15px 20px;
  color: #324e63;
  font-weight: 500;
  font-family: 'Quicksand', sans-serif;
  outline: none;
  transition: all .3s;
}
.profile-card textarea:focus {
  outline: none;
  border-color: #8a979e;
}
.profile-card__overlay {
  width: 100%;
  height: 100%;
  position: absolute;
  top: 0;
  left: 0;
  pointer-events: none;
  opacity: 0;
  background: rgba(22, 33, 72, 0.35);
  border-radius: 12px;
  transition: all .3s;
}
</style>
<!---->
<div class="wrapper">

  
<div class="profile-card js-profile-card">
  <div class="profile-card__img">
    <img src="imgs/profile.png" alt="profile card">
  </div>

  <div class="profile-card__cnt js-profile-cnt">
    <div class="profile-card__name">Kapil Karekar</div>
    <div class="profile-card__txt">Geeta Automation Technologies</div>
    <div class="profile-card__txt">username: Geeta-01</div>
      <div class="profile-card__txt">GST/PAN/AADHAAR: <strong>12354897</strong></div>
    <div class="profile-card-loc">
      <span class="profile-card-loc__txt">
      <span class="profile-card-loc__icon">
        <svg class="icon"><use xlink:href="#icon-location"></use></svg>
      </span>
        Unitech City Centre Building, 502 Fifth Floor, MG Road, Panaji, Goa 403001
      </span>
    </div>

    <div class="profile-card-inf">
      <div class="profile-card-inf__item">
        <div class="profile-card-inf__title">1.0</div>
        <div class="profile-card-inf__txt">Gold<br><small>rate per point</small></div>
      </div>

      <div class="profile-card-inf__item">
        <div class="profile-card-inf__title">0.5</div>
        <div class="profile-card-inf__txt">Silver<br><small>rate per point</small></div>
      </div>

      <div class="profile-card-inf__item">
        <div class="profile-card-inf__title">0.3</div>
        <div class="profile-card-inf__txt">Bronze<br><small>rate per point</small></div>
      </div>

      <div class="profile-card-inf__item">
        <div class="profile-card-inf__title">15</div>
        <div class="profile-card-inf__txt">Bills<br><small>to be verified</small></div>
      </div>
    </div>
<br>
    <h3 class="profile-card-inf__title">-Follow YASH on-</h3>
    <div class="profile-card-social">
      <a href="https://www.facebook.com/samrdhdesignstudio" class="profile-card-social__item facebook" target="_blank">
        <span class="icon-font">
            <svg class="icon"><use xlink:href="#icon-facebook"></use></svg>
        </span>
      </a>

      <a href="https://www.instagram.com/samrdhdesignstudio/" class="profile-card-social__item instagram" target="_blank">
        <span class="icon-font">
            <svg class="icon"><use xlink:href="#icon-instagram"></use></svg>
        </span>
      </a>

      <a href="https://www.linkedin.com/company/samrdh-design-studio-branding-pvt-ltd/" class="profile-card-social__item linkedin" target="_blank">
        <span class="icon-font">
            <svg class="icon"><use xlink:href="#icon-linkedin"></use></svg>
        </span>
      </a>

      <a href="http://samrdh.in/" class="profile-card-social__item link" target="_blank">
        <span class="icon-font">
            <svg class="icon"><use xlink:href="#icon-link"></use></svg>
        </span>
      </a>

    </div>

    <div class="profile-card-ctr">
      <button class="profile-card__button button--blue js-message-btn">Message Us</button>
      <a href="profilesettings.php" class="profile-card__button button--orange">Edit profile</a>    

    </div>
  </div>

  <div class="profile-card-message js-message">
    <form class="profile-card-form">
      <div class="profile-card-form__container">
        <textarea placeholder="Say something..."></textarea>
      </div>

      <div class="profile-card-form__bottom">
        <button class="profile-card__button button--blue js-message-close">
          Send
        </button>

        <button class="profile-card__button button--gray js-message-close">
          Cancel
        </button>
      </div>
    </form>

    <div class="profile-card__overlay js-message-close"></div>
  </div>

</div>

</div>

<svg hidden="hidden">
<defs>

  <symbol id="icon-location" viewBox="0 0 32 32">
    <title>location</title>
    <path d="M16 31.68c-0.352 0-0.672-0.064-1.024-0.16-0.8-0.256-1.44-0.832-1.824-1.6l-6.784-13.632c-1.664-3.36-1.568-7.328 0.32-10.592 1.856-3.2 4.992-5.152 8.608-5.376h1.376c3.648 0.224 6.752 2.176 8.608 5.376 1.888 3.264 2.016 7.232 0.352 10.592l-6.816 13.664c-0.288 0.608-0.8 1.12-1.408 1.408-0.448 0.224-0.928 0.32-1.408 0.32zM15.392 2.368c-2.88 0.192-5.408 1.76-6.912 4.352-1.536 2.688-1.632 5.92-0.288 8.672l6.816 13.632c0.128 0.256 0.352 0.448 0.64 0.544s0.576 0.064 0.832-0.064c0.224-0.096 0.384-0.288 0.48-0.48l6.816-13.664c1.376-2.752 1.248-5.984-0.288-8.672-1.472-2.56-4-4.128-6.88-4.32h-1.216zM16 17.888c-3.264 0-5.92-2.656-5.92-5.92 0-3.232 2.656-5.888 5.92-5.888s5.92 2.656 5.92 5.92c0 3.264-2.656 5.888-5.92 5.888zM16 8.128c-2.144 0-3.872 1.728-3.872 3.872s1.728 3.872 3.872 3.872 3.872-1.728 3.872-3.872c0-2.144-1.76-3.872-3.872-3.872z"></path>
    <path d="M16 32c-0.384 0-0.736-0.064-1.12-0.192-0.864-0.288-1.568-0.928-1.984-1.728l-6.784-13.664c-1.728-3.456-1.6-7.52 0.352-10.912 1.888-3.264 5.088-5.28 8.832-5.504h1.376c3.744 0.224 6.976 2.24 8.864 5.536 1.952 3.36 2.080 7.424 0.352 10.912l-6.784 13.632c-0.32 0.672-0.896 1.216-1.568 1.568-0.48 0.224-0.992 0.352-1.536 0.352zM15.36 0.64h-0.064c-3.488 0.224-6.56 2.112-8.32 5.216-1.824 3.168-1.952 7.040-0.32 10.304l6.816 13.632c0.32 0.672 0.928 1.184 1.632 1.44s1.472 0.192 2.176-0.16c0.544-0.288 1.024-0.736 1.28-1.28l6.816-13.632c1.632-3.264 1.504-7.136-0.32-10.304-1.824-3.104-4.864-5.024-8.384-5.216h-1.312zM16 29.952c-0.16 0-0.32-0.032-0.448-0.064-0.352-0.128-0.64-0.384-0.8-0.704l-6.816-13.664c-1.408-2.848-1.312-6.176 0.288-8.96 1.536-2.656 4.16-4.32 7.168-4.512h1.216c3.040 0.192 5.632 1.824 7.2 4.512 1.6 2.752 1.696 6.112 0.288 8.96l-6.848 13.632c-0.128 0.288-0.352 0.512-0.64 0.64-0.192 0.096-0.384 0.16-0.608 0.16zM15.424 2.688c-2.784 0.192-5.216 1.696-6.656 4.192-1.504 2.592-1.6 5.696-0.256 8.352l6.816 13.632c0.096 0.192 0.256 0.32 0.448 0.384s0.416 0.064 0.608-0.032c0.16-0.064 0.288-0.192 0.352-0.352l6.816-13.664c1.312-2.656 1.216-5.792-0.288-8.352-1.472-2.464-3.904-4-6.688-4.16h-1.152zM16 18.208c-3.424 0-6.24-2.784-6.24-6.24 0-3.424 2.816-6.208 6.24-6.208s6.24 2.784 6.24 6.24c0 3.424-2.816 6.208-6.24 6.208zM16 6.4c-3.072 0-5.6 2.496-5.6 5.6 0 3.072 2.528 5.6 5.6 5.6s5.6-2.496 5.6-5.6c0-3.104-2.528-5.6-5.6-5.6zM16 16.16c-2.304 0-4.16-1.888-4.16-4.16s1.888-4.16 4.16-4.16c2.304 0 4.16 1.888 4.16 4.16s-1.856 4.16-4.16 4.16zM16 8.448c-1.952 0-3.552 1.6-3.552 3.552s1.6 3.552 3.552 3.552c1.952 0 3.552-1.6 3.552-3.552s-1.6-3.552-3.552-3.552z"></path>
  </symbol>

  <symbol id="icon-facebook" viewBox="0 0 32 32">
    <title>facebook</title>
    <path d="M19 6h5v-6h-5c-3.86 0-7 3.14-7 7v3h-4v6h4v16h6v-16h5l1-6h-6v-3c0-0.542 0.458-1 1-1z"></path>
  </symbol>

  <symbol id="icon-instagram" viewBox="0 0 32 32">
    <title>instagram</title>
    <path d="M16 2.881c4.275 0 4.781 0.019 6.462 0.094 1.563 0.069 2.406 0.331 2.969 0.55 0.744 0.288 1.281 0.638 1.837 1.194 0.563 0.563 0.906 1.094 1.2 1.838 0.219 0.563 0.481 1.412 0.55 2.969 0.075 1.688 0.094 2.194 0.094 6.463s-0.019 4.781-0.094 6.463c-0.069 1.563-0.331 2.406-0.55 2.969-0.288 0.744-0.637 1.281-1.194 1.837-0.563 0.563-1.094 0.906-1.837 1.2-0.563 0.219-1.413 0.481-2.969 0.55-1.688 0.075-2.194 0.094-6.463 0.094s-4.781-0.019-6.463-0.094c-1.563-0.069-2.406-0.331-2.969-0.55-0.744-0.288-1.281-0.637-1.838-1.194-0.563-0.563-0.906-1.094-1.2-1.837-0.219-0.563-0.481-1.413-0.55-2.969-0.075-1.688-0.094-2.194-0.094-6.463s0.019-4.781 0.094-6.463c0.069-1.563 0.331-2.406 0.55-2.969 0.288-0.744 0.638-1.281 1.194-1.838 0.563-0.563 1.094-0.906 1.838-1.2 0.563-0.219 1.412-0.481 2.969-0.55 1.681-0.075 2.188-0.094 6.463-0.094zM16 0c-4.344 0-4.887 0.019-6.594 0.094-1.7 0.075-2.869 0.35-3.881 0.744-1.056 0.412-1.95 0.956-2.837 1.85-0.894 0.888-1.438 1.781-1.85 2.831-0.394 1.019-0.669 2.181-0.744 3.881-0.075 1.713-0.094 2.256-0.094 6.6s0.019 4.887 0.094 6.594c0.075 1.7 0.35 2.869 0.744 3.881 0.413 1.056 0.956 1.95 1.85 2.837 0.887 0.887 1.781 1.438 2.831 1.844 1.019 0.394 2.181 0.669 3.881 0.744 1.706 0.075 2.25 0.094 6.594 0.094s4.888-0.019 6.594-0.094c1.7-0.075 2.869-0.35 3.881-0.744 1.050-0.406 1.944-0.956 2.831-1.844s1.438-1.781 1.844-2.831c0.394-1.019 0.669-2.181 0.744-3.881 0.075-1.706 0.094-2.25 0.094-6.594s-0.019-4.887-0.094-6.594c-0.075-1.7-0.35-2.869-0.744-3.881-0.394-1.063-0.938-1.956-1.831-2.844-0.887-0.887-1.781-1.438-2.831-1.844-1.019-0.394-2.181-0.669-3.881-0.744-1.712-0.081-2.256-0.1-6.6-0.1v0z"></path>
    <path d="M16 7.781c-4.537 0-8.219 3.681-8.219 8.219s3.681 8.219 8.219 8.219 8.219-3.681 8.219-8.219c0-4.537-3.681-8.219-8.219-8.219zM16 21.331c-2.944 0-5.331-2.387-5.331-5.331s2.387-5.331 5.331-5.331c2.944 0 5.331 2.387 5.331 5.331s-2.387 5.331-5.331 5.331z"></path>
    <path d="M26.462 7.456c0 1.060-0.859 1.919-1.919 1.919s-1.919-0.859-1.919-1.919c0-1.060 0.859-1.919 1.919-1.919s1.919 0.859 1.919 1.919z"></path>
  </symbol>

  <symbol id="icon-linkedin" viewBox="0 0 32 32">
    <title>linkedin</title>
    <path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"/>
  </symbol>

  <symbol id="icon-link" viewBox="0 0 32 32">
    <title>link</title>
    <path d="M17.984 11.456c-0.704 0.704-0.704 1.856 0 2.56 2.112 2.112 2.112 5.568 0 7.68l-5.12 5.12c-2.048 2.048-5.632 2.048-7.68 0-1.024-1.024-1.6-2.4-1.6-3.84s0.576-2.816 1.6-3.84c0.704-0.704 0.704-1.856 0-2.56s-1.856-0.704-2.56 0c-1.696 1.696-2.624 3.968-2.624 6.368 0 2.432 0.928 4.672 2.656 6.4 1.696 1.696 3.968 2.656 6.4 2.656s4.672-0.928 6.4-2.656l5.12-5.12c3.52-3.52 3.52-9.248 0-12.8-0.736-0.672-1.888-0.672-2.592 0.032z"></path>
    <path d="M29.344 2.656c-1.696-1.728-3.968-2.656-6.4-2.656s-4.672 0.928-6.4 2.656l-5.12 5.12c-3.52 3.52-3.52 9.248 0 12.8 0.352 0.352 0.8 0.544 1.28 0.544s0.928-0.192 1.28-0.544c0.704-0.704 0.704-1.856 0-2.56-2.112-2.112-2.112-5.568 0-7.68l5.12-5.12c2.048-2.048 5.632-2.048 7.68 0 1.024 1.024 1.6 2.4 1.6 3.84s-0.576 2.816-1.6 3.84c-0.704 0.704-0.704 1.856 0 2.56s1.856 0.704 2.56 0c1.696-1.696 2.656-3.968 2.656-6.4s-0.928-4.704-2.656-6.4z"></path>
  </symbol>
</defs>
</svg>
<!---->


<?php
include("footer.php");
?>

<script>
var messageBox = document.querySelector('.js-message');
  var btn = document.querySelector('.js-message-btn');
  var card = document.querySelector('.js-profile-card');
  var closeBtn = document.querySelectorAll('.js-message-close');

  btn.addEventListener('click',function (e) {
      e.preventDefault();
      card.classList.add('active');
  });

  closeBtn.forEach(function (element, index) {
     console.log(element);
      element.addEventListener('click',function (e) {
          e.preventDefault();
          card.classList.remove('active');
      });
  });
</script>