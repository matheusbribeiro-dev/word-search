
export default class DomSelector {
  constructor (selector) {
    this.selector = selector;
    this._element = this.selectElement();
  }

  selectElement() {
    return document.querySelector(this.selector);
  }

  addEvent(event, callback) {
    this._element.addEventListener(event, callback);
    return this;
  }
}