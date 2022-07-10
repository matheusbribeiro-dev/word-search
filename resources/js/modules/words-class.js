export default class WordsClass {
  constructor () {
    this._elements = document.querySelectorAll('.words');
  }

  _getChildren() {
    return document.querySelectorAll('.word-card');
  }

  _toggleActiveClass(element) {
    element.classList.toggle('active');

    return this;
  }

  accordionInWords() {
    const titles = document.querySelectorAll('.word-card-title');

    titles.forEach((title) => {
      const wordCardMeaning = title.nextElementSibling;

      title.addEventListener('click', (event) => this._toggleActiveClass(wordCardMeaning));
    });
  }
}