class MainNavigation extends HTMLElement {
    private burger: NodeListOf<Element>;
    private menu: NodeListOf<Element>;
    private close: NodeListOf<Element>;
    private backdrop: NodeListOf<Element>;

    constructor() {
        super();
        this.burger = this.querySelectorAll('.navbar-burger');
        this.menu = this.querySelectorAll('.navbar-menu');
        this.close = this.querySelectorAll('.navbar-close');
        this.backdrop = this.querySelectorAll('.navbar-backdrop');
    }

    connectedCallback() {
        if (this.burger.length && this.menu.length) {
            for (var i = 0; i < this.burger.length; i++) {
                this.burger[i].addEventListener('click', () => {
                    for (var j = 0; j < this.menu.length; j++) {
                        this.menu[j].classList.toggle('hidden');
                    }
                });
            }
        }
        if (this.close.length) {
            for (var i = 0; i < this.close.length; i++) {
                this.close[i].addEventListener('click', () => {
                    for (var j = 0; j < this.menu.length; j++) {
                        this.menu[j].classList.toggle('hidden');
                    }
                });
            }
        }

        if (this.backdrop.length) {
            for (var i = 0; i < this.backdrop.length; i++) {
                this.backdrop[i].addEventListener('click', () => {
                    for (var j = 0; j < this.menu.length; j++) {
                        this.menu[j].classList.toggle('hidden');
                    }
                });
            }
        }
    }
}

customElements.define('main-navigation', MainNavigation);
