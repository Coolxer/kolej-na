@vite('resources/sass/auth/components/choose_personality.scss')

<div class="choose-personality">

    <div id="choose-personality__person-btn"
        class="choose-personality__btn choose-personality__btn--selected"
        onclick="amPerson()">
        <i class="fa-solid fa-user choose-personality__icon"></i>
        <span class="choose-personality__text">Osoba</span>
    </div>

    <div id="choose-personality__company-btn" class="choose-personality__btn"
        onclick="amCompany()">
        <i class="fa-solid fa-building choose-personality__icon"></i>
        <span class="choose-personality__text">Firma</span>
    </div>

</div>
