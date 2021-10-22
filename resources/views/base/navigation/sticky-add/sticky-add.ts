class StickyAdd extends HTMLElement {
    private addOptionsContainer: HTMLElement;
    private toggleStickyAddButton: HTMLButtonElement;

    constructor() {
        super();
        this.addOptionsContainer = this.querySelector('.sticky-add-options');
        this.toggleStickyAddButton = this.querySelector(".toggle-sticky-add");
    }

    private handleButtonClick = () => {
      if (this.addOptionsContainer.classList.contains("closed")) {
        this.addOptionsContainer.classList.remove("closed");
      } else {
        this.addOptionsContainer.classList.add("closed");
      }
    }

    connectedCallback() {
      this.toggleStickyAddButton.addEventListener("click", this.handleButtonClick);
    }
}

customElements.define('sticky-add', StickyAdd);
