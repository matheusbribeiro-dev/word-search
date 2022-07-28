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

    console.log(response.data);
  }

  formSubmit() {
    const form = this.getElement();

    form.addEventListener('submit', async (event) => {
      event.preventDefault();

      await this._saveWord(form);
    });
  }
}