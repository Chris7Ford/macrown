export class ToastNotification {
  private element: HTMLElement;
  private textElement: HTMLSpanElement;

  constructor() {
    this.element = document.querySelector("toast-notification div");
    this.textElement = this.element.querySelector("span");
  }

  public displaySuccessMessage = (message) => {
    this.element.classList.remove("hidden");
    this.element.classList.add("border-green-600");
    this.element.classList.add("bg-green-300");
    this.textElement.innerText = message;
    setTimeout(this.close, 5000);
  }

  public displayFailureMessage = (message) => {
    this.element.classList.remove("hidden");
    this.element.classList.add("border-red-600");
    this.element.classList.add("bg-red-300");
    this.textElement.innerText = message;
    setTimeout(this.close, 5000);
  }

  public close = () => {
    this.element.classList.add("hidden");
    this.element.classList.remove("border-red-600");
    this.element.classList.remove("bg-red-300");
    this.element.classList.remove("border-green-600");
    this.element.classList.remove("bg-green-300");
  }

  connectedCallback() {
    //this.element.addEventListener("click", this.close);
  }
}
