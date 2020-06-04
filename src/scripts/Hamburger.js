export default class Hamburger{
    constructor(){
        this.hamburger = document.querySelector(".hamburger-menu");
        this.menu = document.querySelector(".header__menu");
    }

    events(){
        this.hamburger.addEventListener("click", () => this.toggleTheMenu());
        window.addEventListener("resize", () => this.onResize());
    }

    toggleTheMenu(){
        this.menu.classList.toggle("header__menu--is-visible");
    }

    onResize(){
        let width = window.innerWidth;

        if(width >= 900){
            this.menu.classList.remove("header__menu--is-visible");
        }
    }
}