export default class FormClass {
  constructor (form) {
    this._element = document.forms[form];
  }

  getElement() {
    return this._element;
  }
}