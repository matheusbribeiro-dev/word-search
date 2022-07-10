export default class WordSearchClass {
  constructor ({form, words}) {
    this._form = form;
    this._words = words;
  }

  initFeatures() {
    this._words.accordionInWords();

    return this;
  }
}