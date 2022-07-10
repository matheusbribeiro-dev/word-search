import WordSearchClass from '../modules/word-search-class'
import FormClass from '../modules/form-class'
import WordsClass from '../modules/words-class'

export default function () {
  const wordSearch = new WordSearchClass({
    form: new FormClass('wordSearchForm'),
    words: new WordsClass()
  });
}