import Toastify from 'toastify-js';

export default class FormClass {
  constructor ({form, api}) {
    this._element = document.forms[form];
    this._api = api;
  }

  getElement() {
    return this._element;
  }

  async _saveWord(form) {
    const word = this.getElement().word;
    const response = await this._api.post('/salvar-palavra', new FormData(form));

    if (response.data.message) {
      Toastify({
        text: response.data.message,
        duration: 3000,
        close: true,
        gravity: "top", // `top` or `bottom`
        position: "right", // `left`, `center` or `right`
        stopOnFocus: true, // Prevents dismissing of toast on hover
        style: {
          background: "red",
        }
      }).showToast();
    }
  }

  formSubmit() {
    const form = this.getElement();

    form.addEventListener('submit', async (event) => {
      event.preventDefault();

      await this._saveWord(form);
    });
  }
}